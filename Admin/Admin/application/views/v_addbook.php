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

        <?php echo form_open('c_form'); ?>

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
                    
                      <form action="<?php echo base_url();?>index.php/c_form/insert_into_db" method="post">
                        <table>
                        <tr><td><label for="callno" class="col-sm-2 control-label">Call No.</label></td>
                          <td><input type="text" class="form-control" name="callno"></td>
                          <td><?php echo form_error('callno'); ?></td>
                        </tr>
                        <tr><td><label for="title" class="col-sm-2 control-label">Title</label></td>
                          <td><input type="text" class="form-control" name="title"></td>
                          <td><?php echo form_error('title'); ?></td>
                        </tr>
                        <tr><td><label for="author" class="col-sm-2 control-label">Author</label></td>
                          <td><input type="text" class="form-control" name="author"><br></td>
                          <td><?php echo form_error('author'); ?></td>
                        </tr>
                        <tr>
                        <td><label for="inputEmail3" class="col-sm-2 control-label">ISBN/ISSN</label></td>
                          <td><input type="text" class="form-control" name="isbn"><br></td>
                          <td><?php echo form_error('isbn'); ?></td>
                        </tr>
                        <tr><td><label for="inputEmail3" class="col-sm-2 control-label">Book Type</label></td>
                          <td><input type="text" class="form-control" name="booktype"></td>
                          <td><?php echo form_error('booktype'); ?></td>
                        </tr>
                        <tr>
                        <td><label for="inputEmail3" class="col-sm-2 control-label">Description</label></td>
                          <td><input type="text" class="form-control" name="desc"><br></td>
                          <td><?php echo form_error('desc'); ?></td>
                        </tr>
                        <tr>
						<td><label for="inputEmail3" class="col-sm-2 control-label">Book Status</label></td>
                          <td><input type="text" class="form-control" name="bookstatus"></td>
                          <td><?php echo form_error('bookstatus'); ?></td>
                        </tr>
                        <tr>
                        <td><label for="inputEmail3" class="col-sm-2 control-label">Editor</label></td>
                          <td><input type="text" class="form-control" name="editor"></td>
                          <td><?php echo form_error('editor'); ?></td>
                        </tr>
                        <tr>
                        <td><label for="inputEmail3" class="col-sm-2 control-label">Publisher</label></td>
                          <td><input type="text" class="form-control" name="publisher"></td>
                          <td><?php echo form_error('publisher'); ?></td>
                        </tr>
                       </table> 
                    </form>
                  
                  <button type="submit" class="btn btn-default">Add Book</button>

                </div>
           </div>
        </div>
    </body>
</html>
