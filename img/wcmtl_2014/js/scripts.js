ISO = {};

ISO.startReveal = function () {
	Reveal.initialize({

		// The "normal" size of the presentation, aspect ratio will be preserved
		// when the presentation is scaled to fit different resolutions. Can be
		// specified using percentage units.
		width                  : 1280,
		height                 : 720,

		// Factor of the display size that should remain empty around the content
		margin                 : 0.1,

		// Bounds for smallest/largest possible scale to apply to content
		minScale               : 0.2,
		maxScale               : 1.0,


		// Display controls in the bottom right corner
		controls               : true,

		// Display a presentation progress bar
		progress               : true,

		// Display the page number of the current slide
		slideNumber            : false,

		// Push each slide change to the browser history
		history                : true,

		// Enable keyboard shortcuts for navigation
		keyboard               : true,

		// Enable the slide overview mode
		overview               : true,

		// Vertical centering of slides
		center                 : true,

		// Enables touch navigation on devices with touch input
		touch                  : true,

		// Loop the presentation
		loop                   : false,

		// Change the presentation direction to be RTL
		rtl                    : false,

		// Turns fragments on and off globally
		fragments              : true,

		// Flags if the presentation is running in an embedded mode,
		// i.e. contained within a limited portion of the screen
		embedded               : false,

		// Number of milliseconds between automatically proceeding to the
		// next slide, disabled when set to 0, this value can be overwritten
		// by using a data-autoslide attribute on your slides
		autoSlide              : 0,

		// Stop auto-sliding after user input
		autoSlideStoppable     : true,

		// Enable slide navigation via mouse wheel
		mouseWheel             : false,

		// Hides the address bar on mobile devices
		hideAddressBar         : true,

		// Opens links in an iframe preview overlay
		previewLinks           : false,

		// Transition style
		transition             : 'linear', // default/cube/page/concave/zoom/linear/fade/none

		// Transition speed
		transitionSpeed        : 'default', // default/fast/slow

		// Transition style for full page slide backgrounds
		backgroundTransition   : 'default', // default/none/slide/concave/convex/zoom

		// Number of slides away from the current that are visible
		viewDistance           : 3,

		// Parallax background image
		parallaxBackgroundImage: '', // e.g. "'https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg'"

		// Parallax background size
		parallaxBackgroundSize : '' // CSS syntax, e.g. "2100px 900px"


	});


	Reveal.addEventListener('slidechanged', function (event) {
		// event.previousSlide, event.currentSlide, event.indexh, event.indexv
		$('body').removeClass().addClass('current-col-' + event.indexh, 'current-row-' + event.indexv);

		console.log(event.currentSlide);

		if ($(event.currentSlide).attr('data-run') == 'ISO.full-video-the-loop') {
			ISO.fullVideo.init();
		} else {
			ISO.fullVideo.destroy();
		}
	});


	Reveal.addEventListener('fragmentshown', function (event) {
		// event.fragment = the fragment DOM element
		var dataRun = $(event.fragment).attr('data-run');
		console.log(event, dataRun);

	});

	Reveal.addEventListener('fragmenthidden', function (event) {
		// event.fragment = the fragment DOM element
		var dataRun = $(event.fragment).attr('data-run');
		console.log(event, dataRun);


	});
};

ISO.fullVideo = {
	init   : function () {
		var _this = ISO.fullVideo;

		_this.$selector = $('#full-screen-the-loop');

		_this.isoVideo = new MediaElementPlayer('video', {
			// if the <video width> is not specified, this is the default
			defaultVideoWidth       : 1280,
			// if the <video height> is not specified, this is the default
			defaultVideoHeight      : 720,
			// if set, overrides <video width>
			videoWidth              : -1,
			// if set, overrides <video height>
			videoHeight             : -1,
			// width of audio player
			audioWidth              : 400,
			// height of audio player
			audioHeight             : 30,
			// initial volume when the player starts
			startVolume             : 0.8,
			// useful for <audio> player loops
			loop                    : true,
			// enables Flash and Silverlight to resize to content size
			enableAutosize          : true,
			// the order of controls you want on the control bar (and other plugins below)
			features                : [],
			// Hide controls when playing and mouse is not over the video
			alwaysShowControls      : false,
			// force iPad's native controls
			iPadUseNativeControls   : false,
			// force iPhone's native controls
			iPhoneUseNativeControls : false,
			// force Android's native controls
			AndroidUseNativeControls: false,
			// forces the hour marker (##:00:00)
			alwaysShowHours         : false,
			// show framecount in timecode (##:00:00:00)
			showTimecodeFrameCount  : false,
			// used when showTimecodeFrameCount is set to true
			framesPerSecond         : 25,
			// turns keyboard support on and off for this instance
			enableKeyboard          : true,
			// when this player starts, it will pause other players
			pauseOtherPlayers       : true,
			// array of keyboard commands
			keyActions              : []

		});

		_this.$selector.show();
		_this.isoVideo.play();
	},
	destroy: function () {
		var _this = ISO.fullVideo;

		_this.isoVideo.remove();
		_this.$selector.hide();
	}
};

$(document).ready(function () {
	ISO.startReveal();
});