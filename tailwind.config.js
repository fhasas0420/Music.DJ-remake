import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
        },
        colors: {
            'top': '#6865f2',
            'bot': '#b218fe',
            'white': '#ffffff',
            'black': '#000000',
            'red': '#FF0000',
            'gray': '#33373e',
            'purple': '#8b5cf6',
            'gray-200': '#2d3135',
            'black-300': '#242424',
        },
        fontFamily: {
            'Lemon': ['"LEMON MILK"', 'sans-serif']
        },
        screens: {
            sm: '640px',    // Small devices (default Tailwind breakpoint)
            md: '768px',    // Medium devices
            lg: '1024px',   // Large devices
            xl: '1280px',   // Extra large devices
        },
    },
},

    plugins: [forms, typography],
};
