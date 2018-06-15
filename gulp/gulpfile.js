var gulp        = require('gulp');
var minifyCss   = require('gulp-minify-css');
var sass        = require('gulp-sass');
var notify      = require('gulp-notify');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
var connectPHP = require('gulp-connect-php');

// ////////////////////////////////////////////////
// Пути к исходным файлам
// они немного изменились
// ///////////////////////////////////////////////
var paths = {
  html:['./*.php'],
  css:['./*.scss'],
};

gulp.task('mincss', function(){
  return gulp.src(paths.css)
    .pipe(sass().on('error', sass.logError))
    .pipe(minifyCss())
    .pipe(gulp.dest('main'))
    .pipe(reload({stream:true}));
});

// ////////////////////////////////////////////////
// HTML
// ///////////////////////////////////////////////
gulp.task('html', function(){
  gulp.src(paths.html)
  .pipe(reload({stream:true}));
});

// ////////////////////////////////////////////////
// Browser-Sync
// // /////////////////////////////////////////////
gulp.task('browserSync', function() {
  browserSync({
    proxy:'127.0.0.1',
    port:8888
  });
});

// /////////////////////////////////////////////////
// PHP
// ////////////////////////////////////////////////
gulp.task('php', function(){
  connectPHP.server({ base: './', keepalive:true, hostname: 'localhost', port:8080, open: false});
});

gulp.task('scripts', function(){
  return gulp.src(paths.script)
    .pipe(coffee())
    .pipe(gulp.dest('js'))
    .pipe(reload({stream:true}));
});

gulp.task('watcher',function(){
  gulp.watch(paths.css, ['mincss']);
  gulp.watch(paths.html, ['html']);
});

gulp.task('default', ['watcher', 'browserSync', 'php']);