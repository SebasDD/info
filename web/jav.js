const navSlide = () => {
    const bur = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');

    bur.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
    }); 
}

navSlide();