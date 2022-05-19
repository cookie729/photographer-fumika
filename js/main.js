'use strict'

new LuminousGallery(document.querySelectorAll(".gallery"));

const category = document.querySelector('.category-menu');
const nav = document.querySelector('.category-nav');
category.addEventListener('click', () => {
  nav.classList.toggle('open-menu');
});
