<?php
 // include('link.inc.php'); 
include('link.inc.php');  
?>
<!-- <title><?php if(isset($_SESSION['name'])){echo $_SESSION['name'];}else{ header("Location: /puupys/ulogin.ua.php"); }?></title> -->

<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark" style="margin-bottom: 5%; background-color: #1C2B36;">
  <a class="navbar-brand fs-1 ms-5 fw-bold" href="#"><span style="color: #209E91;">Cutey</span>.set</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav navbar-right">
     <li class="nav-item mt-4 me-4">
        <a class="nav-link" href="#">
         <i class="fa fa-shopping-cart" style="font-size:36px; color:white;">
            <span class="badge badge-info " style="font-size:10px;background-color: green;  color:white;">11</span>
          </i>
        </a>
      </li>
     <li class="nav-item mt-4 me-4">
        <a class="nav-link" href="#">
         <i class="fa fa-bell" style="font-size:36px;color:white; ">
            <span class="badge badge-info " style="font-size:12px;background-color: green;  color:white;">11</span>
          </i>
        </a>
      </li>

      <li class="nav-item headerprofile">
        <form method="post" >
        <a class="nav-link" href="#" >
            <button class="btn btn-secondary dropdown-toggle " style="background:transparent; border: none;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <img  src="/puupys/aflog/include/pr_img/defult.png" id="profileimg" width="50" height="50" style="border-radius:25px ;">
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="<?php if(isset($_SESSION['name'])){echo '';}?>">Add Post</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
  </div>
        </a>
        </form>
       <script>document.getElementById("profileimg").src="/puupys/aflog/include/pr_img/<?php echo $_SESSION["img"]; ?>";</script>
      </li>
    <li class="nav-item">
      <div class="mt-3">
      <button class="btn btn-outline-success fs-1 text-white ms-4 p-1 fw-bold me-5 my-sm-0" type="submit" ><?php echo $_SESSION['name'];?></button>
</div>
  </li>
  </ul>
  </div>
  
</nav>
