const fileInput = document.getElementById('foto_produk');
const fileName = document.getElementById('file-name');

fileInput.addEventListener('change', function () {
  if (this.files.length > 0) {
    fileName.textContent = this.files[0].name;
  } else {
    fileName.textContent = 'No file chosen';
  }
});