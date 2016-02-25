<?php

// =========================
// = results.php variables =
// =========================

// Set scores and total possible. Uncomment the number of lines needed.
// Add more lines as needed.

$score['1'] = $_POST['q1'];
$score['2'] = $_POST['q2'];
// $score['3'] = $_POST['q3'];
// $score['4'] = $_POST['q4'];
// $score['5'] = $_POST['q5'];
// $score['6'] = $_POST['q6'];
// $score['7'] = $_POST['q7'];
// $score['8'] = $_POST['q8'];
// $score['9'] = $_POST['q9'];
// $score['10'] = $_POST['q10'];

$possible = 15;

// Set question scoring weights. Uncomment the number of lines needed.
// Add more lines as needed.

$q_weight['1'] = (int) $_POST['q1-weight'];
$q_weight['2'] = (int) $_POST['q2-weight'];
// $q_weight['3'] = (int) $_POST['q3-weight'];
// $q_weight['4'] = (int) $_POST['q4-weight'];
// $q_weight['5'] = (int) $_POST['q5-weight'];
// $q_weight['6'] = (int) $_POST['q6-weight'];
// $q_weight['7'] = (int) $_POST['q7-weight'];
// $q_weight['8'] = (int) $_POST['q8-weight'];
// $q_weight['9'] = (int) $_POST['q9-weight'];
// $q_weight['10'] = (int) $_POST['q10-weight'];