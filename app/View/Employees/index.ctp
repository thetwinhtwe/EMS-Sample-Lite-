<div class="container">
	<h2><?php echo __('Employee List'); ?></h2>
	<div class="table-responsive">
	<table class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('no'); ?></th>
			<!-- <th><?php echo $this->Paginator->sort('id'); ?></th> -->
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile_no'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('dob'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php
		$count=1; 
		?>
	<?php foreach ($employees as $employee): ?>
	<tr>
		<td><?php echo h($count); ?>&nbsp;</td>
		<!-- <td><?php echo h($employee['Employee']['id']); ?>&nbsp;</td> -->
		<td><?php echo h($employee['Employee']['name']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['mobile_no']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['email']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['gender']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['dob']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['address']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employee['Employee']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employee['Employee']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employee['Employee']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $employee['Employee']['id']))); ?>
		</td>
	</tr>
	<?php
	$count++;
	?>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
	<center>
	<div class="pagination pagination-large">
    <ul class="pagination">
            <?php
                echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            ?>
        </ul>
    </div>
</center>
</div>
