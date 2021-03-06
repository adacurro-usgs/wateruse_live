<?php include '../config.php'; ?>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>USGS Arkansas Water Science Center</title>
<!-- 
<link href="/styles/common.css" rel="stylesheet" type="text/css" />

<link href="/styles/custom.css" rel="stylesheet" type="text/css" />
<link href="/styles/styles.css" rel="stylesheet" type="text/css" />
<link href="/styles/framework.css" rel="stylesheet" type="text/css" /> -->
<link href="https://wise.er.usgs.gov/<?php echo $dir; ?>/includes/css/jquery.dataTables.css" rel="stylesheet" />
<link href="https://wise.er.usgs.gov/<?php echo $dir; ?>/includes/css/select2.css" rel="stylesheet" />

<!--- LEAFLET --->

<link rel="stylesheet" href="https://wise.er.usgs.gov/<?php echo $dir; ?>/includes/css/sitecss.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



 <!--  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />-->
  <!--- <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet-src.js"></script> --> 
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
  
  
  <!-- <script src="https://unpkg.com/esri-leaflet@2.0.7"></script>-->
  <script src="https://unpkg.com/esri-leaflet@2.2.3/dist/esri-leaflet.js"
    integrity="sha512-YZ6b5bXRVwipfqul5krehD9qlbJzc6KOGXYsDjU9HHXW2gK57xmWl2gU6nAegiErAqFXhygKIsWPKbjLPXVb2g=="
    crossorigin=""></script>
	
	
	
  <link rel="stylesheet" href="https://wise.er.usgs.gov/<?php echo $dir; ?>/wells/js_mapping/Control.FullScreen.css" />
 <script src="https://wise.er.usgs.gov/<?php echo $dir; ?>/wells/js_mapping/Control.FullScreen.js"></script>
<!-->
  <!-- Load Esri Leaflet from CDN -->
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script type ='text/javascript' src ='https://wise.er.usgs.gov/<?php echo $dir; ?>/js/jquery-2.2.3.min.js'> </script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- 
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> 
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.css" />
<!-- <script type = 'text/javascript' src="js/select2.full.min.js"></script> -->
<script src="https://wise.er.usgs.gov/<?php echo $dir; ?>/js/select2.min.js"></script>

<script type ='text/javascript' src ='https://wise.er.usgs.gov/<?php echo $dir; ?>/js/jquery.tablesorter.min.js'> </script>
<script type ='text/javascript' src ='https://wise.er.usgs.gov/<?php echo $dir; ?>/js/jquery.simpletip-1.3.1.min.js'> </script>
<script type ='text/javascript' src ='https://wise.er.usgs.gov/<?php echo $dir; ?>/js/jquery.dataTables.min.js'> </script>
<script type ='text/javascript' src ='https://wise.er.usgs.gov/<?php echo $dir; ?>/js/jquery.mask.js'> </script>
<script type ='text/javascript' src ='https://wise.er.usgs.gov/<?php echo $dir; ?>/js/jquery.mask.bundle.js'> </script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

<script src="https://wise.er.usgs.gov/<?php echo $dir; ?>/js/d3.min.js"></script>
<script src="https://wise.er.usgs.gov/<?php echo $dir; ?>/js/charts.js"></script>
<script src="https://wise.er.usgs.gov/<?php echo $dir; ?>/js/d3tip.js"></script>

 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
 
<!-- <script type ='text/javascript' src ='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js'> </script> -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/corejs-typeahead/1.1.1/typeahead.bundle.min.js"></script>

<script type ='text/javascript' src ='https://wise.er.usgs.gov/<?php echo $dir; ?>/js/core.js'> </script>

<script type ='text/javascript' src ='https://wise.er.usgs.gov/<?php echo $dir; ?>/js/bdt.js'> </script>
<script type ='text/javascript' src ='https://wise.er.usgs.gov/<?php echo $dir; ?>/js/sortelements.js'> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-minimap/3.5.0/Control.MiniMap.js"></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/leaflet-minimap/3.5.0/Control.MiniMap.css' />

<script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.js"></script>

