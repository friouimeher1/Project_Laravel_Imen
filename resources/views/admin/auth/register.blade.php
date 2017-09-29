<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Signup :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="{{URL::asset('backend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="{{URL::asset('backend/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="{{URL::asset('backend/js/jquery-2.1.1.min.js')}}"></script>
<!--icons-css-->
<link href="{{URL::asset('backend/css/font-awesome.css')}}" rel="stylesheet">
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//charts-->
</head>
<body>
<!--inner block start here-->
<div class="signup-page-main">
  <div class="signup-main">
    <div class="signup-head">
      <h1>Sign Up</h1>
      </div>
      <div class="signup-block">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/register') }}">
{{ csrf_field() }}

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<label for="name" class="col-md-4 control-label">Nom</label>

<div class="col-md-6">
<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

@if ($errors->has('name'))
<span class="help-block">
<strong>{{ $errors->first('name') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<label for="name" class="col-md-4 control-label">Prénom</label>

<div class="col-md-6">
<input id="name" type="text" class="form-control" name="prenom" value="{{ old('prenom') }}" autofocus>

@if ($errors->has('prenom'))
<span class="help-block">
<strong>{{ $errors->first('prenom') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<label for="name" class="col-md-4 control-label">CIN</label>

<div class="col-md-6">
<input id="name" type="text" class="form-control" name="cin" value="{{ old('cin') }}" autofocus>

@if ($errors->has('prenom'))
<span class="help-block">
<strong>{{ $errors->first('cin') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<label for="name" class="col-md-4 control-label">Téléphone</label>

<div class="col-md-6">
<input id="name" type="text" class="form-control" name="tele" value="{{ old('tele') }}" autofocus>

@if ($errors->has('tele'))
<span class="help-block">
<strong>{{ $errors->first('tele') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<label for="name" class="col-md-4 control-label">Matricule</label>

<div class="col-md-6">
<input id="name" type="text" class="form-control" name="mat" value="{{ old('mat') }}" autofocus>

@if ($errors->has('mat'))
<span class="help-block">
<strong>{{ $errors->first('mat') }}</strong>
</span>
@endif
</div>
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
<label for="email" class="col-md-4 control-label">E-Mail Address</label>

<div class="col-md-6">
<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

@if ($errors->has('email'))
<span class="help-block">
<strong>{{ $errors->first('email') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
<label for="password" class="col-md-4 control-label">Password</label>

<div class="col-md-6">
<input id="password" type="password" class="form-control" name="password">

@if ($errors->has('password'))
<span class="help-block">
<strong>{{ $errors->first('password') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

<div class="col-md-6">
<input id="password-confirm" type="password" class="form-control" name="password_confirmation">

@if ($errors->has('password_confirmation'))
<span class="help-block">
<strong>{{ $errors->first('password_confirmation') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group">
<div class="col-md-6 col-md-offset-4">
<button type="submit" class="btn btn-primary">
Register
</button>
</div>
</div>
</form>
        <div class="sign-down">
          <h4>Already have an account? <a href="{{url('/admin/login')}}"> Login here.</a></h4>

          </div>
          </div>
          </div>
          </div>


<!--COPY rights end here-->
<!--scrolling js-->
<script src="{{URL::asset('backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{URL::asset('backend/js/scripts.js')}}"></script>
<!--//scrolling js-->
<script src="{{URL::asset('backend/js/bootstrap.js')}}"> </script>
<!-- mother grid end here-->
</body>
</html>
