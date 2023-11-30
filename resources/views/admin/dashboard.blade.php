@extends('admin.layouts.master')

@section('content')

<div class="page-content">
    <section class="row">
        <div class="col-12 ">
            <div class="row">
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-3  ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>

                                <div class="col-md-9 ">
                                    <h6 class="text-muted font-semibold">Total Users </h6>
                                    <h6 class="font-extrabold mb-0">{{ $total_user }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-3  ">
                                    <div class="stats-icon red mb-2">
                                        <i class="fas fa-door-closed"></i>
                                    </div>
                                </div>

                                <div class="col-md-9 ">
                                    <h6 class="text-muted font-semibold">Total Rooms </h6>
                                    <h6 class="font-extrabold mb-0">{{ $total_room }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-3  ">
                                    <div class="stats-icon green mb-2">
                                        <i class="fas fa-border-style"></i>
                                    </div>
                                </div>

                                <div class="col-md-9 ">
                                    <h6 class="text-muted font-semibold">Total Room Type </h6>
                                    <h6 class="font-extrabold mb-0">{{ $total_room_type }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-3  ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="fas fa-border-style"></i>
                                    </div>
                                </div>

                                <div class="col-md-9 ">
                                    <h6 class="text-muted font-semibold">Total Booking </h6>
                                    <h6 class="font-extrabold mb-0">{{ $total_booking }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-3  ">
                                    <div class="stats-icon red mb-2">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>

                                <div class="col-md-9 ">
                                    <h6 class="text-muted font-semibold">Pending Booking </h6>
                                    <h6 class="font-extrabold mb-0">{{ $pending_booking }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-3  ">
                                    <div class="stats-icon green mb-2">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                </div>

                                <div class="col-md-9 ">
                                    <h6 class="text-muted font-semibold">Active Booking </h6>
                                    <h6 class="font-extrabold mb-0">{{ $active_booking }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-3  ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="fas fa-hand-holding-usd"></i>
                                    </div>
                                </div>

                                <div class="col-md-9 ">
                                    <h6 class="text-muted font-semibold">Total Income </h6>
                                    <h6 class="font-extrabold mb-0">{{ formatter_money( $total_income) }} {{ $gnl->cur_sym }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-3  ">
                                    <div class="stats-icon green mb-2">
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </div>
                                </div>

                                <div class="col-md-9 ">
                                    <h6 class="text-muted font-semibold">Today's CheckIn </h6>
                                    <h6 class="font-extrabold mb-0">{{ $todays_checkin }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-3  ">
                                    <div class="stats-icon red mb-2">
                                        <i class="fas fa-arrow-circle-left"></i>
                                    </div>
                                </div>

                                <div class="col-md-9 ">
                                    <h6 class="text-muted font-semibold">Today's CheckOut </h6>
                                    <h6 class="font-extrabold mb-0">{{ $todays_checkout }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>



    </section>
</div>

@endsection


@push('js')
<script src="{{ asset('assets/admin/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/pages/dashboard.js') }}"></script>
@endpush
