addEventListener("fetch", event => {
  event.respondWith(handleRequest(event.request));
});

async function handleRequest(request) {
  let country = request.headers.get("CF-IPCountry");

  if (country === "US") {
    return Response.redirect("https://huntop001.z13.web.core.windows.net/", 301);
  } else if (country === "CA") {
    return Response.redirect("https://huntop001.z13.web.core.windows.net/", 301);
  } else {
    return Response.redirect("https://www.allrecipes.com/", 301);
  }
}
