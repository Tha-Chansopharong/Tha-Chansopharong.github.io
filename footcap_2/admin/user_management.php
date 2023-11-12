
<?php include_once 'header.php'; ?>
<div class="container-fluid">
    <div class="row bg-class">
        <?php include_once 'menu.php'; ?>
        <div class="col-sm-10 right-class">
            <div class="top">
                <div class="js_class">
                    <?php
                    if (!empty($_SESSION['login_name'])) {
                        echo $_SESSION['login_name'];
                    }
                    ?>
                </div>

                <p style="cursor: pointer; color: #000;" id="btnLogout">
                    <a href="login_action.php?action=logout">Logout</a>
                </p>
            </div>
            <div class="bottom" id="renderContent">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>NAME</th>
                        <th>Username</th>
                        <th>Phone</th>
                        <th>City</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>$36,738</td>
                        <td>Niger</td>
                        <td>Oud-Turnhout</td>
                        <td>Oud-Turnhout</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>