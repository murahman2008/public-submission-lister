<?php if(isset($error) && trim($error) !== '') : ?>
    <h3><?php echo $error; ?></h3>
<?php else : ?>
    <h3>To access a submission:</h3>
    <ul>
        <li>Click on a letter below to find submissions in alphabetical order of Firstname or Organisation.</li>
        <li>Click on the Name to open the submission in PDF or Word format.</li>
    </ul>
    <div class = "row">  
        <div class = "col-xs-12">
            <a href = "<?php echo $base_url.'/public-submission'; ?>">Back</a>
        </div>
    </div>
    <div class = "row">
        <?php foreach($characters as $char) : ?>
            <div class = "col-xs-2 col-lg-1"><a href = "<?php echo $base_url.'/public-submission/'.$programId.'/'.$char; ?>"><?php echo $char; ?></a></div>
        <?php endforeach; ?>
    </div>        
<?php endif; ?>    
