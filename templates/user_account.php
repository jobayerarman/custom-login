<div class="row">
    <div class="col-md-12">
        <?php if ( is_user_logged_in() ) {
            $current_user = wp_get_current_user(); ?>

            <h5>Full Name: <?php echo esc_html( $current_user->user_firstname ) . ' ' . esc_html( $current_user->user_lastname ); ?></h5>
            <h5>Email: <?php echo esc_html( $current_user->user_email ); ?></h5>
            <h5>Username: <?php echo esc_html( $current_user->user_login ); ?></h5>
        <?php } else { ?>

            <h3 class="text-center bg-warning">You're not logged in</h3>
            <br>
            <a href="<?php echo home_url( 'member-login' ); ?>" class="btn btn-info">Sign in</a>
        <?php } ?>
    </div>
</div>
