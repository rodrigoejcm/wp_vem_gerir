module.exports = function (grunt) {

// Project configuration. 
grunt.initConfig({
 	/*uncss: {
 	 	dist: {
 	 		options: {
      			ignore: ['#added_at_runtime', '.created_by_jQuery']
    		},
    		files: {
      			'dist/clean-css/vemgerir-tidy.css': [
      							'index.php', 
      							'page-contato.php', 
      							'footer.php',
      							'header.php',
      							'page-nosso-sistema.php',
      							'page-vem-crescer.php',
      							'page-vem-criar.php',
      							'page.php',
      							'function.php',
      							'comments.php',
      							'archive.php',
      							'search.php',
      							'sidebar.php',
      							'single.php',
      							'template-part/content-none.php',
      							'template-part/content-page.php',
      							'template-part/content-search.php',
      							'template-part/content.php',
      							'layouts/content-sidebar.php',
      							'layouts/sidebar-content.php'
      							]
    		},
  	 	}
   },*/

/*UNCSS TASK*/

exec: {
	get_grunt_sitemap: {
    	command: 'curl --silent --output sitemap.json http://localhost/wp-vemgerir/?show_sitemap'
	}
},
    
uncss: {
	dist: {
		options: {
        	ignore       : ['.hidden-xs'],
            stylesheets  : ['css/vemgerir.css', 'style.css'],
            ignoreSheets : [/fonts.googleapis/],
            urls         : [], //Overwritten in load_sitemap_and_uncss task
        },
        files: {
              'dist/clean-css/vemgerir.clean.css': ['**/*.php']
        }
    }
},

/*CONCAT TASK*/

  concat: {
    js: {
      src: [
      		'js/customizer.js',
      		'js/navigation.js',
      		'js/skip-link-focus-fix.js',
      		'js/slick.min.js',
      		'js/typekit-load.js',
      		'js/vemgerir.js'
      		],
      dest: 'build/js/scripts.js',
    },
    css: {
      src: [
      		'css/vemgerir.css',
      		'css/slick.css'
      		],
      dest: 'build/css/style.css',
    },
  },

/*WATCH TASK*/

  	watch: {
	  	js: {
	    	files: ['js/**/*.js'],
	    	tasks: ['concat:js'],
	    },
	    css: {
	    	files: ['css/**/*.css'],
	    	tasks: ['concat:css'],
	    },
	    php: {
	    	files: ['*.php', 'includes/{,*/}*.php'],
	  	},
	  	options: {
	    	livereload: true,
	    	spawn: false
	  	}
    },
});


/*TASK LOAD AND REGISTER*/

	grunt.loadNpmTasks('grunt-exec');
	grunt.loadNpmTasks('grunt-uncss');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-concat');

	grunt.registerTask('load_sitemap_json', function() {
    	var sitemap_urls = grunt.file.readJSON('./sitemap.json');
    	grunt.config.set('uncss.dist.options.urls', sitemap_urls);
    });
    
    grunt.registerTask('cleancss', ['exec:get_grunt_sitemap','load_sitemap_json','uncss:dist']);  
    

/*	grunt.registerTask('deafault',['']);*/


};
