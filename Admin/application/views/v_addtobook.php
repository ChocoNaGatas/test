<!DOCTYPE html>
<!-- -->
<html lang="en">
    <head>
        <link href="../css/bootstrap.css" rel="stylesheet">

        <title>Librarian - Add Book to Catalog</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>

        <?php echo validation_errors(); ?>
        <?php echo form_open('form'); ?>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   <a href="index.php/form">Add Book</a><br>
                    <a href="editbook.html">Edit Book Information</a><br>
                    <a href="deletebook.html">Remove Book</a><br>
                    <a href="librarian.html">Search Book</a><br>
                    <a href="managereqs.html">Manage Requests</a><br>
                    <a href="lendbook.html">Lend Book</a><br>
                    <a href="returnbook.html">Return Book</a><br>
                    <a href="viewreqs.html">View Requests</a><br>
                </div>
            
                <div class="col-md-5">
                    <p></p>
                    <form action="<?php echo base_url();?>index.php/form/insert_into_db" method="post">
                      <label for="callno" class="col-sm-2 control-label">Call No.</label>
                        <input type="text" class="form-control" name="callno"><br>
                      <label for="title" class="col-sm-2 control-label">Title</label>
                        <input type="text" class="form-control" name="title"><br>
                      <label for="author" class="col-sm-2 control-label">Author</label>
                        <input type="text" class="form-control" name="author"><br>
                      <label for="inputEmail3" class="col-sm-2 control-label">ISBN/ISSN</label>
                        <input type="text" class="form-control" name="isbn"><br>
                      <label for="inputEmail3" class="col-sm-2 control-label">Book Type</label>
                        <input type="text" class="form-control" name="booktype"><br>
                      <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                        <input type="text" class="form-control" name="desc"><br>
                      <label for="inputEmail3" class="col-sm-2 control-label">Book Status</label>
                        <input type="text" class="form-control" name="bookstatus"><br>
                      <label for="inputEmail3" class="col-sm-2 control-label">Editor</label>
                        <input type="text" class="form-control" name="editor"><br>
                      <label for="inputEmail3" class="col-sm-2 control-label">Publisher</label>
                        <input type="text" class="form-control" name="publisher"><br>
                        
                      <button type="submit" class="btn btn-default">Add Book</button>
                    </form>

                </div>
           </div>
        </div>
    </body>
</html>
