<main>
    <div class="row form">
        <h5>DELETE ACCOUNT</h5>
        <form class="col s12" method="post">
            <div class="input-field col s12">
              <select name="account">
                  <option value="" disabled selected>Choose account</option>
                  <?php foreach ($accounts as $account) {
                    ?>
                  <option value="<?php echo $account->getId() ?>"><?php echo $account->getName() ." ". $account->getSold() . " euros"  ?></option>
                  <?php } ?>
              </select>
                <label>Account to delete</label>
            </div>
            <input type="submit" name="delete" value="delete" class="waves-effect waves-light btn">
        </form>
    </div>
</main>
