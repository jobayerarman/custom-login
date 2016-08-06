<div class="row">
    <div class="col-md-6 col-md-offset-3">

        <!-- Show errors if there are any -->
        <?php if ( count( $attributes['errors'] ) > 0 ) : ?>
            <?php foreach ( $attributes['errors'] as $error ) : ?>
                <p class="text-warning">
                    <?php echo $error; ?>
                </p>
            <?php endforeach; ?>
        <?php endif; ?>

        <!-- Login Form -->
        <form method="post" action="<?php echo wp_login_url(); ?>" class="form-signin">
          <div class="form-group">
            <label for="user_login"><h6><?php _e( 'Email or Username', 'custom-login' ); ?></h6></label>
            <div class="input-group margin-bottom-sm">
              <span class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
              <input type="text" class="form-control" name="log" id="user_login" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="user_pass"><h6><?php _e( 'Password', 'custom-login' ); ?></h6></label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
              <input type="password" class="form-control" name="pwd" id="user_pass" placeholder="Password">
            </div>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="rememberme" value="forever"> Remember Me
            </label>
          </div>
          <br>
          <button class="btn btn-primary" type="submit" name="wp-submit">Sign in</button>
        </form>
    </div>
</div>
