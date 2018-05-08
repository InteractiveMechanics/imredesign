/**
 * File main.js.
 *
 * Handles miscellaneous DOM manipulations stuff 
 */
 

var init = function() {
 
	var anim;
	var animEl = document.getElementById('myAnimation');
	
	
	 
	var myAnimation = function() {
			animEl.innerHTML = "";
	
	        anim = lottie.loadAnimation({
	            container: document.getElementById('myAnimation'),
	            renderer: 'svg',
	            loop: true,
	            autoplay: true,
	            path: 'http://dev.interactivemechanics.com/imredesign/wp-content/themes/im2018/json/404pg-attract.json'
	            });
	
	        anim.play();
	        console.log('my Animation');
	
	}
	
		
	var clearAnimation = function() {
		anim.destroy();
	}
	
	var loadHoverAnimation = function() {
		 
		 anim = lottie.loadAnimation({
	        container: document.getElementById('myAnimation'),
	        renderer: 'svg',
	        loop: false,
	        autoplay: true,
	        path: 'http://dev.interactivemechanics.com/imredesign/wp-content/themes/im2018/json/404pg-ani.json'
	        });
	
	        anim.play();
	        anim.addEventListener('complete', myAnimation, false);	
	        console.log('hoverAnimation');       

	}
	
	
	var myHoverAnimation = function(event) {
		clearAnimation();
		   
		setTimeout(function() { loadHoverAnimation(); }); 
		  		   
		
	}
	

	
		
	myAnimation();
	animEl.addEventListener('click', myHoverAnimation, false);	
	
	
	
	

}



//need to make sure that DOM is loaded before function executes
document.addEventListener('DOMContentLoaded', init, false);


( function( $ ) {
	$('.grid').packery({
	  // options
	  itemSelector: '.grid-item',
	  gutter: 0
	});


} )(jQuery);
