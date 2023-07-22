const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssSorter = require("css-declaration-sorter");
const mmq = require("gulp-merge-media-queries");
const browsersync = require("browser-sync");
const cleanCss = require("gulp-clean-css");
const uglify = require("gulp-uglify");
const rename = require("gulp-rename");
const htmlBeatutify = require("gulp-html-beautify");

function compileSass() {
	return gulp.src("../assets/sass/**/*.scss")
		.pipe(sass())
		.pipe(postcss([autoprefixer(), cssSorter({
			"order": "smacss"
		})]))
		.pipe(mmq())
		.pipe(gulp.dest("../assets/css"))
		.pipe(cleanCss())
		.pipe(rename({
			suffix: ".min"
		}))
		.pipe(gulp.dest("../assets/css"))
}

function watch() {
	gulp.watch("../assets/sass/**/*.scss", gulp.series(compileSass));    //順番に
	gulp.watch("./js/**/*.js", gulp.series(minJS));
}

function minJS() {
	return gulp.src("./js/**/*.js")
		.pipe(gulp.dest("../assets/js"))
		.pipe(uglify())
		.pipe(rename({
			suffix: ".min"
		}))
		.pipe(gulp.dest("../assets/js"))
}

exports.compileSass = compileSass;
exports.watch = watch;
exports.minJS = minJS;