<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Homepage</title>
<link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script src="contactform/contactform.js"></script>

<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>
<body>
<header class="header" id="header"><!--header-start-->
	<div class="container">
    	<figure class="logo animated fadeInDown delay-07s">
        	<a href="#"><img src="img/logo.png" alt=""></a>	
        </figure>	
       

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">PT PANASIA GROUP</div>
                <div class="panel-body">
               
<h1><center>JABATAN</center></h1>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo e(url('/Jabatan/create')); ?>" class="btn btn-primary">Tambah Data</a>
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>No</th>
<th>Kode</th>
<th>Nama Jabatan</th>
<th>Besaran Uang</th>
<th colspan="3"><center>Opsi</center></th>
</tr>
</thead>
<tbody>
    <?php $__currentLoopData = $Jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><?php echo e($data->id); ?></td>
    <td><?php echo e($data->Kode_jabatan); ?></td>
    <td><?php echo e($data->Nama_jabatan); ?></td>
    <td><?php echo e($data->Besaran_uang); ?></td>
    <td><center><a href="<?php echo e(route('Jabatan.edit', $data->id)); ?>" class="btn btn-warning">Update</a></center></td>  
    <td>                                            
    <center><?php echo Form::open(['method' => 'DELETE', 'route'=>['Jabatan.destroy', $data->id]]); ?>

    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?></center>
    <?php echo Form::close(); ?>

    </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody> 
</table>
<?php $__env->stopSection(); ?>                  

<?php echo $__env->make('layouts.utama', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>