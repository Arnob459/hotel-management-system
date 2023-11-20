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
            </div>
        </div>

    </section>
</div>

@endsection


@push('js')
<script src="{{ asset('assets/admin/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/pages/dashboard.js') }}"></script>
@endpush
