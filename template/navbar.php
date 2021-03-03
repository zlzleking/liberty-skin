<header>
    <div class="nav-wrapper navbar-fixed-top">
        <nav class="navbar navbar-dark">
            <div id="brand-wrapper">
                <a class="navbar-brand" href="<?php bloginfo('wpurl'); ?>">
                    <strong><span><?php bloginfo('name'); ?></span></strong>
                </a>
                <?php wp_nav_menu(); ?>
            </div>
            <div class="navbar-login">
                <?php
                // If the user is logged in...
                if (is_user_logged_in()) {
                    $current_user = wp_get_current_user();?>
                    <div class="dropdown login-menu">
                        <a class="dropdown-toggle" type="button" id="login-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo get_avatar($current_user->user_email, 96, '', $current_user->display_name, $args = array('class' => 'profile-img')); ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right login-dropdown-menu" aria-labelledby="login-menu">
                            <span class="dropdown-item">
                                <?php echo $current_user->display_name ?>
                            </span>
                            <div class="dropdown-divider view-logout"></div>
                            <a href="<?php echo wp_logout_url(); ?>" class="dropdown-item view-logout" title="로그아웃">로그아웃</a>
                        </div>
                    </div>
                <?php } else { ?>
                    <a href="<?php echo wp_login_url(get_permalink()) ?>" class="none-outline">
                        <i class="fas fa-sign-in-alt"></i>
                    </a>
                <?php } ?>
            </div>
            <?php
            ?>
        </nav>
    </div>
</header>