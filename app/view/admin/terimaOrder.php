<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Cards</title>

  <!-- Custom fonts for this template-->
  <link href="<?= BASEURL; ?>/asset2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= BASEURL; ?>/asset2/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
  <div class="row justify-content-center">
    <div class="col-lg-6">

      <!-- Basic Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-primary" style="text-align:center;">Apakah Anda sudah membuat keputusan?</h4>
        </div>
        <div class="card-body">
          <h6 style="text-align:center;">Keputusan yang telah diambil, tidak dapat diubah kembali.</h6>
          <br>
          <form method="post" action="<?= BASEURL; ?>/Admin/acceptedStatus">
            <input type="hidden" id="roll" name="id_request" value="<?= $id_request; ?>" />
            <input type="hidden" id="roll" name="status" value="2" />
            <button name="submit" type="sumbit" value="2" id="submit" class="btn btn-primary btn-user btn-block">
              Accepted
            </button>
          </form>
          <br>
          <form method="post" action="<?= BASEURL; ?>/Admin/rejectedStatus">
            <input type="hidden" id="roll" name="id_request" value="<?= $id_request; ?>" />
            <input type="hidden" id="roll" name="status" value="3" />
            <button name="submit" type="sumbit" value="3" id="submit" class="btn btn-danger btn-user btn-block">
              Rejected
            </button>
          </form>
          <hr>
          <div class="text-center">
            <a class="small" href="<?= BASEURL; ?>/Admin/lihatOrder/">Kembali ke list order</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= BASEURL; ?>/asset2/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASEURL; ?>/asset2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= BASEURL; ?>/asset2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= BASEURL; ?>/asset2/vendor/js/sb-admin-2.min.js"></script>

</body>