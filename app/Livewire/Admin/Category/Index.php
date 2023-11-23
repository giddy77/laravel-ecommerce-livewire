<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $categories = Category::latest()->get();
        return view('livewire.admin.category.index',['categories'=>$categories]);
    }
}
