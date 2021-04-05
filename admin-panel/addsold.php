<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ads </title>
        <link rel='stylesheet' type="text/css" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" >
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" type="text/css" />



    </head>


    <body> 

        <div class="wrapper">
            <?php
            include'config.php';
            $i = 0;

            include('sidebar.php');
            ?>
            <div class="content animated rotateInDownRight">
                <h1>Adds Posted </h1>
                <?php
                echo "<table  id='myTable' >";
                echo "<thead >";
                echo "<tr align='center'>";
                echo " <th>S.Ro</th>";
                echo "<th >Ad_title</th>";
                echo "<th>name</th>";
                echo "<th>password</th>";
                echo "<th>phone</th>";
                echo "<th>email</th>";
                echo "<th >action</th>";
                echo "</tr>";
                echo " </thead>";
                echo "<body>";
                $sql = mysql_query("select * from tb1adds");
                while ($row = mysql_fetch_array($sql)) {
                    echo "<tr align='center'>";
                    echo "<td>" . ++$i . "</td>";
                    echo "<td>" . $row['ad_title'] . "</td>";
                    echo "<td>";
                    if ($con1 = mysql_query("select * from tb1users where uid =" . $row['ad_user'])) {
                        if ($row1 = mysql_fetch_array($con1)) {

                            echo $row1['seller_name'];
                            echo "</td>";
                            echo "<td>";
                            echo $row1['seller_password'];
                            echo "</td>";
                            echo "<td>";
                            echo $row1['seller_phone'];
                            echo "</td>";
                            echo "<td>";
                             echo $row1['seller_email'];
                        }
                    }
                    echo "</td>";

                    echo "<td>";

                    echo "<a href='../post-ads.php?aid=" . $row['aid'] . "' class='btntable'><i class='fa fa-pencil'></i></a>";

                    echo "<a href='delete.php?aid=" . $row['aid'] . "' class='btntable'><i class='fa fa-trash'></i></a>";

                    echo "<a href='' class='btntable'><i class='fa fa-eye' aria-hidden='true'></i></a>";
                    echo "<a href='activate_ad.php?aid=" . $row['aid'] . "' class='btntable'><i class='fa fa-bell' aria-hidden='true'></i></a>";
                    echo "<a href='' class='btntable'><i class='fa fa-bell-slash-o' aria-hidden='true'></i></a>";


                    echo "</td>";
                    echo "</tr>";
                }
                echo "</body>";

                echo "</table>";
                ?>
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
