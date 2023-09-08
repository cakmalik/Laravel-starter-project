<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }
        return view('layouts.app');
    }
}
