<table>
    <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>username</td>
            <td>email</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->name; ?></td>
            <td><?php echo $user->username; ?></td>
            <td><?php echo $user->email; ?></td>
            <td>
                <a href="/school_cakePHP/admin/users/view/<?php echo $user->id; ?>">view</a>
                <a href="/school_cakePHP/admin/users/edit/<?php echo $user->id; ?>">edit</a>
                <form action="/school_cakePHP/admin/users/delete/<?php echo $user->id; ?>" method="post">
                    <input type="submit" value="delete">
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<a href="/school_cakePHP/admin/users/add">new</a>