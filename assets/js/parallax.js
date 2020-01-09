export const initParallax = () => {
    const wrapper = document.getElementById('home-page-house-wrapper');
    const bg = document.getElementById('home-page-house');
    console.log('bef')
    if (!wrapper || !bg) return;
    console.log('aft')
    let wrapperWidth = wrapper.offsetWidth;
    let wrapperHeight = wrapper.offsetHeight;
    let widthSubtraction = Math.floor(bg.offsetWidth) - wrapperWidth;
    let heightSubtraction = Math.floor(bg.offsetHeight) - wrapperHeight;
    let isMobile = window.innerWidth <= 1024 || wrapperWidth > bg.offsetWidth;;

    const updateDimensions = () => {
        wrapperWidth = wrapper.offsetWidth;
        wrapperHeight = wrapper.offsetHeight;
        widthSubtraction = Math.floor(bg.offsetWidth) - wrapperWidth;
        heightSubtraction = Math.floor(bg.offsetHeight) - wrapperHeight;
        
        isMobile = window.innerWidth <= 1024 || wrapperWidth > bg.offsetWidth;
    };
    const updateBgPosition = (mouseX, mouseY) => {
        let x = Math.ceil((wrapperWidth - mouseX) / wrapperWidth * widthSubtraction) - (widthSubtraction / 1.5);
        let y = Math.ceil(((wrapperHeight - mouseY) / wrapperHeight * heightSubtraction) - (heightSubtraction / 2));

        
        window.requestAnimationFrame(() => {
            if (isMobile) {
                bg.style.transform = '';
                return;
            } 
            bg.style.transform = `translateY(-50%) translate(${-x}px, ${-y}px)`;
        });
    };
    wrapper.addEventListener('mousemove', event => {
        updateBgPosition(event.clientX, event.clientY);
    })
    wrapper.addEventListener('mouseenter', event => {
        updateBgPosition(event.clientX, event.clientY);
    });
    window.addEventListener('resize', updateDimensions);
};