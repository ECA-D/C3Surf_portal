<?php
error_reporting(E_ALL  & ~E_NOTICE);
session_start();
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
    <title>E-OBS data access</title>
    
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
		  <h1 id="page-title" class="title">E-OBS data access</h1>
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
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">&raquo;</span> <span class="inline even last"><a href="access_eobs.php">E-OBS data access</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">

		  This is the download page for the daily gridded observational dataset for precipitation, temperature, sea level pressure and global radiation in Europe called E-OBS. For questions regarding E-OBS, please contact us at <a href="mailto:&#101;&#099;&#097;&#064;&#107;&#110;&#109;&#105;&#046;&#110;&#108;?subject=Questions E-OBS">&#101;&#099;&#097;&#064;&#107;&#110;&#109;&#105;&#046;&#110;&#108;</a>.
		  
		  
		  <h3>Actual version and update policy</h3>
		  <br>
		  
		  ECA&amp;D staff will maintain and update the E-OBS gridded dataset. A registration system is in place which will be used to keep users informed about new versions in the future. If you haven&#39;t registered yourself yet as an E-OBS user using this system, we encourage you to do so here:
		  <br><br>
		  
		  <form method="post" action="registration.php" name="subscribeform" target="_blank">
		    <?php
		      echo '<input type="submit" name="register" id="register" value="Register as an E-OBS user" >';
		      ?>
		  </form>  
		  <br>

		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		      <tr bgcolor="#941333" height="40px">
			<td width="10%"><span style="color:#FFFFFF;"><strong>Version</strong></span></td>
			<td width="17.5%"><span style="color:#FFFFFF;"><strong>Release date</strong></span></td>
			<td width="22.5%"><span style="color:#FFFFFF;"><strong>Period covered</strong></span></td>
			<td width="50%"><span style="color:#FFFFFF;"><strong>Modification</strong></span></td>    
		      </tr>
		      <tr>
			<td><a href="access_eobs.php#datafiles">20.0e</a></td>
			<td>October 2019</td>
			<td>1950-01-01 - 2019-07-31</td>
			<td>E-OBS v20.0e has been extended with global
radiation fields (abbreviation QQ, starting 1980-01-01). The full
ensemble (100 members for temperature, precipitation and sea level
pressure, and 10 members for radiation) can be made available on
request.<br>  New series and updates have been included for Italy,
Croatia, Norway and Russia. Monthly, half-yearly and yearly updates
are continued for Germany, Czech Republic, Bosnia and Herzegovina,
Norway, Slovenia, Finland, Ireland, Sweden, Luxembourg, Netherlands,
Portugal, Spain, Switzerland, France, Denmark, UK and the regional
meteorological service of Catalonia (Spain). More detailed information
can be found on
the <a href="https://cib.knmi.nl/mediawiki/index.php/Compare_E-OBS_v20.0e_and_v19.0e"
target="_blank">page comparing versions 20.0e and 19.0e</a>.
			</td>   
		      </tr>
		      <tr bgcolor="#ffffff">
			<td>19.0e</td>
			<td>March 2019</td>
			<td>1950-01-01 - 2018-12-31</td>
			<td>E-OBS v19.0e (note the additional 'e') is only available for the ensembe mean and ensemble spread. The 'standard' version is no longer available. The full ensemble can be made available on request.<br>
New precipitation series have been included for Sardinia (Italy). Monthly, half-yearly and yearly updates are continued for Germany, Czech Republic, Bosnia and Herzegovina, Norway, Slovenia, Finland, Ireland, Sweden, Luxembourg, Netherlands, Portugal, Spain, Switzerland, France, Denmark, UK and the regional meteorological service of Catalonia (Spain). More detailed information can be found on the <a href="https://cib.knmi.nl/mediawiki/index.php/Compare_E-OBS_v19.0e_and_v18.0e" target="_blank">page comparing versions 19.0e and 18.0e</a>.
			</td>   
		      </tr>
		      <tr>
			<td>18.0e</td>
			<td>November 2018</td>
			<td>1950-01-01 - 2018-06-30</td>
			<td>E-OBS v18.0e (note the additional 'e') is only available for the ensembe mean and ensemble spread. The 'standard' version is no longer available. The full ensemble can be made available on request.<br>
New temperature series have been included for Lombardia (Italy) and updates have been included for Estonia. Monthly and half-yearly updates are continued for Germany, Czech Republic, Bosnia and Herzegovina, Norway, Slovenia, Finland, Ireland, Sweden, Luxembourg, Netherlands, Portugal, Spain, Switzerland and the regional meteorological service of Catalonia (Spain).
			</td>   
		      </tr>
<!--		      <tr bgcolor="#ffffff">
			<td>17.0</td>
			<td>April 2018</td>
			<td>1950-01-01 - 2017-12-31</td>
			<td>Series for Estonia have been updated. Monthly, half-yearly and yearly updates are continued for Germany, Czech Republic, Bosnia and Herzegovina, Norway, Slovenia, Finland, Ireland, Sweden, Luxembourg, Netherlands, Portugal, Spain, Switzerland, France, Denmark, UK and the regional meteorological service of Catalonia (Spain). More detailed information can be found on the <a href="https://cib.knmi.nl/mediawiki/index.php/Compare_E-OBS_v17.0_and_v16.0" target="_blank">page comparing versions 17.0 and 16.0</a>. 
		  Together with the 'standard' E-OBS files, an ensemble of possible E-OBS fields are created. The ensemble mean and ensemble spread are available (v17.0e). The full ensemble can be made available on request.
			</td>   
		      </tr>-->
		    </tbody>
		  </table>
 		  
		<h3><a id="datafiles" style="color: #000000">E-OBS datafiles</a></h3>

E-OBS comes as an ensemble dataset and is available on a 0.1 and 0.25
degree regular grid for the elements daily mean temperature <b>TG</b>,
daily minimum temperature
<b>TN</b>, daily maximum temperature <b>TX</b>, daily precipitation
sum <b>RR</b>, daily averaged sea level pressure <b>PP</b> and daily
mean global radiation <b>QQ</b>. They cover the area: 25N-71.5N x
25W-45E. The data files are in NetCDF-4 format. The Global 30
Arc-Second Elevation Data Set
(<a href="https://eros.usgs.gov/#/Find_Data/Products_and_Data_Available/GTOPO30"
target="_blank">GTOPO30</a>), a global raster Digital Elevation Model
(DEM) with a horizontal grid spacing of 30 arc seconds (approximately
1 kilometer) developed by USGS is used for the elevation file as
well. <br><br>

The ensemble dataset is constructed through a conditional simulation
procedure. For each of the members of the ensemble a spatially
correlated random field is produced using a pre-calculated spatial
correlation function. The mean across the members is calculated and is
provided as the "best-guess" fields. The spread is calculated as the
difference between the 5th and 95th percentiles over the ensemble to
provide a measure indicate of the 90% uncertainty range. The global
radiation dataset has a 10-member ensemble, while the other elements
have a 100-member ensemble. For more details see Cornes et al. (2018)
and <a href="<?php echo
$webhost;?>/userguidance/use_ensembles.php">the guidance on how to use
ensemble datasets</a>.
<br><br>

The global radiation dataset not only uses ground-based in-situ
observations, but, in order to properly estimate spatial variability,
it also incorporates the CERES global radiation satellite derived
product and includes elevation and distance-to-coast as spatial
predictors. On daily time-scales the global radiation is mainly
dependent on cloud patterns. This makes daily global radiation
spatially and temporally highly variable. The in-situ observations are
interpolated using Multiple Adaptive Regression Splines (MARS). The
dimension reduced satellite data is used to interpolate between the
in-situ observations, where the in-situ observations are the 'anchor
points'.

<br><br>


		<table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		  <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td style="color:#FFFFFF;"><b>Version 20.0e</b></td>
		      <td style="color:#FFFFFF;"><b>Ensemble mean</b></td>
		      <td style="color:#FFFFFF;"><b>Ensemble spread</b></td>
		      <td style="color:#FFFFFF;"><b>Elevation</b></td>      
		    </tr>
		    <tr>
		      <td>0.1 deg. regular grid</td>
		      <td><a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.1deg_reg_ensemble/tg_ens_mean_0.1deg_reg_v20.0e.nc">TG</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.1deg_reg_ensemble/tn_ens_mean_0.1deg_reg_v20.0e.nc">TN</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.1deg_reg_ensemble/tx_ens_mean_0.1deg_reg_v20.0e.nc">TX</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.1deg_reg_ensemble/rr_ens_mean_0.1deg_reg_v20.0e.nc">RR</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.1deg_reg_ensemble/pp_ens_mean_0.1deg_reg_v20.0e.nc">PP</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.1deg_reg_ensemble/qq_ens_mean_0.1deg_reg_v20.0e.nc">QQ</a></td>
		      <td><a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.1deg_reg_ensemble/tg_ens_spread_0.1deg_reg_v20.0e.nc">TG</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.1deg_reg_ensemble/tn_ens_spread_0.1deg_reg_v20.0e.nc">TN</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.1deg_reg_ensemble/tx_ens_spread_0.1deg_reg_v20.0e.nc">TX</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.1deg_reg_ensemble/rr_ens_spread_0.1deg_reg_v20.0e.nc">RR</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.1deg_reg_ensemble/pp_ens_spread_0.1deg_reg_v20.0e.nc">PP</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.1deg_reg_ensemble/qq_ens_spread_0.1deg_reg_v20.0e.nc">QQ</a> </td>
		      <td><a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.1deg_reg_ensemble/elev_ens_0.1deg_reg_v20.0e.nc">all elements</a></td>      
		    </tr>
		    <tr>
		      <td>0.25 deg. regular grid</td>
		      <td><a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.25deg_reg_ensemble/tg_ens_mean_0.25deg_reg_v20.0e.nc">TG</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.25deg_reg_ensemble/tn_ens_mean_0.25deg_reg_v20.0e.nc">TN</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.25deg_reg_ensemble/tx_ens_mean_0.25deg_reg_v20.0e.nc">TX</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.25deg_reg_ensemble/rr_ens_mean_0.25deg_reg_v20.0e.nc">RR</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.25deg_reg_ensemble/pp_ens_mean_0.25deg_reg_v20.0e.nc">PP</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.25deg_reg_ensemble/qq_ens_mean_0.25deg_reg_v20.0e.nc">QQ</a> </td>
		      <td><a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.25deg_reg_ensemble/tg_ens_spread_0.25deg_reg_v20.0e.nc">TG</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.25deg_reg_ensemble/tn_ens_spread_0.25deg_reg_v20.0e.nc">TN</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.25deg_reg_ensemble/tx_ens_spread_0.25deg_reg_v20.0e.nc">TX</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.25deg_reg_ensemble/rr_ens_spread_0.25deg_reg_v20.0e.nc">RR</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.25deg_reg_ensemble/pp_ens_spread_0.25deg_reg_v20.0e.nc">PP</a> <a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.25deg_reg_ensemble/qq_ens_spread_0.25deg_reg_v20.0e.nc">QQ</a> </td>
		      <td><a href="https://eca.knmi.nl/download/ensembles/data/Grid_0.25deg_reg_ensemble/elev_ens_0.25deg_reg_v20.0e.nc">all elements</a></td>      
		    </tr>
		  <tbody>
		</table>

		<h3>Access to smaller chunks</h3>
		
		Follow this <a href="access_eobs_chunks.php">link</a>
		if you want to download E-OBS in about 15 year chunks.

		<h3>Meta data input stations</h3>

		Files with meta data about the input stations are available:
		<table>
		  <tbody>
		    <tr> 
		      <td><a href="https://eca.knmi.nl/download/ensembles/data/stations_info_tg_v20.0e.txt">TG</a> <a href="https://eca.knmi.nl/download/ensembles/data/stations_info_tn_v20.0e.txt">TN</a> <a href="https://eca.knmi.nl/download/ensembles/data/stations_info_tx_v20.0e.txt">TX</a> <a href="https://eca.knmi.nl/download/ensembles/data/stations_info_rr_v20.0e.txt">RR</a> <a href="https://eca.knmi.nl/download/ensembles/data/stations_info_pp_v20.0e.txt">PP</a> <a href="https://eca.knmi.nl/download/ensembles/data/stations_info_qq_v20.0e.txt">QQ</a> 
		      </td>
		    </tr>
		  </tbody>
		</table>

		<h3>Datafiles for 2019 and 2020</h3>
		
		Follow this <a href="access_eobs_months.php">link</a> if you want to download gridded datafiles for 2019 and 2020. They are released on a monthly basis. These files will be replaced with every monthly update and removed after the next full update of the E-OBS dataset.
	
		<h3>Visualize daily maps</h3>
		
		Follow
		this <a href="../maps/eobsdailymaps.php">link</a> if
		you want to visualize the daily gridded E-OBS fields.


		<h3>Citation and acknowledgement</h3>
		      
		      Whenever you publish research or applications based on these gridded data products, you should include the following acknowledgement and citations.<br><br>
                     
		      Ensemble version:<br>
		      "We acknowledge the E-OBS dataset from the EU-FP6 project UERRA (https://www.uerra.eu) and the Copernicus Climate Change Service, and the data providers in the ECA&D project (https://eca.knmi.nl)"<br>
		      "Cornes, R., G. van der Schrier, E.J.M. van den Besselaar, and P.D. Jones. 2018: An Ensemble Version of the E-OBS Temperature and Precipitation Datasets, J. Geophys. Res. Atmos., <b>123</b>. doi:10.1029/2017JD028200"<img src="../images/html.gif" width="15" height="15" alt="" border="0"><a href="https://doi.org/10.1029/2017JD028200" target="_blank">Website</a>

		<h3>Terms of use</h3>
 
 The <a href="https://eca.knmi.nl/documents/ECAD_datapolicy.pdf">ECA&amp;D/E-OBS data policy</a> applies. These observational data are strictly for use in non-commercial research and non-commercial education projects only. Scientific results based on these data must be submitted for publication in the open literature without any delay linked to commercial objectives. If you are unsure about the terms "commercial", "research", and "education", please contact the ECA&amp;D staff at <a href="mailto:&#101;&#099;&#097;&#064;&#107;&#110;&#109;&#105;&#046;&#110;&#108;">&#101;&#099;&#097;&#064;&#107;&#110;&#109;&#105;&#046;&#110;&#108;</a> for clarification. 
 
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
