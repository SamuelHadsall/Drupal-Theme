(function ( $ ) {
	$.fn.CustomMap = function( options ) {
		var settings = $.extend({
			home: { latitude: 53.339381, longitude: -6.260533 },
			text: '<div class="map-popup"><h1>Web Development Blog | DeveloperDrive</h1><br/><div class="logo"><img src="http://developerdrive.developerdrive.netdna-cdn.com/wp-content/themes/dd_flat/images/logor.png" /></div><div class="about">A web development blog for all your HTML5, WordPress and jQuery needs</div></div><div class="clear"></div>',
			icon_url: 'http://www.developerdrive.com/wp-content/uploads/2013/08/ddrive.png',	
			zoom: 15				
		}, options );
		
		var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);
			 
		return this.each(function() {	
			var element = $(this);
			
			var options = {
				zoom: settings.zoom,
				center: coords,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				mapTypeControl: true,
				scaleControl: true,
				zoomControlOptions: {
					style: google.maps.ZoomControlStyle.DEFAULT
				},
				overviewMapControl: true,	
			};
			
			var map = new google.maps.Map(element[0], options);
			
			var icon = { 
				url: settings.icon_url, 
				origin: new google.maps.Point(0, 0)
			};

			var marker = new google.maps.Marker({
				position: coords,
				map: map,
				icon: icon,
				draggable: false
			});
			
			var info = new google.maps.InfoWindow({
				content: settings.text
			});

			google.maps.event.addListener(marker, 'click', function() { 
				info.open(map, marker);
			});

			var styles = [{
					featureType: "all",
					stylers: [
					  { saturation: -80 }
					]
				},{
					featureType: "road",
					elementType: "geometry",
					stylers: [
					  { hue: "#00ffee" },
					  { saturation: 50 }
					]
				}, {
					featureType: 'poi.school',
					elementType: 'geometry',
					stylers: [
						{ hue: '#4f2a0b' },
						{ lightness: -15 },
						{ saturation: 99 }
					]
				}, {
					featureType: 'poi.park',
					elementType: 'geometry',
					stylers: [
						{ hue: '#a3e36b' },
						{ lightness: -15 },
						{ saturation: 99 }
					]
				}, {
					featureType: 'poi.park',
					elementType: 'labels.icon',
					stylers: [
						{ hue: '#450b4f' },
						{ lightness: -15 },
						{ saturation: 99 }
					]
				}
			];

			map.setOptions({styles: styles});
		});
 
	};
}( jQuery ));