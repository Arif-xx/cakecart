<?php foreach($this->params['bread'] as $bred) echo strlen($bred) . '1'; ?>
<h2>Adding New Category in <?php if(empty($this->params['bread'])) { echo 'Top Level'; } else { echo implode(' -> ', $this->params['bread']); } ?></h2>
<?php echo $form->create('Category', array('type' => 'file', 'action' => 'add/' . implode('/', $this->params['bread']))); ?>
<?php echo $form->input('name'); ?>
<?php echo $form->input('image_url', array('type'=>'file')); ?>
<?php echo $form->end('Add'); ?>