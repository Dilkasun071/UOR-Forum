<?php

  session_start();
  $name=$_SESSION['name'];
  $id=$_SESSION['id'];
  $password= $_SESSION['password'];
  $role= $_SESSION['role'];
  
  include 'function.php';

    if(($role=='administrator') || ($role=='student') || ($role=='union')){




	?>

    

              


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UOR|Forum</title>
<link rel= "stylesheet" href="styles/sty.css" media="all"/>
<link rel="shortcut icon" href="2.ico"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<style type="text/css">
  div.con{
   /* border: 1px solid gray;*/
    width: 20%;
    padding: 10px 10px 10px 0px;
    margin: 0px 0px 0px 80%;
    text-align: center;
    color: #2F4F4F;
  }
</style>
</head>

<body >
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="images/uorlg1.png" style="width: 23px;"></a>
  <a class="navbar-brand" href="#">UORForum</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Sign_In <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">Sign_Out</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="question.php">Submit_Question</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>  
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    
  </div>
</nav> 
  
<div class="header">
  
  <div class="con">
    <p>Hello : <?php echo $name; ?></p>
  </div>
  
</div>


  <div class="row"  >
    <div class="col-sm-2">
      <div class="btn-group-vertical" style="width: 100%;">
        <button type="button" class="btn btn-primary">Chemistry</button>
        <button type="button" class="btn btn-primary">Physics</button>
        <button type="button" class="btn btn-primary">Logic</button>
        <button type="button" class="btn btn-primary">Science</button>
        <button type="button" class="btn btn-primary">Botony</button>
        <button type="button" class="btn btn-primary">Zoology</button>
        <button type="button" class="btn btn-primary">Engineering</button>
        <button type="button" class="btn btn-primary">SAD</button>
        <button type="button" class="btn btn-primary">Maths</button>
      </div>
    </div>
  
  <div class="col-sm-6">
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
      </ol>
    </nav>
		<!--enter question..........-->
		<div id="content_timeline">
					<form action="home2.php" method="post">
					
					
					<h2>What's your question today? Let's discuss!</h2>
					<select name="topic">
						<option>Select Topic</option>
						<?php 
						 
						//getTopics(); ?>
					</select>
					<br>
					<textarea cols="81" rows="4" name="content"></textarea><br>
					
					<input type="submit"  name="sub" value="post to Timeline"/>
					</form>
					<?php insertpost($id); ?>
					
					 <h3>Most Reasent Questions</h3>
					 <?php get_posts() ?>
		</div>
	
	
  </div>
  <div class="col-sm-4">
     <div class="card text-center">
      <div class="card-header">
        Trending
      </div>
      <div class="card-body">
        <h4 class="card-title">Special title treatment</h4>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
      <div class="card-footer text-muted">
        2 days ago
      </div>
      <div class="card-body">
        <h4 class="card-title">Special title treatment</h4>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
      <div class="card-footer text-muted">
        2 days ago
      </div>
      <div class="card-body">
        <h4 class="card-title">Special title treatment</h4>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
      <div class="card-footer text-muted">
        2 days ago
      </div>
    </div>

  </div>
</div>

</body>
</html>

 <?php }else{
    header('location:home.html');
 } ?>
