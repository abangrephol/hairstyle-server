@extends('layouts.master')
@section('contentpanel')
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
            <form action="{{url('/clients/update/'.$apikeys->id)}}" method="post">
            {!! csrf_field() !!}
            <div class="col-sm-12">
					   <div class="cntct_dtls" style=" margin-top:2%;">
						 <div class="rg_bor" style="border-right:none;">
						   <ul>
								 <li>
								<div class="lbl_lfts">IMEI</div>
								<div class="lbl_rgts"><div class="col-sm-12">
									<input class="form-control col-sm-12" type="text" name="imei" value="{{$apikeys->imei}}"/>
								</div>
								</div>
							  </li>
							  <li>
							  <div class="lbl_lfts">API</div>
							  <div class="lbl_rgts"><div class="col-sm-12">
									<input class="form-control col-sm-12" disabled type="text" name="api" value="{{$apikeys->api}}"/>
							  </div>
							  </div>
							  </li>
							 </ul>
							 <div class="sv-btn"><button class="btn btn-primary" type="submit">Save</button>&nbsp;<button class="btn btn-primary">Cancel</button></div>
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
             </div>
 @stop
