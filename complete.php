<?php

$step1 = 'yes';
$step2 = 'yes';
$finished = 'yes';
$page_name = 'Assessment-Results';
$page_url = 'http://assessment.tributemedia.com/results.php';
$persona = $_POST['persona'];
$budget = $_POST['budget'];
$tuesday_tips = $_POST['tuesday-tips'] == 'on' ? 'Yes' : 'No';
$events = $_POST['events'] == 'on' ? 'Yes' : 'No';
$call = $_POST['call'] == 'on' ? 'Yes' : 'No';

include 'post-vars.php';
header('Location: https://www.tributemedia.com/');
include 'hs-submit.php';
exit;

?>

