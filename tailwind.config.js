import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    navy: '#0E2340',
                    green: '#2E4A3D',
                    gold: '#B18A47',
                },
                base: {
                    paper: '#F8F7F4',
                    parchment: '#E9E2D3',
                },
                comp: {
                    brown: '#6A5542',
                    graphite: '#18232C',
                    bluegray: '#657078',
                    darknavy: '#091A2F',
                }
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                serif: ['Playfair Display', ...defaultTheme.fontFamily.serif],
            },
        },
    },
    plugins: [],
};
