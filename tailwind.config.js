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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'wcc-green': {
                    '50': '#f0fdf6',
                    '100': '#dcfce9',
                    '200': '#bbf7d5',
                    '300': '#86efb4',
                    '400': '#4ade88',
                    '500': '#22c55e',
                    '600': '#16a34a',
                    '700': '#15803d',
                    '800': '#166534',
                    '900': '#0d4d3d',
                    '950': '#052e1f',
                },
            },
        },
    },

    plugins: [forms],
};
