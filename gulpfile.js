var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-ruby-sass');
var watch = require('gulp-watch');
var minifyCSS = require('gulp-minify-css');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var merge2 = require('merge2');
var ignore = require('gulp-ignore');
var rimraf = require('gulp-rimraf');


gulp.task('sass', function () {
    console.log('=========================================');
    console.log('running sass');
    gulp.src('sass/**/*.scss')
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(rename('theme.min.css'))
        .pipe(gulp.dest('css/'));
});

gulp.task('watch', function () {
    gulp.watch('sass/**/*.scss', ['sass']);
});


gulp.task('cleancss', function() {
  return gulp.src('./css/*.min.css', { read: false, aggressiveMerging: false }) // much faster 
    .pipe(ignore('theme.css'))
    .pipe(rimraf());
});


// Copy all js files from bower_component assets to themes /js folder. Run this task after bower install or bower update
gulp.task('copy-assets', function() {
    gulp.src('./bower_components/bootstrap-sass/assets/javascripts/*.js')
       .pipe(gulp.dest('./js'));
    gulp.src('./bower_components/bootstrap-sass/assets/fonts/bootstrap/*.{ttf,woff,eof,svg}')
        .pipe(gulp.dest('./fonts'));
    gulp.src('./bower_components/fontawesome/fonts/**/*.{ttf,woff,eof,svg}')
        .pipe(gulp.dest('./fonts'));
    gulp.src('./bower_components/jquery/dist/*.js')
        .pipe(gulp.dest('./js'));
    gulp.src('./bower_components/_s/js/*.js')
        .pipe(gulp.dest('./js'));

});
