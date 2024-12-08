<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class info extends Component
{
    /**
     * Create a new component instance.
     */
    public $pegawai;
    public $action;

    public function __construct($pegawai, $action)
    {
        $this->pegawai = $pegawai;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.info');
    }
    
}
