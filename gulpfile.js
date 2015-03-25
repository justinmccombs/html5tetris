var gulp = require('gulp');
var minifycss = require('gulp-minify-css');
var less = require('gulp-less');
var browserSync = require('browser-sync');
var watch = require('gulp-watch');
var gutil = require('gulp-util');
var clean = require('gulp-clean');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var filesize = require('gulp-filesize');
var changed = require('gulp-changed');

var jsWatchPath = [];
var jsSourceFiles = [];

var lessWatchPath = ['html/css/less/**'];
var lessFiles = ['html/css/less/styles.less'];
var cssOutputPath = 'html/css';

// BrowserSync
gulp.task('browser-sync', function() {
    browserSync({
        proxy: 'html5tetris'
    })
});



// Less & CSS tasks
gulp.task('less', function() {
    gulp.src(lessFiles)
        .pipe(less())
        .pipe(gulp.dest(cssOutputPath))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('js', function() {
    gulp.src(['html/js/**/*.js', 'html/game/**/*.js'])
        .pipe(browserSync.reload({stream:true}));
});


gulp.task('default', ['browser-sync'], function() {
    gulp.watch(lessWatchPath, ['less']);
    gulp.watch('html/**/*.js', ['js']);
});
