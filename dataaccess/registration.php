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
    <title>E-OBS user registration</title>
    
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
		  <h1 id="page-title" class="title">E-OBS user registration</h1>
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
		  
		  <h3> Terms of use</h3>
		      
		      The <a href="https://www.ecad.eu/documents/ECAD_datapolicy.pdf">ECA&#38;D data policy</a> applies. These observational data are strictly for use in non-commercial research and non-commercial education projects only. Scientific results based on these data must be submitted for publication in the open literature without any delay linked to commercial objectives. If you are unsure about the terms "commercial", "research", and "education", please contact the ECA&amp;D staff at <a href="mailto:&#101;&#099;&#097;&#064;&#107;&#110;&#109;&#105;&#046;&#110;&#108;">&#101;&#099;&#097;&#064;&#107;&#110;&#109;&#105;&#046;&#110;&#108;</a> for clarification.
		      
		      <br><br>

		      <h3>Citation and acknowledgement</h3>
		      
		      Whenever you publish research or applications based on these gridded data products, you should include the following acknowledgement and citations.<br><br>
		      
		      Ensemble version:<br>
		      "We acknowledge the E-OBS dataset from the EU-FP6 project UERRA (https://www.uerra.eu) and the data providers in the ECA&amp;D project (https://www.ecad.eu)"<br>
		      "Cornes, R., G. van der Schrier, E.J.M. van den Besselaar, and P.D. Jones. 2018: An Ensemble Version of the E-OBS Temperature and Precipitation Datasets, J. Geophys. Res. Atmos., <b>123</b>. doi:10.1029/2017JD028200"<img src="../images/html.gif" width="15" height="15" alt="" border="0"><a href="https://doi.org/10.1029/2017JD028200" target="_blank">Website</a>"
		      
		      <h3>Register as a user</h3>
                      
		      In the next page, we will ask you to register yourself as a user of the E-OBS dataset. This will also add your email to a mailing list that will only be used to keep users updated of new versions in the future. You can remove yourself from this list at any time. After you have confirmed your registration, you will be send the link where you can find the dataset.<br><br>
		      
 	              <form method="post" action="https://www.ecad.eu/lists/?p=subscribe&id=1" name="subscribeform">
			<?php 
			  echo '<input type="submit" name="register" id="register" value="I accept and will register" >';
			  ?>
		      </form>
 		      
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
