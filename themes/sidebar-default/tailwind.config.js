const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  purge: ['./resources/views/**/*.blade.php'],

  theme: {
    extend: {
      fontFamily: {
        sans: ["Inter var", ...defaultTheme.fontFamily.sans],
      },
    },
  },

  variants: {
    extend: {
      opacity: ["disabled"],
    },
  },

  plugins: [require("@tailwindcss/forms")],
};