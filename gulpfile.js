
// make require function variables to return as JS objects
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    jshint = require('gulp-jshint'),
    autoprefixer = require('gulp-autoprefixer');



 // create gulp task named styles   

 gulp.task('styles', function() {
  return gulp.src('styles/*.scss')
    .pipe(sass({
      'sourcemap=none': true
    }))
    .pipe(concat('style.css'))
    .pipe(autoprefixer('last 2 version > 5%', 'ie 8', 'ie 9'))
    .pipe(gulp.dest('styles/'))
});




// run jshint on .js files in js directory
gulp.task('jshint', function() {
    return gulp.src('js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('jshint-stylish'))
});




// watch files to update automatically
gulp.task('watch', function() {
    gulp.watch('styles/*.scss', ['styles']);
    gulp.watch('js/*.js', ['jshint']);
});

// compiles SASS to CSS, combine all CSS into one file, add vendor prefixes, check .js files for errors, watch source files for changes
gulp.task('default', ['styles', 'jshint', 'watch']);
