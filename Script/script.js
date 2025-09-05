document.addEventListener("DOMContentLoaded", function () {
    const mainImage = document.getElementById("main-product-image");
    const thumbnails = document.querySelectorAll(".thumbnail-img");

    thumbnails.forEach((thumbnail) => {
        thumbnail.addEventListener("click", function () {
            // Change main image
            const newImage = this.getAttribute("data-image");
            mainImage.setAttribute("src", newImage);

            // Remove active class from all thumbnails
            thumbnails.forEach((thumb) =>
                thumb.classList.remove("active", "select-img-border")
            );

            // Add active class to clicked thumbnail
            this.classList.add("active", "select-img-border");
        });
    });
});