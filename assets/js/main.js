// Initialize AOS (Animate On Scroll)
AOS.init({
  duration: 800,
  easing: "ease-in-out",
  once: true,
});

// Mobile Navigation Toggle
const navToggle = document.getElementById("navToggle");
const navMenu = document.querySelector(".md\\:flex");

if (navToggle && navMenu) {
  navToggle.addEventListener("click", () => {
    navMenu.classList.toggle("hidden");
    navMenu.classList.toggle("flex");
    navMenu.classList.toggle("flex-col");
    navMenu.classList.toggle("absolute");
    navMenu.classList.toggle("top-full");
    navMenu.classList.toggle("left-0");
    navMenu.classList.toggle("w-full");
    navMenu.classList.toggle("bg-white");
    navMenu.classList.toggle("shadow-md");
    navMenu.classList.toggle("p-4");
  });

  // Close mobile menu when clicking outside
  document.addEventListener("click", (e) => {
    if (!navToggle.contains(e.target) && !navMenu.contains(e.target)) {
      navMenu.classList.add("hidden");
      navMenu.classList.remove(
        "flex",
        "flex-col",
        "absolute",
        "top-full",
        "left-0",
        "w-full",
        "bg-white",
        "shadow-md",
        "p-4"
      );
    }
  });
}

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
      // Close mobile menu after clicking
      navMenu.classList.add("hidden");
      navMenu.classList.remove(
        "flex",
        "flex-col",
        "absolute",
        "top-full",
        "left-0",
        "w-full",
        "bg-white",
        "shadow-md",
        "p-4"
      );
    }
  });
});

// Form validation
const contactForm = document.querySelector("form");
if (contactForm) {
  contactForm.addEventListener("submit", function (e) {
    e.preventDefault();

    // Basic form validation
    const name = this.querySelector('input[name="name"]').value;
    const email = this.querySelector('input[name="email"]').value;
    const message = this.querySelector('textarea[name="message"]').value;

    if (!name || !email || !message) {
      alert("Please fill in all required fields");
      return;
    }

    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert("Please enter a valid email address");
      return;
    }

    // If validation passes, submit the form
    this.submit();
  });
}

// Add scroll-based animations
window.addEventListener("scroll", () => {
  const navbar = document.querySelector("nav");
  if (window.scrollY > 50) {
    navbar.classList.add("bg-white/95", "shadow-md");
    navbar.classList.remove("bg-white");
  } else {
    navbar.classList.remove("bg-white/95", "shadow-md");
    navbar.classList.add("bg-white");
  }
});

// SLIDER LOGIC
const sliderImages = [
  "assets/images/slider1.jpg",
  "assets/images/slider2.jpg",
  "assets/images/slider3.jpg",
  "assets/images/slider4.jpg",
  "assets/images/slider5.jpg",
];
let sliderIndex = 0;
let sliderInterval = null;

const sliderImage = document.getElementById("sliderImage");
const sliderDots = document.querySelectorAll(".slider-dot");
const sliderPrev = document.getElementById("sliderPrev");
const sliderNext = document.getElementById("sliderNext");

function showSlider(idx) {
  sliderIndex = (idx + sliderImages.length) % sliderImages.length;
  sliderImage.src = sliderImages[sliderIndex];
  sliderDots.forEach((dot, i) => {
    dot.classList.toggle("bg-gray-400", i === sliderIndex);
    dot.classList.toggle("bg-gray-300", i !== sliderIndex);
  });
}

function nextSlider() {
  showSlider(sliderIndex + 1);
}
function prevSlider() {
  showSlider(sliderIndex - 1);
}

sliderNext &&
  sliderNext.addEventListener("click", () => {
    nextSlider();
    resetSliderInterval();
  });
sliderPrev &&
  sliderPrev.addEventListener("click", () => {
    prevSlider();
    resetSliderInterval();
  });
sliderDots.forEach((dot, i) => {
  dot.addEventListener("click", () => {
    showSlider(i);
    resetSliderInterval();
  });
});

function startSliderInterval() {
  sliderInterval = setInterval(nextSlider, 4000);
}
function resetSliderInterval() {
  clearInterval(sliderInterval);
  startSliderInterval();
}
if (sliderImage) {
  showSlider(0);
  startSliderInterval();
}

// --- IG MODAL CODE WRAPPED IN DOMContentLoaded ---
document.addEventListener("DOMContentLoaded", function () {
  const modalImages = [
    "assets/images/hero-model.png", // Hero image as first
    "assets/images/ig1.jpg",
    "assets/images/ig2.jpg",
    "assets/images/ig3.jpg",
    "assets/images/ig4.jpg",
    "assets/images/ig5.jpg",
    "assets/images/ig6.jpg",
  ];
  const igModal = document.getElementById("igModal");
  const igModalImg = document.getElementById("igModalImg");
  const igModalClose = document.getElementById("igModalClose");
  const igModalPrev = document.getElementById("igModalPrev");
  const igModalNext = document.getElementById("igModalNext");
  let igModalIndex = 0;

  function openIgModal(idx) {
    igModalIndex = idx;
    igModalImg.src = modalImages[igModalIndex];
    igModal.classList.remove("hidden");
    console.log("Modal opened, index:", igModalIndex);
  }
  function closeIgModal() {
    igModal.classList.add("hidden");
    igModalImg.src = "";
    console.log("Modal closed");
  }
  function nextIgModal() {
    igModalIndex = (igModalIndex + 1) % modalImages.length;
    igModalImg.src = modalImages[igModalIndex];
    console.log("Next image, index:", igModalIndex);
  }
  function prevIgModal() {
    igModalIndex = (igModalIndex - 1 + modalImages.length) % modalImages.length;
    igModalImg.src = modalImages[igModalIndex];
    console.log("Prev image, index:", igModalIndex);
  }

  // Add click event to hero image
  const heroImg = document.querySelector(".hero-modal-img");
  if (heroImg) {
    heroImg.style.cursor = "pointer";
    heroImg.addEventListener("click", function () {
      console.log("Hero image clicked");
      openIgModal(0);
    });
  } else {
    alert(
      "Hero image not found! Pastikan class hero-modal-img ada di gambar hero."
    );
    console.error("Hero image not found!");
  }

  // Add click event to gallery images (shift index by 1)
  const igGalleryImgs = document.querySelectorAll(".ig-gallery-img");
  if (igGalleryImgs.length === 0) {
    alert(
      "Gambar galeri Instagram tidak ditemukan! Pastikan class ig-gallery-img ada di gambar galeri."
    );
    console.error("Instagram gallery images not found!");
  }
  igGalleryImgs.forEach((img, i) => {
    img.style.cursor = "pointer";
    img.addEventListener("click", function () {
      console.log("Gallery image clicked, index:", i + 1);
      openIgModal(i + 1);
    });
  });

  igModalClose && igModalClose.addEventListener("click", closeIgModal);
  igModalNext && igModalNext.addEventListener("click", nextIgModal);
  igModalPrev && igModalPrev.addEventListener("click", prevIgModal);

  // Close modal on overlay click
  igModal &&
    igModal.addEventListener("click", (e) => {
      if (e.target === igModal) closeIgModal();
    });
  // Keyboard navigation
  window.addEventListener("keydown", (e) => {
    if (igModal.classList.contains("hidden")) return;
    if (e.key === "Escape") closeIgModal();
    if (e.key === "ArrowRight") nextIgModal();
    if (e.key === "ArrowLeft") prevIgModal();
  });

  // Fallback: force open modal if any .hero-modal-img or .ig-gallery-img is clicked (for troubleshooting)
  document.body.addEventListener("click", function (e) {
    if (e.target.classList.contains("hero-modal-img")) {
      console.log("[Fallback] Hero image clicked");
      openIgModal(0);
    }
    if (e.target.classList.contains("ig-gallery-img")) {
      const imgs = Array.from(document.querySelectorAll(".ig-gallery-img"));
      const idx = imgs.indexOf(e.target);
      if (idx !== -1) {
        console.log("[Fallback] Gallery image clicked, index:", idx + 1);
        openIgModal(idx + 1);
      }
    }
  });
});
