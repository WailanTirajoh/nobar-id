module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {
      opacity: ["group-hover"],
      backgroundColor: ['active'],
      scale: ['active'],
      duration: ['active'],
      display: ["group-hover"],
    },
  },
  plugins: [],
}
