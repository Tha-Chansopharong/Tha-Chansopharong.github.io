<?php 
    include_once 'src/category.php';

    if(!empty($_POST['btnAdd'])) {
        $title = $_POST['txtTitle'];
        $remark = $_POST['txtRemark'];
        createCategory($title, $remark);
        echo 'Create successfully';
        
    }
?>



<h3>Create Category</h3>
<form method="POST">
<table>
    <tr>
        <td>Title</td>
        <td><input type="text" name="txtTitle"></td>
    </tr>
    <tr>
        <td>Remark</td>
        <td><input type="text" name="txtRemark"></td>
    </tr>
    <tr>
        <td><input type="submit" name="btnAdd" value="Add"></td>
        <td></td>
    </tr>
</table>
</form>