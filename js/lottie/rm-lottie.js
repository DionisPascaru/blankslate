// document.addEventListener("DOMContentLoaded", async function () {
//     try {
//         const bannerAnimation = require('./banner.json');
//         const realmenAnimation = require('./realmen.json');
//
//         loadLottieAnimation('lottie-banner', bannerAnimation);
//         loadLottieAnimation('lottieRealmen', realmenAnimation);
//         loadLottieAnimation('lottieRealmenFooter', realmenAnimation);
//     } catch (error) {
//         console.error("Error loading animations:", error);
//     }
// });
//
// function loadLottieAnimation(containerId, animationData) {
//     lottie.loadAnimation({
//         container: document.getElementById(containerId),
//         renderer: 'svg',
//         loop: true,
//         autoplay: true,
//         animationData
//     });
// }