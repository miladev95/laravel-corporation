@extends('layouts.admin')

@section('content')

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                  <div class="row">
                                          	<div class="col-sm-12">
                                          		<div class="card-box">

                                          			<h4 class="header-title m-t-0 m-b-30">Setting</h4>

                                          			<div class="row">
                                          				<div class="col-lg-6">
                                          					<form class="form-horizontal" role="form" method="post">
                                                      @if (session('status'))
                                                      <div class="alert alert-success">
                                                        {{ session('status') }}
                                                      </div>
                                                      @endif
                                                               <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                  	                                            <div class="form-group">
                  	                                                <label class="col-md-2 control-label" for="example-email">Website Title</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" name="title"class="form-control" placeholder="xCorporation" value="{!! $setting[0]['title'] !!}">
                  	                                                </div>
                  	                                            </div>

                  	                                            <div class="form-group">
                  	                                                <label class="col-md-2 control-label">Telephone</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="number" name="telephone" class="form-control" placeholder="0098..." value="{!! $setting[0]['telephone'] !!}">
                  	                                                </div>
                  	                                            </div>

                  	                                            <div class="form-group">
                  	                                                <label class="col-md-2 control-label">Email</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="email" name="email"  class="form-control" placeholder="milad@gmail.com" value="{!! $setting[0]['email'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  <div class="form-group">
                  	                                                <label class="col-md-2 control-label">Facebook</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" name="facebook" class="form-control" placeholder="facebook.com/milad" value="{!! $setting[0]['facebook'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  <div class="form-group">
                  	                                                <label class="col-md-2 control-label">Instagram</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" name="instagram" class="form-control" placeholder="instagram.com/milad0x6d" value="{!! $setting[0]['instagram'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  <div class="form-group">
                  	                                                <label class="col-md-2 control-label">Twitter</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" name="twitter" class="form-control" placeholder="twitter.com/milad" value="{!! $setting[0]['twitter'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  <div class="form-group">
                  	                                                <label class="col-md-2 control-label">Telegram</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" name="telegram" class="form-control" placeholder="t.me/milad0x6d" value="{!! $setting[0]['telegram'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  <div class="form-group">
                  	                                                <label class="col-md-2 control-label">Linkedin</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" name="linkedin" class="form-control" placeholder="linkedin.com/milad0x6d" value="{!! $setting[0]['linkedin'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  <div class="form-group">
                  	                                                <label class="col-md-2 control-label">Address</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" name="address" class="form-control" placeholder="Tehran...." value="{!! $setting[0]['address'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  <div class="form-group">
                  	                                                <label class="col-md-2 control-label">Phone Number</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="number" name="phone_number" class="form-control" placeholder="0912...." value="{!! $setting[0]['phone_number'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  <div class="form-group">
                  	                                                <label class="col-md-2 control-label">Fax</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" name="fax" class="form-control" placeholder="" value="{!! $setting[0]['fax'] !!}">
                  	                                                </div>
                  	                                            </div>
                                                                  <div class="form-group">
                  	                                                <label class="col-md-2 control-label">Brief Description</label>
                  	                                                <div class="col-md-10">
                  	                                                    <input type="text" name="brief_about" class="form-control" placeholder="" value="{!! $setting[0]['brief_about'] !!}">
                  	                                                </div>
                  	                                            </div>

                                                        <button type="submit" class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5">Submit</button>
                  	                               </form>
                                          				</div><!-- end col -->
                                          			</div><!-- end row -->
                                          		</div>

                </div> <!-- content -->

                <footer class="footer">
                     © xAdmin 2020
                </footer>

            </div>


@endsection
