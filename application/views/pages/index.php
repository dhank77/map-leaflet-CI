<body>
	<div class="preloader">
		<div class="lds-ripple">
			<div class="lds-pos"></div>
			<div class="lds-pos"></div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
		<!-- ============================================================== -->
		<!-- Topbar header - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<header class="topbar" data-navbarbg="skin5">
			<nav class="navbar top-navbar navbar-expand-md navbar-dark">
				<div class="navbar-header" data-logobg="skin5">
					<!-- ============================================================== -->
					<!-- Logo -->
					<!-- ============================================================== -->
					<a class="navbar-brand" href="index.html">
						<!-- Logo icon -->
						<b class="logo-icon">
							<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
							<!-- Dark Logo icon -->
							<img src="<?= base_url('vendor/xtreme/') ?>assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
							<!-- Light Logo icon -->
							<img src="<?= base_url('vendor/xtreme/') ?>assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
						</b>
						<!--End Logo icon -->
						<!-- Logo text -->
						<span class="logo-text">
							<!-- dark Logo text -->
							<div class="mt-3">
								<h3>Peta Sebaran Covid-19</h3>
							</div>
						</span>
					</a>
					<!-- ============================================================== -->
					<!-- End Logo -->
					<!-- ============================================================== -->
				</div>
				<!-- ============================================================== -->
				<!-- End Logo -->
				<!-- ============================================================== -->
			</nav>
		</header>
		<div id="mapid"></div>
		<script>
			var map = L.map('mapid').setView([0, 0], 2);
			var layer = L.esri.basemapLayer('Imagery').addTo(map);
			map.addLayer(layer);
			var covid = '<?= $data_covid ?>';
			var data = JSON.parse(covid);
			console.log(data);
			data.forEach(alldata)
			function alldata(item) {
				const icon = L.icon({
					iconUrl: item.properties.icon,
					iconSize: [15, 10],
				});
				L.marker(item.geometry.coordinates, {
						icon: icon
					}).addTo(map)
					.bindTooltip('<p style="font-size: 12px; color:black; line-height:14px; margin-bottom:0px;"><b style="text-align:center">' + item.properties.title + '</b><br> Cases : ' + item.properties.total + '<br> Active : ' + item.properties.active + '<br> Recoverd : ' + item.properties.recovered + '<br> Deaths : ' + item.properties.deaths + '</p>', {
						direction: 'top'
					});
			}
		</script>
		<footer class="footer text-center">
			Developed by <a href="https://www.facebook.com/andank.parawali">Hamdani Ilham</a> Theme Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
		</footer>
	</div>
</body>