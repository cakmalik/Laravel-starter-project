<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

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

    public function render()
    {
        return view(
            'livewire.user.user-table',
            [
                'users' => User::with('roles')->search($this->search)->simplePaginate($this->perPage),
            ]
        );
    }
}
