@extends('admin.layouts.master')

@section('content')

@push('button')
<a href="{{ route('admin.booking.create') }}" class="btn btn-warning "> New Booking</a>
@endpush

                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            {{ $page_title }}
                        </div>
                        <div class="card-body" >
                            <div class="table-responsive">
                            <table class="table table-hover" id="table1">
                                <thead>
                                    <tr style="white-space: nowrap">
                                        <th>Booking Number</th>
                                        <th>Username</th>
                                        <th>Phone</th>
                                        <th>Checkin Date</th>
                                        <th>Checkout Date</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($bookings as $item)

                                        <td>{{ $item->booking_code }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->checkin_date }}</td>
                                        <td>{{ $item->checkout_date }}</td>


                                        <td>
                                            <a href="{{ route('admin.booking.edit',$item->id) }}" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a>
                                            <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#deleteModal{{ $item->id }}"><i class ="fa fa-trash"></i></button>
                                            </td>

                                        </tr>
                                        {{-- Delete modal --}}
                                                <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">Are You sure?</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete this item?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                <form method="POST" action="{{ route('admin.booking.destroy', $item->id) }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            {{-- modal --}}
                                    @endforeach
                                    <tr>
                                        @if (count($bookings) == 0)
                                            <td colspan="10" class="text-center">No booking found</td>
                                        @endif
                                    </tr>

                                </tbody>
                            </table>
                            <ul class="pagination-overfollow">
                                <p>{{ $bookings->appends(array_filter(Request::all()))->links( "pagination::bootstrap-5")}}</p>
                            </ul>

                        </div>
                        </div>
                    </div>

                </section>
            </div>


@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
@endpush
