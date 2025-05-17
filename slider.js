const slider = document.querySelector('.slider');
const nextBtn = document.getElementById('next');
const prevBtn = document.getElementById('prev');

nextBtn.onclick = () => {
    slider.append(slider.querySelector('.slider .img:first-child'));
}
prevBtn.onclick = () => {
    slider.prepend(slider.querySelector('.slider .img:last-child'))
}

function autoSlide() {
    slider.append(slider.querySelector('.slider .img:first-child'));
}
setInterval(autoSlide, 3000);