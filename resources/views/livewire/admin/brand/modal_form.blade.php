<!-- Modal -->
<div wire.ignore.self class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addBrandModalLabel">Add Brand</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire.submit.prevent="storeBrand">
                <div class="modal-body">
                <div class="mb-3">
                    <label for="">Brand Name</label>
                    <input type="text" wire.model.defer="name" class="form-control">
                    @error('name')<span class="text-danger">{{$message}}</span>@enderror               
                    
                </div>
                <div class="mb-3">
                    <label for="">Brand Slug</label>
                    <input type="text" wire.model.defer="slug" class="form-control">
                    @error('slug')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" wire.model.defer="status">  checked=hidden, unchecked=visible
                    @error('status')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
