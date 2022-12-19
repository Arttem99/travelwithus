<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../vendor/froala/wysiwyg-editor/css/froala_editor.min.css">
</head>
<body>
    <div id="editor"></div>
    
<script src="../../vendor/froala/wysiwyg-editor/js/froala_editor.pkgd.min.js"></script>
<script src="../../vendor/froala/wysiwyg-editor/js/plugins/image.min.js"></script>
<script src="../../vendor/froala/wysiwyg-editor/js/plugins/image_manager.min.js"></script>

<script>
new FroalaEditor('#editor', {
	// imageUploadMethod: "post",
	// height:500,
	pluginsEnabled: ['image', 'imageManager'],
    //image popup buttons
    imageEditButtons: ['imageReplace', 'imageRemove'],
    //Buttons for the popup menu which appears on imageReplace button click
    imageInsertButtons: ['imageBack', '|', 'imageUpload', 'imageByURL', 'imageManager'],
    //Set the request type
    imageUploadMethod: 'POST',
    // Set the image upload URL.
    imageUploadURL: 'upload1.php',
    imageAllowedTypes: ['jpeg', 'jpg', 'png'],
});
</script>

</body>
</html>