<!-- edit -->
<div class="modal fade" id="exampleModal2{{ $team->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width:130%">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('lang.edit team')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.my-teams.update', $team->id) }}" method="post"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name"  value="{{$team->name}}"
                                    placeholder=" name ">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="job_title"  value="{{$team->job_title}}" placeholder=@lang('lang.my teams')>
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control" name="image"  placeholder=" title arabic ">
                            </div>




                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">@lang('lang.save')</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('lang.save')</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Basic modal -->
