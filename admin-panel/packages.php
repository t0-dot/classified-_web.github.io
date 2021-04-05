<?php include 'config.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel='stylesheet' type="text/css" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" >
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>
    </head>



    <body>
        <div class="wrapper">
            <?php include('sidebar.php'); ?>
            <div class="content animated rotateInDownRight">
                <h1>Packages</h1>
                <div  class="packages" style="color:white;">

                    <?php
                    $i = 0;
                    /* delete the package details */
                    if (isset($_GET['dlid'])) {
                        if (mysql_query("delete from tb1packages where pid='" . $_GET['dlid'] . "'")) {
                            echo "<script>alert('your package is delete ');</script>";
                            echo "<script>window.location.href='packages.php';</script>";
                        } else {
                            echo "<script>alert(Error!!);window.location.href='packages.php';</script>";
                        }
                    }
                    /* activate the package */
                    if (isset($_GET['act_id'])) {
                        $sql = mysql_query("update tb1packages set pack_status='Y' where pid='" . $_GET['act_id'] . "'");

                        echo "<script>alert('your package is activated' );</script>";
                        echo "<script>window.location.href='packages.php';</script>";
                    }



                    /* deactivate the package */
                    if (isset($_GET['deact_id'])) {
                        $sql = mysql_query("update tb1packages set pack_status='N' where pid='" . $_GET['deact_id'] . "'");


                        echo "<script>alert('your package is deactivate' );</script>";
                        echo "<script>window.location.href='packages.php';</script>";
                    }
                    $getpack_name = "";
                    $getpack_price = "";
                    $getpack_active = "";
                    $getpack_des = "";
                    /* edit the package details */
                    if (isset($_GET['pid'])) {
                        $sql = mysql_query("select * from  tb1packages where pid='" . $_GET['pid'] . "'");
                        if ($ro = mysql_fetch_array($sql)) {
                            $getpack_name = $ro['pack_name'];
                            $getpack_price = $ro['pack_price'];
                            $getpack_active = $ro['pack_days'];
                            $getpack_des = $ro['pack_describe'];
                        } else {
                            echo mysql_error();
                        }
                    }
                    ?>

                    <form method="post">
                        Packages Name:<input type="text"  placeholder="Enter your name" name="package_name" value="<?php
                        if (isset($_GET['pid'])) {
                            echo $getpack_name;
                        }
                        ?>"/>
                        Packages Price:<input type="text"  placeholder="Enter your Price" name="package_price" value="<?php
                        if (isset($_GET['pid'])) {
                            echo $getpack_price;
                        }
                        ?>"/>

                        Packages Active For Pays:<input type="text" placeholder="Enter your need for the Active Days" name="Active" value="<?php
                        if (isset($_GET['pid'])) {
                            echo $getpack_active;
                        }
                        ?>" />
                        Packages Descrpition: <textarea type="text" name="package_describe" cols="10" id="textarea"> <?php
                            if (isset($_GET['pid'])) {
                                echo $getpack_des;
                            } else {
                                echo "Describe your unique description";
                            }
                            ?></textarea>
                        <input type="submit" name="Submit" value="SAVE"/>
                    </form>
                </div>
                <table id="myTable">

                    <thead>
                        <tr align="center">
                            <th>S.No</th>
                            <th>package_name</th>
                            <th>package_price</th>
                            <th>package_days</th>
                            <th>package_description</th>
                            <th>package_status</th>
                            <th >Action</th>


                        </tr>
                    </thead>
                    <tbody >
                        <?php
                        $sql = mysql_query("select * from tb1packages");
                        /* check the status */
                        while ($row1 = mysql_fetch_array($sql)) {
                            $ad_status = "";
                            $bgcolor = "orange";
                            if ($row1['pack_status'] == "P") {
                                $ad_status = "Pending";
                            }
                            if ($row1['pack_status'] == "N") {
                                $ad_status = "Rejected";
                                $bgcolor = "red";
                            }
                            if ($row1['pack_status'] == "Y") {
                                $ad_status = "Approved";
                                $bgcolor = "green";
                            }
                            ?>

                            <tr align="center">
                                <td><?php echo ++$i; ?></td>
                                <td><?php echo $row1['pack_name'] . "<div class='badge'style='background-color:" . $bgcolor . "'>" . $ad_status . "</div>" ?></td>
                                <td><?php echo $row1['pack_price']; ?></td>

                                <td><?php echo $row1['pack_days'] ?></td>
                                <td> <?php echo $row1['pack_describe']; ?></td>
                                <td><?php echo $row1['pack_status'] ?></td>    

                                <td>
                                    <?php
                                    echo " <a href='packages.php?pid=" . $row1['pid'] . "' title='edit' class='btntable btnedit' ><i class='fa fa-pencil'></i></a>";
                                    echo "<a href='packages.php?dlid=" . $row1['pid'] . "' title='delete'class='btntable btndel'  ><i class='fa fa-trash'></i></a>";





                                    if ($row1['pack_status'] == "N" || $row1['pack_status'] == "P") {
                                        echo "<a href='packages.php?act_id=" . $row1['pid'] . "' title='activate'class='btntable btnactivate'  ><i class='fa fa-bell' aria-hidden='true'></i></a>";
                                    }





                                    if ($row1['pack_status'] == "Y" || $row1['pack_status'] == "P") {
                                        echo "<a href='packages.php?deact_id=" . $row1['pid'] . "' title='deactive'class='btntable btndeac' ><i class='fa fa-bell-slash-o' aria-hidden='true'></i></a>";
                                    }
                                    ?>


                                </td>

                            </tr>
    <?php
}
?>
                    </tbody>

                </table>
            </div>
            <div class="clear"></div>
        </div>

        <!-- https://code.jquery.com/jquery/ and ctrl+f and type 1.9.1 version and minified and copy this code-->
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        <!-- yeh js file hai aur yeh table css cdn likh lena-->
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <!-- https://datatables.net/ yeh link yha se mil jayega -->
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
    </body>
</html>
<?php
if (isset($_POST['Submit'])) {
    $p_name = $_POST['package_name'];
    $p_price = $_POST['package_price'];
    $p_days = $_POST['Active'];
    $p_packages = $_POST['package_describe'];
    if (isset($_GET['pid'])) {
        $sql_update = mysql_query("update tb1packages set pack_name='" . $p_name . "',pack_price='".$p_price."',pack_days='".$p_days."',pack_describe='".$p_packages."' where pid='".$_GET['pid']."'");
        if ($sql_update) {
            echo "<script>alert('your update is successful');</script>";
        echo "<script>window.location.href='packages.php';</script>";
    } else {

        echo mysql_error();
    }
        
    }
   else{
       $sql = mysql_query("insert into tb1packages values('0','" . $p_name . "','" . $p_price . "','" . $p_days . "','" . $p_packages . "','P')");
    if ($sql) {
        echo "<script>window.location.href='packages.php';</script>";
    } else {

        echo mysql_error();
    }
}
}
?>