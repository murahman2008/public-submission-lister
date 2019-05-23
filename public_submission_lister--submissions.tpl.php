<?php if(isset($error) && trim($error) !== '') : ?>
    <h3><?php echo $error; ?></h3>
<?php else : ?>
    <div class = "row">
        <div class = "col-xs-12">
            <a href = "<?php echo $base_url.'/public-submission/'.$program_id; ?>">Back</a>
        </div>
    </div>    
    <?php if(isset($pagination) && is_array($pagination) && count($pagination) > 0) : ?>
        <div class = "col-xs-12 col-lg-2">
            <table class = "table table-bodered">
                <tr>    
                    <td style = "text-align:center;"><a href = "<?php echo $pagination['first_page']; ?>">&#10094;&#10094;</a></td>
                
                    <?php foreach($pagination['page_no_array'] as $p => $pURL) : ?>
                        <td style = "text-align:center;" class = "<?php echo (trim($p) === trim($pagination['page_no'])) ? 'highlighted_pagination' : ''; ?>"><a href = "<?php echo $pURL; ?>"><?php echo $p; ?></a></td>
                    <?php endforeach; ?>
                
                <td style = "text-align:center;"><a href = "<?php echo $pagination['last_page']; ?>">&#10095;&#10095;</td>
                </tr>
            </table>
        </div>
    <?php endif; ?>     

    <div class = "row">
        <?php foreach($data as $key => $value) : ?>
            <div class = "col-xs-12">
                <a href = "<?php echo $value['file_url']; ?>" target = "_blank"><?php echo $value['first_name'].' '.$value['last_name']; ?></a>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<style>
    .highlighted_pagination {
        background-color:lightgray;
    }
</style>