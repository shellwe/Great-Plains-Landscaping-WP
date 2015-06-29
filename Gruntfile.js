module.exports = function(grunt) {
	// Project configuration.
	grunt.initConfig({
		autoprefixer: {
			options: {
				browsers: ['last 2 versions', 'ie 8', 'ie 9']
					// Task-specific options go here.
			},
			your_target: {
				// Target-specific file lists and/or options go here.
			}
		},
		//watch: {
		sass: { // Task
			dist: { // Target
				files: {
					'style.css': 'sass/style.scss' // 'destination': 'source'
				}
			}
		},
		//},
		uglify: {
			build: {
				src: 'js/*.js',
				dest: 'js/build/final.js'
			}
		},
		watch: {
		  sass: {
				files: ['sass/*.scss'],
				tasks: ['sass'],
		  },
		}
		
	});
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.registerTask('default', ['watch']);
};