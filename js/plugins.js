// newwin
$(document).ready(function ()
{ 
	window.log = function f(){ log.history = log.history || []; log.history.push(arguments); if(this.console) { var args = arguments, newarr; args.callee = args.callee.caller; newarr = [].slice.call(args); if (typeof console.log === 'object') log.apply.call(console.log, console, newarr); else console.log.apply(console, newarr);}};
	(function(a){function b(){}for(var c="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),d;!!(d=c.pop());){a[d]=a[d]||b;}})
	(function(){try{console.log();return window.console;}catch(a){return (window.console={});}}());

	//centerwindow
	(function($){ 		  
		$.fn.popupWindow = function(instanceSettings){
			
			return this.each(function(){
			
			$(this).click(function(){
			
			$.fn.popupWindow.defaultSettings = {
				centerBrowser:0, // center window over browser window? {1 (YES) or 0 (NO)}. overrides top and left
				centerScreen:0, // center window over entire screen? {1 (YES) or 0 (NO)}. overrides top and left
				height:350, // sets the height in pixels of the window.
				left:0, // left position when the window appears.
				location:0, // determines whether the address bar is displayed {1 (YES) or 0 (NO)}.
				menubar:0, // determines whether the menu bar is displayed {1 (YES) or 0 (NO)}.
				resizable:0, // whether the window can be resized {1 (YES) or 0 (NO)}. Can also be overloaded using resizable.
				scrollbars:1, // determines whether scrollbars appear on the window {1 (YES) or 0 (NO)}.
				status:0, // whether a status line appears at the bottom of the window {1 (YES) or 0 (NO)}.
				width:960, // sets the width in pixels of the window.
				windowName:null, // name of window set from the name attribute of the element that invokes the click
				windowURL:null, // url used for the popup
				top:0, // top position when the window appears.
				toolbar:0 // determines whether a toolbar (includes the forward and back buttons) is displayed {1 (YES) or 0 (NO)}.
			};
			
			settings = $.extend({}, $.fn.popupWindow.defaultSettings, instanceSettings || {});
			
			var windowFeatures =    'height=' + settings.height +
									',width=' + settings.width +
									',toolbar=' + settings.toolbar +
									',scrollbars=' + settings.scrollbars +
									',status=' + settings.status + 
									',resizable=' + settings.resizable +
									',location=' + settings.location +
									',menuBar=' + settings.menubar;

					settings.windowName = this.name || settings.windowName;
					settings.windowURL = this.href || settings.windowURL;
					var centeredY,centeredX;
				
					if(settings.centerBrowser){
							
						{
							centeredY = window.screenY + (((window.outerHeight/2) - (settings.height/2)));
							centeredX = window.screenX + (((window.outerWidth/2) - 11 - (settings.width/2)));
						}
						window.open(settings.windowURL, settings.windowName, windowFeatures+',left=' + centeredX +',top=' + centeredY).focus();
					}else if(settings.centerScreen){
						centeredY = (screen.height - settings.height)/2;
						centeredX = (screen.width - settings.width)/2;
						window.open(settings.windowURL, settings.windowName, windowFeatures+',left=' + centeredX +',top=' + centeredY).focus();
					}else{
						window.open(settings.windowURL, settings.windowName, windowFeatures+',left=' + settings.left +',top=' + settings.top).focus();	
					}
					return false;
				});
				
			});	
		};
	})(jQuery);
});

// newwin call
$(document).ready(function () {
	$('.newwin').popupWindow({ height:370, width:980, top:50, left: 50, scrollbars:1, centerBrowser:1, centerScreen:1, menubar:0, resizable:0, status:0, toolbar:0});
	return false;
});

// center modal
function CenterModal(modalID)
{
	var $Clone = $('#'+modalID).clone().css('display', 'block').appendTo('body');
	var Top = Math.round(($Clone.height() - $Clone.find('.modal-content').height()) / 2);
	Top = Top > 0 ? Top : 0;
	$Clone.remove();
	$('#'+modalID).find('.modal-content').css("margin-top", Top);
}
