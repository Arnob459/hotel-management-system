@extends('admin.layouts.master')

@section('content')


<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Create New Room</h4>
        </div>
        <hr>

        <div class="card-body">
            <form action="{{ route('admin.rooms.store') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row">

                <div class="col-md-6">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter Name</label>
                                <input type="text" name="name" class="form-control form-control-lg" id="basicInput"  required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter Quantity</label>
                                <input type="number" name="quantity" class="form-control form-control-lg" id="basicInput"  required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter Area</label>
                                <input type="text" name="area" class="form-control form-control-lg" id="basicInput"  required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter Guest limit per room</label>
                                <input type="text" name="guest" class="form-control form-control-lg" id="basicInput"  required>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter price</label>
                                <input type="number" name="price" class="form-control form-control-lg" id="basicInput"  required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter Short Text</label>
                                <textarea type="text" cols="5" rows="8" class="form-control form-control-lg"  name="short_text"  required> </textarea>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-md-12">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter room Overview</label>
                                <textarea type="text" cols="5" rows="8" class="form-control form-control-lg"  name="description"  required> </textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter room facility</label>
                                <textarea type="text" cols="5" rows="8" class="form-control form-control-lg"  name="facility"  required> </textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Upload Images</label>
                                <input type="file" name="images[]" class="form-control form-control-lg" id="basicInput"  multiple accept="image/*">
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


