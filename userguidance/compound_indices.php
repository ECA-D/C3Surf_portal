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


<h3>PET</h3>
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
