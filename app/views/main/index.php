<header>
    <div class="container">
        <div class="top">
            <h1>Users list</h1>
        <a href="add-user" class="add">Add user</a>
    </div>
    </div>
</header> 
<div class="container">
    <table class="table table-bordered table-hover">
        <thead>
            <tr class="bg-info">
                <th scope="col">
                    <button id="id" class="sort">
                        Sort by ID
                        <i class="down"></i>
                    </button>
                    <input class="search" type="text" data-search="id">
                </th>
                <th scope="col">
                    <button id="first_name" >
                        Sort by name
                        <i></i>
                    </button>
                    <input class="search" type="text" data-search="first_name">
                </th>
                <th scope="col">
                    <button id="last_name">
                        Sort by last name
                        <i></i>
                    </button>
                    <input class="search" type="text" data-search="last_name">
                </th>
                <th scope="col">
                    <button id="email">
                        Sort by email
                        <i></i>
                    </button>
                    <input class="search" type="text" data-search="email">
                </th>
                <th scope="col">
                    <button id="create_date" >
                        Create date
                        <i></i>
                    </button>
                    <input class="search" type="text" data-search="create_date">
                </th>
                <th scope="col">
                    <button id="update_date" >
                        Update date
                        <i></i>
                    </button>
                    <input class="search" type="text" data-search="update_date">
                </th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody class="users">
            <?php foreach ($data as $user): ?>
                <tr>
                    <th><?=$user['id']?></th>
                    <th><?=$user['first_name']?></th>
                    <th><?=$user['last_name']?></th>
                    <th><?=$user['email']?></th>
                    <th><?=$user['create_date']?></th>
                    <th><?=$user['update_date']?></th>
                    <th><a href="edit-user?id=<?=$user['id']?>">EDIT</a></th>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>