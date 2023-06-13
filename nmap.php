<?php
    $ipAddress = $_GET['ip'];
    $scanType = $_GET['scanType'];

    // Replace the path with the actual path to your Nmap installation
    $nmapPath = '"C:\Program Files (x86)\Nmap\nmap.exe"';

    $command = $nmapPath . ' ' . $scanType . ' ' . $ipAddress;
    $scanResult = exec($command, $output, $returnCode);

    if ($returnCode === 0) {
        $scanOutput = implode("\n", $output);
        echo nl2br($scanOutput);
    } else {
        echo 'Error: Nmap command failed';
    }
?>
