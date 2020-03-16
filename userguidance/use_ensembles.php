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
    <title>Ensembles user guide</title>
    
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
		  <h1 id="page-title" class="title">Ensembles user guide</h1>
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
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">&raquo;</span> <span class="inline even last"><a href="use_ensembles.php">Ensembles user guide</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">

		  Click on an item to read that section.<br><br>


		  <button class="accordion">Guidance on the use of an ensemble dataset</button>
		  <div class="panel">
		    <p>
		      Ensemble datasets are climate datasets that
		      consist of a number of equally probable
		      realizations, and relate to data in gridded
		      format. The ensemble aims to give a measure of
		      uncertainty in the data field; such datasets are
		      widely used in a number of areas of climate
		      change science. The two most widely known
		      examples are:
		      <ul>
			<li>Perturbed physics simulations of climate
			models with different values of key parameters
			(e.g. climateprediction.net, but undertaken
			now by most modelling centres)
			</li>
			<li>Numerical weather predictions, where it is
			known as ensemble forecasting. This area is
			extending to seasonal-to-interannual
			predictions
			</li>
		      </ul>

		      Other examples exist in other fields. The idea
		      behind the above two examples is to consider the
		      effects of slight differences in boundary
		      conditions and/or in the values of key
		      parameters within the physics simulations.
		      
		      <h3>Observational Datasets</h3>

		      The term "ensemble" is also used when referring
		      to multiple realizations from gridded observed
		      datasets. Such datasets are formed from the
		      interpolation of station values. Although the
		      aim is the same as ensembles calculated for
		      model simulations - to quantify uncertainty in
		      the data - the generations and hence
		      interpretation of the realizations is quite
		      different. With gridded observational datasets,
		      decisions have to be made for a number of
		      features that affect the final gridded fieldof
		      the key parameters involved in the gridding
		      algorithm. These could include:
		      <ul>
			<li>Search radius for inclusion of stations
			influencing a grid box
			</li>
			<li>Estimates of the impacts of homogeneity
			issues on the quality of the input station
			data
			</li>
			<li>Impact of a number of possible co-variates
			used in the gridding (e.g. latitude,
			longitude, elevation and distance from coast
			or inland water body)
			</li>
			<li>Including station data where the base
			period (e.g. 1961-90 or 1981-2010) is less
			precisely known
			</li>
		      </ul>
		      
		      The usual approach in the production of a
		      gridded dataset is to determine the best or most
		      likely values for the key parameters to
		      interpolate station values to values on a
		      regular grid. With an ensemble version of the
		      dataset, a number of these key parameters can be
		      varied producing a range of possible gridded
		      datasets (referred to as the ensemble). An
		      example of this approach has been produced for
		      the gridded global temperature dataset
		      (HadCRUT4) by Morice et
		      al. (2012), where 100 ensemble members were
		      developed. The advantage of producing a dataset
		      this way is that with the ensemble it can be
		      easier to determine the errors of estimate of
		      grid-box, regional and hemispheric
		      averages. Using standard statistical approaches
		      this can be difficult as a number of the error
		      components have spatial and temporal structures
		      which are difficult to model.
		      <br><br>
		      Although all the examples given use the term
                      "ensemble dataset", the most analogous to what we
                      propose is HadCRUT4 but the way the key
                      parameters are varied is not the same.
		    </p>
		  </div>

		  <button class="accordion">Documentation of the ensemble E-OBS
		  dataset</button>
		  <div class="panel">
		    <p> The E-OBS dataset consists of daily
		    interpolations of temperature (maximum, mean and
		    minimum daily values), precipitation and Mean
		    Sea-level Pressure. 100 realizations of each daily
		    field are provided, along with the mean across the
		    ensemble and the standard error across the
		    realizations. The ensemble mean provides a "best
		    guess" value, and the standard error provides a
		    measure of uncertainty of the best-guess value.
		      <br><br>
		    Where users require a single measure of the
		    interpolated daily fields, then the "best
		    guess" values should be used. However, the
		    standard error should always be consulted as the
		    uncertainty of the gridded field varies across the
		    domain, and is ultimately determined by the
		    variations in station coverage.
		      <br><br> The individual ensemble members are
		    mainly intended for users who require the
		    uncertainty in the gridded fields to propagate
		    through to various other applications. For
		    example, in <a href="#fig1">Figure 1</a>. the
		    first four ensemble members of the E-OBS
		    precipitation dataset are displayed for the heavy
		    rainfall event of 1st June 2013 across central
		    Europe. If a user requires this rainfall data for
		    hydrological modelling then each of the ensemble
		    members could be fed into the hydrological
		    model. In this way the uncertainty in the rainfall
		    interpolation would propagate through to the
		      hydrological model output.<br>
		      <a target="fig1"><img alt="" src="../images/ens_members_2013.png" style="width:50%;" /></a><br>
		  <small>Figure 1: The first four ensemble members
		  from the E-OBS ensemble precipitation dataset
		  showing the heavy rainfall event on 1st June
		  2013.</small>
		      <br><br>
   	            The method used to generate the ensemble for E-OBS
		    is based on the work of Hutchinson & Gessler
		    (1994), and relates to the model uncertainty. It
		    is closely related to the residuals of the
		    statistical model used to construct the dataset,
		    i.e. larger model residuals relate to a larger
		    spread across the ensemble.  In the case of
		    precipitation the uncertainty scales with the
		    interpolated values, i.e. higher precipitation
		    values are associated with greater uncertainty,
		    and is also related to station density. With
		    temperature the uncertainty does not scale with
		    the magnitude of the interpolated values, but it
		    is ultimately determined by the density of
		    stations. The standard error calculated from
		    across the ensemble members is broadly consistent
		    with the standard error value calculated in the
		    original version of E-OBS. Hence the members
		    represent samples from within that standard error
		    range.
		      <br><br>
		    It should be noted that no homogeneity corrections
		    are applied to the station data used to construct
		    E-OBS. In addition, the number of stations varies
		    over time. As a result we advise against using the
		    dataset to examine trends. An homogenous version
		    of E-OBS is being tested which should address this
		    deficiency in E-OBS.
		    <br><br>
		    <h3>How do we calculate the "best guess"
		      grids?</h3>
		    With HadCRUT4, the ensemble average was calculated
		    as the simple average of the 100 ensemble members.
		    Using this average to then calculate regional and
		    hemispheric averages does not take full advantage
		    of the full dataset. Instead, HadCRUT4 calculates
		    regional and hemispheric averages for each
		    ensemble member, producing 100 estimates which are
		    then used to calculate various percentile
		    estimates (e.g. 2.5/97.5 or 5/95%) necessary when
		    looking at extremes. Taking this a stage further,
		    when trends over a period are calculated, all 100
		    are calculated enabling the average and an
		    appropriate uncertainty range to be estimated from
		    the spread. Users cannot produce exactly the same
		    averages and ranges from the best-guess grids, but
		    differences from using the full ensemble are very
		    small.
		    <br><br> 
                    The number of ensemble members has yet to
                    be determined, but initially it will follow the
                    same principles as HadCRUT4. Experimentation will
                    then determine whether calculating uncertainties
                    from the full ensemble is justified. HadCRUT4 only
                    addresses temperature. We will need to investigate
                    if this is justified for precipitation and the
                    additional variables which will be included in
                    later years.
		    <br><br>
		    The full documentation of the method used for the
		    E-OBS ensemble dataset will be submitted to a
		    scientific journal in the near future.
		    </p>
		  </div>

		  <button class="accordion">References</button>
		  <div class="panel">
		    <p>Hutchinson, M. F. and
		      Gessler, P. E., 1994: Splines - more than just a
		      smooth interpolator. Geoderma, 62(1-3),
		      45-67. <a href="https://doi.org/10.1016/0016-7061(94)90027-2"
		      target="_blank">doi:10.1016/0016-7061(94)90027-2</a>
		      <br><br>
		      Morice, C.P., Kennedy, J.J.,
		      Rayner, N.A. and Jones, P.D., 2012: Quantifying
		      uncertainties in global and regional temperature
		      change using an ensemble of observational
		      estimates: the HadCRUT4 dataset. Journal of
		      Geophysical Research, 117,
		      D08101,<a href="https://onlinelibrary.wiley.com/doi/10.1029/2011JD017187/abstract"
		      target="_blank">doi:10.1029/2011JD017187</a>
		      <!-- <br> -->
		      <!-- Zhang, X., Alexander, L., -->
		      <!-- Hegerl, G.C., Jones, P.D., Klein Tank, A., -->
		      <!-- Peterson, T.C., Trewin, B. and Zwiers, F.W., -->
		      <!-- 2011: Indices for monitoring changes in extremes -->
		      <!-- based on daily temperature and precipitation -->
		      <!-- data. WIREs Climate Change, 2, -->
		      <!-- 851-870, <a href="https://doi.org/10.1002/wcc.147" -->
		      <!-- target="_blank">doi:10.1002/wcc.147</a> -->
		    </p>
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
