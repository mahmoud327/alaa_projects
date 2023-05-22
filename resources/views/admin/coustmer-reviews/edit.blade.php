@extends('admin.layouts.master')
@section('css')
    <!---Internal Fileupload css-->
    <link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <!---Internal Fancy uploader css-->
    <link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css') }}">
    <!--Internal  TelephoneInput css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css') }}">


    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @if (App::getLocale() == 'en')
        <!--Internal  treeview -->
        <link href="{{ URL::asset('assets/plugins/treeview/treeview.css') }}" rel="stylesheet" type="text/css" />
    @else
        <!--Internal  treeview -->
        <link href="{{ URL::asset('assets/plugins/treeview/treeview-rtl.css') }}" rel="stylesheet" type="text/css" />
    @endif


@section('title')
    Add customer-reviews
@stop


@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">@lang('lang.customer-reviews')</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0"> /
                @lang('lang.customer-reviews')</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.customer-reviews.update',$review->id) }}" enctype="multipart/form-data" method="post">
                    @method('put')
                    @csrf
                    <div id="wizard1">
                        {{-- <h3>customer-reviews data</h3> --}}
                        <section>

                            <div class="control-group form-group">
                                <label class="form-label"> @lang('lang.name')</label>
                                <input type="text" class="form-control required" name="user_name" value="{{$review->user_name}}"placeholder=@lang('lang.name')>
                            </div>
                            <div class="control-group form-group">
                                <label class="form-label"> @lang('lang.job')</label>
                                <input type="text" class="form-control required" value="{{$review->job}}" name="job"placeholder= @lang('lang.job')>
                            </div>


                            <div class="control-group form-group mb-0">
                                <label class="form-label">@lang('lang.english desc')</label>
                                <textarea type="text" class="summernote form-control required" name="en[desc]"placeholder=@lang('lang.english desc')>{!!$review->translate('en')->desc  !!}</textarea>
                            </div>
                            <div class="control-group form-group mb-0">
                                <label class="form-label">@lang('lang.arabic desc')</label>
                                <textarea type="text" class="summernote form-control required" name="ar[desc]" placeholder=@lang('lang.arabic desc')>{!!$review->translate('ar')->desc !!}</textarea>
                            </div>

                            <div class="control-group form-group mb-0">
                                <input type="file" class="form-control required" name="image"
                                    placeholder="Address">
                            </div>

                            <button type="submit" class="btn btn-info"> @lang('lang.save')</button>
                        </section>

                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /row -->


<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection

@push('script')
<script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
<!-- Internal Select2 js-->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!--Internal Fileuploads js-->
<script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
<!--Internal Fancy uploader js-->
<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
<!--Internal  Form-elements js-->
<script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
<script src="{{ URL::asset('assets/js/select2.js') }}"></script>
<!--Internal Sumoselect js-->
<script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
<!-- Internal TelephoneInput js-->
<script src="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/telephoneinput/inttelephoneinput.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/treeview/treeview.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.summernote').summernote();
    });
</script>
@endpush

