@extends('admin.layouts.master')

@section('content')


<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> offer Edit</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.offer.update',$offer->id) }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row">

                <div class="form-group col-md-4">
                    <label class="col-lg-6 mb-2 ">Upload image  <span class="required-label">*</span></label>

                    <div class="form-group ">
                        <img  src="{{ asset('assets/images/offer/'.$offer->image) }}" alt="Image Preview" id="image-preview"  width="auto" height="auto"
                        style="max-height: 200px;" >
                    </div>

                    <div class="col-lg-12 mb-3">
                        <div class="input-file input-file-image">

                            <input type="file" class="form-control " id="image" name="image" accept="image/*" hidden >
                            <label for="image" class="btn btn-primary rounded-pill "><i class="fa fa-file-image"></i> Upload </label>
                        </div>
                    </div>
                    <p class="text-warning mb-0">Image Will Resize 700x700 px</p>
                    <p class="text-warning mb-0">Only jpg, jpeg, png image allowed.</p>
                </div>


                <div class="col-md-8">
                    <div class="row mb-2">
                        <div class="col-md-12 mb-3">
                            <div class="form-group ">
                                <label for="basicInput"> Title</label>
                                <input type="text" name="title" class="form-control form-control-lg" id="basicInput" value="{{ $offer->title }}" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput"> Short Text</label>
                                <textarea type="text" cols="2" rows="3" class="form-control form-control-lg"  name="subtitle"  required> {{ $offer->short_text }} </textarea>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group ">
                                <label for="basicInput"> Section</label>
                                <input type="text" name="section" class="form-control form-control-lg" id="basicInput" value="{{ $offer->section }}" required>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group ">
                                <label for="basicInput"> date</label>
                                <input type="text" name="date" class="form-control form-control-lg" id="basicInput" value="{{ $offer->date }}" required>
                            </div>
                        </div>
                    </div>

                </div>

                <button type="submit" class="btn btn-success  me-1 mb-1">Submit</button>

            </form>

            </div>
        </div>
    </div>
</section>


@endsection


@push('js')
<script>
    function previewImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#image-preview').attr('src', e.target.result).show();
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#image').on('change', function() {
        previewImage(this);
    });
</script>
@endpush
