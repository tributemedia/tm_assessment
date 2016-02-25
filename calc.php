<?php

// ====================================
// = Calculate score and set results. =
// ====================================

$total = 0;

foreach ($score as $key => $value) {
	$total += (int) $q_weight[$key] * (int) $value;
}

$percent = ($total * 100)/$possible;
$results = '<h2>Here is your score: ' . $percent . '%</h2>';

switch ($percent) {
	
	case in_array($percent, range(0, 25)):
	$results .= '<p>Here is the cool stuff you should do, based on your score 25.</p>';
	break;
	
	case in_array($percent, range(26, 50)):
	$results .= '<p>Here is the cool stuff you should do, based on your score 50.</p>';
	break;
	
	case in_array($percent, range(51, 75)):
	$results .= '<p>Here is the cool stuff you should do, based on your score 75.</p>';
	break;
	
	case in_array($percent, range(76, 100)):
	$results .= '<p>Here is the cool stuff you should do, based on your score 100.</p>';
	break;
}
?>