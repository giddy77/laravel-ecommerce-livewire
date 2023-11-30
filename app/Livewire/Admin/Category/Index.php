<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Index extends Component
{

    public $category_id;


    public function deleteCategory($category_id)
    {
        $category = Category::find($category_id);

        $path = 'uploads/category/'.$category->image;

        // dd($path);
        if(File::exists($path)){
            File::delete($path);
        }
        $category->delete();
        session()->flash('message', 'deleted successfully');
    }

    public function render()
    {
        $categories = Category::latest()->get();
        return view('livewire.admin.category.index',['categories'=>$categories]);
    }
}
