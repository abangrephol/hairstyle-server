@extends('layouts.master')
@section('contentpanel')
<div class="contentpanel">
      <div class="row">

        <div class="col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading">
                  <h4 class="panel-title" style="font-size: 13px">Categories List </h4>
            <p>Use edit and delete to make adjustment on the list. To create a new categories, Click the 'Create New Categories' button</p>
            </div>
            <div class="more2_12"><a href="{{url('/categories/add')}}">Create New Categories</a></div>
            <div class="panel-body">
              <div class="table-responsive">
           <table class="table table-bordered mb30 table-primary" style="font-size:12px;margin-bottom: 17px;">
            <tr>
            <th>Categories Name</th>
            <th>Description</th>
            <th>Action</th>
            </tr>
            @foreach($categories as $categories)
            <tr>
            <td><a href="{{url('/categories/edit',$categories->category_id)}}">{{$categories->name}}</a></td>
            <td>{{$categories->description}}</td>
            <td>
            <a href="{{url('/categories/delete',$categories->category_id)}}"><span><i class="fa fa-trash-o"></i></span></a>
            </td>
            </tr>
            @endforeach
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
