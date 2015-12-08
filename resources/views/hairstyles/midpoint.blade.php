@extends('layouts.master')
@section('contentpanel')
 <script>
/*$(function() {
$("#image").click(function(e) {
  var offset = $(this).offset();
  var relativeX = (e.pageX - offset.left -4);
  var relativeY = (e.pageY - offset.top -4);
 var X = relativeX/this.width;
 var Y = relativeY/this.height;
 console.log('X='+X+': Y='+Y);
 $('#Xpoint').val(X.toFixed(6));
 $('#Ypoint').val(Y.toFixed(6));
});
});*/

        $(function () {
            $("#image").pointr({
                callback: function (x, y) {
                    $("#Xpoint").val(x.toFixed(6));
                    $("#Ypoint").val(y.toFixed(6));
                }
            });
        });
  </script>

<style type="text/css">
  .mfp-iframe-holder .mfp-content{
  width:auto;
}</style>
<div class="contentpanel">
    <div class="row">
      <div class="col-sm-12">
      <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 style="font-size: 13px" class="panel-title">Personal Information</h4>
                    <p>Please fill in your personal information.</p>
                  </div>
                  <div class="panel-body">
                   <div class="main">
                    <div class="col-sm-12">

            <div class="col-sm-12">
                        <form action="{{url('/hairstyles/updatepoint/'.$hairstyles->hairstyle_id)}}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
             <div class="cntct_dtls" style=" margin-top:2%;">
                                                     <div class="rg_bor" style="border-right:none;">
                                                       <ul>
                                                       <li>
                                                       <img src="{{url('/uploads/hairstyles/'.$hairstyles->image)}}" alt="{{$hairstyles->image}}"  id="image" class="img-thumbnail img-responsive img-rounded">
                                                       </li>
                                                          <li>
                                                           <div class="lbl_lfts">X Point</div>
                                                           <div class="lbl_rgts"><div class="col-sm-12">
                                                                 <input type="text" id="Xpoint" name="Xpoint" value="" readonly/>
                                                            </div>
                                                            </div>
                                                                                                                      <li>
                                                                                                                       <div class="lbl_lfts">Y Point</div>
                                                                                                                       <div class="lbl_rgts"><div class="col-sm-12">
                                                                                                                             <input type="text" id="Ypoint" name="Ypoint" value="" readonly/>
                                                                                                                        </div>
                                                                                                                        </div>
                                                                                                                        </li>
                                                            </li>
                                                            </ul>
                                                            <div class="sv-btn"><button class="btn btn-primary" type="submit">Save</button>&nbsp;<button class="btn btn-primary">Cancel</button></div>
                                                            </div>
                                                            </div>
                     </form>
 </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
@stop
