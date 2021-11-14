<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <!-- galeria lightbox2 -->
    <link href="src/css/lightbox.css" rel="stylesheet" />
    <script src="dist/js/lightbox-plus-jquery.js"></script>
	<title>Gallery</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 400px;
			height: 400px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
     <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<a href="uploads/<?=$images['image_url']?>" data-lightbox="roadtrip"><img src="uploads/<?=$images['image_url']?>"></a>
             </div>
          		
    <?php } }?>
    <script src="src/js/lightbox.js"></script>
</body>
</html>