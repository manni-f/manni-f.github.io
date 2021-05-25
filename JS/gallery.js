function activateGallery() {
  let thumbnails = document.querySelectorAll("#gallery-thumbs > div > img");

  let mainImage = document.querySelector("#gallery-photo > img");

    thumbnails.forEach(function(thumbnail) {
      thumbnail.addEventListener("click", function() {
      let newImageSrc = thumbnail.dataset.largeVersion;
      let newImageAlt = thumbnail.dataset.title;
      //let newImageDesc = thumbnail.dataset.description;
      mainImage.setAttribute("src", newImageSrc);
      mainImage.setAttribute("alt", newImageAlt);
    });
  });
}
