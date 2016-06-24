<?php

// ====================================
// = Calculate score and set results. =
// ====================================

$total = 0;
$calc_score = array();

foreach ($score as $key => $value) {
  $total += (int) $q_weight[$key] * (int) $value;
  $calc_score[$key] = (int) $q_weight[$key] * (int) $value;
}

$percent = ($total * 100)/$possible;
$percent = round($percent, 0, PHP_ROUND_HALF_UP);

$results = '<h2>You scored a ' . $percent . '/100</h2>';

switch ($percent) {
  
  case in_array($percent, range(1, 10)):
  $results_body = "<h3>YIKES!!!</h3><p>You know it; we know it; anyone who has ever visited your website knows it: You're a mess online. Get help today!</p><div class='assessment-image-wrapper image-one center-align'><div class='the-image'></div></div><p>Finalize your assessment by submitting this final form so we can help you!</p>";
  break;
  
  case in_array($percent, range(11, 20)):
  $results_body = "<h3>YIKES!!!</h3><p>You know it; we know it; anyone who has ever visited your website knows it: You're a mess online. Get help today!</p><div class='assessment-image-wrapper image-two center-align'><div class='the-image'></div></div><p>Finalize your assessment by submitting this final form so we can help you!</p>";
  break;
  
  case in_array($percent, range(21, 30)):
  $results_body = "<h3>YIKES!!!</h3><p>You know it; we know it; anyone who has ever visited your website knows it: You're a mess online. Get help today!</p><div class='assessment-image-wrapper image-three center-align'><div class='the-image'></div></div><p>Finalize your assessment by submitting this final form so we can help you!</p>";
  break;
  
  case in_array($percent, range(31, 40)):
  $results_body = "<h3>YIKES!!!</h3><p>You know it; we know it; anyone who has ever visited your website knows it: You're a mess online. Get help today!</p><div class='assessment-image-wrapper image-four center-align'><div class='the-image'></div></div><p>Finalize your assessment by submitting this final form so we can help you!</p>";
  break;
  
  case in_array($percent, range(41, 50)):
  $results_body = "<h3>YIKES!!!</h3><p>You know it; we know it; anyone who has ever visited your website knows it: You're a mess online. Get help today!</p><div class='assessment-image-wrapper image-five center-align'><div class='the-image'></div></div><p>Finalize your assessment by submitting this final form so we can help you!</p>";
  break;
  
  case in_array($percent, range(51, 60)):
  $results_body = "<h3>YOU'RE NOT A COMPLETE FAILURE</h3><p>But you still need an INTER-net-VENTION. Your website isn't doing you any favors generating leads, in fact, it is probably hurting you. Get help today!</p><div class='assessment-image-wrapper image-six center-align'><div class='the-image'></div></div><p>Finalize your assessment by submitting this final form so we can help you!</p>";
  break;
  
  case in_array($percent, range(61, 70)):
  $results_body = "<h3>YOU'RE NOT A COMPLETE FAILURE</h3><p>But you still need an INTER-net-VENTION. Your website isn't doing you any favors generating leads, in fact, it is probably hurting you. Get help today!</p><div class='assessment-image-wrapper image-seven center-align'><div class='the-image'></div></div><p>Finalize your assessment by submitting this final form so we can help you!</p>";
  break;
  
  case in_array($percent, range(71, 80)):
  $results_body = "<h3>BARELY GETTING BY</h3><p>You may have mastered some aspects of web strategy, but are lacking in others. Or you're just all-around mediocre. Be better. We believe in you!</p><div class='assessment-image-wrapper image-eight center-align'><div class='the-image'></div></div><p>Finalize your assessment by submitting this final form so we can help you!</p>";
  break;
  
  case in_array($percent, range(81, 90)):
  $results_body = "<h3>WEB SWAG ON FLEEK</h3><p>That's how the kids say you're pretty darn neat-o online. You are awesome, and if you want to be even awesome-r, get our Tuesday Tips!</p><div class='assessment-image-wrapper image-nine center-align'><div class='the-image'></div></div><p>Finalize your assessment by submitting this final form and make to get notificed when we have events or send out our tips!</p>";
  break;
  
  case in_array($percent, range(91, 100)):
  $results_body = "<h3>YOU ARE THE SUPREME RULER OF THE INTERNET.</h3><p>We must have built your web strategy! If not, maybe you should still get in touch with us anyway and we can learn a thing or two from you.</p><div class='assessment-image-wrapper image-ten center-align'><div class='the-image'></div></div><p>Finalize your assessment by submitting this final form and make to get notificed when we have events or send out our tips!</p>";
  break;
}
?>