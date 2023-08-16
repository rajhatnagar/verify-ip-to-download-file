<!DOCTYPE html>
<html>
<head>
    <title>IP Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style> 
.container.mt-3 {
    padding: 100px 200px;
}
@media (max-width:1200px){
    .container.mt-3 {
    padding: 0px 0px;
}
}
.bg{
    background-color: aliceblue;
}
.bg h2{
    margin-top: 15px;
}
.bg {
    padding: 105px 150px;
    text-align: center;
    
}
.btn-primary{
    background-color: aliceblue;
    padding-top: 8px;
    height: 50px;
    width: 200px;
    color: #212529;
    font-size: 20px;
    border-color: #212529;
    margin-top: 10px;
}
.btn-primary:hover{
    background-color: #212529;
   
    color: #fff;
   
}
</style>
<body>
  
    <div class="container mt-3">
    <div class="bg">
        <p>Your public IP address: <span id="ipAddress"></span></p>
        <h2 id="message"></h2>
    </div>
  </div>

    <script>
      // Function to log user activity
         function logUserActivity(activity) {
            const userActivity = {
                ip: document.getElementById('ipAddress').textContent,
                browser: navigator.userAgent,
                device: navigator.platform,
                geoLocation: 'Not available' // You can use a geolocation API to get the actual location
            };

            // Send the userActivity data to the server
            fetch('log_activity.php', {
                method: 'POST',
                body: JSON.stringify(userActivity),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.text())
            .then(result => {
                console.log(result);
            })
            .catch(error => {
                console.error('Error logging activity:', error);
            });
        }
        // Function to fetch the public IP address
        function getPublicIP() {
            fetch('https://api.ipify.org?format=json')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('ipAddress').textContent = data.ip;

                    // Check if the IP is authorized
                    if (data.ip === '66.248.221.58') {
                        document.getElementById('message').innerHTML = "You are authorized person <br> <a href='Trial-File.xlsx' id='downloadButton' class='btn btn-primary' onclick='downloadFile()'>Download</a>";
                    } else {
                        document.getElementById('message').textContent = "You are not authorized";
                        setTimeout(function() {
                            redirectToURL();
                        }, 300);
                    }
                })
                .catch(error => {
                    console.error('Error fetching IP:', error);
                });
        }
        

        // Function to download the file
        function downloadFile() {
            var link = document.createElement('a');
            link.href = 'Trial-File.xlsx'; // Replace with the actual file URL
            link.click();
             const userActivity = {
                ip: document.getElementById('ipAddress').textContent,
                browser: navigator.userAgent,
                device: navigator.platform,
                geoLocation: 'Not available' // You can use a geolocation API to get the actual location
            };

            // Send the userActivity data to the server
            fetch('log_activity.php', {
                method: 'POST',
                body: JSON.stringify(userActivity),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.text())
            .then(result => {
                console.log(result);
            })
            .catch(error => {
                console.error('Error logging activity:', error);
            });
        }

        // Function to redirect to a URL
        function redirectToURL() {
            window.location.href = 'https://opt-data.online';
        }

        // Get the public IP when the page loads
        window.onload = function() {
            getPublicIP();
        };
        
                // Attach the logUserActivity function to the download button click event
        document.getElementById('downloadButton').addEventListener('click', function() {
            logUserActivity('Download Image Clicked');
            // You can trigger the download of the image file here
            // For example, if the image URL is 'image.jpg':
            // window.location.href = 'image.jpg';
        });
    </script>
    <script>
    function refreshPage(){
        window.location.reload();
    } 
    </script>

</body>
</html>
