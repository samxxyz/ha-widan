<?php
session_start();
include 'conn.php';

if(!isset($_SESSION['log'])){
	header('location:./sign-in');
} else {
	
};
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" http-equiv="refresh">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Widan Store | History</title>
    <link rel="icon" type="png" href="./assets/images/favicon-mz.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/owl.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/animate.css?<?php echo time(); ?>">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css?<?php echo time(); ?>">

    <!-- REMIX ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- DATATABLE CSS -->
    <link href='./assets/css/dataTables.bootstrap5.min.css?<?php echo time(); ?>' rel='stylesheet'>
    
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

                          <table class="table table-dark table-striped table-bordered w-100">
                            <thead>
                              <tr>
                                <th>No.</th>
                                <th>Order ID</th>
                                <th>User ID</th>
                                <th>Zone ID</th>
                                <th>Item</th>
                                <th>Pembayaran</th>
                                <th>Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $id_user = $_SESSION['id'];
                                $riwayat=mysqli_query($con,"SELECT * from order_ml WHERE id_user='$id_user' order by order_id ASC");
                                $no=1;
                                while($p=mysqli_fetch_array($riwayat)){
                                $id = $p['order_id'];
                              ?>
                              <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $p['order_id']; ?></td>
                                <td><?php echo $p['id_ml']; ?></td>
                                <td><?php echo $p['zone'] ; ?></td>
                                <td><?php echo $p['item'] ; ?> <i class="ri-vip-diamond-fill"></i></td>
                                <td><?php echo $p['metode'] ; ?></td>
                                <td><?php echo $p['Status'] ; ?></td>
                              </tr>
                              <?php
                                }
                              ?>
                            </tbody>
                          </table>                    

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="./vendor/jquery/jquery.dataTables.min.js"></script>
  <script src="./vendor/jquery/dataTables.bootstrap5.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
  <!-- <script src="assets/js/datatables.js"></script> -->
  <script>
    $(document).ready(function () {
      $('.table').DataTable();
    });
  </script>

</body>

</html>
