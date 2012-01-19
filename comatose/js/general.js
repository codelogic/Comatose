/*
	Author: 
*/
$(document).ready(function() {
	function rendersNiceFontface() {
		//result = navigator.appVersion.indexOf("Win") != -1 
		//	|| navigator.appVersion.indexOf("Android") != -1;
		//return result;
		return true;
	}

	var supportsNiceFontface = !rendersNiceFontface();

	Modernizr.load([
		{
			test : Modernizr.fontface && Modernizr.canvas && supportsNiceFontface,
			
			nope : [ 'lib/cufon.js', '../font/BebasNeueRegular_400.font.js', 'cufon-polyfill.js' ]
		}
	])


		
});