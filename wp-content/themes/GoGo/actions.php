<?php
header('Cache-Control: no-cache');
header('Content-type: application/json; charset=UTF-8');

function calc_duration($seconds) {
	$hours = (int) $seconds / 60 / 60 % 24;
	$mins =  (int) $seconds / 60 % 60;
	$secs =  (int) $seconds % 60;
	return str_pad($hours, 2, '0', STR_PAD_LEFT) . ":" . str_pad($mins, 2, '0', STR_PAD_LEFT) . ":" . str_pad($secs, 2, '0', STR_PAD_LEFT);
}

// Sanitize data
$goal_race = (int) $_GET['goal_race'];
$goal_time_h = (int) $_GET['goal_time_h'];
$goal_time_m = (int) $_GET['goal_time_m'];
$goal_time_s = (int) $_GET['goal_time_s'];

$master = array();
$master[1] = array('title'=>'Marathon', 	'zone'=>'ZONE 2.5', 		'c_factor'=>'26.21875000', 	'y_intercept'=>'278.8604830', 	'level_mult'=>'5.576607613', 'offset'=>'0');
$master[2] = array('title'=>'1/2 Marathon', 'zone'=>'ZONE 3', 			'c_factor'=>'13.10937500', 	'y_intercept'=>'264.4505908', 	'level_mult'=>'5.289219534', 'offset'=>'0');
$master[3] = array('title'=>'20K', 			'zone'=>'', 				'c_factor'=>'12.42742380', 	'y_intercept'=>'263.4505908', 	'level_mult'=>'5.289219534', 'offset'=>'-1');
$master[4] = array('title'=>'15K', 			'zone'=>'', 				'c_factor'=>'9.320567880', 	'y_intercept'=>'256.9212357', 	'level_mult'=>'5.159321487', 'offset'=>'0');
$master[5] = array('title'=>'10K/10000m', 	'zone'=>'ZONE 4 (10k)', 	'c_factor'=>'6.213711920', 	'y_intercept'=>'250.3918807', 	'level_mult'=>'5.029423439', 'offset'=>'0');
$master[6] = array('title'=>'5K/5000m ', 	'zone'=>'', 				'c_factor'=>'3.106855960', 	'y_intercept'=>'241.4016001', 	'level_mult'=>'4.828032002', 'offset'=>'0');
$master[7] = array('title'=>'3200m', 		'zone'=>'', 				'c_factor'=>'1.988387820', 	'y_intercept'=>'233.2154634', 	'level_mult'=>'4.613449482', 'offset'=>'1');
$master[8] = array('title'=>'3000m', 		'zone'=>'', 				'c_factor'=>'1.864113580', 	'y_intercept'=>'232.3328114', 	'level_mult'=>'4.613449482', 'offset'=>'0');
$master[9] = array('title'=>'3K Steeple', 	'zone'=>'', 				'c_factor'=>'1.864113580', 	'y_intercept'=>'251.1084914', 	'level_mult'=>'4.613449482', 'offset'=>'18.77567997');
$master[10] = array('title'=>'1 mile', 		'zone'=>'', 				'c_factor'=>'1.000000000', 	'y_intercept'=>'216.1968001', 	'level_mult'=>'4.313017426', 'offset'=>'0.5');
$master[11] = array('title'=>'1500m', 		'zone'=>'', 				'c_factor'=>'0.932056788', 	'y_intercept'=>'215.6968001', 	'level_mult'=>'4.313017426', 'offset'=>'0');
$master[12] = array('title'=>'800m', 		'zone'=>'', 				'c_factor'=>'0.497096954', 	'y_intercept'=>'196.6561415', 	'level_mult'=>'3.918967635', 'offset'=>'0');
$master[13] = array('title'=>'400m', 		'zone'=>'', 				'c_factor'=>'0.248548477', 	'y_intercept'=>'178.5398149', 	'level_mult'=>'3.603397282', 'offset'=>'0');
$master[14] = array('title'=>'100m', 		'zone'=>'', 				'c_factor'=>'0.062137119', 	'y_intercept'=>'171.9187240', 	'level_mult'=>'3.333534745', 'offset'=>'0');
$master[15] = array('title'=>'10000m XC', 	'zone'=>'', 				'c_factor'=>'6.213711920', 	'y_intercept'=>'253.8918807', 	'level_mult'=>'5.029423439', 'offset'=>'3.5');
$master[16] = array('title'=>'8000m XC', 	'zone'=>'ZONE 4 (8k XC)', 	'c_factor'=>'4.970969540', 	'y_intercept'=>'253.0000000', 	'level_mult'=>'5.029423439', 'offset'=>'0');
$master[17] = array('title'=>'6000m XC', 	'zone'=>'', 				'c_factor'=>'3.728227150', 	'y_intercept'=>'247.4016001', 	'level_mult'=>'4.828032002', 'offset'=>'6');
$master[18] = array('title'=>'5000m XC', 	'zone'=>'', 				'c_factor'=>'3.106855960', 	'y_intercept'=>'244.9016001', 	'level_mult'=>'4.828032002', 'offset'=>'3.5');

$master[100] = array('title'=>'rec', 			'zone'=>'ZONE 0', 			'c_factor'=>'1.000000000', 	'y_intercept'=>'474.0776256', 	'level_mult'=>'5.620264100', 'offset'=>'0');
$master[101] = array('title'=>'rec', 			'zone'=>'ZONE 1', 			'c_factor'=>'1.000000000', 	'y_intercept'=>'354.0776256', 	'level_mult'=>'5.620264100', 'offset'=>'0');
$master[102] = array('title'=>'aeTh', 			'zone'=>'ZONE 2', 			'c_factor'=>'1.000000000', 	'y_intercept'=>'294.0776256', 	'level_mult'=>'5.620264100', 'offset'=>'0');
$master[103] = array('title'=>'1/2 Marathon', 	'zone'=>'ZONE 3', 			'c_factor'=>'13.10937500', 	'y_intercept'=>'264.4505908', 	'level_mult'=>'5.289219534', 'offset'=>'0');
$master[104] = array('title'=>'10K/10000m', 	'zone'=>'ZONE 4 (10k)', 	'c_factor'=>'6.213711920', 	'y_intercept'=>'250.3918807', 	'level_mult'=>'5.029423439', 'offset'=>'0');
$master[105] = array('title'=>'8000m XC', 		'zone'=>'ZONE 4 (8k XC)', 	'c_factor'=>'4.970969540', 	'y_intercept'=>'253.0000000', 	'level_mult'=>'5.029423439', 'offset'=>'0');

$master[110] = array('title'=>'Marathon', 		'zone'=>'ZONE 2.5', 		'c_factor'=>'26.21875000', 	'y_intercept'=>'278.8604830', 	'level_mult'=>'5.576607613', 'offset'=>'0');

$c_factor = $master[$goal_race]['c_factor'];
$y_int = $master[$goal_race]['y_intercept'];
$level_mult = $master[$goal_race]['level_mult'];

$level = (((($goal_time_h * 60 * 60) + ($goal_time_m * 60) + $goal_time_s) / $c_factor) - $y_int) / $level_mult;

$results = array();

for ($i=1; $i<=18; $i++) {
	$total_time = calc_duration(ceil(($master[$i]['y_intercept'] + ($master[$i]['level_mult']*$level)) * $master[$i]['c_factor']));
	$mile_pace = calc_duration(ceil(($master[$i]['y_intercept'] + ($master[$i]['level_mult']*$level))));
	$results['goal_race_equivalents'][] = array('i'=>$i, 'total_time'=>$total_time, 'mile_pace'=>$mile_pace);
}

for ($i=0; $i<=1; $i++) {
	$time = calc_duration(ceil(($master[100 + $i]['y_intercept'] + ($master[100 + $i]['level_mult'] * $level))));
	$results['recovery_runs'][] = array('i'=>$i, 'time'=>$time);
}

for ($i=1; $i<=2; $i++) {
	$time = calc_duration(ceil(($master[100 + $i]['y_intercept'] + ($master[100 + $i]['level_mult'] * $level))));
	$results['moderate_runs'][] = array('i'=>$i, 'time'=>$time);
}

for ($i=1; $i<=3; $i++) {
	$time = calc_duration(ceil(($master[100 + $i]['y_intercept'] + ($master[100 + $i]['level_mult'] * $level))));
	$results['long_runs'][] = array('i'=>$i, 'time'=>$time);
}

for ($i=2; $i<=4; $i++) {
	$time = calc_duration(ceil(($master[100 + $i]['y_intercept'] + ($master[100 + $i]['level_mult'] * $level))));
	$results['tempo_runs'][] = array('i'=>$i, 'time'=>$time);
}

for ($i=1; $i<=18; $i++) {

	$time = ceil(($master[$i]['y_intercept'] + ($master[$i]['level_mult'] * $level)));

	if (in_array($i, array(8,9))) {
		$time = $time/(1609.344/1000);
	}
	elseif (in_array($i, array(10,11,12,13))) {
		$time = $time/(1609.344/400);
	}
	elseif (in_array($i, array(14))) {
		$time = $time/(1609.344/100);
	}

	$time_1 = calc_duration($time * 1.05);
	$time_2 = calc_duration($time * 1.02);
	$time_3 = calc_duration($time * 1.00);
	$time_4 = calc_duration($time * 0.98);
	$time_5 = calc_duration($time * 0.95);

	$results['training_goals'][] = array('i'=>$i, 'time_1'=>$time_1, 'time_2'=>$time_2, 'time_3'=>$time_3, 'time_4'=>$time_4, 'time_5'=>$time_5);
}


if (isset($_GET['callback'])) {
	echo $_GET["callback"];
}
echo "(" . json_encode($results) . ")";