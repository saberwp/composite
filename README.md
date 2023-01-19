# Composite WordPress Theme
Composite WordPress theme integrates Tailwind CSS and makes use of adapted versions of the Tailwind UI component collection. Composite requires ACF (Advanced Custom Fields) Pro version. This requirement is because the theme utilizes ACF fields to make it's components dynamic, and also utilizes ACF fields to build it's settings pages.

## Dependencies

1. ACF Pro (Advanced Custom Fields) plugin.
2. ACF Code Field plugin. 

## Build Process
Composite theme integrates Tailwind CSS. There is a build process using the Tailwind CLI that is used to selectively parse Tailwind classes. When you use our release packages from GitHub, this build process has already been completed. However if you plan to fork or adapt the Composite Theme by directly editing the codebase, you will need to run that Tailwind build in the event that you change any of the Tailwind components or Tailwind classes used in the project.
