@extends('master')

@section('content')
<div class="container">
<div class="row">
    <div class="span6 center">
        <div class="span2 center">
    <h2> Login </h2>
        </div>
    <form action="login" method="POST">
        
       <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="email" placeholder="Enter your Email" required>
                                
         </div>
         <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" placeholder="Enter your Password" required>
                                
         </div>
         <div class="span2 center">
      <input type="submit" value="Login " class="btn btn-lg btn-primary" >
         </div>
        
    </form>
    </div>
</div>
    </div>
@stop
