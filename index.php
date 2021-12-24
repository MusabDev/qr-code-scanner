<?php

// Including the autoload file
require('vendor/autoload.php');

use Zxing\QrReader;

$msg = "";
if (isset($_POST['upload'])) {
  $filename = $_FILES["qrCode"]["name"];
  $filetype = $_FILES["qrCode"]["type"];
  $filetemp = $_FILES["qrCode"]["tmp_name"];
  $filesize = $_FILES["qrCode"]["size"];

  $filetype = explode("/", $filetype);
  if ($filetype[0] !== "image") {
    $msg = "File type is invalid: " . $filetype[1];
  } elseif ($filesize > 5242880) {
    $msg = "File size is too big. Maximum size is 5 MB.";
  } else {
    $newfilename = md5(rand() . time()) . $filename;
    move_uploaded_file($filetemp, "uploads/" . $newfilename);

    $qrScan = new QrReader("uploads/" . $newfilename);
    $msg = "QR Code is scanned the result is: " . $qrScan->text();
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>QR Code Scanner PHP</title>
</head>

<body class="bg-light">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-5 mx-auto">
        <p><?= $msg; ?></p>
        <div class="card card-body p-5 rounded border bg-white">
          <h1 class="mb-4 text-center">QR Code Scanner</h1>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="qrCode" class="form-label">Upload your QR Code Image</label>
              <input class="form-control" type="file" accept="image/*" name="qrCode" id="qrCode">
            </div>
            <button type="submit" name="upload" class="btn btn-primary">
              Convert it
            </button>
          </form>
        </div>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>