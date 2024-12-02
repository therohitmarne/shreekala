
  // Open the lightbox with the clicked image
function openLightbox(imgElement) {
    const lightbox = document.getElementById('lightbox-1');
    const lightboxImg = document.getElementById('lightbox-img');
    
    lightbox.style.display = 'flex';
    lightboxImg.src = imgElement.src;
}

// Close the lightbox when clicked outside the image or on the close button
function closeLightbox() {
    const lightbox = document.getElementById('lightbox-1');
    lightbox.style.display = 'none';
}
