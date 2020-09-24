module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                files: {
                    'wp-content/themes/yourtheme/compiled-css/yourtheme.css' : 'wp-content/themes/yourtheme/sass/styles.scss'
                }
            }
        },
        watch: {
            css: {
                files: 'wp-content/themes/yourtheme/sass/**/*.scss',
                tasks: ['sass', 'cssmin'],
            }
        },
        cssmin: {
            combine: {
                files: {
                    'wp-content/themes/yourtheme/style.css': ['wp-content/themes/yourtheme/compiled-css/*.css']
                }
            },
            minify: {
                src: 'wp-content/themes/yourtheme/style.css',
                dest: 'wp-content/themes/yourtheme/style.min.css'
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default',['watch']);
    grunt.log.write(' Saranghaeyo! ').ok();

};