# Network Tools

This is a web page that provides various network tools.

## Required Software

Before using the Network Tools, ensure that the following software is installed:

- Web server software (e.g., Apache, Nginx) to host the web page and execute server-side scripts (e.g., PHP).
- PHP (Hypertext Preprocessor) to handle server-side scripting. The version required may depend on the specific features used in the web page.
- Nmap (Network Mapper) for performing network scans. Make sure Nmap is installed and accessible from the command line.
- Tailwind CSS for styling the web page. You can include the Tailwind CSS library using a CDN (Content Delivery Network) or host the CSS file locally.

## My IP

Displays the IP address of the user.

### Usage

No input required.

## Ping IP

Allows you to ping a specific IP address.

### Usage

1. Enter the IP address you want to ping in the input field.
2. Click the "Ping" button.
3. The result of the ping operation will be displayed below the input field.

#### Troubleshooting

- If you encounter an error message, make sure the IP address you entered is valid and reachable.
- Check your internet connection to ensure you have an active network connection.
- If the issue persists, try pinging a different IP address to see if it's specific to the entered IP.

## Nmap Scan

Performs an Nmap scan on a target IP or range.

### Usage

1. Enter the target IP or range in the input field.
2. Select the desired scan type from the dropdown menu.
3. Click the "Scan" button.
4. The result of the Nmap scan will be displayed below the input field.

#### Troubleshooting

- Ensure that the target IP or range is valid and accessible from your network.
- Verify that you have proper permissions to perform an Nmap scan on the target IP or range.
- If the scan is taking too long or not completing, check your network connectivity and try again.

## Discover Clients

Discovers clients on the network.

### Usage

Click the "Discover" button.
The result of the discovery process will be displayed below the button.

#### Troubleshooting

- If the discovery process is not showing any results, ensure that you are connected to the correct network.
- Check if any firewalls or network security settings are blocking the discovery process.
- Try restarting your router or network devices if the issue persists.

## Additional Information

This web page uses Tailwind CSS for styling. The CSS file can be found at `assets/css/style.css`.

The following images are used:

- `apple-touch-icon.png` (180x180 pixels)
- `favicon-32x32.png` (32x32 pixels)
- `favicon-16x16.png` (16x16 pixels)

The web manifest file is located at `assets/images/site.webmanifest`.

## JavaScript Code

The web page also includes JavaScript code to handle user interactions and perform AJAX requests.

- The `ping-ip-button` element triggers a ping request to the specified IP address.
- The `nmap-scan-button` element triggers an Nmap scan with the specified IP address and scan type.
- The `discover-button` element triggers a discovery process.
