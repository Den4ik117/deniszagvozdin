const modeSwitcher = document.querySelector('#mode-switcher');

modeSwitcher?.addEventListener('click', () => {
    document.documentElement.classList.toggle('dark');
});

export {};
