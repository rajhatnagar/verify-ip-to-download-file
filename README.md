
# ﻿IP Auth to File Download With User Activity Logger

This is a simple example demonstrating how to log user activity using a combination of client-side JavaScript and server-side scripting. The project focuses on sending user activity data to the server for logging purposes.

## Overview

The application presents a basic webpage where users can interact with a "Download Image" button. Depending on their IP address, the user is shown a specific message. If the IP matches an authorized IP, the user is allowed to download an image. Otherwise, the user is redirected to a different website.

User activity, including IP address, browser details, device information, and a placeholder for geolocation, is sent to the server for logging each time the "Download Image" button is clicked.

## Features

- Fetches the user's public IP address using the IPify API.
- Displays a message and provides a download button based on the user's IP.
- Logs user activity data to the server using client-side JavaScript and an HTTP request.
- The server-side PHP script records the logged data to a log file (`user.log`).

## Prerequisites

- A web server with PHP support (e.g., Apache or Nginx).
- Basic knowledge of JavaScript, PHP, and server-side scripting.

## Usage

1. Clone the repository to your web server.
2. Ensure that the server-side script (`log_activity.php`) has the necessary permissions to write to the log file.
3. Access the `index.html` file through a web browser.

## Configuration

- Modify the authorized IP address in the JavaScript code if needed.
- Replace `'image.jpg'` with the actual image URL in the JavaScript code.
- Set up geolocation services for accurate location information.

## Security Considerations

- This example focuses on illustrating the concept of user activity logging and interaction between client-side and server-side components.
- In a real-world scenario, implement proper security measures, data validation, and authorization checks.

## Disclaimer

This example is intended for educational purposes only. Ensure that you follow best practices and adhere to relevant laws and regulations when logging user data.

