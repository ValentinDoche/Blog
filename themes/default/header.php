<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper container">
            <a href="/" class="brand-logo">Logo</a>
            <a href="#" data-activates="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#modal1" class="btn modal-trigger">SIGN IN</a></li>
            </ul>
        </div>
    </nav>
</div>
<ul class="sidenav" id="mobile-demo">
    <li><a href="/" class="brand-logo center" style="font-size: 24px;">Logo</a></li>
    <li><a href="/">Blog</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="#modal1" class="btn modal-trigger">SIGN IN</a></li>
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
            <div id="tab1" class="col s12">
                SIGN IN
            </div>
            <div id="tab2" class="col s12">
                SIGN UP
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.sidenav-trigger').sideNav();
        $('.modal').modal('');
        $('.modal').modal('open');
        $('.tabs').tabs();
        $('.modal').modal('close');
    });

</script>
<!--<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo">Logo</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#" class="btn">SIGN IN</a></li>
            </ul>

        </div>
    </nav>
    <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Blog</a></li>
        <li><a href="badges.html">About</a></li>
        <li><a href="collapsible.html">Contact</a></li>
        <li><a href="mobile.html" class="btn">SIGN IN</a></li>
    </ul>
</div>


<script>
    $(document).ready(function() {

        $(".button-collapse").sideNav();

    });
</script> -->