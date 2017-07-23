<?php

require_once "../Classes/PHPExcel.php";
include 'importExcel.php';
?>

    <!doctype html>
    <html lang="en">

    <head>
        <title>dataTable</title>
        <!-- jQuery   -->
        <script src="https://code.jquery.com/jquery-git.min.js"></script>
        <!-- dataTables  -->
         <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <!--  dataTables buttons  -->
        <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
        <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
        <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
        <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
        <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script> 
        <!--  bootstrap  -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css" />

    </head>

    <!-- Upload  -->
   
    <body style="font-family: Arial">
        <div class="container">
            <h1 class="text-center">PHP Excel</h1>
            <h4 class="text-center">DataTable</h4>
            <div class="col-md-2"></div>
            <div class="col-md-10">

                <!-- Table -->
                <form id="form1">
                    <div style="width: 800px; border: 1px solid black; padding: 3px">

                 <?php echo $value; ?>


                    </div>
                </form>

                <hr>
                <button id='EditTable' class='btn btn-primary'>Edit</button>
                <button id='SaveTable' class='btn btn-success' disabled>Save</button>
                
                <hr>
                <div class="upload">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"><br>
                        <div class="col-md-8">
                            Select Document to upload:<br>
                            <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-default"><br>
                            <input type="submit" value="Upload Document" name="submit" class="btn btn-success"><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="dynamicTable.js"></script>

      

    </body>



    </html>