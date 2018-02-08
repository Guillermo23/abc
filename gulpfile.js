let gulp = require('gulp');
let concat = require('gulp-concat');
let uglify = require('gulp-uglify');
let sass = require('gulp-sass');
let rename = require("gulp-rename");
let browserSync = require('browser-sync').create();
let plumber = require('gulp-plumber');

gulp.task('default', ['uglify', 'scss', 'watch']);

gulp.task('uglify', () => {
  return gulp.src('./resources/assets/js/**/*.js')
      .pipe(concat('main.js'))
      .pipe(gulp.dest('./public/js'))
      .pipe(rename({ suffix: '.min' }))
      .pipe(plumber())
      .pipe(uglify())
      .pipe(gulp.dest('./public/js'))
});

gulp.task('scss', () => {
  return gulp.src('./resources/assets/sass/**/*.scss')
        .pipe(sass())
        .pipe(plumber())
        .pipe(gulp.dest('./public/css'))
});

gulp.task('watch', () => {
    gulp.watch('js/**/*.js', ['uglify']);
    gulp.watch('scss/**/*.scss', ['scss']);
});

gulp.task('serve', ['scss'], function() {
    browserSync.init({
      proxy: 'crea.test',
      files: [
          './resources/views/**/*.blade.php',
      ]
    });
    gulp.watch('./resources/assets/sass/**/*.scss', ['scss', 'browserSync:reload']);
    gulp.watch('./resources/assets/js/**/*.js', ['uglify', 'browserSync:reload']);
 });

gulp.task('browserSync:reload', () => {
   browserSync.reload();
});
