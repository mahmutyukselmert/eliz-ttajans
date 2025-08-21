document.addEventListener("DOMContentLoaded", function () {
    const carouselElement = document.getElementById("carouselSlider");
    if (!carouselElement) return;

    const defaultImageDuration = 5000; // Görsellerin süresi (ms)
    const carousel = new bootstrap.Carousel(carouselElement, {
        interval: defaultImageDuration,
        wrap: true
    });

    // Geçiş başlamadan kontrol
    carouselElement.addEventListener('slide.bs.carousel', function (event) {
        const nextSlide = event.relatedTarget;
        const video = nextSlide.querySelector("video");

        if (video) {
            // Otomatik geçişi tamamen durdur
            carousel.pause();
        } else {
            // Resim slayta geçerken tekrar otomatik dönmeye başla
            carousel.cycle();
        }
    });

    // Geçiş tamamlandığında kontrol
    carouselElement.addEventListener('slid.bs.carousel', function (event) {
        const activeSlide = event.relatedTarget;
        const video = activeSlide.querySelector("video");

        if (video) {
            video.currentTime = 0;

            const startPlayback = () => {
                video.play()
                    .then(() => {
                        console.log("Video süresi:", video.duration, "saniye");
                        // Video bitince devam et
                        video.onended = () => {
                            carousel.next();
                        };
                    })
                    .catch(err => {
                        console.warn("Video autoplay failed:", err);
                        setTimeout(() => carousel.next(), defaultImageDuration);
                    });
            };

            if (!isNaN(video.duration) && video.duration > 0) {
                startPlayback();
            } else {
                video.addEventListener("loadedmetadata", startPlayback, { once: true });
            }
        }
    });
});
