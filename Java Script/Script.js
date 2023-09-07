let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.Header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".reviews-slider", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    spaceBetween: 20,
    autoHeight: true,
    grabCursor:true,
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
        
      },
    },
  });
  // JavaScript
function toggleNav() {
    const menu = document.querySelector('.main-menu');
    menu.classList.toggle('active');
  }
// JavaScript
function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth' // For smooth scrolling
    });
  }
// JavaScript
var swiper = new Swiper(".reviews-slider", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    spaceBetween: 20,
    autoHeight: true,
    grabCursor: true,
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
// JavaScript (simplified without actual data)
const toursData = [
    {
      imgSrc: "image1.jpg",
      title: "Tour 1",
      description: "Description for Tour 1",
    },
    // Add more tour data objects here
  ];
  
  const toursContainer = document.querySelector(".upcoming-space-tours");
  
  toursData.forEach((tour) => {
    const tourElement = document.createElement("div");
    tourElement.classList.add("tour");
    tourElement.innerHTML = `
      <img src="${tour.imgSrc}" alt="${tour.title}" />
      <h3>${tour.title}</h3>
      <p>${tour.description}</p>
    `;
    toursContainer.appendChild(tourElement);
  });
        