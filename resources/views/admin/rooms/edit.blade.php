@extends('admin.layouts.master')

@section('content')


<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Update Room's Information</h4>
        </div>
        <hr>

        <div class="card-body">
            <form action="{{ route('admin.rooms.update',$room->id) }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row">

                <div class="col-md-6">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter Name</label>
                                <input type="text" name="name" class="form-control form-control-lg" id="basicInput" value="{{ $room->name }}" required >
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter Quantity</label>
                                <input type="number" name="quantity" class="form-control form-control-lg" id="basicInput" value="{{ $room->quantity }}" required  >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter Area</label>
                                <input type="text" name="area" class="form-control form-control-lg" id="basicInput" value="{{ $room->area }}" required  >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact-info-vertical"  class="mb-2">Status</label>
                            <select name="status"  class="form-select form-control-lg" >
                                <option value="1"@if ($room->status == '1') selected @endif>Active</option>
                                <option value="0"@if ($room->status != '1') selected @endif>Deactive</option>

                            </select>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter price</label>
                                <input type="number" name="price" class="form-control form-control-lg" id="basicInput" value="{{ $room->price }}" required  >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter Guest limit per room</label>
                                <input type="text" name="guest" class="form-control form-control-lg" id="basicInput" value="{{ $room->guest }}" required  >
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter Short Text</label>
                                <textarea type="text" cols="5" rows="5" class="form-control form-control-lg"  name="short_text"  required > {{ $room->short_text }} </textarea>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-md-12">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter room Overview</label>
                                <textarea type="text" cols="5" rows="8" class="form-control form-control-lg"  name="description" required >{{ $room->description }} </textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter room facility</label>
                                <textarea type="text" cols="5" rows="8" class="form-control form-control-lg"  name="facility" required >{{ $room->facility }} </textarea>
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

@endsection


