    <?php
        ob_start();
   session_start(); 
      

include('include/header.inc.php'); 
include('class/test.php');
     ?>
<section id="loginid">
<div class="container-fluid" style="background: hsl(71, 0%, 33%,0.25); margin-top: -50px;padding-top: 50px;">
<div class="container-sm">
        
    <div class="row justify-content-md-center text-center">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 mt-5 mb-5" id="clogin">
            <div class="repan"><img src="assets/image/fimage/rippan3.png" width="250" height="150"></div>
              <p class="fw-bold fs-1 colop1">Login</p>
              <form class="loinform" method="post" name="lforms" onsubmit="return loginfun()">
                  <input type="text" name="lname" placeholder="Enter Username"><br>
                  <input type="password" name="lpass" placeholder="Enter Password"><br>
                  <p class="mb-2 text-danger" id="logerror"></p>
                  <button class="fs-3 fw-bold" name="login" >Login</button>
              </form>
              <div class="mb-4">
              <a href="register.ur.php" class="itslink">Need an account? <span style="color:orange;">Sign up</span> </a> <div class=" mt-2"><a  class="itslink" style="text-decoration: underline ;" href="forget.php">Forgot Your Password?</a></div>
          </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
    
</div>
    </div>

</section>
<?php 
if (isset($_GET['signup'])) {
    if ($_GET['signup'] == 'susses') {
       
    }
}
if(isset($_POST['login'])){

$uname=$_POST['lname'];
$password=$_POST['lpass'];
$password=bin2hex($password);

$text =new test();
$out =$text->login($uname,$password);
// $cusid =$text->getcusid($uname,$password);
if ($out) {
        $text1 =new test();
        $cusid = $text1->fidcuid($uname);
        $_SESSION['cid'] =$cusid;

        $logid = $text1->logdetails($cusid,$_SERVER['HTTP_USER_AGENT'],$_SERVER['HTTP_REFERER']);
        $_SESSION['log_id'] =$logid;
        $_SESSION['name']=$_POST['lname'];
         header("Location: aflog/afuser.php");
    exit;
         
}

else{
   echo "<h1>password wrong</h1>";

}
}



 ?>
<footer>
<?php include('include/footer.inc.php');  ?>
</footer>















