const fadeOut = () => {
    const loaderWrapper = document.querySelector('.loader__wrap');
    loaderWrapper.classList.add('fade');
}

window.addEventListener('load', fadeOut);
