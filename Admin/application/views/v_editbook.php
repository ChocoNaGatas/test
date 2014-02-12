<!DOCTYPE html>

<!-- ICSLol Admin "Edit Book Info" page AB-4L -->

<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
	
	<title>ICSLol - Edit Book Info</title>

	<!-- CSS Links -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link href='<?php echo base_url(); ?>assets/css/bootstrap.css' rel="stylesheet" type="text/css" />
    <link href='<?php echo base_url(); ?>assets/css/main.css' rel="stylesheet" type="text/css" />
	
</head>
<!--end of head-->

<body>


	<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-collapse collapse">
		  <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/images/ICSLibIcon.png" alt="ICSLib" length = "10" width = "70"></a> <!--If an account us active, redirect to profile instead-->
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
		
		  <ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Link</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>
					</ul>
        </div> <!--/.navbar-collapse -->
      </div>
    </div>
	
	
	<div>
		<?php foreach($query as $row): 
			echo "<form name='admin_edit' method='post' action='";
			echo base_url('/index.php/c_book/book_edit');
			echo "' />";
			echo "<table>";
			echo "<tr><td><label>Call no: </label></td><td><input type='text' name='callno' value='{$row->call_no}' size='50' /></td></tr>";
			echo "<tr><td><label>Title: </label></td><td><input type='text' name='title' value='{$row->title}' size='50'/></td></tr>";
			echo "<tr><td><label>Author: </label></td><td><input type='text' name='author' value='{$row->author}' size='50'/></td></tr>";
			echo "<tr><td><label>ISBN/ISSN: </label></td><td><input type='text' name='isbn' value='{$row->isbn}' size='50'/></td></tr>";
			echo "<tr><td><label>Book Type: </label></td><td><input type='text' name='btype' value='{$row->book_type}' size='50'/></td></tr>";
			echo "<tr><td><label>Description: </label></td><td><input type='text' name='descr' value='{$row->description}' size='50'/></td></tr>";
			echo "<tr><td><label>Editor: </label></td><td><input type='text' name='editor' value='{$row->editor}' size='50'/></td></tr>";
			echo "<tr><td><label>Publisher: </label></td><td><input type='text' name='pub' value='{$row->publisher}' size='50'/></td></tr>";
			echo "</table>";
			echo "<input type='submit' value ='Save changes'/>";
			echo "</form>";
		endforeach; ?>
	</div>
        
	
	
	


	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

	
</body>
<!--end of body-->

</html>
<!--end of v_editbook-->