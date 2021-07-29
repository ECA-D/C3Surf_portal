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
    <title>Known issues in E-OBS</title>

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
                  <h1 id="page-title" class="title">Known issues in E-OBS</h1>
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
                <h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">&raquo;</span> <span class="inline even last"><a href="known_issues_eobs.php">Known issues in E-OBS</a></span></div>

                 <!-- Main part -->
                <div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
                  The E-OBS observation dataset has a few issues which
		  users should be aware of. The issues are detailed
		  and illustrated below. Some of these issues relate
		  to problems with the underlying meteorological
		  station dataset. It might be that quality issues are
		  missed by the quality control procedure. A
                  <a href="mailto:&#101;&#099;&#097;&#064;&#107;&#110;&#109;&#105;&#046;&#110;&#108;?subject=Observed issue in E-OBS">message</a> 
                  from users informing us
                  about these possible issues would be appreciated so
                  we can improve the E-OBS dataset.<br><br>  Click on
                  a title below for more information about the
                  issues.<br><br>
 
      <!--        E-OBS is an observational dataset. This means that
                  it is derived from only station observations. If
                  something turns out to be wrong with the station
                  observations, e.g. a suspected value was not
                  indicated as such during the quality control
                  procedure, these values are still used in the
                  gridding of E-OBS. Due to shear size of the
                  ECA&amp;D and E-OBS datasets, we probably miss some
                  issues and would
                  appreciate <a href="mailto:&#101;&#099;&#097;&#064;&#107;&#110;&#109;&#105;&#046;&#110;&#108;?subject=Observed
                  issue in E-OBS">messages</a> from users about
                  possible issues so we can improve the E-OBS
                  dataset.<br><br>Below some specific issues that are
                  already known, and will be fixed as soon as
                  possible. Click on a title for more information
                  about the issues.<br><br>      -->

                  <button class="accordion">Data at edges of the domain</button>
                  <div class="panel">
                    <p>
                      The <strong>station density</strong> at the edges of the domain
                      is sparse. For example, regions in
                      South Eastern Europe (e.g. Turkey, Greece) and
                      Northern Africa the station density for all
                      elements is low which result in a lower quality
                      of the E-OBS dataset over those regions. The low station density in these areas is
                      also reflected in a higher uncertainty.
		      <br><br>
<a href="../images/knownissues/values_present_rr_example.png"><img alt="" src="../images/knownissues/values_present_rr_example.png" width="250px"></a>
<br><br>
<em>
Example showing the average fraction of days per year for which precipitation data is available. The area in grey has a data availability of 99&#037; or higher. Figure based on E-OBSv23.1e.
</em>


</p>
		  </div> 

		  <button class="accordion">Trend analyses</button>
		  <div class="panel">
		    <p>The underlying stations timeseries used as input
to the interpolation of E-OBS are usually not corrected for
inhomogeneities (except for E-OBSv19.0eHOM). Also, the station density
is not constant through time. <strong>Trend analyses</strong> should
therefore be treated with caution.
                     </p>
                  </div>

		  <button class="accordion">Temperature</button>
		  <div class="panel">
 		  <p>In a few areas and on a few days, it might be
		    possible that the <strong>maximum temperature is
		    lower than the minimum temperature</strong>. This
		    is especially the case in the early part of the
		    dataset. While the station data that are used to
		    construct the E-OBS dataset do not suffer from
		    this problem, the gridded dataset might have this
		    problem due to the combination of the
		    interpolation method and the sparse station
		    network (especially in earlier years). <br><br>

                    The interpolation is done by Generalized Additive
                    Models
                    (see <a href="https://agupubs.onlinelibrary.wiley.com/doi/full/10.1029/2017JD028200">Cornes
                    et al. 2018</a>) in combination with a monthly
                    background field. In areas with large distances
                    between stations, this might give interpolated
                    values between stations that violate the rule that
                    maximum temperature should be higher than minimum
                    temperature, since for the gridding of maximum
                    temperature no information on minimum temperature
                    is added to this algorithm (and vice-versa). In
                    data rich areas, the interpolation is constrained
                    enough by the station data not to let this happen.

 		<!--  <p>On a few days and areas, it might be possible
		    that the maximum temperature is lower than the
		    minimum temperature. These elements are
		    interpolated independently from each
		    other. Although the input station time series are
		    quality checked for this, the interpolation method
		    might result in having <strong>maximum temperature lower
		    than minimum temperature</strong> in very specific
		    cases. At the moment, no check is done when and
		    where this is the case.      -->
<br><br>
<a href="../images/knownissues/negativevalues_tx-tn_example.png"><img alt="" src="../images/knownissues/negativevalues_tx-tn_example.png" width="250px"></a>
<br><br>
<em>
Example showing the average number of days per year where the daily maximum temperature is lower than the daily minimum value. The grey areas report this issue less than 1&#037; of the time. Figure based on E-OBSv23.1e.
</em>
		    </p>
		  </div>

                  <button class="accordion">Sea level pressure</button>
                  <div class="panel">
                    <p>
                      Although much effort is made to provide only
		      sea level pressure series in the underlying
		      station dataset, it is possible that
		      station level pressure measurements still exist
		      in the database. If the elevation of the station
		      is not that high, this will not be picked up by
		      the existing quality control procedures and
		      continues into the gridding procedures. In the
		      final fields, this may result in a kind of
		      "bull's-eye" in the vicinity of the station with
		      station level pressure. When such "bull's-eyes"
		      are observed, the data provider should normally
		      be contacted to determine what the source of the
		      problem is and if the time series is indeed
		      provided as station level pressure instead of
		      sea level pressure. Only in very obvious cases,
		      ECA&amp;D staff can correct this without
		      contacting the original data provider. <br><br>
                      <strong>Status May 2021</strong>: A "bull's-eye" is known in the
                      monthly update files and E-OBSv23.1e in the
                      region of Northeastern France.
                     </p>
                  </div>

		  <button class="accordion">Global radiation</button>
		  <div class="panel">
		    <p><strong>Status May 2021</strong>: It has been
		    observed that often the global radiation fields
		    have very low values in Southeastern France and
		    sometimes in other areas like the Balkan
		    area. This is known for the monthly update files
		    and E-OBSv23.1e.</p>
		  </div>

		  <button class="accordion">Relative humidity</button>
		  <div class="panel">
		    <p><strong>Status May 2021</strong>: After 2009,
		    areas with a sudden increase in variability and
		    sometimes even negative values for relative
		    humidity are observed. This might be related to
		    the use of the GTS data in later years, but this
		    needs to be investigated further.
<br><br>
<a href="../images/knownissues/negativevalues_hu_example.png"><img alt="" src="../images/knownissues/negativevalues_hu_example.png" width="250px"></a>
<br><br>
<em>
Example showing the average number of days per year where the daily mean relative humidity value is negative. Figure based on E-OBSv23.1e.
</em>

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
