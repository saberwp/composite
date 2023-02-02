const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
		"./src/**/*.{html,js}",
		"./templates/**/*.php",
		"./**/*.php",
	],
  theme: {
    extend: {
			fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
		},
  },
  plugins: [
		require('@tailwindcss/typography'),
		require('@tailwindcss/forms'),
	],
}
