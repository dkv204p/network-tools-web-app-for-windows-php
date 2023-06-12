# Network Tools Documentation

This documentation provides an overview of the Network Tools web page, which allows users to perform various network-related tasks such as obtaining their IP address, pinging IP addresses, scanning with Nmap, and discovering clients on the network.

## Table of Contents

- [Introduction](#introduction)
- [Requirements](#requirements)
- [Setup Instructions](#setup-instructions)
- [Usage](#usage)
- [License](#license)

## Introduction

The Network Tools web page is a collection of utilities that enable users to perform common network tasks conveniently from their browser. It provides a user-friendly interface for tasks like retrieving the local IP address, pinging remote IP addresses, scanning with Nmap, and discovering clients on the network.

## Requirements

To use the Network Tools web page, ensure you have the following:

- A web browser with JavaScript enabled.
- A web server environment with PHP support (for retrieving the local IP address).

## Setup Instructions

Follow the steps below to set up the Network Tools web page:

1. Clone the repository or download the source code.
2. Place the files in your web server's document root directory.
3. Ensure that PHP is properly configured and enabled on your web server.
4. Open the web page in your browser by accessing the URL where you placed the files.

## Usage

The Network Tools web page provides the following functionalities:

### My IP

- Displays the local IP address of the machine running the web page.

### Ping IP

- Enter an IP address in the input field.
- Click the "Ping" button to initiate the ping operation.
- The result of the ping operation will be displayed below the button.

### Nmap Scan

- Enter a target IP address or range in the input field.
- Click the "Scan" button to initiate the Nmap scan.
- The result of the scan will be displayed below the button.

### Discover Clients

- Click the "Discover" button to initiate the process of discovering clients on the network.
- The result, which includes the list of connected clients, will be displayed below the button.

## License

The Network Tools web page is licensed under the [MIT License](https://opensource.org/licenses/MIT). Please see the [LICENSE](LICENSE) file for more details.

Feel free to modify and customize the code to suit your needs.
