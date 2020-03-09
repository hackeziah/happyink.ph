        <!-- google map api -->

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlZPf84AAVt8_FFN7rwQY5nPgB02SlTKs "></script>
        <script>
            var myCenter=new google.maps.LatLng(30.249796, -97.754667);
            function initialize()
            {
                var mapProp = {
                  center:myCenter,
                  scrollwheel: false,
                  zoom:15,
                  mapTypeId:google.maps.MapTypeId.ROADMAP
                  };
                var map=new google.maps.Map(document.getElementById("hastech2"),mapProp);
                var marker=new google.maps.Marker({
                  position:myCenter,
                    animation:google.maps.Animation.BOUNCE,
                  icon:'',
                    map: map,
                  });
                var styles = [
                  {
                    stylers: [
                      { hue: "#c5c5c5" },
                      { saturation: -100 }
                    ]
                  },
                ];
                map.setOptions({styles: styles});
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
      // grab an element
            var myElement = document.querySelector(".intelligent-header");
            // construct an instance of Headroom, passing the element
            var headroom  = new Headroom(myElement);
            // initialise
            headroom.init();
        </script>

        <script type="text/javascript">
            // grab an element
            var myElement = document.querySelector(".intelligent-header");
            // construct an instance of Headroom, passing the element
            var headroom  = new Headroom(myElement);
            // initialise
            headroom.init();
        </script>
        <script src="assets/js/main.js"></script>
