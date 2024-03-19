<section id="clinic-map" class="py-5 bg-light">
    <h2 class="display-4 mb-4">Localização</h2>
    <div id="map" style="height: 50vh; width: 100%;"></div>
</section>

<script src="https://maps.googleapis.com/maps/api/js?key={{ $apiKey }}&callback=initMap" defer></script>
{{-- <script async src="https://maps.googleapis.com/maps/api/js?key={{ $apiKey }}&callback=console.debug&libraries=maps,marker&v=beta"></script> --}}

<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -5.8880133628845215, lng: -35.19721984863281},
            zoom: 14,
            advancedMarker: {lat: -5.8880133628845215, lng: -35.19721984863281}
        });
        const marker = new google.maps.Marker({ map, position: {lat: -5.8880133628845215, lng: -35.19721984863281} });
    }
</script>