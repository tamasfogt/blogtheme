<nav id="site-navigation" class="nav-wrapper" role="navigation">
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
    <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
	   <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'top-menu' , 'menu_class'=> 'right hide-on-med-and-down') ); ?>	
        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'mobile' , 'menu_class'=> 'side-nav') ); ?>    
    </div>    
</nav><!-- #site-navigation -->