@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                    <div class="card-title">{{$page_title}} Section</div>
                </div>
                <form  class="exampleValidation" action="{{route('admin.settings.contact')}}" method="post">
                    @csrf
                    <div class="card-body ">
                        <div class="row ">
                            <div class="form-group col-md-12 mb-4">
                                <label for="" class="mb-2">Contact email </label>
                                <input type="text" class="form-control form-control-lg" name="contact_email" value="{{$setting_extra->contact_email}}"
                                       placeholder="Enter service email">
                                <code>@lang('this email will use in contact form')</code>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="" class="mb-2">Contact phone</label>
                                <input type="text" class="form-control form-control-lg" name="contact_phone" value="{{$setting_extra->contact_phone}}"
                                       placeholder="Enter phone">
                                <code>@lang('this phone will use in contact form')</code>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="" class="mb-2">Contact fax</label>
                                <input type="text" class="form-control form-control-lg" name="contact_fax" value="{{$setting_extra->contact_fax}}"
                                       placeholder="Enter contact fax">
                                <code>@lang('this fax will use in contact form')</code>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="" class="mb-2">Contact Address</label>
                                <input type="text" class="form-control form-control-lg" name="contact_address" value="{{$setting_extra->contact_address}}"
                                       placeholder="Enter Address">
                                <code>@lang('this Address will use in contact form')</code>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="" class="mb-2"> Opening Time</label>
                                <input type="text" class="form-control form-control-lg" name="opening_time" value="{{$setting_extra->opening_time}}"
                                       placeholder="Ex: Monday - Friday: 09:00 - 18:00">
                                <code>@lang('this Opening Time will use in Banner Section')</code>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer pt-3">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-success btn-block">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection


@section('button')

@endsection


