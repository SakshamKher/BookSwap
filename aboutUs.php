<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/card.css">
<title>About us</title>
</head>

<body onload="typeWriter()">
<?php
	include "header.php";
?>

<div id="about">
<table id="dialog">
	<tr>
	<td><img id="shake" src="./img/person.PNG" alt="shakespeare" width="120"/></td>

	<td><p id="shakemessage"></p></td>
	</tr>
</table>
	<div class="w3-card-4  card" >
		<div class="w3-container w3-center">
      			<div class="w3-panel w3-card-4 w3-light-grey" style="width:100%">
  				<p class=" w3-large w3-serif" style="color:Maroon">
  				<i class="fa fa-quote-right w3-xxlarge"></i><br>
  				Never trust anyone who has not brought a book with them. 
				</br>- Lemony Snicket, Horseradish</p>
			</div>
      			<h5><b><i class="fa fa-user-circle"></i>&nbsp;ABCD</b></h5>

      			<div class="w3-section">
       			 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sapiente, natus dolorum reprehenderit quidem officiis possimus esse, laudantium voluptate voluptatibus quaerat aliquam dolor laborum voluptates at nobis repudiandae optio non!</br>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui asperiores doloremque pariatur aperiam molestias laborum minus rem repellat consequatur sapiente, unde inventore blanditiis? Impedit quae illo accusantium ullam odit sapiente! 
			</br>
      			</div>
			<i class="fa fa-github"></i>&nbsp; Find me at:  </br></br>
   	 	</div>
	</div>

	<div class="w3-card-4  card2" >
		<div class="w3-container w3-center">
      
      			<div class="w3-panel w3-card-4 w3-light-grey" style="width:100%">
  				<p class=" w3-large w3-serif" style="color:Maroon">
  				<i class="fa fa-quote-right w3-xxlarge"></i><br>
				Many people, myself among them, feel better at the mere sight of a book.
				</br>- Jane Smiley, Thirteen Ways of Looking at the Novel</p>

  			</div>

      			<h5><b><i class="fa fa-user-circle"></i>&nbsp;ABCD</b></h5>

      			<div class="w3-section">
       			 Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente incidunt ipsa vero nihil, eius numquam corrupti nostrum! Odio velit provident tempora voluptatem cum. Nemo, aut ut! Autem fugit iure non! </br>
			Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, repellendus dolor ex laborum exercitationem itaque nemo neque tenetur corrupti repudiandae? Earum, obcaecati voluptas! Nulla quis laborum, est minus alias quam. 
			</br>
      			</div>
			<i class="fa fa-google"></i>&nbsp; Find me at: </br></br>
   	 	</div>
	</div>

	<div class="w3-card-4  card2" >
		<div class="w3-container w3-center">
      
      			<div class="w3-panel w3-card-4 w3-light-grey" style="width:100%">
  				<p class=" w3-large w3-serif" style="color:Maroon">
  				<i class="fa fa-quote-right w3-xxlarge"></i><br>
  				You get a little moody sometimes but I think that's because you like to read. People that like to read are always a little fucked up.
				</br>- Pat Conroy, The Prince of Tides</p>
			</div>

      			<h5><b><i class="fa fa-user-circle"></i>&nbsp;ABCD</b></h5>

      			<div class="w3-section">
       			 Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nihil ea totam, optio deserunt nulla! Doloremque nostrum iure quibusdam a dolor esse quasi soluta, recusandae similique temporibus et asperiores cupiditate! </br>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo dicta ipsa repudiandae saepe quaerat perspiciatis molestias illum vel rem quibusdam, sapiente vero minima quod sequi. Iste alias odio sapiente officiis!
			</br>
      			</div>
			<i class="fa fa-github"></i>&nbsp; Find me at: </br></br>

   	 	</div>
	</div>
	
	<div class="w3-card-4  card" >
		<div class="w3-container w3-center">
      
      			<div class="w3-panel w3-card-4 w3-light-grey" style="width:100%">
  				<p class=" w3-large w3-serif" style="color:Maroon">
  				<i class="fa fa-quote-right w3-xxlarge"></i><br>
  				The more that you read, the more things you will know. The more that you learn, the more places you'll go.
				</br>- Dr. Seuss, I Can Read With My Eyes Shut!</p>
			</div>

      			<h5><b><i class="fa fa-user-circle"></i>&nbsp;ABCD</b></h5>

      			<div class="w3-section">
       			  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem repellat repellendus praesentium natus alias omnis illo qui, est dolores laboriosam. Minima distinctio aspernatur natus magni. Labore a vero magnam assumenda. </br>
			Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum eos sint, expedita at, necessitatibus culpa error aut amet quos eius ipsam delectus repellat dignissimos sed similique tempora dolorum aspernatur accusantium.
			</br>
			</div>
			<i class="fa fa-github"></i>&nbsp; Find me at: </br></br>

   	 	</div>
	</div>
</div>
<script>
var i = 0;
var txt = 'Our developers hope to share their favorite quotes and books with you';
var speed = 50;

function typeWriter() {
	
  if (i < txt.length) {
    document.getElementById("shakemessage").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

var shakes = document.getElementById('shake');
shake.addEventListener('mouseover', function() {document.location.reload();});
</script>

</body>
</html>
