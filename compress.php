<?php

    		if(isset($_POST['submit'])){

                $nama_gambar = $_FILES['file']['name'];
                $sumber      = $_FILES['file']['tmp_name'];
                $tujuan      = 'gambar/';

                $info  = getimagesize($sumber);
                $image = imagecreatefromjpeg($sumber);
                $hasil = imagejpeg($image,$tujuan.$nama_gambar,30);
                   echo 'sukses';
        			
        			$error = "Uploaded image should be jpg or gif or png";
    		}
?>
<html>
    	<head>
        		<title>Php code compress the image</title>
    	</head>
    	<body>

		<fieldset class="well">
            	    	<legend>Upload Image:</legend>                
			<form action="" name="myform" id="myform" method="post" enctype="multipart/form-data">
				<ul>
			            	<li>
						<label>Upload:</label>
			             <input type="file" name="file" id="file"/>
					</li>
					<li>
						<input type="submit" name="submit" class="submit btn-success"/>
					</li>
				</ul>
			</form>
		</fieldset>
	</body>
</html>