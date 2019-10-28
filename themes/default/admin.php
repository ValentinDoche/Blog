<main style="margin-top: 1em">
    <div class="container z-depth-2">
        <div class="row">
            <div class="col l3 hide-on-med-and-down">
                <div class="col l12">
                    <div class="tabs-vertical">
                        <ul class="tabs2">
                            <li class="tab col l12"><a href="#profile" class="active">PROFILE</a></li>
                            <li class="tab col l12"><a href="#article">ARTICLES</a></li>
                            <li class="tab col l12"><a href="#user">USER</a></li>
                            <li class="tab col l12"><a href="#setting">SETTINGS</a></li>
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
                <div id="article" class="col s12">
                    <div class="col s6">
                        <h3>ARTICLES</h3>
                    </div>
                    <div class="col s6">
                        <h3><a class="btn-floating btn-large waves-effect waves-light red right" ><i class="material-icons">add</i></a></h3>
                    </div>
                    <div class="col s12">
                        <div class="card small">
                            <div class="card-image">
                                <img src="/assets/img/image1.jpg" style="transform: translateY(-25%); filter: blur(1.5px)">
                                <span class="card-title" style="font-weight: 600">TEST</span>
                            </div>
                            <div class="card-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores atque, corporis cumque debitis dignissimos ducimus eos ex facilis fugit illum ipsam itaque molestias nesciunt nobis nostrum odit optio perferendis quaerat quas quos reprehenderit repudiandae sed vel voluptates. Commodi consequuntur, ex fuga id libero nesciunt officia officiis porro repudiandae sequi sint tempora, vel, voluptatum. Accusamus at atque blanditiis dolor dolorum, facere hic illo incidunt iure, nihil nobis officia omnis perspiciatis quae repellendus sint suscipit voluptates voluptatum. Aliquam aspernatur, atque blanditiis consectetur cum, dignissimos earum impedit ipsam maxime nisi obcaecati omnis provident quae, quia soluta sunt tenetur ut vel velit vero. Excepturi expedita explicabo fuga in nisi numquam repellat, sint vel! Accusamus cumque dolorum ea eius facilis id in magni minima minus, nesciunt obcaecati perferendis, qui repellendus rerum sed. Commodi consectetur cumque debitis delectus doloremque doloribus eaque eligendi enim eos ...

                            </div>
                            <div class="card-action">
                                <a href="#"><span class="left badge hashtag red">test</span></a>
                                <a href="#"><span class="left badge hashtag green">test2</span></a>
                                <!--<a href="#"><span class="left badge hashtag blue hide-on-med-and-down">test3</span></a> -->
                                <a href="#" class="right">Read</a>
                            </div>
                        </div>
                    </div>

                </div>

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
                    <h3>SETTINGS</h3>

                    <form id="settings" method="post" action="">
                        <p class="underline">GENERAL : </p>
                        <div class="input-field col s12 l6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="titre" class="validate" required name="titre" form="settings" value="VALENTIN DOCHE">
                            <label class="active" for="titre">WEBSITE NAME</label>
                        </div>
                        <div class="file-field input-field col s12 l6">
                            <div class="btn">
                                <span>LOGO</span>
                                <input type="file">
                            </div>
                            <div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" id="logo" required>
                                </div>
                            </div>
                        </div>
                        <div class="input-field col s12 l6">
                            <i class="material-icons prefix">format_paint</i>
                            <select id="theme" name="theme" required form="settings">
                                <option value="default" selected>DEFAULT</option>
                            </select>
                            <label for="theme">THEME</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <i class="material-icons prefix">format_paint</i>
                            <select id="signUp_settings" name="signUp_settings" required form="settings">
                                <option value="enabled" selected>YES</option>
                                <option value="disabled">NO</option>
                            </select>
                            <label for="theme">ALLOW USERS TO SIGN UP</label>
                        </div>

                        <p class="underline">SIDEBAR : </p>
                        <div class="file-field input-field col s12 l6">
                            <div class="btn">
                                <span>IMAGE</span>
                                <input type="file">
                            </div>
                            <div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" id="sideImg" required>
                                </div>
                            </div>
                        </div>
                        <div class="input-field col s12 l6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="sidebar_titre" class="validate" required name="titre" form="settings" value="VALENTIN DOCHE">
                            <label class="active" for="sidebar_titre">SIDEBAR NAME</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">vpn_key</i>
                            <textarea id="description" class="materialize-textarea" required name="description" form="settings" data-length="360"></textarea>
                            <label for="description">DESCRIPTION</label>
                        </div>
                        <p class="underline">CONTACT : </p>
                        <div class="input-field col s12 l6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="contact_mail" class="validate" required name="titre" form="settings" value="CONTACT@VALENTINDOCHE.COM">
                            <label class="active" for="contact_mail">CONTACT E-MAIL</label>
                        </div>

                        <div class="input-field col s12 center">
                            <button class="btn-large waves-effect waves-light" type="submit" form="settings">UPDATE SETTINGS<i class="material-icons right">send</i> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    $(document).ready(function(){
        $('.tabs2').tabs();
        $('#description').characterCounter();
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

    M.textareaAutoResize($('#description'));


</script>