<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../uploadify/jquery.uploadify.min.js"></script>
<link rel="stylesheet" type="text/css" href="../uploadify/uploadify.css">
</head>

<body>
	<form>
		<div id="queue"></div>
		<input id="file_upload" name="file_upload" type="file" multiple>
	</form>
	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'checkExisting' : '../uploadify/check-exists.php',
				'swf'      : '../uploadify/uploadify.swf',
				'uploader' : '../uploadify/uploadify.php',
				'auto'     : false,
				'removeTimeout' : 1,
				'buttonText' : '选择文件',
				'fileObjName' : 'the_files',
				'fileTypeDesc' : 'Excel文件',
				'fileTypeExts' : '*.xls; *.xlsx'
			});
		});
	</script>
<a href="javascript:$('#file_upload').uploadify('upload','*')">上传</a>
</body>
</html>