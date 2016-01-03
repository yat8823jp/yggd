/*
 * Global variables
 */
var gulp = require( 'gulp' ),
	scss = require( 'gulp-sass' ),
	browserSync = require( 'browser-sync' ),
	plumber = require( 'gulp-plumber' ),//エラー通知
	notify = require( 'gulp-notify' ),//エラー通知
	imagemin = require( 'gulp-imagemin' ),//画像圧縮
	imageminPngquant = require( 'imagemin-pngquant' ),//png画像の圧縮
	pleeease = require( 'gulp-pleeease' ),//ベンダープレフィックス
	sourcemaps = require('gulp-sourcemaps'),
	paths = {
		rootDir : './',
		srcDir : 'dev.images/',
		dstDir : 'img/'
	}

/*
 * Sass
 */
gulp.task( 'scss', function() {
	gulp.src( paths.rootDir + 'scss/**/*.scss' )
		.pipe( plumber({
			errorHandler: notify.onError( 'Error: <%= error.message %>' )
		}) )
		.pipe( sourcemaps.init() )
		.pipe( scss() )
		.pipe( pleeease() )
		.pipe( sourcemaps.write( './' ) )
		.pipe( gulp.dest( paths.rootDir + 'css' ) );
});

/*
 * Pleeease
 */
gulp.task('pleeease', function() {
	return gulp.src( paths.rootDir + 'css/*.css' )
		.pipe( plumber ( {
			errorHandler: notify.onError( 'Error: <%= error.message %>' )
		} ) )
		.pipe( pleeease({
			// minifier: false, //圧縮の有無 true/false
			sass: true
		}) )
		.pipe( gulp.dest( paths.rootDir + 'css' ) );
});

/*
 * Imagemin
 */
gulp.task( 'imagemin', function(){
	var srcGlob = paths.srcDir + '**/*.+(jpg|jpeg|gif|svg)';
	var dstGlob = paths.dstDir;
	var imageminOptions = {
		optimizationLevel: 7
	};

	gulp.src( srcGlob )
		.pipe( imagemin( imageminOptions ) )
		.pipe( gulp.dest( 'img' ) );
});

gulp.task('imageminPngquant', function () {
	gulp.src( paths.srcDir + '**/*.png' )
		.pipe( imageminPngquant( {quality: '65-80', speed: 1 } )())
		.pipe( gulp.dest( 'img' ) );
});

/*
 * Browser-sync
 */
gulp.task( 'browser-sync', function() {
	browserSync.init({
		proxy: "vccw.dev",
		notify: false
	});
});

gulp.task( 'bs-reload', function () {
	browserSync.reload();
});

/*
 * Default
 */
gulp.task( 'default', ['browser-sync'], function() {
	var bsList = [
		paths.rootDir + 'js/**/*.js',
		paths.rootDir + 'css/*.css',
		paths.rootDir + '**/*.php'
	];
	gulp.watch( paths.rootDir + 'scss/**/*.scss', ['scss'] );
	gulp.watch( bsList, ['bs-reload']);
});