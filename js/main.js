'use strict'

new LuminousGallery(document.querySelectorAll(".gallery"));

const category = document.querySelector('.category-menu');
const nav = document.querySelector('.category-nav');
category.addEventListener('click', () => {
  nav.classList.toggle('open-menu');
});

const btn = document.querySelector('.btn-menu');
const sp_nav = document.querySelector('.sp-main-nav');
btn.addEventListener('click', () => {
  sp_nav.classList.toggle('open-menu');
});