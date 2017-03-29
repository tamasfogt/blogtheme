var packageJSON = require('./package.json');
var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var watch = require('gulp-watch');
var concat = require('gulp-concat');
var bulkSass = require('gulp-sass-bulk-import');

gulp.task('build-develop', ['sass']);

function copySass() {
    return gulp.src('./stylesheets/style.scss')
		.pipe(bulkSass())
        .pipe(sass({
                    includePaths: ['./stylesheets/']
                }))
        .pipe(concat('style.css'))
        .pipe(gulp.dest('../'));
}
gulp.task('sass', copySass);

                                   
function development() {
    watch(['./stylesheets/**/*.scss']
        , function () {
            gulp.start('build-develop');
        });
}
gulp.task('development', development);
