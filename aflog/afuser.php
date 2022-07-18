
	<?php 
	   session_start(); 
	     if (isset($_SESSION['name'])){
			
	     	include ('include/bfheader.inc.php');
	     	include ('class/autocaller.class.php');
			 $n =new profile();
			 $nn =$n->getimgadd('gajaluxsn');
			$_SESSION['img'] ='gajaluxsan.jpg';
		?>

<section class="search-banner text-white py-5 "  style="background-image: url('/puupys/assets/image/bg1.jpg');background-size: 100%; background-repeat: no-repeat; margin-top: -5%;" id="search-banner">
    <div class="container py-2 my-1 ">
    <div class="row text-center pb-1">
        <div class="col-md-12">
            <h2 class="fw-bold ">Find your new best friend</h2>
<h4>Browse pets from our network of over 11,500 shelters and rescues.</h4>
        </div>
    </div>   
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body serchbar">
                    <div class="row">
                <div class="col-md-2">
                    <div class="form-group ">
                          <select id="inputState" class="form-control" style="height: 30px;">
                            <option selected>... Select Location...</option>
                            <option>New</option>
                            <option>Used</option>
                          </select>
                        </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group ">
                          <select id="inputState" class="form-control"  style="height: 30px;" >
                            <option selected>... Select Type...</option>
                            <option>BMW</option>
                            <option>Audi</option>
                            <option>Maruti</option>
                            <option>Tesla</option>
                          </select>
                        </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group ">
                          <select id="inputState" class="form-control"  style="height: 30px;">
                            <option selected>... Select breed...</option>
                            <option>City</option>
                            <option>Jazz</option>
                            <option>Brio</option>
                            
                          </select>
                        </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group ">
                          <select id="inputState" class="form-control"  style="height: 30px;">
                            <option selected>... Select age...</option>
                            <option>New Delhi</option>
                            <option>Banglore</option>
                            <option>Chennai</option>
                            <option>Jaipur</option>
                          </select>
                        </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group ">
                          <select id="inputState" class="form-control"  style="height: 30px;">
                            <option selected>... Select lastest...</option>
                            <option>1 Lac-5 Lac</option>
                            <option>5 Lac-10 Lac</option>
                            <option>10 Lac-15 Lac</option>
                            <option>15 Lac-20 Lac</option>
                            <option>20 Lac-25 Lac</option>
                            <option>25 Lac & Above</option>
                          </select>
                        </div>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-dark">Search Pet's</button>

                </div>
            </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
</section>


<a href="addanimal.php">Welcome</a>
<?php 
print_r($_SESSION);
 ?>




















		<?php
	
	     }
	     else{
	     	 header("Location: /puupys/ulogin.ua.php");
	     }

?>


















<?php	



include ('include/bfooter.inc.php'); 
	?>
