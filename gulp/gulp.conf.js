var backend = 'public/backend/',
    frontend = 'public/styles/',
    assets = './resources/assets/';

module.exports = {
    backend : {
        css : backend + 'css/',
        js: backend + 'js/',
        img : backend + 'img/',
        fonts: backend + 'fonts/',
        plugins : backend + 'plugins/'
    },
    frontend : {
        css : frontend + 'css/',
        js : frontend + 'js/',
        img : frontend + 'img/',
        fonts: frontend + 'fonts/',
        vendor : frontend + 'vendor/'
    },
    assets : {
        frontend : assets + 'frontend/',
        js: assets + 'js/'
    }
};