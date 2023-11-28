@extends('admin.layouts.master')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Banner Update</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.banner.update') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row">

                <div class="col-md-12 mb-2">
                    <div class="form-group">
                        <label for="basicInput" class="mb-2">Enter Title</label>
                        <input type="text" name="banner_title" class="form-control form-control-lg" id="basicInput" value="{{ $banner->banner_title }}"  required>
                    </div>
                </div>

                <div class="col-md-12 mb-2">
                    <div class="form-group">
                        <label for="basicInput" class="mb-2">Enter Sub-Title</label>
                        <input type="text" name="banner_subtitle" class="form-control form-control-lg" id="basicInput" value="{{ $banner->banner_sub_title }}"  required>
                    </div>
                </div>

                <div class="form-group col-md-12">
                    <label class="col-lg-6 mb-2">Upload Background Video  <span class="required-label">*</span></label>
                    <div class="col-lg-12">

                        <div class="input-file input-file-image mt-2">

                            <input type="file" class="form-control " id="uploadbgImg" name="banner_bg_video" >
                        </div>
                    </div>
                    <p class="text-warning mb-0">Only mp4 video allowed.Maximum size 10 Mb allowed.</p>
                </div>

                <div class="form-group col-md-12">
                    <label class="col-lg-4 mb-2">Upload Background Image  <span class="required-label">*</span></label>
                    <div class="col-lg-12">
                        @if ($banner->image != null )
                        <img class="img-upload-preview" width="auto" height="auto" style="max-height: 350px" id="image-preview2"   src="{{asset('assets/images/banner/' .$banner->image)}}" alt="preview">
                        @else
                        <img class="img-upload-preview" width="auto" height="auto" style="max-height: 350px"  src="http://placehold.it/950x730" alt="preview">
                        @endif

                        <div class="input-file input-file-image mt-2">

                            <input type="file" class="form-control " id="uploadImg" name="banner_img" accept="image/*" hidden >
                            <label for="uploadImg" class="btn btn-primary rounded-pill "><i class="fa fa-file-image"></i> Upload a Image</label>
                        </div>
                    </div>
                    <p class="text-warning mb-0">Try to upload 1920x1280 </p>
                    <p class="text-warning mb-0">Only jpg, jpeg, png image allowed.</p>

                </div>

                <button type="submit" class="btn btn-success me-1 mb-1">Submit</button>



            </form>

            </div>
        </div>
    </div>
</section>
@endsection
@push('js')

<script>
    function previewImage2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#image-preview2').attr('src', e.target.result).show();

            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#uploadImg').on('change', function() {
        previewImage2(this);
    });

</script>
@endpush


