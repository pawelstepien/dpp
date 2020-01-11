export const slider = () => {
    const jQInterval = setInterval(() => {
        if (typeof jQuery !== 'undefined' && typeof jQuery().slick !== 'undefined') {
            clearInterval(jQInterval);
            initSlider();
        }
    }, 250);
    
    const initSlider = () => {
        $('.slider-slides').slick({
            infinite: true,
            slidesToShow: 3,
            prevArrow: $('.slider-arrow_left'),
            nextArrow: $('.slider-arrow_right'),
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1
              }
            }
          ]
        })
    };

    const popup = document.getElementById('photo-popup');
    const popupImage = document.getElementById('popup-image');

    if (!popup || !popupImage) {
        return;
    }

    const showPopup = () => {
        console.log('showPopup')
        popup.classList.add('show');
    }

    const closePopup = () => {
        console.log('closePopup')
        popup.classList.remove('show');
    }

    const setPopupImage = src => {
        console.log('setPopupImage')
        popupImage.src = src;
        showPopup();
    }

    popup.addEventListener('click', closePopup);
    document.addEventListener('keyup', event => {
        if (event.key === 'Escape') {
            closePopup();
        }
    })

    const slidesWrapper = document.querySelector('.slider-slides');
    slidesWrapper.addEventListener('click', event => {
        const slide = event.target.querySelector('.slide-image');
        if (!slide) return;
        
        setPopupImage(slide.src);
    });

}