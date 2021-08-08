<amp-sidebar id="sidebar" class="sample-sidebar" layout="nodisplay" side="left">
    <div class="close-menu">
        <a on="tap:sidebar.toggle">
            <img src="<?php echo asset('images/bt-close.png') ?>" alt="Close Menu" width="24" height="24" />
        </a>
    </div>
    <a href="dashboard"><img src="<?php echo asset('images/menu-go-jumpers.png') ?>" alt="Welcome" width="200" height="43" /></a>
    <div>
        <ul>
            <li><a href="/categories" class="link-menu">Categorias</a></li>
            <li><a href="/products" class="link-menu">Produtos</a></li>
        </ul>
    </div>
</amp-sidebar>