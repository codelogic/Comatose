$(document).ready(function() {
	function platformSupportsExternalFontFace() {
	
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
});