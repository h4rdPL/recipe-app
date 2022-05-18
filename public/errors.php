<?php if(count($errors)>0) : ?> 
    <?php foreach ($errors as $error) : ?>
        <span style="color:red; font-weight: bold;"> <?php echo $error ?> </span>
    <?php endforeach ?>
<?php endif ?>
