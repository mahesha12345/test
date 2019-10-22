@extends('layout3')
@section('content')

<div class="container-fluid" style=" background: url(https://static.pexels.com/photos/68147/waterfall-thac-dray-nur-buon-me-thuot-daklak-68147.jpeg);">
                <div class="row vertical-offset-100" style="height: 500px;">
                    <div class="col-md-4 col-md-offset-4" >
                        <div class="panel panel-default" style="margin-top: 90px;">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                    <img src="http://s11.postimg.org/7kzgji28v/logo_sm_2_mr_1.png" class="img-responsive" alt="Welcome Admin" />
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="login" role="form" method="post" class="form-signin">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}"/ >
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <input class="form-control" placeholder="Username" id="username" name="username" type="text" required=""><br>
                                        <input class="form-control" placeholder="Password" id="password" name="password" type="password" required="">
                                        <br></br>
                                        <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="Login »">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection