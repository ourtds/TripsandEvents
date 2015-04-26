@extends('master')

@section('content')
<div class="container">
<div class="row">
    <div class="span6 center">
        <div class="span2 center text-center">
        <h2>Registration</h2>
        
        </div>
    <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#User" aria-controls="User" role="tab" data-toggle="tab">User</a></li>
    <li role="presentation"><a href="#Organization" aria-controls="Organization" role="tab" data-toggle="tab">Organization</a></li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="User">
    
      <form action="register" method="post">
        
       <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name" placeholder="Enter your Name" required>
                                
         </div>
         
          <div class="form-group">
            <label>Username</label>
            <input class="form-control" type="text" name="username" placeholder="Enter your Username" required>
                                
         </div>
         
         
          <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="email" name="email" placeholder="Enter your Email" required>
                                
         </div>
         
        
         <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" name="password" placeholder="Enter your Password" required>
                                
         </div>
         <div class="span2 center text-center">
      <input type="submit" value="Register " class="btn btn-lg btn-primary" >
         </div>
          <input type="hidden" name="_token" value="{{ csrf_token()}}" >
    </form>
    
    
    </div>
      <div role="tabpanel" class="tab-pane" id="Organization">
       
          <form action="register" method="post">
        
       <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name" placeholder="Enter your Name" required>
                                
         </div>
              
               <div class="form-group">
            <label>Organization Name</label>
            <input class="form-control" type="text" name="organizationname" placeholder="Enter your Organization Name" required>
                                
         </div>
         
          <div class="form-group">
            <label>Username</label>
            <input class="form-control" type="text" name="username" placeholder="Enter your Username" required>
                                
         </div>
         
         
          <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="email" name="email" placeholder="Enter your Email" required>
                                
         </div>
         
        
         <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" name="password" placeholder="Enter your Password" required>
                                
         </div>
         <div class="span2 center text-center">
      <input type="submit" value="Register " class="btn btn-lg btn-primary" >
         </div>
        <input type="hidden" name="_token" value="{{ csrf_token()}}" >
    </form>
    
          
          
      </div>
   
  </div>
    </div>
</div>
    
</div>
    </div>
@stop