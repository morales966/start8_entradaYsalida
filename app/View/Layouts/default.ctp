<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
	    	<?php echo Configure::read('Application.name') ?>
		</title>
		<?php
			echo $this->Html->css(array('style.css','lib/bootstrap.css','lib/parsley.css'));
			if (AuthComponent::user('id')) {
				echo $this->Html->css(array('styleSession.css','lib/font-awesome/css/font-awesome.css','lib/font/flaticon.css'));
			}
			echo $this->fetch('AppCss');
			echo $this->Html->meta('favicon.ico','img/favicon.png',array('type' => 'icon'));
		?>
	    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
	</head>
	<body>
		<?php 
			echo $this->element('modal');
	    	echo $this->element('variables_js');
	    	echo $this->fetch('variablesAppScript');
	    	echo $this->Html->script(array('lib/jquery-3.5.0.js','app.js?'.rand()));
    	?>

    	<div id="message_alert">
			<?php echo $this->Flash->render(); ?>
		</div>

  		<?php if (AuthComponent::user('id')): ?>
			<div class="wrapper">
		    	<?php echo $this->element('navSession'); ?>
		<?php endif ?>
		<?php echo $this->fetch('content'); ?>
		<?php if (AuthComponent::user('id')): ?>
			</div>
		<?php endif ?>
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
	    <?php
    		echo $this->Html->script(array('lib/bootstrap.js','lib/parsley/parsley.js','lib/parsley/es.js'));
    		if (AuthComponent::user('id')) {
				echo $this->Html->script(array('appSession.js?'.rand()));
			}
	    	echo $this->fetch('AppScript');
	    ?>
	</body>
</html>