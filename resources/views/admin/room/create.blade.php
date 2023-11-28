@extends('admin.layouts.master')

@section('content')


<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Create New Room</h4>
        </div>
        <hr>

        <div class="card-body">
            <form action="{{ route('admin.room.store') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row">

                <div class="col-md-12">
                    <div class="row mb-2">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Room Title</label>
                                <input type="text" name="title" class="form-control form-control-lg" id="basicInput" placeholder="Room101"  required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact-info-vertical"  class="mb-2">Room Type</label>
                                <select name="room_type"  class="form-select form-control-lg" >
                                    @foreach($roomtypes as $rt)
                                    <option value="{{$rt->id}}">{{$rt->name}}</option>
                                    @endforeach

                                </select>
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


