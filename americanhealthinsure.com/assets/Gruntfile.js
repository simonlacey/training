/**
 * Created by hm909 on 6/30/16.
 */


module.exports = function(grunt){

/*    grunt.registerTask("default", "", function () {
        grunt.log.write("asdasdasdasd");
    });*/

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

/*

        <link rel="stylesheet" href="css/plugins/bootstrap.min.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/custom-v2.css">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,400italic,700,900' rel='stylesheet'
            type='text/css'>
*/



        cssmin: {
            combine: {
                files: {
                    'css/ahi_index_v2.min.css': [
                        'css/plugins/bootstrap.min.css',
                        'css/responsive.css',
                        'css/style.css',
                        'css/custom-v2.css',
                        'css/fonts-lato.css'
                    ]
                }
            }
        },





        uglify: {
            dist: {
                files: {
                    'js/ahi.min.js': ['js/plugins/jquery1.11.2.min.js', 'js/plugins/bootstrap.min.js',
                    'js/plugins/jquery.easing.1.3.min.js', 'js/main.js']
                }
            }
        }


    });

    // load plugin
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // runt the task
    //grunt.registerTask('default', ['uglify', 'cssmin']);
    grunt.registerTask('default', ['cssmin']);



};