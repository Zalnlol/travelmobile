<?php

namespace App\View\Components;

use Illuminate\View\Component;

class searchbox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $hangxe;
    public $ngaygio;
    public function __construct($hangxe,$searchinfo)
    {
        $this->hangxe=$hangxe;
        $this->ngaygio=$searchinfo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.searchbox');
    }
}




