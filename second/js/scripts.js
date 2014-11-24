// ReadyFunctions
$( document ).ready(function() {
	// Fullpage
	$('#fullpage').fullpage({
		scrollingSpeed: 500,
		easing: 'easeInOutQuad',
		scrollOverflow: false,
		menu: false,
		verticalCentered: false,
		resize : true,
		sectionSelector: 'section',
		normalScrollElements: '.search-content',
		touchSensitivity: 20,
		onLeave: function(anchorLink, index, slideIndex, direction){
			if(index == 1){
				$('header').delay(500).removeClass('on');
			}
			if(index == 2){
				//$('header').delay(500).addClass('on');
				$('.two .wrapper').stop().delay(500).animate({'opacity': 1}, 500, 'easeInOutQuad');
				$('.two .long-line').stop().delay(1000).animate({'opacity': 0.3}, 1000, 'easeInOutQuad');
				if($('#gmap_canvas').length) $('header').addClass('on');
				if(initDone == 0 && $('#gmap_canvas').length) {
					init();
					$('.two .side').css('display', 'inline-block');
					$('.two .side').stop().delay(1000).animate({'opacity': 0.9}, 500, 'easeInOutQuad');
				}
				if($('.contacta').length) $('.contacta .wrapper').stop().delay(500).animate({'opacity': 1}, 500, 'easeInOutQuad');
			}
			if(index == 3){
				$('.three .wrapper').eq(0).stop().delay(500).animate({'opacity': 1}, 500, 'easeInOutQuad');
				$('.three .wrapper').eq(1).stop().delay(1000).animate({'opacity': 1}, 500, 'easeInOutQuad');
				if($('#gmap_canvas').length) $('header').removeClass('on');
				if($('.map-container').length || $('.contact').length || $('.principles').length || $('.club').length){
					if(footMap == 0) initialize();
					$('.four .map-image').stop().delay(500).animate({'opacity': 1, 'top': '0px'}, 500, 'easeInOutQuad');
					$('.four .orange-bar').stop().delay(500).animate({'opacity': 1}, 500, 'easeInOutQuad');
				}
			}
			if(index == 4){
				if(footMap == 0) initialize();
				$('.four .map-image').stop().delay(500).animate({'opacity': 1, 'top': '0px'}, 500, 'easeInOutQuad');
				$('.four .orange-bar').stop().delay(500).animate({'opacity': 1}, 500, 'easeInOutQuad');
			}
		},
		afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){
			
		}	
	});
	// Bring in everything
	$('header').delay(500).removeClass('on');
	$('.container').stop().delay(1000).animate({'opacity': 1}, 500);
	
	// When link is clicked
	$('a').click(function(e) {
		e.preventDefault();
		var thisRef = $(this).attr('href');
		if(thisRef == '#') return;
		$('.container').stop().delay(500).animate({'opacity': 0}, 500, 'easeInOutQuad');
		$('header').stop().delay(1000).animate({'opacity': 0}, 500, 'easeInOutQuad', function(){
			window.location = thisRef; //e.target.href;
		});	
	});
	// Prepare for fade In
	$('.two .wrapper').css('opacity', 0);
	$('.three .wrapper').css('opacity', 0);
	$('.four .map-image').css('opacity', 0);
	$('.four .orange-bar').css('opacity', 0);
	// Diamond Content
	var d = 0;
	$('.two .diamond-content, .one.club .diamond-content, .contact .diamond-content').each(function(i, element) {
        if($(this).index() != 1) $(this).css({'opacity': 0, 'display': 'none'});
    });
	$('.one.club .long-line, .contact .long-line').stop().delay(1000).animate({'opacity': 0.3}, 1000, 'easeInOutQuad');
	//Left
	$('.two .left, .one.club .left, .contact .left').click(function(){
		var dy = d - 1; if(dy == -1) dy = $('.two .diamond-content, .one.club .diamond-content, .contact .diamond-content').length - 1;
		$('.two .long-line, .one.club .long-line, .contact .long-line').stop().animate({'width': '96px', 'margin-left': '-48px', 'left': '50%'}, 500, 'easeInOutQuad', function(){
			$('.two .diamond-content, .one.club .diamond-content, .contact .diamond-content').eq(d).stop().animate({'opacity': 0}, 500, 'easeInOutQuad', function(){ $(this).css({'display': 'none'}); });
			$('.two .diamond, .one.club .diamond, .contact .diamond').stop().animate({'zoom': 0.5, 'opacity': 0, 'left': '-100%'}, 500, 'easeInOutQuad', function(){
				$(this).css('left', '100%');
				$('.two .diamond-content, .one.club .diamond-content, .contact .diamond-content').eq(dy).css('display', 'block');
				$('.two .diamond-content, .one.club .diamond-content, .contact .diamond-content').eq(dy).stop().animate({'opacity': 1}, 500, 'easeInOutQuad');
				$('.two .diamond, .one.club .diamond, .contact .diamond').stop().animate({'opacity': 1, 'zoom': 1, 'left': '50%'}, 500);
				$('.two .long-line, .one.club .long-line, .contact .long-line').stop().animate({'width': '100%', 'margin-left': '0px', 'left': '0px'}, 500, 'easeInOutQuad');
				if(d == 0) d = $('.two .diamond-content, .one.club .diamond-content, .contact .diamond-content').length - 1; else d--;	
			});
		});
	});
	//Right
	$('.two .right, .one.club .right, .contact .right').click(function(){
		var dy = d + 1; if(dy == $('.two .diamond-content, .one.club .diamond-content, .contact .diamond-content').length) dy = 0;
		$('.two .long-line, .one.club .long-line, .contact .long-line').stop().animate({'width': '96px', 'margin-left': '-48px', 'left': '50%'}, 500, 'easeInOutQuad', function(){
			$('.two .diamond-content, .one.club .diamond-content, .contact .diamond-content').eq(d).stop().animate({'opacity': 0}, 500, 'easeInOutQuad', function(){ $(this).css({'display': 'none'}); });
			$('.two .diamond, .one.club .diamond, .contact .diamond').stop().animate({'zoom': 0.5, 'left': '100%', 'opacity': 0}, 500, 'easeInOutQuad', function(){
				$(this).css('left', '-100%');
				$('.two .diamond-content, .one.club .diamond-content, .contact .diamond-content').eq(dy).css('display', 'block');
				$('.two .diamond-content, .one.club .diamond-content, .contact .diamond-content').eq(dy).stop().animate({'opacity': 1}, 500, 'easeInOutQuad');
				$('.two .diamond, .one.club .diamond, .contact .diamond').stop().animate({'opacity': 1, 'left': '50%', 'zoom': 1}, 500);
				$('.two .long-line, .one.club .long-line, .contact .long-line').stop().animate({'width': '100%', 'margin-left': '0px', 'left': '0px'}, 500, 'easeInOutQuad');
				if(d == $('.two .diamond-content, .one.club .diamond-content, .contact .diamond-content').length - 1) d = 0; else d++;	
			});	
		});
	});
	
	homeSlide();
	
	//Footer Map
	var footMap = 0;
	function initialize() {
		var latLang = new google.maps.LatLng(51.581924,-3.309666)
        var mapCanvass = document.getElementById('footer-map');
        var mapOptionss = {
          center: latLang,
          zoom: 12,
		  scrollwheel: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var mapp = new google.maps.Map(mapCanvass, mapOptionss);
		var infowindoww = new google.maps.InfoWindow({ 
			content: '<b style="color: #000000">Hawthorn Leisure</b>'
		});
		var markerr = new google.maps.Marker({ // Set the marker
			position: latLang,
			map: mapp,
			title: 'Hawthorn Leisure'
		});
		infowindoww.open(mapp, markerr);
		footMap = 1;
	}
	
	// Live Search
	function search() {
		var query_value = $('input#search').val();
		$('b#search-string').html(query_value);
		if(query_value !== ''){
			$.ajax({
				type: 'POST',
				url: 'search.php',
				data: { query: query_value },
				cache: false,
				success: function(html){
					$('ul#results').html(html).click(function(e){
						e.preventDefault();
						map.setZoom(15);
						var target = (event.target.tagName=='A') ? event.target : $(event.target).closest('a')[0];
						var d = 0;
						var markerId;
						for(d; d < addresses.length; d++) {
							if($(target).attr('class') == id[d]) google.maps.event.trigger(markers[d], 'click', {});
						}
					});
				}
			});
		}return false;    
	}
	jQuery('.mapsearch').on('input', function() {
		clearTimeout($.data(this, 'timer'));
		var search_string = $(this).val();
		if (search_string == '') {
			$('ul#results').fadeOut();
			$('h4#results-text').fadeOut();
			autoCenter();
		}else{
			$('ul#results').fadeIn();
			$('h4#results-text').fadeIn();
			$(this).data('timer', setTimeout(search, 100));
			$('.search-content .clear').animate({'opacity': 1}, 250);
			//Click Zoom
		};
	});
	$('.search-content .clear').click(function(){
		$('.mapsearch').val('');
		$(this).animate({'opacity': 0}, 250);
		$('ul#results').fadeOut();
		$('h4#results-text').fadeOut();
		autoCenter();
	});
	var sideToggle = 1;
	$('.side-toggle').click(function(){
		if(sideToggle == 1){
			$('.side').animate({'margin-right': '-312px'}, 500, 'easeInOutQuad');	
			$(this).find('i').addClass('rot');
			sideToggle = 0;
		} else{
			$('.side').animate({'margin-right': '0px'}, 500, 'easeInOutQuad');
			$(this).find('i').removeClass('rot');
			sideToggle = 1;
		}
	});
	
});

// Global Functions
function homeSlide() {
	//Initiate
	var figure = $(window).width();
	var container = figure * $('.slide-container figure').length;
	$('.slide-container').css('width', container+'px');
	$('.slide-container figure').css('width', figure	+'px');
	$('.slide-container figure img').css({'width': (figure + 192) +'px'});
	
	$('.slide-container .content').each(function(j, element) {
        if($(this).index() != 3) $(this).css('opacity', 0);
    });

	var homeSlideInterval = setInterval(function(){ homeSlideIntervalFunction(); }, 5000);
	var i = 0;
	function homeSlideIntervalFunction() {
		y = i - 1; if(y == -1) y = $('.slide-container figure').length - 1;
		$('.slide-container figure').eq(y).find('img').stop().animate({'width': figure + 'px', 'margin-left': '0px'}, 4000, 'easeInOutCubic', function(){
			$('.slide-container figure').eq(i).find('img').css({'width': (figure + 192) + 'px', 'margin-left': ''});
		});
		$('.slide-container').stop().delay(750).animate({'margin-left': '-' + figure * i + 'px'}, 750, 'easeInOutCubic');
		$('.slide-container .content').eq(i).stop().delay(750).animate({'opacity': 1}, 750, 'easeInOutCubic');
		$('.slide-container .content').eq(y).stop().delay(750).animate({'opacity': 0}, 750, 'easeInOutCubic');
		$('.slide-toggle ul li .fa-circle-o').removeClass('fa-circle-o').addClass('fa-circle');
		$('.slide-toggle ul li').eq(i).find('i').removeClass('fa-circle').addClass('fa-circle-o');
		if(i == $('.slide-container figure').length - 1) i = 0; else i++;
	}
	homeSlideIntervalFunction();
	//Resize
	$(window).on('resize', function(){
		var figure = $(window).width();
		var container = figure * $('.slide-container figure').length;
		$('.slide-container').css('width', container+'px');
		$('.slide-container figure').css('width', figure	+'px');
	});
	//Toggle
	$('.slide-toggle ul li').click(function(e){
		e.stopPropagation();
		clearInterval(homeSlideInterval);
		i = $(this).index(); y = i - 1; if(y == -1) y = $('.slide-container figure').length - 1;
		$('.slide-container figure').eq(y).find('img').stop().animate({'width': figure + 'px', 'margin-left': '0px'}, 3000, 'easeInOutCubic', function(){
			$('.slide-container figure').eq(i).find('img').animate({'width': (figure + 192) + 'px', 'margin-left': ''}, 3000);
		});
		$('.slide-container').stop().delay(1000).animate({'margin-left': '-' + figure * i + 'px'}, 500, 'easeInOutCubic');
		if(i == $('.slide-container figure').length - 1) i = 0; else i++;
		$('.slide-toggle ul li .fa-circle-o').removeClass('fa-circle-o').addClass('fa-circle');
		$(this).find('i').removeClass('fa-circle').addClass('fa-circle-o');
		setInterval(function(){ homeSlideIntervalFunction(); }, 5000);
	});
}

//Let section Map

var initDone = 0;
var map;
var addresses = [];
var images = [];
var names = [];
var ref = [];
var markers = [];
var infoWindows = [];
var id = [];
var desc = [];
var bounds;
function init(){
	var mapCanvas = document.getElementById('gmap_canvas');
	var mapOptions = {
		center: new google.maps.LatLng(0, 0),
		zoom: 5,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false
	}
	map = new google.maps.Map(mapCanvas, mapOptions);

    setMarkers();
	
	initDone = 1;
}
function codeAddress(address) {
	$.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address='+address+'&sensor=false', null, function (data) {
		map.setCenter(data.results[0].geometry.location);
		map.setZoom(15);
	});
}
function setMarkers(){
	$('.two #address').each(function(y){ addresses[y] = $(this).html(); });
	$('.two #image').each(function(u){ images[u] = $(this).html(); id[u] = $(this).attr('num'); });
	$('.two #name').each(function(v){ names[v] = $(this).html(); });
	$('.two #ref').each(function(k){ ref[k] = $(this).html(); });
	$('.two #desc').each(function(l){ desc[l] = $(this).html(); });
	var marker; var c = 0;
	for (var x = 0; x < addresses.length; x++) {
        $.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address='+addresses[x]+'&sensor=false', null, function (data) {
            var p = data.results[0].geometry.location
            var latlng = new google.maps.LatLng(p.lat, p.lng);
            marker = new google.maps.Marker({
                position: latlng,
                map: map
            });
			markers[c] = marker;
			map.setCenter(marker.getPosition());
			
			autoCenter();
			
			var content = '<h1>' + names[c] + '</h1>' + addresses[c].replace(/, /g, ", <br />") + '<b>' + ref[c] + '</b>';
			content = '<div class="infowindow"><figure><img src="../../admin/uploads/' + images[c] + '" /></figure><div class="address">' + content + '</div><div class="desc">' + desc[c] + '</div><a href="../../preview/let/show/' + id[c] + '" target="_blank" class="smooth">More information</a></div>';

			var infowindow = new google.maps.InfoWindow();
			infoWindows.push(infowindow);
		
			google.maps.event.addListener(marker, 'click', (function(marker, content, infowindow){ 
				return function() {
				    infowindow.setContent(content);
					closeAllInfoWindows();
				    infowindow.open(map, marker);
				};
			})(marker, content, infowindow));
			
			c++;
        });
    }
	google.maps.event.addListener(map, 'click', function() { closeAllInfoWindows(); });
}
function autoCenter() {
	var bounds = new google.maps.LatLngBounds();
	$.each(markers, function (index, marker) {
		bounds.extend(marker.position);
	});
	map.fitBounds(bounds);
}
function closeAllInfoWindows() {
  for (var i=0;i<infoWindows.length;i++) {
     infoWindows[i].close();
  }
}