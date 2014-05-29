<?php require_once("./header.php"); ?>

<h1>Deposit media</h1> 

<p><code>System offline</code></p>

<form class="navbar-form navbar-left" method="post" action="deposit.functions.php?form">
    <input type="file" class="form-control" name="media_file" placeholder="Video File">
    <p>Maximum size: <?php echo ini_get('upload_max_filesize'); ?></p>
    <input type="text" class="form-control" name="media_name" placeholder="Title">
    <input type="text" class="form-control" name="media_tags" placeholder="Tags (Separate by ,)">
	<br /> <br />
    <p>Content Description:</p>
    <textarea class="form-control" name="media_description" rows="4" cols="52"> </textarea>
	<br /> <br />
  <button type="submit" class="btn btn-default ladda-button" data-style="expand-right"><span class="glyphicon glyphicon-save"></span> Save Media</button>
</form>

<script>
Ladda.bind( 'input[type=submit]' );
</script>

<?php require_once("./footer.php"); ?>