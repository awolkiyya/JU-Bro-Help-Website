@extends("layout.common")
@section("tittle","login page")
@section("login")
<div class="wrapper fadeInDown">
    <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Login Form</h2>
    <!-- Icon -->
    <div class="fadeIn first">
    <img src="{{ asset("Assets/image/brainstorm.png") }}" id="icon" alt="User Icon"  style="width: 40px"/>
    </div>
    
    <!-- Login Form -->
    <form action="{{ route('validation') }}" method="POST">
    @csrf
    <div class="form-group">
    <input type="email" id="login" class=" form-control @error('email') is-invalid @enderror fadeIn second" name="email" placeholder="Email" value="{{ old('email') }}">
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    </div>
    <div class="form-group">
    <input type="password" id="password" class=" form-control  @error('password') is-invalid @enderror fadeIn third" name="password" placeholder="password" value="{{ old('password') }}">
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror    
    </div>
    <input type="submit" class="fadeIn fourth" value="Log In">
    </form>
    
    <!-- Remind Passowrd -->
    <div id="formFooter">
    <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
    
    </div>
    </div>
@endsection