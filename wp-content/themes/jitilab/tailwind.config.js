/** @type {import('tailwindcss').Config} */
module.exports = {
  prefix: 'jtl-',
  content: [
    // Home
    // "./functions.php",
    // "./header.php",
    // "./template-parts/header/header-primary.php",
    // "./front-page.php",
    // "./footer.php",
    // "./template-parts/footer/footer-primary.php",
    // "./src/css/home.css",
    // "./dist/js/main.js",
    // "./dist/js/home.js"

    // List Posts
    "./functions.php",
    "./header.php",
    "./template-parts/header/header-primary.php",
    "./home.php",
    "./archive.php",
    "./search.php",
    "./pages/event.php",
    "./footer.php",
    "./template-parts/footer/footer-primary.php",
    "./src/css/list-post.css",
    "./dist/js/main.js",
    "./dist/js/blog.js",
    "./dist/js/event.js"
  ],
  theme: {
    extend: {
      colors: {
        'jtlprimary': '#0e0a38',
        'jtlsecondary': '#ff630e',
        'jtllight': '#dedede',
        'jtlsoft': '#f7f7f7',
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