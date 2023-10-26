
const customModalBtn = document.getElementById('customModalBtn');
const customModal = document.getElementById('customModal');
const customModalClose = document.getElementById('customModalClose');
const customModalDismiss = document.getElementById('customModalDismiss');

customModalBtn.addEventListener('click', () => {
    customModal.style.display = 'block';
});

customModalClose.addEventListener('click', () => {
    customModal.style.display = 'none';
});

customModalDismiss.addEventListener('click', () => {
    customModal.style.display = 'none';
});

window.addEventListener('click', (event) => {
    if (event.target === customModal) {
        customModal.style.display = 'none';
    }
});
