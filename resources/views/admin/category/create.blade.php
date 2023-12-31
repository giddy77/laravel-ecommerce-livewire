@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Category<a href="" class="btn btn-primary btn-sm float-end">add category</a></h3>
            </div>
            @if (session('message'))
            <div  class="alert alert-success">{{ session('message') }} </div>
            @elseif(session('error'))
            <div  class="alert alert-danger">{{ session('error') }} </div>
            @endif
            <div class="card-body">
                <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control"/>
                            @error('name')<span class="text-danger">{{$message}}</span>   @enderror                           
                           
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" class="form-control"/>
                            @error('slug')<span class="text-danger">{{$message}}</span>   @enderror     
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                            @error('description')<span class="text-danger">{{$message}}</span>   @enderror     
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control"/>
                            @error('image')<span class="text-danger">{{$message}}</span>   @enderror     
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="status">Status</label><br><br>
                            <input type="checkbox" name="status"/>   
                        </div>
                        <div class="col-md-12">
                            <h4>SEO tags</h4>
                            <div class="col-md-12 mb-3">
                                <label for="meta_keyword">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control"/>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_keyword">Meta Keyword</label>
                                <input type="text" name="meta_keyword" class="form-control"/>
                                @error('meta_keyword')<span class="text-danger">{{$message}}</span>   @enderror     
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_description">Meta Description</label>
                                <input type="text" name="meta_description" class="form-control"/>
                                @error('meta_description')<span class="text-danger">{{$message}}</span>   @enderror     
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary btn-sm float-end">Create</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection()
