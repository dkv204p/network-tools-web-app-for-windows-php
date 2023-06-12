<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Network Tools</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-800 text-white">
  <div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Network Tools</h1>

    <div class="mb-6">
      <label for="my-ip" class="block font-medium mb-2">My IP</label>
      <?php
      $myIP = getHostByName(getHostName());
      ?>
      <input type="text" id="my-ip" class="w-full bg-gray-700 text-white p-2 rounded" value="<?php echo $myIP; ?>" readonly>
    </div>

    <div class="mb-6">
      <label for="ping-ip" class="block font-medium mb-2">Ping IP</label>
      <div class="flex">
        <input type="text" id="ping-ip-input" class="w-full bg-gray-700 text-white p-2 rounded" placeholder="Enter IP address to ping">
        <button id="ping-ip-button" class="bg-blue-500 text-white px-4 py-2 ml-2 rounded">Ping</button>
      </div>
      <div id="ping-ip-result" class="mt-2"></div>
    </div>

    <div class="mb-6">
      <label for="nmap-scan" class="block font-medium mb-2">Nmap Scan</label>
      <div class="flex">
        <input type="text" id="nmap-scan-input" class="w-full bg-gray-700 text-white p-2 rounded" placeholder="Enter target IP or range">
        <button id="nmap-scan-button" class="bg-blue-500 text-white px-4 py-2 ml-2 rounded">Scan</button>
      </div>
      <div id="nmap-scan-result" class="mt-2"></div>
    </div>

    <div class="mb-6">
      <label for="discover-button" class="block font-medium mb-2">Discover Clients</label>
      <button id="discover-button" class="bg-blue-500 text-white px-4 py-2 rounded">Discover</button>
      <div id="discover-result" class="mt-2"></div>
    </div>


  </div>


<script>
  const pingIpButton = document.getElementById('ping-ip-button');
  const pingIpInput = document.getElementById('ping-ip-input');
  const pingIpResult = document.getElementById('ping-ip-result');

  pingIpButton.addEventListener('click', function() {
    const ipAddress = pingIpInput.value;
    pingIpResult.innerHTML = 'Pinging IP ' + ipAddress + '...';

    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          pingIpResult.innerHTML = xhr.responseText;
        } else {
          pingIpResult.innerHTML = 'Error: ' + xhr.status;
        }
      }
    };

    xhr.open('GET', 'ping.php?ip=' + ipAddress, true);
    xhr.send();
  });

  const nmapScanButton = document.getElementById('nmap-scan-button');
  const nmapScanInput = document.getElementById('nmap-scan-input');
  const nmapScanResult = document.getElementById('nmap-scan-result');

  nmapScanButton.addEventListener('click', function() {
    const ipAddress = nmapScanInput.value;
    nmapScanResult.innerHTML = 'Scanning IP ' + ipAddress + '...';

    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          nmapScanResult.innerHTML = xhr.responseText;
        } else {
          nmapScanResult.innerHTML = 'Error: ' + xhr.status;
        }
      }
    };

    xhr.open('GET', 'nmap.php?ip=' + ipAddress, true);
    xhr.send();
  });

  const discoverButton = document.getElementById('discover-button');
  const discoverResult = document.getElementById('discover-result');

  discoverButton.addEventListener('click', function() {
    discoverResult.innerHTML = 'Discovering clients...';

    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          discoverResult.innerHTML = xhr.responseText;
        } else {
          discoverResult.innerHTML = 'Error: ' + xhr.status;
        }
      }
    };

    xhr.open('GET', 'discover.php', true);
    xhr.send();
  });
</script>


</body>

</html>
