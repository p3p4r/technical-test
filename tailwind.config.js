/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')

module.exports = {
  content: [
    "./resources/**/*.{blade.php,js,jsx}",
  ],
  theme: {
    extend: {
      colors: {
        ...colors,
      }
    },
  },
  plugins: [],
}

