@extends('admin.layouts.master')

@section('content')

@push('button')
<a href="{{ route('admin.rooms.create') }}" class="btn btn-lg btn-warning ">Add New</a>
@endpush

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Rooms </h4>
            </div>
            <hr>

            <div class="card-body">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($rooms as $item)

                                <tr>
                                    <td>{{$loop->iteration}}</td>

                                    <td class="text-bold-500">{{ $item->name }}</td>
                                    <td class="text-bold-500">{{formatter_money( $item->price) }}</td>

                                    <td class="text-center">

                                        <a href="{{ route('admin.rooms.edit',$item->id) }}"  class="btn btn-primary rounded-pill"  ><i class ="fa fa-edit"></i> Edit</a>
                                        <a type="button"  href="{{ route('admin.rooms.photos',$item->id) }}"  class="btn btn-warning rounded-pill"  ><i class ="fa fa-images"></i> Galary</a>

                                    </td>

                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>


                </div>
            </div>
    </div>
</section>

@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
@endpush
