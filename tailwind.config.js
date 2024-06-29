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
        fontSize: {
            xs: ['12px', '16px'],
            sm: ['14px', '20px'],
            base: ['16px', '19.5px'],
            lg: ['18px', '21.94px'],
            xl: ['20px', '24.38px'],
            '2xl': ['24px', '29.26px'],
            '3xl': ['28px', '50px'],
            '4xl': ['48px', '58px'],
            '8xl': ['96px', '106px']
          },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                palanquin: ['Palanquin', 'sans-serif'],
                montserrat: ['Montserrat', 'sans-serif'],
            },
            colors: {
                'primary': "#ECEEFF",
                "coral-red": "#FF6452",
                "slate-gray": "#6D6D6D",
                "pale-blue": "#F5F6FF",
                "white-400": "rgba(255, 255, 255, 0.80)"
              },
              boxShadow: {
                '3xl': '0 10px 40px rgba(0, 0, 0, 0.1)'
              },
              screens: {
                "wide": "1440px"
              }
        },
    },

    plugins: [forms],
};
