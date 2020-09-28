<?php
error_reporting(E_ALL  & ~E_NOTICE);
session_start();
?>
<?php
  include('settings.php');
?>
	  <div class="region region-sidebar-second col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
	    <div class="row-fluid">

	      <!-- Right red menu -->
<!--              <div class="block block-menu-block clearfix" id="block-menu-block-1">
	      	<div class="menu-block-wrapper menu-block-1 menu-name-main-menu parent-mlid-0 menu-level-2">
	      	  <ul class="menu nav">
	      	    <li><a href="https://www.ecad.eu">ECA&amp;D Home</a>
		    </li>
 	      	    <li ><a href="https://www.ecad.eu/download/ensembles/ensembles.php">E-OBS</a> </li>
		    <ul class="menu">
		      <li><a href="https://www.ecad.eu/utils/mapserver/eobs_maps.php">E-OBS daily maps</a> 
		      </li>
		      <li><a href="https://www.ecad.eu/utils/mapserver/eobs_maps_indices.php">E-OBS indices maps</a>
		    </ul>
		    <li><a href="https://cib.knmi.nl">State of the European climate reports</a>
		    </li>
	      	  </ul>
	      	</div>
	      </div> --><!-- /.block -->

	      <div class="block block-views col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix" id="block-views-events-block-block-2">
		
		<!-- Right white menu -->	
		<div class="view view-events-block view-id-events_block view-display-id-block_2 view-dom-id-2b29bf8d7cc26999d28f49bac4a315f5">
		  <div class="view-header">
		    <h2 class="line-bottom-left text-uppercase h3 w300">News<span class="line-bottom-center"></span></h2>
		  </div>
	  	  <div class="view-content">
		  <!-- Start news items -->


		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">28 September 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="../dataaccess/access_ngcd.php">NGCD v20.09</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">28 September 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/stateoftheclimate/august2020.php">State-of-the-climate for August 2020</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">28 September 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Monthly <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">E-OBS</a> update released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">24 September 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">A new daily E-OBS dataset for the period 1 Jan 1920 - 31 Dec 1949 has been released as <a href="<?php echo $webhost;?>/dataaccess/access_eobs.php">E-OBSpre1950</a> for temperature (minimum, mean, maximum), precipitation amount and sea level pressure. This dataset has a research status.</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">7 September 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Global radiation for <a href="<?php echo $webhost;?>/dataaccess/access_eobs.php">E-OBSv21.0e</a> and for the <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">monthly E-OBS updates</a> has been released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">25 August 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/stateoftheclimate/july2020.php">State-of-the-climate for July 2020</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">13 August 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Monthly <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">E-OBS</a> update released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">29 July 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/stateoftheclimate/june2020.php">State-of-the-climate for June 2020</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">28 July 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Monthly <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">E-OBS</a> update released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">29 June 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/stateoftheclimate/may2020.php">State-of-the-climate for May 2020</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">16 June 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Monthly <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">E-OBS</a> update released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">9 June 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">A long-term monthly precipitation reconstruction for Fennoscandia is available as <a href="<?php echo $webhost;?>/dataaccess/access_ngcd_rec.php">NGCD_rec</a></span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">28 May 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/dataaccess/access_eobs.php">E-OBS v21.0e</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">26 May 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/stateoftheclimate/april2020.php">State-of-the-climate for April 2020</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">26 May 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Monthly <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">E-OBS</a> update released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">29 April 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/stateoftheclimate/march2020.php">State-of-the-climate for March 2020</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">22 April 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="https://climate.copernicus.eu/ESOTC2019">Annual State-of-the-climate for 2019</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">22 April 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Monthly <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">E-OBS</a> update released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">31 March 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="../dataaccess/access_ngcd.php">NGCD v20.03</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">30 March 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/stateoftheclimate/february2020.php">State-of-the-climate for February 2020</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">30 March 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Monthly <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">E-OBS</a> update released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">24 February 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/stateoftheclimate/january2020.php">State-of-the-climate for January 2020</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">24 February 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Monthly <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">E-OBS</a> update released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">23 January 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/stateoftheclimate/december2019.php">State-of-the-climate for December 2019</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">21 January 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Monthly <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">E-OBS</a> update released</span>
		      </div>
		    </div>

		    <tr>
		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">21 January 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="../dataaccess/access_eobs_indices.php">Indices based on E-OBSv20.0e</a> released</td></span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">19 December 2019</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/stateoftheclimate/november2019.php">State-of-the-climate for November 2019</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">12 December 2019</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Monthly <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">E-OBS</a> update released</span>
		      </div>
		    </div>

		  </div>
		  <div class="view-footer">
		    <p><a href="<?php echo $webhost;?>/include/allnews.php" class="btn btn-info">More news</a></p>
		  </div>
		</div>
	      </div> <!-- /.block -->

	    </div>
	  </div>
  
