var packageJSON = require('./package.json');
var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var watch = require('gulp-watch');
var concat = require('gulp-concat');
var bulkSass = require('gulp-sass-bulk-import');

var browserify = require('browserify')
var babelify = require('babelify')
var rename = require('gulp-rename');


gulp.task('build-develop', ['sass','js']);

function copySass() {
    return gulp.src('./stylesheets/materialize.scss')
		.pipe(bulkSass())
        .pipe(sass({
                    includePaths: ['./stylesheets/']
                }))
        .pipe(concat('style.css'))
        .pipe(gulp.dest('../'));
}
gulp.task('sass', copySass);

//ES6 building, not used yet
function buildjs() {
  var bundler = browserify(packageJSON.config.basedir+'/app/index.js').transform(babelify, {/* options */ })

  return bundler.bundle()
    .pipe(source('app.js'))
    .pipe(buffer())
    .pipe(rename('app.min.js'))
  //  .pipe(uglify({
   //             mangle: true
    //       }))
    .pipe(gulp.dest('../'))
}
gulp.task('buildjs', buildjs);

    
function js() {
   gulp.src(['./js/build/**/*.js','./js/myscript/**/*.js'])
        .pipe(concat('app.js'))
        //   .pipe(uglify({
         //       mangle: true
        //   }))
            .pipe(rename({
                extname: '.min.js'
            }))
        .pipe(gulp.dest('./js'));
}
gulp.task('js', js);

                                   
function development() {
    watch(['./stylesheets/**/*.scss','./js/build/**/*.js','./js/myscript/**/*.js']
        , function () {
            gulp.start('build-develop');
        });
}
gulp.task('development', development);
