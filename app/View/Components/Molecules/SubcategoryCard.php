<?php

namespace App\View\Components\Molecules;

use Illuminate\View\Component;

class SubcategoryCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $path, $name, $width, $id, $parentCategory;

    public function __construct($id, $parentCategory, $path, $name, $width = null)
    {
        $this->id = $id;
        $this->path = $path;
        $this->name = $name;
        $this->parentCategory = $parentCategory;
        $this->width = $width ?? "100%";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('client.components.molecules.subcategory-card');
    }
}
