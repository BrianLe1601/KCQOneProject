document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".information_image img");
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");
    const closeBtn = document.getElementById("close-btn");
    const prevBtn = document.getElementById("prev-btn");
    const nextBtn = document.getElementById("next-btn");

    let currentIndex = 0;

    // Khi click vào ảnh
    images.forEach((img, index) => {
        img.addEventListener("click", () => {
            currentIndex = index;
            updateLightboxImage();
            lightbox.style.display = "flex"; // Hiển thị lightbox
        });
    });

    // Cập nhật ảnh trong lightbox
    function updateLightboxImage() {
        const selectedImage = images[currentIndex];
        lightboxImg.src = selectedImage.src;
    }

    // Nút Close
    closeBtn.addEventListener("click", () => {
        lightbox.style.display = "none"; // Ẩn lightbox
    });

    // Nút Previous
    prevBtn.addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateLightboxImage();
    });

    // Nút Next
    nextBtn.addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % images.length;
        updateLightboxImage();
    });

    // Khi click ra ngoài ảnh, đóng lightbox
    lightbox.addEventListener("click", (event) => {
        if (event.target === lightbox) {
            lightbox.style.display = "none"; // Ẩn lightbox khi click ngoài ảnh
        }
    });
});
