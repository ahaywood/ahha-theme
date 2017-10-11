//= include ../../../bower_components/jquery.fitvids/jquery.fitvids.js

jQuery ( function($) {

	var site = new SiteController($);
	site.init();

});

function SiteController($)
{
	self.init = function()
	{
		initFitVid();
	}

	function initFitVid() {
		
	}

	return self;
}
