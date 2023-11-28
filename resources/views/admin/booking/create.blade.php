@extends('admin.layouts.master')

@section('content')


<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ $page_title }}</h4>
        </div>
        <hr>

        <div class="card-body">
            <form action="{{ route('admin.booking.store') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row">


                <div class="col-md-12">
                    <div class="row mb-2">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Check In Date</label>
                                <input type="date" name="checkin_date" class="form-control form-control-lg checkin-date" id="basicInput"  required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Check Out Date</label>
                                <input type="date" name="checkout_date" class="form-control form-control-lg " id="basicInput"  required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact-info-vertical"  class="mb-2">Select User</label>
                                <select name="user_id"  class="form-select" >
                                    <option value="">Select</option>

                                    @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact-info-vertical"  class=" mb-2">Select Room</label>
                                <select id="room_type"  class="form-select room-list" name="room_id" required>


                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Adults</label>
                                <input type="number" name="adults" class="form-control form-control-lg " id="basicInput"  required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Children</label>
                                <input type="number" name="children" class="form-control form-control-lg " id="basicInput"  required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter Name</label>
                                <input type="text" name="name" class="form-control form-control-lg " id="basicInput"  required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter Email</label>
                                <input type="email" name="email" class="form-control form-control-lg " id="basicInput"  required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter Phone</label>
                                <input type="text" name="phone" class="form-control form-control-lg " id="basicInput"  required>
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

<script type="text/javascript">
    $(document).ready(function(){
        $(".checkin-date").on('blur',function(){
            var _checkindate=$(this).val();
            // Ajax
            $.ajax({
                url:"{{url('booking')}}/available-rooms/"+_checkindate,
                dataType:'json',
                beforeSend:function(){
                    $(".room-list").html('<option>--- Loading ---</option>');
                },
                success:function(res){
                    var _html='';
                    $.each(res.data,function(index,row){
                        _html+='<option  value="'+row.room.id+'">'+row.room.title+'-'+row.roomtype.name+'</option>';
                    });
                    $(".room-list").html(_html);

                    console.log($data);

                }
            });
        });



    });
</script>
@endpush
