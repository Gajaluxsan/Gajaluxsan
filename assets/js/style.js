






function ValidateEmail(input){
    if (input.value.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)){
       alert("welcome");     
        return true;
    }
    else {
 alert("welcome false");
        return false;
    }
}
var input = document.getElementById("lastonr");
input.addEventListener("keypress", function(event) {
  if (event.key === "Enter") {
    event.preventDefault();
    document.getElementById("addan").click();
  }
});


      

form.addEventListener('submit',(e) =>{
    e.preventDefault();
    checkinput();

});

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
    vname=name.value;
    vtype=type.value;
    vbreed=breed.value;
    vcolor=color.value;
    vdob=dob.value;
    vprice=price.value;
    vloctn=loctn.value;
    vgender=gender.value;
    vvaccine=vaccine.value;
    vimg1=img1.value;
    vtrain=train.value;
    vabout=about.value;
    if (vname === '') {
        seterror('namer','* Enter Valid Pet_Name ');
    }
    else{
        set_susses('namer','');
    }
    if (vtype === 'Type') {
       seterror('typer','* Select Pet Type');
   }
   else{
    set_susses('typer','Select '+vtype+' ');
}
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
// function set_breed(){
//     var type =document.getElementById('ptype').value;
//     document.cookie = "Breed="+type;
//     <?php 

//     if(!isset($_COOKIE['Breed'])){
//         $type = $_COOKIE['Breed'];
//     $rs1 =new controller();
//     $breeds = $rs1->getRs("SET @p0='$type'; CALL `findbreed`(@p0); ");
//     while($breed =$breeds->fetch_assoc()){
//         $_COOKIE['num']=$breed['breed_name'];
//         ?>

//           let num = getCookie("num");
//         const inpu =document.getElementsByClassName('breed')[0];
//         const select =inpu.querySelector('select');
//         var option = document.createElement("option");
//         option.text = num;
//           select.add(option);
//         <?php
//     }}?>

// }



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



 

// function EmailValidation(enteredEmail)
// {
// var mail_format = "/^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/";
// if(enteredEmail.value.match(enteredEmail))
// {
// alert("Yeah! a valid email!");
// document.form1.text1.focus();
// return true;
// }
// else
// {
// alert("Sorry! an invalid email!");
// document.form1.text1.focus();
// return false;
// }
// }

