@extends('layouts.master') @section('contentpanel')
<style type="text/css">
  .mfp-iframe-holder .mfp-content{
  width:auto;
}
</style>
<div class="contentpanel">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title" style="font-size: 13px">Personal Information</h4>
                    <p>Please fill in your personal information.</p>
                </div>
                <div class="panel-body">
                    <div class="main">
                        <div class="col-sm-12">
                            <form action="{{url('/frames/update/'.$frames->frame_id)}}" enctype="multipart/form-data" method="post">
                                {!! csrf_field() !!}
                                <div class="col-sm-12">
                                    <div class="cntct_dtls" style=" margin-top:2%;">
                                        <div class="rg_bor" style="border-right:none;">
                                            <ul>
                                                <li>
                                                    <div class="lbl_lfts">
                                                        Frame Name
                                                    </div>
                                                    <div class="lbl_rgts">
                                                        <div class="col-sm-12">
                                                            <input name="name" type="text" value="{{$frames->name}}">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lbl_lfts">
                                                        Frame Description
                                                    </div>
                                                    <div class="lbl_rgts">
                                                        <div class="col-sm-12">
                                                            <input name="description" type="text" value="{{$frames->description}}">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lbl_lfts">
                                                        Frame Layout Image
                                                    </div>
                                                    <div class="lbl_rgts">
                                                        <div class="col-sm-12">
                                                            <input accept="image/*" name="image_layout" type="file">
															<img src="{{url('/uploads/frames/'.$frames->image_layout)}}" />
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lbl_lfts">
                                                        Frame Background Image
                                                    </div>
                                                    <div class="lbl_rgts">
                                                        <div class="col-sm-12">
                                                            <input accept="image/*" name="image_background" type="file">
															<img src="{{url('/uploads/frames/'.$frames->image_background)}}" />
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lbl_lfts">
                                                        Frame Foreground Image
                                                    </div>
                                                    <div class="lbl_rgts">
                                                        <div class="col-sm-12">
                                                            <input accept="image/*" name="image_foreground" type="file">
															<img src="{{url('/uploads/frames/'.$frames->image_foreground)}}" />
                                                        </div>
                                                    </div>
                                                </li>
												<li>
                                                    <div class="lbl_lfts">
                                                        Frame Preview(Thumbnail) Image
                                                    </div>
                                                    <div class="lbl_rgts">
                                                        <div class="col-sm-12">
                                                            <input accept="image/*" name="image_preview" type="file">
															<img src="{{url('/uploads/frames/'.$frames->image_preview)}}" />
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="sv-btn">
                                                <button class="btn btn-primary" type="submit">Save</button>&nbsp;<button class="btn btn-primary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>@stop