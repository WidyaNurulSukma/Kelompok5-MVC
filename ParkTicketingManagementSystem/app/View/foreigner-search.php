<?php  
// session_start();
error_reporting(0);
include("../app/View/includes/dbconnection.php");
if (strlen($_SESSION['ptmsaid']==0)) {
  header('location:/logout');
  } else{

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Search Foreign Ticket - Park Ticket Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/images/icon/favicon.ico">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/metisMenu.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="/css/typography.css">
    <link rel="stylesheet" href="/css/default-css.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- modernizr css -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <?php include_once('includes/sidebar.php');?>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
          <?php include_once('includes/header.php');?>
            <!-- header area end -->
            <!-- page title area start -->
            <?php include_once('includes/pagetitle.php');?>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <form id="basic-form" method="POST" action="/searchForeignerTicketData">
                                <div class="form-group">
                                    <label>Search by Ticket ID</label>
                                    <input id="searchdata" type="text" name="searchdata" required="true" class="form-control" placeholder="Ticket ID"></div>
                                <br>
                                <button type="submit" class="btn btn-primary" name="submitSearchForeignerTicketData" id="submitSearchForeignerTicketData">Search</button>
                            </form>  
                            <?php
                            if(isset($dataRetrivied))
                            { 
                            ?>
                            <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>  
                            <div class="data-tables">
                                <table class="table text-center">
                                    <thead class="bg-light text-capitalize">
                                        <tr>
                                            <th>S.NO</th>
                                            <th>Ticket ID</th>
                                            <th>Generating Ticket Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $ret = $dataRetrivied['ret'];
                                    $num=mysqli_num_rows($ret);
                                    if($num>0){
                                    $cnt=1;
                                    while ($row=mysqli_fetch_array($ret)) {
                                    ?>
                                        <tbody>
                                    <tr data-expanded="true">
                                        <td><?php echo $cnt;?></td>
                                        
                                            <td><?php  echo $row['TicketID'];?></td>
                                            <td><?php  echo $row['PostingDate'];?></td>
                                            <td><a href="/viewForeignersTicketDetail?viewid=<?php echo $row['ID'];?>">View</a>
                                            </tr>
                                            <?php 
                                            $cnt=$cnt+1;} } else { ?>
                                    <tr>
                                    <td colspan="8"> No record found against this search</td>

                                    </tr>
                                <?php }} ?>
                                </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('includes/footer.php');?>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    
    
    <!-- jquery latest version -->
    <script src="/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/metisMenu.min.js"></script>
    <script src="/js/jquery.slimscroll.min.js"></script>
    <script src="/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="/js/plugins.js"></script>
    <script src="/js/scripts.js"></script>
</body>

</html>
<?php }  ?>