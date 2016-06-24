<?php

$step1 = 'yes';
$step2 = 'yes';
$finished = 'yes';
$page_name = 'Assessment-Results';
$page_url = 'http://assessment.tributemedia.com/tm_assessment/results.php';
$persona = $_POST['persona'];
$budget = $_POST['budget'];
$tuesday_tips = $_POST['tuesday-tips'] == 'on' ? 'Yes' : 'No';
$events = $_POST['events'] == 'on' ? 'Yes' : 'No';
$call = $_POST['call'] == 'on' ? 'Yes' : 'No';
$phone = $_POST['phone'];
$percent = $_POST['score'];

include 'post-vars.php';
//header('Location: https://www.tributemedia.com/thank-you-self-assessment');
//include 'hs-submit.php';
//exit;
?>

