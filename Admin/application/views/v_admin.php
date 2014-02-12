<!DOCTYPE html>

<!-- ICS Lib Index page AB-4L -->

<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
	
	<title>ICS Lib</title>

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
						<a href="#panel-2" data-toggle="tab">Manage Accounts</a>
					</li>
					<li>
						<a href="#panel-3" data-toggle="tab">Manage Books</a>
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
						<tr>
							<td> Call number</td>
							<td> Title</td>
							<td> Author</td>
							<td> ISBN/ISSN</td>
							<td> Type of Reference</td>
							<td> Description</td>
							<td> Editor</td>
							<td> Publisher</td>
						</tr>

						<br>
						<br>

						<?php foreach($query as $row): ?>
							<tr>
								<td> <?=$row->call_no?></td>
								<td> <?=$row->title?></td>
								<td> <?=$row->author?></td>
								<td> <?=$row->isbn?></td>
								<td> <?=$row->book_type?></td>
								<td> <?=$row->description?></td>
								<td> <?=$row->editor?></td>
								<td> <?=$row->publisher?></td>

								<?=form_open('c_book/book_edit_form')?>
									<input type='hidden' name='bookid' value='<?=$row->book_id?>'/>
									<input type = "submit" value = "Edit"/>
								</form>
								<?=form_open('c_book/book_remove')?>
									<input type = "hidden" name = "bookid" value = "<?=$row->book_id?>"/>
									<input type = "submit" value = "Delete"/> <br/>
								</form>
							</tr>
							<br>
						<?php endforeach; ?>
					</div>
						
						
						
						
					</div>
					<div class="tab-pane" id="panel-2">
						<p>
							<div class="row" id="main-content">
								<form name='admin_add' method='post' action='<?php echo base_url('/index.php/c_book/book_add')?>'>
									<fieldset>
									<legend> Enter Book Information </legend>
									<br/>
									<p>
										<input type='text' name='callno' placeholder='Call number' required/><br/>
									</p>
									<p>
										<input type='text' name='title' placeholder='Title' required/><br/>
									</p>
									<p>
										<input type='text' name='author' placeholder='Author'required/><br/>
									</p>
									<p>
										<input type='text' name='isbn' placeholder='ISBN/ISSN' required/><br/>
									</p>
									<p>
										<input type='text' name='btype' placeholder='Type of Reference' required/><br/>
									</p>
									<p>
										<input type='text' name='descr' placeholder='Description' required/><br/>
									</p>
									<p>
										<input type='text' name='editor' placeholder='Editor <if any>' /><br/>
									</p>
									<p>
										<input type='text' name='pub' placeholder='Publisher' required/><br/>
									</p>
									<br/>
									<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Add book"/>
									</fieldset>
								</form>
							</div>
						</p>
					</div>
					<div class="tab-pane" id="panel-3">
						<p>
							<div class="row" id="main-content">
								<form name='admin_remove' method='post' action='<?php echo base_url('/index.php/c_book/book_remove')?>'>
									<fieldset>
									<legend> Enter Book Information </legend>
									<br/>
									<p>
										<input type='text' name='callno' placeholder='Call number' required/><br/>
									</p>
									<br/>
									<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Remove book"/>
									</fieldset>
								</form>
							</div>
						</p>
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
<!--end of v_index-->