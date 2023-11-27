@extends('admin.layouts.master')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">{{$page_title}}</div>
                </div>
                <div class="card-body">
                    <form id="exampleValidation" method="post" action="{{route('admin.settings.basic')}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row" >
                            <div class="col-md-4 mb-3">
                                <div class="form-group ">
                                    <label class="mb-2">@lang('Site Name')</label>
                                    <input type="text" class="form-control  form-control-lg"
                                        value="{{$gnl->site_name}}" name="site_name" placeholder="Enter site name" required>

                                </div>
                            </div>

                            <div class="form-group col-md-4 mb-3" >
                                <label class="mb-2" > @lang('Site Currency') </label>
                                <input type="text" class="form-control form-control-lg "
                                       value="{{$gnl->cur}}" placeholder="site currency" name="currency" required>
                            </div>

                            <div class="form-group col-md-4 mb-3">
                                <label class="mb-2">@lang('Site Currency Symbol')</label>
                                <input type="text" class="form-control form-control-lg  "
                                       value="{{$gnl->cur_sym}}" placeholder="site currency" name="currency_symbol"
                                       required>


                            </div>


                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">@lang('Email Notification')</label>
                                    <div class="selectgroup w-100">
                                        <input type="radio" class="btn-check" name="email_notification" id="een"
                                        autocomplete="off" value="1" {{ $gnl->en == '1' ? 'checked' : '' }}  >
                                    <label class="btn btn-outline-success-custom " for="een">Enable</label>

                                    <input type="radio" class="btn-check" name="email_notification" id="den"
                                        autocomplete="off" value="0" {{ $gnl->en != '1' ? 'checked' : '' }}  >
                                    <label class="btn btn-outline-danger-custom " for="den"> Disable</label>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">@lang('SMS Notification')</label>
                                    <div class="selectgroup w-100">
                                        <input type="radio" class="btn-check" name="sms_notification" id="esn"
                                        autocomplete="off" value="1" {{ $gnl->sn == '1' ? 'checked' : '' }}  >
                                    <label class="btn btn-outline-success-custom " for="esn">Enable</label>

                                    <input type="radio" class="btn-check" name="sms_notification" id="dsn"
                                        autocomplete="off" value="0" {{ $gnl->sn != '1' ? 'checked' : '' }}  >
                                    <label class="btn btn-outline-danger-custom " for="dsn"> Disable</label>
                                    </div>
                                </div>
                            </div>

                        </div>

                       <div class="card-action mt-5">
                            <button class="btn btn-success btn-block">@lang('Submit')</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>


@endsection

@push('js_link')
    @include('partials.validation_js')
@endpush

@push('js')
    <script>
        $("select[name=admin_permission]").val("{{ $gnl->admin_permission }}");
    </script>
@endpush



