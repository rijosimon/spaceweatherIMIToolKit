<html>
<head>
<title>Real-Time Eulerian Parallel Polar Ionosphere Model (Alpha Stage)</title>
</head>
<body>
<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA="screen, print">
<!-- ARSC Logo Image -->

<center><a href = "http://www.arsc.edu"><img src="ARSC_logo.gif"/></a></center>

<!-- ARSC Logo Image End -->

<!-- JavaScript call from imi_support.js -->

<script type=text/javascript src = "imi_support.js">
</script>
 
<!-- End of JavaScript call from imi_support.js -->

<!-- HTML heading to the page -->

<h2><center>Real-Time Eulerian Parallel Polar Ionosphere Model</center></h2><hr>
<!--End of Heading to the page-->
<!--Include External PHP files-->
<?php
include "dbconnect_pdo.php";
include "external_scripts.php";
?>

<!--Form Structure before Query is sent-->

<!--Form Name: spaceweather-->

<?php
if(!$_POST)
{
?>

<form name="spaceweather" action="index.php" method="post">

<!--Date/Season Form-->

Select : <select name=period_type onchange=changePeriod()>
<option value='1'>Date:</option>
<option value='2'>Season:</option>
</select>
<div id="dataloc">
<select name=start_month><option value='1'>1</option><option value='2' >2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value=10'>10</option><option value='11'>11</option><option value='12'>12</option></select>
<select name=start_date><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value=10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option></select>
<select name=start_year><option value='2002'>2002</option><option value='2003'>2003</option><option value='2004'>2004</option><option value='2005'>2005</option><option value='2006'>2006</option><option value='2007'>2007</option></select>
to 
<select name=end_month><option value='1'>1</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value=10'>10</option><option value='11'>11</option><option value='12'>12</option></select>
<select name=end_date><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value=10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option></select>
<select name=end_year><option value='2002'>2002</option><option value='2003'>2003</option><option value='2004'>2004</option><option value='2005'>2005</option><option value='2006'>2006</option><option value='2007'>2007</option></select>
<br>
Select the range of time for which you want the data to be generated.
</div>
<!--Date/Season Form End-->
<!--Location Form-->
<br>
Location:
<select name='location[]' size =5 MULTIPLE><option value='College'>College, USA (AK) 65N 148W</option><option value='GooseBay'>Goose Bay, Canada 53N 61W</option><option value='Narssarssuaq'>Narssarssuaq, Greenland 61N 45W</option><option value='Qaanaaq'>Qaanaaq, Greenland 77N 69W</option><option value='Sondrestrom'>Sondrestrom, Greenland 67N 50W</option><option value='San_Vito'>San Vito, Italy 48N 19E</option><option value='Wallops'>Wallops Island, USA (VA) 38N 75W</option><option value='Beijing'>Beijing, China 46N 116E</option><option value='Juliusruh'>Juliusruh, Germany 55N 13E</option><option value='Magadan'>Magadan, Russia 60N 151E</option><option value='Manzhouli'>Manzhouli, China 50N 118E</option><option value='Salekhard'>Salekhard, Russia 66N 66E</option><option value='King_Salmon'>King Salmon, USA(AK) 59N 157W</option><option value='Fairford'>Fairford, UK 52N 2W</option><option value='Millstone_H'>Millstone Hill, USA(MA) 43N 72W</option><option value='Gakona'>Gakona, USA (AK) 62N 145W</option><option value='Boulder'>Boulder, USA (CO) 40N 105W</option><option value='Bear_Lake'>Bear Lake, USA (UT) 42N 111W</option><option value='Tromso'>Tromso, Norway 70N 19E</option><option value='Lycksele'>Lycksele, Sweden 65N 19E</option><option value='Osan'>Osan, Korea 37N 127E</option><option value='Chilton'>Chilton, UK 2N 1W</option></select>
<br><br>
Use Ctrl+SELECT to select multiple non-contigous locations.
<br><br>
<!--Location Form End-->
<!--Time of Day Form-->
Time of Day : 
<select name=tod onchange = changeTime()><option value='1'>All Time</option><option value='2' onchange=changeTime()>Period of Day</option><option value ='3' onchange=changeTime()>za Range</option></select>
<div id="time_info"> </div>
<!--Time of Day Form End-->
<!--kp & bzvalue spot-->
<div id="kpvalue_spot"> </div>
<div id="bzvalue_spot"> </div>
<!--kp & bzvalue spot end-->
<!--kp & bzvalue parameter form-->
Additional Parameters :
<input name = 'kpvalue' type="checkbox" onchange = addkpvalue()>kP</input>
<input name = 'bzvalue' type="checkbox" onchange=addbzvalue()>IMF Bz</input>
<!-- kp & bzvalue parameter form end-->
<!--Result Format Form-->
<div id="result_format">Result Format:
<br><br>
<input type="radio" name="res_form" value="1" onchange = putform()>Display on Screen</input><br><input type="radio" name="res_form" value="2" onchange=putform()>Downloadable CSV file.</input><!--<br><input type="radio" name="res_form" value="3" onchange=putgraphform()>Generate Graph</input>-->

</div>
<!--Result Format Form End-->
<div id="loc_moreinf"></div> <!--More info on result format spot-->
<div id="loc_reload"> <!--reload button spot-->
<input type="button" value="Reload Window"
onclick="window.location.reload()">
</div><!--reload button spot end-->
 <!--Submit Button Spot-->
<div id="loc_submit"><input name=frm_submit type = "submit" value = "Submit Query"/></div>
<!--Submit Button Spot End-->
</form>
<!--End of Form Structure before query is sent-->
<?php
}
else
{
?>
<!--Form Structure after query is sent-->
<form name="spaceweather" action="index.php" method="post">

<!--Date/Season Form-->

Select : <select name=period_type onchange=changePeriod()>
<option value='1'>Date:</option>
<option value='2'>Season:</option>
</select>
<div id="dataloc">
<select name=start_month><option value='1'>1</option><option value='2' >2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value=10'>10</option><option value='11'>11</option><option value='12'>12</option></select>
<select name=start_date><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value=10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option></select>
<select name=start_year><option value='2002'>2002</option><option value='2003'>2003</option><option value='2004'>2004</option><option value='2005'>2005</option><option value='2006'>2006</option><option value='2007'>2007</option></select>
to 
<select name=end_month><option value='1'>1</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value=10'>10</option><option value='11'>11</option><option value='12'>12</option></select>
<select name=end_date><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value=10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option></select>
<select name=end_year><option value='2002'>2002</option><option value='2003'>2003</option><option value='2004'>2004</option><option value='2005'>2005</option><option value='2006'>2006</option><option value='2007'>2007</option></select>
<br>
Select the range of time for which you want the data to be generated.
</div>
<!--Date/Season Form End-->
<!--Location Form-->
<br>
Location:
<select name='location[]' size =5 MULTIPLE><option value='College'>College, USA (AK) 65N 148W</option><option value='GooseBay'>Goose Bay, Canada 53N 61W</option><option value='Narssarssuaq'>Narssarssuaq, Greenland 61N 45W</option><option value='Qaanaaq'>Qaanaaq, Greenland 77N 69W</option><option value='Sondrestrom'>Sondrestrom, Greenland 67N 50W</option><option value='San_Vito'>San Vito, Italy 48N 19E</option><option value='Wallops'>Wallops Island, USA (VA) 38N 75W</option><option value='Beijing'>Beijing, China 46N 116E</option><option value='Juliusruh'>Juliusruh, Germany 55N 13E</option><option value='Magadan'>Magadan, Russia 60N 151E</option><option value='Manzhouli'>Manzhouli, China 50N 118E</option><option value='Salekhard'>Salekhard, Russia 66N 66E</option><option value='King_Salmon'>King Salmon, USA(AK) 59N 157W</option><option value='Fairford'>Fairford, UK 52N 2W</option><option value='Millstone_H'>Millstone Hill, USA(MA) 43N 72W</option><option value='Gakona'>Gakona, USA (AK) 62N 145W</option><option value='Boulder'>Boulder, USA (CO) 40N 105W</option><option value='Bear_Lake'>Bear Lake, USA (UT) 42N 111W</option><option value='Tromso'>Tromso, Norway 70N 19E</option><option value='Lycksele'>Lycksele, Sweden 65N 19E</option><option value='Osan'>Osan, Korea 37N 127E</option><option value='Chilton'>Chilton, UK 2N 1W</option></select>
<br><br>
Use Ctrl+SELECT to select multiple non-contigous locations.
<br><br>
<!--Location Form End-->
<!--Time of Day Form-->
Time of Day : 
<select name=tod onchange = changeTime()><option value='1'>All Time</option><option value='2' onchange=changeTime()>Period of Day</option><option value ='3' onchange=changeTime()>za Range</option></select>
<div id="time_info"> </div>
<!--Time of Day Form End-->
<!--kp & bzvalue spot-->
<div id="kpvalue_spot"> </div>
<div id="bzvalue_spot"> </div>
<!--kp & bzvalue spot end-->
<!--kp & bzvalue parameter form-->
Additional Parameters :
<input name = 'kpvalue' type="checkbox" onchange = addkpvalue()>kP</input>
<input name = 'bzvalue' type="checkbox" onchange=addbzvalue()>IMF Bz</input>
<!-- kp & bzvalue parameter form end-->
<!--Result Format Form-->
<div id="result_format">Result Format:
<br><br>
<input type="radio" name="res_form" value="1" onchange = putform()>Display on Screen</input><br><input type="radio" name="res_form" value="2" onchange=putform()>Downloadable CSV file.</input><!--<br><input type="radio" name="res_form" value="3" onchange=putgraphform()>Generate Graph</input>-->

</div>
<!--Result Format Form End-->
<div id="loc_moreinf"></div> <!--More info on result format spot-->
<div id="loc_reload"> <!--reload button spot-->
<input type="button" value="Reload Window"
onclick="window.location.reload()">
</div><!--reload button spot end-->
 <!--Submit Button Spot-->
<div id="loc_submit"><input name=frm_submit type = "submit" value = "Submit Query"/></div>
<!--Submit Button Spot End-->
</form>
<!--End of Form structure after the query is sent-->
<hr>
<?php

//forming the date condition inside the $date_cond variable.

$date_cond = 'date_out between '; //place holder for date condition
if($_POST[period_type]==1)    //if period type is date
{
		$start_date='';
		$end_date='';
		if($_POST[start_date]<10)
			$start_date='0'.$_POST[start_date];
		else
			$start_date=$_POST[start_date];
		if($_POST[end_date]<10)
		{
			$end_date='0'.$_POST[end_date];}
		else{
			$end_date=$_POST[end_date];}
		if($_POST[start_month]<10)
			$start_month='0'.$_POST[start_month];
		else
			$start_month=$_POST[start_month];
		if($_POST[end_month]<10)
		{
			$end_month='0'.$_POST[end_month];}
		else{
			$end_date=$_POST[end_month];}	
		$date_cond=$date_cond.' \''.$_POST[start_year].'-'.$start_month.'-'.$start_date.'\' and \''.$_POST[end_year].'-'.$end_month.'-'.$end_date.'\'';
		
}
else if($_POST[period_type]==2)  //if period type is season
{
	if($_POST[period]==0)     //Winter   Dec-Feb
	{
		for($i=$_POST[period_year_start]; $i<=$_POST[period_year_end]; $i++)
		{
			$date_cond=$date_cond.' \''.$i.'-12-01\' and \''.$i.'-02-28\'';
			if($i!=$_POST[period_year_end])
				$date_cond=$date_cond.' or';
		}
	}
	else if($_POST[period]==1)    //Equinox   Mar-May      Sept - Nov
	{
		for($i=$_POST[period_year_start]; $i<=$_POST[period_year_end]; $i++)
		{
			$date_cond=$date_cond.' \''.$i.'-03-01\' and \''.$i.'-05-31\'';
				$date_cond=$date_cond.' or';
		}
		for($i=$_POST[period_year_start]; $i<=$_POST[period_year_end]; $i++)
		{
			$date_cond=$date_cond.' \''.$i.'-09-01\' and \''.$i.'-11-30\'';
			if($i!=$_POST[period_year_end])
				$date_cond=$date_cond.' or';
		}
		
	}
	else if($_POST[period]==2)      //Summer    June-August
	{
		for($i=$_POST[period_year_start]; $i<=$_POST[period_year_end]; $i++)
		{
			$date_cond=$date_cond.' \''.$i.'-06-01\' and \''.$i.'-08-31\'';
			if($i!=$_POST[period_year_end])
				$date_cond=$date_cond.' or';
		}
	
	}
	else if($_POST[period]==3)      //Fall     September-November
	{
		for($i=$_POST[period_year_start]; $i<=$_POST[period_year_end]; $i++)
		{
			$date_cond=$date_cond.' \''.$i.'-09-01\' and \''.$i.'-11-30\'';
			if($i!=$_POST[period_year_end])
				$date_cond=$date_cond.' or';
		}
	}
	else if($_POST[period]==4)     //Spring     Mar-May
	{
		for($i=$_POST[period_year_start]; $i<=$_POST[period_year_end]; $i++)
		{
			$date_cond=$date_cond.' \''.$i.'-03-01\' and \''.$i.'-05-31\'';
			if($i!=$_POST[period_year_end])
				$date_cond=$date_cond.' or';
		}
	}
}
//echo $date_cond;

//forming the condition for location in the $locations_cond variable.

$locations_cond =''; //placeholder for location condition
$location_list=$_POST[location];
if($location_list)
{
for($i=0; $i<sizeof($location_list); $i++)
{
	$locations_cond=$locations_cond.'locations_out=\''.$location_list[$i].'\' ';
	if($i!=(sizeof($location_list)-1))
		$locations_cond=$locations_cond.'or ';
}
//echo 'location condition is '.$locations_cond;
}

//forming the condition for Time of Day using the za_out parameter

$za_cond='';    //placeholder for za condition

//All Time

if($_POST[tod]==1)
{
	//nothing has to be done to za_cond which is alread set to null as all time means that there is no condition for za
}

//period of Day

else if($_POST[tod]==2)
{
	if($_POST[pot]==1)
	{
		$za_cond=' za_out<=85';
	}
	else if($_POST[pot]==2)
	{
		$za_cond=' za_out>=105';
	}
	else if($_POST[pot]==3)
	{
		$za_cond= ' za_out between 85 and 105';
	}
}

//za range

else if($_POST[tod]==3)
{
	$za_cond=' za_out between '.$_POST[za1].' and '.$_POST[za2];
}

//echo $za_cond;

//setting the condition for kp if it exists.

$kp_cond='';  //placeholder for kp condition

if(isset($_POST[kpvalue]))   ///forming condition for kp value
{
	$kp_cond=' rkp_out between '.$_POST[kP1].' and '.$_POST[kP2];
}

$bz_cond='';  //placeholder for bz condition

if(isset($_POST[bzvalue]))   //forming condition for bzvalue
{
	$bz_cond=' bz_out between '.$_POST[bz1].' and '.$_POST[bz2];
}

//echo $bz_cond;

//Here we are deciding what the output should be for various result formats

//checking if a result format was selected

if(isset($_POST[res_form]))
{
	if($_POST[res_form]==1)   //For Display on Screen Result
	{
		//printing conditions
		
		$post = array($_POST[period_type], $_POST[period], $_POST[period_year_start], $_POST[period_year_end], $_POST[tod], $_POST[za1], $_POST[za2], $_POST[pot], $_POST[kpvalue], $_POST[kP1], $_POST[kP2], $_POST[bzvalue], $_POST[the_form], $_POST[focus_data], $_POST[bz1], $_POST[bz2]);		
		printConditions($post, $date_cond, $location_list);
		
		//All Condition Printed
	
		$query='';
	$model_type='';
	$data_type='';
	if($_POST[the_form]==0)
	{$model_type='ES';}
	else if($_POST[the_form]==1)
	{$model_type='PS';}
	else if($_POST[the_form]==2)
	{$model_type='EP';}
	if($_POST[focus_data]==1)
	{$data_type='foF2';}
	else if($_POST[focus_data]==2)
	{$data_type='hmf2';}
	else if($_POST[focus_data]==3)
	{$data_type='TEC';}
	$datatograb='r_'.$model_type.'_'.$data_type.'_out';
	$query='select '.$datatograb.' from database_out where ';
	
	if($date_cond!='date_out between ')
	{
		$query=$query.$date_cond;
	}
	if($locations_cond!='')
	{
		$query=$query.' and '.$locations_cond;
	}
	if($za_cond!='')
	{
		$query=$query.' and'.$za_cond;
	}
	if($kp_cond!='')
	{
		$query=$query.' and'.$kp_cond;
	}
	if($bz_cond!='')
	{
		$query=$query.' and'.$bz_cond;
	}
	$db_connect=dbprode_connect();
	$sth=$db_connect->query($query);
	$numOfOb=0;
	$sum=0;
	$sumSquare=0;
	while($row=$sth->fetch(PDO::FETCH_NUM))
	{
		if($row[0]>0)
		{
		$numOfOb++;
		$sum=$sum+$row[0];
		$sumSquare=$sumSquare+pow($row[0],2);
		}
		
	}	
		
		if($numOfOb!=0)
		{
			echo 'Number of Observations '.$numOfOb.'<br>';
			$stat_param=$_POST[stat_disp];
		if($stat_param==3)
		{
			echo 'Bias '.$sum/$numOfOb.'<br>';
			echo 'RMS '.sqrt($sumSquare/$numOfOb).'<br>';
		}
		else if($stat_param==1)
		{
			echo 'Bias: '.$sum/$numOfOb.'<br>';
			
		}
		else if($stat_param==2)
		{
			echo 'RMS '.sqrt($sumSquare/$numOfOb).'<br>';
		}
		}
		else
		{
		echo 'Since the number of observations meeting these conditions were zero no statistical parameters can be derived for this condition.';
		}
		
	}
	else if($_POST[res_form]==2)
	{
		//Selected format type is CSV generation
		
		//Printing Conditions
		
		echo 'For Conditions: <br><br>';
		$date='';
		if($_POST[period_type]==1)
		{
			$date='between '.substr($date_cond, 17);
		}
		else if($_POST[period_type]==2)
		{
			if($_POST[period]==0)
			$date='Winter';
			else if($_POST[period]==1)
			$date='Equinox';
			else if($_POST[period]==2)
			$date='Summer';
			else if($_POST[period]==3)
			$date='Fall';
			else if($_POST[period]==4)
			$date='Spring';
			
			$date=$date.'s of '.$_POST[period_year_start].' to '.$_POST[period_year_end];
		}
		echo 'In Time Period '.$date.'<br>';
		$location='';
		if($location_list)
		{
			for($i=0; $i<sizeof($location_list); $i++)
			{
				$location=$location.', '.$location_list[$i].' ';
			}
		}
		echo 'From Location(s)'.$location.'<br>';
		$dayoftime='';
		if($_POST[tod]==1)
		{
			$dayoftime='All Day Long';
		}
		else if($_POST[tod]==2)
		{
			if($_POST[pot]==1)
			{
				$dayoftime='Day';
			}
			else if($_POST[pot]==2)
			{
				$dayoftime='Night';
			}
			else if($_POST[pot]==3)
			{
				$dayoftime='Twilight';
			}
		}

		else if($_POST[tod]==3)
		{
			$dayoftime='za value range between '.$_POST[za1].' and '.$_POST[za2];
		}
		echo 'During '.$dayoftime.'<br>';
		if(isset($_POST[kpvalue]))
		{
			$kp='between '.$_POST[kP1].' and '.$_POST[kP2];
			echo 'For Kp ranging '.$kp.'<br>';
		}
		if(isset($_POST[bzvalue]))
		{
			$bz='between '.$_POST[bz1].' and '.$_POST[bz2];
			echo 'and IMF Bz ranging '.$bz.'<br><br>';
		}	
		$model='';
		if($_POST[the_form]==0)
			{$model='EPPIM/SEC';}
		else if($_POST[the_form]==1)
			{$model='PIM/SEC';}
		else if($_POST[the_form]==2)
			{$model='EPPIM/PIM';}
		echo 'For Model '.$model.'<br>';     // 0 -> EPPIM/SEC  1->PIM/SEC   2-> EPPIM/PIM
		$fdata='';
		if($_POST[focus_data]==1)
			{$fdata='f0F2';}
		else if($_POST[focus_data]==2)
			{$fdata='hmf2';}
		else if($_POST[focus_data]==3)
			{$fdata='TEC';}
		echo 'For Data '.$fdata.'<br>';
		$query='';
	$model_type='';
	$data_type='';
	if($_POST[the_form]==0)
	{$model_type='ES';}
	else if($_POST[the_form]==1)
	{$model_type='PS';}
	else if($_POST[the_form]==2)
	{$model_type='EP';}
	if($_POST[focus_data]==1)
	{$data_type='foF2';}
	else if($_POST[focus_data]==2)
	{$data_type='hmf2';}
	else if($_POST[focus_data]==3)
	{$data_type='TEC';}
	$datatograb='r_'.$model_type.'_'.$data_type.'_out';
	$query='select '.$datatograb.' from database_out where ';
	
	if($date_cond!='date_out between ')
	{
		$query=$query.$date_cond;
	}
	if($locations_cond!='')
	{
		$query=$query.' and '.$locations_cond;
	}
	if($za_cond!='')
	{
		$query=$query.' and'.$za_cond;
	}
	if($kp_cond!='')
	{
		$query=$query.' and'.$kp_cond;
	}
	if($bz_cond!='')
	{
		$query=$query.' and'.$bz_cond;
	}
	$db_connect=dbprode_connect();
	$sth=$db_connect->query($query);
	$numOfOb=0;
	$sum=0;
	$sumSquare=0;
	while($row=$sth->fetch(PDO::FETCH_NUM))
	{
		if($row[0]>0)
		{
		$numOfOb++;
		$sum=$sum+$row[0];
		$sumSquare=$sumSquare+pow($row[0],2);
		}
		
	}	
	
		if($numOfOb!=0)
		{
			echo 'Number of Observations '.$numOfOb.'<br>';
			$stat_param=$_POST[stat_disp];
		if($stat_param==3)
		{
			echo 'Bias '.$sum/$numOfOb.'<br>';
			echo 'RMS '.sqrt($sumSquare/$numOfOb).'<br>';
		}
		else if($stat_param==1)
		{
			echo 'Bias: '.$sum/$numOfOb.'<br>';
			
		}
		else if($stat_param==2)
		{
			echo 'RMS '.sqrt($sumSquare/$numOfOb).'<br>';
		}
		
		}
		else
		{
		echo 'Since the number of observations meeting these conditions were zero no statistical parameters can be derived for this condition.';
		}
		
		$query_csv = 'select date_out, locations_out, za_out, rkp_out, bz_out, by_out, '.$datatograb.'from database_out where ';
		
		if($date_cond!='date_out between ')
	{
		$query_csv=$query_csv.$date_cond;
	}
	if($locations_cond!='')
	{
		$query_csv=$query_csv.' and '.$locations_cond;
	}
	if($za_cond!='')
	{
		$query_csv=$query_csv.' and'.$za_cond;
	}
	if($kp_cond!='')
	{
		$query_csv=$query_csv.' and'.$kp_cond;
	}
	if($bz_cond!='')
	{
		$query_csv=$query_csv.' and'.$bz_cond;
	}
		
		
		/*function CSVExport()
		{
			$sth_csv = $db_connect->query($query_csv);
			
			header("Content-type:application/csv");
			header("Content-Disposition:attachment;filename=data.csv");
			header("Pragma:no-cache");
			header("Expires:0");
			while($row=$sth_csv->fetch(PDO::FETCH_NUM)){
				echo '"'.stripslashes(implode('","', $row))."\"\n";
				}
				exit;
		}*/
		
		CSVExport();
		
		
	}
	
	}
else
{
?>
<script language="javascript">
alert('You cannot run a process on the database withough selecting a Result Format');
</script>
<?php
}
}
?>
<hr>
<br>
<center>ARSC DoD Supercomputing Resource Center</cetner><br>
<cetner>PO Box 756020, Fairbanks, AK 99775 | voice: 907-450-8600 | fax: 907-450-8603 | email: info@arsc.edu</center>
</body>
</html>