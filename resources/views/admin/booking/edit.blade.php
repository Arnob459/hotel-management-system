@extends('admin.layouts.master')

@section('content')


<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ $page_title }}</h4>
        </div>
        <hr>

        <div class="card-body">
            <form action="{{ route('admin.booking.update',$booking->id) }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row">


                <div class="col-md-12">
                    <div class="row mb-2">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Check In Date</label>
                                <input type="date" name="checkin_date" class="form-control form-control-lg checkin-date" id="basicInput" value="{{ $booking->checkin_date }}"  required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Check Out Date</label>
                                <input type="date" name="checkout_date" class="form-control form-control-lg " id="basicInput" value="{{ $booking->checkout_date }}"  required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact-info-vertical"  class="mb-2">Select User</label>
                                <select name="user_id"  class="form-select" >
                                    <option value="">Select</option>

                                    @foreach($users as $user)
                                    <option value="{{$user->id}}" @if ($booking->user_id == $user->id)
                                        selected
                                    @endif>{{$user->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact-info-vertical"  class=" mb-2">Select Room</label>
                                <select id="room_type"   class="form-select room-list" name="room_id" required>
                                    <option value="{{ $booking->room_id }}">{{ $booking->room->title }},{{ $booking->room->roomtype->name }}</option>



                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Adults</label>
                                <input type="number" name="adults" class="form-control form-control-lg " id="basicInput" value="{{ $booking->total_adults }}"  required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Children</label>
                                <input type="number" name="children" class="form-control form-control-lg " id="basicInput" value="{{ $booking->total_children }}"  required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter Name</label>
                                <input type="text" name="name" class="form-control form-control-lg " id="basicInput" value="{{ $booking->name }}"  required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter Email</label>
                                <input type="email" name="email" class="form-control form-control-lg " id="basicInput" value="{{ $booking->email }}"  required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Enter Phone</label>
                                <input type="text" name="phone" class="form-control form-control-lg " id="basicInput" value="{{ $booking->phone }}"  required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="contact-info-vertical"  class="mb-2">Payment Status</label>
                                <select name="payment_status"  class="form-select" >
                                    <option value="1"@if ($booking->payment_status == '1') selected @endif>Completed</option>
                                    <option value="0"@if ($booking->payment_status == '0') selected @endif>Pending</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput" class="mb-2">Message</label>
                                <textarea type="text" cols="5" rows="5" name="message" class="form-control form-control-lg " id="basicInput" disabled>{{ $booking->message }}</textarea>
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
