// TEKNOFIX - interaksi halaman
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.device-choice').forEach(function (button) {
    button.addEventListener('click', function () {
      const device = button.dataset.device;
      if (device) window.location.href = 'keluhan.php?device=' + encodeURIComponent(device);
    });
  });
});

// Login/registrasi masih demo, belum memeriksa atau menyimpan akun ke database.
function loginUser(event) {
  event.preventDefault();
  alert('Login ini masih demo dan belum terhubung ke database.');
  window.location.href = 'index.php';
}
function showRegister(event) {
  event.preventDefault();
  const box = document.getElementById('registerBox');
  if (box) box.classList.toggle('hidden');
}
function registerUser(event) {
  event.preventDefault();
  alert('Registrasi ini masih demo dan belum menyimpan akun.');
}
