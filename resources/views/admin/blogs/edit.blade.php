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
    اضافه مدونه
@stop


@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">@lang('lang.blogs')</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0"> /
                 @lang('lang.add blog') </span>
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
                <form action="{{ route('admin.blogs.update',$blog->id) }}" enctype="multipart/form-data" method="post">
                    @method('put')
                    @csrf
                    <div id="wizard1">
                        <section>
                            <div class="w-50">
                                <label class="form-label"> @lang('lang.main title') </label>
                                <input type="text" class="form-control w-60" required name="title"
                                    placeholder=@lang('lang.main title') value="{{ $blog->title }}">
                            </div>
                            {{-- <div id="other_data" class="tab-pane ">
                                <div class="div_phone_inputs ">

                                    <div class="col-md-6">
                                        <label> @lang('lang.sub title') </label>

                                        <input class="form-control" data-parsley-class-handler="#lnWrapper"
                                            name="title2[]" type="text" placeholder=@lang('lang.sub title')>

                                        <div class="clearfix"></div>
                                        <br>

                                        <br>
                                        <label>@lang('lang.sub description') </label>

                                        <textarea class="form-control w-80" data-parsley-class-handler="#lnWrapper"
                                            name="description[]" type="text" placeholder=@lang('lang.sub description')>
                                        </textarea>

                                        <div class="clearfix"></div>

                                        <br>

                                    </div>

                                </div>

                                <br>

                                <a href="#" class="add_phone_input btn btn-info btn-sm"><i
                                        class="fa fa-plus"></i></a>

                            </div> --}}


                            <div id="other_data" class="tab-pane ">
                                <div class="div_phone_inputs ">

                                        <div class="col-md-7">
                                            @if ($blog->title2)

                                                @for($i=0;$i<count($blog->title2);$i++)
                                                    <label> @lang('lang.sub title') </label>

                                                    <input class="form-control" data-parsley-class-handler="#lnWrapper"
                                                     name="title2[]" type="text"  value="{{$blog->title[$i] }}" placeholder=@lang('lang.sub title')>

                                                    <div class="clearfix"></div>
                                                    <br>
                                                    <a href="#" class="remove_input btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                    <br>

                                                    <label>@lang('lang.sub description') </label>

                                                    <textarea class="form-control w-80" data-parsley-class-handler="#lnWrapper"
                                                        name="description[]" type="text"  placeholder=@lang('lang.sub description')>
                                                        {{$blog->description[$i]}}
                                                    </textarea>


                                                @endfor
                                            @endif


                                        </div>

                                 </div>

                                <br>

                                <a href="#" class="add_phone_input btn btn-info btn-sm"><i class="fa fa-plus"></i></a>

                            </div>
                            <div class="control-group form-group w-50">
                                <input type="file" class="form-control required" name="image"
                                    placeholder="Address">
                            </div>

                            <button type="submit" class="btn btn-info">@lang('lang.save')</button>
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
    var x = 2;
    $(document).on('click', '.add_phone_input', function(e) {
        e.preventDefault();
        $('.div_phone_inputs').append('<div>' +

            '<div class="col-md-6">' +
                '<lable> @lang("lang.sub title")</lable>' +
                '<br>' +

                   '<input type="phone" name="title2[]" class="form-control" placeholder=@lang("lang.sub title") /> ' +
            '</div>' +
            '<div class="clearfix"></div>' +
            '<br>' +

            '<label> @lang("lang.sub description") </label>'+

                '<textarea class="form-control w-50"  name="description[]" type="text" placeholder=@lang("lang.sub description") >'+
            '</textarea>'+

            '<div class="clearfix"></div>' +
            '<br>' +
            '<a href="#" class="remove_input btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>' +
            '<br>' +
            '</div>');
        x++;
    });
    $(document).on('click', '.remove_input', function() {
        $(this).parent('div').remove();
        x--;
        return false;
    });
</script>
@endpush
