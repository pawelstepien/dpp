export const removeCheckboxWrapper = () => {
    const checkbox = document.getElementById('consent');
    const wrapper = document.querySelector('.wpcf7-form-control-wrap.consent')

    if (!checkbox || !wrapper) return;

    wrapper.insertAdjacentElement('afterend', checkbox.cloneNode());
    checkbox.remove();
}