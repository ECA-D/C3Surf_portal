<?php
error_reporting(E_ALL  & ~E_NOTICE);
session_start();
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
    <title>CarpatClim data access</title>
    
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
		  <h1 id="page-title" class="title">CarpatClim data access</h1>
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
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">&raquo;</span> <span class="inline even last"><a href="access_eobs.php">CarpatClim data access</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">

		  The CarpatClim dataset covers approximately 500 000
		  km2 in Europe in daily resolution. It is a
		  homogenized (MASH, Szentimrey), harmonized and
		  gridded (MISH, Szentimrey and Bihari) dataset,
		  including several ECVs of which temperature and
		  precipitation are available from this page. More
		  detailed information can be found on the <a
		  href="http://www.carpatclim-eu.org"
		  target="_blank">webpage of the CarpatClim
		  project</a>.
For questions regarding CarpatClim, please contact us at 
<a href="mailto:&#99;&#97;&#114;&#112;&#97;&#116;&#99&#108;&#105;&#109;&#64;&#109;&#101;&#116;&#46;&#104;&#117;?subject=Questions CarpatClim">&#99;&#97;&#114;&#112;&#97;&#116;&#99&#108;&#105;&#109;&#64;&#109;&#101;&#116;&#46;&#104;&#117;</a>
		  		  
		  <h3>Actual version and update policy</h3> 
		  CarpatClim is an existing and static dataset, developed outside
		  Copernicus (see below). 

		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		      <tr bgcolor="#941333" height="40px">
			<td width="20.0%"><span style="color:#FFFFFF;"><strong>Release date</strong></span></td>
			<td width="40.0%"><span style="color:#FFFFFF;"><strong>Period covered</strong></span></td>
		      </tr>
		      <tr>
			<td>2013</td>
			<td>1961-01-01 - 2010-12-31</td>
			</td>   
		      </tr>
		    </tbody>
                  </table>
		  
		<h3><a id="datafiles" style="color: #000000">CarpatClim datafiles 1961-01-01 - 2010-12-31</a></h3>

		The datafiles below contain gridded data for 4 elements (daily mean temperature <b>T2M</b>, daily minimum temperature <b>T2MIN</b>, daily maximum temperature <b>T2MAX</b> and daily precipitation sum <b>PRE</b>). They cover the Larger Carpathian Region. The data files below are in gzipped NetCDF format. 
<br><br>

		<table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		  <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td width="25%" style="color:#FFFFFF;"><b>Version 1.0</b></td>
		      <td width="25%" style="color:#FFFFFF;"><b>1961 - 1990</b></td>
		      <td width="25%" style="color:#FFFFFF;"><b>1991 - 2010</b></td>
		      <td width="25%" style="color:#FFFFFF;"><b>Elevation</b></td>      
		    </tr>
		    <tr>
		      <td>0.1 deg. regular grid</td>
		      <td><a href="../data/carpatclim/CCLIM_t2m19611990.nc.gz">T2M</a> <a href="../data/carpatclim/CCLIM_t2min19611990.nc.gz">T2MIN</a> <a href="../data/carpatclim/CCLIM_t2max19611990.nc.gz">T2MAX</a> <a href="../data/carpatclim/CCLIM_pre19611990.nc.gz">PRE</a></td>
		      <td><a href="../data/carpatclim/CCLIM_t2m19912010.nc.gz">T2M</a> <a href="../data/carpatclim/CCLIM_t2min19912010.nc.gz">T2MIN</a> <a href="../data/carpatclim/CCLIM_t2max19912010.nc.gz">T2MAX</a> <a href="../data/carpatclim/CCLIM_pre19912010.nc.gz">PRE</a></td>
		      <td><a href="../data/carpatclim/CCLIM_altitude.nc.gz">all elements</a></td> 
		    </tr>
		  <tbody>
		</table>


		      
  	<h3>Terms of use</h3>
 
 The CarpatClim consortium (led by the Hungarian Meteorological
 Service (OMSZ)) consists of 9 participant countries in the Larger
 Carpathian Region, financed by the Joint Research Centre (JRC).
 <br><br>

 Reports, articles, papers, scientific and
 non-scientific works of any form, including tables, maps, or any
 other kind of output, inprinted or electronic form, based in whole or
 in part on the data supplied, must contain an acknowledgement of the
 form:
<br><br>

CARPATCLIM Database &#169; European Commission - JRC, 2013 
<br><br>

as well as a reference to: 
<br><br>

Szalai, S., Auer, I., Hiebl, J., Milkovich, J., Radim, T. Stepanek,
P., Zahradnicek, P., Bihari, Z., Lakatos, M., Szentimrey, T.,
Limanowka, D., Kilar, P., Cheval, S., Deak, Gy., Mihic, D., Antolovic,
I., Mihajlovic, V., Nejedlik, P., Stastny, P., Mikulova, K.,
Nabyvanets, I., Skyryk, O., Krakovskaya, S.,Vogt, J., Antofie, T.,
Spinoni, J.: Climate of the Greater Carpathian Region. Final Technical
Report.www.carpatclim-eu.org.

<br><br>

The CARPATCLIM data were created as part of JRC's contract "Climate of
the Carpathian Region". Although every care has been taken in
preparing and testing thedata, neither the JRC nor the CARPATCLIM
Consortium can guarantee that the data are correct in all
circumstances. Neither the JRC nor the CARPATCLIM Consortium accept
any liability whatsoever for any error, missing data or omission in
the data, or for any loss or damage arising from their use.  <br><br>

Neither the JRC nor the CARPATCLIM Consortium will be responsible for
any direct or indirect use which might be made of the data. They do not
provide any assistance or support in using the data.

 
		</div>	  
	      </div>
	      
	    </div> <!-- /.block -->
	  </div>
	</div>

       <?php include('../include/menu_portal.php'); ?>
     </div>	
    </div>
    <?php include('../include/footer.php'); ?>
    <?php include('../include/mobile_menu.php'); ?>
    
  </body>
</html>
