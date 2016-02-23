
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
  <div class="panel-heading"> <h3 class="panel-title text-center">View Employee Information	 </h3></div>
  <div class="panel-body">
 
  <div class="container-fluid">

    <dl class="dl-horizontal">
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($employee['Employee']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($employee['Employee']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Mobile No'); ?></dt>
        <dd>
            <?php echo h($employee['Employee']['mobile_no']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Email'); ?></dt>
        <dd>
            <?php echo h($employee['Employee']['email']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Gender'); ?></dt>
        <dd>
            <?php echo h($employee['Employee']['gender']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Dob'); ?></dt>
        <dd>
            <?php echo h($employee['Employee']['dob']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Address'); ?></dt>
        <dd>
            <?php echo h($employee['Employee']['address']); ?>
            &nbsp;
        </dd>
    </dl>

	</div><!-- end of panel container -->
	</div>
  </div>
</div>
</div>
