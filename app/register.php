<style>
    <?php require "../styles/register.css" ?>
</style>

<div class="container entire-screen">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Register Here</h2>
            <form action="../includes/register.inc.php" method="post">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Repeat Password</label>
                    <input type="password" name="repeat_password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
