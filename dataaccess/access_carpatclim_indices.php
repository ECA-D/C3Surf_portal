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
    <title>CarpatClim indices access</title>
    
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
		  <h1 id="page-title" class="title">CarpatClim indices access</h1>
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
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">&raquo;</span> <span class="inline even last"><a href="access_eobs_indices.php">CarpatClim indices access</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">


		  <span style="color:#FF0000;"></span><br> This is the
		  download page for the indices derived from the
		  CarpatClim dataset.  The datafiles below provide
		  several climate indices (ETCCDI indices marked with
		  *) derived using daily minimum temperature (TN),
		  daily maximum temperature (TX) and daily
		  precipitation sum (RR). They cover the Carpathian
		  region with 0.1 deg regular grid and the period
		  1961-2010. The data files are in NetCDF format,
		  separated in four sets per index: annual,
		  half-yearly, monthly and seasonal. Seasonal indices
		  are calculated from the monthly indices, where for
		  December-January-February (DJF) the December of the
		  previous year is used:
		  Dec(1961)-Jan(1962)-Feb(1962).
		  <br><br> More details on the calculation of the
		  indices can be found <a href="../userguidance/indicesdictionary.php">here</a>.
		  
		  <h3>Terms of use</h3>

		  <b><font color="green">ADD DATA POLICY
		  DETAILS</font></b>The data is freely available for
		  download. Scientific results based on these data
		  must be submitted for publication in the open
		  literature without any delay linked to commercial
		  objectives.
		  <br><br>
		  
		  <h3>Temperature indices</h3>

		  <!--TN10p & TX10p-->
		  <table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>No. of cold nights (TN10p)*</strong></span></td> 
		      <td><span style="color:#FFFFFF;"><strong>No. of cold day-times (TX10p)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/tn10pETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/tx10pETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/tn10pETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/tx10pETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/tn10pETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/tx10pETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/tn10pETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/carpatclim/tx10pETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
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
		      <td width="33%"><a href="../data/indices/carpatclim/tn90pETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/tx90pETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/tn90pETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/tx90pETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/tn90pETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/tx90pETCCDI_mon_0.1deg_regular_196101-2010121.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/tn90pETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/carpatclim/tx90pETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>
		  

		  <!--WSDI  & altWSDI-->
		  <table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Warm Spell Duration Index (WSDI)*</strong></span></td> 
		      <td><span style="color:#FFFFFF;"><strong>Alternative Warm Spell Duration Index (altWSDI)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/wsdiETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/altwsdiETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    </tbody>
		  </table>
		  
		  <!--CSDI  & altCSDI-->
		  <table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Cold Spell Duration Index (WSDI)*</strong></span></td> 
		      <td><span style="color:#FFFFFF;"><strong>Alternative Cold Spell Duration Index (altCSDI)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/csdiETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/altcsdiETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    </tbody>
		  </table>

		  <!--TXx & TXn -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Maximum of daily maximum temperature (TXx)*</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Minimum of daily maximum temperature (TXn)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/txxETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/txnETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/txxETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/txnETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/txxETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/txnETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/txxETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/carpatclim/txnETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>
      
		  <!--TNx & TNn-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Maximum of daily minimum temperature (TNx)*</strong></span></td> 
		      <td><span style="color:#FFFFFF;"><strong>Minimum of daily minimum temperature (TNn)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/tnxETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/tnnETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/tnxETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/tnnETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/tnxETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/tnnETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/tnxETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/carpatclim/tnnETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>
		  
		  <!--FD & ID-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>No. of frost days (FD)*</strong></span></td>  
		      <td><span style="color:#FFFFFF;"><strong>No. of ice days (ID)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/fdETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/idETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/fdETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/idETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/fdETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/idETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/fdETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/carpatclim/idETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>
      
		  <!--SU & TR -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>No. of summer days (SU)*</strong></span></td>  
		      <td><span style="color:#FFFFFF;"><strong>No. of tropical nights (TR)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/suETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/trETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/suETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/trETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/suETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/trETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/suETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/carpatclim/trETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>
		  
		  <!--CFD & CSU -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Consecutive frost days (CFD)</strong></span></td>  
		      <td><span style="color:#FFFFFF;"><strong>Consecutive summer days (CSU)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/cfdETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/csuETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/cfdETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/csuETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/cfdETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/csuETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/cfdETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/carpatclim/trETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		    </tr>
		  </table>
		  
		  <!--DTR & HD17-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Mean of diurnal temperature range (DTR)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Heating degree days (HD17)</strong></span></td>
		    </tr>
		    <tr>       
		      <td width="33%"><a href="../data/indices/carpatclim/dtrETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/hd17ETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/dtrETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/hd17ETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/dtrETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/hd17ETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/dtrETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      <td width="33%"><a href="../data/indices/carpatclim/hd17ETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--GSL & HI-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Growing season length (GSL)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Huglin Index (HI)</strong></span></td>
		    </tr>
		    <tr>       
		      <td width="33%"><a href="../data/indices/carpatclim/gslETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/hiETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    </tbody>
		  </table>


		  <h3>Precipitation indices</h3>

		  <!--rx1day & rx5day -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Highest 1-day precipitation amount (RX1day)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Highest 5-day precipitation amount (RX5day)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/rx1dayETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/rx5dayETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/rx1dayETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/rx5dayETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/rx1dayETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/rx5dayETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/rx1dayETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>   
		      </td>
		      <td width="33%"><a href="../data/indices/carpatclim/rx5dayETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
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
		      <td width="33%"><a href="../data/indices/carpatclim/sdiiETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/r1mmETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/sdiiETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/r1mmETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/sdiiETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/r1mmETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/sdiiETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/carpatclim/r1mmETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
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
		      <td width="33%"><a href="../data/indices/carpatclim/r10mmETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/r20mmETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/r10mmETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/r20mmETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/r10mmETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/r20mmETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/r10mmETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/carpatclim/r20mmETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--CWD  & altCWD-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Maximum no. of consecutive wet days (CWD)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Alternative Maximum no. of consecutive wet days (altCWD)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/cwdETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/altcwdETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    </tbody>
		  </table>
		  
		  <!--CDD  & altCDD-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Maximum no. of consecutive dry days (CDD)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Alternative Maximum no. of consecutive dry days (altCDD)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/cddETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/altcddETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    </tbody>
		  </table>

		  <!--R75pTOT & R75pFRAC  -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Precipitation due to moderate wet days (R75pTOT)</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Fraction of precipitation due to moderate wet days (R75pFRAC)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/r75ptotETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/r75pfracETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/r75ptotETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/r75pfracETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/r75ptotETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/r75pfracETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/r75ptotETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/carpatclim/r75pfracETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--R95pTOT & R95pFRAC  -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Precipitation due to very wet days (R95pTOT)</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Fraction of precipitation due to very wet days (R95pFRAC)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/r95ptotETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/r95pfracETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/r95ptotETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/r95pfracETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/r95ptotETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/r95pfracETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/r95ptotETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/carpatclim/r95pfracETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		    </tr>
		    </tbody>
		  </table>

		  <!--R99pTOT & R99pFRAC  -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Precipitation due to extremely wet days (R99pTOT)</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Fraction of precipitation due to extremely wet days (R99pFRAC)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/r99ptotETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/r99pfracETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/r99ptotETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/r99pfracETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/r99ptotETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/r99pfracETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/r99ptotETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
		      <td width="33%"><a href="../data/indices/carpatclim/r99pfracETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
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
		      <td width="33%"><a href="../data/indices/carpatclim/prcptotETCCDI_yr_0.1deg_regular_1961-2010.nc">Annual</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/prcptotETCCDI_hf_0.1deg_regular_1961-2010.nc">Half-yearly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/prcptotETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		    </tr>
		    <tr>
		      <td width="33%"><a href="../data/indices/carpatclim/prcptotETCCDI_seas_0.1deg_regular_1961-2010.nc">Seasonal</a>  
		      </td>
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
		      <td width="33%"><a href="../data/indices/carpatclim/spi3ETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		      <td width="33%"><a href="../data/indices/carpatclim/spi6ETCCDI_mon_0.1deg_regular_196101-201012.nc">Monthly</a></td>
		    </tr>
		    </tbody>
		  </table>
      
        
		  <h3>Citation and acknowledgement</h3>

		  <b><font color="green">WHAT SHOULD WE PUT HERE?</font></b>
		  <br><br>
		  
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
    
  </body>
</html>
