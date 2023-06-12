## Network Tools Web Application

This web application provides a set of network diagnostic tools to assist users in troubleshooting network-related issues. It includes features such as checking the user's IP address, performing ping operations, scanning with Nmap, and discovering network clients.

### Requirements
- PHP (>= 5.6) with Apache or Nginx web server
- Nmap (for Nmap scanning feature)
- Internet connectivity for real-time functionality

### Setup Instructions
1. Clone the repository or download the source code.
2. Place the files in the web server's document root directory.
3. Ensure PHP is installed and configured correctly on the server.
4. Install Nmap on the server if not already installed.
5. Ensure the server has internet connectivity for real-time functionality.
6. Access the application through the web browser using the server's URL.

### Usage
1. Open the web application in a web browser.
2. The "My IP" section will display the user's IP address.
3. Use the "Ping IP" section to enter an IP address to ping and click the "Ping" button.
4. The "Nmap Scan" section allows entering a target IP or range to perform an Nmap scan by clicking the "Scan" button.
5. Click the "Discover Clients" button to initiate the discovery of network clients.

Note: Some features require appropriate permissions and configurations to function correctly.

### Troubleshooting
If encountering issues, ensure:
- The web server and PHP are correctly configured.
- Nmap is installed and accessible from the server.
- The server has internet connectivity for real-time functionality.

For further assistance, please refer to the documentation or seek help from the project contributors.

### License
This project is licensed under the [MIT License](LICENSE).
