<?php 
session_start(); 

if (isset($_SESSION['name']) && isset($_SESSION['cid'])){
	include('include/link.inc.php'); 
	include ('include/bfheader.inc.php');
	include ('class/autocaller.class.php');
	$n =new profile();
	$nn =$n->getimgadd('gajaluxsn');
	$_SESSION['img'] ='gajaluxsan.jpg';
	$rs =new controller();
	$stmt = $rs->getRs("SELECT DISTINCT(`type`) FROM `animaltype`");

    $na="";
    $ty="";
    $br="";
    $co="";
    $da="";
    $pr="";
    $lo="";
    $ge="";
    $va="";
    $tr="";
    $ab="";
    if (isset($_GET['add'])) {
        $er =$_GET['add'];
        if($er == 'img'){
            $arr = unserialize($_GET["ar"]); 
            $error ='* image Have Some Problems';
            $na=$arr['name'];
            $ty=$arr['type'];
            $br=$arr['breed'];
            $co=$arr['color'];
            $da=$arr['date'];
            $pr=$arr['price'];
            $lo=$arr['location'];
            $ge=$arr['gender'];
            $va=$arr['vaccine'];
            $tr=$arr['training'];
            $ab=$arr['about'];
        }
        
    }


    ?>
    <head>
        <script type="text/javascript" href="../assets/js/style.js"></script>
    </head>
    <body>
        <div class="myback">
            <div class="container-sm mt-auto mt-5">
                <div class="row ">
                    <div class="col-sm-3 "></div>
                    <div class="addani col-sm-6 col-md-6 col-lg-6">
                        <h1 class="text-center mt-5 mb-2 fs-1 fw-bold text-white mt-4">Post New Ad</h1>
                        <hr>
                        <div class="addanimal">
                            <form  method="post" id="form" action="class/animaladd.class.php" onsubmit="return checkinput()" enctype="multipart/form-data" >

                                <div class="namer inputer ">
                                    <p>Enter Pet Name :</p>
                                    <input  type="text" name="name" id="pname" value="<?php echo $na ?>">
                                    <i class="fa fa-info"></i>
                                    <i class="fa fa-check "></i>
                                    <small>* Enter The Pet Name</small>
                                </div>

                                <div class="typer inputer">	
                                    <form method="get" action="class/logout.class.php" id =breedform> 
                                        <p> Select Type :</p>
                                        <select name="type" id="ptype" >
                                            <option selected><?php 
                                            if ($ty == '') {
                                                echo 'Type';
                                            }
                                            else{
                                                echo $ty;
                                            }
                                        ?></option>
                                        <?php 
                                        while($row =$stmt->fetch_assoc()){
                                          echo '<option >'.$row['type'].'</option >';
                                      }
                                      ?>
                                  </select>
                                  <i class="fa fa-info"></i>
                                  <i class="fa fa-check "></i>
                                  <small>* Select Pet Type Eg-> Dog</small>
                              </form>
                          </div>
                          <script>
                            $(document).ready(function() {

                                $('#ptype').change(function() {
                                    
                                    loadBreed($(this).find(':selected').val())
                                })


                            });
                            function loadBreed(type) {
                                $("#pbreed").children().remove()
                                $.ajax({
                                    type: "POST",
                                    url: "class/ajax.class.php",
                                    data: "get=breed&type=" + type 
                                }).done(function(result) {
                                    $("#pbreed").append($(result));

                                });
                            }

                        </script>




                        <div class="breede inputer">

                           <p> Select Breed :</p>
                           <select name="breed" id="pbreed" value="<?php echo $br ?>" >
                            <option selected><?php 
                            if ($br == '') {
                                echo 'Breed';
                            }
                            else{
                                echo $br;
                            }
                        ?></option>
                        <option>new</option>
                    </select>
                    <i class="fa fa-info"></i>
                    <i class="fa fa-check "></i>
                    <small>* Select You Pet Breed</small>
                    
                </div>

                <div class="color inputer "> 
                   <p>Enter Pet Color :</p>
                   <input type="text" name="color" id="pcolor" value="<?php echo $co ?>">
                   <i class="fa fa-info"></i>
                   <i class="fa fa-check"></i>
                   <small> * Enter Pet Color</small>
               </div>

               <div class="date inputer">
                   <p>Date Of Birth :</p>
                   <input type="date" name="date" id="pdob" value="<?php echo $da ?>">
                   <i class="fa fa-info"></i>
                   <i class="fa fa-check "></i>
                   <small>* Select Pet Date of Birth</small>
               </div>

               <div class="price inputer">
                   <p>Enter Sale Price :</p>
                   <input type="text" name="price" id="pprice" value="<?php echo $pr ?>">
                   <i class="fa fa-info"></i>
                   <i class="fa fa-check "></i>
                   <small>* Enter Your Sale Price</small>
               </div>

               <div class="Location inputer">
                   <p>Pet Location :</p>
                   <input type="text" name="location" id="plocation" value="<?php echo $lo ?>">
                   <i class="fa fa-info"></i>
                   <i class="fa fa-check "></i>
                   <small>* Pet Current Location</small>
               </div>

               <div class="gender inputer">
                   <p>Gender :</p>
                   <select name="gender" id="pgender" value="<?php echo $ge ?>">
                    <option selected>
                        <?php 
                        if ($ge == '') {
                            echo 'Gender';
                        }
                        else{
                            echo $ge;
                        }
                        ?>
                    </option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
                <i class="fa fa-info"></i>
                <i class="fa fa-check "></i>
                <small>Select Pet Gender</small>
            </div>

            <div class="vaccined inputer">
               <p> vaccined :</p>
               <select name="vaccine" id="pvaccine" >
                <option selected>
                 <?php 
                 if ($va == '') {
                    echo 'vaccine';
                }
                else{
                    echo $va;
                }
                ?>

            </option>
            <option>vaccined</option>
            <option>Not vaccined</option>
        </select>
        <i class="fa fa-info"></i>
        <i class="fa fa-check "></i>
        <small>* Select Vaccine  </small>
    </div>

    <div class="image1 inputer ">
       <p>Uplord Image1 :</p>
       <label id="img1lable">
         <p class="fs-2">Select Image</p>
         <i id="fa-camara" class="fa fa-2x fa-camera"></i>

         <input type="file" name="img1" id="pimg1" accept="image/png, image/jpg, image/gif, image/jpeg">
     </label>
     <i class="fa fa-info"></i>
     <i class="fa fa-check "></i>
     <small>* Uplord Valid img</small>
 </div>
 <div class="taining inputer">
   <p>Taining :</p>
   <textarea name="training"  rows="4" cols="50" id="ptrain"><?php echo $tr ?></textarea>
   <i class="fa fa-info"></i>
   <i class="fa fa-check "></i>
   <small>Write More Then 100 letter's</small>
</div>

<div class="about inputer">
   <p>About Pet :</p>
   <textarea name="about" rows="4" cols="50" id="pabout" ><?php echo $ab ?>
</textarea>

<i class="fa fa-info"></i>
<i class="fa fa-check "></i>
<small>Write More Then 100 letter's</small>
</div>
<div class="btngroun">
    <input type="submit" name="animaladd">
    <input type="reset">
</div>
</form>
</div>

</div>
<div class="col-sm-3"></div>
</div>
</div>
</div>
</body>


<script type="text/javascript">



    function checkinput(){
        var form =document.getElementById('form');
        var name =document.getElementById('pname');
        var type =document.getElementById('ptype');
        var breed =document.getElementById('pbreed');
        var color =document.getElementById('pcolor');
        var dob =document.getElementById('pdob');
        var price =document.getElementById('pprice');
        var loctn =document.getElementById('plocation');
        var gender =document.getElementById('pgender');
        var vaccine =document.getElementById('pvaccine');
        var img1 =document.getElementById('pimg1');
        var train =document.getElementById('ptrain');
        var about =document.getElementById('pabout');
        vname=name.value.trim();
        vtype=type.value.trim();
        vbreed=breed.value.trim();
        vcolor=color.value.trim();
        vdob=dob.value.trim();
        vprice=price.value.trim();
        vloctn=loctn.value.trim();
        vgender=gender.value.trim();
        vvaccine=vaccine.value.trim();
        vimg1=img1.value.trim();
        vtrain=train.value.trim();
        vabout=about.value.trim();
        out = true;
        if (vname == '' || vname == null || (1>vname.length)) {
            seterror('namer','* Enter Valid Pet_Name ');
            name.focus();
            out = false;
        }
        else{
            set_susses('namer','Pet Name is '+vname +' ');

        }
        if (vtype == 'Type' || vtype == null) {
           seterror('typer','* Select Pet Type');
           out = false;
           type.focus();
       }
       else{
        set_susses('typer','Select '+vtype+' ');
    }
    if (vbreed == 'Breed' || vbreed == null) {
       seterror('breede','* Select Pet Breed');
       out = false;
       breed.focus();
   }
   else{
    set_susses('breede','Select '+vbreed+' ');
}
if (vcolor == '' || vcolor == null || (2>vcolor.length)) {
   seterror('color','* Select Pet Color');
   out = false;
   color.focus();
}
else{
    set_susses('color','Select '+vcolor+' ');
}
if (vdob == '' || vdob == null) {
   seterror('date','* Select Pet Birth Date');
   out = false;
   dob.focus();
}
else{
    set_susses('date','Select '+vdob+' ');
}
if (vprice == '' || vprice == null || (1>vprice.length) || isNaN(vprice)) {
   seterror('price','* Enter Pet Sale Price');
   out = false;
   price.focus();
}
else{
    set_susses('price','Pet Price is '+vprice+' ');
}
if (vloctn == '' || vloctn == null || (5>vloctn.length)) {
   seterror('Location','* Enter Pet Location');
   out = false;
   loctn.focus();
}
else{
    set_susses('Location','Pet Current Location is '+vloctn+' ');
}
if (vgender == 'Gender' || vgender == null) {
   seterror('gender','* Select Pet gender ');
   out = false;
   gender.focus();
}
else{
    set_susses('gender','Pet is '+vgender+' ');
}
if (vvaccine == 'vaccine' || vvaccine == null) {
   seterror('vaccined','* Select Pet vaccine ');
   out = false;
   vaccine.focus();
}
else{
    set_susses('vaccined','Pet is '+vvaccine+' ');
}
if (vtrain == '' || vtrain == null|| (100>vtrain.length)) {
   seterror('taining','*Do You train You pet More Then 100 letters');
   out = false;
   train.focus();
}
else{
    set_susses('taining','Thank for you');
}
if (vabout =='' || vabout == null || (100>vabout.length)) {
   seterror('about','* Enter About you pet More Then 100 letters');
   out = false;
   about.focus();
}
else{
    set_susses('about','Thank for you');
}
if (vimg1 =='' || vimg1 == null ) {
   seterror('image1','* Select You pet image');
   out = false;
   img1.focus();
}
else{
    set_susses('image1','Select image '+vimg1+' ');
}
return out;
}
function seterror(input,message){
   const inputer =document.getElementsByClassName(input)[0];
   const small =inputer.querySelector('small');
   small.innerText =message;
   inputer.className = input+" inputer error";
}
function set_susses(input,message){
   const inpute =document.getElementsByClassName(input)[0];
   const smal =inpute.querySelector('small');
   smal.innerText =message;
   inpute.className = input+" inputer success";
}

function formsubmit(){
 document.forms["breedform"].submit();
}


let input = document.getElementById("pimg1");
input.addEventListener("change", ()=>{
    imagechack(input,'img1lable',0);

});




function imagechack(obj,lab,nu){
    let inputImage = document.querySelector("input[type=file]").files[0];
    let itype = inputImage.type;
    let validExtensions = ["image/jpeg", "image/jpg", "image/png"];
    if(validExtensions.includes(itype)){
        var mage =document.getElementById(lab);

        mage.style.backgroundImage = "url('../assets/image/cat.svg')"; 
        mage.style.backgroundRepeat = "no-repeat"; 
        mage.style.backgroundSize ='100% 100%';

        const inpute =document.getElementsByClassName('image1')[nu];
        inpute.className = "image1 inputer remove";
    }

}




</script>












<?php

}
else{
	header("Location: /puupys/ulogin.ua.php?signup=emp");
}

?>



<?php	



include ('include/bfooter.inc.php'); 
?>