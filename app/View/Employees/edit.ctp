
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3 col-xs-12">
	<?php echo $this->Html->link(
    ' Employee List',
    '/employees/index',
    array('class' => 'btn btn-success btn-md glyphicon glyphicon-list-alt pull-right')
);
?>
<div class="panel panel-primary">
  <div class="panel-heading"> <h3 class="panel-title text-center">Update Employee Information	 </h3></div>
  <div class="panel-body">
 
  <div class="container-fluid">
<?php echo $this->Form->create('Employee', array(
'class' => 'form-horizontal',
'role'=>'form',
'inputDefaults' => array(
    'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
    'div' => array('class' => 'form-group'),
    'class' => array('form-control'),
    'label' => array('class' => 'col-lg-4 col-md-4 col-xs-12 col-sm-12 control-label'),
    'between' => '<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">',
    'after' => '</div>',
    'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')),
)));
 ?>
	<?php
        echo $this->Form->input('id');
		echo $this->Form->input('name',
			array(
    			'label' => array('class' => 'col-sm-4 control-label','text'=>'Name')
				));
				?>
		<?php
		//echo $this->Form->input('name');
		echo $this->Form->input('mobile_no', array(
    			'label' => array('class' => 'col-sm-4 control-label','text'=>'Mobile Number')
				));
		//echo $this->Form->input('mobile_no');
		echo $this->Form->input('email', array(
    			'label' => array('class' => 'col-sm-4 control-label','email'=>'Email')
				));
		//echo $this->Form->input('email');
		echo $this->Form->input('gender', array(
    			'label' => array('class' => 'col-sm-4 control-label','text'=>'Gender')
				));
		//echo $this->Form->input('gender');
		echo $this->Form->input('dob', array(
				'label' => 'Date of birth',
    			'dateFormat' => 'DMY',
    			'minYear' => date('Y') - 70,
    			'maxYear' => date('Y') - 18,
    			'label' => array('class' => 'col-sm-4 control-label','date'=>'Date of Birth')
				));
		/* echo $this->Form->input('birth_dt', array(
    		'label' => 'Date of birth',
    		'dateFormat' => 'DMY',
    		'minYear' => date('Y') - 70,
    		'maxYear' => date('Y') - 18,
));*/
		//echo $this->Form->input('dob');
		echo $this->Form->input('address', array(
    			'label' => array('class' => 'col-sm-4 control-label','text'=>'Address')
				));
		//echo $this->Form->input('address');
	?>
<?php 
$options = array(
    'label' => 'Update',
    'div' => array(
        'class' => 'pull-right',
    )
);
echo $this->Form->end($options); ?>




	</div><!-- end of panel container -->
	</div>
  </div>
</div>
</div>
