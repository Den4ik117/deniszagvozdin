const defaultTheme = require('tailwindcss/defaultTheme');
const typography = require('@tailwindcss/typography');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        'resources/views/**/*.blade.php'
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans-manrope': ['Manrope', ...defaultTheme.fontFamily.sans],
                'sans-russo': ['Russo One', ...defaultTheme.fontFamily.sans]
            }
        },
    },
    plugins: [typography],
}
