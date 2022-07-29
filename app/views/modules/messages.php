<?php foreach (Messages::getMessage() as $msg):?>
<div class="alert alert-<?=$msg['type']?><?=$msg['msg']?></div>
<?php endforeach ?>
<?php Messages::clearMessage();?>