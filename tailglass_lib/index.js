const glassify = require('./glassify');

module.exports = function ({ addComponents, addBase, addUtilities, theme }) {
    const tailglass = theme('tailglass', {});

    addBase({
        ':root': {
            '--tg-fade-subtract': '0%',
        }
    });

    addComponents(glassify.components(tailglass));
    addUtilities(glassify.utilities(tailglass));
};