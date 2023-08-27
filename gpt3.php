// On page1.html
document.addEventListener('DOMContentLoaded', function() {
  const nameInput = document.getElementById('name');
  if (localStorage.getItem('name')) {
    nameInput.value = localStorage.getItem('name');
  }
  
  nameInput.addEventListener('input', function() {
    localStorage.setItem('name', nameInput.value);
  });
});
