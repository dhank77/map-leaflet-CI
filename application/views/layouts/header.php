<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('vendor/xtreme/') ?>assets/images/favicon.png">
    <title>Peta Sebaran | Website GIS</title>
    <!-- Custom CSS -->
    <link href="<?= base_url('vendor/xtreme/') ?>assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('vendor/xtreme/') ?>dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/leaflet/') ?>leaflet.css">
    <script src="<?= base_url('assets/leaflet/') ?>leaflet.js"></script>
    <script src="https://unpkg.com/esri-leaflet@2.3.3/dist/esri-leaflet.js"></script>

    <style>
        #mapid {
            height: 600px;
            z-index: 1;
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>