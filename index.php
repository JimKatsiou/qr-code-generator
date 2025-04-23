<!doctype html>
<?php

require "vendor/autoload.php";

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

$image_code = '';

if(isset($_POST['create'])) // if the user generate the generate button on the form
{
    if(isset($_POST['create'])){
        if($_POST['content'] !== ''){
            $temporary_directory = 'temp/';
            $file_name = md5(uniqid()) . '.png';
            $file_path = $temporary_directory . $file_name;

            $qr_code = new QrCode(trim($_POST['content']));
            $qr_code->setSize(300);

            $writer = new PngWriter();
            $result = $writer->write($qr_code);

            $result->saveToFile($file_path);
            $image_code = '<div class="text-center"><img src="'.$file_path.'" /></div>';
        }
    }
}
?>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Generate QR Code</title>
</head>
<body>
<div class="container">
    <h1 class="mt-5 mb-5 text-center">Generate QR Code</h1>
    <div class="row">
        <div class="col-md-4">&nbsp;</div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Generate QR Code</div>
                <div class="card-body">
                    <form method="post">
                        <div class="mb-3">
                            <label>Enter Content</label>
                            <input type="text" name="content" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="create" class="btn btn-primary" value="Generate" />
                        </div>
                        <?php echo $image_code; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFY1zcLABN1+NtUVF0sA7MsX" crossorigin="anonymous"></script>
</body>
</html>
