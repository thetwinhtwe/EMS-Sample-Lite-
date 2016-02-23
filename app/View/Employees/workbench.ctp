	<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-bookmark"></span> Quick Shortcuts</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                    	<div class="col-md-12 col-xs-12">
                        <div class="col-xs-6 col-md-6">
                         
                  <?php

                        echo $this->Html->link(
                        ' Add Employee',
                        array(
                            'controller' => 'employees',
                            'action' => 'add'
                        ),
                        array(
                          'class'=>'btn btn-primary btn-lg glyphicon glyphicon-plus'
                          )

                );
                    ?>
                        </div>
                         <div class="col-xs-6 col-md-6">
                          <?php
                        echo $this->Html->link(
                        ' Employee List',
                        array(
                            'controller' => 'employees',
                            'action' => 'index'
                        ),
                        array(
                          'class'=>'btn btn-success btn-lg glyphicon glyphicon-th-list'
                          )

                );
                    ?>

                        </div>
                     </div>
                 </div>
				              <div class="row">
                    	<div class="col-md-12 col-xs-12">
                        <div class="col-xs-6 col-md-6">
                          <?php
                        echo $this->Html->link(
                        ' Work Report',
                        array(
                            'controller' => 'employees',
                            'action' => 'report'
                        ),
                        array(
                          'class'=>'btn btn-warning btn-lg disabled glyphicon glyphicon-book'
                          )

                );
                    ?>

                        </div>
                         <div class="col-xs-6 col-md-6">
                          <?php
                        echo $this->Html->link(
                        ' Leave request',
                        array(
                            'controller' => 'employees',
                            'action' => 'leave'
                        ),
                        array(
                          'class'=>'btn btn-info btn-lg disabled glyphicon glyphicon-envelope'
                          )

                );
                    ?>

                        </div>
                     </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>


