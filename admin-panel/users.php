<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>users</title>
        <link rel='stylesheet' type="text/css" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" >
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" type="text/css" />
    </head>


    <body>
        <div class="wrapper">
            <?php include('sidebar.php'); ?>
            <div class="content animated rotateInDownRight">
                <h1>Users</h1>

                <table id="myTable" >

                    <thead>
                        <tr align="center">
                            <th>S.Ro</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Name</th>
                            <th>moblie</th>
                            <th>action</th>


                        </tr>
                    </thead>
                    <tbody >
                        <tr align="center">
                            <td>1</td>
                            <td>tarun@!</td>
                            <td>tarunk</td>
                            <td>tarun</td>
                            <td>9416653744</td>
                            <td >



                                <a href="" class="btntable"><i class="fa fa-pencil"></i></a>


                                <a href=""  class="btntable"><i class="fa fa-trash"></i></a>

                                <a href="" class="btntable"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a>

                                <a href="" class="btntable"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                <a href=""  class="btntable"><i class="fa fa-comments" aria-hidden="true"></i></a>


                            </td>

                        </tr>
                        <tr align="center">
                            <td>2</td>
                            <td>varun@1</td>
                            <td>varunk</td>
                            <td>varun</td>
                            <td>9416653744</td>
                            <td >



                                <a href="" class="btntable"><i class="fa fa-pencil"></i></a>


                                <a href=""  class="btntable"><i class="fa fa-trash"></i></a>

                                <a href="" class="btntable"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a>

                                <a href="" class="btntable"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                <a href=""  class="btntable"><i class="fa fa-comments" aria-hidden="true"></i></a>


                            </td>

                        </tr>
                    </tbody>

                </table>
            </div>
              <div class="clear"></div>
        </div>
        

        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>		
        <!-- database script-->	
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> 
        <!-- script of table-->
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>          
    </body>
</html>


