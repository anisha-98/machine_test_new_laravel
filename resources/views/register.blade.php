<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

 <style>
  
  </style>
    </head>
    <body>
   
<!-- nav section start -->

<!------ Include the above in your HEAD tag ---------->
<!-- main section start -->
<nav class="navbar navbar-expand-lg bg-warning p-3">
        <a href="#"><i class="fa fa-arrow-left text-white px-3" aria-hidden="true"></i></a>
        <h5 class="text-white px-4">Register</h5>
    </nav>
<section class="">
<div class="container ">
<div class="row">

<form action="insert" method="post" class="border border-2 border-light p-5 rounded-bottom rounded">
  @csrf
  <div>
                        @if(Session::get('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        @if(Session::get('fail'))
                            <div class="alert alert-danger">
                                {{Session::get('fail')}}
                            </div>
                        @endif
                        @if($errors->has('email'))
                            <div class="alert alert-danger">
                                {{$errors->first('email')}}
                            </div>
                        @endif
</div>


  <div class="form-group">
    <label class="control-label col-sm-4 mt-4">Name:</label><input type="text" name="name"><br>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4 mt-4">Date of Birth:</label><input type="date" name="dob" placeholder="pickdate"><br>
  </div>
  
<div class="form-group">
  <label class="control-label col-sm-4 mt-4">Mail Id:</label><input type="text" name="email"><br>
</div>
<div class="form-group">
  <label class="control-label col-sm-4 mt-4">password:</label><input type="password" name="password"><br>
</div>
  <button class='btn bg-danger mt-4 text-align-center'>Submit</button>



  </form>
 </div>
</div>
</section>
<!-- main section end -->
<section class="">
</section>
       <!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js"></script>
    </body>
</html>

