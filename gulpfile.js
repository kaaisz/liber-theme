const gulp = require('gulp');
const { series, watch } = require('gulp');
const { src, dest } = require('gulp');
const path = require('path');
const fs = require('fs');
const pkg = JSON.parse(fs.readFileSync('./package.json'));
const assetsPath = path.resolve(pkg.path.assetsDir);

const browserSync = require('browser-sync').create();

const sass = require('gulp-sass');

const autoprefixer = require('gulp-autoprefixer');

const plumber = require('gulp-plumber');

function compileSass() {
  return gulp.src(path.join(assetsPath, 'scss/*.scss'))
    .pipe(plumber())
    .pipe(sass())
    .pipe(autoprefixer(
      {
        overrideBrowserslist: ['last 2 versions'],
        cascade: false
      }
    ))
    .pipe(gulp.dest(path.join(assetsPath, 'css')))
    .pipe(browserSync.stream());
}

function watchFiles() {
  browserSync.init({
    server: {
      baseDir: './'
    }
  });
  gulp.watch(path.join(assetsPath, 'scss/*.scss'), compileSass);
  gulp.watch('./*.html').on('change', browserSync.reload);
  gulp.watch(path.join(assetsPath, 'js/*.js')).on('change', browserSync.reload);
}

exports.default = series(compileSass);
