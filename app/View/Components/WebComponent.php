<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WebComponent extends Component
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
        $carts = session()->get('cart');
        $count_array = 0;
        if ($carts) $count_array = count($carts);
        

        return view('components.web-component', ['count_array'=>$count_array]);
    }
}
