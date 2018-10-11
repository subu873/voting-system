<?php include 'sessions.php' ?>
<?php require '../layout/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Masterpieces</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>

    <script type="text/javascript" src="assets/js/core/app.js"></script>
    <script type="text/javascript" src="assets/js/pages/dashboard.js"></script>

    <script type="text/javascript" src="assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /theme JS files -->

</head>


<?php include 'dashboard_header.php' ?>

<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Buy Requests</span> -
                    List</h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="#" class="btn btn-link btn-float text-size-small has-text"><i
                            class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                    <a href="#" class="btn btn-link btn-float text-size-small has-text"><i
                            class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                    <a href="#" class="btn btn-link btn-float text-size-small has-text"><i
                            class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="dashboard.php"><i class="icon-home2 position-left"></i> Home</a></li>
                <li class="active"><a href="dash_subscribers.php">Buy Request</a></li>
            </ul>

            <ul class="breadcrumb-elements">
                <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-gear position-left"></i>
                        Settings
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                        <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                        <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <!-- Basic datatable -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Buy Request List</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                These Users sent us mail to buy paintings.
            </div>
            <!--<div class="datatable-header">
                <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><span>Filter:</span> <input
                                type="search" class="" placeholder="Type to filter..."
                                aria-controls="DataTables_Table_0"></label></div>
                <div class="dataTables_length" id="DataTables_Table_0_length"><label><span>Show:</span> <select
                                name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select></label>
                </div>
            </div>-->

            <table class="table datatable-basic">
                <thead>
                <tr>
                    <th>S.No.</th>
                    <th>User Name</th>
                    <th>Emails</th>
                    <th>Contact Number</th>
                    <th>Place of Delivery</th>
                    <th>Art Id</th>
                    <th>Message</th>
                    <th>Date For Request</th>
                </tr>
                </thead>
                <tbody>

                <!-- FETCHING SUBSCRIBERS LIST -->
                <?php
                $sql = "SELECT * FROM `buy_request` ORDER BY id DESC ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $user_name=$row['user_name'];
                        $email = $row['email'];
                        $contact=$row['contact_no'];
                        $art_id=$row['task_id'];
                        $delivery=$row['place_delivery'];
                        $message = $row['message'];
                        $time = $row['requested_at'];
                        ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $user_name ?></td>
                            <td><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></td>
                            <td><a href="tel:<?php echo $contact ;?>"><?php echo $contact ;?></a></td>
                            <td><?php echo $delivery;?></td>
                            <td><?php echo $art_id ?></td>
                            <td><?php echo $message; ?></td>
                            <td><?php echo $time; ?></td>
                        </tr>

                    <?php }
                } ?>

                </tbody>
            </table>
        </div>
        <!-- /basic datatable -->

        <!--     --><?php
        /*        function delete_subscriber($id,$conn){
                    $sql ="DELETE FROM `subscribers` WHERE id=$id";
                    var_dump($sql);
                    $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<script type='text/javascript'>alert('Deleted Mail'); </script>";
                }
                } */ ?>


        <!-- Footer -->
        <div class="footer text-muted">
            &copy; 2018. <a href="#">Your Masterpieces</a> by <a href="#"
                                                                 target="_blank">Shubham Singh</a>
        </div>
        <!-- /footer -->

    </div>
    <!-- /content area -->

</div>
<!-- /main content -->

</div>
<!-- /page content -->

</div>
<!-- /page container -->

</body>

</html>
