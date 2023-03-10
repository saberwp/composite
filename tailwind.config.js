const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  content: [
		"./src/**/*.{html,js}",
		"./templates/**/*.php",
		"./**/*.php",
		"./**/*.json",
		'../../plugins/skeletoner/tailwind.json', // @TODO make conditional!
		'../../plugins/saber-solutions/**/*.php', // @TODO make conditional!
		'../../plugins/saber-snippets/**/*.php', // @TODO make conditional!
		'../../plugins/saber-dashboard/**/*.php', // @TODO make conditional!
		'../../plugins/f2/**/*.*', // @TODO make conditional!
		'../../plugins/saber-lms/**/*.*', // @TODO make conditional!
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
