<!doctype html>
<?php
	$domainName = "CompressJPGOnline.com";
	$domainURL = "http://compressjpgonline.com";
	$icon_loc = "./img/icon.png";
	$main_title = "Compress JPG / JPEG Images Online for Free";  // Title of the Site
	
	$contact_email = "webbeastyt@gmail.com,";
?>
<?php include("https://raw.githubusercontent.com/lnn1053/Compressjpeg/main/brand.php"); ?>
<style>
.button {
	position:absolute;
    bottom:10px;
    right:10px;
}

#img_container {
    position:relative;
    display:inline-block;
    text-align:center;
}
</style>


<?php include("https://raw.githubusercontent.com/lnn1053/Compressjpeg/main/helper.php"); ?>

	<?php include("https://raw.githubusercontent.com/lnn1053/Compressjpeg/main/head.php"); ?>
	<?php echo $main_title; ?>
	
	
	
</?php></?php></?php>

<?php include("https://raw.githubusercontent.com/lnn1053/Compressjpeg/main/header.php"); ?>

<div class="container">
	
	<div class="row">
		<p>This is a Free Online Tool to Compress JPEG Images to lowers file sizes.</p>
	</div>
	
	<div class='row' style='border: 1px solid #CCC; margin: 10px; padding: 10px; box-shadow: 2px 2px 0px 0px #CCC; border-radius: 10px; overflow: hidden;'>	
		<div style='text-align: center; margin: 10px;'>
			<?php
				if(isset($_post['submit'])) {
						uploadandcompress(100-$_post['compression_percentage']);
				}
			?>
		</?php
></div>

		<div class="row" style='text-align: center; border: 1px dashed #CCC; padding: 20px; max-width: 1200px; margin: 20px auto; border-radius: 10px;'>
			<form action="" method="post" enctype="multipart/form-data">
				<table style='border-collapse: collapse; margin: 10px auto; text-align: center;'>
				<tbody>
				<tr>
					<input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload" required />
					<input class="btn btn-primary" type="submit" value="Compress Image" name="submit" style='margin: 10px;' />
					<input type="range" value="60" min="0" max="100" oninput="document.getElementById(&#39;output&#39;).value = this.value" name="compression_percentage" />
					<span style='color: #777; font-size: 12px;'><output id='output'> 60</output>% Compression</span>
				</tr>
				</tbody>
				</table>
			</form>
		</div>
	</div>
	
	<hr />
	
	<div class="row">
		<img src='https://github.com/lnn1053/Compressjpeg/blob/main/Img/main_page.png' style="max-width: 750px; margin-bottom: 20px;" class="rounded mx-auto d-block" alt="" />
		<h2 class='display-6'>How to convert PNG to JPG</h2>
		<p>
			<ol>
				<li>Upload any PNG format image you want to convert into JPG.</li>
				<li>Click on Upload Image and the Uploading will start.</li>
				<li>The PNG format image will automatically convert to JPG format and a JPG format image download link will be provided.</li>
				<li>Click on "Download Image in JPG" to download your converted image for free.</li>
			</ol>
		</p>
		
		
		<h2 class='display-6'>How can I convert PNG to JPG for free?</h2>
		<p>
			<ol>
				<li>Upload any PNG format image you want to convert into JPG.</li>
				<li>Click on Upload Image and the Uploading will start.</li>
				<li>The PNG format image will automatically convert to JPG format and a JPG format image download link will be provided.</li>
				<li>Click on "Download Image in JPG" to download your converted image for free.</li>
			</ol>
		</p>
	</div>
</div>
	
<?php include("https://raw.githubusercontent.com/lnn1053/Compressjpeg/main/footer.php"); ?>




</?php></?php>
</?php></!doctype>
