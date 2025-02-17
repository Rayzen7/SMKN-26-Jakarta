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
            fontFamily: {
                poppins_medium: ['poppins_medium'],
                poppins_semibold: ['poppins_semibold'],
                poppins_bold: ['poppins_bold'],
                poppins_regular: ['poppins_regular'],
            },
            colors: {
                'primary': '#2680EB',
                'add': '#22C55E',
                'edit': '#3B82F6',
                'delete': '#EF4444',
                'gray': '#747474',
                'bg_secondary': '#F0F0F0'
            },
        },
    },
    plugins: [],
};
