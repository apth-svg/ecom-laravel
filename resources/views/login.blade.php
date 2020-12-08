@extends('master')

@section('css')
   <style>
       .custom-login{
           height:500px;
           padding-top:100px;
       }
   </style>
@endsection

@section('content')
   <div class="container custom-login">
    <div class="row">
        <div class="col-md-4 offset-md-4">
             <form action="login" method="POST">
                 @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>    
   </div>
@endsection
