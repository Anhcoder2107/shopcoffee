<header>
    <div class="header__brand">
        <a href="" class="header__brand-link">
            Shop Coffee
        </a>
    </div>
    <div class="header__container">
        <ul class="header__container-list">
            <li class="header__container-item"><a href="#">Coffee</a></li>
            <li class="header__container-item"><a href="#">Tea</a></li>
            <li class="header__container-item header__container-item-menu">
                <a href="#">
                    Menu
                    <i class="fa-solid fa-caret-down header__container-item-icon"></i>
                </a>
                <ul class="header__container-item--list">
                    <li class="header__container-item--item">
                        <a href="">All</a>
                        <ul class="header__container-item--item-list">
                            <li class="header__container-item--item-item"></li>
                        </ul>
                    </li>
                    <li class="header__container-item--item">
                        <a href="">Coffee</a>
                        <ul class="header__container-item--item-list">
                            <li class="header__container-item--item-item"><a href="">Coffee Highlight</a></li>
                            <li class="header__container-item--item-item"><a href="">Coffee VietNam</a></li>
                            <li class="header__container-item--item-item"><a href="">Coffee Machine</a></li>
                        </ul>
                    </li>
                    <li class="header__container-item--item">
                        <a href="">Tea</a>
                        <ul class="header__container-item--item-list">
                            <li class="header__container-item--item-item"><a href="">Tea Highlight</a></li>
                            <li class="header__container-item--item-item"><a href="">Tea VietNam</a></li>
                            <li class="header__container-item--item-item"><a href="">Tea Machine</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="header__container-item"><a href="#">Blog</a></li>
            <li class="header__container-item"><a href="#">Store</a></li>
        </ul>
        <div class="header__container-auth">
            <?php if(!isset($_SESSION["username"])){ ?>
                <a href="login" class="header__container-auth--link">Login</a>
                <a href="register" class="">Register</a>
            <?php }else{ ?>
                <a href="profile" class="header__container-auth--link"><?php echo $_SESSION["username"] ?></a>
                <a href="logout" class="">Logout</a>
            <?php } ?>
        </div>
    </div>
</header>