
	var openInfoWindow;

    $(function($) {
			var option = MapConfig[0]['map']; 
			var latlng = new google.maps.LatLng(option.lat, option.lng);  
			var mapOptions = {  
				zoom: option.zooms,  
				mapTypeId: google.maps.MapTypeId.ROADMAP,  
				center: latlng,
				scrollwheel: false
			};  
			// GoogleMapの生成  
			var map = new google.maps.Map(
				document.getElementById(option.id),
				mapOptions
			);
			
			for( var i = 0; i < MapConfig[0]['markers'].length ; i++){
				var obj = MapConfig[0]['markers'][i];
				var myLatLng = new google.maps.LatLng(obj.lat, obj.lng);
				var Marker = new google.maps.Marker({
					position: myLatLng,
					map: map,
					icon: MapConfig[0]['markers'][i]['icon']
				});
				/*
				google.maps.event.addListener(Marker, 'click', (function(url){
				  return function(){ location.href = url; };
				})(MapConfig[0]['markers'][i]['url']));
				*/
				//setMarkerClickListener(Marker, MapConfig[0]['markers'][i]['info']);
			}
			
		  var styleOptions = [
    {
        "featureType": "all",
        "elementType": "all",
        "stylers": [
            {
                "lightness": "17"
            },
            {
                "visibility": "on"
            },
            {
                "saturation": "3"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#6d7697"
            }
        ]
    },
    {
        "featureType": "administrative.locality",
        "elementType": "all",
        "stylers": [
            {
                "saturation": 7
            },
            {
                "lightness": 19
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 100
            },
            {
                "visibility": "simplified"
            },
            {
                "color": "#f7f9ff"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "-100"
            },
            {
                "lightness": "100"
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "all",
        "stylers": [
            {
                "lightness": "100"
            },
            {
                "saturation": "99"
            },
            {
                "gamma": "10.00"
            },
            {
                "color": "#dde1f0"
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "labels.text",
        "stylers": [
            {
                "lightness": "-40"
            },
            {
                "saturation": "-21"
            },
            {
                "gamma": "1.09"
            },
            {
                "color": "#7d81a6"
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#0075ff"
            },
            {
                "saturation": -93
            },
            {
                "lightness": 31
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "saturation": "-68"
            },
            {
                "lightness": "31"
            },
            {
                "hue": "#0011ff"
            },
            {
                "gamma": "0.92"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels",
        "stylers": [
            {
                "hue": "#008eff"
            },
            {
                "saturation": -93
            },
            {
                "lightness": -2
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#007fff"
            },
            {
                "saturation": -90
            },
            {
                "lightness": -8
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "-55"
            },
            {
                "lightness": "62"
            },
            {
                "visibility": "on"
            },
            {
                "hue": "#0021ff"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "labels.text",
        "stylers": [
            {
                "lightness": "-40"
            },
            {
                "saturation": "13"
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -78
            },
            {
                "lightness": 67
            },
            {
                "visibility": "simplified"
            },
            {
                "color": "#dde7f2"
            }
        ]
    }
];
		  
		  var styledMapOptions = { name: 'concorde' }
		  var sampleType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
		  map.mapTypes.set('sample', sampleType);
		  map.setMapTypeId('sample');
	});
	/*
	function setMarkerClickListener(marker, markerData) {
	  google.maps.event.addListener(marker, 'click', function(event) {
		if (openInfoWindow) {
		  openInfoWindow.close();
		}
		openInfoWindow = new google.maps.InfoWindow({
		  content: markerData
		});
		google.maps.event.addListener(openInfoWindow,'closeclick',function(){
		  openInfoWindow = null;
		})
		openInfoWindow.open(marker.getMap(), marker);
	  });
	  
	}*/

var MapConfig = [
    {
        "map": {
            "id": "gmap",
            "lat": 34.713979,
            "lng": 137.726670,
			"zooms": 15
        }
        ,"markers": [
			
			
			
			{ //高師本郷OPEN
                "lat": 34.713979,
               // "lng": 137.393972,
                "lng": 137.726670,
				"info": "",
                "icon": "/images/common/mapic.png"
            }
			
		
        ]
    }
];

