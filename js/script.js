function loadContent(languageFile) {
  fetch(languageFile)
    .then((response) => response.json())
    .then((data) => {
      // Update slider content
      document.getElementById("slider-title").innerHTML = data.slider.title;
      document.getElementById("slider-subtitle").innerHTML =
        data.slider.subtitle;
      document.getElementById("get-started").innerHTML = data.slider.getStarted;
      document.getElementById("contact-us").innerHTML = data.slider.contactUs;

      // Update steps content
      document.getElementById("step1-title").innerText = data.steps.step1.title;
      document.getElementById("step1-content").innerText =
        data.steps.step1.content;
      document.getElementById("step2-title").innerText = data.steps.step2.title;
      document.getElementById("step2-content").innerText =
        data.steps.step2.content;
      document.getElementById("step3-title").innerText = data.steps.step3.title;
      document.getElementById("step3-content").innerText =
        data.steps.step3.content;
      document.getElementById("bestProduct-title").innerHTML =
        data.bestProduct.title;
      document.getElementById("bestProduct-description").innerText =
        data.bestProduct.description;
      document.getElementById(`feature-${index + 1}-title`).innerText =
        feature.title;
      document.getElementById(`feature-${index + 1}-description`).innerText =
        feature.description;
      document.getElementById(`feature-${index + 1}-image`).src = feature.image;
      document.getElementById("headline").innerHTML = data.headline;
      document.getElementById("description").innerHTML = data.description;
    })
    .catch((error) => console.error("Error loading language file:", error));
}

// Load the appropriate language file
const languageFile = getLanguageFile();
loadContent(languageFile);
console.log("Loading content from:", languageFile);

// Determine the language file based on URL path
function getLanguageFile() {
  const urlParams = new URLSearchParams(window.location.search);
  const lang = urlParams.get("lang"); // Get the 'lang' parameter

  // Check the 'lang' parameter to determine the language
  switch (lang) {
    case "id":
      return "lang/id.json";
    default:
      return "lang/en.json"; // Default to English if no valid lang is found
  }
}

// Update meta and link tags if needed
document.addEventListener("DOMContentLoaded", () => {
  const baseUrl = new URLSearchParams(window.location.search);
  const ogUrlElement = document.getElementById("og-url");
  const canonicalLinkElement = document.getElementById("canonical");

  if (ogUrlElement && canonicalLinkElement) {
    const urlWithLanguage = `${window.location.origin}${
      window.location.pathname
    }?lang=${baseUrl.get("lang") || "en"}`;
    ogUrlElement.setAttribute("content", urlWithLanguage);
    canonicalLinkElement.setAttribute("href", urlWithLanguage);
    console.log("Meta and Link tags updated:", ogUrlElement);
  } else {
    console.error("Meta or link elements not found.");
  }
});

document.addEventListener("DOMContentLoaded", () => {
  // Function to fetch country code
  function fetchCountry(callback) {
    fetch("https://ipapi.co/json/")
      .then((response) => response.json())
      .then((data) => {
        callback(data.country);
      })
      .catch((error) => {
        console.error("Error fetching country data:", error);
        callback(""); // Return empty string if there's an error
      });
  }

  // Update URLs based on country code
  fetchCountry((countryCode) => {
    const baseUrl = new URLSearchParams(window.location.search);
    const lang = baseUrl.get("lang") || "en";
    const urlWithCountryCode = `${window.location.origin}${window.location.pathname}?lang=${lang}&country=${countryCode}`;

    // Update the meta and link tags
    const ogUrlElement = document.getElementById("og-url");
    const canonicalLinkElement = document.getElementById("canonical-link");

    if (ogUrlElement && canonicalLinkElement) {
      ogUrlElement.setAttribute("content", urlWithCountryCode);
      canonicalLinkElement.setAttribute("href", urlWithCountryCode);
      console.log("Meta and Link tags updated with country:", ogUrlElement);
    } else {
      console.error("Meta or link elements not found.");
    }

    // Add UTM parameters
    function getRandomElement(arr) {
      return arr[Math.floor(Math.random() * arr.length)];
    }
    const utmSources = ["meta", "referral"];
    const utmMediums = ["paid-social"];
    const utmCampaigns = ["30-bonus"];
    const utmContent = ["video_ad", "image_ad"];
    const urlParams = new URLSearchParams(window.location.search);
    console.log(window.location.search);
    if (!urlParams.has("lang")) {
      urlParams.set("lang", "en");
    }
    urlParams.set("country", countryCode.toLowerCase());
    urlParams.set("utm_source", getRandomElement(utmSources));
    urlParams.set(
      "utm_medium",
      urlParams.get("utm_source") === "meta" ? "paid-social" : "bd"
    );
    urlParams.set("utm_campaign", getRandomElement(utmCampaigns));
    urlParams.set("utm_content", getRandomElement(utmContent));

    // Update the URL in the browser without reloading the page
    const newUrl = window.location.pathname + "?" + urlParams.toString();
    window.history.replaceState({}, "", newUrl);
  });
});
