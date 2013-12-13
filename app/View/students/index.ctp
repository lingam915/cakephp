
<h1>Blog posts</h1>
<p><?php echo $this->Html->link('Add student', array('action' => 'add')); ?></p>
<table width="400" height = "300">
    <tr>
        <th>Id</th>
        <th>username</th>
        <th>password</th>        
        <th >email</th>
        <th>cources</th>
        <th>actions</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($student as $stu): ?>
    <tr>
        <td><?php echo $stu['student']['id']; ?></td>
        <td>
            <?php echo $stu['student']['username']; ?>
        </td>
        <td>
            <?php echo $stu['student']['password']; ?>
        </td>
        <td>
            <?php echo $stu['student']['email']; ?>
        </td>
        <td>
            <?php echo $stu['student']['cources']; ?>
        </td>
        <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $stu['student']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $stu['student']['id'])); ?>
        </td>
        
    </tr>
    <?php endforeach; ?>

</table>


