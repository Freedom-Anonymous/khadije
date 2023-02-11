<?php
define("root", dirname($_SERVER['SCRIPT_FILENAME']).'/' );

chdir(root);
$command  = 'git pull origin master 2>&1';
exec($command, $result);

$html = "<pre>";
$html .= getcwd();
$html .= $result;
$html .= "</pre>";


echo $html;

var_dump($result);
