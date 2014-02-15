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
	
	
	<div class="container">
		
		
		<div class="tabbable" id="tabs-931288">
				<ul class="nav nav-pills">
					<li class="active">
						<a href="#panel-1" data-toggle="tab">Manage Books</a>
					</li>
					<li>
						<a href="#panel-2" data-toggle="tab">Lend Book</a>
					</li>
					<li>
						<a href="#panel-3" data-toggle="tab">Return Book</a>
					</li>
					<li>
						<a href="#panel-4" data-toggle="tab">Manage Accounts</a>
					</li>
					<li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-1">
						
						
						
						
					<div class="row clearfix">
							<div class="col-md-2 column">
							<!-- First div -->
							</div>
						<div class="col-md-8 column">
							<div class="panel-group" id="panel-340522">
								<div class="panel panel-default">
									<div class="panel-heading">
										
										<form action="http://google.com/search" method="GET" id="search-form" role="search">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search Title">
												<span class="input-group-btn">
													<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button><!-- search button -->
													<button class="btn btn-default" type="button" data-toggle="collapse" data-parent="#panel-340522" href="#panel-element-122876"><span class="glyphicon glyphicon-plus"></span></button><!-- search button -->
												</span>
											</div><!-- /input-group -->
										</form>
										
									</div>
									<div id="panel-element-122876" class="panel-collapse collapse">
										<div class="panel-body">
											Advanced Options
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<div class="col-md-2 column">
						<!-- Third div -->
						</div>

						<br>
						<br>
						<br>
						<br>
						
						<br>
						<br>
						<br>
						<br>
						
						<div class="row" id="main-content">
							<table>
								<tr>
									<th> Call number </th>
									<th> Title </th>
									<th> Author </th>
									<th> ISBN/ISSN </th>
									<th> Type of Reference </th>
									<th> Description </th>
									<th> Editor </th>
									<th> Publisher </th>
									<th> Status </th>
									<th> Edit Book Info </th>
									<th> Remove Book </th>
								</tr>


								<?php
									foreach($query as $row): 
										echo "<tr>";
										echo "<td> {$row->call_no} </td>";
										echo "<td> {$row->title} </td>";
										echo "<td> {$row->author} </td>";
										echo "<td> {$row->isbn} </td>";
										echo "<td> {$row->book_type} </td>";
										echo "<td> {$row->description} </td>";
										echo "<td> {$row->editor} </td>";
										echo "<td> {$row->publisher} </td>";
										echo "<td> {$row->book_status} </td>";

										echo "<td>";
										echo "<form name='admin_edit' method='post' action='";
										echo base_url('/index.php/c_book/book_edit_form');
										echo "' />";
										echo "<input type='hidden' name='bookid' value='{$row->book_id}' />";
										echo "<input type='submit' name='submit' id='submit' class='btn btn-primary' value='Press me' />";
										echo "</form>";
										echo "</td>";
										
										echo "<td>";
										echo "<form name='admin_remove' method='post' action='";
										echo base_url('/index.php/c_book/book_remove');
										echo "' />";
										echo "<input type = 'hidden' name = 'bookid' value = '{$row->book_id}' />";
										echo "<input type='submit' name='submit' id='submit' class='btn btn-danger' value='Press me' />";
										echo "</form>";
										echo "</td>";
										echo "</tr>";
									endforeach; 
								?>
							</table>
						</div>
					</div>
						
						
						
						
					</div>
					<div class="tab-pane" id="panel-2">
						<table>
								<tr>
									<th> Call number </th>
									<th> Title </th>
									<th> Author </th>
									<th> ISBN/ISSN </th>
									<th> Type of Reference </th>
									<th> Description </th>
									<th> Editor </th>
									<th> Publisher </th>
									<th> Status </th>
									<th> Lend Book </th>
								</tr>


								<?php
									foreach($query as $row):
										if($row->book_status == "ON SHELF"){
											echo "<tr>";
											echo "<td> {$row->call_no} </td>";
											echo "<td> {$row->title} </td>";
											echo "<td> {$row->author} </td>";
											echo "<td> {$row->isbn} </td>";
											echo "<td> {$row->book_type} </td>";
											echo "<td> {$row->description} </td>";
											echo "<td> {$row->editor} </td>";
											echo "<td> {$row->publisher} </td>";
											echo "<td> {$row->book_status} </td>";
											
											echo "<td>";
											echo "<form name='admin_remove' method='post' action='";
											echo base_url('/index.php/c_book/book_lend_view');
											echo "' />";
											echo "<input type = 'hidden' name = 'bookid' value = '{$row->book_id}' />";
											echo "<input type='submit' name='submit' id='submit' class='btn btn-danger' value='Press me' />";
											echo "</form>";
											echo "</td>";
											echo "</tr>";

										}
										
									endforeach; 
								?>
							</table>
					</div>






					<div class="tab-pane" id="panel-3">
						<table>
								<tr>
									<th> Call number </th>
									<th> Title </th>
									<th> Author </th>
									<th> ISBN/ISSN </th>
									<th> Type of Reference </th>
									<th> Description </th>
									<th> Editor </th>
									<th> Publisher </th>
									<th> Edit Book Info </th>
									<th> Remove Book </th>
								</tr>


								<?php
									foreach($query as $row): 
										echo "<tr>";
										echo "<td> {$row->call_no} </td>";
										echo "<td> {$row->title} </td>";
										echo "<td> {$row->author} </td>";
										echo "<td> {$row->isbn} </td>";
										echo "<td> {$row->book_type} </td>";
										echo "<td> {$row->description} </td>";
										echo "<td> {$row->editor} </td>";
										echo "<td> {$row->publisher} </td>";

										echo "<td>";
										echo "<form name='admin_edit' method='post' action='";
										echo base_url('/index.php/c_book/book_edit_form');
										echo "' />";
										echo "<input type='hidden' name='bookid' value='{$row->book_id}' />";
										echo "<input type='submit' name='submit' id='submit' class='btn btn-primary' value='Press me' />";
										echo "</form>";
										echo "</td>";
										
										echo "<td>";
										echo "<form name='admin_remove' method='post' action='";
										echo base_url('/index.php/c_book/book_remove');
										echo "' />";
										echo "<input type = 'hidden' name = 'bookid' value = '{$row->book_id}' />";
										echo "<input type='submit' name='submit' id='submit' class='btn btn-danger' value='Press me' />";
										echo "</form>";
										echo "</td>";
										echo "</tr>";
									endforeach; 
								?>
							</table>
					</div>






					<div class="tab-pane" id="panel-4">
						<p>
							<div class="row" id="main-content">
								<form name='admin_edit' method='post' action='<?php echo base_url('/index.php/c_book/book_edit')?>'>
									<fieldset>
									<legend> Enter Book Information </legend>
									<br/>
									<p>
										<input type='text' name='callno' placeholder='Call number' required/><br/>
									</p>
									<p>
										<input type='text' name='attrib' placeholder='Book Info to Modify' required/><br/>
									</p>
									<p>
										<input type='text' name='author' placeholder='Modification' required/><br/>
									</p>
									<br/>
									<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Edit book"/>
									</fieldset>
								</form>
							</div>
						</p>
					</div>
				</div>
			</div>
		</div>
		
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
<!--end of v_admin-->