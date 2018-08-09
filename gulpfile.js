var gulp = require("gulp"), //http://gulpjs.com/
    util = require("gulp-util"), //https://github.com/gulpjs/gulp-util
    sass = require("gulp-sass"), //https://www.npmjs.org/package/gulp-sass
    autoprefixer = require('gulp-autoprefixer'), //https://www.npmjs.org/package/gulp-autoprefixer
    minifycss = require('gulp-minify-css'), //https://www.npmjs.org/package/gulp-minify-css
    rename = require('gulp-rename'), //https://www.npmjs.org/package/gulp-rename
    concat = require('gulp-concat'), //https://www.npmjs.org/package/gulp-concat
    uglify = require('gulp-uglify'), //https://www.npmjs.org/package/gulp-uglify
    log = util.log;

var sassFiles = "src/*.scss";
// generazione da sass a css minifizzato
gulp.task("sass", function () {
    log("Generate CSS files " + (new Date()).toString());
    gulp.src(sassFiles)
        .pipe(sass({
            style: 'expanded'
        }))
        .pipe(autoprefixer("last 3 version", "safari 5", "ie 8", "ie 9"))
        .pipe(gulp.dest("css"))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(minifycss())
        .pipe(gulp.dest('css'));
});


gulp.task("watch", function () {
    log("Watching scss files for modifications");
    gulp.watch(sassFiles, ["sass"]);
});

gulp.task("default", ["sass"]);
