<h3>About Us</h3>

    <div class="mycontainer">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Firstname</th>
                <th>Email</th>
                <th>Tel</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($user as $v): ?>
            <tr>
                <td><?php echo $v['name'];?><td>
                <td><?php echo $v['email'];?></td>
                <td><?php echo $v['tel'];?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>