
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Category<a href="{{ route('category.create')}}" class="btn btn-primary btn-sm float-end">add category</a></h3>
            </div>
            @if (session('message'))
            <div  class="alert alert-success">{{ session('message') }} </div>
            @elseif(session('error'))
            <div  class="alert alert-danger">{{ session('error') }} </div>
            @endif
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->status == '1' ? 'Hidden':'Visible' }}</td>
                            <td>
                                <a href="{{ route('category.edit',$category) }}" class="btn btn-success">Edit</a>
                                {{-- <button type="submit" data-bs-toggle="modal" data-bs-target="#deleteModal" wire.click="deleteCategory({{$category->id}})" class="btn btn-danger">Delete</button> --}}
                                <button type="button" class="btn btn-danger"
                                          wire:click="deleteCategory({{$category->id}})"
                                          wire:confirm="Are you sure you want to delete this category?">Delete</button>
                            </td>
                        </tr>                           
                        @empty
                            <h5>no data</h5>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

