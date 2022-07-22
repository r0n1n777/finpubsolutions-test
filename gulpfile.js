const gulp = require('gulp');
const connect = require('gulp-connect-php');
const browserSync = require('browser-sync').create();

gulp.task('connect', function() {
    connect.server();
})

gulp.task('sync', function() {
    browserSync.init({
        proxy: 'localhost:8000',
        notify: false,
    });
});

gulp.task('watch', function() {
    gulp.watch(['./**/*.css', './**/*.js', './**/*.php']).on('change', browserSync.reload);
});

gulp.task('default', gulp.parallel('connect', 'sync', 'watch'));
