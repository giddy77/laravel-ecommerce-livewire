@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Category</h3>
            </div>
            @if (session('message'))
            <div  class="alert alert-success">{{ session('message') }} </div>
            @elseif(session('error'))
            <div  class="alert alert-danger">{{ session('error') }} </div>
            @endif
            <div class="card-body">
                <form action="{{route('category.update',$category)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{$category->name}}" class="form-control"/>
                            @error('name')<span class="text-danger">{{$message}}</span>   @enderror                           
                           
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" value="{{$category->slug}}" class="form-control"/>
                            @error('slug')<span class="text-danger">{{$message}}</span>   @enderror     
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="description">Description</label>
                            <textarea name="description"  class="form-control" rows="3">{{$category->description}}</textarea>
                            @error('description')<span class="text-danger">{{$message}}</span>   @enderror     
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control"/>
                            <img src="{{ asset('/uploads/category/'.$category->image) }}" width="60px" height="60px" alt="">
                            @error('image')<span class="text-danger">{{$message}}</span>   @enderror     
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="status">Status</label><br><br>
                            <input type="checkbox" name="status" {{$category->status == '1' ? 'checked':''}}/>   
                        </div>
                        <div class="col-md-12">
                            <h4>SEO tags</h4>
                            <div class="col-md-12 mb-3">
                                <label for="meta_keyword">Meta Title</label>
                                <input type="text" name="meta_title" value="{{$category->meta_title}}" class="form-control"/>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_keyword">Meta Keyword</label>
                                <input type="text" name="meta_keyword" value="{{$category->meta_keyword}}" class="form-control"/>
                                @error('meta_keyword')<span class="text-danger">{{$message}}</span>   @enderror     
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_description">Meta Description</label>
                                <input type="text" name="meta_description" value="{{$category->meta_description}}" class="form-control"/>
                                @error('meta_description')<span class="text-danger">{{$message}}</span>   @enderror     
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary btn-sm float-end">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection()
