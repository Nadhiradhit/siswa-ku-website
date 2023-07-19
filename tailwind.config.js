
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js,php}"],
  daisyui: {
    themes: ["light", "dark", "cupcake"],
  },
  theme: {
    screens:{
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1536px'
    },
    fontFamily:{
      'Poppins' : "'Poppins', sans-serif;"
    },
    extend: {
      textColor:{
      'primary': '#4A55A2',
      'secondary': '#7895CB', 
      'white': 'white',
    },
    fontSize:{
      'md-1': '1.5rem',
      'xl': '4rem'
    },
    width:{
      'xl': ''
    },
  },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('daisyui'),
  ],
}

