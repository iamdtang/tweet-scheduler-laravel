const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.react('resources/assets/js/app.js', 'public/js')
   .postCss('resources/assets/css/main.css', 'public/css', [
     tailwindcss('./tailwind-config.js'),
   ]);
