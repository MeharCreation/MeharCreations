<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel= "stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/
  css?family=Josefin+Sans&display=swap" rel="stylesheet">
  
</head>
<body>
<?php include 'menu.php'?>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/OIP.jpeg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/download.jpeg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/rr.jpeg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>




<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Sign In</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
         <div class="form-group">
            <label>Username</label>
            <input type="text" name="user"  autocomplete="off" class="form-control">

         </div>
         <div class="form-group">
            <label>Email Id</label>
            <input type="text" name="email"  autocomplete="off" class="form-control">

         </div>
         <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="mobile"  autocomplete="off" class="form-control">

         </div> 
         <div class="form-group">
            <label>Comments</label>
            <textarea class="form-control" name="comments">

            </textarea>

         </div>
         <button type="submit" class="btn btn-success">Submit</button> 
        </form>
    </div>
</section>
<footer>
    <p class="p-3 bg-dark text-white text-center">@kau14905</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>