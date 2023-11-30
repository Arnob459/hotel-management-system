@extends('admin.layouts.master')

@section('content')

<div class="page-content">
    <section class="row">
        <div class="col-12 ">
                <div class="card widget-todo">
                    <form method="post" action="{{ route('admin.find.available') }}">
                        @csrf

                        <div class="card-header ">

                            <div class="row">
                                <div class="col-md-3">
                                    <label for="checkin_date">Check-in Date:</label>
                                    <input class="form-control" type="date" id="checkin_date" min="{{ now()->format('Y-m-d') }}" name="checkin_date" value="{{ old('checkin_date', $_REQUEST['checkin_date'] ?? '') }}" required>
                                </div>
                                <div class="col-md-3">

                                    <label for="checkout_date">Check-out Date:</label>
                                    <input type="date" class="form-control" id="checkout_date" min="{{ now()->format('Y-m-d') }}" name="checkout_date" value="{{ old('checkout_date', $_REQUEST['checkout_date'] ?? '') }}" required>
                                </div>

                                <div class="col-md-3 ">

                                    <button type="submit" class="btn btn-info form-control mt-4  ">Search</button>

                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>

    <section class="row">
        @if($availableRooms->isEmpty())
        <p>No available rooms for the selected dates.</p>
    @else
                <div class="row">

                @foreach ($availableRooms as $item)

                    <div class="col-md-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body ">
                                <div class="row">
                                        <h6 >{{ $item->title }}</h6>
                                        <h6 class="font-extrabold mb-0">{{ $item->roomtype->name }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif
            </div>
    </section>
</div>

@endsection
