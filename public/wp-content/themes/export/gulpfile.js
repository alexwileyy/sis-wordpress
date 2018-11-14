var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var csso = require('gulp-csso');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var eslint = require('gulp-eslint');
var csslint = require('gulp-csslint');
var sourcemaps = require('gulp-sourcemaps');
var cleanCSS = require('gulp-clean-css');
var header = require('gulp-header');
var babel = require('gulp-babel');

var pkg = require('./package.json');
var banner = `
/**
Alex Wiley
https://alexwiley.co.uk | alex@alexwiley.co.uk

+---------+---------------------+
Project   | Project Name
+---------+---------------------+
Version   | V <%= pkg.version %>             
+---------+---------------------+
Released  | <%= new Date().toString() %>            
+---------+---------------------+
*/\n\n`;
var jsBanner = banner + "console.log(`%cBuilt with ♥ by Alex Wiley`, 'font-family:monospace;color: #4C2A80;font-size: 14px;'); console.log(`%cStart a conversation`, 'font-family:monospace;font-size: 13px;font-weight: bold;'); console.log(`%chttps://alexwiley.co.uk`, 'font-family:monospace;font-size: 12px;'); console.log(`%chello@alexwiley.co.uk`, 'font-family:monospace;font-size: 12px;color: #4C2A80;');";


gulp.task('dev:styles', function () {
  gulp.src('src/sass/main.scss')
    .pipe(sass().on('error', function(err){console.error('Error!', err.message);}))
    .pipe(autoprefixer({
        cascade: true,
        add: true,
        remove: true,
        supports: true,
        flexbox: true,
        grid: true,
        browsers: '> 1%, last 4 versions, Firefox ESR, IE 9, IE 10, IE 11'
    }))
    .pipe(sourcemaps.init())
    .pipe(cleanCSS({debug:true}))
    .pipe(rename('main.min.css'))
    .pipe(sourcemaps.write('./'))
    .pipe(header(banner, { pkg : pkg } ))
    .pipe(gulp.dest('./'));
});

gulp.task('dev:scripts', function () {
    gulp.src(['src/js/**/*.js'])
        .pipe(sourcemaps.init())
        .pipe(babel())
        .pipe(concat('main.js'))
        .pipe(rename('main.min.js'))
        .pipe(sourcemaps.write('./'))
        .pipe(header(jsBanner, { pkg : pkg } ))
        .pipe(gulp.dest('./'));
});

gulp.task('images', function () {
    gulp.src('src/images/**')
    .pipe(imagemin([imagemin.gifsicle(), imagemin.jpegtran(), imagemin.optipng()], { progressive: true }))
    .pipe(gulp.dest('./images/'));
});

gulp.task('dev',    ['dev:styles', 'dev:scripts','images']);
gulp.task('default',['dev']);

gulp.task('watch', function () {
    gulp.watch(['src/sass/*.scss', 'src/sass/*/*.scss'], ['dev:styles']);
    gulp.watch(['src/js/*.js', 'src/js/*/*.js'], ['dev:scripts']);
});
