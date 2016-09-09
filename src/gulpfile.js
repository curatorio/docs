
// -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
// Configuration - you can change these settings

// Destination - where all the files are save after processing. Defaults to /public/assets but you can change to
// something like public/wp-content/themes/THEME_NAME/assets for a Wordpress project

var dest        = "../public/themes/curator/";
var destCss     = dest+"css/";
var destJs      = dest+"js/";

var src         = "";
var srcScss     = src+"scss/";
var srcJs       = src+"js/";

var watchPaths  = [
    dest+'/**'
];

// -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    rename = require('gulp-rename'),
    cache = require('gulp-cache'),
    cachebreak = require('gulp-cachebreak'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    livereload = require('gulp-livereload'),
    notify = require('gulp-notify');

//gulp.task('default', function() {
//    //bootstrap ();
//});

// -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
// CSS / SCSS

gulp.task('styles', function() {
    return gulp.src(srcScss+'*.scss')
        .pipe(sass ({
            style: 'expanded',
            errLogToConsole: true,
            error:function(er){
                notify({ message: er })
            }
        }))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
        .pipe(gulp.dest(destCss))
        .pipe(notify({ message: 'Styles task complete' }))
});

gulp.task('styles:prod', ['styles'], function() {
    return gulp.src(srcScss+'*.scss')
        .pipe(sass ({
            style: 'expanded',
            errLogToConsole: true,
            error:function(er){
                notify({ message: er })
            }
        }))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
        .pipe(gulp.dest(destCss))
        .pipe(rename({suffix: '.min'}))
        .pipe(minifycss())
        .pipe(gulp.dest(destCss))
        .pipe(notify({ message: 'Styles & Minify Task complete' }))
});

// -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
// Images

gulp.task('images', function() {
    return gulp.src('src/images/**/*')
        .pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
        .pipe(gulp.dest('dist/assets/img'))
        .pipe(notify({ message: 'Images task complete' }));
});

// -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
// Javascript

gulp.task('scripts', function() {
    return gulp.src(srcJs+'**/*.js')
        //.pipe(jshint('.jshintrc'))
        .pipe(jshint.reporter('default'))
        .pipe(concat('main.js'))
        .pipe(gulp.dest(destJs))
        .pipe(notify({ message: 'Scripts task complete' }));
});

// 'frontend/bower_components/bootstrap-daterangepicker/daterangepicker.js',
// 'frontend/bower_components/ng-bs-daterangepicker/dist/ng-bs-daterangepicker.min.js',  

gulp.task('scripts-vendor', function() {
    return gulp.src([
            'frontend/bower_components/jquery/dist/jquery.js',
            'frontend/bower_components/angular/angular.js',
            'frontend/bower_components/bootstrap/dist/js/bootstrap.js',
            'frontend/bower_components/angular-route/angular-route.min.js',
            'frontend/bower_components/angular-aria/angular-aria.min.js',
            'frontend/bower_components/angular-animate/angular-animate.min.js',
            'frontend/bower_components/underscore/underscore.js',
            'frontend/bower_components/moment/moment.js',
            'frontend/bower_components/angular-resource/angular-resource.js',
            'frontend/bower_components/bootstrap-daterangepicker/daterangepicker.js',
            'frontend/bower_components/angular-daterangepicker/js/angular-daterangepicker.min.js',
            'frontend/bower_components/angular-modal-service/dst/angular-modal-service.js',
            'frontend/bower_components/rollbar/dist/rollbar.js',
            srcJs+'vendor/*.js',
        ])

        //.pipe(jshint('.jshintrc'))
        //.pipe(jshint.reporter('default'))
        .pipe(concat('vendor.js'))
        .pipe(gulp.dest(destJs))
        .pipe(notify({ message: 'Scripts Vendor task complete' }));
});

gulp.task('scripts:prod', function() {
    return gulp.src(srcJs+'**/*.js')
        .pipe(jshint('.jshintrc'))
        .pipe(jshint.reporter('default'))
        .pipe(concat('main.js'))
        .pipe(gulp.dest(destJs))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest(destJs))
        .pipe(notify({ message: 'Scripts & Minify task complete' }));
});

// -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
// Watch

gulp.task('watch', function() {
    console.log ('Watching: '+srcScss+'*.scss');
    gulp.watch(srcScss+'/**/*.scss', ['styles']);

    // Watch .js files
    console.log ('Watching: '+srcJs+'**/*.js');
    gulp.watch(srcJs+'**/*.js', ['scripts','scripts-vendor']);

    // Watch image files
    //console.log ('Watching: '+srcScss+'*.scss');
    //gulp.watch('src/images/**/*', ['images']);

    // Create cachebreak
    //cachebreak.listen (true);

    // Create LiveReload server
    livereload.listen();

    // Watch any files in dist/, reload on change
    //gulp.watch(watchPaths).on('change', cachebreak.changed);
    gulp.watch(watchPaths).on('change', livereload.changed);
});

gulp.task('dev', ['watch']);
gulp.task('prod', ['styles:prod','scripts:prod']);
gulp.task('default', ['styles','scripts','scripts-vendor']);