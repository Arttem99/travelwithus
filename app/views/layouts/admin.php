<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
    <? travel\core\base\View::getMeta()?>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="/public/assets/admin/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="/public/assets/admin/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['..//public/assets/admin/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="/public/assets/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="/public/assets/admin/css/azzara.min.css">
	<link rel="stylesheet" href="/public/assets/admin/css/fonts.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="/public/assets/admin/css/demo.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/froala_editor.min.css">
    <link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/plugins/image.min.css">
    <link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/plugins/image_manager.min.css">
    <link rel="stylesheet" href="/public/assets/css/custom.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/froala_editor.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/froala_style.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/plugins/code_view.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/plugins/draggable.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/plugins/colors.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/plugins/emoticons.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/plugins/image_manager.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/plugins/image.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/plugins/line_breaker.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/plugins/table.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/plugins/char_counter.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/plugins/video.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/plugins/fullscreen.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/plugins/file.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/plugins/quick_insert.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/plugins/help.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/third_party/spell_checker.css">
	<link rel="stylesheet" href="/vendor/froala/wysiwyg-editor/css/plugins/special_characters.css">
	
</head>
<body>
<div class="wrapper">

	<?$this->getPart("include/admin/sidebar");?>

	<h1>Hello Admin</h1>
	<?=$content;?>
</div>
<!--   Core JS Files   -->
<script src="/public/assets/admin/js/core/jquery.3.2.1.min.js"></script>
<script src="/public/assets/js/script.js"></script>
<script src="/public/assets/admin/js/core/popper.min.js"></script>
<script src="/public/assets/admin/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="/public/assets/admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="/public/assets/admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="/public/assets/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Moment JS -->
<script src="/public/assets/admin/js/plugin/moment/moment.min.js"></script>

<!-- Chart JS -->
<script src="/public/assets/admin/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="/public/assets/admin/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="/public/assets/admin/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="/public/assets/admin/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="/public/assets/admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Bootstrap Toggle -->
<script src="/public/assets/admin/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="/public/assets/admin/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="/public/assets/admin/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Google Maps Plugin -->
<script src="/public/assets/admin/js/plugin/gmaps/gmaps.js"></script>

<!-- Sweet Alert -->
<script src="/public/assets/admin/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Azzara JS -->
<script src="/public/assets/admin/js/ready.min.js"></script>

<!-- Azzara DEMO methods, don't include it in your project! -->
<script src="/public/assets/admin/js/setting-demo.js"></script>
<!-- <script src="/public/assets/admin/js/demo.js"></script> -->
<script src="/vendor/froala/wysiwyg-editor/js/froala_editor.pkgd.min.js"></script>
<script src="/vendor/froala/wysiwyg-editor/js/plugins/image.min.js"></script>
<script src="/vendor/froala/wysiwyg-editor/js/plugins/image_manager.min.js"></script>
<script src="/vendor/froala/wysiwyg-editor/js/plugins/colors.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/align.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/char_counter.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/code_beautifier.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/code_view.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/colors.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/draggable.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/emoticons.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/entities.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/file.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/font_size.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/font_family.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/fullscreen.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/image.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/image_manager.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/line_breaker.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/inline_style.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/link.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/lists.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/paragraph_format.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/paragraph_style.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/quick_insert.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/quote.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/table.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/save.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/url.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/video.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/help.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/print.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/third_party/spell_checker.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/special_characters.min.js"></script>
<script type="text/javascript" src="/vendor/froala/wysiwyg-editor/js/plugins/word_paste.min.js"></script>
<script>

var editor = new FroalaEditor('#editor', {
	// pluginsEnabled: ['image', 'imageManager','fontSize', 'fontFamily', 'emoticons', 'link',
	// 'paragraphFormat', 'paragraphStyle', 'align', 'list', 'inlineClass', 'inlineStyle', 'lineBreaker',
	// 'lineHeight', 'markdown', 'quickInsert', 'table', 'url', 'wordPaste', 'trackChanges', 'quote', 'codeView'],
	// imageEditButtons: ['imageReplace', 'imageRemove', "imageSize", 'imageAlign', 'imageReplace', 'imageRemove', 'imageStyle', 'imageDisplay',],
	// //Buttons for the popup menu which appears on imageReplace button click
	// imageInsertButtons: ['imageBack', '|', 'imageUpload', 'imageByURL', 'imageManager'],
	// imageUploadMethod: "post",
	height:500,
	// imageUploadUrl: "/admin/article/upload/",
	// imageAllowedTypes: ['jpeg', 'jpg', 'png'],
	// pluginsEnabled: ['image', 'imageManager'],
    //image popup buttons
    // imageEditButtons: ['imageReplace', 'imageRemove'],
    //Buttons for the popup menu which appears on imageReplace button click
    //imageInsertButtons: ['imageBack', '|', 'imageUpload', 'imageByURL', 'imageManager'],
    //Set the request type
    imageUploadMethod: 'POST',
    // Set the image upload URL.
    //  imageUploadURL: '../../../vendor/libs/upload.php',
    imageUploadURL: '/admin/article/upload/',
    imageAllowedTypes: ['jpeg', 'jpg', 'png'],
	// imageUploadParams:{
	// 	froala: "true"
	// },
});


</script>
<script >
$(document).ready(function() {
	$('#basic-datatables').DataTable({
	});

	$('#multi-filter-select').DataTable( {
		"pageLength": 5,
		initComplete: function () {
			this.api().columns().every( function () {
				var column = this;
				var select = $('<select class="form-control"><option value=""></option></select>')
				.appendTo( $(column.footer()).empty() )
				.on( 'change', function () {
					var val = $.fn.dataTable.util.escapeRegex(
						$(this).val()
						);

					column
					.search( val ? '^'+val+'$' : '', true, false )
					.draw();
				} );

				column.data().unique().sort().each( function ( d, j ) {
					select.append( '<option value="'+d+'">'+d+'</option>' )
				} );
			} );
		}
	});
});
</script>
</body>
</html>