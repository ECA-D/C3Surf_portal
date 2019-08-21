
<?php
error_reporting(E_ALL  & ~E_NOTICE);
session_start();

$tmaxname = 'records_tmax.csv';

// The nested array to hold all the arrays
$tmax_array = []; 

// Open the file for reading
if (($htmax = fopen("{$tmaxname}", "r")) !== FALSE) 
{
  // Each line in the file is converted into an individual array that we call $data
  // The items of the array are comma separated
  while (($datatmax = fgetcsv($htmax, 1000, ",")) !== FALSE) 
  {
    // Each individual array is being pushed into the nested array
    $tmax_array[] = $datatmax;		
  }

  // Close the file
  fclose($htmax);
}

$tminname = 'records_tmin.csv';

// The nested array to hold all the arrays
$tmin_array = []; 

// Open the file for reading
if (($htmin = fopen("{$tminname}", "r")) !== FALSE) 
{
  // Each line in the file is converted into an individual array that we call $data
  // The items of the array are comma separated
  while (($datatmin = fgetcsv($htmin, 1000, ",")) !== FALSE) 
  {
    // Each individual array is being pushed into the nested array
    $tmin_array[] = $datatmin;		
  }

  // Close the file
  fclose($htmin);


}

?>
<!DOCTYPE html>
<html style="" class="js js canvas no-touch rgba opacity cssanimations csstransforms csstransforms3d csstransitions svg inlinesvg WebfontLoader-processed bootstrap-anchors-processed wf-opensans-n4-active wf-opensans-n7-active wf-active" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/ dc: http://purl.org/dc/terms/ foaf: http://xmlns.com/foaf/0.1/ og: http://ogp.me/ns# rdfs: http://www.w3.org/2000/01/rdf-schema# sioc: http://rdfs.org/sioc/ns# sioct: http://rdfs.org/sioc/types# skos: http://www.w3.org/2004/02/skos/core# xsd: http://www.w3.org/2001/XMLSchema#" lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="../theme/favicon_0.png" type="image/png">
    <link rel="profile" href="http://www.w3.org/1999/xhtml/vocab">
    <meta name="generator" content="Drupal 7 (http://drupal.org)">
    <link rel="canonical" href="http://climate.copernicus.eu/events">
    <link rel="shortlink" href="http://climate.copernicus.eu/events">
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
		  Below are the tables with observed highest <font color="#0033cc">minimum</font> and <font color="#e60000">maximum</font> temperatures. <b>Bold</b> dates indices dates within the last 5 years.
<br><br><br>

		  <?php
		 $buildtmax = '<table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%"><tbody><tr bgcolor="#e60000" height="40px"><td width="20%" style="color:#FFFFFF;"><b>Country</b></td><td width="15%" style="color:#FFFFFF;"><b>Highest maximum temperature (&#176;C)</b></td><td width="20%" style="color:#FFFFFF;"><b>Location</b></td><td width="25%" style="color:#FFFFFF;"><b>Date</b></td><td width="20%" style="color:#FFFFFF;"><b>Start of time series</b></td></tr>';
                 foreach($tmax_array as $rowtmax)
                 {
	          $buildtmax .= '<tr>';
		  $buildtmax .= "<td>{$rowtmax[0]}</td>";
		  $buildtmax .= "<td>{$rowtmax[1]}</td>";
		  $buildtmax .= "<td>{$rowtmax[2]}</td>";
		  $testdate = strtotime("$rowtmax[3]") ;
                  $now = time();
		  $datediff = round( ($now - $testdate) / (60*60*24*365));
		  if($datediff <= 5) {
		   $buildtmax .= "<td><b>{$rowtmax[3]}</b></td>";
                  }
                  else {
		   $buildtmax .= "<td>{$rowtmax[3]}</td>";
                  }
		  $buildtmax .= "<td>{$rowtmax[4]}</td>";
	          $buildtmax .= '</tr>';
	         }
	         $buildtmax .= '</tbody></table>';
                 echo $buildtmax;

                 ?>
 		 * - temperatures were rounded to the nearest degree
<br>
                 ** - data before 1942 are still on paper, and being digitized
<br><br>
                 <?php
		 $buildtmin = '<table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%"><tbody><tr bgcolor="#0033cc" height="40px"><td width="20%" style="color:#FFFFFF;"><b>Country</b></td><td width="15%" style="color:#FFFFFF;"><b>Highest minimum temperature (&#176;C)</b></td><td width="25%" style="color:#FFFFFF;"><b>Location</b></td><td width="20%" style="color:#FFFFFF;"><b>Date</b></td><td width="20%" style="color:#FFFFFF;"><b>Start of time series</b></td></tr>';
                 foreach($tmin_array as $rowtmin)
                 {
	          $buildtmin .= '<tr>';
	          $buildtmin .= '<tr>';
		  $buildtmin .= "<td>{$rowtmin[0]}</td>";
		  $buildtmin .= "<td>{$rowtmin[1]}</td>";
		  $buildtmin .= "<td>{$rowtmin[2]}</td>";
		  $testdate = strtotime("$rowtmin[3]") ;
                  $now = time();
		  $datediff = round( ($now - $testdate) / (60*60*24*365));
		  if($datediff <= 5) {
		   $buildtmin .= "<td><b>{$rowtmin[3]}</b></td>";
                  }
                  else {
		   $buildtmin .= "<td>{$rowtmin[3]}</td>";
                  }
		  $buildtmin .= "<td>{$rowtmin[4]}</td>";
	          $buildtmin .= '</tr>';
	          $buildtmin .= '</tr>';
	         }
	         $buildtmin .= '</tbody></table>';
                 echo $buildtmin;

                 ?>
		 * - no statistics for max Tmin available<br>
		 ** - not an official record; based on digitized data since 1961; subject to changes with ongoing digitization<br>
*** - data before 1942 are still on paper, and being digitize<br>
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
