#!/usr/bin/php
<?PHP
if ($argc == 1)
	return ;
$str = preg_replace("/^[ \t]+|[ \t]+$|[ \t]+(?=[ \t\n])/", "", $argv[1]);
echo "$str\n";
?>
