<?php
/*
Template Name: Directions
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<body>
<section class="container-fluid">
        <div class="directions">
            <h3 class="directions-title"><?php the_field('titlefordirections'); ?></h3>
            
            <a href="https://goo.gl/maps/RjFrMSoMTA6SMydt7">
                <img class="google-map" alt="Qries" src="<?php the_field('directionsmap'); ?>"
                 width="600">
            </a>
            
            
            
            
            
            
            
            <style type="text/css">
.acf-map {
    width: 100%;
    height: 400px;
    border: #ccc solid 1px;
    margin: 20px 0;
}

// Fixes potential theme css conflict.
.acf-map img {
   max-width: inherit !important;
}
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3Vg95Dchqc0CaHNl9R19BjunATqKSTpA"></script>
<script type="text/javascript">
(function( $ ) {

/**
 * initMap
 *
 * Renders a Google Map onto the selected jQuery element
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @return  object The map instance.
 */
function initMap( $el ) {

    // Find marker elements within map.
    var $markers = $el.find('.marker');

    // Create gerenic map.
    var mapArgs = {
        zoom        : $el.data('zoom') || 16,
        mapTypeId   : google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map( $el[0], mapArgs );

    // Add markers.
    map.markers = [];
    $markers.each(function(){
        initMarker( $(this), map );
    });

    // Center map based on markers.
    centerMap( map );

    // Return map instance.
    return map;
}

/**
 * initMarker
 *
 * Creates a marker for the given jQuery element and map.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @param   object The map instance.
 * @return  object The marker instance.
 */
function initMarker( $marker, map ) {

    // Get position from marker.
    var lat = $marker.data('-32.0490723');
    var lng = $marker.data('115.747941');
    var latLng = {
        lat: parseFloat( lat ),
        lng: parseFloat( lng )
    };

    // Create marker instance.
    var marker = new google.maps.Marker({
        position : latLng,
        map: map
    });

    // Append to reference for later use.
    map.markers.push( marker );

    // If marker contains HTML, add it to an infoWindow.
    if( $marker.html() ){

        // Create info window.
        var infowindow = new google.maps.InfoWindow({
            content: $marker.html()
        });

        // Show info window when marker is clicked.
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open( map, marker );
        });
    }
}

/**
 * centerMap
 *
 * Centers the map showing all markers in view.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   object The map instance.
 * @return  void
 */
function centerMap( map ) {

    // Create map boundaries from all map markers.
    var bounds = new google.maps.LatLngBounds();
    map.markers.forEach(function( marker ){
        bounds.extend({
            lat: marker.position.lat(),
            lng: marker.position.lng()
        });
    });

    // Case: Single marker.
    if( map.markers.length == 1 ){
        map.setCenter( bounds.getCenter() );

    // Case: Multiple markers.
    } else{
        map.fitBounds( bounds );
    }
}

// Render maps on page load.
$(document).ready(function(){
    $('.acf-map').each(function(){
        var map = initMap( $(this) );
    });
});

})(jQuery);
</script>
<?php 
$location = get_field('location');
if( $location ): ?>
    <div class="acf-map" data-zoom="16">
        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
    </div>
<?php endif; ?>
<p class="pickup text-center"><?php the_field('textfordirectionsintro'); ?></p>
    
        
        </div>
    </section>.


    
    
    
    
     <section class="container-fluid contact-directions directions-info">
        <div class="contact-header">
            <!--need new classes for text-->
            <h2><?php the_field('directionscontact'); ?></h2>
        </div>
        <!--CONTACT-HEADER-->
        <div class="row contact-content-directions">
                <div class="row contact-row">
                    <div class="col-md-6 contact-left-text">
                        <p><?php the_field('contactlocationtitle'); ?></p>
                    </div>
                    <!--CONTACT-LEFT-TEXT-->
                    <div class="col-md-6 contact-right-text">
                        <p><?php the_field('contactlocationtext'); ?></p>
                    </div>
                    <!--CONTACT-RIGHT-TEXT-->
                </div>
                <!--CONTACT-ROW-->
                <div class="row contact-row">
                    <div class="col-md-6 contact-left-text">
                        <p><?php the_field('contacthourstitle'); ?></p>
                    </div>
                    <!--CONTACT-LEFT-TEXT-->
                    <div class="col-md-6 contact-right-text">
                        <p><?php the_field('contacthourstext'); ?><p></div>
                    <!--CONTACT-RIGHT-TEXT-->
                </div>
                <!--CONTACT-ROW-->
                <div class="row contact-row">
                    <div class="col-md-6 contact-left-text">
                        <p><?php the_field('contactphonetitle'); ?></p>
                    </div>
                    <!--CONTACT-LEFT-TEXT-->
                    <div class="col-md-6 contact-right-text">
                        <p><?php the_field('contactphonetext'); ?></p>
                    </div>
                    <!--CONTACT-RIGHT-TEXT-->
                </div> 
                <!--CONTACT-ROW-->
        </div>
        <!--CONTACT-CONTENT-->
    </section>
    <!--CONTAINER-FLUID CONTACT-->
    
    
    
    
    
    
    
    
<section class="container-fluid directions-tourist">

        <div class="row">
            
            <div class="col-md-6">
                <div class="directions-info-text">
                    <div>
                    
                    <img class="minimal-map-freo" src="<?php the_field('imagefordirectionstourist'); ?>" alt="Fremantle Boat Harbour" height="300px">
                        
                    </div>
                
            </div>
            <div> </div>
        </div>
            
            
        <div> </div>
            <div class="col-md-5 directions-attractions">
                <h2 class="directions-title-2"><?php the_field('titlefordirectionstourist'); ?></h2>
                <div class="directions-info-headings">
                    <p><?php the_field('textfordirectionstourist'); ?></p>
                    <br>
                    
                    <div class="ourservices-btn">
                <a class="btn btn-default ourservices_btn" href="http://206.189.45.97/~mesh21/sub/?page_id=547"><?php the_field('buttonfordirectionstourist'); ?></a>
            </div>
                    
                </div>
            </div>
            
    </div>
            
</section>
</body>
<?php get_footer();?>