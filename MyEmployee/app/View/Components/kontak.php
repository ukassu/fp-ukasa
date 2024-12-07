<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class kontak extends Component
{
    /**
     * Create a new component instance.
     */
    public $pegawai;
    public $action;
    public $users;

    public function __construct($pegawai, $action, $users)
    {
        $this->pegawai = $pegawai;
        $this->action = $action;
        $this->users = $users;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.kontak');
    }
}