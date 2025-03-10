import lottie from 'lottie-web';
import bannerAnimation from './banner.json';
import realmenAnimation from './realmen.json';

document.addEventListener("DOMContentLoaded", function () {
    loadLottieAnimation('lottie-banner', bannerAnimation);
    loadLottieAnimation('lottieRealmen', realmenAnimation);
    loadLottieAnimation('lottieRealmenFooter', realmenAnimation);
});

function loadLottieAnimation(containerId, animationData) {
    lottie.loadAnimation({
        container: document.getElementById(containerId),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        animationData
    });
}