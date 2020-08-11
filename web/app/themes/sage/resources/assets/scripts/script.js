
function OpenMenu() {
  document.getElementById('mobile').classList.toggle('nav__items_active');
  if(document.getElementById('mobile').classList.contains('nav__items_active')) {
    document.body.style.overflow = 'hidden';
  }
  else {
    document.body.style.overflow = 'auto';
  }
}
