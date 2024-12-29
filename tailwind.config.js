import defaultTheme from 'tailwindcss/defaultTheme'

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',  // Ensure Alpine.js and other JS files are included
    './resources/css/**/*.css', // Ensure your custom CSS is included
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans], // Make sure Figtree is loaded
      },
      colors: {
        'primary': '#2563eb',  // Adding custom primary color
        'secondary': '#64748b',  // Adding custom secondary color
      },
    },
  },
  plugins: [],
};
