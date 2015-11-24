@extends('layouts.master')
@section('contentpanel')
<div class="contentpanel">
      <div class="row">

        <div class="col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading">
                  <h4 class="panel-title" style="font-size: 13px">Hairstyle List </h4>
            <p>Use edit and delete to make adjustment on the list. To create a new Hairstyle, Click the 'Create New Hairstyle' button</p>
            </div>
            <div class="more2_12"><a href="{{url('/hairstyles/add')}}">Create New Hairstyle</a></div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered mb30 table-primary" style="font-size:12px;margin-bottom: 17px;">
                    <thead>
                      <tr>
            <th>Hairstyle Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
                      </tr>
                    </thead>
                  <tbody>
         @foreach($hairstyles as $hairstyles)
               <tr>
               <td> <a href="{{url('/hairstyles/edit',$hairstyles->hairstyle_id)}}">{{$hairstyles->name}}</a></td>
               <td>{{$hairstyles->category->name}}</td>
               <td>{{$hairstyles->description}}</td>
               <td><img src="{{url('/uploads/hairstyles/'.$hairstyles->image)}}" alt="{{$hairstyles->image}}"  class="img-thumbnail img-responsive img-rounded" style="max-height:200px; max-width:400px;"/></td>
               <td>
               <a href="{{url('/hairstyles/delete',$hairstyles->hairstyle_id)}}"><span><i class="fa fa-trash-o"></i></span> </a>
               </td>
               </tr>
               @endforeach
                  </tbody>
                </table>
              </div>
              <!-- table-responsive -->
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
    </script>
@stop
