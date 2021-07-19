<?php
	////
	//// This PHP file zips the themelist and reads it to the LVM
	////

	///
	/// Variables
	///
	$themeListZip = new ZipArchive;
	$createZip = $themeListZip->open("../../_user-files/cache/themelist.zip", ZipArchive::CREATE);
	
	///
	/// Zip creation
	///
	if ($createZip == true) {
		// Add themelist to zip file
		$themeListZip->addFile("../asset/themes/themelist.xml", "themelist.xml");
		// Close zip
		$themeListZip->close();
		// Read zip to LVM
		readfile("../../_user-files/cache/themelist.zip");
		// Delete zip for future themelist loading
		unlink("../../_user-files/cache/themelist.zip");
	}
	// If, for some reason creating the zip fails, send the user a message explaining what went wrong.
	else {
		echo "ERROR: Could not create themelist zip. Please get support here: https://discord.gg/2SUpuZnxRq";
	}
?>
