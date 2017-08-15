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

<link href="animate.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
<link href="styles.css" rel="stylesheet">
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

<div class="wrapper">

<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu" style="background-color:black">
        <div class="pure-menu">
      

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="winton-index.php" class="pure-menu-link" style = "color:white">Home</a></li>
               

                <li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                    <a href="winton-projects2.php" class="pure-menu-link" style = "color:white">Projects</a>
                </li>

                <li class="pure-menu-item"><a href="winton-blog.php" class="pure-menu-link" style = "color:white">Blog</a></li>
            
            
             <li class="pure-menu-item"><a href="winton-contact.php" class="pure-menu-link" style = "color:white">Contact Me</a></li>
            
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
  <div class="w3-row-padding">
  
    <!-- Left Column -->

  
  

  

  
     <!-- Middle Column -->
  
 <div class="w3-threequarter">
  

     <div class="w3-container w3-black w3-card-2 animated fadeInDown" >
      <h1 class="w3-text-white w3-padding-16"><i class="fa fa-envelope fa-fw w3-margin-right w3-xxlarge w3-text-amber  animated fadeInDownBig"></i>Email Me!</h1>
</div>
    <div class="w3-container w3-black w3-margin-top animated fadeInUp">

      
          <h6 class="w3-text-amber">Interested in contacting me? Fill out this form and lets get in touch!</span></h6>
      

          <hr>
    
        
<h2 style="font-family: verdana;" /h2>

	</h2>
	
	
	
	
<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="w3-container w3-card-4 w3-text-black   w3-black w3-margin">

 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge w3-text-amber fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input  w3-border" name="name" value="<?php echo $name;?>" type="text" placeholder="Name"> <span class=" w3-text-amber"><?php echo $nameErr;?>
		</span> 
    </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge w3-text-amber  fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="sender" value="<?php echo $sender;?>" type="text" placeholder="Email"> <span class=" w3-text-amber"><?php echo $sendErr;?>
		</span> 
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge w3-text-amber  fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="subject" value="<?php echo $subject;?>" type="text" placeholder="Subject">  <span class=" w3-text-amber"><?php echo $subErr;?>
		</span> 
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge w3-text-amber  fa fa-pencil"></i></div>
    <div class="w3-rest">
     
      
        <textarea class="w3-input w3-border"  value="<?php echo $body;?>"name="body" type="text-box" rows="10" placeholder="Body"></textarea> <span class=" w3-text-amber">
      
       <span class=" w3-text-amber"><?php echo $bodyErr;?>
		
		</span>
    </div>
</div>

<button class="w3-button w3-block w3-section w3-amber w3-ripple w3-padding">Send</button>

</form>
	
	
	
	
	
	
	
	
	
	
	
	
	
	<?php

$recipient = "mwinton@mit.edu";
	
	if(filter_var($recipient, FILTER_VALIDATE_EMAIL) and filter_var($sender, FILTER_VALIDATE_EMAIL) and $name != "" and $body != "" and subject !=""){


$headers = "From: $name";


$headers = "From: $name $sender" . PHP_EOL .
"Reply-To: $name $sender" . PHP_EOL .
'X-Mailer: PHP/' . phpversion();

$header = "$name $sender\r\n";
 
// Send email
if (mail($recipient, $subject, $body, $header,"-f $recipient")){
	echo "<h5 class='w3-text-amber w3-padding-16'>Sent!</h5>";
} else {
	echo "Error";
}







}
?>
      </div>
  </div>
   <!-- End of Middle Column -->
  
    
<div class="w3-quarter">
    
      <div class="w3-black w3-text-white w3-card-4  animated fadeInRight">
        <div class="w3-display-container">
          <img src="http://imgur.com/download/yJSzUMt" style="width:100%;" alt="Picture supported on Internet Explorer">
          <div class="w3-display-bottomleft w3-container w3-text-white">
            <h2>Martin Winton</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-suitcase fa-fw w3-margin-right w3-large w3-text-amber"></i>Software Developer</p>
        <a href="https://web.mit.edu/" style="text-decoration: none"  target="_blank"> <p class ="w3-hover-opacity"><i class="fa fa-graduation-cap fa-fw  w3-margin-right w3-large w3-text-amber"></i>Sophomore at MIT</p></a>
           <a href="https://www.google.com/maps/place/Massachusetts+Institute+of+Technology/@42.3600949,-71.0963487,17z/data=!3m1!4b1!4m5!3m4!1s0x89e370aaf51a6a87:0xd0e08ea5b308203c!8m2!3d42.360091!4d-71.09416" style="text-decoration: none" > <p class ="w3-hover-opacity"><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-amber"  target="_blank"></i>Cambridge, MA</p></a>
     
        
      <input id="toggle" type="checkbox" >
  <label for="toggle"><i id="drop" class="fa fa-chevron-down fa-fw w3-text-amber w3-margin-right animated flash" ></i> </label>
     <div id="expand">
   

        
          <p class="w3-large"><b></i>Coding Languages</b></p>
        
          
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
            <p><i class="devicon-github-plain  w3-margin-right w3-large  w3-xlarge w3-text-amber"></i>Git/Github</p>
            <p><i class="fa fa-file-word-o fa-fw w3-margin-right w3-large w3-text-amber"></i>Microsoft Office</p>
         
       
          <br>
        
  </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>
  
  
  
  
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

 <div class="push"></div>

</div>
<div class="footer"></div>
<footer class="w3-container w3-black w3-center w3-margin-top w3-text-amber animated fadeInUp" style="height:110px">
  <p>More about me!</p>
   <a href="https://www.facebook.com/mwinton97?ref=bookmarks" style="text-decoration: none" target="_blank"> <i class="fa fa-facebook-official w3-hover-opacity w3-xxlarge""></i></a>
   <a href="https://www.instagram.com/martin5156/" style="text-decoration: none" target="_blank"> <i class="fa fa-instagram w3-hover-opacity w3-xxlarge"></i></a>
   <a href="https://www.linkedin.com/in/martin-winton-0a8b42127" style="text-decoration: none" target="_blank"><i class="fa fa-linkedin w3-hover-opacity w3-xxlarge""></i></a>
   <a href="https://www.github.com/MartinWinton" style="text-decoration: none" target="_blank"><i class="fa fa-github w3-hover-opacity w3-xxlarge""></i></a>
</footer>
  
<script> (function (window, document) {

    var layout   = document.getElementById('layout'),
        menu     = document.getElementById('menu'),
        menuLink = document.getElementById('menuLink'),
        content  = document.getElementById('main');

    function toggleClass(element, className) {
        var classes = element.className.split(/\s+/),
            length = classes.length,
            i = 0;

        for(; i < length; i++) {
          if (classes[i] === className) {
            classes.splice(i, 1);
            break;
          }
        }
        // The className is not found
        if (length === classes.length) {
            classes.push(className);
        }

        element.className = classes.join(' ');
    }

    function toggleAll(e) {
        var active = 'active';

        e.preventDefault();
        toggleClass(layout, active);
        toggleClass(menu, active);
        toggleClass(menuLink, active);
    }

    menuLink.onclick = function (e) {
        toggleAll(e);
    };

    content.onclick = function(e) {
        if (menu.className.indexOf('active') !== -1) {
            toggleAll(e);
        }
    };

}(this, this.document));




	</script>
	


</body>
</html>