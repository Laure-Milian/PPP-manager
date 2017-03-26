(function() {

	require('./bootstrap');

	var app = {
		
		init: function() {
			console.log('hey');
			this.listeners();
		},

		listeners: function() {
			$('.choosePPP').on('click', this.findPPP);
		},

		findPPP: function() {
			let ppp_id = $(this).attr('ppp_id');
			$.ajax('/find/' + ppp_id)
			.done(function(response) {
				app.showPPP(response);
			})
		},

		showPPP: function(selected_ppp) {
			$('.show_ppp_progress').text(selected_ppp.progress);
			$('.show_ppp_problems').text(selected_ppp.problems);
			$('.show_ppp_planned').text(selected_ppp.planned);
		}

	}

	app.init();

})();


