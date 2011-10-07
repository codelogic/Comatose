$(function() {
			
			var bodylineheight = parseInt($('body').css('line-height'));
			var bodyfontsize = parseInt($('body').css('font-size'));
			
			var item = $('#page-content article p');
			
			var offset = 0;
			if(item.length !== 0)
				offset = parseInt(item.offset().top) - 2;

			var baseline = bodylineheight;
			var fontline = bodyfontsize;
			var color = '#000';
			var colorFont = '#ddd';
			var colorAlt = '#fff';
			
		
			var overlay = $('#grid-overlay');
			
			if(overlay.length === 0) {
				var links = $('<div id="links"></div>');
				var body = $('body')
				body.prepend(links);
			
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
				gridinfo.append($('<ul style="clear: right; margin-top: '+baseline+'px; list-style: none;"><li>Offset: ' + offset + 'px</li><li>Baseline: ' + baseline + 'px</li><li>Fontsize: ' + fontline + 'px</li></ul>'));
				links.append(gridinfo);
				
				var hideGrid = $('#hide-grid');
				hideGrid.hide();
				
				var showGrid = $('#show-grid');
				showGrid.show();
				
				showGrid.click(function() {
						showGrid.hide();
						hideGrid.show();
						overlay.css('height', ($('body').height() - offset));
						overlay.show();
						gridinfo.show();
					});
					
				hideGrid.click(function() {
					showGrid.show();
					hideGrid.hide();
					overlay.hide();
					gridinfo.hide();
				});
			}
			
			
			$(window).resize(function() {
				overlay.css('height', ($('body').height() - offset));
			});
			
			//overlay.css('height', $('body').height() - offset + baseline);
			overlay.css('margin-top', offset);
						
			var canvas = document.createElement('canvas');
			canvas.setAttribute('width', 2);
			canvas.setAttribute('height', baseline);
			
			var ctx = canvas.getContext('2d');
			if (ctx) {
				ctx.fillStyle = color;  
				ctx.fillRect(0, baseline-1, 2, 1); // x, y, width, height
				
				ctx.fillStyle = color; 
				ctx.fillRect(0, baseline - fontline - 1, 1, 1)
				//ctx.fillStyle = colorAlt;
				//ctx.fillRect(0, 0, 2, 1);
				//ctx.fillRect(0, baseline-2, 2, 1);
				overlay.css('background-image', 'url(' + canvas.toDataURL() + ')');
				overlay.css('backround-repeat', 'repeat');
				overlay.css('background-position', offset + ' center');
			}
});