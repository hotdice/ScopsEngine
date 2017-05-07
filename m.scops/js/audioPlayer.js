/*
	
	p: Scops Engine
	a: Gor Arakelyan
	c: All rights reserved (c) 2016
	!: fb: facebook.com/arakelianGor
			mail: gor19973010@gmail.com

*/

	var firstPlay = true , audioLoop = 2 ;
	
	
	function playAudio( id , event , bool ) {
		if( id == currentAudio ) startPlayingAudio( id , event , bool );
		else {
			
			if( event ) {
				var listID = $(event.target).closest('.audiolist').attr('id');
				eventAudio = $(event.target).closest('.audio-object');
			}
			
			currentAudio = id;
			
			$('#pages #audioplayer .content .player').empty();
			$('#pages #audioplayer .player').css('height', '89px');
			$( '.mus-' + currentAudio ).eq(0).clone().appendTo('#pages #audioplayer .content .player');
			
			$('#pages #audioplayer .playlist header').text( langs.playlist );
			
			if( $('#pages #audioplayer .content .playlist').attr('id') != listID ) {
				$('#pages #audioplayer .content .playlist .list').html( $('.audiolist#' + listID ).html() );
				
				$('#pages #audioplayer .content .playlist').attr('id' , listID);
			}
			
			$('.audio-object .loader').width(0);
			$('.audio-object .options').css('height','0px');
			$('.audio-object .options .loop').attr('class','loop');
			$('.audio-object .dur').text('');
			
			$('.audio-object .play').css('display','block');
			$('.audio-object .pause').css('display','none');
			
			audioElem = $( '.mus-' + currentAudio );
			
			$('.audio-object .seek').data('check' , '1');
			audioElem.find('.seek').data('check' , '0');
			
			audioElem.find('.options').css('height','35px');
			audioElem.find('.loop:eq(' + audioLoop + ')').attr('class','loop selected');
			
			audio.src = _root_ + '/' + $('.mus-' + currentAudio + ':first').data('src');
			
			startPlayingAudio( id , event , bool );
			
		}
	}
	
	function startPlayingAudio( id , event, bool ) {
		if( audio.paused ) {
			audio.play();
			audioElem.find('.pause').css('display','block');
			audioElem.find('.play').css('display','none');
			$('#main-panel .panel-object .panel-object-content.mus-button').text('');
		} else {
			audio.pause();
			audioElem.find('.pause').css('display','none');
			audioElem.find('.play').css('display','block');
			$('#main-panel .panel-object .panel-object-content.mus-button').text('');
		}
		if( firstPlay ) {
			firstPlay = false;
			changesAudio();
			$('#main-panel .panel-object .panel-object-content.mus-button').css('display','inline-block');
		}
		if( bool ) seekAudio( event , id );
	}
	
	function changesAudio() {
		if( !audio.paused ) {
			for( var i = 0 ; i < $('.mus-' + currentAudio).length ; i++  ) {
				var elem = $('.mus-' + currentAudio).eq(i);
				if( !audioSeeking || ( audioSeeking && elem.get(0) != eventAudio.get(0) ) ) {
					var newWidth = audio.currentTime * elem.find('.audio-line').width() / audio.duration;
					elem.find('.loader').width( Math.ceil( newWidth ) );
					if( audio.duration >= 0) elem.find('.dur').text( '-' + toMinutes( audio.duration - audio.currentTime ) );
				} 
			}
		}
		
		setTimeout( changesAudio , 200 );
	}
	
	function seekAudio( e , id ) {
		
		if( $(e.target).data('check') == '1' ) {	
			playAudio( id , e , true );
		} else {
			audioSeeking = true;
			eventAudio = $(e.target).closest('.audio-object');
			
			$(document).disableSelection();
			$('body').css('cursor','pointer');
			
			var leftCir = e.pageX - eventAudio.find('.audio-line').offset().left;
			
			eventAudio.find('.loader').css( 'width' , leftCir + 'px' );
			
			if( audioSeeking ) {
				var audFakeTime = ( audio.duration * eventAudio.find('.loader').width() ) / eventAudio.width();
				if( audio.duration >= 0) eventAudio.find('.dur').text( '-' + toMinutes( audio.duration - audFakeTime ) );
			}
			
			eventAudio.find('.loader').css('transition','all 0.1s ease');
		}
		audioSeekUP( e );
	}
	
	function toMinutes( num ) {
		
		num = Math.round( num );
		var sec = num%60;
		sec = ( sec < 10 )?'0' + sec:sec;
		return ( sec < 10 )?( ( num - sec ) / 60 ) + ':0' + Math.abs( sec ):( ( num - sec ) / 60 ) + ':' + Math.abs( sec );
		
	}
	
	$(audio).on('ended',function(){
		if( !audioSeeking ) {
			switch( audioLoop ) {
				case 0:
					audio.currentTime = 0;
					audio.pause();
					audioElem.find('.pause').css('display','none');
					audioElem.find('.play').css('display','block');
				break;
				case 1:
					audio.currentTime = 0;
					audio.play();
				break;
				case 2:
					for( var i = 0 ; i < $('#pages #audioplayer .content .playlist .audio-object').length ; i++ )
						if( $('#pages #audioplayer .playlist .audio-object').eq(i).data('id') == currentAudio ) break;
						
					i = ( i + 1 < $('#pages #audioplayer .content .playlist .audio-object').length )?i+1:0;
					var playID = $('#pages #audioplayer .playlist .audio-object').eq( i ).data('id');
					playAudio( playID , 0 , false );
				break;
			}
		}
	});
	
	function changeLoop( num ) {
		audioLoop = num;
		audioElem.find('.loop').attr('class','loop');
		audioElem.find('.loop:eq(' + audioLoop + ')').attr('class','loop selected');
	}
	
	function searchAudio( event ) {
		if( event.keyCode == 13 ) {
			var key = $('#pages #audioplayer .input').val();
			$('#pages #audioplayer .input').val('');
			$('#panels #main-panel .item.search .find').val(key);
			
			closePlayer();
			
			ajaxQuery('search' , 3 );
		}
	}
	