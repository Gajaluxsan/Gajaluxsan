<?php include 'include/link.inc.php';
    
            include ('include/bfheader.inc.php');
?>

<!-- <div class="container-sm" style="margin-top: -45px;">
    <div class="row">
        <div class="col-1">jjj</div>
        <div class="col-2">jjj</div>
        <div class="col-2">jjj</div>
        <div class="col-2">jjj</div>
        <div class="col-2">jjj</div>
        <div class="col-1">jjj</div>
    </div>
</div> -->





<div class="container-sm ">
<div class="col-sm|md|lg|xl-1-12|auto">
      
</div>
</div>

<div class="container-sm mt-5">
<div class="row row-cols-4  ">
   <?php 
   for ($i=0; $i < 20; $i++) { 
       echo '<div class="col-sm|md|lg|xl-1-12|auto">
       <div class="card text-center" style="">
        <img class="card-img-top" src="include/pr_img/gajaluxsan.jpg" alt="Card image cap">
        <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
        <a href="!" class="btn btn-primary">Go somewhere</a>
           </div>
       </div></div>';
   }



    ?>
</div>
</div>
