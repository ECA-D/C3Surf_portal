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
    <title>Monthly updated E-OBS indices access</title>
    
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
		  <h1 id="page-title" class="title">Monthly updated E-OBS indices access</h1>
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
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">&raquo;</span> <span class="inline even last"><a href="access_eobs_indices_months.php">Monthly updated E-OBS indices access</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">


		  This is the download page for the monthly updated
		  climate indices derived from the monthly updated
		  E-OBS dataset. The datafiles below provide climate
		  indices derived using daily minimum temperature
		  (TN), daily maximum temperature (TX) and daily
		  precipitation sum (RR). The datafiles are in
		  compressed NetCDF-4 format. Note that the ETCCDI
		  indices are marked with *.<br><br>scPDSI has monthly values, 
                  while UTCI, PET-MK and PET-PM have daily values. scPDSI uses
                  PET-MK as one of the input elements.
  
		  <h3>Terms of use</h3>

		  The <a href="https://www.ecad.eu/documents/ECAD_datapolicy.pdf">ECA&amp;D data policy</a> applies. These observational data are strictly for use in non-commercial research and non-commercial education projects only. If you are unsure about the terms "commercial", "research", and "education", or you have any questions about the climate indices please contact the ECA&amp;D staff at <a href="mailto:&#101;&#099;&#097;&#064;&#107;&#110;&#109;&#105;&#046;&#110;&#108;">&#101;&#099;&#097;&#064;&#107;&#110;&#109;&#105;&#046;&#110;&#108;</a> for clarification.

		  <h3>Indices files</h3> Click on an item to view the
		  download links for those indices. More details can be found in the <a href="../userguidance/indicesdictionary.php">indices dictionary</a>.
		  
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
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/cold/fd_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/cold/fd_0.25deg_2022_month.nc">2022</a></td>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/cold/cfd_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/cold/cfd_0.25deg_2022_month.nc">2022</a></td>
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
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/cold/id_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/cold/id_0.25deg_2022_month.nc">2022</a></td>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/cold/hd17_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/cold/hd17_0.25deg_2022_month.nc">2022</a> </td>
		    </tr>
		    </tbody>
		  </table>

		  <!-- <\!--CSDI  & altCSDI-\-> -->
		  <!-- <table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%"> -->
		  <!--   <tbody> -->
		  <!--   <tr bgcolor="#941333" height="40px"> -->
		  <!--     <td><span style="color:#FFFFFF;"><strong>Cold Spell Duration Index (CSDI)*</strong></span></td>  -->
		  <!--     <td><span style="color:#FFFFFF;"><strong>Alternative Cold Spell Duration Index (altCSDI)</strong></span></td> -->
		  <!--   </tr> -->
		  <!--   <tr> -->
		  <!--     <td width="33%">Annual: <a href="../data/indices/eobs/cold/csdi_yr_0.1deg_reg_ens_median_E-OBSv23.1e.nc">median</a> | <a href="../data/indices/eobs/cold/csdi_yr_0.1deg_reg_ens_2p5_97p5_E-OBSv23.1e.nc">uncertainty</a></td> -->
		  <!--     <td width="33%">Annual:<a href="../data/indices/eobs/cold/altcsdi_yr_0.1deg_reg_ens_median_E-OBSv23.1e.nc">median</a> | <a href="../data/indices/eobs/cold/altcsdi_yr_0.1deg_reg_ens_2p5_97p5_E-OBSv23.1e.nc">uncertainty</a></td> -->
		  <!--   </tr> -->
		  <!--   </tbody> -->
		  <!-- </table> -->


		  <!--TN10p & TX10p-->
		  <table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>No. of cold nights (TN10p)*</strong></span></td> 
		      <td><span style="color:#FFFFFF;"><strong>No. of cold day-times (TX10p)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/cold/tn10p_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/cold/tn10p_0.25deg_2022_month.nc">2022</a></td>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/cold/tx10p_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/cold/tx10p_0.25deg_2022_month.nc">2022</a></td>
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
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/cold/tnn_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/cold/tnn_0.25deg_2022_month.nc">2022</a></td>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/cold/txn_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/cold/txn_0.25deg_2022_month.nc">2022</a></td>
		    </tr>
		    </tbody>
		  </table>
		  
  		  <!-- <\!--GSL & HI-\-> -->
		  <!-- <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%"> -->
		  <!--   <tbody> -->
		  <!--   <tr bgcolor="#941333" height="40px"> -->
		  <!--     <td><span style="color:#FFFFFF;"><strong>Growing season length (GSL)*</strong></span></td> -->
		  <!--   </tr> -->
		  <!--   <tr>        -->
		  <!--     <td width="33%">Annual: <a href="../data/indices/eobs/cold/gsl_yr_0.1deg_reg_ens_median_E-OBSv23.1e.nc">median</a> | <a href="../data/indices/eobs/cold/gsl_yr_0.1deg_reg_ens_2p5_97p5_E-OBSv23.1e.nc">uncertainty</a></td> -->
		  <!--   </tr> -->
		  <!--   </tbody> -->
		  <!-- </table> -->
    
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
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/heat/su_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/heat/su_0.25deg_2022_month.nc">2022</a></td>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/heat/tr_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/heat/tr_0.25deg_2022_month.nc">2022</a></td>
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
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/heat/txx_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/heat/txx_0.25deg_2022_month.nc">2022</a></td>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/heat/tnx_0.25deg_2022_month.nc">2021</a> | <a href="../data/indices/eobs/mon/heat/tnx_0.25deg_2022_month.nc">2022</a></td>
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
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/heat/tn90p_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/heat/tn90p_0.25deg_2022_month.nc">2022</a></td>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/heat/tx90p_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/heat/tx90p_0.25deg_2022_month.nc">2022</a></td>
		    </tr>
		    </tbody>
		  </table>
		  
		  <!-- <\!--WSDI  & altWSDI-\-> -->
		  <!-- <table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%"> -->
		  <!--   <tbody> -->
		  <!--   <tr bgcolor="#941333" height="40px"> -->
		  <!--     <td><span style="color:#FFFFFF;"><strong>Warm Spell Duration Index (WSDI)*</strong></span></td>  -->
		  <!--     <td><span style="color:#FFFFFF;"><strong>Alternative Warm Spell Duration Index (altWSDI)</strong></span></td> -->
		  <!--   </tr> -->
		  <!--   <tr> -->
		  <!--     <td width="33%">Annual: <a href="../data/indices/eobs/heat/wsdi_yr_0.1deg_reg_ens_median_E-OBSv23.1e.nc">median</a> | <a href="../data/indices/eobs/heat/wsdi_yr_0.1deg_reg_ens_2p5_97p5_E-OBSv23.1e.nc">uncertainty</a></td> -->
		  <!--     <td width="33%">Annual: <a href="../data/indices/eobs/heat/altwsdi_yr_0.1deg_reg_ens_median_E-OBSv23.1e.nc">median</a> | <a href="../data/indices/eobs/heat/altwsdi_yr_0.1deg_reg_ens_2p5_97p5_E-OBSv23.1e.nc">uncertainty</a></td> -->
		  <!--   </tr> -->
		  <!--   </tbody> -->
		  <!-- </table> -->
		  
		  <!-- CSU -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Consecutive summer days (CSU)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/heat/csu_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/heat/csu_0.25deg_2022_month.nc">2022</a></td>
		    </tr>
		  </table>
		  </div>


		  <button class="accordion">Multi-element indices</button>
		  <div class="panel">
		    <!--DTR & HI-->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Median of diurnal temperature range (DTR)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong></strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/multi/dtr_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/multi/dtr_0.25deg_2022_month.nc">2022</a></td>
		      <td width="33%"></td>
		    </tr>
		    </tbody>
		  </table>

		  <!--   <\!--PET-\-> -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Potential EvapoTranspiration (Makkink) (PET-MK)</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Potential EvapoTranspiration (Penman-Monteith) (PET-PM)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"> <a href="../data/indices/eobs/mon/multi/petmk_0.25deg_2021_daily.nc">2021</a> | <a href="../data/indices/eobs/mon/multi/petmk_0.25deg_2022_daily.nc">2022</a>  </td>
		      <td width="33%"> <a href="../data/indices/eobs/mon/multi/petpm_0.25deg_2021_daily.nc">2021</a> | <a href="../data/indices/eobs/mon/multi/petpm_0.25deg_2022_daily.nc">2022</a>  </td>
		    </tr>
		    </tbody>
		  </table>
		  <!--   <\!--UTCI scPDSI-\-> -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>self-calibrating Palmer Drought Severity Index (scPDSI)</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>Universal Thermal Climate Index (UTCI)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%"> <a href="../data/indices/eobs/mon/multi/scpdsi_0.25deg_2021_monthly.nc">2021</a> | <a href="../data/indices/eobs/mon/multi/scpdsi_0.25deg_2022_monthly.nc">2022</a>  </td>
		      <td width="33%"> <a href="../data/indices/eobs/mon/multi/utci_0.25deg_2021_daily.nc">2021</a> | <a href="../data/indices/eobs/mon/multi/utci_0.25deg_2022_daily.nc">2022</a>  </td>
		    </tr>
		    </tbody>
		  </table>
		  </div>


		  <button class="accordion">Drought indices</button>
		  <div class="panel">
		  <!-- <\!--CDD  & altCDD-\-> -->
		  <!-- <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%"> -->
		  <!--   <tbody> -->
		  <!--   <tr bgcolor="#941333" height="40px"> -->
		  <!--     <td><span style="color:#FFFFFF;"><strong>Maximum no. of consecutive dry days (CDD)*</strong></span></td> -->
		  <!--     <td><span style="color:#FFFFFF;"><strong>Alternative Maximum no. of consecutive dry days (altCDD)</strong></span></td> -->
		  <!--   </tr> -->
		  <!--   <tr> -->
		  <!--     <td width="33%">Annual: <a href="../data/indices/eobs/drought/cdd_yr_0.1deg_reg_ens_median_E-OBSv23.1e.nc">median</a> | <a href="../data/indices/eobs/drought/cdd_yr_0.1deg_reg_ens_2p5_97p5_E-OBSv23.1e.nc">uncertainty</a></td> -->
		  <!--     <td width="33%">Annual: <a href="../data/indices/eobs/drought/altcdd_yr_0.1deg_reg_ens_median_E-OBSv23.1e.nc">median</a> | <a href="../data/indices/eobs/drought/altcdd_yr_0.1deg_reg_ens_2p5_97p5_E-OBSv23.1e.nc">uncertainty</a></td> -->
		  <!--   </tr> -->
		  <!--   </tbody> -->
		  <!-- </table> -->

		  <!--SPI3 & SPI6  -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>3-month Standardized Precipitation Index (SPI3)</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>6-month Standardized Precipitation Index (SPI6)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/drought/spi3_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/drought/spi3_0.25deg_2022_month.nc">2022</a></td>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/drought/spi6_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/drought/spi6_0.25deg_2022_month.nc">2022</a></td>
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
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/rain/rx1day_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/rain/rx1day_0.25deg_2022_month.nc">2022</a></td>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/rain/rx5day_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/rain/rx5day_0.25deg_2022_month.nc">2022</a></td>
		    </tr>
		    </tbody>
		  </table>
      
		  <!--SDII & R1mm -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Simple Daily Intensity Index (SDII)*</strong></span></td>
		      <td><span style="color:#FFFFFF;"><strong>No. of wet days (R1mm)*</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/rain/sdii_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/rain/sdii_0.25deg_2022_month.nc">2022</a></td>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/rain/r1mm_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/rain/r1mm_0.25deg_2022_month.nc">2022</a></td>
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
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/rain/r10mm_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/rain/r10mm_0.25deg_2022_month.nc">2022</a></td>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/rain/r20mm_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/rain/r20mm_0.25deg_2022_month.nc">2022</a></td>
		    </tr>
		    </tbody>
		  </table>

		  <!-- <\!--CWD  & altCWD-\-> -->
		  <!-- <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%"> -->
		  <!--   <tbody> -->
		  <!--   <tr bgcolor="#941333" height="40px"> -->
		  <!--     <td><span style="color:#FFFFFF;"><strong>Maximum no. of consecutive wet days (CWD)*</strong></span></td> -->
		  <!--     <td><span style="color:#FFFFFF;"><strong>Alternative Maximum no. of consecutive wet days (altCWD)</strong></span></td> -->
		  <!--   </tr> -->
		  <!--   <tr> -->
		  <!--     <td width="33%">Annual: <a href="../data/indices/eobs/rain/cwd_yr_0.1deg_reg_ens_median_E-OBSv23.1e.nc">median</a> | <a href="../data/indices/eobs/rain/cwd_yr_0.1deg_reg_ens_2p5_97p5_E-OBSv23.1e.nc">uncertainty</a></td> -->
		  <!--     <td width="33%">Annual: <a href="../data/indices/eobs/rain/altcwd_yr_0.1deg_reg_ens_median_E-OBSv23.1e.nc">median</a> | <a href="../data/indices/eobs/rain/altcwd_yr_0.1deg_reg_ens_2p5_97p5_E-OBSv23.1e.nc">uncertainty</a></td> -->
		  <!--   </tr> -->
		  <!--   </tbody> -->
		  <!-- </table> -->
		  

		  <!--R75pTOT & R75pFRAC  -->
		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		    <tr bgcolor="#941333" height="40px">
		      <td><span style="color:#FFFFFF;"><strong>Precipitation due to moderate wet days (R75pTOT)</strong></span></td>    
		      <td><span style="color:#FFFFFF;"><strong>Fraction of precipitation due to moderate wet days (R75pFRAC)</strong></span></td>
		    </tr>
		    <tr>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/rain/r75ptot_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/rain/r75ptot_0.25deg_2022_month.nc">2022</a></td>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/rain/r75pfrac_0.25deg_2021_month.nc">2021</a>| <a href="../data/indices/eobs/mon/rain/r75pfrac_0.25deg_2022_month.nc">2022</a></td>
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
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/rain/r95ptot_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/rain/r95ptot_0.25deg_2022_month.nc">2022</a></td>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/rain/r95pfrac_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/rain/r95pfrac_0.25deg_2022_month.nc">2022</a></td>
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
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/rain/r99ptot_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/rain/r99ptot_0.25deg_2022_month.nc">2022</a></td>
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/rain/r99pfrac_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/rain/r99pfrac_0.25deg_2022_month.nc">2022</a></td>
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
		      <td width="33%">Monthly: <a href="../data/indices/eobs/mon/rain/prcptot_0.25deg_2021_month.nc">2021</a> | <a href="../data/indices/eobs/mon/rain/prcptot_0.25deg_2022_month.nc">2022</a></td>
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
