const main = document.querySelector('main');
const images = document.querySelectorAll('.floating-image');

main.addEventListener('mousemove', (e) => {
    const x = e.clientX / window.innerWidth - 0.5;
    const y = e.clientY / window.innerHeight - 0.5;
    let i = 0;
    images.forEach(image => {
        i++;
        const speed = 3;
        image.style.transform = `translate(${x * speed * i}px, ${y * speed * i}px)`;
    });
});