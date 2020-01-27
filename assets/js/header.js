export function initHeader() {
    const navigation = document.getElementById('header');
    const hamburger = document.getElementById('hamburger');
    const linksWrapper = document.getElementById('navigation');
    const links = document.getElementById('navigation-links-list');
    const lastNavigationSection = navigation.querySelector('.header-right');
    let lastScroll = window.scrollY;

    const hamburgerClickHandle = event => {
        if (navigation.classList.contains('expanded')) {
            navigation.classList.remove('expanded');
            navigation.style.height = '';
        } else {
            navigation.classList.add('expanded');
            const lastRect = lastNavigationSection.getBoundingClientRect()
            const linksRect = links.getBoundingClientRect()
            navigation.style.height =  + linksRect.bottom + lastRect.height + 20 + 'px';
        }
    };

    const scrollHandle = event => {
        if (lastScroll > window.scrollY) {
            navigation.classList.remove('hide');
        } else if (!navigation.classList.contains('expanded') && lastScroll < window.scrollY && window.scrollY > 0) {
            navigation.classList.add('hide');
        }
        lastScroll = window.scrollY;
    };

    const resizeHandle = () => {
        lastScroll = window.scrollY;
        if (window.innerWidth >= 1024) {
            navigation.style.height = '';
            navigation.classList.remove('expanded')
        }
    };

    hamburger.addEventListener('click', hamburgerClickHandle);
    // window.addEventListener('scroll', scrollHandle);
    window.addEventListener('resize', resizeHandle);
};