<header>
    <div class="container">
        <div class="top">
            <h1>Add user</h1>
        <a href="/" class="back">Back</a>
    </div>
    </div>
</header> 
<div class="container">
    <div class="add-user">
        <form action="add-user/add" method="POST">
            <div class="form-group">
                <label for="name">First name:</label>
                <input id="name" type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="last-name">Last name:</label>
                <input id="last-name" type="text" name="last-name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input id="email" type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="ADD">
            </div>
        </form>
        <?php
            if (!empty($data['message'])) {
                echo "<p>" . $data['message'] . "</p>";
            }
        ?>
    </div>
</div>


