<?php

namespace App\Livewire\User;

use LDAP\Result;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Spatie\Permission\Models\Role;

class UserTable extends Component
{
    use WithPagination;
    public $perPage = 5;
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function delete($id)
    {
        if ($id == auth()->user()->id) {
            flash(__('Cannot delete your self'), 'error');
            return;
        }
        $user = User::find($id);
        $user->delete();
        flash(__('Success, account deleted'), 'success');
    }

    #[Title('users')]
    public function render()
    {
        $roles = Role::all();
        return view(
            'livewire.user.user-table',
            [
                'roles' => $roles,
                'users' => User::with('roles')->search($this->search)->simplePaginate($this->perPage),
            ]
        );
    }
}
