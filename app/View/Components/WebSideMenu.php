<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\CategoryTable;

class WebSideMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $categories = CategoryTable::all();
        return view('components.web-side-menu', ['categories'=>$categories]);
    }
}
