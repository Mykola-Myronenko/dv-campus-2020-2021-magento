/**
 *  grunt exec:mykolam_luma_uk_ua && grunt less:mykolam_luma_uk_ua && grunt watch:mykolam_luma_uk_ua
 *  grunt exec:mykolam_luma_en_us && grunt less:mykolam_luma_en_us && grunt watch:mykolam_luma_en_us
 */
module.exports = {
    mykolam_luma_uk_ua: {
        area: 'frontend',
        name: 'MykolaM/luma',
        locale: 'uk_UA',
        files: [
            'css/styles-m',
            'css/styles-l'
        ],
        dsl: 'less'
    },
    mykolam_luma_en_us: {
        area: 'frontend',
        name: 'MykolaM/luma',
        locale: 'en_US',
        files: [
            'css/styles-m',
            'css/styles-l'
        ],
        dsl: 'less'
    },
};
