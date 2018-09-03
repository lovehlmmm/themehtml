'use strict';

var path = require('path');
var ignore = require('gulp-ignore');
var gulp = require('gulp');
var rimraf = require('gulp-rimraf');
var sourcemaps = require('gulp-sourcemaps');
var gutil = require('gulp-util');
var plumber = require('gulp-plumber');
var compass = require('gulp-compass');
var minifycss = require('gulp-minify-css');
var notify = require('gulp-notify');

//CONFIG PATHS
var config = {
    assets_light: 'light/assets/',
    scripts_light: ['light/assets/js/**/*.js', 'light/assets/pages/**/*.js'], //not using for this version
    assets_hr: 'horizontal/assets/',
    build: 'css'
};


gulp.task('build-light', ['clean-light'], function () {
    //only process main.scss which imports all other required styles - including vendor files.
    return gulp.src(config.assets_light + '/scss/style.scss')
            .pipe(plumber(function (error) {
                gutil.log(error.message);
                this.emit('end');
            }))
            .pipe(compass({
                css: config.assets_light + config.build,
                sass: config.assets_light + 'scss'
            }))
            //minify files
            .pipe(minifycss())
            //output
            .pipe(gulp.dest( config.assets_light + config.build))
            .pipe(notify({message: 'Style has been compiled successfully'}));
});

gulp.task('clean-light', function (cb) {
    return gulp.src(config.assets_light + config.build + '/style.css', {read: false}) // much faster
        .pipe(rimraf());
});

gulp.task('build-horizontal', ['clean-horizontal'], function () {
    //only process main.scss which imports all other required styles - including vendor files.
    return gulp.src(config.assets_hr + '/scss/style.scss')
            .pipe(plumber(function (error) {
                gutil.log(error.message);
                this.emit('end');
            }))
            .pipe(compass({
                css: config.assets_hr + config.build,
                sass: config.assets_hr + 'scss'
            }))
            //minify files
            .pipe(minifycss())
            //output
            .pipe(gulp.dest( config.assets_hr + config.build))
            .pipe(notify({message: 'Style has been compiled successfully'}));
});

gulp.task('clean-horizontal', function (cb) {
    return gulp.src(config.assets_hr + config.build + '/style.css', {read: false}) // much faster
        .pipe(rimraf());
});

gulp.task('default', function () {
    console.log("\nUplon - Gulp Command List \n");
    console.log("----------------------------\n");
    console.log("gulp build-light");
    console.log("gulp build-horizontal");
    console.log("----------------------------\n");
});