export const map = () => {
    const embed = document.getElementById('gmap_canvas');

    const latDsm = `52°22'34.4"N`;
    const longDsm = `17°03'54.8"E`;

    const convertDmsToDecimalDegree = dms => {
        const splitted = dms.split(/[\°\'\"']/);
        if (splitted.length !== 4) return null;

        const degrees = parseInt(splitted[0]);
        const minutes = parseInt(splitted[1]);
        const seconds = parseFloat(splitted[2]);
        const hemisphere = splitted[3];

        const decimal = (degrees + minutes / 60 + seconds / 60 / 60) * (hemisphere.match(/[en]/i) !== null ? 1 : -1);
        return decimal;
    };

    const scrollToMap = () => {
        const embedRect = embed.getBoundingClientRect();
        window.scroll({
            top: embedRect.bottom - embedRect.height + window.scrollY - 100, 
            behavior: 'smooth'
        });
    };

    const changeEmbedUrl = query => {
        if (!query) return;

        embed.src = `https://maps.google.com/maps?
        &ll=${convertDmsToDecimalDegree(latDsm)},${convertDmsToDecimalDegree(longDsm)}
        &q=${encodeURI(query)}&z=14&ie=UTF8&iwloc=&output=embed`;

        if (window.innerWidth <= 1024) {
            scrollToMap();
        }
    };

    const initListenerOnLocationsList = () => {
        const list = document.getElementById('map-list');

        list.addEventListener('click', event => {
            console.log(event.target, event.target.dataset.query)
            changeEmbedUrl(event.target.dataset.query);
        });
    }

    initListenerOnLocationsList();
};