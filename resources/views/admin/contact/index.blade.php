@extends('admin.layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title d-inline-block">@lang('Connectors')</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                    <tr>
                                        <th >SL</th>
                                        <th >Name</th>
                                        <th >Email</th>
                                        <th >Phone</th>
                                        <th >Details</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $key => $connector)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$connector->name}}</td>
                                            <td>{{$connector->email}}</td>
                                            <td>{{$connector->phone}}</td>
                                            <td><a href="{{ route('admin.connectors.details',$connector->id) }}" class="btn icon btn-primary"><i class="fas fa-comment"></i> </a></td>




                                        </tr>
                                    @endforeach
                                    @if (count($contacts) == 0)
                                        <tr>
                                            <td class="text-center" colspan="2">@lang('NO CONNECTORS FOUND')</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                                <ul class="pagination-overfollow">
                                    <p>{{ $contacts->appends(array_filter(Request::all()))->links( "pagination::bootstrap-5")}}</p>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


