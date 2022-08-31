<?php if(count($error) > 0): ?>

<div class="mistake" font-size="23px" text-transform="lowercase">
	
<?php foreach($error as $mistake ): ?>
	

	 <p><?php echo $mistake; ?></p>

	<?php endforeach ?>
	

</div>
<?php endif ?>


