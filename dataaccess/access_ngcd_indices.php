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
    <title>NGCD indices access</title>
    
    <script src="https://www.w3schools.com/lib/w3.js"></script>
 
<?php include('../include/collapsible.php'); ?>
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
		  <h1 id="page-title" class="title">NGCD indices access</h1>
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
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">&raquo;</span> <span class="inline even last"><a href="access_ngcd_indices.php">NGCD indices access</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">


		  <span style="color:#FF0000;"></span><br> This is the
		  download page for the indices derived from
		  the <a href="access_ngcd.php">NGCD v19.03
		  dataset</a>. The datafiles below provide several
		  climate indices (ETCCDI indices marked with *)
		  derived using daily minimum temperature (TN), daily
		  maximum temperature (TX) and daily precipitation sum
		  (RR). They cover Fennoscandia (Finland, Sweden and
		  Norway) with a spatial resolution of 1 x 1 km over
		  the period 1971-01-01 - 2018-12-31. The data files
		  are in NetCDF-4 format, separated in four sets per
		  index: annual, half-yearly, monthly and
		  seasonal. Seasonal indices are calculated from the
		  monthly indices, where for December-January-February
		  (DJF) the December of the previous year is used:
		  Dec(1971)-Jan(1972)-Feb(1972).  <br><br> More
		  details on the calculation of the indices can be
		  found <a href="../userguidance/indicesdictionary.php">here</a>.
		  
		  <h3>Terms of use</h3>

		The NGCD indices dataset is available under
		the <a href="https://data.norge.no/nlod/en/1.0" target="_blank">Norwegian Licence for Open Government
		Data (NLOD) 1.0</a>.

		  <br><br>
		  
		  <h3>Indices files</h3> Click on an item to view the
		  download links for those indices (Source: MET Norway
		  Thredds Service).
		  <br><br>
		  
		  Two different spatial interpolation approaches are
		  applied to produce two versions of the indices
		  dataset. NGCD type 1 of mean, minimum and
		  maximum temperature is based on a residual kriging
		  approach applying five explanatory variables. The
		  weights of the explanatory variables in the trend
		  expression are estimated from long term climatology
		  on a monthly scale. Precipitation is estimated by
		  triangulation with a terrain adjustment.
		  <br><br> NGCD type 2 is based on Bayesian
		  spatial interpolation methods. For temperature a
		  two-step scale separation optimal interpolation is
		  applied. The precipitation data is based on a
		  multi-scale optimal interpolation over a cascade of
		  (reducing) spatial scales.
		  <br><br>
		  
		  <!-- LAEA 1 GRID -->
		  <button class="accordion">Cold indices (type 1)</button>
		  <div class="panel">
		  <!--FD & ID-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>No. of frost days (FD)*</strong></span></td>  
		      <td><span style="color:#FFFFFF;"><strong>Maximum no of consecutive frost days (CFD)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_fdETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_cfdETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_fdETCCDI_hf_T_type1_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_cfdETCCDI_hf_T_type1_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_fdETCCDI_mon_T_type1_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_cfdETCCDI_mon_T_type1_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_fdETCCDI_seas_T_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_cfdETCCDI_seas_T_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--DTR & HD17-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Ice Days (ID)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Heating degree days (HD17*)</strong></span></td>
		    </tr>
		    <tr>       
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_idETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_hd17ETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_idETCCDI_hf_T_type1_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_hd17ETCCDI_hf_T_type1_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_idETCCDI_mon_T_type1_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_hd17ETCCDI_mon_T_type1_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_idETCCDI_seas_T_type1_1971-2018.nc">Seasonal</a>  
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_hd17ETCCDI_seas_T_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--CSDI  & altCSDI-->
		  <table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Cold Spell Duration Index (WSDI)*</strong></span></td> 
		      <td><span style="color:#FFFFFF;"><strong>Alternative Cold Spell Duration Index (altCSDI)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_csdiETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_altcsdiETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    </tbody>
		  </table>


		  <!--TN10p & TX10p-->
		  <table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>No. of cold nights (TN10p)*</strong></span></td> 
		      <td><span style="color:#FFFFFF;"><strong>No. of cold day-times (TX10p)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tn10pETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tx10pETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tn10pETCCDI_hf_T_type1_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tx10pETCCDI_hf_T_type1_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tn10pETCCDI_mon_T_type1_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tx10pETCCDI_mon_T_type1_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tn10pETCCDI_seas_T_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tx10pETCCDI_seas_T_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--TNn & TXn -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Minimum of daily minimum temperature (TNn)*</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Minimum of daily maximum temperature (TXn)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tnnETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_txnETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tnnETCCDI_hf_T_type1_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_txnETCCDI_hf_T_type1_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tnnETCCDI_mon_T_type1_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_txnETCCDI_mon_T_type1_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tnnETCCDI_seas_T_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_txnETCCDI_seas_T_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>
		  
  		  <!--GSL & HI-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Growing season length (GSL)*</strong></span></td>
		    </tr>
		    <tr>       
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_gslETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    </tbody>
		  </table>
    
		  </div>

		  <button class="accordion">Heat indices (type 1)</button>
		  <div class="panel">
		  <!--SU & TR -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>No. of summer days (SU)*</strong></span></td>  
		      <td><span style="color:#FFFFFF;"><strong>No. of tropical nights (TR)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_suETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_trETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_suETCCDI_hf_T_type1_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_trETCCDI_hf_T_type1_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_suETCCDI_mon_T_type1_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_trETCCDI_mon_T_type1_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_suETCCDI_seas_T_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_trETCCDI_seas_T_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--TXx & TNx -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Maximum of daily maximum temperature (TXx)*</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Maximum of daily minimum temperature (TNx)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_txxETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tnxETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_txxETCCDI_hf_T_type1_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tnxETCCDI_hf_T_type1_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_txxETCCDI_mon_T_type1_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tnxETCCDI_mon_T_type1_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_txxETCCDI_seas_T_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tnxETCCDI_seas_T_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>
  
		  <!--TN90p & TX90p-->
		  <table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>No. of warm nights (TN90p)*</strong></span></td>  
		      <td><span style="color:#FFFFFF;"><strong>No. of warm day-times (TX90p)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tn90pETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tx90pETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tn90pETCCDI_hf_T_type1_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tx90pETCCDI_hf_T_type1_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tn90pETCCDI_mon_T_type1_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tx90pETCCDI_mon_T_type1_197101-2018121.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tn90pETCCDI_seas_T_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_tx90pETCCDI_seas_T_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>
		  
		  <!--WSDI  & altWSDI-->
		  <table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Warm Spell Duration Index (WSDI)*</strong></span></td> 
		      <td><span style="color:#FFFFFF;"><strong>Alternative Warm Spell Duration Index (altWSDI)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_wsdiETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_altwsdiETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    </tbody>
		  </table>
		  
		  <!-- CSU -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Consecutive summer days (CSU)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_csuETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_csuETCCDI_hf_T_type1_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_csuETCCDI_mon_T_type1_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_csuETCCDI_seas_T_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		  </table>
		  </div>


		  <button class="accordion">Multi-element indices (type 1)</button>
		  <div class="panel">
		    <!--DTR & HI-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Mean of diurnal temperature range (DTR)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Huglin Index (HI)</strong></span></td>
		    </tr>
		    <tr>       
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_dtrETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_hiETCCDI_yr_T_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_dtrETCCDI_hf_T_type1_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_dtrETCCDI_mon_T_type1_197101-201812.nc">Monthly</a></td>
		      <td width="33%"></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type1/NGCD_dtrETCCDI_seas_T_type1_1971-2018.nc">Seasonal</a>  
		      <td width="33%">  
		      </td>
		    </tr>
		    </tbody>
		  </table>
		  </div>


		  <button class="accordion">Drought indices (type 1)</button>
		  <div class="panel">
		  <!--CDD  & altCDD-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Maximum no. of consecutive dry days (CDD)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Alternative Maximum no. of consecutive dry days (altCDD)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_cddETCCDI_yr_RR_type1_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_altcddETCCDI_yr_RR_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    </tbody>
		  </table>

		  <!--SPI3 & SPI6  -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>3-month Standardized Precipitation Index (SPI3)</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>6-month Standardized Precipitation Index (SPI6)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_spi3ETCCDI_mon_RR_type1_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_spi6ETCCDI_mon_RR_type1_197101-201812.nc">Monthly</a></td>
		    </tr>
		    </tbody>
		  </table>
		  </div>


		  <button class="accordion">Rain indices (type 1)</button>
		  <div class="panel">
		    
		    <!--rx1day & rx5day -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Highest 1-day precipitation amount (RX1day)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Highest 5-day precipitation amount (RX5day)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_rx1dayETCCDI_yr_RR_type1_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_rx5dayETCCDI_yr_RR_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_rx1dayETCCDI_hf_RR_type1_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_rx5dayETCCDI_hf_RR_type1_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_rx1dayETCCDI_mon_RR_type1_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_rx5dayETCCDI_mon_RR_type1_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_rx1dayETCCDI_seas_RR_type1_1971-2018.nc">Seasonal</a>   
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_rx5dayETCCDI_seas_RR_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>
      
		  <!--SDII & R1mm -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Simple Daily Intensity (SDII)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>No. of wet days (R1mm)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_sdiiETCCDI_yr_RR_type1_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r1mmETCCDI_yr_RR_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_sdiiETCCDI_hf_RR_type1_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r1mmETCCDI_hf_RR_type1_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_sdiiETCCDI_mon_RR_type1_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r1mmETCCDI_mon_RR_type1_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_sdiiETCCDI_seas_RR_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r1mmETCCDI_seas_RR_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>
       
		  <!--R10mm & R20mm -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Heavy precipitation days (R10mm)*</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Very heavy precipitation days (R20mm)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r10mmETCCDI_yr_RR_type1_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r20mmETCCDI_yr_RR_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r10mmETCCDI_hf_RR_type1_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r20mmETCCDI_hf_RR_type1_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r10mmETCCDI_mon_RR_type1_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r20mmETCCDI_mon_RR_type1_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r10mmETCCDI_seas_RR_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r20mmETCCDI_seas_RR_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--CWD  & altCWD-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Maximum no. of consecutive wet days (CWD)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Alternative Maximum no. of consecutive wet days (altCWD)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_cwdETCCDI_yr_RR_type1_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_altcwdETCCDI_yr_RR_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    </tbody>
		  </table>
		  

		  <!--R75pTOT & R75pFRAC  -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Precipitation due to moderate wet days (R75pTOT)</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Fraction of precipitation due to moderate wet days (R75pFRAC)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r75ptotETCCDI_yr_RR_type1_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r75pfracETCCDI_yr_RR_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r75ptotETCCDI_hf_RR_type1_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r75pfracETCCDI_hf_RR_type1_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r75ptotETCCDI_mon_RR_type1_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r75pfracETCCDI_mon_RR_type1_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r75ptotETCCDI_seas_RR_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r75pfracETCCDI_seas_RR_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--R95pTOT & R95pFRAC  -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Precipitation due to very wet days (R95pTOT)*</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Fraction of precipitation due to very wet days (R95pFRAC)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r95ptotETCCDI_yr_RR_type1_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r95pfracETCCDI_yr_RR_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r95ptotETCCDI_hf_RR_type1_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r95pfracETCCDI_hf_RR_type1_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r95ptotETCCDI_mon_RR_type1_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r95pfracETCCDI_mon_RR_type1_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r95ptotETCCDI_seas_RR_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r95pfracETCCDI_seas_RR_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--R99pTOT & R99pFRAC  -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Precipitation due to extremely wet days (R99pTOT)*</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Fraction of precipitation due to extremely wet days (R99pFRAC)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r99ptotETCCDI_yr_RR_type1_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r99pfracETCCDI_yr_RR_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r99ptotETCCDI_hf_RR_type1_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r99pfracETCCDI_hf_RR_type1_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r99ptotETCCDI_mon_RR_type1_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r99pfracETCCDI_mon_RR_type1_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r99ptotETCCDI_seas_RR_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_r99pfracETCCDI_seas_RR_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!-- PRCPTOT  -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Precipitation due to wet days (PRCPTOT)*</strong></span></td>    
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_prcptotETCCDI_yr_RR_type1_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_prcptotETCCDI_hf_RR_type1_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_prcptotETCCDI_mon_RR_type1_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type1/NGCD_prcptotETCCDI_seas_RR_type1_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>
		  </div>
<br><br>
		  
		  <!-- LAEA2 GRID -->
		  <button class="accordion">Cold indices (type 2)</button>
		  <div class="panel">
		  <!--FD & ID-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>No. of frost days (FD)*</strong></span></td>  
		      <td><span style="color:#FFFFFF;"><strong>Maximum no of consecutive frost days (CFD)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_fdETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_cfdETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_fdETCCDI_hf_T_type2_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_cfdETCCDI_hf_T_type2_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_fdETCCDI_mon_T_type2_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_cfdETCCDI_mon_T_type2_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_fdETCCDI_seas_T_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_cfdETCCDI_seas_T_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--DTR & HD17-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Ice Days (ID)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Heating degree days (HD17*)</strong></span></td>
		    </tr>
		    <tr>       
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_idETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_hd17ETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_idETCCDI_hf_T_type2_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_hd17ETCCDI_hf_T_type2_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_idETCCDI_mon_T_type2_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_hd17ETCCDI_mon_T_type2_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_idETCCDI_seas_T_type2_1971-2018.nc">Seasonal</a>  
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_hd17ETCCDI_seas_T_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--CSDI  & altCSDI-->
		  <table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Cold Spell Duration Index (WSDI)*</strong></span></td> 
		      <td><span style="color:#FFFFFF;"><strong>Alternative Cold Spell Duration Index (altCSDI)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_csdiETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_altcsdiETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    </tbody>
		  </table>


		  <!--TN10p & TX10p-->
		  <table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>No. of cold nights (TN10p)*</strong></span></td> 
		      <td><span style="color:#FFFFFF;"><strong>No. of cold day-times (TX10p)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tn10pETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tx10pETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tn10pETCCDI_hf_T_type2_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tx10pETCCDI_hf_T_type2_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tn10pETCCDI_mon_T_type2_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tx10pETCCDI_mon_T_type2_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tn10pETCCDI_seas_T_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tx10pETCCDI_seas_T_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--TNn & TXn -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Minimum of daily minimum temperature (TNn)*</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Minimum of daily maximum temperature (TXn)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tnnETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_txnETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tnnETCCDI_hf_T_type2_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_txnETCCDI_hf_T_type2_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tnnETCCDI_mon_T_type2_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_txnETCCDI_mon_T_type2_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tnnETCCDI_seas_T_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_txnETCCDI_seas_T_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>
		  
  		  <!--GSL & HI-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Growing season length (GSL)*</strong></span></td>
		    </tr>
		    <tr>       
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_gslETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    </tbody>
		  </table>
    
		  </div>

		  <button class="accordion">Heat indices (type 2)</button>
		  <div class="panel">
		  <!--SU & TR -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>No. of summer days (SU)*</strong></span></td>  
		      <td><span style="color:#FFFFFF;"><strong>No. of tropical nights (TR)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_suETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_trETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_suETCCDI_hf_T_type2_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_trETCCDI_hf_T_type2_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_suETCCDI_mon_T_type2_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_trETCCDI_mon_T_type2_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_suETCCDI_seas_T_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_trETCCDI_seas_T_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--TXx & TNx -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Maximum of daily maximum temperature (TXx)*</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Maximum of daily minimum temperature (TNx)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_txxETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tnxETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_txxETCCDI_hf_T_type2_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tnxETCCDI_hf_T_type2_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_txxETCCDI_mon_T_type2_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tnxETCCDI_mon_T_type2_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_txxETCCDI_seas_T_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tnxETCCDI_seas_T_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>
  
		  <!--TN90p & TX90p-->
		  <table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>No. of warm nights (TN90p)*</strong></span></td>  
		      <td><span style="color:#FFFFFF;"><strong>No. of warm day-times (TX90p)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tn90pETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tx90pETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tn90pETCCDI_hf_T_type2_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tx90pETCCDI_hf_T_type2_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tn90pETCCDI_mon_T_type2_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tx90pETCCDI_mon_T_type2_197101-2018121.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tn90pETCCDI_seas_T_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_tx90pETCCDI_seas_T_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>
		  
		  <!--WSDI  & altWSDI-->
		  <table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Warm Spell Duration Index (WSDI)*</strong></span></td> 
		      <td><span style="color:#FFFFFF;"><strong>Alternative Warm Spell Duration Index (altWSDI)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_wsdiETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_altwsdiETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    </tbody>
		  </table>
		  
		  <!-- CSU -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Consecutive summer days (CSU)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_csuETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_csuETCCDI_hf_T_type2_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_csuETCCDI_mon_T_type2_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_csuETCCDI_seas_T_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		  </table>
		  </div>


		  <button class="accordion">Multi-element indices (type 2)</button>
		  <div class="panel">
		    <!--DTR & HI-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Mean of diurnal temperature range (DTR)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Huglin Index (HI)</strong></span></td>
		    </tr>
		    <tr>       
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_dtrETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_hiETCCDI_yr_T_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_dtrETCCDI_hf_T_type2_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_dtrETCCDI_mon_T_type2_197101-201812.nc">Monthly</a></td>
		      <td width="33%"></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/T_type2/NGCD_dtrETCCDI_seas_T_type2_1971-2018.nc">Seasonal</a>  
		      <td width="33%">  
		      </td>
		    </tr>
		    </tbody>
		  </table>
		  </div>


		  <button class="accordion">Drought indices (type 2)</button>
		  <div class="panel">
		  <!--CDD  & altCDD-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Maximum no. of consecutive dry days (CDD)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Alternative Maximum no. of consecutive dry days (altCDD)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_cddETCCDI_yr_RR_type2_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_altcddETCCDI_yr_RR_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    </tbody>
		  </table>

		  <!--SPI3 & SPI6  -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>3-month Standardized Precipitation Index (SPI3)</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>6-month Standardized Precipitation Index (SPI6)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_spi3ETCCDI_mon_RR_type2_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_spi6ETCCDI_mon_RR_type2_197101-201812.nc">Monthly</a></td>
		    </tr>
		    </tbody>
		  </table>
		  </div>


		  <button class="accordion">Rain indices (type 2)</button>
		  <div class="panel">
		    
		    <!--rx1day & rx5day -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Highest 1-day precipitation amount (RX1day)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Highest 5-day precipitation amount (RX5day)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_rx1dayETCCDI_yr_RR_type2_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_rx5dayETCCDI_yr_RR_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_rx1dayETCCDI_hf_RR_type2_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_rx5dayETCCDI_hf_RR_type2_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_rx1dayETCCDI_mon_RR_type2_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_rx5dayETCCDI_mon_RR_type2_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_rx1dayETCCDI_seas_RR_type2_1971-2018.nc">Seasonal</a>   
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_rx5dayETCCDI_seas_RR_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>
      
		  <!--SDII & R1mm -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Simple Daily Intensity (SDII)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>No. of wet days (R1mm)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_sdiiETCCDI_yr_RR_type2_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r1mmETCCDI_yr_RR_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_sdiiETCCDI_hf_RR_type2_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r1mmETCCDI_hf_RR_type2_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_sdiiETCCDI_mon_RR_type2_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r1mmETCCDI_mon_RR_type2_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_sdiiETCCDI_seas_RR_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r1mmETCCDI_seas_RR_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>
       
		  <!--R10mm & R20mm -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Heavy precipitation days (R10mm)*</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Very heavy precipitation days (R20mm)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r10mmETCCDI_yr_RR_type2_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r20mmETCCDI_yr_RR_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r10mmETCCDI_hf_RR_type2_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r20mmETCCDI_hf_RR_type2_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r10mmETCCDI_mon_RR_type2_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r20mmETCCDI_mon_RR_type2_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r10mmETCCDI_seas_RR_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r20mmETCCDI_seas_RR_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--CWD  & altCWD-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Maximum no. of consecutive wet days (CWD)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Alternative Maximum no. of consecutive wet days (altCWD)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_cwdETCCDI_yr_RR_type2_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_altcwdETCCDI_yr_RR_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    </tbody>
		  </table>
		  

		  <!--R75pTOT & R75pFRAC  -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Precipitation due to moderate wet days (R75pTOT)</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Fraction of precipitation due to moderate wet days (R75pFRAC)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r75ptotETCCDI_yr_RR_type2_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r75pfracETCCDI_yr_RR_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r75ptotETCCDI_hf_RR_type2_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r75pfracETCCDI_hf_RR_type2_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r75ptotETCCDI_mon_RR_type2_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r75pfracETCCDI_mon_RR_type2_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r75ptotETCCDI_seas_RR_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r75pfracETCCDI_seas_RR_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--R95pTOT & R95pFRAC  -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Precipitation due to very wet days (R95pTOT)*</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Fraction of precipitation due to very wet days (R95pFRAC)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r95ptotETCCDI_yr_RR_type2_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r95pfracETCCDI_yr_RR_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r95ptotETCCDI_hf_RR_type2_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r95pfracETCCDI_hf_RR_type2_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r95ptotETCCDI_mon_RR_type2_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r95pfracETCCDI_mon_RR_type2_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r95ptotETCCDI_seas_RR_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r95pfracETCCDI_seas_RR_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--R99pTOT & R99pFRAC  -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Precipitation due to extremely wet days (R99pTOT)*</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Fraction of precipitation due to extremely wet days (R99pFRAC)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r99ptotETCCDI_yr_RR_type2_1971-2018.nc">Annual</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r99pfracETCCDI_yr_RR_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r99ptotETCCDI_hf_RR_type2_1971-2018.nc">Half-yearly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r99pfracETCCDI_hf_RR_type2_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r99ptotETCCDI_mon_RR_type2_197101-201812.nc">Monthly</a></td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r99pfracETCCDI_mon_RR_type2_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r99ptotETCCDI_seas_RR_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_r99pfracETCCDI_seas_RR_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!-- PRCPTOT  -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Precipitation due to wet days (PRCPTOT)*</strong></span></td>    
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_prcptotETCCDI_yr_RR_type2_1971-2018.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_prcptotETCCDI_hf_RR_type2_1971-2018.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_prcptotETCCDI_mon_RR_type2_197101-201812.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="http://thredds.met.no/thredds/fileServer/ngcd/latest/indices/RR_type2/NGCD_prcptotETCCDI_seas_RR_type2_1971-2018.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>
		  </div>
  		  
		</div>	  
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
      <script src="../include/collapsible_bottompage.js"></script>
  
  </body>
</html>
