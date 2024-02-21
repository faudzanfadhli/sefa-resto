const navbarNav = document.getElementsByClassName('navbar-nav')[0];
const sideMenuButton = document.getElementById('sideMenuButton');

const searchForm = document.getElementsByClassName('search-form')[0];
const searchBtn = document.getElementById('searchBtn');
const searchBox = document.getElementById('searchBox');

const shoppingCart = document.getElementsByClassName('shopping-cart')[0];
const cartBtn = document.getElementById('cartBtn');

// Toggle side menu button
sideMenuButton.onclick = e => {
  e.preventDefault();
  navbarNav.classList.toggle('active');
};

// Toggle search button
searchBtn.addEventListener('click', e => {
  e.preventDefault();
  searchForm.classList.toggle('active');
  searchBox.focus();
});

// Toggle cart button
cartBtn.addEventListener('click', e => {
  e.preventDefault();
  shoppingCart.classList.toggle('active');
});

// Click outside the element to dismiss
document.addEventListener('click', function(e) {
  if (!sideMenuButton.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove('active');
  }

  if (!searchBtn.contains(e.target) && !searchForm.contains(e.target)) {
    searchForm.classList.remove('active');
  }

  if (!cartBtn.contains(e.target) && !shoppingCart.contains(e.target)) {
    shoppingCart.classList.remove('active');
  }
});
