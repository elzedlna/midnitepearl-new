import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'sans': ['Lato', 'sans-serif'],
                'serif': ['Inria Serif', 'serif'],
            },
            colors: {
                'primary': '#81D8D0',
                'dark': '#404040',
                'cream': '#D8C9B9',
                'light': '#FFFCF1',
                'beige': '#F5F5DC',
            }
        },
    },

    plugins: [forms],
};
