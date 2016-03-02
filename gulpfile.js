// Load plugins
var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat'),
    cssnano = require('gulp-cssnano');


// Styles
gulp.task('styles', function() {
  return sass('css/sass/*.scss')
    .pipe(autoprefixer('last 2 version'))
    .pipe(cssnano({ zindex:false }))
    .pipe(gulp.dest('./css'))
    .on('error', sass.logError)
});

// Default task
gulp.task('default', ['styles']);

// Watch
gulp.task('watch', function() {
  // Watch .scss files
  gulp.watch('css/**/*.scss', ['styles']);
});
