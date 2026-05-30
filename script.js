function toggle(el) {
  el.classList.toggle('active');
}

lucide.createIcons();

const chips = document.querySelectorAll(".chip");

chips.forEach(chip => {
  chip.addEventListener("click", () => {
    chip.classList.toggle("active");
  });
});

const form = document.getElementById("plannerForm");
const resultBox = document.getElementById("resultBox");
const btn = document.getElementById("generateBtn");
const toggleEl = document.getElementById("childrenToggle");

form.addEventListener("submit", function(e) {
  e.preventDefault();

  btn.classList.add("loading");
  btn.innerText = "Generating...";

  setTimeout(() => {
    generateItinerary();
    btn.classList.remove("loading");
    btn.innerText = "Generate Itinerary";
  }, 1200);
});

function generateItinerary() {
  const destination = document.getElementById("destination").value;
  const travelers = document.getElementById("travelers").value;
  const budget = document.getElementById("budget").value;
  const withChildren = toggleEl.classList.contains("active");

  const selectedChips = [];
  document.querySelectorAll(".chip.active").forEach(c => {
    selectedChips.push(c.innerText);
  });

  resultBox.classList.remove("hidden");

  resultBox.innerHTML = `
    <h3>Your Trip Plan ✨</h3>
    <p><strong>Destination:</strong> ${destination}</p>
    <p><strong>Travelers:</strong> ${travelers}</p>
    <p><strong>Budget:</strong> ${budget}</p>
    <p><strong>With Children:</strong> ${withChildren ? "Yes" : "No"}</p>
    <p><strong>Preferences:</strong> ${selectedChips.length ? selectedChips.join(", ") : "None"}</p>

    <hr style="margin:10px 0;">

    <p>📍 Day 1: Explore city landmarks</p>
    <p>🍽️ Day 2: Dining experience</p>
    <p>🎒 Day 3: Adventure activities</p>
  `;
}