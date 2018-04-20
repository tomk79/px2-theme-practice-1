 <?php
	 //$pxがない(=直接アクセスされた)場合、ここで処理を抜ける。
 	if(!$px){return;}
 ?>

<!-- jQuery -->
<script src="<?= htmlspecialchars($px->href('/common/scripts/jquery-1.10.1.min.js')); ?>" type="text/javascript"></script>

<!-- Contents Styles -->
<link rel="stylesheet" href="<?= htmlspecialchars($px->href('/common/styles/contents.css')); ?>" type="text/css" />
<script src="<?= htmlspecialchars( $px->href('/common/scripts/contents.js') ); ?>"></script>
