<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?= base_url('assets/'); ?>img/logo-kabinet.png">
  <title><?= $title; ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>css/mystle.css" rel="stylesheet">

  <!-- DataTable -->
  <link href="<?= base_url('assets/'); ?>css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>css/buttons.bootstrap4.min.css" rel="stylesheet">

  <!-- jSignature -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/js-lib/jquery-ui.css" />
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/js-lib/jquery.signature.css" />

  <!-- datetime -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/datetime/css/bootstrap-datetimepicker.min.css" />
  <script>
    var loadFile = function(event) {
      var output = document.getElementById('output_image');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
  </script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">