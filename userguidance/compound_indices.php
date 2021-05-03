<h3>DTR*</h3>
&#9679; <i>Mean of diurnal temperature range (&#176;C)</i> 
<br><br> 

Let \(TX_{ij}\) and \(TN_{ij}\) be the daily maximum and minimum temperature at day \(i\) of
period \(j\). Then the mean diurnal temperature range is: 
<br><br>

\(DTR_{j} = \sum_{i=1}^{I}(TX_{ij} - TN_{ij}) / I \)

<br><br>

<h3>HI</h3>
&#9679; <i>Huglin Index (grape growth)</i> 
<br><br> 

Let \(TG_{ij}\) be the daily mean temperature at day \(i\) and let \(TX_{i}\) be the daily maximum temperature at day \(i\) of the period 1 April to 30 September. Then the Huglin Index is: 
<br><br>

\(HI = \sum_{1/4}^{30/9}{(TG_{i} - 10) + (TX_{i} - 10) \over 2}  K \)
<br><br>
where \(K\) is a coefficient for day length. See <a href="https://www.ecad.eu/documents/atbd.pdf" target="_blank">here</a> for details.

<br><br>


<h3>PET-MK</h3>
&#9679; <i>Mean of Reference EvapoTranspiration (Makkink) (mm/day)</i>
<br><br>
This formulation of Reference Evapotranspiration is a simplification of the more comprehensive
Penman-Monteith parameterization and recognizes that evapotranspiration is determined primarily by the radiation and the ambient air temperature.
A further simplification is that Global Radiation \(Q\) is used rather than the net radiation which is used in more comprehensive formulas.
Let \(&#955;ET\) be the latent heat energy converted by the evaporation, \(&#916;\) the slope of the vapour pressure-temperature relationship
and \(&#947;\) the psychometric constant, then the Makkink formulation of reference evapotranspiration is:
<br><br>

\( &#955;ET = C  {{\Delta \over {\Delta} + &#947;}} Q   \)

<br><br>

Here the coefficient \(C\) has the value 0.65.

<br><br>


<h3>PET-PM</h3>
&#9679; <i>Mean of Reference EvapoTranspiration (Penman-Monteith) (mm/day)</i>
<br><br>
This formulation of Reference Evapotranspiration \(ETo\) is the comprehensive Penman-Monteith parameterization which includes not only the radiation and the ambient air temperature but also recognizes that the humidity of the air and the wind speed are factors in the evaporation of moisture from the soils. The  Penman-Monteith is generally regarded as the most realistic and physically comprehensive parameterization for \(ETo\) and is widely used in hydrology and agriculture.

Let \(&#955;ET\) be the latent heat energy converted by the evaporation, \(&#916;\) the slope of the vapour pressure-temperature relationship
and \(&#947;\) the psychometric constant, \(&#961;\) the density of air, \(Cp\) the specific heat of air at constant pressure and \(rs\) and \(ra\) are bulk surface and aerodynamic resistances. The vapour pressure deficit of air at the reference height is represented by \(ea - ed\).
The Penman-Monteith formulation of reference evapotranspiration is:
<br><br>
\( &#955;ET =  {{\Delta ( Rn - G ) + &#961; Cp ( ea - ed ) / ra \over \Delta + &#947; (1 + rs/ra) }}    \)
<br><br>
The reference is Allen et al. (1994).
<br> <br>
Allen, R. G., Smith, M., Perrier, A., & Pereira, L. S. (1994). An update for the definition of reference evapotranspiration. ICID bulletin, 43(2), 1-34.

<br><br>

<h3>scPDSI</h3>
&#9679; <i>self-calibrating Palmer Drought Severity Index </i>
<br><br>
The Palmer Drought Severity Index (PDSI) is a measure of regional moisture availability that has been used  extensively  to  study  droughts  and  wet  spells  in  the  contiguous  USA.  The  computation of the index involves a classification of relative moisture conditions within 11 categories as defined by Palmer (1965), ranging from extremely dry with PDSI \(\le -4\), to extremely wet with PDSI values \(\ge 4\). The index is based on water supply and demand which is calculated using a water-budget  system  based  on  historic  records  of  precipitation  and  temperature  and  the  soil  characteristics of the site being considered.
<br>
The  self-calibrating  PDSI  (scPDSI)  as  put  forward  by  Wells  et  al.  (2004)  is  more  appropriate  for  geographical comparison of climates of diverse regions. Wells et al. (2004) improve the  performance of  the  PDSI  by  automating  the  calculations  Palmer  made  when  he  derived  the  empirical  constants  used  in  the  PDSI  algorithm.
<br><br>
Palmer, W. C. (1965). Meteorological drought (Vol. 30). US Department of Commerce, Weather Bureau.  <br>
Wells, N., Goddard, S., and Hayes, M. J. (2004). A self-calibrating Palmer drought severity index. Journal of climate, 17(12), 2335-2351.<br>

<br><br>

<h3>UTCI</h3>
&#9679; <i>Universal Thermal Climate Index</i>
<br><br>
The Universal Thermal Climate Index (UTCI), introduced by Jendritzky et al. (2012), is based on a multi-node model of human thermoregulation and can be viewed as an equivalent temperature \(ET\).  For any combination of air temperature, wind, radiation, and humidity (stress), UTCI is defined as the isothermal air temperature of the reference condition that would elicit the same dynamic response (strain) of the physiological model.
<br> <br>
Jendritzky, G., de Dear, R., & Havenith, G. (2012). UTCI - why another thermal index?. International journal of biometeorology, 56(3), 421-428

<br><br>
