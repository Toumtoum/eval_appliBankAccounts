<main>
    <div class="title">
        <h2>Accounts<h2>
    </div>

    <table class="striped">
        <thead>
            <tr>
                <th>Account</th>
                <th>Sold</th>
            </tr>
        </thead>

        <tbody>
          <?php foreach ($accounts as $account) {
            ?>
            <tr>
                <td><?php echo $account->getName() ?></td>
                <td><?php echo $account->getSold() ?></td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
</main>
