<div id="sidebar" class="sidebar  col-lg-3 col-md-3 col-xs-12">
    <aside class="widget menu">
        <header>
            <h3 class="title">My Account</h3>
        </header>
        <nav>
            <ul>
                <li <?php if($active_sidebar==1){      ?> class="active" <?php } ?>  >
                    <a href="shop-account.html"><i class="fa fa-gears item-icon"></i>Mi perfil</a>
                </li>
                <li  <?php if($active_sidebar==2){      ?> class="active" <?php } ?> >
                    <a href="shop-account-information.html"><i class="fa fa-user item-icon"></i>Mis propuestas</a>
                </li>
                <li  <?php if($active_sidebar==3){      ?> class="active" <?php } ?> >
                    <a href="shop-account-address.html"><i class="fa fa-pencil-square-o item-icon"></i>Address Book</a>
                </li>
                <li  <?php if($active_sidebar==4){      ?> class="active" <?php } ?> >
                    <a href="shop-account-orders.html"><i class="fa fa-shopping-cart item-icon"></i>My Orders</a>
                </li>
            </ul>
        </nav>
    </aside><!-- .menu-->
</div>