<!DOCTYPE html>

<!-- ICSLol Admin Index page AB-4L -->

<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
	
	<title>ICSLol - Home</title>

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
	
	
	<table>
		<tr>
			<th> Call number </th>
			<th> Title </th>
			<th> Status </th>
			<th> Request Date </th>
			<th> Request Status </th>
			<th> Name </th>
			<th> Lend Book </th>
		</tr>


		<?php
			foreach($query as $row): 
				echo "<tr>";
				echo "<td> {$row->call_no} </td>";
				echo "<td> {$row->title} </td>";
				echo "<td> {$row->book_status} </td>";
				echo "<td> {$row->request_date} </td>";
				echo "<td> {$row->request_status} </td>";
				echo "<td> {$row->name} </td>";

				echo "<td>";
				echo "<form name='admin_edit' method='post' action='";
				echo base_url('/index.php/c_book/book_lend');
				echo "' />";
				echo "<input type='hidden' name='bookid' value='{$row->book_id}' />";
				echo "<input type='hidden' name='reqid' value='{$row->request_id}' />";
				echo "<input type='hidden' name='libid' value='{$row->library_id}' />";
				echo "<input type='submit' name='submit' id='submit' class='btn btn-primary' value='Press me' />";
				echo "</form>";
				echo "</td>";
			endforeach; 
		?>
	</table>

	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

	
</body>
<!--end of body-->

</html>
<!--end of v_admin-->