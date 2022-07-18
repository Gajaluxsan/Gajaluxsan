<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/javascript" href="assets/js/style.js"> -->
    <script type="text/javascript" src="assets/js/style.js"></script>

    <?php include('include/header.inc.php'); 
    ?>
</head>

<body>
    <?php 
// include('class/test.php');
include('class/cuslogreg.class.php');
 $ff= "";
 $ll="";
 $em="";
 $ad="";
 $zi="";
 $pn="";
 $un="";
  $error="";
if (isset($_GET['signup'])) {
   
    $er =$_GET['signup'];
    if($er = "aldy"){
         $error="*use Anouther email OR Username";
        // echo "<script>alert('Is Already You Added');</script>";
    }
    elseif ($er == "em"){
         $arr = unserialize($_GET["ar"]); 
        $error="* Enter Valied Email";
        "<script>document.getElementById('eemail').focus();</script>";
         $ff= $arr['fname'];
         $ll= $arr['lname'];
         $ad= $arr['address'];
         $zi= $arr['zip'];
         $pn= $arr['fname'];
         $un =$arr['upno'];
    }
     elseif ($er == "pe"){
         $arr = unserialize($_GET["ar"]); 
        $error="* Enter Valied Phone No";
        echo "<script>document.getElementById('eemail').focus();</script>";
         $ff= $arr['fname'];
         $ll= $arr['lname'];
         $ad= $arr['address'];
         $zi= $arr['zip'];
         $pn= $arr['fname'];
         $em =$arr['email'];
    }
     elseif ($er == "chronly"){
         $arr = unserialize($_GET["ar"]); 
        $error="* Can't Use Number's In Names";
        echo "<script>document.getElementById('eemail').focus();</script>";
         $ad= $arr['address'];
         $zi= $arr['zip'];
         $pn= $arr['fname'];
         $em =$arr['email'];
         $un =$arr['upno'];
    }
     elseif ($er == "emp"){
         $arr = unserialize($_GET["ar"]); 
        $error="* Enter Full Details";
        echo "<script>document.getElementById('eemail').focus();</script>";
         $ad= $arr['address'];
         $zi= $arr['zip'];
         $pn= $arr['fname'];
         $em =$arr['email'];
         $un =$arr['upno'];
         $ff= $arr['fname'];
         $ll= $arr['lname'];
    }


}



?>


    <section id="registerid">
        <div class="container-fluid registeri">
            <div class="container-sm">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 mt-5 mb-4  text-center registermenu">
                        <h1 class="mt-5">Sign up</h1>
                        <form name="formre" action="class/cuslogreg.class.php" method="post"
                            onsubmit="return sfuncode()">
                            <div class="reform">
                                <div class="row reformmenu">
                                    <div class="col-md-6 col-sm">
                                        <input type="text" name="fname" placeholder="First Name " value="<?php echo $ff ?>">
                                        <select name="county" id="cosel" >
                                            <option selected>country</option>

                                        </select>
                                        <input type="text" name="email" id="eemail" placeholder="Email" value="<?php echo $em ?>">
                                        <input type="text" id="radd" name="address" placeholder="Address" value="<?php echo $ad ?>">
                                        <input type="password" id="rpass" name="pass" placeholder="Create Password">
                                        <!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" -->


                                    </div>
                                    <div class="col-md-6 col-sm">
                                        <input type="text" id="rlname" name="lname" placeholder="Last Name" value="<?php echo $ll ?>">
                                        <input type="text" id="uuname" name="uname" placeholder="UserName" value="<?php echo $un ?>">
                                        <input type="text" id="rzip" name="zip" placeholder="Zip code" maxlength="20" value="<?php echo $zi ?>">
                                        <input type="text" id="upno" name="upno" placeholder="Enter Phone No "
                                            maxlength="12" value="<?php echo $un ?>">
                                        <input type="password" id="repass" name="repassword" placeholder="Re-password ">
                                        <!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  -->
                                    </div>
                                    <p class="mt-4 text-danger" id="errorBox">
                                      <?php echo $error ?>
                                    </p>
                   

                                </div>
                                <div class="row mt-1">
                                    <div class="col-sm-2 text-end">
                                        <input type="checkbox" name="chacker" id="rchack">
                                    </div>
                                    <div  class="col-sm-6 text-start mb-1">
                                        <label>I’d like to receive email and other communications from cuttyset and its
                                            brands. Read the Privacy Policy and About Our Ads. </label>
                                    </div >
                                    <div class="col-sm-4"></div>
                                    <div class="col-3 anger"></div>
                                </div>
                                <div class="mt-3">
                                    <input type="submit" name="signup" class="btn btn-primary" value="Sign up">
                                    <p><a href="ulogin.ua.php" class="itslink">Already have an account? Login</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </div>






        
        <script type="text/javascript">
function sfuncode() {
    var fname = document.forms['formre']['fname'].value;
    var email = document.forms['formre']['email'].value;
    var password = document.getElementById('rpass').value;
    var lname = document.getElementById('rlname').value;
    var zip = document.getElementById('rzip').value;
    var uname = document.getElementById('uuname').value;
    var repassword = document.getElementById('repass').value;
    var chacker = document.getElementById("rchack").checked;
    var county = document.getElementById("cosel").value;
    var address = document.getElementById("radd").value;
    var phone = document.getElementById("upno").value;


    // alert(county);

    if (fname == "" || fname == null) {
        document.getElementById('errorBox').innerHTML = " * Enter Valid First Name";
        document.formre.fname.focus();
        return false;
    }
    if (lname == "" || lname == null) {
        document.getElementById('errorBox').innerHTML = "* Enter Last Name";
        document.formre.lname.focus();
        return false;
    }
    if (county == "country") {
        document.getElementById('errorBox').innerHTML = "* Enter country Name";
        document.formre.county.focus();
        return false;
    }
    if (uname == "" || name == null) {
        document.getElementById('errorBox').innerHTML = "* Enter UserName";
        document.formre.uname.focus();
        return false;
    }
    if (email == "" || email == null) {
        document.getElementById('errorBox').innerHTML = "* Enter Valid Email";
        document.formre.email.focus();
        return false;
    }

    if (zip == "" || zip == null) {
        document.getElementById('errorBox').innerHTML = "* Enter City Zip Code";
        document.formre.zip.focus();
        return false;
    }
    if (address == "" || address == null ) {
        document.getElementById('errorBox').innerHTML = "* Enter Address";
        document.formre.address.focus();
        return false;
    }
    if (password == "" || password == null) {
        document.getElementById('errorBox').innerHTML = "* Enter password";
        document.formre.rpass.focus();
        return false;
    }
    if (phone == "" || phone == null) {
        document.getElementById('errorBox').innerHTML = "* Enter PhoneNo";
        document.formre.upno.focus();
        return false;
    }
    if (phone.length > 10) {
        document.getElementById('errorBox').innerHTML = "* Enter valied PhoneNo";
        document.formre.upno.focus();
        return false;
    }
    if (repassword == "" || repassword == null) {
        document.getElementById('errorBox').innerHTML = "* Enter Re-Type Password";
        document.formre.repass.focus();
        return false;
    }
    if (!(password === repassword)) {
        document.getElementById('errorBox').innerHTML = "* Password Not mutch";
        document.formre.repass.focus();
        return false;
    }
    if (chacker === false) {
        document.getElementById('errorBox').innerHTML = "* You can allow us Therme";
        document.formre.chacker.focus();
        return false;
    }
    // if(ValidateEmail(email)){
    //     alert("Good It good Email");
    // }
    // else{
    //     alert("Not vaild email");
    // }

}


        </script>



        <footer>
            <?php include('include/footer.inc.php');  ?>


            <script type="text/javascript">
            var clist = [{
                    "name": "Afghanistan",
                    "code": "AF"
                },
                {
                    "name": "land Islands",
                    "code": "AX"
                },
                {
                    "name": "Albania",
                    "code": "AL"
                },
                {
                    "name": "Algeria",
                    "code": "DZ"
                },
                {
                    "name": "American Samoa",
                    "code": "AS"
                },
                {
                    "name": "AndorrA",
                    "code": "AD"
                },
                {
                    "name": "Angola",
                    "code": "AO"
                },
                {
                    "name": "Anguilla",
                    "code": "AI"
                },
                {
                    "name": "Antarctica",
                    "code": "AQ"
                },
                {
                    "name": "Antigua and Barbuda",
                    "code": "AG"
                },
                {
                    "name": "Argentina",
                    "code": "AR"
                },
                {
                    "name": "Armenia",
                    "code": "AM"
                },
                {
                    "name": "Aruba",
                    "code": "AW"
                },
                {
                    "name": "Australia",
                    "code": "AU"
                },
                {
                    "name": "Austria",
                    "code": "AT"
                },
                {
                    "name": "Azerbaijan",
                    "code": "AZ"
                },
                {
                    "name": "Bahamas",
                    "code": "BS"
                },
                {
                    "name": "Bahrain",
                    "code": "BH"
                },
                {
                    "name": "Bangladesh",
                    "code": "BD"
                },
                {
                    "name": "Barbados",
                    "code": "BB"
                },
                {
                    "name": "Belarus",
                    "code": "BY"
                },
                {
                    "name": "Belgium",
                    "code": "BE"
                },
                {
                    "name": "Belize",
                    "code": "BZ"
                },
                {
                    "name": "Benin",
                    "code": "BJ"
                },
                {
                    "name": "Bermuda",
                    "code": "BM"
                },
                {
                    "name": "Bhutan",
                    "code": "BT"
                },
                {
                    "name": "Bolivia",
                    "code": "BO"
                },
                {
                    "name": "Bosnia and Herzegovina",
                    "code": "BA"
                },
                {
                    "name": "Botswana",
                    "code": "BW"
                },
                {
                    "name": "Bouvet Island",
                    "code": "BV"
                },
                {
                    "name": "Brazil",
                    "code": "BR"
                },
                {
                    "name": "British Indian Ocean Territory",
                    "code": "IO"
                },
                {
                    "name": "Brunei Darussalam",
                    "code": "BN"
                },
                {
                    "name": "Bulgaria",
                    "code": "BG"
                },
                {
                    "name": "Burkina Faso",
                    "code": "BF"
                },
                {
                    "name": "Burundi",
                    "code": "BI"
                },
                {
                    "name": "Cambodia",
                    "code": "KH"
                },
                {
                    "name": "Cameroon",
                    "code": "CM"
                },
                {
                    "name": "Canada",
                    "code": "CA"
                },
                {
                    "name": "Cape Verde",
                    "code": "CV"
                },
                {
                    "name": "Cayman Islands",
                    "code": "KY"
                },
                {
                    "name": "Central African Republic",
                    "code": "CF"
                },
                {
                    "name": "Chad",
                    "code": "TD"
                },
                {
                    "name": "Chile",
                    "code": "CL"
                },
                {
                    "name": "China",
                    "code": "CN"
                },
                {
                    "name": "Christmas Island",
                    "code": "CX"
                },
                {
                    "name": "Cocos (Keeling) Islands",
                    "code": "CC"
                },
                {
                    "name": "Colombia",
                    "code": "CO"
                },
                {
                    "name": "Comoros",
                    "code": "KM"
                },
                {
                    "name": "Congo",
                    "code": "CG"
                },
                {
                    "name": "Congo, The Democratic Republic of the",
                    "code": "CD"
                },
                {
                    "name": "Cook Islands",
                    "code": "CK"
                },
                {
                    "name": "Costa Rica",
                    "code": "CR"
                },
                {
                    "name": "Cote D\"Ivoire",
                    "code": "CI"
                },
                {
                    "name": "Croatia",
                    "code": "HR"
                },
                {
                    "name": "Cuba",
                    "code": "CU"
                },
                {
                    "name": "Cyprus",
                    "code": "CY"
                },
                {
                    "name": "Czech Republic",
                    "code": "CZ"
                },
                {
                    "name": "Denmark",
                    "code": "DK"
                },
                {
                    "name": "Djibouti",
                    "code": "DJ"
                },
                {
                    "name": "Dominica",
                    "code": "DM"
                },
                {
                    "name": "Dominican Republic",
                    "code": "DO"
                },
                {
                    "name": "Ecuador",
                    "code": "EC"
                },
                {
                    "name": "Egypt",
                    "code": "EG"
                },
                {
                    "name": "El Salvador",
                    "code": "SV"
                },
                {
                    "name": "Equatorial Guinea",
                    "code": "GQ"
                },
                {
                    "name": "Eritrea",
                    "code": "ER"
                },
                {
                    "name": "Estonia",
                    "code": "EE"
                },
                {
                    "name": "Ethiopia",
                    "code": "ET"
                },
                {
                    "name": "Falkland Islands (Malvinas)",
                    "code": "FK"
                },
                {
                    "name": "Faroe Islands",
                    "code": "FO"
                },
                {
                    "name": "Fiji",
                    "code": "FJ"
                },
                {
                    "name": "Finland",
                    "code": "FI"
                },
                {
                    "name": "France",
                    "code": "FR"
                },
                {
                    "name": "French Guiana",
                    "code": "GF"
                },
                {
                    "name": "French Polynesia",
                    "code": "PF"
                },
                {
                    "name": "French Southern Territories",
                    "code": "TF"
                },
                {
                    "name": "Gabon",
                    "code": "GA"
                },
                {
                    "name": "Gambia",
                    "code": "GM"
                },
                {
                    "name": "Georgia",
                    "code": "GE"
                },
                {
                    "name": "Germany",
                    "code": "DE"
                },
                {
                    "name": "Ghana",
                    "code": "GH"
                },
                {
                    "name": "Gibraltar",
                    "code": "GI"
                },
                {
                    "name": "Greece",
                    "code": "GR"
                },
                {
                    "name": "Greenland",
                    "code": "GL"
                },
                {
                    "name": "Grenada",
                    "code": "GD"
                },
                {
                    "name": "Guadeloupe",
                    "code": "GP"
                },
                {
                    "name": "Guam",
                    "code": "GU"
                },
                {
                    "name": "Guatemala",
                    "code": "GT"
                },
                {
                    "name": "Guernsey",
                    "code": "GG"
                },
                {
                    "name": "Guinea",
                    "code": "GN"
                },
                {
                    "name": "Guinea-Bissau",
                    "code": "GW"
                },
                {
                    "name": "Guyana",
                    "code": "GY"
                },
                {
                    "name": "Haiti",
                    "code": "HT"
                },
                {
                    "name": "Heard Island and Mcdonald Islands",
                    "code": "HM"
                },
                {
                    "name": "Holy See (Vatican City State)",
                    "code": "VA"
                },
                {
                    "name": "Honduras",
                    "code": "HN"
                },
                {
                    "name": "Hong Kong",
                    "code": "HK"
                },
                {
                    "name": "Hungary",
                    "code": "HU"
                },
                {
                    "name": "Iceland",
                    "code": "IS"
                },
                {
                    "name": "India",
                    "code": "IN"
                },
                {
                    "name": "Indonesia",
                    "code": "ID"
                },
                {
                    "name": "Iran, Islamic Republic Of",
                    "code": "IR"
                },
                {
                    "name": "Iraq",
                    "code": "IQ"
                },
                {
                    "name": "Ireland",
                    "code": "IE"
                },
                {
                    "name": "Isle of Man",
                    "code": "IM"
                },
                {
                    "name": "Israel",
                    "code": "IL"
                },
                {
                    "name": "Italy",
                    "code": "IT"
                },
                {
                    "name": "Jamaica",
                    "code": "JM"
                },
                {
                    "name": "Japan",
                    "code": "JP"
                },
                {
                    "name": "Jersey",
                    "code": "JE"
                },
                {
                    "name": "Jordan",
                    "code": "JO"
                },
                {
                    "name": "Kazakhstan",
                    "code": "KZ"
                },
                {
                    "name": "Kenya",
                    "code": "KE"
                },
                {
                    "name": "Kiribati",
                    "code": "KI"
                },
                {
                    "name": "Korea, Democratic People\"S Republic of",
                    "code": "KP"
                },
                {
                    "name": "Korea, Republic of",
                    "code": "KR"
                },
                {
                    "name": "Kuwait",
                    "code": "KW"
                },
                {
                    "name": "Kyrgyzstan",
                    "code": "KG"
                },
                {
                    "name": "Lao People\"S Democratic Republic",
                    "code": "LA"
                },
                {
                    "name": "Latvia",
                    "code": "LV"
                },
                {
                    "name": "Lebanon",
                    "code": "LB"
                },
                {
                    "name": "Lesotho",
                    "code": "LS"
                },
                {
                    "name": "Liberia",
                    "code": "LR"
                },
                {
                    "name": "Libyan Arab Jamahiriya",
                    "code": "LY"
                },
                {
                    "name": "Liechtenstein",
                    "code": "LI"
                },
                {
                    "name": "Lithuania",
                    "code": "LT"
                },
                {
                    "name": "Luxembourg",
                    "code": "LU"
                },
                {
                    "name": "Macao",
                    "code": "MO"
                },
                {
                    "name": "Macedonia, The Former Yugoslav Republic of",
                    "code": "MK"
                },
                {
                    "name": "Madagascar",
                    "code": "MG"
                },
                {
                    "name": "Malawi",
                    "code": "MW"
                },
                {
                    "name": "Malaysia",
                    "code": "MY"
                },
                {
                    "name": "Maldives",
                    "code": "MV"
                },
                {
                    "name": "Mali",
                    "code": "ML"
                },
                {
                    "name": "Malta",
                    "code": "MT"
                },
                {
                    "name": "Marshall Islands",
                    "code": "MH"
                },
                {
                    "name": "Martinique",
                    "code": "MQ"
                },
                {
                    "name": "Mauritania",
                    "code": "MR"
                },
                {
                    "name": "Mauritius",
                    "code": "MU"
                },
                {
                    "name": "Mayotte",
                    "code": "YT"
                },
                {
                    "name": "Mexico",
                    "code": "MX"
                },
                {
                    "name": "Micronesia, Federated States of",
                    "code": "FM"
                },
                {
                    "name": "Moldova, Republic of",
                    "code": "MD"
                },
                {
                    "name": "Monaco",
                    "code": "MC"
                },
                {
                    "name": "Mongolia",
                    "code": "MN"
                },
                {
                    "name": "Montenegro",
                    "code": "ME"
                },
                {
                    "name": "Montserrat",
                    "code": "MS"
                },
                {
                    "name": "Morocco",
                    "code": "MA"
                },
                {
                    "name": "Mozambique",
                    "code": "MZ"
                },
                {
                    "name": "Myanmar",
                    "code": "MM"
                },
                {
                    "name": "Namibia",
                    "code": "NA"
                },
                {
                    "name": "Nauru",
                    "code": "NR"
                },
                {
                    "name": "Nepal",
                    "code": "NP"
                },
                {
                    "name": "Netherlands",
                    "code": "NL"
                },
                {
                    "name": "Netherlands Antilles",
                    "code": "AN"
                },
                {
                    "name": "New Caledonia",
                    "code": "NC"
                },
                {
                    "name": "New Zealand",
                    "code": "NZ"
                },
                {
                    "name": "Nicaragua",
                    "code": "NI"
                },
                {
                    "name": "Niger",
                    "code": "NE"
                },
                {
                    "name": "Nigeria",
                    "code": "NG"
                },
                {
                    "name": "Niue",
                    "code": "NU"
                },
                {
                    "name": "Norfolk Island",
                    "code": "NF"
                },
                {
                    "name": "Northern Mariana Islands",
                    "code": "MP"
                },
                {
                    "name": "Norway",
                    "code": "NO"
                },
                {
                    "name": "Oman",
                    "code": "OM"
                },
                {
                    "name": "Pakistan",
                    "code": "PK"
                },
                {
                    "name": "Palau",
                    "code": "PW"
                },
                {
                    "name": "Palestinian Territory, Occupied",
                    "code": "PS"
                },
                {
                    "name": "Panama",
                    "code": "PA"
                },
                {
                    "name": "Papua New Guinea",
                    "code": "PG"
                },
                {
                    "name": "Paraguay",
                    "code": "PY"
                },
                {
                    "name": "Peru",
                    "code": "PE"
                },
                {
                    "name": "Philippines",
                    "code": "PH"
                },
                {
                    "name": "Pitcairn",
                    "code": "PN"
                },
                {
                    "name": "Poland",
                    "code": "PL"
                },
                {
                    "name": "Portugal",
                    "code": "PT"
                },
                {
                    "name": "Puerto Rico",
                    "code": "PR"
                },
                {
                    "name": "Qatar",
                    "code": "QA"
                },
                {
                    "name": "Reunion",
                    "code": "RE"
                },
                {
                    "name": "Romania",
                    "code": "RO"
                },
                {
                    "name": "Russian Federation",
                    "code": "RU"
                },
                {
                    "name": "RWANDA",
                    "code": "RW"
                },
                {
                    "name": "Saint Helena",
                    "code": "SH"
                },
                {
                    "name": "Saint Kitts and Nevis",
                    "code": "KN"
                },
                {
                    "name": "Saint Lucia",
                    "code": "LC"
                },
                {
                    "name": "Saint Pierre and Miquelon",
                    "code": "PM"
                },
                {
                    "name": "Saint Vincent and the Grenadines",
                    "code": "VC"
                },
                {
                    "name": "Samoa",
                    "code": "WS"
                },
                {
                    "name": "San Marino",
                    "code": "SM"
                },
                {
                    "name": "Sao Tome and Principe",
                    "code": "ST"
                },
                {
                    "name": "Saudi Arabia",
                    "code": "SA"
                },
                {
                    "name": "Senegal",
                    "code": "SN"
                },
                {
                    "name": "Serbia",
                    "code": "RS"
                },
                {
                    "name": "Seychelles",
                    "code": "SC"
                },
                {
                    "name": "Sierra Leone",
                    "code": "SL"
                },
                {
                    "name": "Singapore",
                    "code": "SG"
                },
                {
                    "name": "Slovakia",
                    "code": "SK"
                },
                {
                    "name": "Slovenia",
                    "code": "SI"
                },
                {
                    "name": "Solomon Islands",
                    "code": "SB"
                },
                {
                    "name": "Somalia",
                    "code": "SO"
                },
                {
                    "name": "South Africa",
                    "code": "ZA"
                },
                {
                    "name": "South Georgia and the South Sandwich Islands",
                    "code": "GS"
                },
                {
                    "name": "Spain",
                    "code": "ES"
                },
                {
                    "name": "Sri Lanka",
                    "code": "LK"
                },
                {
                    "name": "Sudan",
                    "code": "SD"
                },
                {
                    "name": "Suriname",
                    "code": "SR"
                },
                {
                    "name": "Svalbard and Jan Mayen",
                    "code": "SJ"
                },
                {
                    "name": "Swaziland",
                    "code": "SZ"
                },
                {
                    "name": "Sweden",
                    "code": "SE"
                },
                {
                    "name": "Switzerland",
                    "code": "CH"
                },
                {
                    "name": "Syrian Arab Republic",
                    "code": "SY"
                },
                {
                    "name": "Taiwan, Province of China",
                    "code": "TW"
                },
                {
                    "name": "Tajikistan",
                    "code": "TJ"
                },
                {
                    "name": "Tanzania, United Republic of",
                    "code": "TZ"
                },
                {
                    "name": "Thailand",
                    "code": "TH"
                },
                {
                    "name": "Timor-Leste",
                    "code": "TL"
                },
                {
                    "name": "Togo",
                    "code": "TG"
                },
                {
                    "name": "Tokelau",
                    "code": "TK"
                },
                {
                    "name": "Tonga",
                    "code": "TO"
                },
                {
                    "name": "Trinidad and Tobago",
                    "code": "TT"
                },
                {
                    "name": "Tunisia",
                    "code": "TN"
                },
                {
                    "name": "Turkey",
                    "code": "TR"
                },
                {
                    "name": "Turkmenistan",
                    "code": "TM"
                },
                {
                    "name": "Turks and Caicos Islands",
                    "code": "TC"
                },
                {
                    "name": "Tuvalu",
                    "code": "TV"
                },
                {
                    "name": "Uganda",
                    "code": "UG"
                },
                {
                    "name": "Ukraine",
                    "code": "UA"
                },
                {
                    "name": "United Arab Emirates",
                    "code": "AE"
                },
                {
                    "name": "United Kingdom",
                    "code": "GB"
                },
                {
                    "name": "United States",
                    "code": "US"
                },
                {
                    "name": "United States Minor Outlying Islands",
                    "code": "UM"
                },
                {
                    "name": "Uruguay",
                    "code": "UY"
                },
                {
                    "name": "Uzbekistan",
                    "code": "UZ"
                },
                {
                    "name": "Vanuatu",
                    "code": "VU"
                },
                {
                    "name": "Venezuela",
                    "code": "VE"
                },
                {
                    "name": "Viet Nam",
                    "code": "VN"
                },
                {
                    "name": "Virgin Islands, British",
                    "code": "VG"
                },
                {
                    "name": "Virgin Islands, U.S.",
                    "code": "VI"
                },
                {
                    "name": "Wallis and Futuna",
                    "code": "WF"
                },
                {
                    "name": "Western Sahara",
                    "code": "EH"
                },
                {
                    "name": "Yemen",
                    "code": "YE"
                },
                {
                    "name": "Zambia",
                    "code": "ZM"
                },
                {
                    "name": "Zimbabwe",
                    "code": "ZW"
                }
            ];

            // var cJSONString=JSON.stringify(clist); 
            // document.write(clist.length);


            for (var i = 0; i < clist.length; i++) {

                var x = document.getElementById("cosel");
                var option = document.createElement("option");
                option.text = clist[i]['name'];
                x.add(option, x[i]);

                // document.write( +"<br>");
            }
            </script>
        </footer>
</body>

</html>