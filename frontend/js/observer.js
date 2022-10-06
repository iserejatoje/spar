// const photoObserver = new IntersectionObserver(
//     ([entry]) => {
//         console.log(entry);
//         const photo = entry.target || {};
//         if (!entry.isIntersecting || entry.intersectionRatio <= 0.1) {
//             photo.classList.remove('from-right')
//         } else {
//             photo.classList.add('from-right')
//         }
//     },
//     {
//         threshold: [0.1, 0.9]
//     }
// )
//
// document
//     .querySelectorAll(".history-photos__item")
//     .forEach((photo) => photoObserver.observe(photo));
