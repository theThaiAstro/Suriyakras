'use strict';

function showMenuContent() {
  if (!document.getElementById('site-header-menu-content').style.display || document.getElementById('site-header-menu-content').style.display === 'none') {
    document.getElementById('site-header-menu-content').style.display = 'block';
  } else {
    document.getElementById('site-header-menu-content').style.display = 'none';
  }
}

window.addEventListener('click', e => {
  if (!document.getElementById('site-header-menu-content').contains(e.target) && e.target.id !== 'site-header-menu') {
    document.getElementById('site-header-menu-content').style.display = 'none';
  }
});
