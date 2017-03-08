'use strict';

var gulp = require('gulp'),
	watch = require('gulp-watch'),
	prefixer = require('gulp-autoprefixer'),
	uglify = require('gulp-uglify'),
	concat  = require('gulp-concat'),
	sourcemaps = require('gulp-sourcemaps'),
	rigger = require('gulp-rigger'),
	cssmin = require('gulp-minify-css'),
	imagemin = require('gulp-imagemin'),
	pngquant = require('imagemin-pngquant'),
	rimraf = require('rimraf');

var path = {
	build: {
		js: 'public/assets/',
		css: 'public/assets/',
		fonts: 'public/assets/fonts/'
	},
	src: {
		js: 'assets/js/scripts.min.js',
		style: 'assets/css/styles.css',
		fonts: 'assets/fonts/**/*.*'
	},
	watch: {
		js:    'assets/js/**/*.js',
		style: 'assets/css/**/*.css',
		fonts: 'assets/fonts/**/*.*'
	},
	clean: './build'
};

gulp.task('clean', function (cb) {
	rimraf(path.clean, cb);
});

gulp.task('js:build', function () {
	gulp.src(path.src.js)
		.pipe(rigger())
		.pipe(sourcemaps.init())
		.pipe(uglify())
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(path.build.js));
});

gulp.task('style:build', function () {
	gulp.src(path.src.style)
		.pipe(rigger())
		.pipe(prefixer())
		.pipe(sourcemaps.init())
		.pipe(cssmin())
		.pipe(concat('styles.min.css'))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(path.build.css));
});

gulp.task('fonts:build', function() {
	gulp.src(path.src.fonts)
		.pipe(gulp.dest(path.build.fonts))
});

gulp.task('build', [
	'js:build',
	'style:build',
	'fonts:build',
]);


gulp.task('watch', function(){
	watch([path.watch.style], function(event, cb) {
		gulp.start('style:build');
	});
	watch([path.watch.js], function(event, cb) {
		gulp.start('js:build');
	});
	watch([path.watch.fonts], function(event, cb) {
		gulp.start('fonts:build');
	});
});


gulp.task('default', ['build', 'watch']);