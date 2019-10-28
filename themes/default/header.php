<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper container">
            <a href="/" class="brand-logo">Logo</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php
                if ($_SESSION['isConnected']){ ?>
                    <li><a href="/admin.php" class="btn">MON COMPTE</a></li>
                <?php }else{ ?>
                    <li><a href="#modal1" class="btn modal-trigger">SIGN IN</a></li>
                <?php } ?>


            </ul>
        </div>
    </nav>
</div>
<ul class="sidenav" id="mobile-demo">
    <li><a href="/" class="brand-logo center" style="font-size: 24px;">Logo</a></li>
    <li><a href="/">Blog</a></li>
    <li><a href="/about.php">About</a></li>
    <li><a href="/contact.php">Contact</a></li>
    <?php
    if ($_SESSION['isConnected']){
        echo '<li><a href="/function/mobileMenu.php?page=profile">Profile</a></li>';
        if ($_SESSION['role'] == 'writer' || $_SESSION['role'] == 'admin'){
            echo '<li><a href="/function/mobileMenu.php?page=articles">Articles</a></li>';
        }if ($_SESSION['role'] == 'admin'){
            echo '<li><a href="/function/mobileMenu.php?page=user">User</a></li>';
            echo '<li><a href="/function/mobileMenu.php?page=setting">Settings</a></li>';
        }
        echo '<li class="center col l12"><a href="/function/signOut.php" class="btn red">SIGN OUT</a></li>';

     }else{
        echo '<li><a href="#modal1" class="btn modal-trigger">SIGN IN</a></li>';
    }
    ?>

</ul>
<div id="modal1" class="modal">
    <div class="modal-content">
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s6"><a class="active" href="#tab1">SIGN IN</a></li>
                    <li class="tab col s6"><a href="#tab2">SIGN UP</a></li>
                </ul>
            </div>
            <div id="tab1">
                <?php
                require 'modal/signin.php';
                ?>

            </div>
            <div id="tab2" class="col s12">
                <?php
                require 'modal/signup.php'
                ?>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.modal').modal('');
        $('.modal').modal('open');
        $('.tabs').tabs();
        $('.modal').modal('close');
    });

</script>
