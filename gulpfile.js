// load packages
var gulp = require('gulp');
var sass = require('gulp-sass');
var gulpif = require('gulp-if');
var useref = require('gulp-useref');
var cleanCSS = require('gulp-clean-css');
const autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var uncss = require('gulp-uncss');


// paths
var paths = {
    devScss: 'app/scss/**/*.scss',
    devCss: 'app/css',
    devAllCss: '*.css',
    prodHtmlDir: 'app/*.html',
    prodDir: 'dist'
};

// sass compilation
gulp.task('sass', function(){
    return gulp.src(paths.devScss)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(autoprefixer())
/*        .pipe(uncss({
            html: [paths.prodHtmlDir]
        }))*/
        .pipe(gulp.dest(paths.devCss))
});

// watcher
gulp.task('watch', function(){
    gulp.watch(paths.devScss, ['sass']);
});

// prod
gulp.task('prod-min', function () {
    return gulp.src(paths.prodHtmlDir)
        .pipe(useref())
        .pipe(gulpif(paths.devAllCss, cleanCSS()))
        .pipe(gulp.dest(paths.prodDir));
});

gulp.task('prod', function () {
    return gulp.src('app/css/*.css')
        .pipe(gulp.dest('dist/css'));
});