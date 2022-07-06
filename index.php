<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Puupys</title>
</head>

  

<body>
	<?php 
	include("class/connect.php");
	$con =new dbc();
	$out1=$con->connect();
	if (!$out1) {
		   header("Location: include/dbnotc.php");
		   exit;
	}
include('include/header.inc.php');
?>

<section id="hommer">
</head>
<body>

<div  class="container-fluid pt-5 homepaage" >
  <div class="container text-center">
  	<h1 class="fs-3 col-md-fs-1">The Puppy Search Engine!</h1>
  	<p>The Most Comprehensive Online Resource for Finding and Raising a PUPPY!</p>
  	<button class="btn btn-lg fs-3">Get Started</button>
  </div>
</div>

<div class="container-fluid">
	<div class="container-sm text-center mt-5 mb-2 justify-content-md-center findpe">
		<h1>Planning to  Buy Puppy ? </h1>
		<div class="rowss mt-5 mb-2">
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
			<div class="col-sm col-md">
			  	<div class="text-center svgimg">
			  		<svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="258" height="258" viewBox="0 0 258 258">
  <image id="icons8-dog-64" width="258" height="258" xlink:href="data:image/png;base64,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"/>
</svg>

			  		<div class="card-body">
			  			<h4 class="card-title">Find You Like Pet's </h4>
			  			<p class="card-text"></p>
			  		</div>
			  	</div>
			</div>
			<div class="col-sm col-md">
			  	  	<div class="text-center svgimg">
			  		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="275" height="275" viewBox="0 0 275 275">
  <image id="icons8-email-send-96" width="275" height="275" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAABmJLR0QA/wD/AP+gvaeTAAAEb0lEQVR4nO2dT6gVVRzHP7cXpfJ8Qv4BS1AoDRJSImijLsqCNkKQq/Ktwo1SixJxF7kJ0kWBhIqbAjeuJEVUqBaBChUYBaFYIShu1CgjpfesxbyLt8ebOb+Z3zlnzpn5feDszpzznfne971zv3MvDwzDMAzDMAzDMAwfPA68AxxpW0ifmA9sBb4A/gH+Bd5tVVEPeAjYABwE/qC46MMxDTzRnrRusxZ4H/iV/1/00XG6NXUdZZjr31J+0UfHm+3I7BZz5bpk3AHGW9DbCapyXTo+i666A0hyXTpejqw9W+rmumRcA8ZinkRuNM116fgo3qnkg49cl45nI51TFvjMdcn4Mc5ppU2IXJeO9yKcX5KMA9uAM8AU/i/sOeBrx5wpCvN7Q+hcvwp8CKyZ2e+CY35vqoeQuf47xYeozcBgZM/VwH3HsZ2uHkLm+hRwFpgEFpTsv9exRierh9D36z8Bu4FlDh0D4Ipjrc5UD6O5/ifhc13CRsG62VcPw1z/jXi5LuWQY/1sq4dhrn9HO7kuYR5w27FXVtVDKrku5XXBnslXDynmupTjjr2Trh5SznUJjwH3HDqSqx5yyHUpOx16poEVEXQ4Gae4KCF7mB3AYo+axyhe4VWcd+g641FPbXLO9aXAHqpvHSXVw7YA2pzknuubgO+B5Y55SVUPXcj1wcw53AVeEsxNqnr4xCEmlVwvYzFwYmbfPYL5kurhlSBKSxjgx4SQuV7G88AvM/ufpHjvcpFk9dDUhBi5XsZ2HtzHXwWWCI5JunoYAAcc4kbHJWCiBZ0TwLERHfeAF4THSqqHdZ711qLuX8IpildVLNYDl2dpeLvG8VlUD6maMAn8NWvv48ijL6vqISUT5gOH59jzMrCoxjo75lhjdCRTPQxJwYSngR/m2Otv4LmaayVdPZTRpglvUF6DvFVzrWSrBwmxTXgU+Lhi/aMN1kyqemhCLBNWUh0VPwMLG2h3VQ+fN9AandAmbAFuVax3B3imge7kqgcNIUx4mKLCcGX0ZEPNSVYPGnyasAL4RrDGpw21Jl09aPBhwovADcGxFyk+CzShE996KKOpCWMUD32mBcfcBp5UaMyietBQt8A7CXwpnHsfeE2hbQnu6mGXYv1k8PU8YfbYr9SVXfWgwbcJ54FHlJqyrB40+DLhJrBKqeUpMq4eNGhNmAZe9aDjA8c+yVcPGjQm7PW0fyeqBw1NTPgKP59IO1U9aKh7i3oC/RsvFN/mq9rnOplVDxpiV9mdrR40xDSh09WDhlgmdL560BDahKy+9dAWIU3oVfWgIZQJvaseNPg2obfVgwafJvS6etDgwwSrHpRoTdggOKYX1YMGjQlWPXiiiQkTFM8Pqubti3kSudPkRyKuOa3+4CJHfD7e7HX1oMGXCb2vHjT4eLxp1YMSjQlWPXiiqQlWPXikrglWPQSgjglWPQRCaoJVDwFxmWDVQwSqTLDqIRJlJlj1EJHZJlj10AKjJnTiBxc5MjTB/rmmYRiGYRiGYRit8x+L+86AjXdPUwAAAABJRU5ErkJggg=="/>
</svg>


			  		<div class="card-body">
			  			<h4 class="card-title">Sent Request and about you To Owner</h4>
			  			<p class="card-text"></p>
			  		</div>
			  	</div>
			</div>
			<div class="col-sm col-md">
			  	  	<div class="text-center svgimg">
			  		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="276" height="276" viewBox="0 0 276 276">
  <image id="icons8-chat-96" width="276" height="276" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAABmJLR0QA/wD/AP+gvaeTAAACeUlEQVR4nO3bPW7UQBjG8X+iFBs+OkqCIDlB+ggkQEDFBWiocgWuwDECJKThClwAkILgAnSAAkg0IEGEKawoKZyZsXc8z3jz/KS3Wu98+IlHs7YDZmZmZmZmZmZmZmajWwp81hQbRR1C52I0y4pO7YQDEHMAYg5AzAGIrQz4jmS3kFFVuztfAWIOQMwBiDkAMQcgNmQXdN7k2jV17h59BYg5ADEHIOYAxByAmHdBcX3vffXaNfkKEHMAYg5AzAGIOQAxByDmAMQcgJgDEHMAYg5AzAGIOQAxByDmAMQcgJgDEHMAYg5AzAGIOQAxByDmAMSGBND0rBSrwPMBbQ+pySg14TXgTcb+1MFka7/ExG4BXzP25QB6dLwN/MnYjwNI7HgGPMvYvgOI1GkbwIeMbS90ALk7fgD8CBzXAH+BJyUGO6LqAliiPalHgWMa4BC4XWKgI6sugFeBz47rLe12dBFUF0Cs9oALJQZYyGQCWIT1vsskAjgE7pQYlED1ARwA1yNtbQKferTZt3ZJX/Zy9Tm6lEG8JD7xR8CvxPbmqQPgRqZ5VR/AEfH1fgV4Gmknd30D7s4xr0kEkDLJK8DrQBtj1vEfx1n/jjrpAFIu87HX+9TaBy4mzmsSAezRPmgJeQz87viuqt4D65F5VR9AynqvknIL/Cfw8NR3ZCe0rwb4DtxTDyRiC/hMOIR/tBuC5cAx1flIe7t5Cq4B74gvG6H7WNW5pB5AT6vACype08+LoY9GLaObwBccgNRV+r0eYyOYATs4ALlt2ucVDkAo9tKYFbDG2b8XrJAZ3S8OW0Fdr9aYwH1OXi4zkQ3a+14mdFk9ADMzM5vTf7nqrPfuiblvAAAAAElFTkSuQmCC"/>
</svg>


			  		<div class="card-body">
			  			<h4 class="card-title">Chat With Owner</h4>
			  			<p class="card-text"></p>
			  		</div>
			  	</div>
			</div>
			<div class="col-sm col-md">
			  	  	<div class="text-center svgimg">
			  		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="311" height="311" viewBox="0 0 311 311">
  <image id="icons8-dog-heart-64_1_" data-name="icons8-dog-heart-64 (1)" width="311" height="311" xlink:href="data:image/png;base64,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"/>
</svg>


			  		<div class="card-body">
			  			<h4 class="card-title">Buy pet's </h4>
			  			<p class="card-text"></p>
			  		</div>
			  	</div>
			</div>
		</div>
	</div>
 
</body>
	</div>
</div>



</section>
<?php include('include/footer.inc.php'); ?>
</body>
</html>