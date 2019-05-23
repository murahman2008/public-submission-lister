<?php if(isset($error) && trim($error) !== ''): ?>
    <?php
        echo '<h3>'.t($error).'</h3>';
    ?>
<?php endif; ?>

<?php if(isset($data) && is_array($data) && count($data) > 0) : ?>
    <div class = "row">
        <?php foreach($data as $program) : ?>
            <div class = "col-xs-12">
                <a href = "<?php echo $base_url.'/public-submission/'.$program['tid']; ?>"><?php echo $program['name']; ?></a>
            </div>
        <?php endforeach; ?>
    </div>        
<?php endif; ?>

