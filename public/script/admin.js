function previewImage() {
  const fileInput = document.getElementById('foto-to-display');
  const preview = document.getElementById('image-preview');
  
  const file = fileInput.files[0];
  console.log(file); 

  // If a file is selected
  if (file) {
    const reader = new FileReader();

    reader.onload = function(e) {
      preview.src = e.target.result;
      preview.style.display = 'block'; 
    }

    reader.readAsDataURL(file);  
  }
}