<header>
    <div class="container">
        <div class="top">
            <h1>Edit user</h1>
        <a href="/" class="back">Back</a>
    </div>
    </div>
</header> 
<div class="container">
    <div class="edit-user">
        <form action="edit-user/edit" method="POST">
            <div class="form-group">
                <input id="id" class="form-control" type="hidden" name="id" value="<?=$data['id']?>" >
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input id="name" class="form-control" type="text" name="name" value="<?=$data['first_name']?>" required>
            </div>
            <div class="form-group">
                <label for="last-name">Last name:</label>
                <input id="last-name" class="form-control" type="text" name="last-name" value="<?=$data['last_name']?>" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input id="email" class="form-control" type="text" name="email" value="<?=$data['email']?>" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="EDIT">
            </div>
        </form>
        <?php
            if (!empty($data['message'])) {
                echo "<p>" . $data['message'] . "</p>";
            }
        ?>
    </div>
</div>

