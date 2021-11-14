<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
	<title>Insert images</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
</head>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image"
                  class="btn btn-info">
           
           </br></br>

           <input type="submit" 
                  name="submit"
                  value="Insert"
                  class="btn btn-info">
     	
     </form>
                <br></br>
                <button type = 'button'  class="btn btn-info"><a href="view.php">Gallery</a></button>
</body>
</html>