<!DOCTYPE html>
<html>
<title>Martin Winton</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/elusive-icons/2.0.0/css/elusive-icons.min.css">
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">


<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}



.tex sub, .latex sub, .latex sup {
  text-transform: uppercase;
}

.tex sub, .latex sub {
  vertical-align: -0.5ex;
  margin-left: -0.1667em;
  margin-right: -0.125em;
}

.tex, .latex, .tex sub, .latex sub {
  font-size: 1em;
}

.latex sup {
  font-size: 0.85em;
  vertical-align: 0.15em;
  margin-left: -0.36em;
  margin-right: -0.15em;
}








</style>
<body class="w3-dark-grey">



	<?php
	// define variables and set to empty values
	$recipient = $sender = $subject = $body = "";
	$recErr = $sendErr = $subErr = $bodyErr = "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {



	


		if (empty($_POST["sender"])) {
			$sendErr = "You must enter from address";
		}

		elseif(!filter_var($_POST["sender"], FILTER_VALIDATE_EMAIL)){
			$sender = test_input($_POST["sender"]);
			$sendErr = "Invalid email format";

		}

		else {
			$sender = test_input($_POST["sender"]);
		}



		if (empty($_POST["subject"])) {
			$subErr = "You must enter subject";
		}



		else {
			$subject = test_input($_POST["subject"]);



		}




		if (empty($_POST["body"])) {
			$bodyErr = "You must enter body";
		}



		else {
			$body = test_input($_POST["body"]);
		}

		if (empty($_POST["name"])) {
			$nameErr = "You must enter name";
		}
		
		
		
		else {
			$name = test_input($_POST["name"]);
		}
		
		
		


	}









	function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}



?>








<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
<div class="w3-quarter">
    
      <div class="w3-black w3-text-white w3-card-4">
        <div class="w3-display-container">
          <img src="OPfSX91" style="width:100%; max-width:330px" alt="Picture supported on Internet Explorer">
          <div class="w3-display-bottomleft w3-container w3-text-white">
            <h2>Martin Winton</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-suitcase fa-fw w3-margin-right w3-large w3-text-amber"></i>Software Developer</p>
           <p><i class="fa fa-graduation-cap fa-fw  w3-margin-right w3-large w3-text-amber"></i>Sophmore at MIT</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-amber"></i>Cambridge, MA</p>
          <p><i class="fa fa-at fa-fw w3-margin-right w3-large w3-text-amber"></i>mwinton@mit.edu</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-amber"></i>(704)-441-5985</p>
          <hr>

          <p class="w3-large"><b></i>Notable Coding Languages</b></p>
        
          
          <p><i class="devicon-java-plain w3-margin-right w3-xlarge w3-text-amber"></i>Java</p>
           <p><i class="devicon-python-plain w3-margin-right w3-xlarge w3-text-amber"></i>Python</p>
            <p><i class="devicon-php-plain w3-margin-right w3-xlarge w3-text-amber"></i>PHP</p>
             <p><i class="devicon-cplusplus-plain w3-margin-right w3-xlarge w3-text-amber"></i>C/C++</p>
              <p><i class="devicon-html5-plain w3-margin-right w3-xlarge w3-text-amber"></i>HTML</p>
          
        
         
        
       
        
	  <hr>
          <p class="w3-large w3-text-theme"><b>Technical Programs</b></p>
            <p><i class="devicon-mysql-plain w3-margin-right w3-xlarge w3-text-amber"></i>MySQL</p>
            <p><i class="devicon-ubuntu-plain colored w3-margin-right w3-xlarge w3-text-amber"></i>Ubuntu Server </p>
            <p><i class="devicon-apache-plain colored w3-margin-right w3-xlarge w3-text-amber"></i>Apache </p>
            <p><i class="devicon-github-plain  w3-margin-right w3-large  w3-xlarge w3-text-amber"></i>Github</p>
            <p><i class="fa fa-file-word-o fa-fw w3-margin-right w3-large w3-text-amber"></i>Mirosoft Office</p>
         
       
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>
  
  

  

  
     <!-- Middle Column -->
  
 <div class="w3-twothird">
  

     <div class="w3-container w3-black w3-card-2">
      <h1 class="w3-text-white w3-padding-16"><i class="fa fa-envelope fa-fw w3-margin-right w3-xxlarge w3-text-amber"></i>Email Me!</h1>
</div>
    <div class="w3-container w3-black w3-margin-top">

      
          <h6 class="w3-text-amber">Interested in contacting me? Fill out this form and lets get in touch!</span></h6>
      

          <hr>
    
        
<h2 style="font-family: verdana;" /h2>

	</h2>
	
	
	
	
<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="w3-container w3-card-4 w3-black w3-text-amber w3-margin">

 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="name" type="text" placeholder="Name"> <span class=" w3-text-amber"><?php echo $sendErr;?>
		</span> 
    </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="sender" type="text" placeholder="Email"> <span class=" w3-text-amber"><?php echo $sendErr;?>
		</span> 
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="subject" type="text" placeholder="Subject">  <span class=" w3-text-amber"><?php echo $subErr;?>
		</span> 
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="body" type="text" placeholder="Message"> <span class=" w3-text-amber"><?php echo $bodyErr;?>
		</span>
    </div>
</div>

<button class="w3-button w3-block w3-section w3-amber w3-ripple w3-padding">Send</button>

</form>
	
	
	
	
	
	
	
	
	
	
	
	
	
	<?php

$recipient = "mwinton@mit.edu";
	
	if(filter_var($recipient, FILTER_VALIDATE_EMAIL) and filter_var($sender, FILTER_VALIDATE_EMAIL)){


$headers = "From: $name";


$headers = "From: $name $sender" . PHP_EOL .
"Reply-To: $name $sender" . PHP_EOL .
'X-Mailer: PHP/' . phpversion();

$header = "FROM: $name $sender\r\n";
 
// Send email
if (mail($recipient, $subject, $body, $header)) {
	echo "<h5 class='w3-text-amber w3-padding-16'>Sent!</h5>";
} else {
	echo "Error";
}







}
?>
      </div>
  </div>
   <!-- End of Middle Column -->
  
    
<div class="w3-rest">

<nav class="w3-sidebar w3-bar-block w3-black" style="width:130px; height:300px">
  <a href="winton-index.php" style="text-decoration: none" > <button class="w3-bar-item w3-button w3-hover-amber" ><b>Main Page</b></button></a>
   <a href="winton-contact.php" style="text-decoration: none"><button class="w3-bar-item w3-button w3-hover-amber" ><b>Contact Me</b></button></a> 
   <a href="winton-projects.php" style="text-decoration: none"><button class="w3-bar-item w3-button w3-hover-amber" ><b>Projects</b></button></a>
    <a href="winton-blog.php" style="text-decoration: none"><button class="w3-bar-item w3-button w3-hover-amber" ><b>Blog</b></button></a>
</nav>
</div>  
  
  
  
  
  
  
  
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-black w3-center w3-margin-top w3-text-amber" >
  <p>Connect with me on social media!</p>
   <a href="https://www.facebook.com/mwinton97?ref=bookmarks" style="text-decoration: none"> <i class="fa fa-facebook-official w3-hover-opacity w3-xxlarge""></i></a>
   <a href="https://www.instagram.com/martin5156/" style="text-decoration: none"> <i class="fa fa-instagram w3-hover-opacity w3-xxlarge"></i></a>
   <a href="https://www.linkedin.com/in/martin-winton-0a8b42127" style="text-decoration: none"><i class="fa fa-linkedin w3-hover-opacity w3-xxlarge""></i></a>
   <a href="https://www.github.com/MartinWinton" style="text-decoration: none"><i class="fa fa-github w3-hover-opacity w3-xxlarge""></i></a>
</footer>




</body>
</html>