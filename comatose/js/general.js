jQuery(document).ready(function() {
	function platformSupportsExternalFontFace() {
		// not ideal, but it's the only way to test for this case.
		var result = navigator.userAgent.match(/Windows Phone OS 7/i);
		return !result;
	}
	
	var supportsExternalFontface = platformSupportsExternalFontFace();
	
	Modernizr.load([
		{
			test : Modernizr.fontface && supportsExternalFontface,
			nope : [ modernizrScripts.cufon, modernizrScripts.BebasNeueRegular, modernizrScripts.cufonPolyfill ]
		}
	])

	jQuery(commentform).sisyphus();
});
