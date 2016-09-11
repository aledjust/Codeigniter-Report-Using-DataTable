<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HPMPDI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?= base_url(); ?>asset/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url(); ?>asset/bootstrap/css/datepicker.css" rel="stylesheet">
    <link href="<?= base_url(); ?>asset/datatables/css/DT_bootstrap.css" rel="stylesheet">
		
    <style type="text/css">
		body {
			padding-top: 60px;
			padding-bottom: 40px;
		}
		.sidebar-nav {
			padding: 9px 0;
		}

		@media (max-width: 980px) {
			/* Enable use of floated navbar text */
			.navbar-text.pull-right {
				float: none;
				padding-left: 5px;
				padding-right: 5px;
			}
		}
	  		
		.transitionImg {
			-webkit-transform: scale(10); 
			-moz-transform: scale(10);
			-o-transform: scale(10);
			transform: scale(10);
		}
		.contentImg {
			-webkit-transition: all .4s ease-in-out;
			-moz-transition: all .4s ease-in-out;
			-o-transition: all .4s ease-in-out;
			-ms-transition: all .4s ease-in-out;
		}
    </style>
    <link href="<?= base_url(); ?>asset/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?= base_url(); ?>asset/bootstarp/js/html5shiv.js"></script>
    <![endif]-->
  
<script src="<?= base_url(); ?>asset/bootstrap/js/jquery.js"></script>
<script src="<?= base_url(); ?>asset/datatables/js/jquery.dataTables.js"></script>
<script src="<?= base_url(); ?>asset/datatables/js/DT_bootstrap.js"></script>

</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="<?= base_url(); ?>">SMS</a>
				<div class="nav-collapse collapse">
					<p class="navbar-text pull-right">
					Logged in as <a href="#" class="navbar-link">Rendy</a> . <a href="#" class="navbar-link">Setting</a> . <a href="<?= base_url(); ?>index.php/login/logout" class="navbar-link">Logout</a> 
					</p>
				<ul class="nav">
					<li>
						<a href='<?= base_url(); ?>index.php/administration/home'>Administration</a>
					</li>
					<li class='active'>
						<a href='<?= base_url(); ?>index.php/pdi/home'>PDI</a>
					</li>
					<li>
						<a href='<?= base_url(); ?>index.php/delivery/home'>Delivery</a>
					</li>
					<li>
						<a href='<?= base_url(); ?>index.php/other/home'>Other</a>
					</li>
				</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div>
            <ul class="nav nav-tabs nav-stacked">
                <li class='active'>
					<a href='<?= base_url(); ?>pdisummary'>PDI Summary</a>
				</li>
				<li>
					<a href='<?= base_url(); ?>repairquelist'>Repair Que List</a>
				</li>
				<li>
					<a href='<?= base_url(); ?>repairsummary'>Repair Summary</a>
				</li>
				<li>
					<a href='<?= base_url(); ?>vqhandovertodel'>VQ Handover To Del</a>
				</li>
				<li>
					<a href='<?= base_url(); ?>vqreturnfrompdi'>VQ Return From PDI</a>
				</li>
				<li>
					<a href='<?= base_url(); ?>delhandoverfromvq'>Delivery Handover From VQ</a>
				</li>
				<li>
					<a href='<?= base_url(); ?>pdireturnfromvq'>PDI Return From VQ</a>
				</li>
				<li>
					<a href='<?= base_url(); ?>repairquelist'>Repair Que List</a>
				</li>
			</ul>
          </div>
        </div>