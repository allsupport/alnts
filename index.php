<script>
document.addEventListener("DOMContentLoaded", function () {
    let cookiePopup = document.createElement("div");
    cookiePopup.innerHTML = `
        <div id="cookieConsent" style="
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0,0,0,0.8);
            color: white;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            width: 90%;
            max-width: 400px;
            z-index: 1000;">
            <p>This website uses cookies to personalize content and ads, provide social media features, and analyze our traffic. By clicking Accept, you agree to our <a href='/privacy-policy' style='color:#00f;'>Privacy Policy</a>.</p>
            <button id="acceptCookies" style="background: #007bff; color: white; border: none; padding: 10px 20px; cursor: pointer;">Accept</button>
        </div>
    `;
    document.body.appendChild(cookiePopup);

    document.getElementById("acceptCookies").addEventListener("click", function () {
        document.getElementById("cookieConsent").style.display = "none";
    });
});
</script>
