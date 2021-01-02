@extends('master')
@section("content")



<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h1>Register User</h1></br></br>
            <form action="register" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName">User Name<span style="color:red;">*</span></label>
                    <input type="text" name="uname" class="form-control" id="exampleInputName" placeholder="User Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address<span style="color:red;">*</span></label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password<span style="color:red;">*</span></label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                    <button type="submit" class="btn btn-success">Register</button>
            </form>
        </div>
    </div>
</div>
<br><br><br><br><hr>

@endsection