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
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">14 June 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Monthly <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">E-OBS</a> update released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">1 June 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">The file for the <a href="<?php echo $webhost;?>/dataaccess/access_eobs_indices.php">scPDSI index</a> has been replaced. The calibration period which is used to calculate this index now applies to the complete interval over which data is available.</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">25 May 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/dataaccess/access_eobs_indices.php">PET-MK, PET-PM, scPDSI and UTCI indices</a> based on E-OBSv23.1e released </span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">25 May 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/stateoftheclimate/april2021.php">State-of-the-climate for April 2021</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">20 May 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Monthly <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">E-OBS</a> update released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">29 April 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/dataaccess/access_carpatclim_indices.php">PET-MK, PET-PM, scPDSI and UTCI indices</a> based on CarpatClim released </span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">26 April 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/stateoftheclimate/march2021.php">State-of-the-climate for March 2021</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">26 April 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="https://climate.copernicus.eu/ESOTC/2020/">Annual State-of-the-climate 2020</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">26 April 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Monthly <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">E-OBS</a> update released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">30 March 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">E-OBS v23.0e has been replaced by <a href="<?php echo $webhost;?>/dataaccess/access_eobs.php">E-OBS v23.1e</a>. Only de temperature files for Jun-Dec 2020 have been affected by this in Northern France.</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">29 March 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/dataaccess/access_ngcd.php">NGCD v21.03</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">22 March 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/stateoftheclimate/february2021.php">State-of-the-climate for February 2021</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">22 March 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Monthly <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">E-OBS</a> files for relative humidity released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">22 March 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/dataaccess/access_eobs.php">E-OBS v23.0e</a> has been released. Daily mean relative humidity has been added from 1980 onwards. Global radiation now runs from 1950 onwards.</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">18 March 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Monthly <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">E-OBS</a> update released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">23 February 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/stateoftheclimate/january2021.php">State-of-the-climate for January 2021</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">16 February 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Monthly <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">E-OBS</a> update released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">1 February 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Two-yearly update of <a href="<?php echo $webhost;?>/dataaccess/access_laprec.php">LAPrec</a> has been released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">26 January 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/stateoftheclimate/december2020.php">State-of-the-climate for December 2020</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">19 January 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Monthly <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">E-OBS</a> update released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">12 January 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/stateoftheclimate/november2020.php">State-of-the-climate for November 2020</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">11 January 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/dataaccess/access_eobs_indices.php">Indices based on E-OBSv22.0e</a> released</span>
		      </div>
		    </div>


		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">5 January 2021</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">Monthly <a href="<?php echo $webhost;?>/dataaccess/access_eobs_months.php">E-OBS</a> update released (for November 2020)</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">3 December 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content"><a href="<?php echo $webhost;?>/dataaccess/access_eobs.php">E-OBS v22.0e</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-24T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">26 November 2020</span>
			</div>
		      </div>  
		      <div class="views-field views-field-title"><span class="field-content">State-of-the-climate for <a href="<?php echo $webhost;?>/stateoftheclimate/september2020.php">September 2020</a> and <a href="<?php echo $webhost;?>/stateoftheclimate/october2020.php">October 2020</a> released</span>
		      </div>
		    </div>

		    <div class="views-row views-row-1 views-row-odd views-row-first line-separator">
		      <div class="views-field views-field-field-date">
			<div class="field-content"><span content="2018-04-23T00:00:00+02:00" datatype="xsd:dateTime" property="dc:date" class="date-display-single">23 November 2020</span>
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
  
