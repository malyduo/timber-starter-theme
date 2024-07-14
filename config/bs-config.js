module.exports = {
    proxy: 'http://test.test',
    files: ['./**/*.php', './**/*.twig', './resources/**/*.js', './resources/**/*.scss'],
    watchEvents: ['change'],
    open: false,
    injectChanges: true,
};