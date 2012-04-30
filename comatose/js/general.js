$(document).ready(function() {
	function platformSupportsExternalFontFace() {
	
		var result = navigator.userAgent.match("WindowsPhone");
		
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