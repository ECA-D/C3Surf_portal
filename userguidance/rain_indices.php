<h3>RX1day*</h3>
&#9679; <i>Highest 1-day precipitation amount (mm)</i> 
<br><br> 

Let \(RR_{ij}\) be the daily precipitation amount at day \(i\) of
period \(j\). Then the maximum 1-day value is: 
<br><br>

\(RX1day_{j} = \max{RR_{ij}}\)

<br><br>

<h3>RX5day*</h3>
&#9679; <i>Highest 5-day precipitation amount (mm)</i> 
<br><br> 

Let \(RR_{kj}\) be the precipitation amount for the five-day interval \(k\) of
period \(j\), where \(k\) is defined by the last day. Then the maximum 5-day value is: 
<br><br>

\(RX5day_{j} = \max{RR_{kj}}\)

<br><br>

<h3>SDII*</h3>
&#9679; <i>Simple daily intensity index (mm/wet day)</i> 
<br><br> 

Let \(RR_{wj}\) be the daily precipitation amount for wet day \(w\) (RR < 1.0 mm) of
period \(j\). Then the mean precipitation amount at wet days is given by:
<br><br>

\(SDII_{j} = \sum_{w=1}^{W}{RR_{wj}}/W\)

<br><br>

<h3>R1mm*</h3>
&#9679; <i>Wet days (\(RR \ge 1\) mm) (days)</i> 
<br><br> 

Let \(RR_{ij}\) be the daily precipitation amount for day \(i\) of
period \(j\). Then counted is the no of days where: 
<br><br>

\(RR_{ij} \ge 1\ mm\)

<br><br>

<h3>R10mm*</h3>
&#9679; <i>Heavy precipitation days (\(RR \ge 10\) mm) (days)</i> 
<br><br> 

Let \(RR_{ij}\) be the daily precipitation amount for day \(i\) of
period \(j\). Then counted is the no of days where: 
<br><br>

\(RR_{ij} \ge 10\ mm\)

<br><br>

<h3>R20mm*</h3>
&#9679; <i>Very heavy precipitation days (\(RR \ge 20\) mm) (days)</i> 
<br><br> 

Let \(RR_{ij}\) be the daily precipitation amount for day \(i\) of
period \(j\). Then counted is the no of days where: 
<br><br>

\(RR_{ij} \ge 20\ mm\)

<br><br>

<h3>CWD* and altCWD</h3>
&#9679; <i>Maximum no of consecutive wet days (\(RR \ge 1\) mm) (days)</i> 
<br><br> 

Let \(RR_{ij}\) be the daily precipitation amount for day \(i\) of
period \(j\). Then counted is the largest no of consecutive days where: 
<br><br>

\(RR_{ij} \ge 1\ mm\)

	    <br><br>
	    For CWD, the spells can span years, while for altCWD the spells cannot span years.
<br><br>

<h3>R75pFRAC</h3>
&#9679; <i>Precipitation fraction due to moderate wet days (\(RR > 75th\) percentile) (%)</i> 
<br><br> 

Let \(RR_{j}\) be the sum of daily precipitation amount for period
\(j\) and let \(RR_{wj}\) be the daily precipitation amount at wet day \(w\) (\(RR \ge 1\) mm) of period \(j\) and \(RR_{wn}75\) the 75th percentile of precipitation at wet days in the 1961-1990 period. Then the fraction is determined as:
<br><br>

\(R75pFRAC_{j} = 100 * {{\sum_{w=1}^{W}RR_{wj},\ where\ RR_{wj} > RR_{wn}75} \over {RR_{j}}} \)

<br><br>

<h3>R95pFRAC</h3>
&#9679; <i>Precipitation fraction due to very wet days (\(RR > 95th\) percentile) (%)</i> 
<br><br> 

Let \(RR_{j}\) be the sum of daily precipitation amount for period
\(j\) and let \(RR_{wj}\) be the daily precipitation amount at wet day \(w\) (\(RR \ge 1\) mm) of period \(j\) and \(RR_{wn}95\) the 95th percentile of precipitation at wet days in the 1961-1990 period. Then the fraction is determined as:
<br><br>

\(R95pFRAC_{j} = 100 * {{\sum_{w=1}^{W}RR_{wj},\ where\ RR_{wj} > RR_{wn}95} \over {RR_{j}}} \)

<br><br>

<h3>R99pFRAC</h3>
&#9679; <i>Precipitation fraction due to extremely wet days (\(RR > 99th\) percentile) (%)</i> 
<br><br> 

Let \(RR_{j}\) be the sum of daily precipitation amount for period
\(j\) and let \(RR_{wj}\) be the daily precipitation amount at wet day \(w\) (\(RR \ge 1\) mm) of period \(j\) and \(RR_{wn}99\) the 99th percentile of precipitation at wet days in the 1961-1990 period. Then the fraction is determined as:
<br><br>

\(R99pFRAC_{j} = 100 * {{\sum_{w=1}^{W}RR_{wj},\ where\ RR_{wj} > RR_{wn}99} \over {RR_{j}}} \)

<br><br>

<h3>R75pTOT</h3>
&#9679; <i>Precipitation total due to moderate wet days (\(RR > 75th\) percentile) (mm)</i> 
<br><br> 

Let \(RR_{wj}\) be the daily precipitation amount at wet day \(w\) (\(RR \ge 1\) mm) of period \(j\) and \(RR_{wn}75\) the 75th percentile of precipitation at wet days in the 1961-1990 period. Then the total is determined as:
<br><br>

\(R75pTOT_{j} = {{\sum_{w=1}^{W}RR_{wj},\ where\ RR_{wj} > RR_{wn}75}} \)

<br><br>

<h3>R95pTOT*</h3>
&#9679; <i>Precipitation total due to very wet days (\(RR > 95th\) percentile) (mm)</i> 
<br><br> 

Let \(RR_{wj}\) be the daily precipitation amount at wet day \(w\) (\(RR \ge 1\) mm) of period \(j\) and \(RR_{wn}95\) the 95th percentile of precipitation at wet days in the 1961-1990 period. Then the total is determined as:
<br><br>

\(R95pTOT_{j} = {{\sum_{w=1}^{W}RR_{wj},\ where\ RR_{wj} > RR_{wn}95}} \)

<br><br>

<h3>R99pTOT*</h3>
&#9679; <i>Precipitation total due to extremely wet days (\(RR > 99th\) percentile) (mm)</i> 
<br><br> 

Let \(RR_{wj}\) be the daily precipitation amount at wet day \(w\) (\(RR \ge 1\) mm) of period \(j\) and \(RR_{wn}99\) the 99th percentile of precipitation at wet days in the 1961-1990 period. Then the total is determined as:
<br><br>

\(R99pTOT_{j} = {{\sum_{w=1}^{W}RR_{wj},\ where\ RR_{wj} > RR_{wn}99}} \)

<br><br>

<h3>PRCPTOT*</h3>
&#9679; <i>Total precipitation in wet days (\(RR > 1\) mm) (mm)</i> 
<br><br> 

Let \(RR_{wj}\) be the daily precipitation amount at wet day \(w\) (\(RR \ge 1\) mm) of period \(j\). Then the total is determined as:
<br><br>

\(PRCPTOT_{j} = \sum_{w=1}^{W}RR_{wj} \)

<br><br>
