
<h3>FD*</h3>
&#9679; <i>Frost days \((TN < 0&#176;C)\) (Days)</i> 
<br><br> 

Let \(TN_{ij}\) be the daily minimum temperature at day \(i\) of
period \(j\). Then counted is the no of days where: 
<br><br>

\(TN_{ij} < 0&#176;C\)

<br><br>

<h3>CFD</h3>
&#9679; <i>Maximum no of consecutive frost days \((TN < 0&#176;C)\) (Days)</i> 
<br><br> 

Let \(TN_{ij}\) be the daily minimum temperature at day \(i\) of
period \(j\). Then counted is the largest no of consecutive days where: 
<br><br>

\(TN_{ij} < 0&#176;C\)

<br><br>

<h3>ID*</h3>
&#9679; <i>Ice days \((TX < 0&#176;C)\) (Days)</i> 
<br><br> 

Let \(TX_{ij}\) be the daily maximum temperature at day \(i\) of
period \(j\). Then counted is the no of days where: 
<br><br>

\(TX_{ij} < 0&#176;C\)

<br><br>

<h3>HD17</h3>
&#9679; <i>Heating degree days (sum of \(17&#176;C - TG)\) (\(&#176;C\))</i> 
<br><br> 

Let \(TG_{ij}\) be the daily mean temperature at day \(i\) of
period \(j\). Then the heating degree days are: 
<br><br>

\(HD17_{j} = \sum_{i=1}^{I}(17&#176;C - TG_{ij})\)

<br><br>

<h3>GSL*</h3>
&#9679; <i>Growing season length (days)</i> 
<br><br> 

Let \(TG_{ij}\) be the daily mean temperature at day \(i\) of
period \(j\). Then counted is the no of days between the first occurrence of at least 6 consecutive days with: 
<br><br>

\(TG_{ij} > 5&#176;C\)
<br><br>
and the first occurrence after 1 July of at least 6 consecutive days with:
<br><br>
\(TG_{ij} < 5&#176;C\)

<br><br>

<h3>TXn*</h3>
&#9679; <i>Minimum value of daily maximum temperature (&#176;C)</i> 
<br><br> 

Let \(TX_{ij}\) be the daily maximum temperature at day \(i\) of
period \(j\). Then the minimum of daily maximum temperature is:
<br><br>

\(TXn_{j} = \min(TX_{ij})\)
<br><br>

<h3>TNn*</h3>
&#9679; <i>Minimum value of daily minimum temperature (&#176;C)</i> 
<br><br> 

Let \(TN_{ij}\) be the daily minimum temperature at day \(i\) of
period \(j\). Then the minimum of daily minimum temperature is:
<br><br>

\(TNn_{j} = \min(TN_{ij})\)
<br><br>

<h3>TN10p*</h3>
&#9679; <i>Percentage of days with TN < 10th percentile of daily minimum temperature (cold nights) (%)</i> 
<br><br> 

Let \(TN_{ij}\) be the daily minimum temperature at day \(i\) of
period \(j\) and let \(TN_{in}10\) be the calendar day 10th percentile calculated for a 5 day window centred on each calendar day in the 1961-1990 period. Then counted is the percentage of days where:
<br><br>
\(TN_{ij} < TN_{in}10\)

<br><br>

<h3>TX10p*</h3>
&#9679; <i>Percentage of days with TX < 10th percentile of daily maximum temperature (cold day-times) (%)</i> 
<br><br> 

Let \(TX_{ij}\) be the daily maximum temperature at day \(i\) of
period \(j\) and let \(TX_{in}10\) be the calendar day 10th percentile calculated for a 5 day window centred on each calendar day in the 1961-1990 period. Then counted is percentage of days where:
<br><br>
\(TX_{ij} < TX_{in}10\)

<br><br>

<h3>CSDI* and altCSDI</h3>
&#9679; <i>Cold-spell duration index (days)</i> 
<br><br> 

Let \(TN_{ij}\) be the daily minimum temperature at day \(i\) of
period \(j\) and let \(TN_{in}10\) be the calendar day 10th percentile calculated for a 5 day window centred on each calendar day in the 1961-1990 period. Then counted is the no of days where, in intervals of at least 6 consecutive days:
<br><br>
\(TN_{ij} < TN_{in}10\)
	    <br><br>
	    For CSDI, the spells cannot span years, while for altCSDI the spells can span years.

<br><br>
