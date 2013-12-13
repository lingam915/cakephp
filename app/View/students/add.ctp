<h1>Add Post</h1>
<?php
echo $this->Form->create('student');
echo $this->Form->input('username', array('rows' => '1'));
echo $this->Form->input('password');
echo $this->Form->input('email', array('rows' => '1'));
echo $this->Form->input('cources', array(
    'options' => array('cse' => 'computer science', 'maths' => 'mathematics','physics'=>'physics',
    'chemistry'=>'chemistry','arts'=>'arts'),
    'empty' => '(choose one)'));                      
echo $this->Form->end('Save Post');
?>