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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [require("daisyui")],
    daisyui: {
      themes: [
        {
          blackfriday: {
            "primary": "#FFD700",          // Golden Yellow
            "secondary": "#FFA500",        // Orange
            "accent": "#FFFF00",           // Yellow
            "neutral": "#1F1F1F",          // Dark Gray
            "base-100": "#000000",         // Black
            "info": "#FFD700",             // Info color (Yellow)
            "success": "#FFD700",          // Success color (Yellow)
            "warning": "#FFA500",          // Warning color (Orange)
            "error": "#FF0000",            // Error color (Red)
          },
        },
      ],
    },
};
