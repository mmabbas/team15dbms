<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
<div class="row">
    <div class="col-md-12">
        <br>
        <h2 class="text-center"><?= $title; ?></h2>
        <div class="form-group">
            <Label>First Name</Label>
            <input type="text" class="form-control" name="firstName" placeholder="First Name">
        </div>

        <div class="form-group">
            <Label>Last Name</Label>
            <input type="text" class="form-control" name="lastName" placeholder="Last Name">
        </div>

        <div class="form-group">
            <Label>Age</Label>
            <input type="number" class="form-control" name="age" placeholder="Age">
        </div>

        <div class="form-group">
            <Label>Email</Label>
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>

        <div class="form-group">
            <Label>Username</Label>
            <input type="text" class="form-control" name="username" placeholder="Username">
        </div>

        <div class="form-group">
            <Label>Password</Label>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

        <div class="form-group">
            <Label>Confirm Password</Label>
            <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
        </div>
        <div><Label>User Type</Label></div>

        <div class="form-group">
            <select name = "usertype">
                <option value = 1>Student</option>
                <option value = 2>Faculty</option>
            </select>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary btn-block">Submit</button>
<?php echo form_close(); ?>