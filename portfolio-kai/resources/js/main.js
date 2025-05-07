document.addEventListener('DOMContentLoaded', () => {
    // Selecteer alle knoppen en contentblokken
    const toggleButtons = document.querySelectorAll('.toggleButton');
    const hiddenContents = document.querySelectorAll('.hiddenContent');
    const toggleTexts = document.querySelectorAll('.toggleText');
    const arrows = document.querySelectorAll('.arrow');

    // Voeg een event listener toe aan elke knop
    toggleButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            const content = hiddenContents[index];
            const text = toggleTexts[index];
            const arrow = arrows[index];

            if (content.classList.contains('max-h-0')) {
                content.classList.remove('max-h-0');
                content.classList.add('max-h-[500px]');
                text.textContent = 'Less';
                arrow.textContent = '↑';
            } else {

                content.classList.remove('max-h-[500px]');
                content.classList.add('max-h-0');
                text.textContent = 'More';
                arrow.textContent = '↓';
            }
        });
    });
});
