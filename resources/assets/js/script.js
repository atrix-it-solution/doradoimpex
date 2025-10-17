$(document).ready(function () {
  $(".banner-slider").slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 3000,
  });
});

// product page slider

$(".app-product-slider").slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  vertical: true,
  adaptiveHeight: true,
  autoplay: true,
  autoplaySpeed: 3000,
});

// service btn js
document.querySelectorAll(".service-btn").forEach((btn) => {
  btn.addEventListener("mouseenter", () => {
    // Remove active state from buttons
    document
      .querySelectorAll(".service-btn")
      .forEach((b) => b.classList.remove("active"));
    btn.classList.add("active");

    // Hide all images
    document
      .querySelectorAll(".image-box img")
      .forEach((img) => img.classList.add("d-none"));

    // Show target image
    const target = btn.getAttribute("data-target");
    document.querySelector(target).classList.remove("d-none");
  });
});

// product slider  test slider
$(".vertical-product-slider").slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  vertical: true,
  adaptiveHeight: true,
  autoplay: true,
  autoplaySpeed: 300,
});
