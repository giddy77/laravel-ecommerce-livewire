<?php

namespace App\Livewire\Admin\Brand;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Brand;

class Index extends Component
{
    public $name, $slug, $status;

    public function rules()
    {
        return [
            'name'=>'required|string',
            'slug'=>'required|string',
            'status'=>'nullable'
        ];
    }

    public function storeBrand()
    {
        $validated = $this->validate();
        
        Brand::create([
            'name'=>$this->name,
            'slug' => Str::slug($this->slug),
            'status'=>$this->status == true ? '1':'0'
        ]);
        session()->flash('message', 'Brand added successfuly');
    }
    public function render()
    {
        return view('livewire.admin.brand.index')
                    ->extends('layouts.admin')
                    ->section('content');
    }
}
