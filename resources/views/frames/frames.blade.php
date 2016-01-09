@extends('layouts.master') 
@section('contentpanel')
<div class="contentpanel">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title" style="font-size: 13px">Frames List</h4>
                    <p>Use edit and delete to make adjustment on the list. To create a new frames, Click the 'Create New Frames' button</p>
                </div>
                <div class="more2_12">
                    <a href="{{url('/frames/add')}}">Create New Frames</a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        
                        <table class="table table-bordered mb30 table-primary" style="font-size:12px;margin-bottom: 17px;">
                            <tr>
                                <th>Frame Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
							@foreach($frames as $frame) 
                            <tr>
                                <td>
                                    <a href="{{url('/frames/edit',$frame->frame_id)}}">{{$frame->name}}</a>
                                </td>
                                <td>{{$frame->description}}</td>
                                <td><img alt="{{$frame->image_preview}}" class="img-thumbnail img-responsive img-rounded" src="{{url('/uploads/frames/'.$frame->image_preview)}}" style="max-height:200px; max-width:400px;"></td>
                                <td>
                                    <a href="{{url('/frames/delete',$frame->frame_id)}}"><span><i class="fa fa-trash-o"></i></span></a>
                                </td>
                            </tr>
							@endforeach
                        </table>
                    </div><!-- table-responsive -->
                </div><!-- panel-body -->
            </div><!-- panel-default -->
        </div>
    </div><!-- row -->
</div><!-- contentpanel -->
@stop 
@section('footer') 
@parent 
<script src="js/jquery.infinitescroll.js"></script> 
<script>
                jQuery(document).ready(function(){
                  $('.table-primary').infinitescroll({
                    navSelector     : ".paginate",
                    nextSelector    : ".paginate a:last",
                    itemSelector    : ".box",
                    appendCallback  : false,
                    debug           : false,
                    dataType        : 'html',
                    loading: {
                        selector: '#load-more'
                    },
                    path: function(index) {
                        return "?page=" + index;
                    }
                  },function(newElements, data, url){
                      //console.log($( newElements ).children().length);
                      $( newElements ).children().each(function(){
                        $('.box').append($(this));
                        //console.log($(this))
                      });
                      //var $newElems = $( newElements );


                  });

                });
</script> @stop