<template>
    <!-- Google maps id para a pagina usar tag :
      <components-homepage> </components-homepage> -->
    <div id="gMap"></div>

</template>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
    export default {
        name: "MyGoogleMapAPI",

        mounted() {

            var companyPosition =  new google.maps.LatLng(-25.3878882,-49.2342492);

            const element = document.getElementById('gMap');
            const options = 
            {
                 zoom: 15,
                 center: companyPosition , 
            };

            const map = new google.maps.Map(element, options);
            
            var empresaPosition = companyPosition ;

	        var marker = new google.maps.Marker({
			position: empresaPosition,
			map: map,
            title: 'Nome Empresa',
            //animation: google.maps.Animation.DROP,
			});

        }
    }

</script>

<style>
    /* Always set the map height explicitly to define the size of the div
    * element that contains the map. */
    #gMap 
    {
        width: 450px;
        height: 400px;
    }
</style>


