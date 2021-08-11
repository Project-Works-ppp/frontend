<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    
    <title>UPLOAD NEW BLOG</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>JEC ROBOWORLD</title>
    <link href="band.css" rel="stylesheet">
    <link href="bala.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-bez@1.0.11/src/jquery.bez.js"></script>
  
 <style>
        /*This is internal css*/
        body{
           margin:0;
           padding:0;
           width:100%;
           height: 100vh;
          


        }
        #particles-js
        {
	    position:absolute;
            width: 100%;
            height: 100%;
            background: #000;

        }
    
        #login
        {
            background:rgba(125, 108, 156, 0.897);
            opacity:0.9;
	    padding:2em;
            border:#ccc 2px solid;
            position:absolute;
	    border-radius:30px;
	    top:106px;
	    left:250px;
	    resize:vertical;
	    width:50%;

        }
    
       
        form{
            color:yellow;
            font-style:normal;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bolder;
	    resize:vertical;
	
           
            
        }
	h1{
	    text-alignment:center;
	    resize:vertical;
	   
	}
	
	#bttn{
	    background-color:yellow;
            height:50px;
            width:100px;
	    border-radius:30px;
	 
	}
        textarea{
	    resize:vertical;
	    width:100%;
	    
	}
	
}
	
        */
    
    </style>
    
</head>
<body>
    <nav class="navbar  fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">
          
            <img src="download.jpg" width="50" height="50" class="d-inline-block align-center" alt="logo">
           <span style="color:#ffffff";>JEC ROBO<span style="color:yellow";>WORLD</span></span>
         
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto pl-2 pr-2">
            <li class="nav-item active">
              <a class="nav-link text-white p-2 axz hvr-underline-from-center" href="index.html"><i class="fas fa-home "></i> HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white p-2 axz hvr-underline-from-center" href="tutorial.html"><i class="fas fa-graduation-cap"></i> TUTORIAL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white p-2 axz hvr-underline-from-center" href="Foundation.php"><i class="fas fa-pen-square"></i>Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white p-2 axz hvr-underline-from-center" href="compact-gallery.html"><i class="fas fa-picture-o"></i> IMAGE GALLERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white p-2 axz hvr-underline-from-center" href="alumni.html"><i class="fas fa-users"></i> Alumni</a>
            </li>
          </ul>
          
        </div>
    </nav>
    <div id="particles-js">
    <script type="text/javascript" src="particles.js"></script>
    <script type="text/javascript" src="app.js"></script>
        <div id="login">
            <form accept="" method="POST" enctype="multipart/form-data">
                
		<table align="center">
                <tr>
                <td align="center" colspan="2">
		    <h1>CREATE NEW BLOG</h1>
		</td>
		</tr>

                <tr>
                <td>
                    <label for="TITLE">TITLE:</label>
                <td>
                    <input type="text" name="title" id="TITLE">
                </td>
                </tr>

		<tr>
                <td>
                    <label for="AUTHOR">AUTHOR NAME:</label>
                <td>
                    <input type="text" name="author" id="Name">
                </td>
                </tr>


        
                <tr>
		<td>
                    <label for="CONTENT OF THE BLOG">CONTENT:</label>
		<td>
                    <textarea name="content" id="CONTENT" cols="100" rows="13"></textarea>
                </td>
                </tr>

                <tr>
		<td>
                    <label for="DP">IMAGE:</label>
		<td>
                    <input type="file" name="dp" id="DP">
                </td>
                </tr>

        
                <tr>
                <td align="center" colspan="2">
                    <input type="submit" name="submit" value="SUBMIT" id="bttn">
    
            </form>
        </div>
    </div>
    
</body>
</html>

<?php

include("connection.php");
error_reporting(0);

if($_POST['submit'])
{
	$title= $_POST['title'];
	$author= $_POST['author'];
	$content= $_POST['content'];
	$filename= $_FILES['dp']['name'];
	$tempname= $_FILES['dp']['tmp_name'];
	$folder="blog/".$filename;
	move_uploaded_file($tempname,$folder);
	
	if($title!="" && $author!="" && $content!="" && $filename!="")
	{
		$query="INSERT INTO blog1(title,author,content,image) VALUES('$title','$author','$content','$folder')";
		$data=mysqli_query($conn,$query);

		if($data)
		{
			echo "uploaded";
		}

		else
		{
			echo "upload failed".$query.mysqli_error($conn);
		}
	}
}
?>	