document.addEventListener("DOMContentLoaded", () => {
  // Function to fetch and apply JSON data
  async function loadTranslations() {
    // Get language from URL parameters or default to "id"
    const urlParams = new URLSearchParams(window.location.search);
    const lang = urlParams.get("lang") || "id";

    try {
      const response = await fetch(`lang/${lang}.json`);

      // Handle response errors
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }

      const translations = await response.json();

      // Apply translations
      document.querySelectorAll("[data-i18n]").forEach((element) => {
        const key = element.getAttribute("data-i18n");
        if (translations[key]) {
          element.innerText = translations[key];
        }
      });
    } catch (error) {
      console.error("Failed to load translations:", error);
    }
  }

  // Load translations on page load
  loadTranslations();
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
});
