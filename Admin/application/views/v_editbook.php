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
	<div>
		<?php foreach($query as $row): ?>
			<?=form_open('c_book/book_edit')?>
				Book ID: <?=$row->book_id?> <br/>
				Call number: <input type='text' name='callno' value='<?=$row->call_no?>'/> <br/>
				Title: <input type='text' name='title' value='<?=$row->title?>'/> <br/>
				Author: <input type='text' name='author' value='<?=$row->author?>'/> <br/>
				ISBN/ISSN: <input type='text' name='isbn' value='<?=$row->isbn?>'/> <br/>
				Book type: <input type='text' name='btype' value='<?=$row->book_type?>'/> <br/>
				Description: <input type='text' name='descr' value='<?=$row->description?>'/> <br/>
				Editor: <input type='text' name='editor' value='<?=$row->editor?>'/> <br/>
				Publisher: <input type='text' name='pub' value='<?=$row->publisher?>'/> <br/>
				<input type = "submit" value = "Edit"/>
			</form>
		<?php endforeach; ?>
	</div>
</body>