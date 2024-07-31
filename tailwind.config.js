/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["index.php", "*/**/*.{php,html,js}"],
  theme: {
    fontFamily: {
      sans: ["Montserrat", "sans-serif"],
      serif: ["Merriweather", "serif"],
    },
    extend: {
      colors: {
        primary: "#1813A2",
        secondary: "#11212D",
        third: "#253745",
        fourth: "#4A5C6A",
        fifth: "#9BA8AB",
      },
    },
  },
  plugins: [],
};
