<?php
    $arpCommand = 'arp -a';
    $arpResult = shell_exec($arpCommand);

    $connectedClients = [];

    // Extract IP addresses from the ARP result
    $lines = explode("\n", $arpResult);
    foreach ($lines as $line) {
        $matches = [];
        if (preg_match('/\b(?:\d{1,3}\.){3}\d{1,3}\b/', $line, $matches)) {
            $ipAddress = $matches[0];
            $connectedClients[] = $ipAddress;
        }
    }

    if (!empty($connectedClients)) {
        $output = 'Connected clients:<br>' . implode('<br>', $connectedClients);
        echo $output;
    } else {
        echo 'No clients found.';
    }
?>
