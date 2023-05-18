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
    <style>
        .SumoSelect>.CaptionCont {
            width: 60%;

        }

        .dropzone.dz-clickable {
            border: none;
        }

        .dropzone .dz-preview:not(.dz-processing) .dz-progress {
            display: none;
        }

        .dropzone .dz-preview .dz-details .dz-filename:not(:hover) span {
            display: none;
        }

        .dropzone .dz-preview .dz-details .dz-filename span,
        .dropzone .dz-preview .dz-details .dz-size span {
            display: none;

        }

        .SumoSelect>.optWrapper.multiple>.options li.opt span i,
        .SumoSelect .select-all>span i {
            position: absolute;
            margin: auto;
            top: 0;
            bottom: 0;
            width: 14px;
            height: 14px;
            border: 1px solid #e1e6f1;
            border-radius: 2px;
            background-color: #fff;
        }

        .SumoSelect>.optWrapper>.options li.opt label,
        .SumoSelect>.CaptionCont,
        .SumoSelect .select-all>label {
            padding-left: 40px;
        }


        .SumoSelect>.CaptionCont>span {
            color: #000
        }

        .SumoSelect.open>.optWrapper {
            width: 550px;
        }
    </style>

@section('title')
    Add my_work
@stop


@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">@lang('lang.my works')</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">
                /
                @lang('lang.add my works')</span>
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
                <form action="{{ route('admin.my-works.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div id="wizard1">
                        {{-- <h3>my_work data</h3> --}}
                        <section>
                            <div class="control-group form-group">
                                <label class="form-label">@lang('lang.english name') </label>
                                <input type="text" class="form-control required" name="ar[name]" required
                                    placeholder=@lang('lang.english name')>
                            </div>
                            <div class="control-group form-group">
                                <label class="form-label">@lang('lang.arabic name ') </label>
                                <input type="text" class="form-control required"required name="en[name]">
                            </div>
                            {{-- <div class="control-group form-group">
                                <label class="form-label"> نوع المنتج</label>
                                <input type="text" class="form-control required" name="type"placeholder="type ">
                            </div> --}}


                            <div class="d-flex gap-4 justify-content-between" style="width: 15%">

                                <div class="-">
                                    <label class="rdiobox">
                                        <input checked name="type_link" type="radio" value="mobile" id="mobile">
                                        <span>@lang('lang.mobile')
                                        </span></label>
                                </div>


                                <div class="-">
                                    <label class="rdiobox"><input name="type_link" id="website_radio" value="website"
                                            type="radio"><span>
                                            @lang('lang.web')
                                        </span></label>
                                </div>
                                <div class="-">
                                    <label class="rdiobox"><input name="type_link" id="nothing" value=""
                                            type="radio"><span>
                                            @lang('lang.nothing')
                                        </span></label>
                                </div>
                            </div>

                            <div class="control-group form-group" id="website" style="display:none">
                                <label class="form-label"> @lang('lang.link website')</label>
                                <input type="text" class="form-control "
                                    name="link"placeholder=@lang('lang.link website')>
                            </div>


                            <div class="control-group form-group" id="google_play">
                                <label class="form-label"> @lang('lang.link google play')</label>
                                <input type="text" class="form-control required"
                                    name="link_geogle_play"placeholder=@lang('lang.link google play')>
                            </div>


                            <div class="control-group form-group" id=app_store>
                                <label class="form-label"> @lang('lang.link app store') </label>
                                <input type="text" class="form-control required"
                                    name="link_app_stroe"placeholder=@lang('lang.link app store')>
                            </div>




                            <div class="control-group form-group">
                                <label class="form-label">@lang('lang.select category') </label>
                                <select class="form-control" name="my_work_category_id" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->title }}
                                        </option>
                                    @endforeach


                                </select>
                            </div>

                            <div class="control-group form-group mb-0">
                                <label class="form-label"> @lang('lang.english description') </label>
                                <textarea type="text" class="summernote form-control required" name="en[desc]"  placeholder=@lang('lang.english description') required>
                                            </textarea>
                            </div>
                            <div class="control-group form-group mb-0">
                                <label class="form-label">@lang('lang.arabic description') </label>
                                <textarea type="text" class="summernote form-control required" name="ar[desc]"  placeholder=@lang('lang.arabic description') required>
                                  </textarea>
                            </div>

                            <div class="control-group form-group mb-0">
                                <input type="file" class="form-control required" required name="image"
                                    placeholder="Address">
                            </div>


                            <div class="control-group form-group mb-0">
                                <label class="form-label"> راى العميل  </label>


                                <input type="file" class="form-control required" required name="image_clinet"
                                    placeholder="Address">
                            </div>

                            <br>
                            <br>
                            <br>

                            <div class="form-group col-md-7">
                                <h4 class="form-section"><i class="ft-home"></i>@lang('lang.image')</h4>

                                <div id="dpz-multiple-files" class="dropzone dropzone-area">
                                    <div class="dz-message">  @lang('lang.upload image')  </div>
                                </div>

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
    $(document).ready(function () {
        $('.summernote').summernote();
    });
</script>

<script>
    $('input[type="radio"]#website_radio , input[type="radio"]#nothing,input[type="radio"]#mobile', ).on('change',
        function() {
            if ($(this).val() == 'website') {

                $('#website').css('display', 'inline');
                $('#app_store').css('display', 'none');
                $('#google_play').css('display', 'none');
            } else if ($(this).val() == 'mobile') {
                $('#website').css('display', 'none');
                $('#app_store').css('display', 'inline');
                $('#google_play').css('display', 'inline');
            } else {
                $('#website').css('display', 'none');
                $('#app_store').css('display', 'none');
                $('#google_play').css('display', 'none');
            }

        });
</script>

<script>
    var uploadedDocumentMap = {}
    Dropzone.options.dpzMultipleFiles = {
        paramName: "dzfile", // The name that will be used to transfer the file
        //autoProcessQueue: false,

        // MB
        clickable: true,
        addRemoveLinks: true,
        acceptedFiles: 'image/*',
        dictFallbackMessage: " المتصفح الخاص بكم لا يدعم خاصيه تعدد الصوره والسحب والافلات ",
        dictInvalidFileType: "لايمكنك رفع هذا النوع من الملفات ",
        dictCancelUpload: "الغاء الرفع ",
        dictCancelUploadConfirmation: " هل انت متاكد من الغاء رفع الملفات ؟ ",
        dictRemoveFile: "حذف الصوره",

        dictMaxFilesExceeded: "لايمكنك رفع عدد اكثر من هضا ",
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        url: "{{ route('admin.works.images.store') }}", // Set the url
        success: function(file, response) {
            $('form').append('<input class="images" data-img="' + file.name +
                '"  type="hidden" name="document[]" value="' + response.name + '">')
            uploadedDocumentMap[file.name] = response.name
        },
        removedfile: function(file) {

            $('.images').each(function(index) {

                var input = $(this);

                if (input.data('img') == file.name) {
                    file_name = input.val()
                    input.remove();
                }

            });


            var imgSrcValue = $('img[alt="' + file.name + '"]').prop('alt'); //get the src value

            $.ajax({

                url: "{{ URL::to('admin/product/delete/image') }}",
                type: "GET",
                dataType: "json",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: file.id,
                    file_name: file_name,
                }
            });
            var fmock;
            return (fmock = file.previewElement) != null ? fmock.parentNode.removeChild(file.previewElement) :
                void 0;
        },
        // previewsContainer: "#dpz-btn-select-files", // Define the container to display the previews
        init: function() {
            @if (isset($event) && $event->document)
                var files =
                    {!! json_encode($event->document) !!}
                for (var i in files) {
                    var file = files[i]
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
                }
            @endif
        }


    }
</script>
@endpush
