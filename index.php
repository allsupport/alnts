<script>
    // Define redirection URLs
    var usaCanadaUrl = "https://example-usa-canada.com"; // URL for USA & Canada
    var globalUrl = "https://example-global.com"; // URL for all other countries

    // Fetch user location using IP geolocation API
    fetch('https://ipapi.co/json/')
        .then(response => response.json())
        .then(data => {
            var userCountry = data.country_code; // Get country code (e.g., "US", "CA")
            
            // Redirect based on country
            if (userCountry === "US" || userCountry === "CA") {
                window.location.href = usaCanadaUrl;
            } else {
                window.location.href = globalUrl;
            }
        })
        .catch(error => console.error('Geolocation API error:', error));
</script>
