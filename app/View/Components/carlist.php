<?php

namespace App\View\Components;

use Illuminate\View\Component;

class carlist extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $danhsachxe;
    public $searchinfo;
    public function __construct($danhsachxe1,$searchinfo)
    {
        $this->danhsachxe=$danhsachxe1;
        $this->searchinfo=$searchinfo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.carlist');
    }
}
