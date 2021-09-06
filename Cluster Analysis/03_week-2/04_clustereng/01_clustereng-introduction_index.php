
<html lang="en">
<head>
	<!-- Force latest IE rendering engine or ChromeFrame if installed -->
	<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
	<meta charset="utf-8">
	<title>ClusterEnG</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap styles -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Generic page styles -->
	<link rel="stylesheet" href="css/style.css">
	<!-- blueimp Gallery styles -->
	<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
	<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="css/jquery.fileupload.css">
	<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
	<link rel="stylesheet" href="css/keen-dashboards.css">
	<link rel="stylesheet" type="text/css" href="css/keen-dashboards.css" />
	<link rel="stylesheet" type="text/css" href="css/cluster-app.css" />
	<link rel="stylesheet" href="css/vis-tabs.css">
	<link rel="stylesheet" href="css/d3_plots.css">
	<link rel="stylesheet" href="css/introjs.css">
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="css/cluster-app.css" />
	<link rel="stylesheet" href="css/footer.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src="js/intro.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
	<script src="js/vendor/jquery.ui.widget.js"></script>
	<script>
		function show_intro() {
			if (localStorage.getItem('intro_shown')) {
				return;
			}
			localStorage.setItem('intro_shown', true);
			introJs().start();
		}
	</script>
	<!-- CSS adjustments for browsers with JavaScript disabled -->
	<noscript>
		<link rel="stylesheet" href="css/jquery.fileupload-noscript.css">
	</noscript>
	<noscript>
		<link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css">
	</noscript>
</head>

<body class="application" onload="show_intro()">
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77016923-2', 'auto');
  ga('send', 'pageview');

</script>    <input type="hidden" name="sess-id" id="sess-id" value="" />
    <script>
		document.getElementById("sess-id").value = "d8a5ca6b36";
    </script>
	<div id="header" data-step="1" data-intro="Welcome! Feel free to go through a quick walkthrough or click skip anytime."></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
							</div>
		</div>
		<div class="row">
			<div class="col-sm-9">
				<div class="chart-wrapper">
					<div class="chart-title" id="main-head">
						Step 1
					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
					<div class="chart-wrapper">
				<div class="chart-title" id="main-head">
						Query module
					</div>
					</div>
			</div>
		</div>
			<div class="row">
			<div class="col-sm-5">
				<div class="chart-wrapper" data-step="2" data-intro="First step: you can upload your own data here.">
					<div class="chart-title">
						Upload data
					</div>
					<div class="chart-stage">
						
						<div class="row">
							<div class='col-md-12'>
									<p>Upload a CSV/TXT file containing numeric data (<a id="formats_tip" href="#" title="" >accepted formats</a>) :</p>
						<form id="fileupload" action="//knoweng-0.igb.illinois.edu/clustereng" method="POST" enctype="multipart/form-data">
							<!-- Redirect browsers with JavaScript disabled to the origin page -->
							<noscript>
								<input type="hidden" name="redirect" value="https://knoweng-0.igb.illinois.edu/clustereng">
							</noscript>
							<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
							<div class="row fileupload-buttonbar">
								<div class="col-lg-10">
									<!-- The fileinput-button span is used to style the file input field as button -->
                                    <div id="file-buttons">
									<span class="btn btn-success fileinput-button">
										<i class="glyphicon glyphicon-plus"></i>
										<span>Add file</span>
									<input type="file" name="files[]">
									</span>
									<!--<button type="submit" class="btn btn-primary start">
										<i class="glyphicon glyphicon-upload"></i>
										<span>Start upload</span>
									</button>
									<button type="reset" class="btn btn-warning cancel">
										<i class="glyphicon glyphicon-ban-circle"></i>
										<span>Cancel upload</span>
									</button>
									<button type="button" class="btn btn-danger delete">
										<i class="glyphicon glyphicon-trash"></i>
										<span>Delete</span>
									</button>-->
									<!--<input type="checkbox" class="toggle">-->
                                    </div>
                                    <div id="file-list-upload">
                                    <!-- The table listing the files available for upload/download -->
							<table role="presentation" class="table table-striped">
								<tbody class="files"></tbody>
							</table>
                                        </div>
									<!-- The global file processing state -->
									<span class="fileupload-process"></span>
                                            <!-- The global progress state -->
								<div id="show-progress" class="col-sm-4 fileupload-progress fade">
									<!-- The global progress bar -->
									<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
										<div class="progress-bar progress-bar-success" style="width:0%;"></div>
									</div>
									<!-- The extended global progress state -->
									<div class="progress-extended">&nbsp;</div>
								</div>
								</div>
							</div>
                            <p>Cluster:&nbsp;<input type="radio" name="clusterby" value="rows" onclick="document.getElementById('cluster-by').value ='rows';">&nbsp;Rows&nbsp;&nbsp;<input type="radio" name="clusterby" value="columns" checked="true">&nbsp;Columns</p>
                            <p>Is there a row name/ID column in your data?&nbsp;
                            <input type="radio" name="rownames" value="yes">&nbsp;Yes&nbsp;&nbsp;<input type="radio" name="rownames" value="no" checked="true">&nbsp;No&nbsp;(IDs must be unique)
							</p>
						</form>
								
							</div>
							
					
							
						</div>
					
					</div>
					<div class="chart-notes">
						<ul>
							<li>File size limit is currently <strong>2 GB</strong> but expected to increase in the future.</li>
							<li>Uploaded file will be deleted automatically after <strong>7 days</strong>.</li>
							<li>You can <strong>drag &amp; drop</strong> a file from your desktop on this webpage (see <a href="https://github.com/blueimp/jQuery-File-Upload/wiki/Browser-support" target="_blank">Browser support</a>).</li>
							<li>Built on KnowEnG platform and icons from <a href="http://glyphicons.com/">Glyphicons</a>.</li>
						</ul>
					</div>
				</div>
			</div>
			
				<div class="col-sm-1" id = "mid-or">
					<p class="text-center">OR</p>
					</div>
<!--</div>
        <div class="row">-->
		
		
					<div class="col-sm-3">
				<div class="chart-wrapper" data-step="3" data-intro="Don't have data? No problem. Select one of the sample files here and perform various clustering tasks.">
					<div class="chart-title">
						Sample data
					</div>
					<div class="chart-stage">
						<div class="sample-data">
							<script>
								function geofun(val) {
									document.getElementById('gds-code').value = val.value;
								}

								function samplefun(val) {
									document.getElementById('sample-data-code').value = val;
								}
							</script>
							<strong>Select a sample database and choose from the clustering methods below.</strong>
							<br />
							<input type="radio" name="sample-database" id="none" checked="checked"> None
							<br />
							<input type="radio" name="sample-database" id="nci60-data" onclick="samplefun(this.id)"> NCI60 expression data
							<br />
							<input type="radio" name="sample-database" id="b-cell-lymphoma" onclick="samplefun(this.id)"> B-cell lymphoma gene expression
							<br />
							

							<div class="chart-notes">
								<li>Clustering by columns (samples) only.</li>
							</div>
						</div>
					</div>
				</div>
			</div>

				<div class="col-sm-3">
					<div class="chart-wrapper" data-step="4" data-intro="Access data from GEO database and generate an interactive heatmap. This module can be run independently from the rest of the steps.">
						<div class="chart-title">
							Query GEO database
						</div>
						<div class="chart-stage">
							<form action="#results" method="post">
								<strong>Perform hierarchical clustering and draw a heat map</strong>
								<br /> Enter GEO (Gene Expression Omnibus) DataSet ID (format GDS####):
								<input type="text" name="geo-gds-code" id="geo-gds-id" placeholder="example: GDS4067" />
								<input type="submit" class="submit-btn" name="GEOsubmit" value="Submit" onclick="javascript: this.value = 'Loading...';" /><span id="geo-error" style="color: red;"></span>
								<span id="geoloading"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></span>
								<script>
									$(document).ready(function(){ $("#geoloading").hide(); });
								</script>
							</form>
						</div>
					</div>
				</div>
				
				
				
            </div>
            
            <div class="row">
			<div class="col-sm-12">
				<div class="chart-wrapper">
					<div class="chart-title" id="main-head">
						Step 2
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<div class="chart-wrapper" data-step="5" data-intro="Then choose your choice of clustering algorithms here.">
					<div class="chart-title">
						Choose clustering methods
					</div>
					<div class="chart-stage">
						<div id="clus-choices">
							<p><i class="fa fa-lightbulb-o" style="color:green"></i> Select more than one method for comparing validation measures.</p>
							<form action="#results" method="post">
								<input type="checkbox" name="kmeans" id="kmeans" value="checked"> k-means <a href="javascript: kmeans_info();" data-step="6" data-intro="Click here to see a brief description of the algorithm (in the box on the right)."><i class="glyphicon glyphicon-info-sign"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;

								<input type="checkbox" name="pkmeans" id="pkmeans" value="checked"> Parallel k-means
								<br />
								<input type="checkbox" name="kmedoids" id="kmedoids" value="checked"> k-medoids <a href="javascript: kmedoids_info();"><i class="glyphicon glyphicon-info-sign"></i></a>
								<br />
								<input type="checkbox" name="affinity_propagation" id="affinity_propagation" value="checked"> Affinity propagation<sup>#</sup> <a href="javascript: affprop_info();"><i class="glyphicon glyphicon-info-sign"></i></a>
								<br />
								<input type="checkbox" name="spectral_clustering" id="spectral_clustering" value="checked"> Spectral clustering <a href="javascript: speclus_info();"><i class="glyphicon glyphicon-info-sign"></i></a>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="checkbox" name="pspectral_clustering" id="pspectral_clustering" value="checked"> Parallel spectral clustering
								<br />
								<input type="checkbox" name="Gaussian_mixture" id="Gaussian_mixture" value="checked"> Gaussian mixture model <a href="javascript: gaussmix_info();"><i class="glyphicon glyphicon-info-sign"></i></a>
								<br />
								<input type="checkbox" name="hierarchical" id="hierarchical" value="checked"> Hierarchical clustering <a href="javascript: hierar_info();"><i class="glyphicon glyphicon-info-sign"></i></a>
								<br />
								<input type="checkbox" name="dbscan" id="dbscan" value="checked"> DBSCAN<sup>#</sup>&nbsp;&nbsp;eps:<input type="text" name="dbscan-eps" placeholder="epsilon" size=6 value="1.0">
								<input type="submit" class="submit-btn" name="DBSCANsubmit" value="Estimate eps" onclick="javascript: this.value = 'Loading...';" />
								<br /> Number of clusters:
								<input type="text" name="numClus" placeholder="example: 5">
								<br />
                                				<input type="hidden" name="sess-id2" id="sess-id2" value="" />
								<input type="hidden" name="gds-code" id="gds-code" value="" />
								<input type="hidden" name="sample-data-code" id="sample-data-code" value="" />
                                				<input type="hidden" name="cluster-by" id="cluster-by" value="" />
                                				<input type="hidden" name="row-names" id="row-names" value="" />
                                				<input type="hidden" name="file-name" id="file-name" value="" />
                                				<input type="hidden" name="file-size" id="file-size" value="" />
                                				<input type="hidden" name="kmeans-opt1" id="kmeans-opt1" value="1" />
                                				<input type="hidden" name="kmedoids-opt1" id="kmedoids-opt1" value="euclidean" />
                                				<input type="hidden" name="dbscan-opt-min-pts" id="dbscan-opt-min-pts" value="2" />
                                				<input type="hidden" name="hier-opt-dist" id="hier-opt-dist" value="euclidean" />
                                				<input type="hidden" name="hier-opt-linkage" id="hier-opt-linkage" value="average" />
                                				
								<input type="submit" name="submit2" class="submit-btn" value="Submit" onclick="javascript: this.value = 'Loading...';" />
								<br />
							</form>
													</div>
					</div>
                    <script>
                    
                    $( "#formats_tip" ).tooltip({ 
                    	show: null, // show immediately
				    open: function(event, ui)
				    {
				    	
				    	ui.tooltip.css("max-width", "550px");
				        if (typeof(event.originalEvent) === 'undefined')
				        {
				            return false;
				        }
				    
				        var $id = $(ui.tooltip).attr('id');
				    
				        // close any lingering tooltips
				        $('div.ui-tooltip').not('#' + $id).remove();
				        
				        // ajax function to pull in data and add it to the tooltip goes here
				    },
				    close: function(event, ui)
				    {
				        ui.tooltip.hover(function()
				        {
				            $(this).stop(true).fadeTo(400, 1); 
				        },
				        function()
				        {
				            $(this).fadeOut('400', function()
				            {
				                $(this).remove();
				            });
				        });
				    },
    				content: '<img src="./img/valid_input_formats.png" height="401" width="535" />'
                    });              
var fileName = "";

$('#fileupload').bind('fileuploadsubmit', function (e, data) {
    $.each(data.files, function (index, file) {
        fileName = file.name;
        fileSize = file.size;
        document.getElementById("file-name").value = fileName;
        document.getElementById("file-size").value = fileSize;
    });
});
                        </script>
                    <script>
                        $(function(){
        document.getElementById("sess-id2").value = document.getElementById("sess-id").value;
        document.getElementById("cluster-by").value = "columns";
        document.getElementById("row-names").value = "no";
                        $("#fileupload input").on("change", function() {
			document.getElementById("row-names").value = $("input[name=rownames]:checked", "#fileupload").val();
            document.getElementById("cluster-by").value = $("input[name=clusterby]:checked", "#fileupload").val();
		});
                        });
                    </script>
					<div class="chart-notes">
						<span style="color:red">Please refresh your browser and clear the cache if you encounter a visualization problem.</span><br>
						<i class="glyphicon glyphicon-info-sign"></i> = More information<br />
						<sup>#</sup>Number of clusters optional for AP and DBSCAN.<br />
						*The user is encouraged to vary epsilon value depending on input dataset.
					</div>
				</div>
			</div>

			<div class="col-sm-3">
				<div class="chart-wrapper">
					<div class="chart-title">
						Options
					</div>
					<div class="chart-stage">
						<p>Select algorithm to get additional options here.</p>
						<div id="algo-options"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="chart-wrapper">
					<div class="chart-title">
						Algorithm description
					</div>
					<div class="chart-stage algo-desc-layout">
						<div id="algorithm-desc"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- The blueimp Gallery widget -->
		<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
			<div class="slides"></div>
			<h3 class="title"></h3>
			<a class="prev">‹</a>
			<a class="next">›</a>
			<a class="close">×</a>
			<a class="play-pause"></a>
			<ol class="indicator"></ol>
		</div>
		<!-- The template to display files available for upload -->
		<script id="template-upload" type="text/x-tmpl">
			{% for (var i=0, file; file=o.files[i]; i++) { %}
			<tr class="template-upload fade">
				<td>
					<span class="preview"></span>
				</td>
				<td>
					<p class="name">{%=file.name%}</p>
					<strong class="error text-danger"></strong>
				</td>
				<td>
					<p class="size">Processing...</p>
					<!--<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
						<div class="progress-bar progress-bar-success" style="width:0%;"></div>
					</div>-->
				</td>
				<td>
					{% if (!i && !o.options.autoUpload) { %}
					<button class="btn btn-primary start" disabled>
						<i class="glyphicon glyphicon-upload"></i>
						<span>Start</span>
					</button>
					{% } %} {% if (!i) { %}
					<button class="btn btn-warning cancel">
						<i class="glyphicon glyphicon-ban-circle"></i>
						<span>Cancel</span>
					</button>
					{% } %}
				</td>
			</tr>
			{% } %}
		</script>
		<!-- The template to display files available for download -->
		<script id="template-download" type="text/x-tmpl">
			{% for (var i=0, file; file=o.files[i]; i++) { %}
			<tr class="template-download fade">
				<td>
					<span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
		</span>
				</td>
				<td>
					<p class="name">
						{% if (file.url) { %}
						<a href="{%=file.url%}" id="file-name-link" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl? 'data-gallery': ''%}>{%=file.name%}</a> {% } else { %}
						<span>{%=file.name%}</span> {% } %}
					</p>
					{% if (file.error) { %}
					<div><span class="label label-danger">Error</span> {%=file.error%}</div>
					{% } %}
				</td>
				<td>
					<input type="hidden" id="size-raw" value="{%=file.size%}"></input>
					<span class="size">{%=o.formatFileSize(file.size)%}</span>
				</td>
				<td>
					{% if (file.deleteUrl) { %}
					<button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}" {% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}' {% } %}>
						<i class="glyphicon glyphicon-trash"></i>
						<span>Delete</span>
					</button>
					<!--<input type="checkbox" name="delete" value="1" class="toggle">--> {% } else { %}
					<button class="btn btn-warning cancel">
						<i class="glyphicon glyphicon-ban-circle"></i>
						<span>Cancel</span>
					</button>
					{% } %}
				</td>
			</tr>
			{% } %}
		</script>
					<!-- The Templates plugin is included to render the upload/download listings -->
		<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
		<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
		<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
		<!-- The Canvas to Blob plugin is included for image resizing functionality -->
		<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
		<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<!-- blueimp Gallery script -->
		<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
		<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
		<script src="js/jquery.iframe-transport.js"></script>
		<!-- The basic File Upload plugin -->
		<script src="js/jquery.fileupload.js"></script>
		<!-- The File Upload processing plugin -->
		<script src="js/jquery.fileupload-process.js"></script>
		<!-- The File Upload image preview & resize plugin -->
		<script src="js/jquery.fileupload-image.js"></script>
		<!-- The File Upload audio preview plugin -->
		<script src="js/jquery.fileupload-audio.js"></script>
		<!-- The File Upload video preview plugin -->
		<script src="js/jquery.fileupload-video.js"></script>
		<!-- The File Upload validation plugin -->
		<script src="js/jquery.fileupload-validate.js"></script>
		<!-- The File Upload user interface plugin -->
		<script src="js/jquery.fileupload-ui.js"></script>
		<!-- The main application script -->
		<script src="js/main.js"></script>
		<script src="js/d3.min.js"></script>
		<!--<script src="js/d3_plots.js"></script>-->
		<script src="js/d3_zoom2.js"></script>
		<script src="js/d3_tsne.js"></script>

		<script src="http://d3js.org/queue.v1.min.js"></script>
		
		<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<!--<script src="js/d3_plots_PCA.js"></script>-->
		<script src="js/three.min.js"></script>
		<script src="js/OrbitControls.js"></script>
		<script src="js/dat.gui.min.js"></script>
		<script src="js/cubePCA.js"></script>
		<script src="js/file-check1.js"></script>
		<script src="js/file-check2.js"></script>
		<script src="js/file-check3.js"></script>
		<script src="js/file-check-validation.js"></script>
		<script src="js/file-log.js"></script>
		<script src="js/file-check-tsne.js"></script>
		<script src="js/algo_info.js"></script>
		<script src="js/d3_heatmap.js"></script>
		<script src="js/download_plot.js"></script>
		<script src="js/kinetic-v5.1.0.min.js"></script>
		<script src="js/inchlib-1.2.0.js"></script>
		<script src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
		<script>
			function kmeans_update(val) {
				document.getElementById("kmeans-opt1").value = val;
			}
					
			function kmedoids_update(val) {
				document.getElementById("kmedoids-opt1").value = val;
			}
			
			function dbscan_pts_update(val) {
				document.getElementById("dbscan-opt-min-pts").value = val;
			}
			
			function hier_dist_update(val) {
				document.getElementById("hier-opt-dist").value = val;
			}
			
			function hier_linkage_update(val) {
				document.getElementById("hier-opt-linkage").value = val;
			}
								
            $(document).ready(function(){
				$('#kmeans').change(function() {
					if($(this).is(":checked")) {
						$('#algo-options').append('<div id="kmeans-options"><h4>K-means clustering:</h4>Number of random starts <input type="text" name="kmeans-opt-rand-start" id="kmeans-opt-rand-start" value=1 onchange="kmeans_update(this.value);" /><div>');
					} else {
						$('#kmeans-options').remove();
					}
				});
				$('#kmedoids').change(function() {
					if($(this).is(":checked")) {
						$('#algo-options').append('<div id="kmedoids-options"><h4>K-medoids clustering:</h4>Distance measure <select name="dist_measure" onchange="kmedoids_update(this.value);"><option value="euclidean">Euclidean</option><option value="manhattan">Manhattan</option></select><div>');
					} else {
						$('#kmedoids-options').remove();
					}
				});
				$('#hierarchical').change(function() {
					if($(this).is(":checked")) {
						$('#algo-options').append('<div id="hierarchical-options"><h4>Hierarchical clustering:</h4>1. Distance measure <select name="hier_dist_measure" onchange="hier_dist_update(this.value);"><option value="euclidean">Euclidean</option><option value="maximum">Maximum</option><option value="manhattan">Manhattan</option></select><br />2. Agglomeration method <select name="hier_method" onchange="hier_linkage_update(this.value);"><option value="average">Average linkage</option><option value="single">Single linkage</option><option value="complete">Complete linkage</option><option value="ward">Ward clustering</option></select><div>');
					} else {
						$('#hierarchical-options').remove();
					}
				});
				$('#dbscan').change(function() {
					if($(this).is(":checked")) {
						$('#algo-options').append('<div id="dbscan-options"><h4>DBSCAN clustering:</h4>Minimum points <input type="text" name="dbscan-minpts" value=2 size=6 onchange="dbscan_pts_update(this.value);"><div>');
					} else {
						$('#dbscan-options').remove();
					}
				});
				//console.log(document.getElementById("file-name-link").title);
                
                    setTimeout(function(){
                    	fileName = document.getElementById("file-name-link").title;
                        fileSize = document.getElementById("size-raw").value;
                        document.getElementById("file-name").value = fileName;
                        document.getElementById("file-size").value = fileSize;
                    }, 2000);
            });
			$(function(){
				$("#header").load("header.html");
				$("#footer").load("footer.html");
			});
		</script>
		<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
		<!--[if (gte IE 8)&(lt IE 10)]>
		<script src="js/cors/jquery.xdr-transport.js"></script>
		<![endif]-->

		<div class="row">
			<div class="col-sm-12" id="results">
				<div class="chart-wrapper">
					<div class="chart-title" id="main-head">
						Step 3
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="chart-wrapper" data-step="7" data-intro="After you submit the form above, you will see the results in this section. You may have to wait depending on the size of the dataset.">
					<div class="chart-title">
						Visualize results
					</div>
					<div class="chart-stage">
						<div id="visual-head">
							<script src="js/vis-tabs-content.js"></script>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div id="footer"></div>
	
		