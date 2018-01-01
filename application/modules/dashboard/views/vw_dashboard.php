<!doctype html>
<html lang="">
<head>
	<?php $this->load->view('components/header'); ?>
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/'); ?>openlayers/ol.css" type="text/css" />

	<!-- Propeller theme css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('template/') ?>themes/css/propeller-theme.css" />
	<!-- Propeller admin theme css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('template/') ?>themes/css/propeller-admin.css">
 <style>
 .ol-popup {
  min-width: 600px;
}
.popup {
  min-width: 600px;
}
.popover {
  max-width: 600px;
}
</style>
</head>
<body>
	<div id="headerr"></div>
	<?php $this->load->view('components/nav_side'); ?>
	<!--content area start-->
	<div id="content" class="pmd-content inner-page">
		

		<!--tab start-->
		<div class="container-fluid full-width-container about">
			<!-- Title -->
			<h1 class="section-title" id="services">
				<span>Dashboard</span>
			</h1><!-- End Title -->

			
			<section class="row component-section">
				<!-- table card code and example -->
				<div class="col-md-12">
					<div class="component-box">
						<!-- table card example -->
						<div  class="pmd-card pmd-z-depth pmd-card-custom-view">
              <div id="map" class="map"></div>
              <div id="popup" class="ol-popup">
              </div>
            </div>

          </div> <!-- table card example end -->
        </div>
      </div> <!-- table card code and example end -->
    </section>
  </div><!-- tab end -->


</div><!-- content area end -->
<div id="footerrr"></div>

<!-- Footer Starts -->
<?php $this->load->view('components/footer'); ?>
<script src="<?php echo base_url('assets/plugins/'); ?>openlayers/ol-debug.js"></script>
<script>
var baseUrl ='<?php echo base_url(); ?>';
        // Declare a Tile layer with an OSM source
        var osmLayer = new ol.layer.Tile({
        	source: new ol.source.OSM()
        });
        var msLayer = new ol.layer.Image({
        	source: new ol.source.ImageWMS({
        		url: "http://localhost:8080/cgi-bin/mapserv.exe?map=D:/xZeroxSugarx/x/Private/xampp/htdocs/gis/assets/mapfile/PekanbaruKampar.map&mode=map", 
        		serverType: "mapserver", 
        		params: {
        			LAYERS: "kabupaten", 
        			FORMAT: "image/png"
        		}
        	}), 
        });
        var iconStyle = new ol.style.Style({
        	image: new ol.style.Icon( /** @type {olx.style.IconOptions} */ ({
        		anchor: [0.5, 46],
        		anchorXUnits: 'fraction',
        		anchorYUnits: 'pixels',
        		src: baseUrl + 'images/blue-dot.png'
        	}))
        });

        <?php foreach ($listLokasi as $key => $lokasi) { ?>
        	var iconFeature<?php echo $key; ?> = new ol.Feature({
        		geometry: new ol.geom.Point(ol.proj.transform([<?php echo $lokasi->objek_longitude; ?>, <?php echo $lokasi->objek_latitude; ?>], 'EPSG:4326', 'EPSG:3857')),
        		nama : '<?php echo json_encode($lokasi->objek_nama); ?>',
        		alamat : '<?php echo json_encode(nl2br($lokasi->objek_alamat)); ?>',
        		jadwal : '<?php  echo json_encode(nl2br($lokasi->objek_jadwal)); ?>',
        		kontak : '<?php echo json_encode($lokasi->objek_kontak); ?>',
        		long : '<?php echo json_encode($lokasi->objek_longitude); ?>',
            lat : '<?php echo json_encode($lokasi->objek_latitude); ?>',
            photo : '<?php echo json_encode($lokasi->objek_foto); ?>',

          });
        	iconFeature<?php echo $key; ?>.setStyle(iconStyle);

        	<?php } ?>


        	var vectorSource = new ol.source.Vector({
        		features: [
        		<?php foreach ($listLokasi as $key => $lokasi) { ?>
        			iconFeature<?php echo $key; ?>,
        			<?php } ?>
        			]
        		});
        	var vectorLayer = new ol.layer.Vector({
        		source: vectorSource
        	});
        // Create latitude and longitude and convert them to default projection
        var birmingham = ol.proj.transform([101.447403, 0.533505], 'EPSG:4326', 'EPSG:3857');
        // Create a View, set it center and zoom level
        var view = new ol.View({
        	center: birmingham,
        	zoom: 12
        });
        // Instanciate a Map, set the object target to the map DOM id
        var map = new ol.Map({
        	target: 'map'
        });
        // Add the created layer to the Map
        map.addLayer(osmLayer);
         //map.addLayer(msLayer);
         map.addLayer(vectorLayer);

        // Set the view for the map
        map.setView(view);

        var element = document.getElementById('popup');

        var popup = new ol.Overlay({
        	element: element,
        	positioning: 'bottom-center',
        	stopEvent: false,
        	offset: [0, -50]
        });
        map.addOverlay(popup);

          // display popup on click
          map.on('singleclick', function(evt) {
          	var feature = map.forEachFeatureAtPixel(evt.pixel,
          		function(feature) {
          			return feature;
          		});
          	if (feature) {

          		var coordinates = feature.getGeometry().getCoordinates();
          		popup.setPosition(coordinates);
          		$(element).attr( 'data-placement', 'top' );
          		$(element).attr( 'data-original-title', feature.get('nama') );
          		
          		$(element).attr( 'data-content', 
                '<div class="row">' +
                '<div class="col-md-6">' +
                '<strong>Alamat</strong> : ' + '<br/>' + feature.get('alamat') + '<br/>' +
                '<strong>Jadwal</strong> : ' + '<br/>' +  feature.get('jadwal') + '<br/>' +
                '<strong>Kontak</strong> : ' + '<br/>' +  feature.get('kontak') + '<br/>' +
                '<strong>Koordinat</strong> : ' + '<br/>' +  feature.get('lat') + ' , ' + feature.get('long') + '<br/>' +
                '</div>' +
                '<div class="col-md-6">' +
                '<strong>Photo</strong> : ' + '<br/>' +  '<img style="width:100%" src='+feature.get('photo')+'>'+'<br/>' +
                '</div>'+
                '</div>'
                );
          		
          		$(element).attr( 'data-html', true );
          		$(element).popover('show');

          		// $(element).popover({
          		// 	'placement': 'top',
          		// 	'html': true,
          		// 	'title' : feature.get('nama'),
          		// 	'content': feature.get('nama')
          		// });
          		// $(element).popover('show');
          	} else {
          		$(element).popover('destroy');
          	}
          });

            // change mouse cursor when over marker
          //   map.on('pointermove', function(e) {
          //   	if (e.dragging) {
          //   		$(element).popover('destroy');
          //   		return;
          //   	}
          //   	// var pixel = map.getEventPixel(e.originalEvent);
          //   	// var hit = map.hasFeatureAtPixel(pixel);
          //   //map.getTarget().style.cursor = hit ? 'pointer' : '';
          // });
        </script>
        <!-- Scripts Ends -->
      </body>
      </html>