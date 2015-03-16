'use strict';


var del         = require('del');
var path        = require('path');
var gulp        = require('gulp');
var cookbook    = require('gulp-cookbook');


config.paths = {};
config.paths.dist       = 'public';
config.paths.source     = 'resources';
config.paths.components = path.join(config.paths.source, 'components');

config.paths.jsSource   = [
    path.join(config.paths.components, 'app/src/**/*.module.js'),
    path.join(config.paths.components, '**/src/**/*.module.js'),
    path.join(config.paths.components, '**/src/**/*.config.js'),
    path.join(config.paths.components, '**/src/**/*.js')
];

config.paths.lessSource = path.join(config.paths.components, '**/src/**/*.less');

gulp.task('scripts', ['clean-build'], cookbook.building.scripts(config.paths.jsSource, config.paths.dist, { concat: 'app.js', sourceMaps: config.paths.dist }));
gulp.task('styles', ['clean-build'], cookbook.building.less(config.paths.lessSource, config.paths.dist, { concat: 'app.css', sourceMaps: config.paths.dist }));
