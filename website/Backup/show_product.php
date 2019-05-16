<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $_GET['link']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
curl_close($ch);
echo $output;
?>
