var gulp = require('gulp');
// Requires the gulp-sass plugin
var sass = require('gulp-sass');


// ---- Tasks ---- //

gulp.task('sass', function(){
  return gulp.src('css/shadowproject.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('css'))
});



// ---- Watchers ---- //

gulp.task('watch', function(){
  gulp.watch('css/**/*.scss', ['sass']); 
  // Other watchers
})