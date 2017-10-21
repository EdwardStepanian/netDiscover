window.onload = function () {
    let myLatlng = null;
    let Marker = null;
    let currentPlace = null;
    let tmpData = null;
    const testData = {
        max: 10,
        min: 0,
        data: [
        ]
    };

    function getLocation() {
        return new Promise((resolve, reject) => {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(resolve, reject);
            } else {
                alert('Geolocation is not supported by this browser.');
            }
        });
    }
    function drowMarker(coordinates) {
        Marker = new google.maps.Marker({
            position: coordinates,
            map: map,
            title: 'Current Place coordinates'
        });
        return coordinates;
    }
    function getClickCoordinates() {
        return new Promise((resolve, reject) => {
            google.maps.event.addListener(map, "rightclick",  (event) =>  {
                let destination = {
                    lat: event.latLng.lat(),
                    lng: event.latLng.lng()
                };
                if(event){
                    resolve(destination);
                }else{
                    reject('Sorry')
                }
            })
        });
    }
    getLocation().then(function (position) {
        currentPlace = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
        };
        return myLatlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
    }).then((myLatlng) => {
        let myOptions = {zoom: 12, center: myLatlng};
        return map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
    }).then((map) => {
        drowMarker(currentPlace);
        getClickCoordinates().then((coordinates) => {
            return [currentPlace, drowMarker(coordinates)];
        }).then((coordinate) => {
            heatmap = new HeatmapOverlay(map, {
                "radius": 0.0035,
                "maxOpacity": 1,
                "scaleRadius": true,
                "useLocalExtrema": true,
                latField: 'lat',
                lngField: 'lng',
                valueField: 'count'
            }) ;

            var directionsService = new google.maps.DirectionsService();
                var directionsRequest = {
                origin: coordinate[0],
                destination: coordinate[1],
                travelMode: google.maps.DirectionsTravelMode.DRIVING,
            };
            directionsService.route(
                directionsRequest,
                function(response, status)
                {
                    return new Promise((resolve, reject) => {

                        if (status == google.maps.DirectionsStatus.OK)
                        {
                            new google.maps.DirectionsRenderer({
                                map: map,
                                directions: response
                            });
                            tmpData = response.routes[0].overview_path;
                            resolve(tmpData);
                        }

                        else{
                            reject('Something went wrong ~')
                        }
                    }).then((tmpData) => {
                        for(let latlng in tmpData) {
                            let count = 0 - 0.5 + Math.random() * (10  + 1);
                            testData.data.push({
                                lat: tmpData[latlng].lat(),
                                lng: tmpData[latlng].lng(),
                                count: count
                            })
                        }
                        heatmap.setData(testData);
                    })

                }
            );

        });
    });
};



function drowPolyline(start, end) {
    var flightPlanCoordinates = [
        start,
        end
    ];
    console.log(start);
    console.log(end);

    var flightPath = new google.maps.Polyline({
        path: flightPlanCoordinates,
        geodesic: true,
        strokeColor: '#FF0000',
        strokeOpacity: 0.7,
        strokeWeight: 1
    });

    flightPath.setMap(map);
}