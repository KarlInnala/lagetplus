<?php
// 1. Hämta CPU-belastning (fungerar på Linux/Google Cloud)
$load = sys_getloadavg();
$cpuUsage = round($load[0] * 100, 2); // 1-minuts medelvärde i %

// 2. Hämta RAM-minne
$free = shell_exec('free');
$free = (string)trim($free);
$free_arr = explode("\n", $free);
$mem = explode(" ", $free_arr[1]);
$mem = array_filter($mem);
$mem = array_merge($mem);
$memoryUsage = round($mem[2] / $mem[1] * 100, 2); // Använt RAM i %

// 3. Hämta Upptid (hur länge servern kört utan krasch)
$uptime = shell_exec('uptime -p');

// 4. Skapa lite "LagetPay-data" (här kan du senare hämta från din MySQL)
$totalOrtugar = 125840 + rand(1, 100); // Fejkad live-ström för skryt
$activeBeavers = rand(5, 12); // Antal "aktiva" processer
?>
