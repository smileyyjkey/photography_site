var imageContainer = document.getElementById('image-container');
var image = document.getElementById('image');

image.addEventListener('click', function() {
  image.classList.add('expanded');
});

imageContainer.addEventListener('click', function(event) {
  if (event.target === imageContainer) {
    image.classList.remove('expanded');
  }
});
