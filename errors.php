<?php if (count($errors)>0):      ?>
<div class="error">
<?php foreach ($errors as $errors):?>
<p><?php echo $error; ?></p>
<?php end for each ?>
</div>
<?php endif ?>
