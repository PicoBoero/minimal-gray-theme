/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./template-parts/**/*.php",
    "./inc/**/*.php"
  ],
  theme: {
    extend: {
      colors: {
        amber: {
          500: '#f59e0b',
        },
        gray: {
          10: '#fcfcfd',
          80: '#f7f8f9',
        }
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
        headings: ['Outfit', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
