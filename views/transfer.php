<main>
    <div class="row form">
        <h5>TRANSFER</h5>
        <form class="col s12" method="post">
            <div class="input-field col s12">
                <select name="from">
                    <option value="" disabled selected>Choose account</option>
                    <?php foreach ($accounts as $account) {
                      ?>
                    <option value="<?php echo $account->getId() ?>"><?php echo $account->getName() ." ". $account->getSold() . " euros"  ?></option>
                    <?php } ?>
                </select>
                <label>FROM</label>
            </div>
            <div class="input-field col s12">
                <select name="to">
                    <option value="" disabled selected>Choose account</option>
                    <?php foreach ($accounts as $account) {
                      ?>
                    <option value="<?php echo $account->getId() ?>"><?php echo $account->getName() ." ". $account->getSold() . " euros" ?></option>
                    <?php } ?>
                </select>
                <label>TO</label>
            </div>

            <div class="input-field col s12">
                <input placeholder="" id="amount" name="amount" type="number" class="validate">
                <label for="amount">AMOUNT</label>
            </div>
            <input type="submit" name="transfer" class="waves-effect waves-light btn" value="TRANSFER">
        </form>
    </div>
</main>
