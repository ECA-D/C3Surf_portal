<?php
  include('settings.php');
  $thispage=$_SERVER['PHP_SELF'];
  ?>

<!-- Proof of concept ribbon -->
<!-- <img id="ribbon-preef-mobile" src="<?php echo $webhost;?>/theme/ribbon-preef-mobile.png" style="position: absolute; left:0; top:-5px"/> -->
<!-- <img id="ribbon" src="<?php echo $webhost;?>/theme/ribbon.png" style="position: absolute; left:0; top:-5px"/> -->

<!-- v3.1 -->
<div id="skip-link">
  <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
</div>
<div class="global-wrapper">
  <div id="headertopwrapper" class="wrapper clearfix border-box">
    <div id="headertopcontainer" class="container">
      <div id="headertop">
        <div class="row">
	  <div class="region region-header-top-left col-xs-12 col-sm-8 col-md-8 col-lg-8 ">
	    <!-- Copernicus and C3S logos -->
	    <div class="row-fluid">
	      <div id="block-block-16" class="block block-block col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
		<p class="text-left">
		  <a href="https://www.copernicus.eu/"><img id="logo" alt="" src="<?php echo $webhost;?>/theme/copernicus-logo.png" ></a><a href="https://climate.copernicus.eu/"><img id="logo2" alt="" src="<?php echo $webhost;?>/theme/c3s-logo.png" ></a>
		</p>
		<!--div class="text-feedback">
		    <strong class="beta__label">Beta</strong> <span>Your <a href="MailTo:feedback@copernicus-climate.eu?subject=Beta evaluation:">feedback</a> will help us to improve.</span>
</div-->
	      </div> <!-- /.block -->
	    </div>
	  </div>
	  <!-- Twitter, instagram, slideshare -->
<!--	  <div class="region region-header-top-right col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
	    <div class="row-fluid">
	      <div id="block-block-36" class="block block-block col-xs-12 col-sm-8 col-md-8 col-lg-8 hidden-xs hidden-sm clearfix">
		<div class="text-right">
		  <a href="https://twitter.com/CopernicusECMWF"><i class="fa fa-twitter-square fa-2x"></i></a> <a href="https://instagram.com/copernicusecmwf/"><i class="fa fa-instagram fa-2x"></i></a> <a href="https://www.slideshare.net/CopernicusECMWF"><i style="font-size: 1.8em" class="fa fa-slideshare"></i></a>
		</div> 
	      </div> --><!-- /.block -->
	    <!--  <div id="block-menu-menu-top-menu" class="block block-menu col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-xs hidden-sm clearfix">
		<ul class="nav navbar-nav n-size-sm pull-right"><li class="first last leaf"><a class="btn btn-info" href="https://climate.copernicus.eu/contact-us">Contact us</a></li>
		</ul>
	      </div> --><!-- /.block -->
<!--	    </div>
	  </div>
  <form method="get" class="searchform" action="<?php echo $webhost;?>/" role="search">
	<input type="text" class="field" name="s" value="" placeholder="Search"/>
</form>
-->
    </div>
      </div>
    </div>
  </div>
  <!-- Red Menu bar -->
  <div id="globalheaderwrapper" class="wrapper clearfix sticky-header">
    <div id="globalheadercontainer" class="container">
      <div id="globalheader">
	<div class="row">
          <div class="region region-navigation col-lg-12 z-index-10">
	    <div class="row-fluid">
              <div id="block-tb-menu-tb-menu-primary" class="block block-tb-menu col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-xs hidden-sm clearfix">
		<nav id="tb-menu-main-menu" class="nav-menu">
		  <ul class="tb-menu main-menu" id="tb-menu-tb_menu_primary">
		    <li class="menu-2138 menu-path-front first odd "><a href="https://climate.copernicus.eu" ><i class="fa fa-home" aria-hidden="true"></i><span><strong>C3S</strong></span></a></li>
		    <li class="menu-2184 menuparent  menu-path-node-698  odd "><a href="<?php echo $webhost;?>/surfobs.php"><span><strong>Home</strong></span></a>
		    </li>
		    <li class="menu-2184 menuparent  menu-path-node-698  odd "><a href="<?php echo $thispage;?>"><span><strong>Data</strong></span></a>
                     <ul>
		       <li><a href="<?php echo $thispage;?>"><span>E-OBS (Daily)</span></a>
			 <ul>
                      	   <li><a href="<?php echo $webhost;?>/dataaccess/access_eobs.php"><span>Data access</span></a>
                      	   </li>
                      	   <!-- <li><a href="<?php echo $webhost;?>/maps/eobsdailymaps.php"><span>Daily maps</span></a> -->
                      	   <!-- </li> -->
                      	 </ul>
                       </li>
                       <li><a href="<?php echo $thispage;?>"><span>NGCD (Daily)</span></a>
			 <ul>
                      	   <li><a href="<?php echo $webhost;?>/dataaccess/access_ngcd.php"><span>Data access</span></a>
                      	   </li>
                      	 </ul>
                       </li>
                       <li><a href="<?php echo $thispage;?>"><span>NGCD_Rec (Monthly)</span></a>
			 <ul>
                      	   <li><a href="<?php echo $webhost;?>/dataaccess/access_ngcd_rec.php"><span>Data access</span></a>
                      	   </li>
                      	 </ul>

                       </li>
                       <li><a href="<?php echo $thispage;?>"><span>LAPrec (Monthly)</span></a>
			 <ul>
                      	   <li><a href="<?php echo $webhost;?>/dataaccess/access_laprec.php"><span>Data access</span></a>
                      	   </li>
                      	 </ul>
                       </li>
                       <li><a href="<?php echo $thispage;?>"><span>APGD (Daily, external)</span></a>
			 <ul>
                      	   <li><a href="<?php echo $webhost;?>/dataaccess/access_apgd.php"><span>Data access</span></a>
                      	   </li>
                      	 </ul>
                       </li>
                       <li><a href="<?php echo $thispage;?>"><span>CarpatClim (Daily, external)</span></a>
			 <ul>
                      	   <li><a href="<?php echo $webhost;?>/dataaccess/access_carpatclim.php"><span>Data access</span></a>
                      	   </li>
                      	 </ul>
                        </li>
  
                     </ul>
                    </li>

		    <li class="menu-2069 menu-path-events active-trail  even "><a href="<?php echo $thispage;?>" class="active"><span><strong>Indicators</strong></span></a>
                     <ul>
  		      <li><a href="<?php echo $thispage;?>"><span>E-OBS</span></a>                       <ul>
                      	<li><a href="<?php echo $webhost;?>/dataaccess/access_eobs_indices.php"><span>Indices access</span></a>
                      	</li>
			<!--                      	<li><a href="<?php echo $webhost;?>/maps/eobsindicesmaps.php"><span>Indices maps</span></a>
                      	</li>
-->
                       </ul>
                      </li>
                      <li><a href="<?php echo $thispage;?>"><span>NGCD</span></a>
			<ul>
                      	  <li><a href="<?php echo $webhost;?>/dataaccess/access_ngcd_indices.php"><span>Indices access</span></a>
                      	  </li>
			</ul>
                      </li>
<!--                      <li><a href="<?php echo $thispage;?>"><span>NGCD_Rec</span></a>
                      </li>
                      <li><a href="<?php echo $thispage;?>"><span>LAPrec</span></a>
                      </li>
-->
                      <li><a href="<?php echo $thispage;?>"><span>APGD</span></a>
			<ul>
                      	  <li><a href="<?php echo $webhost;?>/dataaccess/access_apgd_indices.php"><span>Indices access</span></a>
                      	  </li>
			</ul>		
                      </li>
                      <li><a href="<?php echo $thispage;?>"><span>CarpatClim</span></a>
			 <ul>
                      	   <li><a href="<?php echo $webhost;?>/dataaccess/access_carpatclim_indices.php"><span>Indices access</span></a>
                      	   </li>
                      	 </ul>
                       </li>
                     </ul>
                    </li>

		    <li class="menu-2180 menuparent  menu-path-node-643  even "><a href="<?php echo $thispage;?>"><span><strong>State-of-the-climate</strong></span></a>
                     <ul>
                      <li><a href="<?php echo $thispage;?>"><span>Monthly reports</span></a>
                       <ul>
                        <li><a href="<?php echo $webhost;?>/stateoftheclimate/may2021.php"><span>May 2021</span></a>
			</li>
                         <li><a href="<?php echo $webhost;?>/stateoftheclimate/april2021.php"><span>April 2021</span></a>
			</li>
                        <li><a href="<?php echo $webhost;?>/stateoftheclimate/march2021.php"><span>March 2021</span></a>
			</li>
                           <li><a href="<?php echo $webhost;?>/stateoftheclimate/february2021.php"><span>February 2021</span></a>
			</li>
                        <li><a href="<?php echo $webhost;?>/stateoftheclimate/january2021.php"><span>January 2021</span></a>
			</li>
                        <li><a href="<?php echo $webhost;?>/stateoftheclimate/december2020.php"><span>December 2020</span></a>
			</li>
                      <li><a href="<?php echo $webhost;?>/stateoftheclimate/all_monthly_reports.php"><span>All reports</span></a>
		       </li>
                       </ul>
                      </li>
                      <li><a href="<?php echo $thispage;?>"><span>Annual reports</span></a>
                       <ul>
                         <li><a href="https://climate.copernicus.eu/ESOTC/2023"><span>2023</span></a>
			 </li>
                        <li><a href="https://climate.copernicus.eu/ESOTC/2022"><span>2022</span></a>
                        </li>
                        <li><a href="https://climate.copernicus.eu/ESOTC/2021"><span>2021</span></a>
                        </li>
                        <li><a href="https://climate.copernicus.eu/ESOTC/2020"><span>2020</span></a>
                        </li>
                         <li><a href="https://climate.copernicus.eu/ESOTC/2019"><span>2019</span></a>
                        </li>
                        <li><a href="https://climate.copernicus.eu/ESOTC/2018"><span>2018</span></a>
                        </li>
                        <li><a href="<?php echo $webhost;?>/stateoftheclimate/year2017.php"><span>2017</span></a>
                        </li>
                      <li><a href="<?php echo $webhost;?>/stateoftheclimate/all_annual_reports.php"><span>All reports</span></a>
		       </li>
                       </ul>
                      </li>
                      <li><a href="<?php echo $webhost;?>/stateoftheclimate/observed_extremes.php"><span>Observed temperature extremes</span></a>
		      </li>
                     </ul>
		    </li>
                    <li class="odd"><a href="<?php echo $thispage;?>"><span><strong>User guidance</strong></span></a>
                     <ul>
		      <li><a href="<?php echo $webhost;?>/userguidance/use_ensembles.php"><span>How to use ensemble datasets</span></a>
		      </li>
		      <li><a href="<?php echo $webhost;?>/userguidance/daily_vs_full_eobs.php"><span>Differences daily, monthly and full E-OBS updates</span></a>
		      </li>
                      <li><a href="<?php echo $webhost;?>/userguidance/indicesdictionary.php"><span>Indices dictionary</span></a>
                      </li>
		      <li><a href="<?php echo $webhost;?>/userguidance/uncertainty_indices.php"><span>Uncertainty on the indices</span></a>
		      </li>
		      <li><a href="<?php echo $webhost;?>/userguidance/manuals.php"><span>User manuals</span></a>
		      </li>
		      <li><a href="<?php echo $webhost;?>/userguidance/known_issues_eobs.php"><span>Known issues in E-OBS</span></a>
                     </ul>
                    </li>
		  </ul>
		</nav>
	      </div> <!-- /.block -->
	      <div id="block-block-17" class="block block-block col-xs-12 col-sm-6 col-md-4 col-lg-4 visible-xs visible-sm clearfix">
		
		<div class="text-right margin-top-10px">
		  <a alt="Open Mobile Menu" href="#" id="open-menu" title="Mobile Menu"><span class="fa fa-bars"></span> MENU </a>
		</div>
		
	      </div> <!-- /.block -->
	    </div>
	  </div>
	</div>
      </div>
    </div>
  </div>

  <div id="toppagewrapper" class="wrapper clearfix ">
    <div id="toppagecontainer" class="container">
      <div id="toppage">
        <div class="row">
	  
	  <div class="region region-top-page-title col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
	    
	    <div class="row-fluid">
              <div id="block-block-33" class="block block-block col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
		
		<p>
		  &nbsp;
		</p>
		
		<p>
		  &nbsp;
		</p>
		
	      </div> <!-- /.block -->
	    </div>
	  </div>
	</div>
      </div>
    </div>
  </div>
</div>
