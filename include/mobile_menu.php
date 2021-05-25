<?php
error_reporting(E_ALL  & ~E_NOTICE);
session_start();
?>
<?php
  include('settings.php');
  $thispage=$_SERVER['PHP_SELF'];
?>

<nav id="mmenu_left" class="mmenu-nav clearfix">
  <ul>
    <li class="	mmenu-expanded">
      <span class="mmenu-block-expanded mmenu-block"><i class="mmenu-block-icon mmenu-block-icon-system-main-menu"></i><span class="mmenu-block-title">Main menu</span></span>
    </li>
    <ul class="mmenu-mm-list-level-1">
      <li class="mmenu-mm-list-mlid-2138 mmenu-mm-list-path-front"><a href="https://climate.copernicus.eu" class="mmenu-mm-list "><i class="icon-home"></i><span class="mmenu-block-title">C3S</span></a>
      </li>
      <li class="mmenu-mm-list-mlid-2151 mmenu-mm-list-path-node-571"><a href="<?php echo $webhost;?>/surfobs.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Home</span></a>
      </li>
      <li class="mmenu-mm-list-mlid-2184 mmenu-mm-list-path-node-698"><a href="<?php echo $thispage;?>" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Data</span></a>
       <ul class="mmenu-mm-list-level-2">
         <li class="mmenu-mm-list-mlid-2068 mmenu-mm-list-path-news"><a href="<?php echo $thispage;?>" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">E-OBS (Daily)</span></a>
	  <ul class="mmenu-mm-list-level-3">
           <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-702"><a href="<?php echo $webhost;?>/dataaccess/access_eobs.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Data access</span></a>
           </li>
           <!-- <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-702"><a href="<?php echo $webhost;?>/maps/eobsdailymaps.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Daily maps</span></a> -->
           <!-- </li> -->
          </ul>
         </li>
         <li class="mmenu-mm-list-mlid-2187 mmenu-mm-list-path-node-702"><a href="<?php echo $thispage;?>" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">NGCD (Daily)</span></a>
	  <ul class="mmenu-mm-list-level-3">
           <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-702"><a href="<?php echo $webhost;?>/dataaccess/access_ngcd.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Data access</span></a>
           </li>
           </ul>
         </li>
         <li class="mmenu-mm-list-mlid-2218 mmenu-mm-list-path-node-701"><a href="<?php echo $thispage;?>" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">NGCD_Rec (Monthly)</span></a>
	  <ul class="mmenu-mm-list-level-3">
           <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-702"><a href="<?php echo $webhost;?>/dataaccess/access_ngcd_rec.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Data access</span></a>
           </li>
           </ul>
         </li>
         <li class="mmenu-mm-list-mlid-2215 mmenu-mm-list-path-node-703"><a href="<?php echo $thispage;?>" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">LAPrec (Monthly)</span></a>
	  <ul class="mmenu-mm-list-level-3">
           <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-702"><a href="<?php echo $webhost;?>/dataaccess/access_laprec.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Data access</span></a>
           </li>
           </ul>
         </li>
         <li class="mmenu-mm-list-mlid-2215 mmenu-mm-list-path-node-704"><a href="<?php echo $thispage;?>" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">APGD (Daily, external)</span></a>
	  <ul class="mmenu-mm-list-level-3">
           <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-702"><a href="<?php echo $webhost;?>/dataaccess/access_apgd.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Data access</span></a>
           </li>
           </ul>
         </li>
         <li class="mmenu-mm-list-mlid-2215 mmenu-mm-list-path-node-705"><a href="<?php echo $thispage;?>" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">CarpatClim (Daily, external)</span></a>
	  <ul class="mmenu-mm-list-level-3">
           <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-702"><a href="<?php echo $webhost;?>/dataaccess/access_carpatclim.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Data access</span></a>
           </li>
           </ul>
         </li>
        </ul>
       </li>
       <li class="mmenu-mm-list-mlid-2069 mmenu-mm-list-path-events"><a href="<?php echo $thispage;?>" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Indicators</span></a>
       <ul class="mmenu-mm-list-level-2">
         <li class="mmenu-mm-list-mlid-2068 mmenu-mm-list-path-news"><a href="<?php echo $thispage;?>" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">E-OBS</span></a>
	  <ul class="mmenu-mm-list-level-3">
           <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-706"><a href="<?php echo $webhost;?>/dataaccess/access_eobs_indices.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Indices access</span></a>
           </li>
<!--
           <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-707"><a href="<?php echo $webhost;?>/maps/dailyindicesmaps.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Indices maps</span></a>
           </li>
-->
          </ul>
         </li>
         <li class="mmenu-mm-list-mlid-2187 mmenu-mm-list-path-node-708"><a href="<?php echo $thispage;?>" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">NGCD</span></a>
	  <ul class="mmenu-mm-list-level-3">
           <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-706"><a href="<?php echo $webhost;?>/dataaccess/access_ngcd_indices.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Indices access</span></a>
           </li>
	  </ul>
         </li>
<!--         <li class="mmenu-mm-list-mlid-2218 mmenu-mm-list-path-node-709"><a href="<?php echo $thispage;?>" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">NGCD_Rec</span></a>
         </li>
         <li class="mmenu-mm-list-mlid-2215 mmenu-mm-list-path-node-710"><a href="<?php echo $thispage;?>" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">LAPrec</span></a>
         </li>
-->
         <li class="mmenu-mm-list-mlid-2215 mmenu-mm-list-path-node-711"><a href="<?php echo $thispage;?>" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">APGD</span></a>
	  <ul class="mmenu-mm-list-level-3">
           <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-706"><a href="<?php echo $webhost;?>/dataaccess/access_apgd_indices.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Indices access</span></a>
           </li>
	  </ul>
         </li>
         <li class="mmenu-mm-list-mlid-2215 mmenu-mm-list-path-node-712"><a href="<?php echo $thispage;?>" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">CarpatClim</span></a>
	  <ul class="mmenu-mm-list-level-3">
           <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-702"><a href="<?php echo $webhost;?>/dataaccess/access_carpatclim_indices.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Indices access</span></a>
           </li>
           </ul>
         </li>
        </ul>
       </li>
       <li class="mmenu-mm-list-mlid-2062 mmenu-mm-list-path-tenders"><a href="<?php echo $thispage;?>" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">State-of-the-climate</span></a>
      <ul class="mmenu-mm-list-level-2">
         <li class="mmenu-mm-list-mlid-2068 mmenu-mm-list-path-news"><a href="<?php echo $thispage;?>" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Monthly reports</span></a>
	  <ul class="mmenu-mm-list-level-3">
            <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-713"><a href="<?php echo $webhost;?>/stateoftheclimate/april2021.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">April 2021</span></a>
	    </li>
            <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-713"><a href="<?php echo $webhost;?>/stateoftheclimate/march2021.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">March 2021</span></a>
	    </li>
            <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-713"><a href="<?php echo $webhost;?>/stateoftheclimate/february2021.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">February 2021</span></a>
	    </li>
            <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-713"><a href="<?php echo $webhost;?>/stateoftheclimate/january2021.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">January 2021</span></a>
	    </li>
            <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-713"><a href="<?php echo $webhost;?>/stateoftheclimate/december2020.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">December 2020</span></a>
	    </li>
            <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-713"><a href="<?php echo $webhost;?>/stateoftheclimate/november2020.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">November 2020</span></a>
	    </li>
            <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-713"><a href="<?php echo $webhost;?>/stateoftheclimate/all_monthly_reports.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">All reports</span></a>
	    </li>
         </ul>
         </li>
         <li class="mmenu-mm-list-mlid-2187 mmenu-mm-list-path-node-716"><a href="<?php echo $thispage;?>" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Annual reports</span></a>
 	  <ul class="mmenu-mm-list-level-3">
           <!-- <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-717"><a href="<?php echo $webhost;?>/stateoftheclimate/year2020.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">2020</span></a> -->
           <!-- </li> -->
              <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-719"><a href="https://climate.copernicus.eu/ESOTC/2020" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">2020</span></a>
              </li>
              <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-719"><a href="https://climate.copernicus.eu/ESOTC/2019" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">2019</span></a>
              </li>
              <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-719"><a href="https://climate.copernicus.eu/ESOTC/2018" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">2018</span></a>
              </li>
              <li class="mmenu-mm-list-mlid-2219 mmenu-mm-list-path-node-720"><a href="<?php echo $webhost;?>/stateoftheclimate/year2017.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">2017</span></a>
             </li>
          </ul>
         </li>
         <li class="mmenu-mm-list-mlid-2187 mmenu-mm-list-path-node-716"><a href="<?php echo $webhost;?>/stateoftheclimate/observed_extremes.php" class="mmenu-mm-list"><i class="icon-list2"></i><span class="mmenu-block-title">Observed temperature extremes</span></a>
         </li>
        </ul>
      </li>
      <li class="mmenu-mm-list-mlid-2180 mmenu-mm-list-path-node-643"><a href="<?php echo $thispage;?>" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">User guidance</span></a>
       <ul class="mmenu-mm-list-level-2">
        <li class="mmenu-mm-list-mlid-2183 mmenu-mm-list-path-node-643"><a href="<?php echo $webhost;?>/userguidance/use_ensembles.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">How to use ensemble datasets</span></a>
        </li>
        <li class="mmenu-mm-list-mlid-2183 mmenu-mm-list-path-node-643"><a href="<?php echo $webhost;?>/userguidance/indicesdictionary.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Indices dictionary</span></a>
        </li>
        <li class="mmenu-mm-list-mlid-2183 mmenu-mm-list-path-node-643"><a href="<?php echo $webhost;?>/userguidance/uncertainty_indices.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">Uncertainty on the indices</span></a>
        </li>
        <li class="mmenu-mm-list-mlid-2183 mmenu-mm-list-path-node-643"><a href="<?php echo $webhost;?>/userguidance/manuals.php" class="mmenu-mm-list "><i class="icon-list2"></i><span class="mmenu-block-title">User manuals</span></a>
        </li>
       </ul>
      </li>
    </ul>
  </ul>

</nav>
<!--<script src="https://climate.copernicus.eu/sites/default/files/js/js_pMpn-aGMsGKgMnAtmxLe-SZAZXUOnXxQqYAoiRN9DJI.js"></script>
<script src="https://climate.copernicus.eu/sites/default/files/js/js_0FLbRiUqtDpV72FfWXeHPnFm-mOEfk_I-e170Ur5Kws.js"></script>
-->

<div id="mm-blocker" class="mm-slideout"></div>
