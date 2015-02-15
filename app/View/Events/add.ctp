<div class="container">
	<?php echo $this->Form->create('Events'); ?>
	<?php echo $this->Form->input('title'); ?>
	<?php echo $this->Form->submit(); ?>
	<?php echo $this->Form->end(); ?>
</div>	
<?php echo $this->element('sql_dump'); ?>