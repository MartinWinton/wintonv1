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
<link rel="stylesheet" href="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-core/4.1.0/css/fabric.min.css">
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
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="animate.css" rel="stylesheet">
<link href="styles.css" rel="stylesheet">
<link href="bootstrap.css" rel="stylesheet">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<style>
html,body,h1,h2,h3,h4,h5,h6,b {font-family: "Ubuntu", sans-serif}



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




  <script>
      $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'winton-index.php',
            data: $('form').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });

        });

      });

      
    </script>


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
                <li class="pure-menu-item"><a href="winton-index.php" class="pure-menu-link">Home</a></li>

                <li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                    <a href="winton-projects2.php" class="pure-menu-link" >Projects</a>
                </li>

               
               
               
                <li class="pure-menu-item"><a href="winton-blog.php" class="pure-menu-link">Blog</a></li>
                
                
                      <li class="pure-menu-item"><a href="winton-contact.php" class="pure-menu-link">Contact Me</a></li>
                
            </ul>
        </div>
    </div>









<!-- Page Container -->
<div class="w3-content w3-margin-top " style="max-width:1400px;">



  <!-- The Grid -->
 <div class="row">

  
    <!-- Left Column -->
 

  
     <!-- Middle Column -->
  
<div class=" col-xs-offset-1 col-xs-10  col-sm-offset-0  col-sm-9 sep">


 
  
 <div class="w3-container w3-black w3-card-2 animated fadeInDown ">
   <button class="  button w3-hover-amber" onclick="openCity('About Me')"><b>About Me</b></button>
  <button class=" button w3-hover-amber" " onclick="openCity('Work Experience')"><b>Work Experience</b></button>
  <button class="  button w3-hover-amber" onclick="openCity('Education')"><b>Education</b></button>
    <button class="  button w3-hover-amber" onclick="openCity('Community Work')"><b>Community Work</b></button>
  <button class="  button w3-hover-amber" onclick="openCity('Additional Skills')"><b>Additional Skills/Interests</b></button>
  
    
 
</div>

<div class="animated fadeInUp">

<div id="About Me" class="w3-container city"  >
  <div class="w3-container me w3-black w3-card-2  w3-margin-top animated fadeIn">
          <div class="w3-row">
           <div class=" w3-col s9 m6 l7">
        <h2 class="w3-text-white w3-padding-16"><i class="fa fa-user fa-fw w3-margin-right w3-xxlarge w3-text-amber  animated wobble"></i>About Me</h2>
        
       
        
       
       
        <div class="w3-container text-center">
          <h2 class=" w3-text-white"  style="text-shadow:1px 1px 0 #444"><b>Hi!</b></h2>
        
          <p>My name is Martin Winton and I am an aspiring software developer. I am currently enjoying my second year at MIT and pursuing a major in Computer Science with a minor in Econimics. My goal is to create software that is useful, streamlined, and fun!</p>
      
        </div>
         
     
     
     </div>
     
     
      
        <div class="w3-col s3 m6 l5">
       
     <div class="w3-display-container">
             <img src="http://imgur.com/download/IvXQtmM"  class="w3-image"  alt="Picture supported on Internet Explorer">
    
   
       </div>
        
       
        
       
      </div>
     
     
     </div>
     
     
     
     
     
     
     
     
     
     
     </div>
     
     
      </div>



<div id="Work Experience" class="w3-container city" style="display:none">
 <br>
  
  
   <div class="w3-container w3-black w3-card-2 w3-margin-bottom animated fadeIn">
        <h2 class="w3-text-white w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-amber animated wobble"></i>Work Experience</h2>
        <div class="w3-container">
          <h4 class=" w3-text-white"  style="text-shadow:1px 1px 0 #444"><b>DC74 Data Canters</b></h4>
          <h7 class=" w3-text-white"  style="text-shadow:1px 1px 0 #444"><i>Software Developer</i></h7>
          <h6 class="w3-text-amber"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jul 2017 - <span class="w3-tag w3-amber w3-round">Present</span></h6>
          <h6 class="w3-text-amber"><i class="fa fa-location-arrow fa-fw w3-margin-right"></i>Charlotte, NC</h6>
          <p>Things.</p>
          <hr>
        </div>
         <div class="w3-container">
          <h4 class=" w3-text-white"  style="text-shadow:1px 1px 0 #444"><b>Florida Gulf Coast University</b></h4>
          <h7 class=" w3-text-white"  style="text-shadow:1px 1px 0 #444"><i>Mentee to Department Chair of Software Engineering </i></h7>
          <h6 class="w3-text-amber"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jul 2016 - August 2016</h6>
          <h6 class="w3-text-amber"><i class="fa fa-location-arrow fa-fw w3-margin-right"></i>Estero, FL</h6>
          <p>Things.</p>
          <hr>
        </div>
       
         <div class="w3-container">
          <h4 class=" w3-text-white"  style="text-shadow:1px 1px 0 #444"><b>Harris Teeter Supermarket</b></h4>
          <h7 class=" w3-text-white"  style="text-shadow:1px 1px 0 #444"><i>Cashier/Bagger</i></h7>
          <h6 class="w3-text-amber"><i class="fa fa-calendar fa-fw w3-margin-right"></i>March 2015-May 2016</h6>
          <h6 class="w3-text-amber"><i class="fa fa-location-arrow fa-fw w3-margin-right"></i>Charlotte, NC</h6>
          <p>Things.</p>
       
        </div>
      </div>
  
  
  
  
  
  
</div>

<div id="Education" class="w3-container city" style="display:none" >
  <div class="w3-container w3-black w3-card-2 w3-margin-bottom w3-margin-top animated fadeIn">
        <h2 class="w3-text-white w3-padding-16"><i class="fa fa-graduation-cap fa-fw w3-margin-right w3-xxlarge w3-text-amber  animated wobble"></i>Education</h2>
        <div class="w3-container">
          <h4 class=" w3-text-white"  style="text-shadow:1px 1px 0 #444"><b>Massachuesetts Institute of Technology (MIT)</b></h4>
          <h7 class=" w3-text-white"  style="text-shadow:1px 1px 0 #444"><i>B.S. Candidate in Computer Science and Electrical Engineering</i></h7>
          <h6 class="w3-text-amber"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Sep 2016 - June 2020</span></h6>
          <h6 class="w3-text-amber"><i class="fa fa-location-arrow fa-fw w3-margin-right"></i>Cambridge, MA</h6>
          <p>Things.</p>
          <hr>
        </div>
         <div class="w3-container">
          <h4 class=" w3-text-white"  style="text-shadow:1px 1px 0 #444"><b>Providence Day School (PDS)</b></h4>
          <h7 class=" w3-text-white"  style="text-shadow:1px 1px 0 #444"><i>Student</i></h7>
          <h6 class="w3-text-amber"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Sep 2011 - Jun 2016</h6>
          <h6 class="w3-text-amber"><i class="fa fa-location-arrow fa-fw w3-margin-right"></i>Charlotte, NC</h6>
          <p>Things.</p>
        
        </div>
      
      </div>
</div>


  
  
  <div id="Community Work" class="w3-container city" style="display:none">
   <br>
  
  
   <div class="w3-container w3-black w3-card-2 w3-margin-bottom animated fadeIn">
        <h2 class="w3-text-white w3-padding-16"><i class="fa fa-group fa-fw w3-margin-right w3-xxlarge w3-text-amber  animated wobble"></i>Community Work</h2>
       
        <div class="w3-container">
          <h4 class=" w3-text-white"  style="text-shadow:1px 1px 0 #444"><b>MIT IEEE/ACM Club</b></h4>
          <h7 class=" w3-text-white"  style="text-shadow:1px 1px 0 #444"><i>Board Treasurer</i></h7>
          <h6 class="w3-text-amber"><i class="fa fa-calendar fa-fw w3-margin-right"></i>October 2016-<span class="w3-tag w3-amber w3-round">Present</span></h6>
          <h6 class="w3-text-amber"><i class="fa fa-location-arrow fa-fw w3-margin-right"></i>Cambridge, MA</h6>
          <p>Things.</p>
          <hr>
        </div>
       
       
        <div class="w3-container">
          <h4 class=" w3-text-white"  style="text-shadow:1px 1px 0 #444"><b>Providence Day School's Students for South Africa</b></h4>
          <h7 class=" w3-text-white"  style="text-shadow:1px 1px 0 #444"><i>Executive Council Member</i></h7>
          <h6 class="w3-text-amber"><i class="fa fa-calendar fa-fw w3-margin-right"></i>March 2015 - May 2016</span></h6>
          <h6 class="w3-text-amber"><i class="fa fa-location-arrow fa-fw w3-margin-right"></i>Charlotte, NC</h6>
          <p>Things.</p>
          <hr>
        </div>
         <div class="w3-container">
          <h4 class=" w3-text-white"  style="text-shadow:1px 1px 0 #444"><b>Big Brother/Big Sister PDS Chapter</b></h4>
          <h7 class=" w3-text-white"  style="text-shadow:1px 1px 0 #444"><i>Project Leader </i></h7>
          <h6 class="w3-text-amber"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2015 - May 2016</h6>
          <h6 class="w3-text-amber"><i class="fa fa-location-arrow fa-fw w3-margin-right"></i>Charlotte, NC</h6>
          <p>Things.</p>
        
        </div>
      
      </div>
  
  
</div>
  
    <div id="Additional Skills" class="w3-container city" style="display:none">
  
  <div class="w3-container w3-black w3-card-2 w3-margin-bottom w3-margin-top animated fadeIn">
 
 
   
  
             <h2 class="w3-text-white w3-padding-16"><i class="fa fa-asterisk fa-fw w3-margin-right w3-xxlarge w3-text-amber  animated wobble"></i>Additional Skills</h2>
            <div class="w3-container">
          
           <p class="w3-large w3-text-theme"><b>More Coding Languages</b></p>
          <p><i class="devicon-javascript-plain w3-margin-right w3-xlarge w3-text-amber"></i>JavaScript</p>
           <p><i class="devicon-css3-plain w3-margin-right w3-xlarge w3-text-amber"></i>CSS</p>
             <p><i class="fa fa-desktop fa-fw  w3-margin-right w3-xlarge w3-text-amber"></i>MATLAB</p>
             <p><i class="fa fa-desktop fa-fw  w3-margin-right w3-xlarge w3-text-amber"></i>Regex</p>
          
         
          
        
         
        
       
        
	  <hr>
          <p class="w3-large w3-text-theme"><b>More Software</b></p>
            <p><i class="devicon-windows8-original w3-margin-right w3-xlarge w3-text-amber"></i>Windows</p>
            <p><i class="devicon-linux-plain  w3-margin-right w3-xlarge w3-text-amber"></i>Linux</p>
             <p><i class="devicon-bootstrap-plain  w3-margin-right w3-xlarge w3-text-amber"></i>Bootstrap</p>
              <span class="latex   w3-text-amber ">L<sup>a</sup>T<sub>e</sub>X</span> &nbsp LaTeX
            <p><i class="devicon-slack-plain w3-margin-right w3-xlarge w3-text-amber"></i>Slack </p>
             <p><i class="devicon-mysql-plain w3-margin-right w3-xlarge w3-text-amber"></i>MySQL Workbench</p>
              <p><i class="fa fa-desktop fa-fw  w3-margin-right w3-xlarge w3-text-amber"></i>VMware Workstation</p>
               <p><i class="fa fa-desktop fa-fw  w3-margin-right w3-xlarge w3-text-amber"></i>Xming</p>
              <p><i class="fa fa-desktop fa-fw  w3-margin-right w3-xlarge w3-text-amber"></i>PuTTY</p>
              <p><i class="fa fa-desktop fa-fw  w3-margin-right w3-xlarge w3-text-amber"></i>Eclipse</p>
               <p><i class="fa fa-desktop fa-fw  w3-margin-right w3-xlarge w3-text-amber"></i>Command Line</p>
            
         
            
            
           
       
        
        <hr>
  
  
   <p class="w3-large w3-text-theme"><b>Languages</b></p>
     <p><i class="fa fa-globe fa-fw w3-margin-right w3-xlarge w3-text-amber"></i>Fluent in English</p>
            <p><i class="fa fa-globe fa-fw  w3-margin-right w3-xlarge w3-text-amber"></i>Intermediate in Spanish</p>
  
  
    
        <hr>
  
  
   <p class="w3-large w3-text-theme"><b>Hobbies</b></p>
     <p><i class="fa fa-heart fa-fw w3-margin-right w3-xlarge w3-text-amber"></i>Building PC's</p>
     <p><i class="fa fa-heart fa-fw w3-margin-right w3-xlarge w3-text-amber"></i>Netflix Binging</p>
            <p><i class="fa fa-heart fa-fw  w3-margin-right w3-xlarge w3-text-amber"></i>Piano</p>
             <p><i class="fa fa-heart fa-fw  w3-margin-right w3-xlarge w3-text-amber"></i>Captain of Fraternity's League of Legends Team</p>
  
  </div>
  </div>
  
  </div>
  
  
  
  </div>
  
  
  </div>
   <!-- End of Middle Column -->
   
   
  <div class=" col-xs-offset-2 col-xs-8  col-sm-offset-0 col-sm-3 ">
    
    
      <div class="w3-black w3-text-white w3-card-4 animated fadeInRight" style="padding-bottom: 5px">
        <div class="w3-display-container">
          <img src="http://imgur.com/download/yJSzUMt" style="width:100%;  alt="Picture supported on Internet Explorer">
          <div class="w3-display-bottomleft w3-container w3-text-white">
            <h2>Martin Winton</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-suitcase fa-fw w3-margin-right w3-large w3-text-amber"></i>Software Developer</p>
          <a href="https://web.mit.edu/" style="text-decoration: none"  target="_blank"> <p class ="w3-hover-opacity"><i class="fa fa-graduation-cap fa-fw  w3-margin-right w3-large   w3-text-amber"></i>Sophomore at MIT</p></a>
           <a href="https://www.google.com/maps/place/Massachusetts+Institute+of+Technology/@42.3600949,-71.0963487,17z/data=!3m1!4b1!4m5!3m4!1s0x89e370aaf51a6a87:0xd0e08ea5b308203c!8m2!3d42.360091!4d-71.09416" style="text-decoration: none"  target="_blank"> <p class ="w3-hover-opacity"><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-amber"></i>Cambridge, MA</p></a>

         
<input id="toggle" type="checkbox" > 
  <label for="toggle"><i id="drop" class="fa fa-chevron-down fa-fw w3-text-amber hvr-grow w3-margin-right animated flash" ></i> </label>
     
     <?php 
     
     
     
     
     
     ?>
     
     
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
  
         
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>
   
   

   
   
   
   </div>  
  
  
 
  
  
  
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

 <div class="push"></div>
</div>
<div class="footer"></div>
<footer class="w3-container w3-black w3-center w3-margin-top w3-text-amber animated fadeInUp" style="height:110px">
<br>

   <a href="https://www.linkedin.com/in/martin-winton-0a8b42127" style="text-decoration: none" target="_blank"><i class="fa fa-linkedin ficon  w3-hover-opacity hvr-pulse w3-xxlarge""></i></a>
  <a href="https://www.github.com/MartinWinton" style="text-decoration: none" target="_blank"><i class="fa fa-github w3-hover-opacity hvr-pulse ficon w3-xxlarge""></i></a>
  
     <a href="https://www.facebook.com/mwinton97?ref=bookmarks" style="text-decoration: none" target="_blank"> <i class="fa fa-facebook-official  hvr-pulse ficon w3-hover-opacity w3-xxlarge""></i></a>
   <a href="https://www.instagram.com/martin5156/" style="text-decoration: none" target="_blank"> <i class="fa fa-instagram w3-hover-opacity hvr-pulse ficon w3-xxlarge"></i></a>
  <p> © Martin Winton 2017</p>
  
  </footer>
  
  </footer>
  
<script>
function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
}

(function (window, document) {

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
