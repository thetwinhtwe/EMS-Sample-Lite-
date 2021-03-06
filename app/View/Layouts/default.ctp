<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>

		<?//php echo $cakeDescription ?>
		<?//php echo $this->fetch('title'); ?> 
		Employee Management System
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		//echo $this->Html->css('bootstrap.min');
		//echo $this->Html->css('stylesheet');
		echo $this->Html->css(array('bootstrap.min', 'stylesheet'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<div id="container">
			<div class="row header">
  <div class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- <a class="navbar-brand" href="index.php">Employee Management System</a> -->
          <?php
		    echo $this->Html->link(
		    'Employee Management System',
		    array(
		        'controller' => 'employees',
		        'action' => 'workbench'
		    ),
		    array(
		    	'class'=>'navbar-brand'
		    	)
);
		?>
        </div>
      </div>              
    </div>
  </div> <!-- end row of menu -->
		<!--	<div id="header">
			<h1><?//php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
			</div>
			<div id="content">
			<h1 class="text-danger">Hello World</h1> 
		-->
			<center>
			<?php echo $this->Flash->render(); ?>
			</center>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?/*php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			*/?>
			<p>
				<?//php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?//php echo $this->element('sql_dump'); ?>
</body>
</html>
