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
    <title>LAPrec data access</title>
    
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
		  <h1 id="page-title" class="title">LAPrec data access</h1>
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
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">&raquo;</span> <span class="inline even last"><a href="access_eobs.php">LAPrec data access</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">

		  
LAPrec, for long-term Alpine precipitation reconstruction, is a
gridded precipitation dataset that extends back till 1871 and was
specifically constructed to satisfy high standards in climate
consistency. The dataset has monthly resolution and covers the
mountain range of the European Alps with territory from eight
countries. The development is a collaboration between ZAMG
(Zentralanstalt f&#252;r Meteorologie und Geodynamik, Austria) and
MeteoSwiss (Federal Office of Meteorology and Climatology,
Switzerland).  LAPrec builds on a statistical reconstruction that
integrates information from two data sources:
<ul>
<li>a set of high-quality station series, taken from the HISTALP station data archive (e.g.Auer et al. 2007, see citation section). HISTALP is an initiative of the national weather services in the Alpine region, led by ZAMG, to assemble and analyze high-quality climate series in the European Alps and extends over the full period of interest, continuously without gaps. It informs about the temporal variation over the long term. 
</li>
<li>
a high-resolution spatial analysis, the <a href="access_apgd.php">Alpine Precipitation Grid Dataset APGD</a> (Isotta et al. 2014, see citation section) developed at MeteoSwiss. APGD covers a few recent decades only but builds on data from thousands of rain-gauges. This component enriches the final result with spatial detail that is not resolved by the long-term stations alone. 
</li>
</ul>

LAPrec is a cross-product that brings together the merits of the two
initiatives in terms of long-term extent / consistency (HISTALP) and
spatial resolution (APGD).
<br>
More information can be found in the user guide (see below).
	  
		  <h3>Actual version, user guide and update policy</h3> 
		
		  LAPrec is updated at least on a two-yearly basis.
Notice that the last six years of the dataset are provisional: Some
stations may not be available in this period and the gaps are
therefore filled.<br><br>
 

		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		      <tr bgcolor="#941333" height="40px">
			<td width="25%"><span style="color:#FFFFFF;"><strong>Version</strong></span></td>
			<td width="20%"><span style="color:#FFFFFF;"><strong>Release date</strong></span></td>
			<td width="30%"><span style="color:#FFFFFF;"><strong>Period covered</strong></span></td>
			<td width="25%"><span style="color:#FFFFFF;"><strong>Comments/modifications</strong></span></td>
		      </tr>
		      <tr>
			<td><a href="../data/laprec/LAPrec1871.v1.0.nc">LAPrec1871.v1.0</a></td>
			<td>29 May 2019</td>
			<td>1871-01-01 - 2017-12-31</td>
			<td>First release. Provisional period: 2012-2017</td>
		      </tr>
		      <tr bgcolor="#ffffff">
			<td><a href="../data/laprec/LAPrec1901.v1.0.nc">LAPrec1901.v1.0</a></td>
			<td>29 May 2019</td>
			<td>1901-01-01 - 2017-12-31</td>
			<td>First release. Provisional period: 2012-2017</td>
		      </tr>
		    </tbody>
		  </table>

The user guide of LAPrec is <a href="../documents/User_guide_LAPrec.pdf">here</a>.

		      
  	<h3>Citation</h3>
 
Whenever you publish research or applications based on these grid data products, you should include the following citations:<br><br>

<u>HISTALP station dataset</u><br><br>
Reference:<br><br>
Auer, Ingeborg; B&#246;hm, Reinhard; Jurkovic, Anita; Lipa, Wolfgang; Orlik, Alexander; Potzmann, Roland; ... Nieplova, Elena, 2007: HISTALP - historical instrumental climatological surface time series of the Greater Alpine Region. INTERNATIONAL JOURNAL OF CLIMATOLOGY, 27, 17-46, doi: 10.1002/joc.1377
<br><br>

<u>APGD grid dataset</u><br><br>
Dataset DOI:<br><br>
10.18751/Climate/Griddata/APGD/1.0
<br><br>
Reference:<br>
Isotta, Francesco A.; Frei, Christoph; Weilguni, Viktor; Tadic, Melita Percec; Lassegues, Pierre; Rudolf, Bruno; Pavan, Valentina; Cacciamani, Carlo; Antolini, Gabriele; Ratto, Sara M.; Munari, Michela; Micheletti, Stefano; Bonati, Veronica; Lussana, Cristian; Ronchi, Christian; Panettieri, Elvio; Marigo, Gianni and Vertacnik, Gregor, 2014: The climate of daily precipitation in the Alps: development and analysis of a high-resolution grid dataset from pan-Alpine rain-gauge data, INTERNATIONAL JOURNAL OF CLIMATOLOGY, 34, 1657-1675, doi: 10.1002/joc.3794.
<br><br>

<u>Reconstruction method</u> (similar reconstruction, for Switzerland)<br><br>
Reference:<br><br>
Isotta, Francesco A.; Begert, Michael; Frei, Christoph, 2019: Long-term consistent monthly temperature and precipitation grid data sets for Switzerland over the past 150 years. Journal of Geophysical Research: Atmospheres, 123. https://doi.org/10.1029/2018JD029910




<h3>Terms of use</h3>

LAPrec is freely available for non-commercial use.

<h3>Data providers</h3>

<a href="http://www.dwd.de" target="_blank">DWD</a><br>
<a href="http://www.omsz.hu" target="_blank">OMSZ</a><br>
<a href="http://www.shmu.sk" target="_blank">SHMU</a><br>
<a href="https://meteo.arso.gov.si" target="_blank">ARSO</a><br>
<a href="http://portal.chmi.cz/" target="_blank">CHMI</a><br>
<a href="http://www.meteofrance.fr" target="_blank">M&#233;t&#233;o-France</a><br>
<a href="https://meteo.hr/" target="_blank">DHZ</a><br>
<a href="http://www.hidmet.gov.rs/" target="_blank">HIDMET</a><br>
<a href="http://www.fhmzbih.gov.ba/latinica/index.php" target="_blank">FHMZ</a><br>
<a href="http://www.zamg.ac.at" target="_blank">ZAMG</a><br>
<a href="http://www.meteoswiss.admin.ch" target="_blank">MeteoSwiss</a></br>
<a href="http://www.isac.cnr.it" target="_blank">CNR-ISAC</a><br>
<a href="http://www.unimi.it/" target="_blank">Universit&#224; degli Studi di Milano</a><br>
<a href="https://www.arpae.it/" target="_blank">Arpae Emilia Romagna</a><br>
<a href="http://www.provincia.bz.it" target="_blank">Hydrographisches Amt der S&#252;dtiroler Landesverwaltung
<a href="http://www.sir.toscana.it" target="_blank">Settore Idrologico Regionale (S.I.R.) della regione Toscana </a><br>
<a href="https://www.arpal.gov.it/" target="_blank">ARPAL-Cfmi</a><br>
<a href="http://www.arpalombardia.it/meteo" target="_blank">ARPA Lombardia</a><br>
<a href="http://www.regione.marche.it/" target="_blank">Regione Marche</a><br>
<a href="http://www.osmer.fvg.it/home.php" target="_blank">ARPA FVG</a><br>
<a href="http://www.nimbus.it" target="_blank">NIMBUS</a><br>
<a href="http://www.unibo.it" target="_blank">Universit&#224; di Bologna, Dipartimento di Fisica e Astronomia, Archivio storico del Dipartimento di Astronomia, Serie Osservazioni meteorologiche</a><br>
<a href="http://www.arpa.veneto.it" target="_blank">ARPAV</a><br>
<a href="http://www.arpa.piemonte.it/" target="_blank">ARPA Piemonte</a><br>
<a href="http://www.arpat.toscana.it/" target="_blank">ARPAT</a><br>
<a href="https://www.meteotrentino.it/#!/home" target="_blank">ARPA Trentino</a><br>




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
