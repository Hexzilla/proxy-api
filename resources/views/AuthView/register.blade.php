@extends('AuthView.login-template')
@section('content')
<div class="row">
    <div class="col-md-5 mx-auto">
        <div id="second">
            <div class="myform form ">
            <div class="logo mb-3">
                <div class="col-md-12 text-center">
                    <h1 >Signup</h1>
                </div>
            </div>
            <form action="#" name="registration">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text"  name="firstname" class="form-control noBoxShadow" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text"  name="lastname" class="form-control noBoxShadow" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email"  class="form-control noBoxShadow" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password" id="password"  class="form-control noBoxShadow" aria-describedby="emailHelp" placeholder="Enter Password">
                </div>
                <div class="col-md-12 text-center mb-3">
                    <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm noBoxShadow">Get Started For Free</button>
                </div>
                <div class="col-md-12 ">
                    <div class="form-group">
                        <p class="text-center"><a href="{{url('signin')}}" id="signin">Already have an account?</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection