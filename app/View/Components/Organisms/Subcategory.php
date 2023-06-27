<?php

namespace App\View\Components\Organisms;

use Illuminate\View\Component;

class Subcategory extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $dataSubcategory, $parentCategory;

    public function __construct($dataSubcategory, $parentCategory)
    {
        $this->dataSubcategory = $dataSubcategory;
        $this->parentCategory = $parentCategory;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('client.components.organisms.subcategory');
    }
}
