<?php require_once("./header.php"); ?>

	<h1>TfEL Media Manager</h1>
	<p class="lead">Catalogue, encode, and manage media.</p>
	<p>Welcome to the media manager server, here you can deposit media files for encoding and cataloguing. You can also retrieve media in a user-friendly size for embedding, sharing, and redistribution. This system works automatically, but requires the TfEL iMac to be turned on for the entire duration of uploads – otherwise things will break. Large encodes may require overnight activation of the media-dechunking protocol, and the iMac will not let you shut it down.</p>
	<p>Stopping all media-manager processes on the system is as simple as opening terminal and typing <code>media-manager stop_active_tasks:all</code> or <code>media-manager stop_active_tasks:1,2,3</code>. You can also moderate, view, and handle all encoder-based tasks using <code>media-manager list_active_tasks:all</code>.</p>

<?php require_once("./footer.php"); ?>
