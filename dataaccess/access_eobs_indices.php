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
    <title>E-OBS indices access</title>
    
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
		  <h1 id="page-title" class="title">E-OBS indices access</h1>
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
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">&raquo;</span> <span class="inline even last"><a href="access_eobs_indices.php">E-OBS indices access</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">


		  This is the download page for the indices derived
		  from the E-OBS dataset.  The datafiles below provide
		  30 climate indices (ETCCDI indices marked with *)
		  for <a href="access_eobs.php">E-OBS v18.0e</a>
		  derived using daily minimum temperature (TN), daily
		  maximum temperature (TX) and daily precipitation sum
		  (RR). They cover the period 1951-01-01 -
		  2018-06-30. The data files are in NetCDF-4 format,
		  separated in three sets per index: annual, monthly
		  and seasonal. Seasonal indices are calculated from
		  the monthly indices, where for
		  December-January-February (DJF) the December of the
		  previous year is used:
		  Dec(1951)-Jan(1952)-Feb(1952).
  
		  <h3>Terms of use</h3>

		  The <a href="http://www.ecad.eu/documents/ECAD_datapolicy.pdf">ECA&amp;D data policy</a> applies. These observational data are strictly for use in non-commercial research and non-commercial education projects only. Scientific results based on these data must be submitted for publication in the open literature without any delay linked to commercial objectives. If you are unsure about the terms "commercial", "research", and "education", or you have any questions about the climate indices please contact the ECA&amp;D staff at <a href="mailto:&#101;&#099;&#097;&#064;&#107;&#110;&#109;&#105;&#046;&#110;&#108;">&#101;&#099;&#097;&#064;&#107;&#110;&#109;&#105;&#046;&#110;&#108;</a> for clarification.

		  <h3>Indices files</h3>
		  Click on an item to view the download links for those indices.
		  <br><br>
		  
		  <button class="accordion">Cold indices</button>
		  <div class="panel">
		  <!--FD & ID-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>No. of frost days (FD)*</strong></span></td>  
		      <td colspan="2"><span style="color:#FFFFFF;"><strong>Maximum no of consecutive frost days (CFD)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%">Annual: <a href="../data/indices/eobs/cfdETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">mean</a> | <a href="../data/indices/eobs/cfdETCCDI_yr_0.1deg_regular_ens_spread_v18.0e.nc">spread</a>
		      </td>
		      <td width="33%">Annual: <a href="../data/indices/eobs/cfdETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">mean</a> | <a href="../data/indices/eobs/cfdETCCDI_yr_0.1deg_regular_ens_spread_v18.0e.nc">spread</a></td>
		    </tr>
		    <tr>
		      <td width="33%">Half-yearly: <a href="../data/indices/eobs/fdETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">mean</a> | <a href="../data/indices/eobs/fdETCCDI_hf_0.1deg_regular_ens_spread_v18.0e.nc">spread</a></td>
		      <td width="33%">Half-yearly: <a href="../data/indices/eobs/cfdETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">mean</a> | <a href="../data/indices/eobs/cfdETCCDI_hf_0.1deg_regular_ens_spread_v18.0e.nc">spread</a></td>
		    </tr>
		    <tr>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/fdETCCDI_mon_0.1deg_regular_ens_mean_v18.0e.nc">mean</a> | <a href="../data/indices/eobs/fdETCCDI_mon_0.1deg_regular_ens_spread_v18.0e.nc">spread</a></td>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/cfdETCCDI_mon_0.1deg_regular_ens_mean_v18.0e.nc">mean</a> | <a href="../data/indices/eobs/cfdETCCDI_mon_0.1deg_regular_ens_spread_v18.0e.nc">spread</a></td>
		    </tr>
		    <tr>
		      <td width="33%">Seasonal: <a href="../data/indices/eobs/fdETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">mean</a> | <a href="../data/indices/eobs/fdETCCDI_seas_0.1deg_regular_ens_spread_v18.0e.nc">spread</a> 
		      </td>
		      <td width="33%">Seasonal: <a href="../data/indices/eobs/cfdETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">mean</a> | <a href="../data/indices/eobs/cfdETCCDI_seas_0.1deg_regular_ens_spread_v18.0e.nc">spread</a>  
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
		      <td width="33%">Annual: <a href="../data/indices/eobs/idETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">2.5%</a> | <a href="../data/indices/eobs/idETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">50%</a> | <a href="../data/indices/eobs/idETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">97.5%</a></td>
		      <td width="33%">Annual: <a href="../data/indices/eobs/hd17ETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">2.5%</a> | <a href="../data/indices/eobs/hd17ETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">50%</a> | <a href="../data/indices/eobs/hd17ETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">97.5%</a></td>
		    </tr>
		    <tr>
		      <td width="33%">Half-yearly: <a href="../data/indices/eobs/idETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">2.5%</a> | <a href="../data/indices/eobs/idETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">50%</a> | <a href="../data/indices/eobs/idETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">97.5%</a></td>
		      <td width="33%">Half-yearly: <a href="../data/indices/eobs/hd17ETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">2.5%</a> | <a href="../data/indices/eobs/hd17ETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">50%</a> | <a href="../data/indices/eobs/hd17ETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">97.5%</a></td>
		    </tr>
		    <tr>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/idETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">2.5%</a> | <a href="../data/indices/eobs/idETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Median</a> | <a href="../data/indices/eobs/idETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">97.5%</a></td>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/hd17ETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">2.5%</a> | <a href="../data/indices/eobs/hd17ETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Median</a> | <a href="../data/indices/eobs/hd17ETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">97.5%</a></td>
		    </tr>
		    <tr>
		      <td width="33%">Seasonal: <a href="../data/indices/eobs/idETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">2.5%</a> | <a href="../data/indices/eobs/idETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Median</a> |<a href="../data/indices/eobs/idETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">97.5%</a> 
		      <td width="33%">Seasonal: <a href="../data/indices/eobs/hd17ETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">2.5%</a> | <a href="../data/indices/eobs/hd17ETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Median</a> | <a href="../data/indices/eobs/hd17ETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">97.5%</a>
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
		      <td width="33%"><a href="../data/indices/eobs/csdiETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/eobs/altcsdiETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
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
		      <td width="33%"><a href="../data/indices/eobs/tn10pETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/eobs/tx10pETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/tn10pETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/tx10pETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/tn10pETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/tx10pETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/tn10pETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/eobs/tx10pETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
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
		      <td width="33%"><a href="../data/indices/eobs/tnnETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/eobs/txnETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/tnnETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/txnETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/tnnETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/txnETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/tnnETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/eobs/txnETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
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
		      <td width="33%"><a href="../data/indices/eobs/gslETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		    </tr>
		    </tbody>
		  </table>
    
		  </div>

		  <button class="accordion">Heat indices</button>
		  <div class="panel">
		  <!--SU & TR -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>No. of summer days (SU)*</strong></span></td>  
		      <td><span style="color:#FFFFFF;"><strong>No. of tropical nights (TR)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/suETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/eobs/trETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/suETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/trETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/suETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/trETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/suETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/eobs/trETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
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
		      <td width="33%"><a href="../data/indices/eobs/txxETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/eobs/tnxETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/txxETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/tnxETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/txxETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/tnxETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/txxETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/eobs/tnxETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
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
		      <td width="33%"><a href="../data/indices/eobs/tn90pETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/eobs/tx90pETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/tn90pETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/tx90pETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/tn90pETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/tx90pETCCDI_mon_NGCD_LAEA1_197101-2010121_v18.0e.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/tn90pETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/eobs/tx90pETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
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
		      <td width="33%"><a href="../data/indices/eobs/wsdiETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/eobs/altwsdiETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
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
		      <td width="33%"><a href="../data/indices/eobs/csuETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/csuETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/csuETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/csuETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
		      </td>
		    </tr>
		  </table>
		  </div>


		  <button class="accordion">Multi-element indices</button>
		  <div class="panel">
		    <!--DTR & HI-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Mean of diurnal temperature range (DTR)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Huglin Index (HI)</strong></span></td>
		    </tr>
		    <tr>       
		      <td width="33%"><a href="../data/indices/eobs/dtrETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/eobs/hi17ETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/dtrETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		      <td width="33%"></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/dtrETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		      <td width="33%"></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/dtrETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
		      <td width="33%">  
		      </td>
		    </tr>
		    </tbody>
		  </table>
		  </div>


		  <button class="accordion">Drought indices</button>
		  <div class="panel">
		  <!--CDD  & altCDD-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Maximum no. of consecutive dry days (CDD)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Alternative Maximum no. of consecutive dry days (altCDD)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/cddETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/eobs/altcddETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
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
		      <td width="33%"><a href="../data/indices/eobs/spi3ETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/spi6ETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		    </tr>
		    </tbody>
		  </table>
		  </div>


		  <button class="accordion">Rain indices</button>
		  <div class="panel">
		    
		    <!--rx1day & rx5day -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Highest 1-day precipitation amount (RX1day)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Highest 5-day precipitation amount (RX5day)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/rx1dayETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/eobs/rx5dayETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/rx1dayETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/rx5dayETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/rx1dayETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/rx5dayETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/rx1dayETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>   
		      </td>
		      <td width="33%"><a href="../data/indices/eobs/rx5dayETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
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
		      <td width="33%"><a href="../data/indices/eobs/sdiiETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/eobs/r1mmETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/sdiiETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/r1mmETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/sdiiETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/r1mmETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/sdiiETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/eobs/r1mmETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
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
		      <td width="33%"><a href="../data/indices/eobs/r10mmETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/eobs/r20mmETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/r10mmETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/r20mmETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/r10mmETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/r20mmETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/r10mmETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/eobs/r20mmETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
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
		      <td width="33%"><a href="../data/indices/eobs/cwdETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/eobs/altcwdETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
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
		      <td width="33%"><a href="../data/indices/eobs/r75ptotETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/eobs/r75pfracETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/r75ptotETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/r75pfracETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/r75ptotETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/r75pfracETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/r75ptotETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/eobs/r75pfracETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
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
		      <td width="33%"><a href="../data/indices/eobs/r95ptotETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/eobs/r95pfracETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/r95ptotETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/r95pfracETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/r95ptotETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/r95pfracETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/r95ptotETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/eobs/r95pfracETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
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
		      <td width="33%"><a href="../data/indices/eobs/r99ptotETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/eobs/r99pfracETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/r99ptotETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/r99pfracETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/r99ptotETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/eobs/r99pfracETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/r99ptotETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/eobs/r99pfracETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
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
		      <td width="33%"><a href="../data/indices/eobs/prcptotETCCDI_yr_0.1deg_regular_ens_mean_v18.0e.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/prcptotETCCDI_hf_0.1deg_regular_ens_mean_v18.0e.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/prcptotETCCDI_mon_NGCD_LAEA1_197101-201012_v18.0e.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/eobs/prcptotETCCDI_seas_0.1deg_regular_ens_mean_v18.0e.nc">Seasonal</a>  
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
