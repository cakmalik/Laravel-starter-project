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

    public function delete($id)
    {
        if ($id == auth()->user()->id) {
            flash('message', 'You can\'t delete yourself');
            return;
        }
        $user = User::find($id);
        $user->delete();
        flash('Hurray', 'success');
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
