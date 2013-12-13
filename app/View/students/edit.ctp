<h1>Edit Post</h1>
<?php
echo $this->Form->create('student');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('email', array('rows' => '2'));
echo $this->Form->input('cources', array(
    'options' => array('cse' => 'computer science', 'maths' => 'mathematics','physics'=>'physics',
    'chemistry'=>'chemistry','arts'=>'arts'),
    'empty' => '(choose one)'
)); 
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save student');
?>