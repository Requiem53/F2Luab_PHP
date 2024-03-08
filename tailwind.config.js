/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*{html,js,php}'],
  theme: {
    extend: {
      fontFamily: {
        'poppins': ['Poppins'],
        'openSans': ['"Open Sans"']
     },
     backgroundImage: {
       'registerPageBackground': "url('images/registerPageBackground.png')"
     }
    },
  },
  plugins: [],
}

