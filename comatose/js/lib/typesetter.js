// Query the device pixel ratio.
//-------------------------------
function getDevicePixelRatio() {
        if(window.devicePixelRatio === undefined) return 1; // No pixel ratio available. Assume 1:1.
        return window.devicePixelRatio;

}

var typeSet = function() {
	var baselineStartItem = $('article p');

	// Default offset from the top of the page if the baseline start item can't be found.
	var offset = 0;
	if(baselineStartItem.length !== 0)
		offset = parseInt(baselineStartItem.offset().top) - 2;
	
	// Default line height if you can't find line-height in the body.
	var baseline = 18;
			
	var bodylineheight = parseInt(baselineStartItem.css('line-height'));
	if(!$.isNaN(bodylineheight))
		baseline = bodylineheight;

	// Default font size if script can't find font-size for body;
	var fontline = 12;
			
	var bodyfontsize = parseInt(baselineStartItem.css('font-size'));
	if(!$.isNaN(bodyfontsize))
		fontline = bodyfontsize;
		
	// Colors for the gridline (color) the font line (colorFont), and alt line (not used)
	var color = '#000';
	var colorFont = '#ddd';
	var colorAlt = '#fff';
	
	var overlay = $('#grid-overlay');
			
	// Build the overlay and the button.
	if(overlay.length === 0) {
		var links = $('<div id="links"></div>');
		var body = $('body')
		body.append(links);
			
		overlay = $('<div id="grid-overlay"></div>');
		body.prepend(overlay);
		overlay.hide();
		overlay.css('position', 'absolute');
		overlay.css('width', '100%');
		overlay.css('margin-left', 'auto');
		overlay.css('margin-right', 'auto');
		overlay.css('opacity', '0.50');
						
		links.css('position', 'fixed');
		links.css('right', baseline + 'px');
		links.css('top', baseline + 'px');
		links.css('padding', baseline / 2 + 'px');
		links.css('background', '#f8f8f8');
		links.css('border', '1px solid #e0e0e0');
		links.css('border-radius', '3px');
				
		links.append($('<a id="hide-grid" style="float: right; background-color: #F0F0F0; display: block; padding: 5px;border-radius: 2px;">Hide the Grid</a>'));
			
		links.append($('<a id="show-grid" style="float: right;  background-color: #F0F0F0; display: block; padding: 5px;border-radius: 2px;">Show the Grid</a>'));
						
		var gridinfo = $('<div id="gridinfo" style="display: none"></div>');
		gridinfo.append($('<ul style="clear: right; margin: '+baseline+'px 0 0 0; list-style: none;"><li>Offset: ' + offset + 'px</li><li>Baseline: ' + baseline + 'px</li><li>Fontsize: ' + fontline + 'px</li><li>Pixel ratio: ' + getDevicePixelRatio() + ':1</li></ul>'));
		
		links.append(gridinfo);
		
		
		// Hide and show links.
		var hideGridLink = $('#hide-grid');
		hideGridLink.hide();
	
		var showGridLink = $('#show-grid');
		showGridLink.show();
		
		showGridLink.click(function() {
				showGridLink.hide();
				hideGridLink.show();
				overlay.css('height', ($('body').height() - offset));
				overlay.show();
				gridinfo.show();
			});
			
		hideGridLink.click(function() {
			showGridLink.show();
			hideGridLink.hide();
			overlay.hide();
			gridinfo.hide();
		});
	}
	
	// if the window resizes, update the length calculation. Important for fluid widths.
	$(window).resize(function() {
		overlay.css('height', ($('body').height() - offset));
	});
	
	overlay.css('margin-top', offset);
	
				
	var canvas = document.createElement('canvas');
	canvas.setAttribute('width', 2);
	canvas.setAttribute('height', baseline * getDevicePixelRatio());
	
	var ctx = canvas.getContext('2d');
	if (ctx) {
		ctx.fillStyle = color;  
		
		//make the baseline and font line. Note: because the background image is tiled, the fontline will appear dotted.
		ctx.fillRect(0, ((baseline * getDevicePixelRatio())-1), 2, 1); // x, y, width, height
		ctx.fillRect(0, (((baseline * getDevicePixelRatio()) - (fontline * getDevicePixelRatio())) - 1), 1, 1)
		
		
		//ctx.fillStyle = colorAlt;
		//ctx.fillRect(0, 0, 2, 1);
		//ctx.fillRect(0, baseline-2, 2, 1);
		overlay.css('background-image', 'url(' + canvas.toDataURL() + ')');
		overlay.css('backround-repeat', 'repeat');
		overlay.css('background-position', offset + ' center');
		//overlay.css('background-size', (100 / getDevicePixelRatio()) + '%');
		overlay.css('background-size', (2 / getDevicePixelRatio()) + 'px ' + baseline + 'px');
	}
}

// make sure jQuery exists
if (typeof jQuery == 'undefined') {
	alert('You must have jQuery to use this script.')
}
else
{
	$(function() { typeSet(); });
}