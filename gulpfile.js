// load packages
var gulp = require('gulp');
var sass = require('gulp-sass');
var gulpif = require('gulp-if');
var useref = require('gulp-useref');
var cleanCSS = require('gulp-clean-css');
const autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var uncss = require('gulp-uncss');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var runSequence = require('run-sequence');

// paths
var paths = {
    // dev
    devScss: 'app/scss/**/*.scss',
    devCss: 'app/css',
    devAllJs: '*.js',
    devAllCss: '*.css',
    devDir: 'app',
    //prod
    prodHtmlDir: 'app/*.php',
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

// js compilation
gulp.task('js', function() {
    return gulp.src(paths.devJs)
        .pipe(uglify())
        .pipe(concat('main.min.js'))
        .pipe(gulp.dest(paths.prodDir + '/js/'));
});

// watcher
gulp.task('watch', function(){
    gulp.watch(paths.devScss, ['sass']);
});

// prod-minify
gulp.task('prod-minify', function () {
    return gulp.src(paths.prodHtmlDir)
        .pipe(useref())
        .pipe(gulpif(paths.devAllCss, cleanCSS()))
        .pipe(gulpif(paths.devAllJs, uglify()))
        .pipe(gulp.dest(paths.prodDir))
});

// copy fonts to prod
gulp.task('copyfonts', function() {
    gulp.src(paths.devDir + '/fonts/**/*')
        .pipe(gulp.dest(paths.prodDir + '/assets/fonts'));
});

// unCss
gulp.task('uncss', function () {
    return gulp.src([paths.prodDir + '/assets/css/**/*.css', '!dist/assets/css/prism.min.css'])
        .pipe(uncss({
            html: ['dist/*.php'],
            ignore: [/\.z-fixed/]
        }))
        .pipe(gulp.dest(paths.prodDir + '/assets/css/'));
});

// run this task to create prod environment
gulp.task('prod', function(done) {
    runSequence('prod-minify', 'copyfonts', function() {
        console.log('minify done');
        runSequence('uncss', function() {
            done();
            console.log('have fun :)');
        });
    });
});
