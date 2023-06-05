<?php
error_reporting(E_ALL  & ~E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html style="" class="js js canvas no-touch rgba opacity cssanimations csstransforms csstransforms3d csstransitions svg inlinesvg WebfontLoader-processed bootstrap-anchors-processed wf-opensans-n4-active wf-opensans-n7-active wf-active" dir="ltr" prefix="content: https://purl.org/rss/1.0/modules/content/ dc: https://purl.org/dc/terms/ foaf: https://xmlns.com/foaf/0.1/ og: https://ogp.me/ns# rdfs: https://www.w3.org/2000/01/rdf-schema# sioc: https://rdfs.org/sioc/ns# sioct: https://rdfs.org/sioc/types# skos: https://www.w3.org/2004/02/skos/core# xsd: https://www.w3.org/2001/XMLSchema#" lang="en">

  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="theme/favicon_0.png" type="image/png">
    <link rel="profile" href="https://www.w3.org/1999/xhtml/vocab">
    <meta name="generator" content="Drupal 7 (https://drupal.org)">
    <link rel="canonical" href="https://climate.copernicus.eu/events">
    <link rel="shortlink" href="https://climate.copernicus.eu/events">
 <title>Monthly indices maps</title>
    
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    
  <?php include('include/styles.php'); ?>
        
</head>

  <body class="html not-front not-logged-in no-sidebars page-events ff ff43 win desktop">
   <?php include('include/header.php'); ?>  

    <!-- Title -->
    <div id="globalpageheaderwrapper" class="wrapper clearfix ">
      <div id="globalpageheadercontainer" class="container">
        <div id="globalpageheader">
          <div class="row">
            <div class="region region-static-page-title col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
              <div class="row-fluid">
                <div id="block-delta-blocks-page-title" class="block block-delta-blocks col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
                  <h1 id="page-title" class="title">Monthly indices maps</h1>
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
                <h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="https://surfobs.climate.copernicus.eu/">Home</a></span></div>

                <!-- Main part -->
                <div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">

                  <table>

</table>
<br><br>

<?php
$year="";
$month="";
$yearErr="";
$monthErr="";

function plotmaps($iyear, $imonth) {
   $path = "images/indices/*_${imonth}_${iyear}*";
   $latest_ctime = 0;
   $latest_filename='';
   

   $files=""; 
  
   $files = glob($path);
  // echo reset($files);
   echo "Maps created on: " . date("F d Y H:i:s.", filemtime(reset($files)));

   if( count($files) > "0") {
      foreach($files as $file) {
        echo '<br><br>';
        echo "<a href='${file}' target='_blank'><img alt='' src='${file}' style='width:70%'></a>";
      } 
    } else {
      echo '<br><br>';
      echo "No maps to show";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["month"])) {
    $monthErr = "Month is required";
  } else {
    $month = test_input($_POST["month"]);
  }

  if (empty($_POST["year"])) {
    $yearErr = "Year is required";
  } else {
    $year = test_input($_POST["year"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Year:
<!--  <input type="radio" name="year" <?php if (isset($year) && $year=="2022") echo "checked";?> value="2022">2022-->
  <input type="radio" name="year" <?php if (isset($year) && $year=="2023") echo "checked";?> value="2023">2023
<span class="error">* <?php echo $yearErr;?></span>
  <br><br>
  Month:
  <input type="radio" name="month" <?php if (isset($month) && $month=="01") echo "checked";?> value="01">January
  <input type="radio" name="month" <?php if (isset($month) && $month=="02") echo "checked";?> value="02">February
  <input type="radio" name="month" <?php if (isset($month) && $month=="03") echo "checked";?> value="03">March
  <input type="radio" name="month" <?php if (isset($month) && $month=="04") echo "checked";?> value="04">April
  <input type="radio" name="month" <?php if (isset($month) && $month=="05") echo "checked";?> value="05">May
  <input type="radio" name="month" <?php if (isset($month) && $month=="06") echo "checked";?> value="06">June
  <input type="radio" name="month" <?php if (isset($month) && $month=="07") echo "checked";?> value="07">July
  <input type="radio" name="month" <?php if (isset($month) && $month=="08") echo "checked";?> value="08">August
  <input type="radio" name="month" <?php if (isset($month) && $month=="09") echo "checked";?> value="09">September
  <input type="radio" name="month" <?php if (isset($month) && $month=="10") echo "checked";?> value="10">October
  <input type="radio" name="month" <?php if (isset($month) && $month=="11") echo "checked";?> value="11">November
  <input type="radio" name="month" <?php if (isset($month) && $month=="12") echo "checked";?> value="12">December
<span class="error">* <?php echo $monthErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php

if ( isset($_POST['month']) && isset($_POST['year']) ) {
   plotmaps($year,$month);
}
?>



<br><br>


</div>    
               </div> <!-- /.block -->
              </div>
             </div>
              
        
  <?php include('include/menu_portal.php'); ?>

      </div>
    </div>
  <?php include('include/footer.php'); ?>
    <?php include('include/mobile_menu.php'); ?>
</div>
    </body>
</html>bi
