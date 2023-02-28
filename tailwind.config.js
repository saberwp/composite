const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  content: [
		"./src/**/*.{html,js}",
		"./templates/**/*.php",
		"./**/*.php",
		'../../plugins/skeletoner/tailwind.json', // @TODO make conditional!
		'../../plugins/saber-solutions/**/*.php', // @TODO make conditional!
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
