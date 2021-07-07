// Gulp file to compile Fascinate Pro SCSS & JS files

const gulp = require('gulp');
const zip = require('gulp-zip');
const wpPot = require('gulp-wp-pot');
const sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const replace = require('gulp-replace');
const notify = require('gulp-notify');
const plumber = require('gulp-plumber');
const rtlcss = require('gulp-rtlcss');
const rename = require('gulp-rename');
const shell = require('gulp-shell');

/*
*
# npm update
# npm init
# npm install gulp gulp-zip gulp-wp-pot gulp-sourcemaps gulp-sass gulp-concat gulp-uglify gulp-postcss autoprefixer cssnano gulp-replace gulp-notify gulp-plumber gulp-rtlcss gulp-rename gulp-shell -g
# npm install gulp gulp-zip gulp-wp-pot gulp-sourcemaps gulp-sass gulp-concat gulp-uglify gulp-postcss autoprefixer cssnano gulp-replace gulp-notify gulp-plumber gulp-rtlcss gulp-rename gulp-shell --save-dev
*
*/

/*
===========================================================
=
= Change these constants according to your need
=
====================================================
*/

// #1 Script files path
const scriptpath = {

    script_src: [
        './assets/js/*.js',
        '!./assets/js/*.min.js',
    ],
    script_dist: "./assets/js/",
}

// 2# SASS/SCSS file path
const sasspath = {

    sass_src: ["./assets/scss/**/*.scss"],
    sass_dist: "./assets/css/",
}
const compiled_sass_css_file_name = "maximo.min.css"; // what would you like to name your compiled CSS file


// #3 path of php files to generate WordPress POT file

const php_files = {

    php_files_path: [

        './**/*.php',
        '!./inc/plugin-recommendation.php',
        '!./third-party/class-tgm-plugin-activation.php',
    ],
}

// #3.1 project text domain

const project_name = 'Maximo';
const project_text_domain = 'maximo';

// #4 zips production ready files
const output_filename = 'maximo-production.zip';

const files_folders = {

    filefolders_src: [

        // select all files & folders
        './*',
        './*/**',

        // build tools
        '!./.git',
        '!./.gitignore',
        '!./node_modules/**',
        '!./gulpfile.js',
        '!./package.json',
        '!./package-lock.json',
        '!./composer.json',
        '!./composer.lock',
        '!./sftp-config.json',

        // source files
        '!./assets/scss/**',
    ],

    production_zip_file_path: "./",
}

/*
===========================================================
=
= Define task (Almost no changes required)
=
====================================================
*/


gulp.task('scriptsTask', function () {
    return gulp.src(scriptpath.script_src)
        .pipe(rename({ suffix: '.min' }))
        .pipe(uglify())
        .pipe(gulp.dest(scriptpath.script_dist));
});

gulp.task('sassTask', function () {
    var onError = function (err) {
        notify.onError({
            title: "Gulp",
            subtitle: "Failure!",
            message: "Error: <%= error.message %>",
            sound: "Beep"
        })(err);
        this.emit('end');
    };
    return gulp.src(sasspath.sass_src)
        .pipe(sourcemaps.init()) // initialize sourcemaps first
        .pipe(plumber({ errorHandler: onError }))
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(postcss([autoprefixer('last 2 version'), cssnano()])) // PostCSS plugins
        .pipe(concat(compiled_sass_css_file_name))
        .pipe(sourcemaps.write('.')) // write sourcemaps file in current directory
        .pipe(gulp.dest(sasspath.sass_dist)); // put final CSS in dist folder
});

gulp.task('WordpressPot', function () {
    return gulp.src(php_files.php_files_path)
        .pipe(wpPot({
            domain: project_text_domain,
            package: project_name,
        }))
        .pipe(gulp.dest('languages/' + project_text_domain + '.pot'));
});

gulp.task('ZipProductionFiles', function () {
    return gulp.src(files_folders.filefolders_src)
        .pipe(zip(output_filename))
        .pipe(gulp.dest(files_folders.production_zip_file_path))
});


/*
++++++++++++++++++++++++++++++++++++++++++++++++++++
=
= Run All tasks
=
++++++++++++++++++++++++++++++++++++++++++++++++++++
*/

//=========================================
// = C O M M A N D S                      = 
//=========================================
//
// 1. Command: gulp (will compile static resources)
// 2. Command: gulp zipprod (will generate production ready files)
//
//=========================================


gulp.task('default', gulp.series('scriptsTask', 'sassTask', 'WordpressPot', (done) => {

    gulp.watch(scriptpath.script_src, gulp.series('scriptsTask'));
    gulp.watch(sasspath.sass_src, gulp.series('sassTask'));
    gulp.watch(php_files.php_files_path, gulp.series('WordpressPot'));
    done();
}));

gulp.task('zipprod', gulp.series('ZipProductionFiles', (done) => {

    done();
}));