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
    <title>NGCD_rec data access</title>
    
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
		  <h1 id="page-title" class="title">NGCD_rec data access</h1>
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
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">&raquo;</span> <span class="inline even last"><a href="access_ngcd_rec.php">NGCD_rec data access</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">

This is the access page for the Long-term consistent Nordic Gridded
Climate Dataset (NGCD_rec) for precipitation for Northern Europe. For
questions regarding NGCD_rec, please contact us
at <a href="mailto:&#110;&#103;&#99;&#100;&#64;&#109;&#101;&#116;&#46;&#110;&#111;?subject=Questions
NGCD">&#110;&#103;&#99;&#100;&#64;&#109;&#101;&#116;&#46;&#110;&#111;</a>.
		  
		  
		  <h3>Actual version and update policy</h3>
		  
		  Met Norway will maintain and update the NGCD_rec gridded dataset. 
		  <br><br>

		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		      <tr bgcolor="#941333" height="40px">
			<td width="8%"><span style="color:#FFFFFF;"><strong>Release code</strong></span></td>
			<td width="15%"><span style="color:#FFFFFF;"><strong>Release date</strong></span></td>
			<td width="15%"><span style="color:#FFFFFF;"><strong>Software Version</strong></span></td>
			<td width="25%"><span style="color:#FFFFFF;"><strong>Period covered</strong></span></td>
			<td width="35%"><span style="color:#FFFFFF;"><strong>Modification</strong></span></td>    
		      </tr>
		      <tr>
			<td><a href="access_ngcd_rec.php#datafiles">20.05</a></td>
			<td>May 2020</td>
			<td>1.0</td>
			<td>January 1901 - December 2000</td>
			<td>First release, based on <a href="access_ngcd.php">NGCD 20.03</a></td>
		      </tr>
		      <tr>
		    </tbody>
		  </table>

			<h3><a id="datafiles" style="color:
			#000000">NGCD_rec datafiles</a></h3> 
                        NGCD_rec is a gridded dataset of monthly
			precipitation totals over Fennoscandia
			(variable RR) presented on a regular grid with
			5 km of spacing. NGCD_rec extends back in time
			into the first half of the 20th century and it
			is designed for users with a need for
			long-term time series and high standards in
			climate consistency.<br><br>

			The reconstruction is based on two input
			datasets. First, the high-resolution daily
			precipitation analyses provided
			by <a href="access_ngcd.php">NGCD</a> on a 1
			km grid covering the time period from
			1971-01-01 to 2019-12-31. Second, a dataset of
			long-term high-quality time series of
			observations of monthly precipitation totals
			measured by climatological stations provided
			by the National Meteorological and
			Hydrological Services of Finland, Norway and
			Sweden.<br><br>

			NGCD_rec is based on the methodological
			approach described by Isotta et al. (2019) and
			Schiemann et al. (2010). The method consists
			in extracting from NGCD the principal
			components of monthly precipitation. The
			reconstruction over time is based on a
			weighted average of a truncation of the
			principal components. The weights are
			determined by the observed time series, as in
			Optimal Interpolation. The time consistency is
			ensured by the use of a fixed set of
			observations for the whole reconstruction
			period.<br><br>

			The files are organized as follows:<br>
			NGCDrec_RR_type&lt;t&gt;_&lt;year1&gt;_&lt;year2&gt;.nc<br>
			The model fields are in NetCDF and they follow
			the CF Conventions and Metadata.  File name
			parameters are:<br>
&lt;t&gt; , NGCD type used (either type 1 or type 2)
&lt;year1&gt; , the dataset starts in January of year1
&lt;year2&gt; , the dataset ends in December of year2<br><br>

			The main output variable is RR, that is the
			monthly precipitation total. The monthly
			precipitation for November 1976 is the total
			amount accumulated between the 31 October
			1976 06:00 UTC to 30 November 1976 06:00
			UTC.<br><br>

			Several files are available, with different
			values for the beginning of the dataset period
			(&lt;year1&gt;). The more a dataset goes back
			in time, the less stations with a complete
			time series of measurements are available. The
			number of stations used for each dataset is
			provided as an attribute of the variable
			RR. Analogously, the other key parameters,
			namely the number of principal components
			retained and the data transformation applied,
			are passed as attributes of RR.



<br><br>

		<h3>Citation and acknowledgement</h3>
		NGCD_rec is a new dataset and the scientific article documenting it is currently being written.
		
		<h3>Terms of use</h3>
 
		The NGCD_rec dataset is available under the <a href="https://data.norge.no/nlod/en/1.0" target="_blank">Norwegian Licence for Open Government Data (NLOD) 1.0</a>.
		
		<h3>References</h3>
		Isotta, F. A., Begert, M., & Frei, C. ( 2019). Long-term consistent monthly temperature and precipitation grid data sets for Switzerland over the past 150 years. Journal of Geophysical Research: Atmospheres, 124, 3783 3799. <a href="https://doi.org/10.1029/2018JD029910">doi:10.1029/2018JD029910</a><br><br>

		Schiemann, R., M. A. Liniger, and C. Frei (2010), Reduced space optimal interpolation of daily rain gauge precipitation in Switzerland, J. Geophys. Res., 115, D14109, <a href="https://doi.org/10.1029/2009JD013047">doi:10.1029/2009JD013047</a>.


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
