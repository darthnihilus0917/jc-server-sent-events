<?php
// header('Content-Type: text/event-stream');
// header('Cache-Control: no-cache');
header('Content-Type: text/event-stream');

$time = date('r');

$user = array("name"=>'JC', 'score'=> rand(100,999));

// echo "data: test: {$time}\n\n";
// echo "data: ". json_encode($user) ."\n\n";
echo "data: ". $_GET['test'] ."\n\n";
flush();

?>