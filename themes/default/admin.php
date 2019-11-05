<?php
if ($_SESSION['isConnected']){ ?>
    <main style="margin-top: 1em">
        <div class="container z-depth-2">
            <div class="row">
                <div class="col l3 hide-on-med-and-down">
                    <div class="col l12">
                        <div class="tabs-vertical">
                            <ul class="tabs2">
                                <li class="tab col l12"><a href="#profile" class="active">PROFILE</a></li>
                                <?php
                                if ($_SESSION['role'] == 'writer' || $_SESSION['role'] == 'admin'){ ?>
                                    <li class="tab col l12"><a href="#article">ARTICLES</a></li>
                                <?php }if ($_SESSION['role'] == 'admin'){ ?>
                                <li class="tab col l12"><a href="#user">USER</a></li>
                                <li class="tab col l12"><a href="#setting">SETTINGS</a></li>
                                <?php } ?>
                                <br>
                                <li class="center col l12"><a href="/function/signOut.php" class="btn red">SIGN OUT</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="col l9">
                    <div id="profile" class="col s12">
                        <h3>MY PROFILE</h3>
                        <p>PROFILE UPDATE</p>
                        <form action="" method="post" id="update">
                            <div class="input-field col s12 l6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="update_name" type="text" class="validate" required name="name" form="update">
                                <label for="update_name">NAME</label>
                            </div>
                            <div class="input-field col s12 l6">
                                <i class="material-icons prefix">vpn_key</i>
                                <input id="update_surname" type="text" class="validate" required name="surname" form="update">
                                <label for="update_surname">SURNAME</label>
                            </div>
                            <div class="input-field col s12 l6">
                                <i class="material-icons prefix">vpn_key</i>
                                <input id="update_pseudo" type="text" class="validate" name="newPseudo" form="update" disabled>
                                <label for="update_pseudo">PSEUDO</label>
                            </div>
                            <div class="input-field col s12 l6">
                                <i class="material-icons prefix">vpn_key</i>
                                <select id="update_sexe" name="sexe" required form="update">
                                    <option value="" disabled selected>CHOOSE YOUR OPTION</option>
                                    <option value="male">MALE</option>
                                    <option value="female">FEMALE</option>
                                    <option value="other">OTHER</option>
                                </select>
                                <label for="update_sexe">SEXE</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">vpn_key</i>
                                <input id="update_email" type="email" class="validate" required name="email" form="update">
                                <label for="update_email">E-MAIL</label>
                            </div>
                            <div class="input-field col s12 l6">
                                <i class="material-icons prefix">vpn_key</i>
                                <input id="update_password" type="password" class="validate" required name="password" form="update">
                                <label for="update_password">PASSWORD</label>
                            </div>
                            <div class="input-field col s12 l6">
                                <i class="material-icons prefix">vpn_key</i>
                                <input id="update_confirm_password" type="password" class="validate" required name="retypepassword" form="update">
                                <label for="update_confirm_password">RETYPE PASSWORD</label>
                            </div>
                            <div class="input-field col s12 center">
                                <button class="btn-large waves-effect waves-light" type="submit" form="update">UPDATE MY PROFILE<i class="material-icons right">send</i> </button>
                            </div>
                        </form>

                    </div>
                    <?php
                    if ($_SESSION['role'] == 'writer' || $_SESSION['role'] == 'admin'){ ?>

                        <div id="article" class="col s12">
                            <div class="col s6">
                                <h3>ARTICLES</h3>
                            </div>
                            <div class="col s6">
                                <h3><a class="btn-floating btn-large waves-effect waves-light red right modal-trigger" href="#modal2"><i class="material-icons">add</i></a></h3>
                            </div>
                            <div class="col s12">
                                <?php
                                include "articles.php";
                                ?>
                            </div>

                        </div>

                        <!-- Modal -->
                        <div id="modal2" class="modal">
                            <div class="modal-content">
                                <?php
                                require 'modal/news_articles.php';
                                ?>
                            </div>
                        </div>


                    <?php }if ($_SESSION['role'] == 'admin'){ ?>

                        <div id="user" class="col s12">
                            <h3>USERS</h3>
                            <table>
                                <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>SURNAME</th>
                                    <th>E-MAIL</th>
                                    <th>ROLE</th>
                                    <th>UPDATE</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                <tr>
                                    <td>VALENTIN</td>
                                    <td>DOCHE</td>
                                    <td>CONTACT@VALENTINDOCHE.COM</td>
                                    <td>
                                        <select id="ROLE" name="role" required>
                                            <option value="user" selected>USER</option>
                                            <option value="writer">WRITER</option>
                                            <option value="admin">ADMIN</option>
                                        </select>
                                    </td>
                                    <td class="center">
                                        <a class="btn-floating waves-effect waves-light red" ><i class="material-icons">send</i></a
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div id="setting" class="col s12">
                            <?php
                            include "settings.php";
                            ?>
                        </div>


                    <?php } ?>



                </div>
            </div>
        </div>
    </main>
    <script>
        $(document).ready(function(){
            $('.tabs2').tabs();

        });
        var password2 = document.getElementById("update_password")
            , confirm_password2 = document.getElementById("update_confirm_password");

        function validatePassword2(){
            if(password2.value != confirm_password2.value) {
                confirm_password2.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password2.setCustomValidity('');
            }
        }

        password2.onchange = validatePassword2;
        confirm_password2.onkeyup = validatePassword2;




    </script>
<?php }
?>
