
<?php
error_reporting(E_ALL  & ~E_NOTICE);
session_start();

$maxtmaxname = "extremes/records_maxtmax.csv";
$maxtminname = 'extremes/records_maxtmin.csv';
$mintmaxname = 'extremes/records_mintmax.csv';
$mintminname = 'extremes/records_mintmin.csv';

$datemaxtmax = date ("d F Y", filemtime($maxtmaxname));
$datemaxtmin = date ("d F Y", filemtime($maxtminname));
$datemintmax = date ("d F Y", filemtime($mintmaxname));
$datemintmin = date ("d F Y", filemtime($mintminname));

$datearr = array($datemaxtmax, $datemaxtmin);


$maxvalue = max(array_map('strtotime', $datearr));


// The nested array to hold all the arrays
$maxtmax_array = []; 

// Open the file for reading
if (($hmaxtmax = fopen("{$maxtmaxname}", "r")) !== FALSE) 
{
  // Each line in the file is converted into an individual array that we call $data
  // The items of the array are comma separated
  while (($datamaxtmax = fgetcsv($hmaxtmax, 1000, ",")) !== FALSE) 
  {
    // Each individual array is being pushed into the nested array
    $maxtmax_array[] = $datamaxtmax;		
  }

  // Close the file
  fclose($hmaxtmax);
}

// The nested array to hold all the arrays
$maxtmin_array = []; 

// Open the file for reading
if (($hmaxtmin = fopen("{$maxtminname}", "r")) !== FALSE) 
{
  // Each line in the file is converted into an individual array that we call $data
  // The items of the array are comma separated
  while (($datamaxtmin = fgetcsv($hmaxtmin, 1000, ",")) !== FALSE) 
  {
    // Each individual array is being pushed into the nested array
    $maxtmin_array[] = $datamaxtmin;		
  }

  // Close the file
  fclose($hmaxtmin);


}

?>
<!DOCTYPE html>
<html style="" class="js js canvas no-touch rgba opacity cssanimations csstransforms csstransforms3d csstransitions svg inlinesvg WebfontLoader-processed bootstrap-anchors-processed wf-opensans-n4-active wf-opensans-n7-active wf-active" dir="ltr" prefix="content: https://purl.org/rss/1.0/modules/content/ dc: https://purl.org/dc/terms/ foaf: https://xmlns.com/foaf/0.1/ og: https://ogp.me/ns# rdfs: https://www.w3.org/2000/01/rdf-schema# sioc: https://rdfs.org/sioc/ns# sioct: https://rdfs.org/sioc/types# skos: https://www.w3.org/2004/02/skos/core# xsd: https://www.w3.org/2001/XMLSchema#" lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="../theme/favicon_0.png" type="image/png">
    <link rel="profile" href="https://www.w3.org/1999/xhtml/vocab">
    <meta name="generator" content="Drupal 7 (https://drupal.org)">
    <link rel="canonical" href="https://climate.copernicus.eu/events">
    <link rel="shortlink" href="https://climate.copernicus.eu/events">
    <title>Observed temperature extremes</title>
    
    <script src="https://www.w3schools.com/lib/w3.js"></script>
 

  <?php include('../include/styles.php'); ?>
  
  </head>


  <body class="html not-front not-logged-in no-sidebars page-events ff ff43 win desktop">
   <?php include('../include/header.php'); ?>  

    <!-- Title -->
    <div id="globalpageheaderwrapper" class="wrapper clearfix ">
      <div id="globalpageheadercontainer" class="container">
	<div id="globalpageheader">
          <div class="row">
	    <div class="region region-static-page-title col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
	      <div class="row-fluid">
		<div id="block-delta-blocks-page-title" class="block block-delta-blocks col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
		  <h1 id="page-title" class="title">Observed temperature extremes</h1>
		</div> <!-- /.block -->
	      </div>
	    </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="mainwrapper" class="wrapper clearfix ">
      <div id="maincontainer" class="container">
        <div id="main">
          <div class="row-fluid">
            <div class="region region-content  col-xs-12 col-sm-12 col-md-8 col-lg-8">
	      <div class="row-fluid">
		
		<!-- Breadcrum -->
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
		  Below are the tables with observed highest <font color="#0033cc">minimum</font> and <font color="#e60000">maximum</font> temperatures. <b>Bold</b> dates indicate observations made within the most recent 5 years. Data in these tables are sourced from the National Meteorological and Hydrological Services through the <a href="https://rcccm.dwd.de/DWD-RCCCM/EN/products/significant/significant_node.html" target="_blank">WMO RA VI RCC Network</a>. The tables were updated on <?php echo date("d F Y", $maxvalue);?>.
<br><br><br>

		  <?php
		 $buildmaxtmax = '<table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%"><tbody><tr bgcolor="#e60000" height="40px"><td width="20%" style="color:#FFFFFF;"><b>Country</b></td><td width="15%" style="color:#FFFFFF;"><b>Highest maximum temperature (&#176;C)</b></td><td width="20%" style="color:#FFFFFF;"><b>Location</b></td><td width="25%" style="color:#FFFFFF;"><b>Date</b></td><td width="20%" style="color:#FFFFFF;"><b>Start of time series</b></td></tr>';
                 foreach($maxtmax_array as $rowmaxtmax)
                 {
	          $buildmaxtmax .= '<tr>';
		  $buildmaxtmax .= "<td>{$rowmaxtmax[0]}</td>";
		  $buildmaxtmax .= "<td>{$rowmaxtmax[1]}</td>";
		  $buildmaxtmax .= "<td>{$rowmaxtmax[2]}</td>";
		  $testdate = strtotime("$rowmaxtmax[3]") ;
                  $now = time();
		  $datediff = round( ($now - $testdate) / (60*60*24*365));
		  if($datediff <= 5) {
		   $buildmaxtmax .= "<td><b>{$rowmaxtmax[3]}</b></td>";
                  }
                  else {
		   $buildmaxtmax .= "<td>{$rowmaxtmax[3]}</td>";
                  }
		  $buildmaxtmax .= "<td>{$rowmaxtmax[4]}</td>";
	          $buildmaxtmax .= '</tr>';
	         }
	         $buildmaxtmax .= '</tbody></table>';
                 echo $buildmaxtmax;

                 ?>
 		 * - temperatures were rounded to the nearest degree
<br>
                 ** - data before 1942 are still on paper, and being digitized
<br>         
                 *** - beginning of observations at this station
<br><br>
                 <?php
		 $buildmaxtmin = '<table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%"><tbody><tr bgcolor="#0033cc" height="40px"><td width="20%" style="color:#FFFFFF;"><b>Country</b></td><td width="15%" style="color:#FFFFFF;"><b>Highest minimum temperature (&#176;C)</b></td><td width="25%" style="color:#FFFFFF;"><b>Location</b></td><td width="20%" style="color:#FFFFFF;"><b>Date</b></td><td width="20%" style="color:#FFFFFF;"><b>Start of time series</b></td></tr>';
                 foreach($maxtmin_array as $rowmaxtmin)
                 {
	          $buildmaxtmin .= '<tr>';
	          $buildmaxtmin .= '<tr>';
		  $buildmaxtmin .= "<td>{$rowmaxtmin[0]}</td>";
		  $buildmaxtmin .= "<td>{$rowmaxtmin[1]}</td>";
		  $buildmaxtmin .= "<td>{$rowmaxtmin[2]}</td>";
		  $testdate = strtotime("$rowmaxtmin[3]") ;
                  $now = time();
		  $datediff = round( ($now - $testdate) / (60*60*24*365));
		  if($datediff <= 5) {
		   $buildmaxtmin .= "<td><b>{$rowmaxtmin[3]}</b></td>";
                  }
                  else {
		   $buildmaxtmin .= "<td>{$rowmaxtmin[3]}</td>";
                  }
		  $buildmaxtmin .= "<td>{$rowmaxtmin[4]}</td>";
	          $buildmaxtmin .= '</tr>';
	          $buildmaxtmin .= '</tr>';
	         }
	         $buildmaxtmin .= '</tbody></table>';
                 echo $buildmaxtmin;

                 ?>
		 * - no statistics for highest minimum temperature available<br>
		 ** - not an official record; based on digitized data since 1961; subject to changes with ongoing digitization<br>
*** - data before 1942 are still on paper, and being digitize<br>
**** - beginning of observations at this station<br>
		</div>
	    </div> <!-- /.block -->
	  </div>
	</div>
	<!-- menu_portal.php -->
       <?php include('../include/menu_portal.php'); ?>
     </div>	
    </div>
    <?php include('../include/footer.php'); ?>
    <?php include('../include/mobile_menu.php'); ?>
   
  </body>
</html>
