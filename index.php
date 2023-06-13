<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Network Tools</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
  <link rel="manifest" href="assets/images/site.webmanifest">

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
        <select id="nmap-scan-type" class="bg-gray-700 text-white p-2 rounded ml-2">
          <option value="">Regular scan</option>
          <option value="-T4 -A -v">Intense Scan</option>
          <option value="-sS -sU -T4 -A -v">Intense Scan plus UDP</option>
          <option value="-p 1-65535 -T4 -A -v">Intense Scan, all TCP ports</option>
          <option value="-T4 -A -v -Pn">Intense Scan, no ping</option>
          <option value="-sn">Ping scan</option>
          <option value="-T4 -F">Quick scan</option>
          <option value="-sV -T4 -O -F --version-light">Quick scan plus</option>
          <option value="-T4 -A -v -Pn -sn --traceroute">Quick traceroute</option>
          <option value='-sS -sU -T4 -A -v -PE -PP -PS80,443 -PA3389 -PU40125 -PY -g 53 --script "default or (discovery and safe)"'>Slow comprehensive scan</option>
          <!-- Add more scan types as needed -->
        </select>
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

<script type="text/javascript">
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
  const scanType = document.getElementById('nmap-scan-type').value;
  nmapScanResult.innerHTML = 'Scanning IP ' + ipAddress + ' using ' + scanType + '...';

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

  xhr.open('GET', 'nmap.php?ip=' + ipAddress + '&scanType=' + scanType, true);
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
