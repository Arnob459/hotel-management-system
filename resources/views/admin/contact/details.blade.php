@extends('admin.layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title d-inline-block">{{ $page_title }}</div>
                </div>
                <div class="card-body">

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="row mb-2">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="basicInput" class="mb-2">Name</label>
                                        <input type="text" name="name" class="form-control form-control-lg " id="basicInput" value="{{ $contacts->name }}" disabled >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="basicInput" class="mb-2">Email</label>
                                        <input type="text" name="email" class="form-control form-control-lg " id="basicInput" value="{{ $contacts->email }}" disabled >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="basicInput" class="mb-2">Phone</label>
                                        <input type="text" name="phone" class="form-control form-control-lg " id="basicInput" value="{{ $contacts->phone }}" disabled  >
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="basicInput" class="mb-2">Message</label>
                                        <textarea type="text" cols="5" rows="5" name="message" class="form-control form-control-lg " id="basicInput" disabled>{{ $contacts->message }}</textarea>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>

                    <div class="card-title d-inline-block mb-3">Mail To Connectors</div>

                    <form id="exampleValidation" method="post" action="{{route('admin.connectors.mail.send',$contacts->id)}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="name">@lang('Subject')</label>
                                <input type="text" class="form-control  @error('subject') is-invalid @enderror"
                                       id="name" name="subject" placeholder="Enter subject" required>
                                @error('subject')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">@lang('Message')</label>
                                <textarea id="myNicEditor"  name="message" class="form-control  nicEdit" rows="15"></textarea>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success btn-block">@lang('Submit')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('nicEdit')
<script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script>
<!-- Include NicEdit from a CDN -->


<script type="text/javascript">
    //<![CDATA[
    bkLib.onDomLoaded(function() {
        nicEditors.editors.push(
            new nicEditor().panelInstance(
                document.getElementById('myNicEditor')
            )
        );
    });
    //]]>
    </script>

@endpush
