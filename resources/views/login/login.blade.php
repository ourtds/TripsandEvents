@extends('master')

@section('content')
<div class="container">
<div class="row">
    <h2> login </h2>
    <form action="login" method="POST">
        
        <input type ="email" name="email" required/>
        <input type ="password" name="password" required/>
        <input type="submit" value="Login" />
        
    </form>
    
</div>
    </div>
@stop
