<?php

// ========================================
// = Initialize variables for results.php =
// ========================================

// Set scores and total possible. Uncomment the number of lines needed.
// Add more lines as needed.

$score['1'] = $_POST['q1'];
$score['2'] = $_POST['q2'];
$score['3'] = $_POST['q3'];
$score['4'] = $_POST['q4'];
$score['5'] = $_POST['q5'];
$score['6'] = $_POST['q6'];
$score['7'] = $_POST['q7'];
$score['8'] = $_POST['q8'];
$score['9'] = $_POST['q9'];
$score['10'] = $_POST['q10'];
$score['11'] = $_POST['q11'];
$score['12'] = $_POST['q12'];
$score['13'] = $_POST['q13'];
$score['14'] = $_POST['q14'];
$score['15'] = $_POST['q15'];

// Set question scoring weights. Uncomment the number of lines needed.
// Add more lines as needed.

$q_weight['1'] = (int) $_POST['q1-weight'];
$q_weight['2'] = (int) $_POST['q2-weight'];
$q_weight['3'] = (int) $_POST['q3-weight'];
$q_weight['4'] = (int) $_POST['q4-weight'];
$q_weight['5'] = (int) $_POST['q5-weight'];
$q_weight['6'] = (int) $_POST['q6-weight'];
$q_weight['7'] = (int) $_POST['q7-weight'];
$q_weight['8'] = (int) $_POST['q8-weight'];
$q_weight['9'] = (int) $_POST['q9-weight'];
$q_weight['10'] = (int) $_POST['q10-weight'];
$q_weight['11'] = (int) $_POST['q11-weight'];
$q_weight['12'] = (int) $_POST['q12-weight'];
$q_weight['13'] = (int) $_POST['q13-weight'];
$q_weight['14'] = (int) $_POST['q14-weight'];
$q_weight['15'] = (int) $_POST['q15-weight'];

// Total possible points.

$possible = 0;
foreach ($q_weight as $multiplier) {
  $possible += 5 * $multiplier;
}

// Set Persona options.
// Match array key to persona key on Hubspot.

$personas['persona_2'] = 'Small to Medium sized business owner who is tired of doing it all myself and ready for some help to really grow.';
$personas['persona_3'] = 'Marketing professional mostly interested in learning how to improve my skills.';
$personas['persona_4'] = 'Owner or leader of an organization who knows that getting great help is what it takes to succeed.';
$personas['persona_5'] = 'I am a unique business professional and don\'t really fit with the other options.';
$personas['persona_9'] = 'I am an agency offering marketing or development services to my clients.';

?>