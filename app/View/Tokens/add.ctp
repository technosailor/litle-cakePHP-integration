<div class="Token form">
<?php echo $this->Form->create('Token');?>
	<fieldset>
		<legend><?php echo __('Add Register Token Request'); ?></legend>
	<?php
		echo $this->Form->input('number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Register Token Requests'), array('action' => 'index'));?></li>
	</ul>
</div>
