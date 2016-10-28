var gulp = require("gulp");
var koutoSwiss = require("kouto-swiss");
var stylus = require("gulp-stylus");
var livereload = require('gulp-livereload');


var isProduction = false;
var buildTasks = ['styles'];


gulp.task('styles', function(){
    gulp.src('src/styles/app.styl')
        .pipe(stylus({
            use: koutoSwiss(),
            compress: isProduction
          }))
        .pipe(gulp.dest("src/styles/"))
        .pipe(livereload());
});


gulp.task('watch', buildTasks, function(){
  livereload.listen();
  gulp.watch('src/styles/*.styl', ['styles']);
});