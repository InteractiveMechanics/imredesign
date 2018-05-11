var keysArray = [];
var currentKeyIndex = 0;
var isPlaying = false;
var hasStartedRecording = false;

var isRotatingBody = false;
var base_url = 'http://interactivemechanics.com/Holiday2015/';

var isMobile = {
    Android: function() {
        return /Android/i.test(navigator.userAgent);
    },
    BlackBerry: function() {
        return /BlackBerry/i.test(navigator.userAgent);
    },
    iOS: function() {
        return /iPhone|iPad|iPod/i.test(navigator.userAgent);
    },
    Windows: function() {
        return /IEMobile/i.test(navigator.userAgent);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows());
    }
};

window.onload = function(e) {
	
	if(!isMobile.any()) {
		$('.on-load-modal').css('opacity', 1);
	} else {
		$('.desktop-message').hide();
		$('.mobile-message').show();
	}
	
	setTimeout(function() {
		$('.on-load-modal').css('opacity', 0); 
		
		lowLag.init({'urlPrefix':'audio/'});

		lowLag.load(['sleighbell.mp3'],'sleigh_bell');
	
		lowLag.load(['church_bell_B.mp3'],'bell_b');
		lowLag.load(['church_bell_A.mp3'],'bell_a');
		lowLag.load(['church_bell_G.mp3'],'bell_g');
		lowLag.load(['church_bell_F.mp3'],'bell_f');
		lowLag.load(['church_bell_E.mp3'],'bell_e');
		lowLag.load(['church_bell_D.mp3'],'bell_d');
		lowLag.load(['church_bell_C.mp3'],'bell_c');
		
		lowLag.load(['Vocal-1.mp3'],'vocal_1');
		lowLag.load(['Vocal-2.mp3'],'vocal_2');
		lowLag.load(['Vocal-3.mp3'],'vocal_3');
		lowLag.load(['Vocal-4.mp3'],'vocal_4');
		lowLag.load(['Vocal-5.mp3'],'vocal_5');
		lowLag.load(['Vocal-6.mp3'],'vocal_all');
		
		setTimeout(function(){
			
			var keys = getParameterByName('keys');
	
			if(keys) {
				keysArray = keys.split(',');
				$('.play-icon').show();
			}
		
			/*if(keysArray.length > 0) {
				isPlaying = true;
				playKeysArray();
				$('.play-icon').show();
			}*/
		
		}, 800);
	}, 1300);
}

var playKeysArray = function() {
	var character = keysArray[currentKeyIndex];

	if(currentKeyIndex < keysArray.length) {
		performAction(character);
		currentKeyIndex += 1;

		setTimeout(playKeysArray, 800);
	}

	if (currentKeyIndex == keysArray.length) {
		//keysArray = [];
		isPlaying = false;
		
		if(isRotatingBody) {
			//moveBodies();
		}
	}
}

window.onkeydown = function(e) { 
  return !(e.keyCode == 32);
};

window.onkeyup = function(e) {

	var key = e.keyCode ? e.keyCode : e.which;
	var character = getCharacter(key);   
	performAction(character);
	   	
	if(hasStartedRecording) {
		keysArray.push(character);
	}
}

function getCharacter(key) {
	var letter = String.fromCharCode(key);
	return letter.toLowerCase();
}

function getAudioTag() {
	var audioTag = $('audio');
	return audioTag[0];
}

function rotateHead(person, class_name) {
	$('.character.'+ person +' .head .top').addClass(class_name).delay(1000).queue(function(){
    	$(this).removeClass(class_name).dequeue();
	});
}

function lightBuilding(class_name) {
	$(class_name).css('display', 'block').delay(200).queue(function(){
    	$(this).css('display', 'none').dequeue();
	});
}

function moveBodies() {
	if(isRotatingBody) {
		$('.character').removeClass('character-rocking');
		isRotatingBody = false;
   } else {
   		$('.character').addClass('character-rocking')
   		isRotatingBody = true;
   }
}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function playHolidayCard() {
	
	if(keysArray.length > 0 && !isPlaying) {
		isPlaying = true;
		currentKeyIndex = 0;
		playKeysArray();
	}
}

function startRecording() {
	hasStartedRecording = !hasStartedRecording;
	
	if(hasStartedRecording) {
		keysArray = [];
		$('li.record-icon').addClass('active');
		$('li.record-icon span').text('Stop recording');
		
		setButtonOpacity('.1');
	} else {
		$('li.record-icon').removeClass('active');
		$('li.record-icon span').text('Record a new song');
		
		$('li.play-icon').show();
		
		setButtonOpacity('1');
	}
}


function setButtonOpacity(opacity) {
	$('li.info-icon').css('opacity', opacity);
	$('li.twitter-icon').css('opacity', opacity);
}

function sendToTwitter() {
	hasStartedRecording = false;
	var queryString =  keysArray.join();
	var longURL = base_url;
	
	if(queryString !== '') {
		longURL += '?keys=' + queryString
	}
	
	$.getJSON(
        "http://api.bitly.com/v3/shorten?callback=?", 
        { 
            "format": "json",
            "apiKey": "R_690091f760ff43dc9e9e0a6f707ab05a",
            "login": "jminteractivemechanics",
            "longUrl": longURL
        },
        function(response)
        {
            openTwitterLink(response.data.url);
        }
    );
}

function sendToFacebook() {
	hasStartedRecording = false;
	var queryString =  keysArray.join();
	var longURL = base_url;
	
	if(queryString !== '') {
		longURL += '?keys=' + queryString
	}
	
	var url = 'https://www.facebook.com/sharer/sharer.php?u=' + longURL
	window.open(url, '_blank');
}

function openTwitterLink(shorten_url) {
	
	var url = '';
	if(keysArray.length > 0) {
		url = "https://twitter.com/home?status=Check out the holiday jingle I made with @InteractiveMech’s ecard! " + shorten_url;
	} else {
		url = "https://twitter.com/home?status=Happy Holidays from @InteractiveMech! Create a personalized holiday jingle with our ecard " 
			  + shorten_url;
	}

	window.open(url, '_blank');
}

function scrollToMessage() {
    /*$('html, body').animate({
        scrollTop: $("#message").offset().top
    }, 850);*/
    
    $('#modal-link').click();
}


function performAction(character) {
	audioTag = getAudioTag();
	var validCharacter = true;
	
	switch (character) {
    	case 'a':
    		//audioTag.src = 'audio/church_bell_B.mp3';
    		lowLag.play('bell_b');
    		lightBuilding('.light-1');
    		break;
    	case 's':
    		//audioTag.src = 'audio/church_bell_A.mp3';
    		lowLag.play('bell_a');
    		lightBuilding('.light-2');
    		break;
    	case 'd':
    		//audioTag.src = 'audio/church_bell_G.mp3';
    		lowLag.play('bell_g');
    		lightBuilding('.light-3');
    		break;
    	case 'f':
    		//audioTag.src = 'audio/church_bell_F.mp3';
    		lowLag.play('bell_f');
    		lightBuilding('.light-4');
    		break;
    	case 'j':
    		//audioTag.src = 'audio/church_bell_E.mp3';
    		lowLag.play('bell_e');
    		lightBuilding('.light-5');
    		break;
    	case 'k':
    		//audioTag.src = 'audio/church_bell_D.mp3';
    		lowLag.play('bell_d');
    		lightBuilding('.light-6');
    		break;
    	case 'l':
        	//audioTag.src = 'audio/church_bell_C.mp3';
        	lowLag.play('bell_c');
        	lightBuilding('.light-7');
    		break;
	    case 'c':
	    	//audioTag.src = 'audio/Vocal-1.mp3';
	    	lowLag.play('vocal_1');
	    	rotateHead('mike', 'head-rocking');
    		break;
	    case 'v':
	    	//audioTag.src = 'audio/Vocal-2.mp3';
	    	lowLag.play('vocal_2');
	    	rotateHead('jeff', 'head-rocking');
    		break;
	    case 'b':
	    	//audioTag.src = 'audio/Vocal-3.mp3';
	    	lowLag.play('vocal_3');
	    	rotateHead('amelia', 'head-rocking');
    		break;
	    case 'n':
	    	//audioTag.src = 'audio/Vocal-4.mp3';
	    	lowLag.play('vocal_4');
	    	rotateHead('stacey', 'head-rocking');
    		break;
	    case 'm':
	        //audioTag.src = 'audio/Vocal-5.mp3';
	        lowLag.play('vocal_5');
	        rotateHead('christina', 'head-rocking');
    		break;
    	case 'q':
    		//audioTag.src = 'audio/sleighbell.mp3';
    		lowLag.play('sleigh_bell');
	        moveBodies();
    		break;
    	case ' ':
    		//audioTag.src = 'audio/Vocal-6.mp3';
    		lowLag.play('vocal_all');
    		rotateHead('mike', 'drastic-rocking');
    		rotateHead('jeff', 'drastic-rocking');
    		rotateHead('amelia', 'drastic-rocking');
    		rotateHead('stacey', 'drastic-rocking');
	        rotateHead('christina', 'drastic-rocking');
    		break;
    	default:
    		validCharacter = false;
    		break;
	}

	//if(validCharacter) {
		//audioTag.load();
		//audioTag.play();
	//}
}