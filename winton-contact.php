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
<link class="changeme" href="teststyles.css" rel="stylesheet">

<link href="animate.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
<link class="changeme" href="teststyles.css" rel="stylesheet">
<link href="bootstrap.css" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="scripts/styleswticher.js" type="text/javascript"> </script>
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





<body class="wallpaper">

<div class="wrapper">

<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
      

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="winton-index.php" class="pure-menu-link" >Home</a></li>
               

                <li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                    <a href="winton-projects2.php" class="pure-menu-link" >Projects</a>
                </li>

                <li class="pure-menu-item"><a href="winton-blog.php" class="pure-menu-link" >Blog</a></li>
            
            
             <li class="pure-menu-item"><a href="winton-contact.php" class="pure-menu-link selected " >Contact Me</a></li>
            
            </ul>
        </div>
    </div>





	<?php
	// define variables and set to empty values
	$recipient = $sender = $subject = $body = $name=  "";
	$recErr = $sendErr = $subErr = $bodyErr = $nameErr= "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {



	


		if (empty($_POST["sender"])) {
			$sendErr = "Please enter email :(";
		}

		elseif(!filter_var($_POST["sender"], FILTER_VALIDATE_EMAIL)){
			$sender = test_input($_POST["sender"]);
			$sendErr = "Oops! Something is wrong with your email! :(";

		}

		else {
			$sender = test_input($_POST["sender"]);
		}



		if (empty($_POST["subject"])) {
			$subErr = "Every email needs a good subject! :)";
		}



		else {
			$subject = test_input($_POST["subject"]);



		}




		if (empty($_POST["body"])) {
			$bodyErr = "Where's your body? :(";
		}



		else {
			$body = test_input($_POST["body"]);
		}

		if (empty($_POST["name"])) {
			$nameErr = "Please enter your name :(";
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
 <div class="row">  
  
    <!-- Left Column -->

  
  

  

  
     <!-- Middle Column -->
  
<div class=" col-xs-offset-1 col-xs-10  col-sm-offset-0  col-sm-9 sep">  
   

     <div class="w3-container background w3-card-2 animated fadeInDown" >
      <h1 class="text w3-padding-16"><i class="fa fa-envelope fa-fw w3-margin-right w3-xxlarge main  animated fadeInDownBig"></i><b>Email Me!</b></h1>
</div>
    <div class="w3-container background w3-margin-top animated fadeInUp">

      
          <h6 class="main">Interested in contacting me? Fill out this form and lets get in touch!</span></h6>
      

          <hr class="text">
    
        
<h2 style="font-family: verdana;" /h2>

	</h2>
	
	
	
	
<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="w3-container w3-text-black   background w3-margin">

 
<div class="w3-row w3-section ">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge main fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input  w3-border" name="name" value="<?php echo $name;?>" type="text" placeholder="Name"> <span class=" main"><?php echo $nameErr;?>
		</span> 
    </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge main  fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="sender" value="<?php echo $sender;?>" type="text" placeholder="Email"> <span class=" main"><?php echo $sendErr;?>
		</span> 
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge main  fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="subject" value="<?php echo $subject;?>" type="text" placeholder="Subject">  <span class=" main"><?php echo $subErr;?>
		</span> 
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge main  fa fa-pencil"></i></div>
    <div class="w3-rest">
     
      
        <textarea class="w3-input w3-border"  name="body" type="text-box" rows="10" placeholder="Body"><?php echo $body;?></textarea> <span class=" main">
      
       <span class=" main"><?php echo $bodyErr;?>
		
		</span>
    </div>
</div>

<button class="w3-button w3-block w3-section mainbutton w3-ripple w3-padding">Send</button>

</form>
	
	
	
	
	
	
	
	
	
	
	
	
	
	<?php

$recipient = "mwinton@mit.edu";
	
	if(filter_var($recipient, FILTER_VALIDATE_EMAIL) and filter_var($sender, FILTER_VALIDATE_EMAIL) and $name != "" and $body != "" and $subject !=""){


$headers = "From: $name";


$headers = "From: $name $sender" . PHP_EOL .
"Reply-To: $name $sender" . PHP_EOL .
'X-Mailer: PHP/' . phpversion();

$header = "$name $sender\r\n";
 
// Send email
if (mail($recipient, $subject, $body, $header,"-f $recipient")){
	echo "<h5 class='main w3-padding-16'>Sent!</h5>";
	$recipient = $sender = $subject = $body = $name=  "";
	
} else {
	echo "Error";
}







}
?>
      </div>
  </div>
   <!-- End of Middle Column -->
  
    <!-- Start of Card -->
   <div class=" col-xs-offset-2 col-xs-8  col-sm-offset-0 col-sm-3 ">
      
      <div class="background w3-text-white w3-card-4  animated fadeInRight">
        <div class="w3-display-container">
          <img src="http://imgur.com/download/yJSzUMt" style="width:100%;" alt="Picture supported on Internet Explorer">
          <div class="w3-display-bottomleft w3-container w3-text-white">
            <h2>Martin Winton</h2>
          </div>
        </div>
        <div class="w3-container text">
          <p><i class="fa fa-suitcase fa-fw w3-margin-right w3-large main"></i>Software Developer</p>
        <a href="https://web.mit.edu/" style="text-decoration: none"  target="_blank"> <p class ="w3-hover-opacity"><i class="fa fa-graduation-cap fa-fw  w3-margin-right w3-large main"></i>Sophomore at MIT</p></a>
           <a href="https://www.google.com/maps/place/Massachusetts+Institute+of+Technology/@42.3600949,-71.0963487,17z/data=!3m1!4b1!4m5!3m4!1s0x89e370aaf51a6a87:0xd0e08ea5b308203c!8m2!3d42.360091!4d-71.09416" style="text-decoration: none" > <p class ="w3-hover-opacity"><i class="fa fa-home fa-fw w3-margin-right w3-large main"  target="_blank"></i>Cambridge, MA</p></a>
     
        
      <input id="toggle" type="checkbox" class="switch" >
  <label for="toggle"><i id="drop" class="fa fa-chevron-up  hvr-grow fa-fw main w3-margin-right animated flash" ></i> </label>
     <div id="expand" class="text">
   

        
          <p class="w3-large"><b></i>Coding Languages</b></p>
        
          
          <p><i class="devicon-java-plain w3-margin-right w3-xlarge main"></i>Java</p>
           <p><i class="devicon-python-plain w3-margin-right w3-xlarge main"></i>Python</p>
            <p><i class="devicon-php-plain w3-margin-right w3-xlarge main"></i>PHP</p>
             <p><i class="devicon-cplusplus-plain w3-margin-right w3-xlarge main"></i>C/C++</p>
              <p><i class="devicon-html5-plain w3-margin-right w3-xlarge main"></i>HTML</p>
          
        
         
        
       
        
	  <hr class="text">
          <p class="w3-large w3-text-theme"><b>Technical Programs</b></p>
            <p><i class="devicon-mysql-plain w3-margin-right w3-xlarge main"></i>MySQL</p>
            <p><i class="devicon-ubuntu-plain colored w3-margin-right w3-xlarge main"></i>Ubuntu Server </p>
            <p><i class="devicon-apache-plain colored w3-margin-right w3-xlarge main"></i>Apache </p>
            <p><i class="devicon-github-plain  w3-margin-right w3-large  w3-xlarge main"></i>Git/Github</p>
            <p><i class="fa fa-file-word-o fa-fw w3-margin-right w3-large main"></i>Microsoft Office</p>
         
       
          <br>
        
  </div>
          <br>
        </div>
      </div><br>

    <!-- End  Card-->
    </div>
  
  
  
  
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

 <div class="push"></div>

</div>
<div class="footer"></div>
<footer class=" background w3-center  main animated fadeInUp" style="height:180px">
<br>
 <p> Pick a Theme!</p>
<a style = "text-decoration: none;" class= "theme" href="#" rel="teststyles.css"><i class="fa fa-moon-o fa-fw  w3-hover-opacity hvr-pulse  w3-xlarge main"></i> </a>
	<a style = "text-decoration: none;"  class= "theme" href="#" rel="daystyle.css"><i class="fa fa-sun-o fa-fw  w3-hover-opacity hvr-pulse  w3-xlarge main"></i> </a>
<br>

   <a href="https://www.linkedin.com/in/martin-winton-0a8b42127" style="text-decoration: none" target="_blank"><i class="fa fa-linkedin ficon  w3-hover-opacity hvr-pulse w3-xxlarge""></i></a>
  <a href="https://www.github.com/MartinWinton" style="text-decoration: none" target="_blank"><i class="fa fa-github w3-hover-opacity hvr-pulse ficon w3-xxlarge""></i></a>
  
     <a href="https://www.facebook.com/mwinton97?ref=bookmarks" style="text-decoration: none" target="_blank"> <i class="fa fa-facebook-official  hvr-pulse ficon w3-hover-opacity w3-xxlarge""></i></a>
   <a href="https://www.instagram.com/martin5156/" style="text-decoration: none" target="_blank"> <i class="fa fa-instagram w3-hover-opacity hvr-pulse ficon w3-xxlarge"></i></a>
  <p> © Martin Winton 2017</p>
  
  </footer>
  

    <script src="scripts/hamburger.js" type="text/javascript"> </script>

	


</body>
</html>