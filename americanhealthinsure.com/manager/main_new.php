<?php
/**
 * Created by PhpStorm.
 * User: HM9
 * Date: 4/16/2015
 * Time: 2:27 PM
 */
    include 'inc/config.php';

session_start();


if (isset($_SESSION['myusername'])) {

    $conn2 = new mysqli($servername, $username, $password, $dbname);
    if ($conn2->connect_error) {
        die("Connection failed: " . $conn2->connect_error);
    }
} else {
    echo "Couldn't log in";
    die();
};

$sql1 = "select * from index_ctrl";
$rslt1 = $conn2->query($sql1);


?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Website Campaign Manager</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/login2.css" rel="stylesheet">
    <script src="js/login2.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</head>
<body>




<div class="container">
    <div class="row">

        <div class="col-md-6">


            <h3>Current Campaigns</h3><br>
            <h4>Logged In as :  <strong><?php echo $_SESSION['myusername'] ?></strong></h4><br>
            <a class="btn btn-default" href="logout.php" role="button">Log Out</a><br>

            <div>
                <br>
            </div>

            <form method="POST" action=new_campaign.php> <b> New Campaign : </b>
                <input type="text" name="newCampaign" size="15">
                <input id="button" type="submit" name="submit" value="Create">
            </form><br>

            <div class="table-responsive">
                <table id="mytable" class="table table-striped" style="width:80%">

                    <thead>
                    <th>Version</th>
                    <th>Campaign</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </thead>



                    <tbody>
                    <?php
                    if ($rslt1->num_rows > 0) {
                        while ($row = $rslt1->fetch_assoc()) {echo "
                        <tr>
                            <td style=\"width: 86px;\"><b>" . $row["index_ver"] . "</b></td>
                            <td><b>" . $row["campaign_name"] . "</b></td>
                            <td>
                            <a class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\"
                            href=\"edit.php?ver=" . $row["index_ver"] . "\" role=\"button\" style=\"height: 24px;\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                            </td>
                            <td>
                            <a class=\"btn btn-danger btn-xs\" data-title=\"Delete\" data-toggle=\"modal\"
                            href=\"delete.php?ver=" . $row["index_ver"] . "\" role=\"button\" style=\"height: 24px;\"><span class=\"glyphicon glyphicon-trash\"></span></a>
                            </td>
                        </tr>
                        ";};};
                    ?>
                    </tbody>
                </table>
            </div>
        </div>





        <div class="col-md-6">

            <div style="margin-top: 200px; bord">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Carriers Control</h4>
                    </div>
                    <div class="panel-body">

                        <form method="POST" action=update.php?f=carrier_add>
                            <div class="form-group">
                                <label for="carrier_name">Add a New Carrier</label>
                                <input type="text" class="form-control" id="carrier_name" name="carrier_name" placeholder="Carrier Name">
                            </div>

                            <button type="submit" class="btn btn-success">Add to List</button>
                        </form>


                        <br>

                        <form method="POST" action=update.php?f=carrier_del style="margin-top: 50px">
                            <div class="form-group">
                                <label for="carrier_name">Remove this Carrier:</label>


                                <?php
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                };

                                $sql1 = "select * from carriers order by carrier_name";
                                $rslt1 = $conn->query($sql1);
                                if ($rslt1->num_rows > 0) {
                                    $select = '<select class="form-control" name="carrier_id">';
                                    $select .= '<option value="0">---</option>';
                                    while ($row = $rslt1->fetch_assoc()) {
                                        $select .= '<option value="' . $row["id"] . '">' . $row["carrier_name"] . '</option>';
                                    }
                                    $select .= '</select>';
                                }
                                echo $select;
                                ?>



                            </div>

                            <button type="submit" class="btn btn-warning">Remove</button>
                        </form>



                    </div>
                </div>

            </div>





        </div>





    </div>
</div>





























<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
            </div>
            <div class="modal-body">

                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Campaign?</div>

            </div>
            <div class="modal-footer ">
                <form method="get" action="delete.php?ver=" . $row["index_ver"] . "">
                    <button type="submit" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                </form>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>




<div id="footer" style="margin-top: 100px;">
    <div class="container">
        <b>
            <!--<p>Posted by: </p>
            <p>Contact information: <a href="mailto:HMartinez@simplehealthplans.com">
                    HMartinez@simplehealthplans.com</a>.</p>-->
        </b>
    </div>
</div>


<div class="container-fluid" style="margin-top: 50px;">
    <nav class="navbar navbar-default ">
        <div class="container">
            <b>SIL - Campaign Manager
        </div>
    </nav>
</div>






</body>
</html>