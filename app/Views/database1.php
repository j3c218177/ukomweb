<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UKom INF 2021</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/css/simple-sidebar.css'); ?>" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">UKom</div>
      <div class="list-group list-group-flush">
        <a href="<?php echo site_url('home'); ?>" class="list-group-item list-group-item-action bg-light">Home</a>
        <a href="<?php echo site_url('motion'); ?>" class="list-group-item list-group-item-action bg-light">Motion Typography</a>
        <a href="<?php echo site_url('database'); ?>" class="list-group-item list-group-item-action bg-light">Database</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Sidebar</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Muhammad Avicenna (J3C218177) <span class="sr-only">(current)</span></a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>-->
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <!--
            <h1 class="mt-4">Simple Sidebar</h1>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
         -->
             <h1 class="mt-4">Database Tasks</h1>

             <?php if (!empty($session)) { ?>

            <div class="alert alert-<?php echo $session['status'] ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
                <?php echo $session['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?php } ?>
        
             <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>Kelurahan</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataWilayah as $row) : ?>
                <tr>
                    
                    <td><?php echo $row->kelurahan;?></td>
                    <td><?php echo $row->jumlah;?></td>
                </tr>

                <?php 
                    endforeach; 

                    if (empty($dataWilayah)) {
                ?>

                <tr>
                    <td colspan="4" class="text-center">Tidak ada data</td>
                </tr>

                <?php } ?>
            </tbody>
        </table>

      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>