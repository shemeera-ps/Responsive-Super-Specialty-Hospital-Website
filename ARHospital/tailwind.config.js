/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
           colors:{
            'customBlack':'#151216',
            'customOrange':'#8F7143',
            'secondaryBg':'#F7EEE9',
            'secondaryText':'#A2735F',
           }
            
        },
    },
    plugins: [],
};
