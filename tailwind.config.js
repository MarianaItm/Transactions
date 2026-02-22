import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: '#f25600',
                    50: '#fef6ee',
                    100: '#fdecd7',
                    200: '#fad5ae',
                    300: '#f7b77b',
                    400: '#f38f46',
                    500: '#f25600',
                    600: '#e04500',
                    700: '#ba3202',
                    800: '#942808',
                    900: '#782409',
                },
            },
        },
    },

    plugins: [forms],
};
