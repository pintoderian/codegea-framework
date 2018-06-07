var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var autoprefixer = require('gulp-autoprefixer');
var browserify = require('gulp-browserify');
var merge = require('merge-stream');
var uglify = require('gulp-uglify'); //para minificar archivos
var htmlmin = require('gulp-htmlmin'); //para minificar html
var plumber = require('gulp-plumber');
/* concatenar varios archivos js */
var concat = require('gulp-concat');

var fuentesJs = [
  'resource/assets/js/app.js'
];

gulp.task('js', function(){
  gulp.src(fuentesJs)
    //.pipe(concat('scripts.js'))
    .pipe(browserify())
    .pipe(uglify()) //minificando
    .pipe(gulp.dest('assets/js'))
    .pipe(reload({stream:true}))
});

/* Sass con browser sync */

gulp.task('sass', function() {
  gulp.src('resource/assets/scss/app.scss')
    .pipe(plumber()) // para evitar que deje de ejecutar workflow y solo muestre el error de sass
    .pipe(autoprefixer())
    .pipe(sass({
      includePaths: ['scss'],
      outputStyle: 'compressed'
    }).on('error', sass.logError))
    .pipe(gulp.dest('assets/css'));
});

/* Usando merge para combinar sass y css en un solo archivo */
/*gulp.task('sass', function() {
  var archivoSass, archivoCss;
  archivoSass = gulp.src('scss/app.scss')
    .pipe(autoprefixer())
    .pipe(sass({
      includePaths: ['scss'],
    }));
    archivoCss = gulp.src('css/core.css');
    return merge(archivoSass, archivoCss)
      .pipe(concat('app.css'))
      .pipe(gulp.dest('app/css/'));
});
*/

/* tarea para minificar html */
/*gulp.task('minify', function(){
  return gulp.src('html/*.html')
    .pipe(htmlmin({collapseWhitespace:true}))
    .pipe(gulp.dest('app'))
});
*/
/*
gulp.task('serve', ['sass'], function() {
  browserSync.init(["app/css/*.css", "app/js/*.js", "app/*.html"], {
    server: {
      baseDir: 'app'
    }
  });

});
*/

gulp.task('watch', ['sass', 'js'], function() {
  gulp.watch(["resource/assets/scss/*.scss"], ['sass']);
  gulp.watch(["resource/assets/js/*.js"], ['js']);
});

gulp.task('default', ['watch']);