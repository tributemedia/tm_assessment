<?php

// ====================================
// = Calculate score and set results. =
// ====================================

$total = 0;

foreach ($score as $key => $value) {
	$total += (int) $q_weight[$key] * (int) $value;
}

$percent = ($total * 100)/$possible;
$percent = round($percent, 0, PHP_ROUND_HALF_UP);

$results = '<h2>You scored a ' . $percent . '%</h2>';

switch ($percent) {
	
	case in_array($percent, range(1, 10)):
	$results_body = '<p>Based on your score being in the range of 1 - 10, this is your result. Lorem ipsum dolor sit amet, et libris principes mei. Pri lorem placerat no, sed accusam tincidunt vituperata ea. Copiosae tincidunt quo ut.</p>';
	break;
	
	case in_array($percent, range(11, 20)):
	$results_body = '<p>Based on your score being in the range of 11 - 20, this is your result. Lorem ipsum dolor sit amet, et libris principes mei. Pri lorem placerat no, sed accusam tincidunt vituperata ea. Copiosae tincidunt quo ut.</p>';
	break;
	
	case in_array($percent, range(21, 30)):
	$results_body = '<p>Based on your score being in the range of 21 - 30, this is your result. Lorem ipsum dolor sit amet, et libris principes mei. Pri lorem placerat no, sed accusam tincidunt vituperata ea. Copiosae tincidunt quo ut.</p>';
	break;
	
	case in_array($percent, range(31, 40)):
	$results_body = '<p>Based on your score being in the range of 31 - 40, this is your result. Lorem ipsum dolor sit amet, et libris principes mei. Pri lorem placerat no, sed accusam tincidunt vituperata ea. Copiosae tincidunt quo ut.</p>';
	break;
  
	case in_array($percent, range(41, 50)):
	$results_body = '<p>Based on your score being in the range of 41 - 50, this is your result. Lorem ipsum dolor sit amet, et libris principes mei. Pri lorem placerat no, sed accusam tincidunt vituperata ea. Copiosae tincidunt quo ut.</p>';
	break;
  
	case in_array($percent, range(51, 60)):
	$results_body = '<p>Based on your score being in the range of 51 - 60, this is your result. Lorem ipsum dolor sit amet, et libris principes mei. Pri lorem placerat no, sed accusam tincidunt vituperata ea. Copiosae tincidunt quo ut.</p>';
	break;
  
	case in_array($percent, range(61, 70)):
	$results_body = '<p>Based on your score being in the range of 61 - 70, this is your result. Lorem ipsum dolor sit amet, et libris principes mei. Pri lorem placerat no, sed accusam tincidunt vituperata ea. Copiosae tincidunt quo ut.</p>';
	break;
  
	case in_array($percent, range(71, 80)):
	$results_body = '<p>Based on your score being in the range of 71 - 80, this is your result. Lorem ipsum dolor sit amet, et libris principes mei. Pri lorem placerat no, sed accusam tincidunt vituperata ea. Copiosae tincidunt quo ut.</p>';
	break;
  
	case in_array($percent, range(81, 90)):
	$results_body = '<p>Based on your score being in the range of 81 - 90, this is your result. Lorem ipsum dolor sit amet, et libris principes mei. Pri lorem placerat no, sed accusam tincidunt vituperata ea. Copiosae tincidunt quo ut.</p>';
	break;
  
	case in_array($percent, range(91, 100)):
	$results_body = '<p>Based on your score being in the range of 91 - 100, this is your result. Lorem ipsum dolor sit amet, et libris principes mei. Pri lorem placerat no, sed accusam tincidunt vituperata ea. Copiosae tincidunt quo ut.</p>';
	break;
}
?>