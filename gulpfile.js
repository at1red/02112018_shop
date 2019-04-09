let gulp = require('gulp');

// task - задание для GULP 

function generateCatalog() {
    console.log('Привет! Я TASK!');
}


gulp.task( 'style', generateCatalog );