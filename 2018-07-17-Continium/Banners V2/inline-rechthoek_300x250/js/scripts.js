var count = 0;


$(document).ready(function() {	
	function animateAd(count) {
		var i = 0;
		self.setTimeout(function(){
			$('.wrapper figure').removeClass('show');
			$('.wrapper figure:nth-child(2)').addClass('show');
		}, 0);
		
		self.setTimeout(function(){
			$('div.wrapper figure figcaption span.title').addClass('show');
		}, 1100);
		self.setTimeout(function(){
			$('div.wrapper figure figcaption span.subtitle').addClass('show');
		}, 1300);
		self.setTimeout(function(){
			$('div.wrapper .logo-BonteHond').addClass('show');
		}, 1600);
		self.setTimeout(function(){
			$('div.wrapper .logo-DOX').addClass('show');
		}, 1800);
		self.setTimeout(function(){
			$('div.wrapper figure img').addClass('show');
		}, 100);
		
		self.setTimeout(function(){
			$('a.link').addClass('show');
		}, 2000);
		self.setTimeout(function(){
			$('a.link').addClass('hover');
		}, 2200);
		self.setTimeout(function(){
			$('a.link').removeClass('hover');
		}, 2400);
		self.setTimeout(function(){
			$('div.wrapper figure figcaption span.subtitle').addClass('bottom');
		}, 4000);
		self.setTimeout(function(){
			$('a.link').addClass('hover');
		}, 5500);
		self.setTimeout(function(){
			$('a.link').removeClass('hover');
		}, 5800);
		
		if (count < 2) {
			self.setTimeout(function(){
			$('.wrapper figure img').removeClass('show');
		}, 5000);
			self.setTimeout(function(){
				$('a.link').removeClass('show hover');
			}, 8000);
			self.setTimeout(function(){
				$('div.wrapper figure figcaption span.subtitle').removeClass('show');
			}, 8200);
			self.setTimeout(function(){
				$('div.wrapper figure figcaption span.title').removeClass('show');
			}, 8400);
			self.setTimeout(function(){
				$('div.wrapper figure figcaption span.subtitle').removeClass('bottom');
				animateAd(count);
			}, 9000);
			count++;
		}
	}
	animateAd(count);
});
	
	

			
	

