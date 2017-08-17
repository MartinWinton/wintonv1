
<html>

<head>
<title>Employee Database- Martin Winton</title>
<link rel="icon" type="image/png" href='kMxOTN1.png'>
<link rel="shortcut icon" href="/kMxOTN1.png" />
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
<link href="animate.css" rel="stylesheet">
 <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
 
<link href="styles.css" rel="stylesheet">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<style>

<style>

html,body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
</style>

</head>

<body class="w3-dark-grey">



<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
 
  
  
    <!-- MIddle Column -->
    <div class="w3-twothird">
    
  
       <div class="w3-container w3-black w3-card-2 animated fadeInDown">
      <h1 class="w3-text-white w3-padding-16"><i class="fa fa-pencil fa-fw w3-margin-right w3-xxlarge w3-text-amber animated fadeInDownBig"></i>Blog</h1>
</div>



  <div class = "animated fadeInUp">

	<?php 
	
	
	
	
	$title = $post ="";


	$self= $_SERVER['PHP_SELF'];
	
	if( isset($_GET{'page'} ) ) {
		$page = $_GET{'page'};

	}

	
	
	else{
		$page = 0;
	}

	
	if( isset($_POST{'post'} ) ) {
		$post = $_POST{'post'};
	
	}
	
	
	if( isset($_POST{'title'} ) ) {
		$title = $_POST{'title'};
	
	}
	
	

	


	$link = mysqli_connect("localhost", "mart", "pass");
	$db = mysqli_select_db($link,"blogs");
	// establishes link to sql
	
	$title = mysqli_real_escape_string($link,$title);
	$post = mysqli_real_escape_string($link,$post);
	
	$post = nl2br($post);

	/*$data = mysqli_query($link,"SELECT
			COUNT(post_id)
			AS
			'total'
			FROM
			my_blog_tbl");
	
			$rowss = mysqli_fetch_assoc($data);
			$row_count = $rowss['total'];
	
	
	
	*/


	$sql = "INSERT INTO my_blog_tbl (blog_title, datetime, blog_content)
	VALUES('$title', NOW(), '$post')";

if($post != "" and $title != ""){

	if(mysqli_query($link,$sql)){

echo "Posted!";

}
else{
echo "fail";}
	

echo mysqli_error($link);

}

else{
echo "Something is blank";}


?>



  <div class="w3-container w3-black w3-margin-top animated fadeInUp">
        <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="w3-container w3-card-4 w3-black w3-text-amber w3-margin">

 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="title" type="text" placeholder="Title"> <span class=" w3-text-amber">
		</span> 
    </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <textarea class="w3-input w3-border" name="post" type="text-box" rows="15" placeholder="Post"></textarea> <span class=" w3-text-amber">
		</span> 
    </div>
</div>




<button class="w3-button w3-block w3-section w3-amber w3-ripple w3-padding">Send</button>

</form>
	
        </div>
       
        



<?php 

echo"<div class='w3-center w3-black'>";
echo"<div class='w3-bar'>";



if( $page > 0 ) {
	$last = $page - 1;
	$next = $page + 1;
	echo "<a href = \"$self?page=$last\" class='w3-button w3-hover-amber'>&laquo;</a>";
	
	
	
	echo "<a href = \"$self?page=0\" class='w3-button w3-hover-amber'>1</a>";
	echo "<a href = \"$self?page=1\" class='w3-button w3-hover-amber'>2</a>";
	echo "<a href = \"$self?page=2\" class='w3-button w3-hover-amber'>3</a>";
	echo "<a href = \"$self?page=3\" class='w3-button w3-hover-amber'>4</a>";
	echo "<a href = \"$self?page=4\" class='w3-button w3-hover-amber'>5</a>";
	echo "<a href = \"$self?page=5\" class='w3-button w3-hover-amber'>6</a>";
	echo "<a href = \"$self?page=6\" class='w3-button w3-hover-amber'>7</a>";
	
	
	
	echo "<a href = \"$self?page=$next\" class='w3-button w3-hover-amber'>&raquo;</a>";
	
	
}else if( $page == 0 ) {
$page = $page + 1;

	echo "&nbsp";
	echo "&nbsp";
	echo "&nbsp";
	echo "&nbsp";
	echo "&nbsp";
	echo "&nbsp";
	echo "&nbsp";
	echo "&nbsp";
	echo "&nbsp";
	echo "&nbsp";
	echo "&nbsp";
	echo "&nbsp";

	echo "&nbsp";
	echo "&nbsp";
	echo "<a href = \"$self?page=0\" class='w3-button w3-hover-amber'>1</a>";
	echo "<a href = \"$self?page=1\" class='w3-button w3-hover-amber'>2</a>";
	echo "<a href = \"$self?page=2\" class='w3-button w3-hover-amber'>3</a>";
	echo "<a href = \"$self?page=3\" class='w3-button w3-hover-amber'>4</a>";
	echo "<a href = \"$self?page=4\" class='w3-button w3-hover-amber'>5</a>";
	echo "<a href = \"$self?page=5\" class='w3-button w3-hover-amber'>6</a>";
	echo "<a href = \"$self?page=6\" class='w3-button w3-hover-amber'>7</a>";
	echo "<a href = \"$self?page=$page\" class='w3-button w3-hover-amber'>&raquo;</a>";
}




echo"</div>";
echo"</div>";


	?>

</div>

        </div>
      
	 
  
  
  

  
  <!-- End Grid -->
 
  
  <!-- End Page Container -->
</div>
	
	<footer class="w3-container w3-black w3-center w3-margin-top w3-text-amber" >
  <p>More about me!</p>
   <a href="https://www.facebook.com/mwinton97?ref=bookmarks" style="text-decoration: none" target="_blank"> <i class="fa fa-facebook-official w3-hover-opacity w3-xxlarge""></i></a>
   <a href="https://www.instagram.com/martin5156/" style="text-decoration: none" target="_blank"> <i class="fa fa-instagram w3-hover-opacity w3-xxlarge"></i></a>
   <a href="https://www.linkedin.com/in/martin-winton-0a8b42127" style="text-decoration: none" target="_blank"><i class="fa fa-linkedin w3-hover-opacity w3-xxlarge""></i></a>
   <a href="https://www.github.com/MartinWinton" style="text-decoration: none" target="_blank"><i class="fa fa-github w3-hover-opacity w3-xxlarge""></i></a>
</footer>
	
	
	
</body>
</html>