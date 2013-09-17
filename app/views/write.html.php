<div class="post" style="border-bottom: 0px">

	<div class="date"><?php echo date('d F Y')?></div>

  <form id="write" method="post" action="save.php" enctype="multipart/form-data">
  <h3>title :</h3>
  <input type="text" name="subject" contenteditable="true" tabindex="0" role="textbox" style="padding: 5px; border-style:solid; width: 97.5%; height: 25px;">

  <h3>content :</h3>
  <textarea class="text" name="content" contenteditable="true" tabindex="0" role="textbox" aria-multiline="true" style="padding: 5px; border-style:solid; overflow: auto; width: 97.5%; height: 350px;"></textarea><span class="placeholder"></span>
  </div>

  <div align=right>
    <input type=submit value="Save"/>
  </div>
  </form>

  <h3>upload :</h3>
  <? include 'file_uploader.html.php'; ?>

</div>

