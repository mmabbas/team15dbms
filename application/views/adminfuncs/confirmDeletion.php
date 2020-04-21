<div class="row">

    <div class="col-md-12">
        <br><br>
        <h1 class="text-center"><?php echo $title; ?></h1>
        <div class='items-box'>
            <h3 class='item-title'><?php echo $item->title; ?></h3>
            <p class='item-author'><?php echo $item->author; ?></p>
            <p class='year'><?php echo $item->year; ?></p>
        </div>
    </div>
    <div align="center">
        <h2>Are you sure you want to delete this title?</h2>
        <a href="<?php echo base_url(); ?>adminPortal/deleteItem/<?php echo $item->itemID; ?>"class="btn btn-success">Yes</a>
        <a href="<?php echo base_url(); ?>adminPortal/viewTitles" class="btn btn-danger">No</a>
    </div>

</div>

