/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    '*.php',
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    screens: {
      'xs': '320px',
    },
    extend: {},
  },
  plugins: [
    require('preline/plugin'),
  ],
}

