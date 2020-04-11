<?php echo form_open('users/adminLogin'); ?>
<div class="row">

    <div class="col-md-12">
        <br><br>
        <h1 class="text-center"><?php echo $title; ?></h1>
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </div>

</div>

<?php echo form_close(); ?>