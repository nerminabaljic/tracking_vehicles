<! Ucitavanje karte !>
<div class ="col-md-9">

<div id="map-canvas"/>


    <script type="text/javascript"
             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQNr1shkm4sYDf2T1X1hA8HtQyI7Z3OEE">
    </script>

    <script type="text/javascript">
        function initialize() {
            var mapOptions = {
                center: new google.maps.LatLng(43.342486, 17.809782),
                zoom: 15
            };
            var map = new google.maps.Map(document.getElementById("map-canvas"),
                mapOptions);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>


<! Add marker !>
    <style>
        html, body, #map-canvas {
            height: 100%;
            margin: 0px;
            padding: 0px
        }
    </style>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

    <script>
    // The following example creates a marker in Mostar,
    // using a DROP animation. Clicking on the marker will toggle
    // the animation between a BOUNCE animation and no animation.

    var mostar = new google.maps.LatLng(43.342486, 17.809782);
    var parliament = new google.maps.LatLng(43.342486, 17.809782);
    var marker;
    var map;

    function initialize() {
        var mapOptions = {
            zoom: 13,
            center: mostar
        };

        map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

        marker = new google.maps.Marker({
            map:map,
            draggable:true,
            animation: google.maps.Animation.DROP,
            position: parliament
        });
        google.maps.event.addListener(marker, 'click', toggleBounce);
    }

    function toggleBounce() {

        if (marker.getAnimation() != null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }

    google.maps.event.addDomListener(window, 'load', initialize);

</script>

</div>
</div>
<br><br><br>

