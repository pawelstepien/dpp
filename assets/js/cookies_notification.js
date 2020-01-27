export function initCookiesNotification() {
    const wrapper = document.getElementById('cookies-notification-wrapper');
    const button = document.getElementById('cookies-notification-button');
    const expirationDays = 30;

    const showNotification = () => {
        wrapper.classList.add('show');
    };
    const hideNotification = () => {
        wrapper.classList.remove('show');
    };
    const checkIfThereIsCookie = () => {
        return document.cookie.indexOf('accepted_cookies=true') !== -1;
    }
    const addCookie = () => {
        const date = new Date();
        date.setTime(date.getTime() + (expirationDays * 24 * 60 * 60 * 1000));
        document.cookie = `accepted_cookies=true;expires=${date.toUTCString()};path=/`;
    }
    const dontShowAnymore = () => {
        addCookie();
        hideNotification();
    }
    
    const showIfWasntAccepted = () => {
        if (!checkIfThereIsCookie()) {
            showNotification();
            button.addEventListener('click', dontShowAnymore);
        }
    };
    showIfWasntAccepted();
};