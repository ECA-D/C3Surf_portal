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
    <title>Uncertainty on E-OBS indices</title>
    
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
                  <h1 id="page-title" class="title">Uncertainty on E-OBS indices</h1>
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
                <h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">&raquo;</span> <span class="inline even last"><a href="uncertainty_indices.php">Uncertainty on E-OBS indices</a></span></div>

                <!-- Main part -->
               <div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">

                  Click on an item to read that section.<br><br>

                 <button class="accordion">Introduction to uncertainty on E-OBS indices</button>
                  <div class="panel">
                    <p>
                      The best-estimate for the various climate impact
                      indices, like
                      the <a href="../dataaccess/access_eobs_indices.php">E-OBS-based
                      ETCCDI-defined indices</a>, is given as the
                      ensemble mean of the dataset which is
                      constructed by calculating the indices using
                      several or all of the ensemble members of the
                      E-OBS dataset. Where users require a single
                      measure of the E-OBS-based Indices, then this
                      'best-estimate' value should be
                      used. Nevertheless, the main recommendation
                      relating to uncertainty is that users ought to
                      consult the uncertainty information as this can
                      be considerable and will change in space and
                      time. The uncertainty is ultimately determined
                      by the station coverage which varies across the
                      domain and in time.  <br /><br />
                   
                      To address uncertainty in the indices, the first
                      20 of the E-OBS ensemble members are used to
                      calculate an ensemble of indices, propagating
                      the spread in the E-OBS ensemble to a spread in
                      the indices. The size of this spread is captured
                      in the value for the 2.5 and 97.5 percentiles of
                      the indices ensemble.  Although the full E-OBS
                      ensemble can be made available upon request, the
                      full ensemble of the indices is not made
                      available.
		      <br /><br /> 

                      The spatial maps of the 2.5 and 97.5 percentiles
                      of the indices ensemble and how these vary in
                      time for the available aggregation levels
                      (annual, half-yearly, seasonal, monthly) are
                      made available as two variables in a netcdf
                      file. The ensemble mean is mean available in a
                      separate file. All the files are available
                      through
                      the <a href="../dataaccess/access_eobs_indices.php">E-OBS
                      indices access page</a>.
                      <br /><br />

 		      An example of the use of these provided files is
		      given in Figure 1, where a map of the 100-member
		      ensemble-mean of the number of rainy days for
		      November 2011 is shown, with a large area in
		      Central Europe showing no rainy days at all, and
		      a time series of the number of rainy days,
		      averaged over the Danube catchment, for the
		      ensemble mean (in red) and the ensemble spread
		      quantified by the 2.5 and 97.5 percentile
		      files. This latter plot clearly shows the low
		      value for November 2011 - even when the spread
		      in the ensemble is taken into account - but it
		      also shows the considerable spread for more
		      mundane months or more wet months, like April
		      2010. Note that the mean (the red line in Figure
		      1) is expected to be nearer the 2.5 percentile
		      value as opposed to the 97.5 percentile
		      value. This happens more for precipitation-based
		      indices as the data are much more skewed than
		      for temperature.  <br />
		      <a href="../images/r1mm_nov2011_map.png" target="_blank"><img alt="" src="../images/r1mm_nov2011_map.png" style="width:50%;" /></a><a href="../images/r1mm_nov2011_danube_series.png" target="_blank"><img alt="" src="../images/r1mm_nov2011_danube_series.png" style="width:50%;" /></a><br />
		      <small>Figure 1: Map showing the ensemble mean
			of the R1mm index (number of rainy days) for
			November 2011 (left) and a plot of the number
			of rainy days averaged over the Danube basin
			(right).  The latter plot shows the ensemble
			mean value and the spread in the ensemble as
			quantified by the 2.5 th and 97.5 th
			percentile values as provided in the provided
			netcdf files.</small>
		      <br /><br />

		      The information and plots in this guidance page
		      are based on E-OBSv18.0e and the indices derived
		      using this version.
                   </p>
                  </div>

                  <button class="accordion">Why not use all E-OBS
                  ensemble members?</button>
                  <div class="panel">
                    <p> In order to assess how the spread in the E-OBS
                      ensemble propagates to a spread in derived data,
                      climate impact indicator data from 17 selected
                      grid boxes across Europe are selected. For
                      temperature, the six indices looked at are:
		      <ul>
                       <li>TNn (minimum value of the daily minimum
                       temperature)
		       </li>
                       <li>TXx (maximum value of the daily maximum temperature)
		       </li>
		       <li>TN10p (cold nights, days with daily minimum
		       temperature below the 10th percentile of daily
		       minimum temperatures)
		       </li>
                       <li>TX90p (warm day-times, days with daily
                       maximum temperature above the 90th percentile
                       of daily maximum temperatures)
		       </li>
		       <li>WSDI (warm spell duration index) 
		       </li>
		       <li>CSDI (cold spell duration index)
		       </li>
		      </ul>

                      For precipitation the three indices looked at
		      are:
		      <ul>
			<li>R95pTOT (precipitation fraction due to very
			  wet days (exceeding 95th percentile))
			</li>
			<li> RX5day (maximum 5-day accumulated
			  precipitation sum) 
			</li> 
			<li>CDD (Consecutive Dry Days)
			</li>
		      </ul>

		      The motivation to look into these indices is
		      that they are expected to show maximum spread
		      given a spread in the input temperature or
		      precipitation data because of their focus on the
		      extreme end of possible events.  

                  <button class="accordion">Spread in temperature
                  indices</button>
                  <div class="panel">

		      Figure 2 shows the
		      2.5th percentile and the 97.5th percentile of
		      the spread in TN10p for the grid box in the
		      E-OBS dataset nearest to Munich (Germany) and
		      Kiev (the Ukraine). This figure shows the rapid
		      saturation of the spread with ensemble size. The
		      spread in the ensemble members of TN10p,
		      visualised by the lower and upper range of the
		      spread, which captures 95% of the spread, is
		      about the same when the first set of 20 E-OBS
		      ensemble members is taken, or any other
		      subsequent sets of 20 ensemble members.  
		      
		      Figure 2 also shows that the spread in TN10p is
		      modest (as we will see later with examples
		      showing TX90p as well). The relatively narrow
		      spread is related to the use of 10% of the
		      values in the temperature distribution, which is
		      apparently not sufficiently extreme to maximize
		      the spread.
		      <br />
		      <a href="../images/tn10p_munich_perc.png" target="_blank"><img alt="" src="../images/tn10p_munich_perc.png" style="width:50%;" /></a><a href="../images/tn10p_kiev_perc.png" target="_blank"><img alt="" src="../images/tn10p_kiev_perc.png" style="width:50%;" /></a><br />
		      <small>Figure 2: Plots of the 2.5th (top) and
			97.5th percentile (bottom) of the spread in
			annual TN10p (percentage of cold nights) for
			the grid box in the E-OBS dataset nearest to
			Munich (Germany) (left) and Kiev (the Ukraine)
			(right). The colour coding relates to the use
			of five different subsets of 20 years from the
			100-member E-OBS ensemble.</small>
		      <br /><br />

		      The spread in the ensemble is larger using the
		      TNn index, showing the spread in estimates of
		      the coldest night in the year (Figure 3). Such a
		      relatively large spread in the ensemble is
		      observed for the TXx (warmest daily temperature
		      of the year) as well (Figure 4). There appears
		      slightly more diversity between the 20-member
		      sets than in the plots of Figure 2.  Figure 5
		      shows the 2.5 th (top) and 97.5 th percentile
		      (bottom) of the spread in TX90p (percentage of
		      warm day-times) for the grid box in the E-OBS
		      dataset nearest to Perugia (Italy) (left) and
		      Brno (Czech) (right).  Similar to the plots for
		      the coldest nights (Figure 2), the spread is
		      modest.  
		      <br /><br /> The Warm Spell Duration Index (and the
		      Cold Spell Duration Index - not shown)
		      as shown in Figure 6 have more spread. There
		      are, as is to be expected, quite a few years
		      having no spells.

		      <br />
		      <a href="../images/tnn_munich_perc.png" target="_blank"><img alt="" src="../images/tnn_munich_perc.png" style="width:50%;" /></a><a href="../images/tnn_kiev_perc.png" target="_blank"><img alt="" src="../images/tnn_kiev_perc.png" style="width:50%;" /></a><br>
		      <small>Figure 3: Plots of the 2.5th (top) and
			97.5th percentile (bottom) of the spread in
			annual TNn (minimum of the daily minimum
			temperature - coldest night) for the grid box
			in the E-OBS dataset nearest to Munich
			(Germany) (left) and Kiev (the Ukraine)
			(right). The colour coding relates to the use
			of five different subsets of 20 years from the
			100-member E-OBS ensemble.</small>
		      <br /> <br />

		      <a href="../images/txx_perugia_perc.png" target="_blank"><img alt="" src="../images/txx_perugia_perc.png" style="width:50%;" /></a><a href="../images/txx_brno_perc.png" target="_blank"><img alt="" src="../images/txx_brno_perc.png" style="width:50%;" /></a><br />
		      <small>Figure 4: Plots of the 2.5th (top) and
			97.5th percentile (bottom) of the spread in
			annual TXx (maximum of the daily maximum
			temperature - warmest day-time) for the grid box
			in the E-OBS dataset nearest to Perugia
			(Italy) (left) and Brno (Czech Republic)
			(right). The colour coding relates to the use
			of five different subsets of 20 years from the
			100-member E-OBS ensemble.</small>
		      <br /><br />

		      <a href="../images/tx90p_perugia_perc.png" target="_blank"><img alt="" src="../images/tx90p_perugia_perc.png" style="width:50%;" /></a><a href="../images/tx90p_brno_perc.png" target="_blank"><img alt="" src="../images/tx90p_brno_perc.png" style="width:50%;" /></a><br />
		      <small>Figure 5: Plots of the 2.5th (top) and
			97.5th percentile (bottom) of the spread in
			annual TX90p (percentage of warm day-times)
			for the grid box in the E-OBS dataset nearest
			to Perugia (Italy) (left) and Brno (Czech
			Republic) (right). The colour coding relates
			to the use of five different subsets of 20
			years from the 100-member E-OBS
			ensemble.</small>
		      <br /><br />

		      <a href="../images/wsdi_munich_perc.png" target="_blank"><img alt="" src="../images/wsdi_munich_perc.png" style="width:50%;" /></a><a href="../images/wsdi_brno_perc.png" target="_blank"><img alt="" src="../images/wsdi_brno_perc.png" style="width:50%;" /></a><br />
		      <small>Figure 6: Plots of the 2.5th (top) and
			97.5th percentile (bottom) of the spread in
			annual WSDI (Warm Spell Duration Index) for
			the grid box in the E-OBS dataset nearest to
			Munich (Germany) (left) and Brno (Czech
			Republic) (right). The colour coding relates
			to the use of five different subsets of 20
			years from the 100-member E-OBS
			ensemble.</small>
		  </div>


                  <button class="accordion">Spread in precipitation indices</button>
                  <div class="panel">
		      Figure 7 shows the 2.5th percentile and the
		      97.5th percentile of the spread in R95pTOT for
		      the grid boxes in the E-OBS dataset nearest to the
		      city centre of Link&ouml;ping (Sweden) and Porto
		      (Portugal). This figure shows that also for
		      precipitation as with the temperature dataset a
		      rapid saturation of the spread with ensemble
		      size is present. The spread in the ensemble
		      members of R95pTOT, visualised by the lower and
		      upper range of the spread which captures 95% of
		      the spread, is about the same when the first set
		      of 20 E-OBS ensemble members is taken, or any
		      other subsequent sets of 20 ensemble members.
		      <br />
		      <a href="../images/r95ptot_linkoeping_perc.png" target="_blank"><img alt="" src="../images/r95ptot_linkoeping_perc.png" style="width:50%;" /></a><a href="../images/r95ptot_porto_perc.png" target="_blank"><img alt="" src="../images/r95ptot_porto_perc.png" style="width:50%;" /></a><br>
		      <small>Figure 7: Plots of the 2.5th (top) and
			97.5th percentile (bottom) of the spread in
			annual R95pTOT (precipitation amount related
			to very heavy precipitation days) for the grid
			box in the E-OBS dataset nearest to
			Link&ouml;ping (Sweden) (left) and Porto
			(Portugal) (right). The colour coding relates
			to the use of five different subsets of 20
			years from the 100-member E-OBS
			ensemble.</small>
		      <br /><br />

		      Figure 8, which shows the RX5day (annual maximum
		      of the 5-day accumulated precipitation amount)
		      shows a similarly rapid saturation of the spread
		      with the increase of the number of ensemble
		      members. This figure, as well as Figure 7, shows
		      a strong correlation between the 2.5 and 97.5
		      'trends' for R95pTOT and RX5day.
		      <br />

		      <a href="../images/rx5day_linkoeping_perc.png" target="_blank"><img alt="" src="../images/rx5day_linkoeping_perc.png" style="width:50%;" /></a><a href="../images/rx5day_porto_perc.png" target="_blank"><img alt="" src="../images/rx5day_porto_perc.png" style="width:50%;" /></a><br>
		      <small>Figure 8: Plots of the 2.5th (top) and
			97.5th percentile (bottom) of the spread in
			annual RX5day (5-day precipitation amount) for
			the grid box in the E-OBS dataset nearest to
			Link&ouml;ping (Sweden) (left) and Porto
			(Portugal) (right). The colour coding relates
			to the use of five different subsets of 20
			years from the 100-member E-OBS
			ensemble.</small>  <br /><br />

		      Figure 9 shows the CDD (Consecutive Dry Days)
		      for the grid boxes close to Norwich (UK) and
		      Murcia (Spain). CDD has hardly any spread for
		      the 2.5 percentile but this is to be
		      expected. Assessments of the annual maximum
		      length of a dry spell will vary strongly when
		      for a day in this dry spell an ensemble member
		      indicates rainfall. This will make estimates of
		      the length of the longest dry spells vary more
		      wildly, whereas the estimates of the annual
		      maximum length at the low-end of the spectrum
		      will consist of those days for which all members
		      show an absence of rainfall.
		      <br />

		      <a href="../images/cdd_norwich_perc.png" target="_blank"><img alt="" src="../images/cdd_norwich_perc.png" style="width:50%;" /></a><a href="../images/cdd_murcia_perc.png" target="_blank"><img alt="" src="../images/cdd_murcia_perc.png" style="width:50%;" /></a><br />
		      <small>Figure 9: Plots of the 2.5th (top) and
			97.5th percentile (bottom) of the spread in
			annual CDD (consecutive dry days) for
			the grid box in the E-OBS dataset nearest to
			Norwich (United Kingdom) (left) and Murcia
			(Spain) (right). The colour coding relates
			to the use of five different subsets of 20
			years from the 100-member E-OBS
			ensemble.</small>  <br /><br />

		      In order to look a little deeper in the loss of
		      information when a 100-member is replaced by a
		      20-member ensemble set, Figure 10 shows for the
		      1990-2018 period the median values of the sets
		      of 20-member ensembles and (in grey) the median
		      value based on the full 100-member
		      ensemble. Clearly the correlation between the
		      medians is large but for a few years, variations
		      between the 20-member and the 100-member can be
		      substantial. The ration between the median of
		      the 20-member sets and the median of the full
		      100-member set is shown in Figure 3 as well,
		      showing that for some years a 20-member median
		      value may underestimate the 100-member median by
		      as much as 20%.  

		      For the spread in the ensemble, this observation
		      holds even stronger as the bottom row of Figure
		      10 demonstrates. In this figure, the ratio
		      between the 2.5th (97.5th) percentile based on
		      subsequent 20-member ensembles and the 2.5th
		      (97.5th) percentile based on the full 100-member
		      is plotted left (right). For the 2.5th
		      percentile, this ratio can be as large as
		      1.5. For the upper percentile, this ratio is
		      smaller, as can be expected.
		      <br />

		      <a href="../images/r95ptot_munich_50p0_100_vs_20mem.png" target="_blank"><img alt="" src="../images/r95ptot_munich_50p0_100_vs_20mem.png" style="width:50%;" /></a><a href="../images/r95ptot_munich_50p0_100_vs_20mem_ratio.png" target="_blank"><img alt="" src="../images/r95ptot_munich_50p0_100_vs_20mem_ratio.png" style="width:50%;" /></a><br />
		      <a href="../images/r95ptot_munich_2p5_100_vs_20mem_ratio.png" target="_blank"><img alt="" src="../images/r95ptot_munich_2p5_100_vs_20mem_ratio.png" style="width:50%;" /></a><a href="../images/r95ptot_munich_97p5_100_vs_20mem_ratio.png" target="_blank"><img alt="" src="../images/r95ptot_munich_97p5_100_vs_20mem_ratio.png" style="width:50%;" /></a><br />
		      <small>Figure 10 Plots of the R95pTOT medians of
			subsequent 20-member ensembles and the full
			100-member ensemble set (in grey) (top). The
			top left figure shows the medians for the
			1990-2018 period and the top right figure
			shows the ratio between a 20-member set and
			the full 100-member set. The bottom row shows
			similar ratios, but then for the 2.5th
			percentile (left) and the 97.5th percentile
			(right). Figures relate to a grid box close to
			Munich.</small>
		      </div>
</p>
                  </div>

                  <button class="accordion">Using indices for trend analyses</button>
                  <div class="panel">
                    <p>
                     The calculation of trends based on the provided
                      ensemble mean of the indices and the spread in
                      this ensemble as quantified by the 2.5 and 97.5
                      percentiles does not fully capture the
                      uncertainty of the E-OBS ensemble as it
                      propagates down to trends in the climate impact
                      indices. It is likely that the ensemble spread
                      based on the ensemble of climate impact indices
                      will be different than the trend in the ensemble
                      spread itself. This consideration may be an
                      argument to provide full ensembles of the
                      indices in the future. However, the practical
                      consequences of having to analyse an ensemble of
                      trends, each having its own uncertainty as well,
                      are large since these different type of
                      uncertainties need to be combined.  For these
                      type of issues, it is suggested that a Baysian
                      approach may be useful as the output of one
                      model is uncertain, which is then input to the
                      next model. Bayesian inference expresses
                      uncertainty with posterior distributions (not p
                      values). The many distributions from the
                      complete ensemble can be combined in to one. The
                      keyword is 'Bayesian predictive distribution',
                      sometimes simply 'predictive distribution', an
                      elegant concept to translate uncertainty from
                      one model into another (Hoff, 2009). The
                      challenge left is then to conduct trend analysis
                      Bayesian style. Hoff (Chapter 5, 2009) shows how
                      to do linear regression Bayesian style.
		    </p>
		  </div>

                  <button class="accordion">Discussion and conclusion</button>
                  <div class="panel">
                    <p> 

		      In this report, the first results of how the
		      ensemble-based uncertainty estimates of the
		      E-OBS dataset propagate into the climate impact
		      indices are shown. All of the extreme indices,
		      both for temperature and precipitation, show a
		      rapid saturation of the ensemble spread with
		      increasing ensemble size. This means that, for
		      these type of indices, using the full 100-member
		      ensemble of the E-OBS to assess uncertainty in
		      the indices is not required. A valid estimate of
		      the uncertainty can be obtained by reducing the
		      number of ensemble member to about 20. Note that
		      the smaller number of values used to calculate
		      the extremes (like TXx or RX1day, which show
		      values for one day only), the greater the
		      differences between ensemble members there
		      should be. Note also that for individual years
		      in the smaller ensembles, a substantial
		      difference with the full 100-member ensemble may
		      exist, both in the median but more so in the
		      estimates of the spread of the ensemble.
		      <br /><br />

		      Earlier work (Cornes et al. 2018) showed that
                      the uncertainty quantified by the ensemble
                      spread appears to be an underestimation of the
                      real uncertainty, especially in data sparse
                      regions, although the uncertainty in the current
                      E-OBS dataset is more closely related to station
                      density than uncertainty values in the original
                      data set (Haylock et al. 2008). The modest range
                      of values spanned by the ensemble and the
                      necessity to use the more extreme indices to
                      show a reasonable uncertainty relate to
                      this. Improvements may be made in this estimate
                      through the quantification of other sources of
                      uncertainty such as instrumentation error
                      (Cornes et al., 2018, Yang et al., 1999).
                      <br /><br />

		      The underestimation of uncertainty may be
		      related to the use of a single variogram across
		      the domain, as an assumption is made that the
		      correlation structure is only dependent on the
		      spatial lag, and not the location. This
		      assumption is often made in such applications
		      (e.g., Haylock et al., 2008; Newman et al.,
		      2015) but can be an oversimplification for
		      continental-scale data as the spectral
		      characteristics of the true fields can vary
		      considerably across the domain, particularly for
		      precipitation. This assumption of stationarity
		      may also be unrealistic in the present
		      application on account of the varying
		      characteristics of the spatial trend captured by
		      the Generalized Additive Model, which results
		      from the large variations in station coverage
		      across the domain. An approach to remedy this is
		      to use different variograms across the domain;
		      this, however, introduced artefacts in the
		      gridded data, and particularly in the ensemble
		      spread and this approach was no longer pursued
		      (Cornes et al. 2018).  A possible way forward is
		      to use approaches explored from non-stationary
		      co-variance modelling by Douglas Nychka
		      (e.g. Nychka et al., 2018).
		      <br /><br />
		      
		      Nevertheless, the main recommendation relating
		      to uncertainty is that users ought to use
		      results from all 20 members as the uncertainty
		      will vary in space and time, reflecting the
		      changing station density. Although the spread in
		      the uncertainty estimate of the E-OBS dataset is
		      probably too small, the results shown in this
		      report clearly indicate that (even for this
		      modest ensemble of twenty) the spread in the
		      climate indices can be considerable.
		    </p>
		  </div>

                  <button class="accordion">References</button>

                  <div class="panel">
                    <p> Cornes, R. C., van der Schrier, G., van den
		      Besselaar, E. J., & Jones, P. D. (2018). An
		      Ensemble Version of the E-OBS
		      Temperature and Precipitation Data Sets. Journal
		      of Geophysical Research: Atmospheres, 123(17),
		      9391-9409.<br /><br />

		      Haylock, M. R., Hofstra, N., Klein Tank,
		      A. M. G., Klok, E. J., Jones, P. D., & New,
		      M. (2008). A European daily high-resolution
		      gridded data set of surface temperature and
		      precipitation for 19502006. Journal of
		      Geophysical Research, 113, D20119.
		      https://doi.org/10.1029/2008JD010201<br /><br />
		      
                      Hoff, P. D. (2009) A First Course in Bayesian
		      Statistical Methods, Springer-Verlag, New York,
		      NY, https://doi.org/10.1007/978-0-387-92407-6<br /><br />

		      Newman, A. J., Clark, M. P., Craig, J., Nijssen,
		      B., Wood, A., Gutmann, E., et
		      al. (2015). Gridded ensemble precipitation and
		      temperature estimates for the contiguous United
		      States. Journal of Hydrometeorology, 16(6),
		      24812500. https://doi.org/10.1175/JHM-D-15-0026.1<br /><br />

		      Nychka, D., D. Hammerling, M. Krock, and
		      A. Wiens, 2018: Modeling and emulation of
		      nonstationary Gaussian fields. Spatial
		      Statistics, 28, 21-38,
		      doi:10.1016/j.spasta.2018.08.006.<br /><br />

		      Yang, D., Elomaa, E., Tuominen, A., Aaltonen,
		      A., Goodison, B., Gunther, T., et
		      al. (1999). Wind-induced precipitation
		      undercatch of the Hellmann gauges. Hydrology
		      Research, 30(1), 5780.<br /><br />
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
