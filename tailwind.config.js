const defaultTheme = require("tailwindcss/defaultTheme");
const skeletoner =  require('../../plugins/skeletoner/tailwind.json');

module.exports = {
  content: [
		"./src/**/*.{html,js}",
		"./templates/**/*.php",
		"./**/*.php",
		'../../plugins/skeletoner/tailwind.json',
	],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Inter var", ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [
    require("@tailwindcss/typography"),
    require("@tailwindcss/forms"),
  ],
};
