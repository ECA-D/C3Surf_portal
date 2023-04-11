
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
    <title>Daily vs Full E-OBS updates</title>
    
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
		  <h1 id="page-title" class="title">Daily vs Full E-OBS updates</h1>
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
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">&raquo;</span> <span class="inline even last"><a href="daily_vs_full_eobs.php">Daily vs Full E-OBS updates</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
Daily updates (with one day delay) are provided for the widely used
European gridded daily dataset E-OBS. Full versions of E-OBS are
released twice a year and provisional monthly updates are provided as
well through the Copernicus Climate Change Service. The purpose of
these daily updates is to provide a basis for monitoring unfolding
extreme events that cover a region that is larger than what will be
handled by a National Meteorological Service (NMS), and the
quantification of the event needs to be done timely (i.e. cannot wait
for the release of the monthly updates).
<br> 
<br>
Similarly, monthly updates of E-OBS are produced to provide the means
to monitor the European climate. The difference with the daily updates
is that in the gridding algorithm an additional monthly background
field is used and the basis for the gridded dataset is a larger
station dataset that does not completely overlap with the network used
for the daily updates.
<br><br>

The available elements for the daily updates are minimum, mean and
maximum temperature and precipitation amount and the comparison will
be limited to these elements. The area for all updates covers Europe
(land-only) and the datasets are released on a regular
latitude/longitude grid with 0.1&#0176; and 0.25&#176; resolution.
<br><br>

The daily and monthly updates are provisional updates. Daily updates
are overwritten when a new monthly update is available, and monthly
updates are overwritten when a new release of the full E-OBS update is
available.
<br><br>

The only difference between the monthly E-OBS updates and full E-OBS
updates are the timing in which the datasets are released. If there
are no changes in the ECA&D station time series between subsequent
full E-OBS updates, the monthly E-OBS updates over these 6 months are
the same as those months in the full E-OBS update.
<br><br>

In practice, several data providers are updating their station time
series with a one month delay. This means that the data for
e.g. January 2023 released with the monthly updates in February 2023
might be slightly different from the January 2023 released with the
monthly update in March 2023. But when no additional station updates
are included afterwards, the January 2023 data released in March 2023,
will be the same as the January 2023 data in E-OBSv28.0e, expected to
be released in September/October 2023.
<br><br>		  

                  <button class="accordion">Background</button>
                  <div class="panel">
                    <p>
The E-OBS dataset is a European, land-only, high-resolution gridded
dataset at a daily temporal resolution, based on in-situ data and
which currently contains various elements (Table 1) (Haylock et
al. 2008; Cornes et al. 2018, van den Besselaar et al. 2011). The
underlying daily station time series come from the European Climate
Assessment & Dataset (<a href="https://www.ecad.eu"
target="_blank">ECA&D</a>, Klein Tank et al. 2002) which are sourced
from the European National Meteorological and Hydrological Services
(NMHSs) and other data providers. The E-OBS dataset has three
different update frequencies.
<br><br>
The 'full' E-OBS versions are released using a version numbering
system, start from 1950 onwards and are currently created twice a
year, with the most recent data in these updates running to the end of
December or the end of June, depending on the release date. Note that
for the daily mean wind speed the full versions start on 1 January
1980. In order to provide means to monitor the European climate,
provisional monthly E-OBS updates are created (although the dataset is
still at a daily resolution). These updates use the full set of
meteorological and climatological stations available in ECA&D (which
are updated with a monthly frequency as well). Where a data update
from the data provider is lacking, synoptic data from the
WMO's Global Telecommunication System is used (WMO, 2007). The
monthly updates are done for the complete running year, thereby
overwriting the data from the previous monthly updates, hence: they
are only provisional/preliminary data.
<br><br>
For the assessments of emerging extreme events such as heat waves,
droughts or extreme precipitation potentially leading to large-scale
flooding, the monthly E-OBS updates are usually not available during
the unfolding of these events. This would require a more rapid update
of the gridded dataset. To address this need, a daily update of the
E-OBS dataset is developed. The requirement to have these gridded maps
available with a delay of 1 day, an in situ data source needs to be
used which matches this urgency. The synoptic data stream from the
WMO's Global Telecommunication System is used for this purpose. Daily
mean temperature is derived as the mean of the minimum and maximum
temperatures in the synoptic data stream.
<br><br>
As a more abundant set of validated station data is available for the
monthly and full updates of E-OBS, these daily updates are only
available until the monthly E-OBS updates are released. These monthly
updates are subsequently superseded by full E-OBS versions.
<br><br>
Here we provide an assessment of the quality of the daily and monthly
updates of E-OBS in relation to the full E-OBS updates. This
complements an earlier analysis of the effects of merging validated
data with synoptic data on climate indices, like those used to monitor
changes in climatic extremes (van den Besselaar et al. 2012). In order
to make a comparison between the datasets, the daily updates are
compared against full E-OBSv25.0e data, at the 0.25&#176; resolution,
for temperature and precipitation.
<br><br> 
The differences are considered for the period 1 March 2019 to 31
December 2021. This period overlaps with the period covered by
E-OBSv25.0e and the date when the quality control procedure for the
daily updates was put in place.


<table  border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="70%">
  <tbody>
    <tr bgcolor="#941333" height="40px">
      <td width="25%" style="color:#FFFFFF;"><b>Element</b></td>
      <td width="25%" style="color:#FFFFFF;"><b>Full E-OBS</b></td>
      <td width="25%" style="color:#FFFFFF;"><b>Monthly updates</b></td>
      <td width="25%" style="color:#FFFFFF;"><b>Daily updates</b></td>
    </tr>
    <tr>
      <td>Temperature</td>
      <td style="text-align:center">x</td>
      <td style="text-align:center">x</td>
      <td style="text-align:center">x</td>
    </tr>
    <tr>
      <td>Precipitation</td>
      <td style="text-align:center">x</td>
      <td style="text-align:center">x</td>
      <td style="text-align:center">x</td>
    </tr>
    <tr>
      <td>Sea-level pressure</td>
      <td style="text-align:center">x</td>
      <td style="text-align:center">x</td>
      <td style="text-align:center"></td>
    </tr>
    <tr>
      <td>Relative humidity</td>
      <td style="text-align:center">x</td>
      <td style="text-align:center">x</td>
      <td style="text-align:center"></td>
    </tr>
    <tr>
      <td>Global radiation</td>
      <td style="text-align:center">x</td>
      <td style="text-align:center">x</td>
      <td style="text-align:center"></td>
    </tr>
    <tr>
      <td>Wind speed</td>
      <td style="text-align:center">x</td>
      <td style="text-align:center">x</td>
      <td style="text-align:center"></td>
    </tr>

  </tbody>
</table>    
<em>Table 1: Elements provided by the E-OBS datasets, stratified following the update frequency.</em>
</p>

                 </div>

                  <button class="accordion">Gridding algorithm</button>
                  <div class="panel">
                    <p>Since the release of E-OBS v18.0e, the E-OBS
dataset is provided as an ensemble of reconstructions, where the
ensemble mean is put forward as the best estimate and the ensemble
spread reflects the uncertainty in the reconstruction. The algorithm
that produces the ensemble is documented in detail by Cornes et
al. (2018). A brief outline is given here in order to make the
differences between the approaches for the monthly/full updates and
the daily updates more clear. 
<br><br>
 <h3>Overview</h3>

The algorithm which constructs the E-OBS updates is a two-stage
process to produce the daily fields: (1) the monthly values are
initially fitted with a deterministic model, to capture the long-range
spatial trend in the data to get the monthly background field, and (2)
the daily residuals from this background field are then interpolated
using a stochastic technique (Gaussian Random Field, GRF, simulation)
to produce the daily ensemble.
<br><br> 

The spatial trend in the daily temperature variables is
captured by fitting a Generalized Additive Model (GAM) to the daily
station values, where the daily temperature data are modeled as a
smoothed function of longitude, latitude, and altitude using a
reduced-rank thin-plate spline, plus a smoothed function of the
monthly mean, background field values of temperature using a cubic
spline (Wood, 2003, 2006).
<br><br>

In contrast to the spatial trend model for the temperature grids,
altitude was not directly incorporated into the daily precipitation
grids, as this did not significantly improve the fitting of the
model. To remove some of the skewness in the data, the precipitation
totals were square root transformed prior to fitting (Hutchinson et
al., 2009). This also ensures that all interpolated values, when
converted back to the unit of millimeters, are nonnegative.
<br><br>

The occurrence of precipitation (as a binary field with grid points
having daily precipitation amount > 0.5 mm set to 1) was gridded
separately from accumulations using a full thin-plate spline. This was
then used to mask the daily fields. Precipitation was deemed to have
occurred at a given grid box where the gridded occurrence exceeded
0.5, after Hutchinson et al. (2009). The gridding of precipitation
accumulation and occurrence separately reduces the inflation of the
numbers of wet days. This inflation is a common problem in
interpolating daily precipitation and occurs as a result of the
different spatial scales of precipitation accumulations and
precipitation occurrence (Hutchinson et al., 2009)
<br><br>

<h3>Gridding of daily E-OBS updates</h3>

The only difference in the above mentioned gridding algorithm to
produce the daily updates is in the first stage. As these updates are
done daily, the month has usually not yet ended and no monthly
background field can be derived. Therefore only a topography file,
which provides the altitude, is used in the first stage instead of the
monthly background field.
<br><br>

The lack of a monthly background field in the gridding of daily fields
is likely to result in an underestimation of the variance of the
dataset. The separate gridding of a background field and anomalies
from this field is a common approach to avoid damping on variance (New
et al. 1999).
</p>
</div>

                  <button class="accordion">Differences in input data</button>
                  <div class="panel">
                    <p>
The requirement of having a rapid update of Europe's climatic
situation motivated us to move towards a difference in quality control
of the input series between the daily and full E-OBS updates (the
quality control for the monthly updates are the same as for the full
updates). For ECA&D timeseries, which are the source for the full and
monthly E-OBS updates, more elaborate quality control checks are
performed, but these take too much time to run to be able to include
these in the daily updates. Therefore the synoptic series used for the
daily updates undergo a very basic quality control, thereby only
checking if the temperature values are below 60 &#176;C, if the
minimum temperature is lower than maximum temperature and that the
daily precipitation amount is between 0 and 150 mm. 
<br><br>

The minimum and maximum temperatures in the synoptic data as used for
the daily updates are the minima and maxima over the 12-hour periods
from 18 6 UTC and 6 18 UTC, respectively, while for the full and
monthly E-OBS updates 24-hour minima and maxima are used (except for
smaller areas where the ECA&D data providers have not yet provided
updates and the synoptic date is temporarily used instead (ATBD, ECA&D
Project Team)). This can result in the 'true' minimum (maximum)
temperature not being captured in the daily updates, giving a warm
(cold) bias. An example of this for minimum temperature is seen below
for 22 February 2020 in Results: Reproducing patterns.
<br><br>

The station density is very variable over the domain with differences
between the stations used for the daily E-OBS and those for the full
and monthly E-OBS updates. As illustration, the station density for 22
February 2020 for maximum temperature and precipitation amount is
shown in Fig. 1 with the stations used for the daily updates and for
the full E-OBS update.
<br><br>
<table>
  <tr>
<td><a href="../images/daily_vs_full/stations_tx_20200222_daily.png"><img alt="" src="../images/daily_vs_full/stations_tx_20200222_daily.png" width="250px"></a></td>
<td><a href="../images/daily_vs_full/stations_tx_20200222_v25.0e.png"><img alt="" src="../images/daily_vs_full/stations_tx_20200222_v25.0e.png" width="250px"></a></td>
</tr>
  <tr>
<td><a href="../images/daily_vs_full/stations_rr_20200222_daily.png"><img alt="" src="../images/daily_vs_full/stations_rr_20200222_daily.png" width="250px"></a></td>
<td><a href="../images/daily_vs_full/stations_rr_20200222_v25.0e.png"><img alt="" src="../images/daily_vs_full/stations_rr_20200222_v25.0e.png" width="250px"></a></td>
</tr>
</table>
<em>Figure 1: Station density for a particular day as used for maximum temperature (top row) and precipitation (bottom row) for the daily E-OBS updates (left) and v25.0e (right).
</em>

Figure 1 shows that data from the synoptic network are for some
countries more abundantly available than for the full E-OBS
update. Conversely, data from France, Finland and the Ukraine are
missing in the synoptic dataset of Fig 1. The reason for the missing
observations probably relates to a metadata issue. In the synoptic
data stream, messages are selected based on the name of the variable
and these three countries most likely use another name for the
variable than the majority of European countries.

The observation that the ECA&D data holdings miss data over
e.g. Belgium and Italy relates to the selection of the day: data from
these countries is updated not too frequently and are still missing
for the selected day.


		    </p>
		  </div>
		  

                  <button class="accordion">Results: Average in daily differences</button>
                  <div class="panel">
                    <p>
The starting point for the comparison of the daily updates and the
full E-OBS update is an assessment of the simple time mean of the
difference field (daily updates minus full update) and the standard
deviation of this difference. Figures 2, 3, and 4 show these maps for
daily precipitation, daily minimum temperature and daily maximum
temperature, respectively, using the period 1 March 2019 and 31
December 2021 which is the overlapping period between the start of the
daily updates and the end of E-OBSv25.0e.
<br><br> 

For precipitation (Fig. 2), the mean difference is around zero for
most of Europe, except at the eastern boundary of the domain and the
most extreme northeastern part of the domain where the daily update
has a wet bias in comparison with E-OBSv25.0e. This also holds for
Italy, with the largest biases in the south of Italy, and in the
Austrian Alps. The standard deviation of the difference in the daily
precipitation fields reflects the station availability, with the
lowest values in the data rich areas. The wettest parts of Europe,
west Ireland and west Norway, show higher values of the standard
deviation of more than 5 mm/day.
<br><br> 

The bias in the daily minimum temperature (Fig. 3) is generally below
1&#176;C, with most of Europe having a warm bias. A cold bias in the
daily updates is found along the Norwegian Atlantic coast and in Italy
and Greece. Around the Alpine area, a complex situation is observed
with large biases for small regions. The standard deviation for this
field has somewhat of a north-south gradient, with the largest
standard deviation in northern Scandinavia: generally the coldest
parts in Europe. The high values of the standard deviation in east
T&#252;rkiye is likely to relate to the poor data situation in that
area. The lowest standard deviation is found in Spain, parts of
central Europe and Bulgaria. The data availability in Germany, Austria
and the Czech Republic is particularly good, which will contribute to
the high skill of the daily updates. However, this cannot be said for
Spain and Bulgaria. The hypothesis why the daily updates are similar
to E-OBSv25.0e is that both datasets use the same synoptic data for
those areas.
<br><br>

The daily updates for daily maximum temperature (Fig. 4) are closest
to the full E-OBS, with generally a bias of less than 0.5&#176;C in
Europe. Warm biases are found in Northern Africa, in Italy, the
southern Balkan peninsula and Along the Adriatic coast. Also the
Alpine area has a region with a strong warm bias. Cold biases are
found in Scandinavia and the Baltic states, with the largest bias in
northern Norway. The standard deviation is fairly uniform over Europe
at around 0.5&#176;C, with the lowest values in Germany and the
Netherlands and the highest values in the southern Balkan peninsula,
the Alps and Iceland.

<table>
  <tr>
<td><a href="../images/daily_vs_full/rr_0.25deg_mar2019-dec2021_daily-v25.0e_timavg.png"><img alt="" src="../images/daily_vs_full/rr_0.25deg_mar2019-dec2021_daily-v25.0e_timavg.png" width="250px"></a></td>
<td><a href="../images/daily_vs_full/rr_0.25deg_mar2019-dec2021_daily-v25.0e_timstd.png"><img alt="" src="../images/daily_vs_full/rr_0.25deg_mar2019-dec2021_daily-v25.0e_timstd.png" width="250px"></a></td>
</tr>
</table>
<em>Figure 2: Time mean difference for daily precipitation between E-OBSv25.0e and the daily updates for the period 1 March 2019  31 December 2021 (left) and the standard deviation of this difference field (right).
</em>
<table>
  <tr>
<td><a href="../images/daily_vs_full/tn_0.25deg_mar2019-dec2021_daily-v25.0e_timavg.png"><img alt="" src="../images/daily_vs_full/tn_0.25deg_mar2019-dec2021_daily-v25.0e_timavg.png" width="250px"></a></td>
<td><a href="../images/daily_vs_full/tn_0.25deg_mar2019-dec2021_daily-v25.0e_timstd.png"><img alt="" src="../images/daily_vs_full/tn_0.25deg_mar2019-dec2021_daily-v25.0e_timstd.png" width="250px"></a></td>
</tr>
</table>
<em>Figure 3: Time mean difference for daily minimum temperature between E-OBSv25.0e and the daily updates for the period 1 March 2019  31 December 2021 (left) and the standard deviation of this difference field (right).
</em>
<table>
  <tr>
<td><a href="../images/daily_vs_full/tx_0.25deg_mar2019-dec2021_daily-v25.0e_timavg.png"><img alt="" src="../images/daily_vs_full/tx_0.25deg_mar2019-dec2021_daily-v25.0e_timavg.png" width="250px"></a></td>
<td><a href="../images/daily_vs_full/tx_0.25deg_mar2019-dec2021_daily-v25.0e_timstd.png"><img alt="" src="../images/daily_vs_full/tx_0.25deg_mar2019-dec2021_daily-v25.0e_timstd.png" width="250px"></a></td>
</tr>
</table>
<em>Figure 4: Time mean difference for daily maximum temperature between E-OBSv25.0e and the daily updates for the period 1 March 2019  31 December 2021 (left) and the standard deviation of this difference field (right).
</em>

	    </p>
		  </div>

                  <button class="accordion">Results: Extreme events</button>
                  <div class="panel">
                    <p>
The purpose of the daily updates is to monitor extreme events as they
develop. A key assessment is then the comparison of amplitudes and
patterns of these extreme events in the daily updates. The inspiration
for the selection of extreme events is based on the annual European
State of the Climate reports produced by C3S.
<br><br>

For precipitation, the extreme precipitation in the border region
between France and Italy in the Mediterranean coast, south of the
Alpine region, is selected. This event on 2 October 2020 is associated
with <a href="https://climate.copernicus.eu/esotc/2020/storm-alex"
target="_blank">storm Alex</a>. The other selected precipitation event
is the extreme downpour in the border region between Germany, Belgium
and the Netherlands on 14 July 2021, which has led
to <a href="https://climate.copernicus.eu/esotc/2021/flooding-july"target="_blank">large-scale
flooding</a>. For temperature, the heat of 9 August 2020
(<a href="https://climate.copernicus.eu/esotc/2020/heatwaves-and-warm-spells-during-2020"
target="_blank">exceptional summer heat</a>) is examined. The 2019
summer heatwave broke records for
the <a href="https://climate.copernicus.eu/esotc/2019/winter-warm-spell-and-summer-heatwaves"
target="_blank">nighttime temperature</a> and the date 25 July 2019 is
chosen for the comparison.
<br><br>

Storm Alex (Fig. 5) produced a massive amount of rain in the whole of
western Europe, but the emphasis of the event was in the southern
Alps, between France and Italy. The daily updates for 2 October 2020
showed a much lower amplitude in precipitation than E-OBSv25.0e. This
bias is largest over the area that has been hit the hardest, but
expands to a much large area, covering the whole Alpine area, well
into France and northern Italy. A positive bias is found over western
France. The very limited station density over France in the daily
updates (Fig. 1) influences extreme events over this area.

<table>
  <tr>
<td><a href="../images/daily_vs_full/rr_0.25deg_20201002_daily.png"><img alt="" src="../images/daily_vs_full/rr_0.25deg_20201002_daily.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/rr_0.25deg_20201002_v25.0e.png"><img alt="" src="../images/daily_vs_full/rr_0.25deg_20201002_v25.0e.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/rr_0.25deg_20201002_daily-v25.0e.png"><img alt="" src="../images/daily_vs_full/rr_0.25deg_20201002_daily-v25.0e.png" width="150px"></a></td>
</tr>
</table>
<em>Figure 5: The extreme precipitation event on 2 October 2020, quantified using daily updates (left), E-OBSv25.0e (center) and the difference between daily update and E-OBSv25.0e for this day (right).
</em>
<br><br>

A possible explanation for the large difference between the two
estimates of extreme precipitation in the Mediterranean Alps might be
related to the timing of the observation. The synoptic data use a
6-hourly time stepping in the observations (van den Besselaar et
al. 2012). For precipitation, the 12-hour accumulations of
precipitation are available at 6 and 18 UTC for almost all stations in
the synoptic data in Europe. This 12-hour time stepping does not align
with the 0-0 UTC period many NMHSs use for the data shared with
ECA&D. This means that extreme events with a short duration, like the
passing of Storm Alex, may have (parts of) the precipitation recorded
a day earlier or later in the daily updates in comparison to the full
E-OBS updates.

<table>
  <tr>
<td><a href="../images/daily_vs_full/rr_0.25deg_20210714_daily.png"><img alt="" src="../images/daily_vs_full/rr_0.25deg_20210714_daily.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/rr_0.25deg_20210714_v25.0e.png"><img alt="" src="../images/daily_vs_full/rr_0.25deg_20210714_v25.0e.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/rr_0.25deg_20210714_daily-v25.0e.png"><img alt="" src="../images/daily_vs_full/rr_0.25deg_20210714_daily-v25.0e.png" width="150px"></a></td>
</tr>
</table>
<em>Figure 6: The extreme precipitation event on 14 July 2021, quantified using daily updates (left), E-OBSv25.0e (center) and the difference between daily update and E-OBSv25.0e for this day (right).
</em>
<br><br>

The extreme precipitation on 14 July 2021 (Fig. 6) was confined to a
rather small area and the daily update captures the pattern quite
well, albeit with a bias of up to 30mm/day.

<table>
  <tr>
<td><a href="../images/daily_vs_full/tn_0.25deg_20190725_daily.png"><img alt="" src="../images/daily_vs_full/tn_0.25deg_20190725_daily.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/tn_0.25deg_20190725_v25.0e.png"><img alt="" src="../images/daily_vs_full/tn_0.25deg_20190725_v25.0e.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/tn_0.25deg_20190725_daily-v25.0e.png"><img alt="" src="../images/daily_vs_full/tn_0.25deg_20190725_daily-v25.0e.png" width="150px"></a></td>
</tr>
</table>
<em>Figure 7: The heatwave of 25 July 2019 which broke daily minimum temperature records, quantified using daily updates (left), E-OBSv25.0e (center) and the difference between daily update and E-OBSv25.0e for this day (right).
</em>
<br><br>

The hot night of 25 July 2019 (Fig. 7) had its main emphasis in Italy
and Spain and extended via France to the whole of west Europe. For
Spain and southwest France, the daily update underestimates the night
heat, while for the UK, the Netherlands and patches in central Europe,
the minimum temperature is overestimated.

<table>
  <tr>
<td><a href="../images/daily_vs_full/tx_0.25deg_20200809_daily.png"><img alt="" src="../images/daily_vs_full/tx_0.25deg_20200809_daily.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/tx_0.25deg_20200809_v25.0e.png"><img alt="" src="../images/daily_vs_full/tx_0.25deg_20200809_v25.0e.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/tx_0.25deg_20200809_daily-v25.0e.png"><img alt="" src="../images/daily_vs_full/tx_0.25deg_20200809_daily-v25.0e.png" width="150px"></a></td>
</tr>
</table>
<em>Figure 8: The excessive heat of 9 August 2020, quantified using daily updates (left), E-OBSv25.0e (center) and the difference between daily update and E-OBSv25.0e for this day (right).
</em>
<br><br>

The excessive heat of 9 August 2020 (Fig. 8), at the height of the
2020 heat wave, is well captured by the daily updates. There is a cold
bias over the west of France and a strong warm bias in an isolated
area in the European Alps, but the extend and amplitude of the heat
wave is well captured. The cold bias in Scandinavia is strong - but
this area was not affected by the heat wave.
</p>
</div>

                 <button class="accordion">Results: Reproducing patterns</button>
                  <div class="panel">
                    <p>
In addition to the reproduction of the amplitude of extremes, the
rapid production of temperature and precipitation fields should also
provide a realistic reproduction of the spatial patterns. In order to
make this assessment, a field correlation is made for each day between
the daily updates and corresponding fields from E-OBSv25.0e. Prior to
the calculation of the field correlation, both fields are masked to
have data in the square bounded by 25&#175;W - 40&#176;E and 34 -
72&#176;N. Figure 9 provides the time series for this analysis.
<br><br>
<a href="../images/daily_vs_full/fldcorr_daily_vs_full_EOBS.png"><img alt="" src="../images/daily_vs_full/fldcorr_daily_vs_full_EOBS.png" width="450px"></a><br><br>
<em>Figure 9: Time series of the field correlation between the daily updates and the corresponding fields of E-OBSv25.0e, for daily maximum (red) and minimum temperature (blue) and daily precipitation amount (green).
</em>
<br><br>

The average correlation of maximum temperature is highest at 0.95,
with the lowest values in summer and the highest in winter. For
minimum temperature, the overall correlation is lower at 0.84 and a
clear seasonal cycle is missing. Daily precipitation correlates less
well with an average value of 0.68. Remarkable are the days where the
correlation is very poor for several days in 2020 the correlation is
0.1.

<table>
  <tr>
<td><a href="../images/daily_vs_full/tx_0.25deg_20190608_daily.png"><img alt="" src="../images/daily_vs_full/tx_0.25deg_20190608_daily.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/tx_0.25deg_20190608_v25.0e.png"><img alt="" src="../images/daily_vs_full/tx_0.25deg_20190608_v25.0e.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/tx_0.25deg_20190608_daily-v25.0e.png"><img alt="" src="../images/daily_vs_full/tx_0.25deg_20190608_daily-v25.0e.png" width="150px"></a></td>
</tr>
  <tr>
<td><a href="../images/daily_vs_full/tx_0.25deg_20190616_daily.png"><img alt="" src="../images/daily_vs_full/tx_0.25deg_20190616_daily.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/tx_0.25deg_20190616_v25.0e.png"><img alt="" src="../images/daily_vs_full/tx_0.25deg_20190616_v25.0e.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/tx_0.25deg_20190616_daily-v25.0e.png"><img alt="" src="../images/daily_vs_full/tx_0.25deg_20190616_daily-v25.0e.png" width="150px"></a></td>
</tr>
</table>
<em>Figure 10: Daily maximum temperature maps for two selected days, based on the daily updates (left), full E-OBSv25.0e (center) and the difference between the daily updates and v25.0e (right). The selection of days is based on a particularly low field correlation between the maps. Upper row shows 8 June 2019, bottom row shows 16 June 2019.
</em>
<br><br>

Based on the correlation score of Fig. 9, a selection of days is made
where the correlation is particularly low. For daily maximum
temperature, two days are selected where the correlation is lowest at
0.75 (16 June 2019) and 0.76 (8 June 2019). The temperature maps for
these days are shown in Fig. 10. The amplitude of the temperature
field is not quite right over Iceland, the Baltic area and the Alpine
area, but not surprisingly with a field correlation of 0.75 - the
pattern is well captured for both days.

<table>
  <tr>
<td><a href="../images/daily_vs_full/tn_0.25deg_20190322_daily.png"><img alt="" src="../images/daily_vs_full/tn_0.25deg_20190322_daily.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/tn_0.25deg_20190322_v25.0e.png"><img alt="" src="../images/daily_vs_full/tn_0.25deg_20190322_v25.0e.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/tn_0.25deg_20190322_daily-v25.0e.png"><img alt="" src="../images/daily_vs_full/tn_0.25deg_20190322_daily-v25.0e.png" width="150px"></a></td>
</tr>
</table>
<em>Figure 11: Daily minimum temperature maps for 22 March 2019, based on the daily updates (left), full E-OBSv25.0e (center) and the difference between the daily updates and v25.0e (right).
</em>
<br><br>

This is not the conclusion for the daily minimum temperature maps of
Fig. 11. The low temperature over Scandinavia on 22 March 2019 is not
captured by the daily update while the warm temperatures over the UK
and Ireland are missed by the daily update. The daily update is quite
a bit more patchy in the temperature field over Central Europe than
E-OBSv25.0e. The field correlation for 22 March 2019 is 0.57.
<br><br>

The field correlation for minimum temperature on 22 February 2020 is
0.58. The daily update of this day has a warm bias over much of
central Europe (Fig. 12). This particular day illustrates the impact
of non-overlapping aggregation intervals between the daily updates and
the full E-OBS updates. The minimum temperatures in the daily updates
are sourced from the synoptic network which provides minimum
temperature values over 12-hour windows from 18 - 6 UTC, while the
minimum temperatures in v25.0e are 24-hour values. To investigate this
further, hourly temperature values from ERA5-Land are downloaded from
which the minimum temperature is derived for 0 24 UTC (to get a
24-hour minimum temperature for 22 February 2020) as well as for the
period 22 February 2020 18 UTC to 23 February 2020 6 UTC (which
corresponds to the 12-hour time interval of the synoptic data used for
the daily E-OBS updates). Although hourly <em>average</em>
temperatures are used instead of hourly <em>minimum</em> temperatures
(which are not available in ERA5-Land), the comparison will still give
insights into the effect of aggregating daily minimum temperature over
a 12-hour vs 24-hour interval. Figure 12 (bottom row) shows the
12-hour minimum temperature, the 24-hour minimum temperature and the
difference between these two fields. From this ERA5-Land comparison,
it is clear that the higher minimum temperatures for this day in
central Europe in the daily E-OBS updates relate to using 12-hour
minimum temperatures instead of 24-hour minimum temperatures. There
are still some additional differences between the difference map of
E-OBS and the difference map of ERA5-Land, as the station timeseries
in the full version of E-OBS are 24-hour minima, but not always from 0
- 24h UTC. It falls outside the scope of this analyses to further
investigate the differences between E-OBS and ERA5-Land.

<table>
  <tr>
<td><a href="../images/daily_vs_full/tn_0.25deg_20200222_daily.png"><img alt="" src="../images/daily_vs_full/tn_0.25deg_20200222_daily.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/tn_0.25deg_20200222_v25.0e.png"><img alt="" src="../images/daily_vs_full/tn_0.25deg_20200222_v25.0e.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/tn_0.25deg_20200222_daily-v25.0e.png"><img alt="" src="../images/daily_vs_full/tn_0.25deg_20200222_daily-v25.0e.png" width="150px"></a></td>
</tr>
  <tr>
<td><a href="../images/daily_vs_full/tn_0.25deg_20200222_era5_12h.png"><img alt="" src="../images/daily_vs_full/tn_0.25deg_20200222_era5_12h.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/tn_0.25deg_20200222_era5_24h.png"><img alt="" src="../images/daily_vs_full/tn_0.25deg_20200222_era5_24h.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/era5_20200222_12h-24h_tn_2.png"><img alt="" src="../images/daily_vs_full/era5_20200222_12h-24h_tn_2.png" width="150px"></a></td>
</tr>
</table>
<em>Figure 12: Daily minimum temperature maps for 22 February 2020, based on the daily E-OBS updates (top row, left), full E-OBSv25.0e (top row, center) and the difference between the daily updates and v25.0e (top row, right). The bottom row shows the same day for ERA5-Land with the minimum temperature derived over the 12-hour period of 22 February 2020 18UTC  23 February 2020 6 UTC (left), over the 24-hour period of 22 February 2020 00 - 24UTC (center) and the difference between the 12-hour and 24-hour minimum temperature (right). 
</em>
<br><br>

For precipitation two days are selected with a field correlation of
0.1. Figure 13 shows the daily precipitation amount of 23 April 2020
(top row) and 8 September 2020 (bottom row). Both days are very dry
over a large area of Europe. In this situation, smal areas with
precipitation which are missed in the daily updates will impact the
field correlation significantly. For 23 April 2020, precipitation in
Italy is missed and in Norway the precipitation is overestimated. For
8 September 2020, precipitation near the western coast of Norway is
missed and overestimated in the east of Finland.

<table>
  <tr>
<td><a href="../images/daily_vs_full/rr_0.25deg_20200423_daily.png"><img alt="" src="../images/daily_vs_full/rr_0.25deg_20200423_daily.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/rr_0.25deg_20200423_v25.0e.png"><img alt="" src="../images/daily_vs_full/rr_0.25deg_20200423_v25.0e.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/rr_0.25deg_20200423_daily-v25.0e.png"><img alt="" src="../images/daily_vs_full/rr_0.25deg_20200423_daily-v25.0e.png" width="150px"></a></td>
</tr>
  <tr>
<td><a href="../images/daily_vs_full/rr_0.25deg_202000908_daily.png"><img alt="" src="../images/daily_vs_full/rr_0.25deg_20200908_daily.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/rr_0.25deg_20200908_v25.0e.png"><img alt="" src="../images/daily_vs_full/rr_0.25deg_20200908_v25.0e.png" width="150px"></a></td>
<td><a href="../images/daily_vs_full/rr_0.25deg_20200908_daily-v25.0e.png"><img alt="" src="../images/daily_vs_full/rr_0.25deg_20200908_daily-v25.0e.png" width="150px"></a></td>
</tr>
</table>
<em>Figure 13: Daily precipitation maps for two selected days, based on the daily updates (left), full E-OBSv25.0e (center) and the difference between the daily updates and v25.0e (right). The selection of days is based on a particularly low field correlation between the maps. Upper row shows 23 April 2020, bottom row shows 8 September 2020.
</em>
<br><br>
</p>
</div>

                 <button class="accordion">Conclusion</button>
                  <div class="panel">
                    <p>

The provisional daily updates of E-OBS are compared against the full
version of E-OBS. The aim of the daily updates is to provide a rapid
view of an extreme event as it unfolds. In order to produce the
pan-European maps for temperature and precipitation quick enough to be
of use for this purpose, a modification of the algorithm needs to be
used and only a subset of the stations used in the full E-OBS is
available. Also the source of the input data is different with only
12-hourly values for daily minimum and maximum temperature, compared
to 24-hourly values in the full updates. The combination of these
factors makes that the daily updates will likely to be different from
the full version.
<br><br>

Comparisons are made over the period 1 March 2019 to 31 December 2021
and for selected events from 2019, 2020 and 2021. What we find is that
the behaviour and quality of the daily updates varies with the
element. The multi-year average of the daily updates is actually quite
close to the fields found in EOBSv25.0e, with daily maximum
temperature having the lowest over-all bias. The bias in daily minimum
temperature is somewhat larger, but the standard deviation of the
difference between the daily updates and the full E-OBS for minimum
temperature is smaller than that for daily maximum temperature. For
the daily updates, the daily minimum temperature is hardest to assess
in Europe's coldest regions. For precipitation, the bias is
generally close to zero, except for some regions, like Italy and the
eastern and southern boundaries of the domain. The standard deviation
of precipitation is uniform across Europe.
<br><br>

Based on a comparison of selected extreme events, the view emerges
that representation of temperature extremes is reliable, more so for
extremes in daily maximum temperature than in daily minimum
temperature extremes. For extreme precipitation, the situation is more
complex. For Storm Alex, the assessment of extreme precipitation is
quite poor in the daily update, as the event area coincides with a low
station density area and the brevity of the event makes that the
24-hour accumulated precipitation for the daily updates and
E-OBSv25.0e (which may be shifted by a 6-hour period) may not
agree. However, the representation of the extreme precipitation in
July 2021 was well captured with a correct location of the most
extreme precipitation combined with a dry bias for the most extreme
amounts.
<br><br>

The view that patterns of precipitation are better captured than the
amplitude is confirmed by a field correlation of the daily updates and
E-OBSv25.0e. For precipitation, the average value is not too bad at
0.68 but there are many days where the correlation drops to much lower
values. A detailed view of precipitation fields of days where the
field correlation is low shows that this often happens when a large
area of Europe is dry in combination with small areas for which
precipitation in the daily update is missed or overestimated. This
combination rapidly deteriorates the field correlation.
<br><br>

In the field correlation analysis, the view that the daily updates do
better in estimating daily maximum temperature than daily minimum
temperature is confirmed. However, the field correlation in daily
maximum temperature has a seasonal cycle, where cold season estimates
in maximum temperature have a somewhat higher correlation than warm
season estimates.  Nevertheless, the patterns in temperature for the
days where the field correlation in maximum temperature or minimum
temperature is low are very similar perhaps not surprising given that
the lowest field correlations are still 0.75 and 0.57 for maximum and
minimum temperature respectively.
<br><br>

In conclusion, the daily updates are a step forward in producing rapid
updates of the climatological situation during an unfolding extreme
climatic event, but care should be taken. Extremes in daily maximum
temperature are best captured, followed by extremes in daily minimum
temperature. The patterns of extreme events is well captured for both
parameters, but a bias may be present which can be considerable and up
to 2 to 4 &#176;C. For precipitation, the daily updates are useful but
even more care should be taken. While the patterns are reproduced well
the analysis shows that poorly correlating patterns are due to strange
outliers the amplitude of extreme events is likely to have a large dry
bias.

</p>
</div>

                 <button class="accordion">References</button>
                  <div class="panel">
                    <p>
van den Besselaar, E.J.M., Klein Tank, A.M.G., van der Schrier, G., Jones, P.D. (2012) Synoptic messages to extend the climate data records. J. Geophys. Res. (Atmospheres) 117:D07101, doi:10.1029/2011JD016687.
<br><br>

van den Besselaar, E.J.M., M.R. Haylock, G. van der Schrier, A.M.G. Klein Tank, 2011, A European Daily High-resolution Observational Gridded Data set of Sea Level Pressure, J. Geophys. Res., 116, D11110, doi:10.1029/2010JD015468
<br><br>

Cornes, R. C., van der Schrier, G., van den Besselaar, E. J. M., Jones, P. D.  (2018) An Ensemble Version of the E-OBS Temperature and Precipitation Datasets. J. Geophys. Res. (Atmospheres) 123:93919409, doi:10.1029/2017JD028200
<br><br>

ECA&D Project Team (2012) European Climate Assessment & Dataset Algorithm Theoretical Basis Document (ATBD), Royal Netherlands Meteorological Institute KNMI, De Bilt, NL, version 10.5.
<br><br>

Harris, I., Osborn, T.J., Jones, P. et al. (2020) Version 4 of the CRU TS monthly high-resolution gridded multivariate climate dataset. Sci Data 7, 109. doi:10.1038/s41597-020-0453-3
<br><br>

Haylock, M. R., Hofstra, N., Klein Tank, A. M. G., Klok, E. J., Jones, P. D. and New, M. (2008) A European daily high-resolution gridded data set of surface temperature and precipitation for 1950-2006. J. Geophys. Res. (Atmospheres) 113: D20119, doi:10.1029/2008JD010201
<br><br>

Hutchinson, M. F., McKenney, D. W., Lawrence, K., Pedlar, J. H., Hopkinson, R. F., Milewska, E., and Papadopol, P. (2009). Development and testing of Canada-wide interpolated spatial models of daily minimum-maximum temperature and precipitation for 19612003. Journal of Applied Meteorology and Climatology, 48(4), 725741. doi:10.1175/2008JAMC1979.1
<br><br>

Klein Tank, A. M. G. et al. (2002). Daily dataset of 20th-century surface air temperature and precipitation series for the European Climate Assessment. International Journal of Climatology 22(12), 1441-1453. doi:10.1002/joc.773
<br><br>

Masson, D., and Frei, C. (2014). Spatial analysis of precipitation in a high-mountain region: Exploring methods with multi-scale topographic predictors and circulation types. Hydrology and Earth System Sciences, 18(11), 45434563. doi:10.5194/hess-18-4543-2014
<br><br>

New, M., Hulme, M., & Jones, P. (2000). Representing twentieth-century spacetime climate variability. Part II: Development of 190196 monthly grids of terrestrial surface climate. Journal of Climate, 13(13), 2217-2238.
<br><br>

WMO (2007) Manual on the Global Telecommunication System, World Meteorological Organisation, WMO-No. 386

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

