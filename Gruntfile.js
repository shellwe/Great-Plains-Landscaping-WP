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
    },
  },

    pkg: grunt.file.readJSON('package.json'),
	  sass: {                              // Task
    dist: {                            // Target
      options: {                       // Target options
        style: 'expanded'
      },
      files: {                         // Dictionary of files
//        'source/puresite/test.css': 'source/puresite/test.scss',       // 'destination': 'source'
        'test.css': 'test.scss',       // 'destination': 'source'
      }
    }
	},
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: 'src/<%= pkg.name %>.js',
        dest: 'build/<%= pkg.name %>.min.js'
      }
    }
  });
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Default task(s).
  grunt.registerTask('default', ['uglify']);
  grunt.registerTask('default', ['sass']);

};