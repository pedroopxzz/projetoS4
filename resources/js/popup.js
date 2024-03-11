function showPopup(message) {
    const popup = document.createElement('div');
    popup.classList.add('popup');
    popup.textContent = message;

    document.body.appendChild(popup);

    setTimeout(() => {
        popup.remove();
    }, 2000);
}
