@extends('master')

@section('content')
<div id="background" data-bgimage="url({{ asset('assets/frontend/images/background/2.jpg') }}) fixed"></div>
<div id="content-absolute">

    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Booking</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="de-content-overlay">
                        <form  id='contact_form' action="{{ route('booking.store') }}" method="post">
                            @csrf
                            <div id="step-1" class="row">

                                <div class="col-md-12 mb10">
                                    <h4>Check In Date</h4>
                                    <input type="date"  class="form-control checkin-date" min="{{ now()->format('Y-m-d') }}" name="checkin_date" value="" required>

                                    <h4>Check Out Date</h4>
                                    <input type="date"  class="form-control" min="{{ now()->format('Y-m-d') }}" name="checkout_date" value="" required>

                                    <div class="guests-n-rooms">
                                        <div class="row">
                                            <div class="col-md-6 text-center">
                                                <h4>Adult</h4>
                                                <div class="de-number">
                                                    <span class="d-minus">-</span>
                                                    <input type="text" name="adults" value="1">
                                                    <span class="d-plus">+</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <h4>Children</h4>
                                                <div class="de-number">
                                                    <span class="d-minus">-</span>
                                                    <input type="text" name="children" value="0">
                                                    <span class="d-plus">+</span>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-4">
                                                <h4>Room</h4>
                                                <div id="d-room-count" class="de-number">
                                                    <span class="d-minus">-</span>
                                                    <input id="room-count" type="text" name="roomcount" value="1">
                                                    <span class="d-plus">+</span>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="select-room">
                                <h4>Select Room</h4>
                                <select id="room-type" class="form-control room-list" name="room_id" required>

                                </select>
                            </div>

                            <div id="step-2" class="row">
                                <h4>Enter your details</h4>

                                <div class="col-md-6">
                                    <div id='name_error' class='error'>Please enter your name.</div>
                                    <div>
                                        <input type='text' name='name' id='name' class="form-control" placeholder="Your Name" required>
                                    </div>

                                    <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                    <div>
                                        <input type='email' name='email' id='email' class="form-control" placeholder="Your Email" required>
                                    </div>

                                    <div id='phone_error' class='error'>Please enter your phone number.</div>
                                    <div>
                                        <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id='message_error' class='error'>Please enter your message.</div>
                                    <div>
                                        <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <input type="hidden" name="roomprice" class="room-price" value="" />

                                <div class="col-md-12">
                                    <p id='submit' class="mt20">
                                        <input type='submit' id='send_message' value='Submit Form' class="btn btn-line">
                                    </p>
                                </div>
                            </div>
                        </form>
                        <div id='success_message' class='success'>Your reservation has been sent successfully.</div>
                        <div id='error_message' class='error'>Sorry, error occured this time sending your message.</div>
                    </div>
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
                        _html+='<option data-price="'+row.roomtype.price+'"  value="'+row.room.id+'">'+row.room.title+'-'+row.roomtype.name+'</option>';
                    });
                    $(".room-list").html(_html);

                    var _selectedPrice=$(".room-list").find('option:selected').attr('data-price');
                    $(".room-price").val(_selectedPrice);
                    $(".show-room-price").text(_selectedPrice);

                }
            });
        });

        $(document).on("change",".room-list",function(){
            var _selectedPrice=$(this).find('option:selected').attr('data-price');
            $(".room-price").val(_selectedPrice);
            $(".show-room-price").text(_selectedPrice);
        });

    });
</script>
@endpush
