/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*{html,js,php}',
            './css/*{html,js,php}'
           ],
  theme: {
    extend: {
      fontFamily: {
        'poppins': ['Poppins'],
        'openSans': ['"Open Sans"']
     },
     backgroundImage: {
       'registerPageBackground': "url('../images/registerPageBackground.png')",
       'stockphoto1': "url('../images/stockphoto1.jpg')"
     }
    },
  },
  plugins: [],
}

