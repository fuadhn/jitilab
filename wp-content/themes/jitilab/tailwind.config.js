/** @type {import('tailwindcss').Config} */
module.exports = {
  prefix: 'jtl-',
  content: [
    // Home
    "./functions.php",
    "./header.php",
    "./template-parts/header/header-primary.php",
    "./front-page.php",
    "./footer.php",
    "./template-parts/footer/footer-primary.php",
    "./src/css/home.css",
    "./dist/js/main.js"
  ],
  theme: {
    extend: {
      colors: {
        'jtlprimary': '#0e0a38',
        'jtlsecondary': '#ff630e',
        'jtllight': '#dedede',
        'jtldark': '#130f40',
        'jtlgray': '#696969'
      },
      fontFamily: {
        'urbanist': 'Urbanist',
        'rubik': 'Rubik'
      }
    },
  },
  plugins: [],
}