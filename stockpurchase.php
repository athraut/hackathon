<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EPR System | Pharmaceutical Inventory Management System</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">

  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/datatables.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include 'Components/navbar.php'; ?>
    <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include 'Components/sidebar.php'; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="data_table">
                  <table id="example" class="table table-striped table-bordered">
                    <thead class="table-dark">
                      <tr>
                        <th>Purchase<br>ID</th>
                        <th>Supplier<br>ID</th>
                        <th>Medicine<br> ID</th>
                        <th>Medicine<br> Name</th>
                        <th>Quantity</th>
                        <th>Cost of<br> Purchase</th>
                        <th>Date of<br> Purchase</th>
                        <th>Manufacturing<br> Date</th>
                        <th>Expiry<br> Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
	include "config.php";
	

       
        $sql = "SELECT p_id,sup_id,med_id,p_qty,p_cost,pur_date,mfg_date,exp_date FROM purchase";
	$result = $conn->query($sql);
	
		if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()) {
            $sql1="SELECT med_name from meds where med_id=".$row["med_id"]."";
            $result1 = $conn->query($sql1);
            
            while($row1 = $result1->fetch_assoc()) {
      ?>
                      <tr>
                        <td><?php echo $row['p_id']; ?></td>
                        <td><?php echo $row['sup_id']; ?></td>
                        <td><?php echo $row['med_id']; ?></td>
                        <td><?php echo $row1['med_name']; ?></td>
                        <td><?php echo $row['p_qty']; ?></td>
                        <td><?php echo $row['p_cost']; ?></td>
                        <td><?php echo $row['pur_date']; ?></td>
                        <td><?php echo $row['mfg_date']; ?></td>
                        <td><?php echo $row['exp_date']; ?></td>
                        <td>
                              <button type="button" class="btn btn-dark btn-icon-text">
                                Edit
                                <i class="ti-file btn-icon-append"></i>
                              </button>
                              <button type="button" class="btn btn-dark btn-icon-text">
                                Delete
                                <i class="ti-file btn-icon-append"></i>
                              </button>
                            </td>
                      </tr>
                     <?php } } }?>
                    </tbody>


                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include './Components/footer.php' ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>

  <script src="datatable/js/bootstrap.bundle.min.js"></script>
  <script src="datatable/js/jquery-3.6.0.min.js"></script>
  <script src="datatable/js/datatables.min.js"></script>
  <script src="datatable/js/pdfmake.min.js"></script>
  <script src="datatable/js/vfs_fonts.js"></script>
  <script src="datatable/js/custom.js"></script>
</body>

</html>