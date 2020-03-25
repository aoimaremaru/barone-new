gulp = require('gulp');
runSequence = require('run-sequence');
sass = require('gulp-ruby-sass');
sourcemaps = require('gulp-sourcemaps');
gzip = require('gulp-gzip');
plumber = require("gulp-plumber");
notify = require('gulp-notify');
autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', () =>
  sass('library/scss/style.scss', {sourcemap: true})
    .pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
    .pipe(sourcemaps.write('maps', {     
      includeContent: false,
      sourceRoot: 'library'
    }))
    .pipe(gulp.dest('library/css/'))
);

gulp.task('autoprefixer', () =>
  gulp.src('library/css/*.css')
    .pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gzip())
    .pipe(gulp.dest('library/css/'))
);
// gulp.task('default', function() {
//  gulp.watch(['library/sass/*.scss']);
// });

gulp.task('css', function() {
  return runSequence(
    'sass',
    'autoprefixer'
    );
});

gulp.task('default', function() {
  gulp.watch(['css']);
});


gulp.task('watch', function(){
  gulp.watch('./library/scss/**/*.scss', ['css']);
});

gulp.task('default', ['css']);