<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <?php if ($message) {
                echo '<div class="alert alert-danger">' . $message . ' </div>';
            } ?>
            <?php echo form_open('LoginUser', ['accept-charset' => 'UTF-8', 'role' => 'form', 'class' => 'form-login', 'method' => 'post']) ?>
            <h4>Login</h4>
            <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="username" name="username" />
            </br>
            <input type="password" id="userPassword" class="form-control input-sm chat-input" placeholder="password" name="password" />
            </br>
            <div class="wrapper">
                <button name="" id="" class="btn btn-primary" role="button" type="submit">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>