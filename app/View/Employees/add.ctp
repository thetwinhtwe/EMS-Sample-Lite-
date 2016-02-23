
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
  <div class="panel-heading"> <h3 class="panel-title text-center">Add Employee Information	 </h3></div>
  <div class="panel-body">
 
  <div class="container-fluid">
<div class="col-sm-12 form-group">
<?php echo $this->Form->create('Employee'); ?>
	<?php
		echo $this->Form->input('name', array(
    			'label' => array('class' => 'col-sm-4 control-label','text'=>'Name')
				));
		//echo $this->Form->input('name');
		echo $this->Form->input('mobile_no', array(
    			'label' => array('class' => 'col-sm-4 control-label','tel'=>'Mobile Number')
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
<?php echo $this->Form->end(__('Submit')); ?>
</div>



	</div><!-- end of panel container -->
	</div>
  </div>
</div>
</div>
