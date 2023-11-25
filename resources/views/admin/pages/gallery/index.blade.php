@extends('admin.layouts.master')

@section('content')

@push('button')
<button type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#editModal" >Add New Image</button>
@endpush

<section class="section">

    <div class="row">
        @foreach ($galleries as $item)
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">

                    <img class="img-fluid w-100" src="{{ asset('assets/images/gallery/'.$item->image) }}" id="image-preview" alt=" Image">

                    </div>
                </div>

                <div class="card-footer text-center">
                    <a  href="{{ route('admin.gallery.edit',$item->id) }}" class="btn btn-info rounded-pill" ><i class ="fa fa-edit"></i>Edit</a>

                    <button type="button" class="btn btn-danger rounded-pill" data-toggle="modal" data-target="#deleteModal{{ $item->id }}"><i class ="fa fa-trash"></i>Delete</button>

                </div>
            </div>
        </div>
         {{-- Delete modal --}}
         <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">Are you sure?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this item?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <form method="POST" action="{{ route('admin.gallery.destroy', $item->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    {{-- modal --}}
    @endforeach

    </div>


    <div class="modal fade text-left" id="editModal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Add New Image </h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('admin.gallery.store') }} " method="post" enctype="multipart/form-data">
            @csrf

            <div class="modal-body">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="basicInput">Title</label>
                        <input type="text" name="title"  class="form-control form-control-lg" placeholder="Enter Gallery Title"  required >
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="basicInput">Upload Image </label>
                    <div class="input-group mb-3">

                        <input type="file" name="image"  class="form-control"
                            aria-label="image" aria-describedby="basic-addon1" accept="image/*" >
                    </div>
                </div>
                <p class="text-warning mb-0">Only jpg, jpeg, png image allowed.</p>

            </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1" >
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Upload</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

</section>

@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
@endpush

