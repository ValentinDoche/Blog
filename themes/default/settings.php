<?php
include_once 'function/websiteInfo.php'
?>

<h3>SETTINGS</h3>

<form id="settings" method="post" action="">
    <p class="underline">GENERAL : </p>
    <div class="input-field col s12 l6">
        <i class="material-icons prefix">perm_identity</i>
        <input id="titre" class="validate" required name="titre" form="settings" value="<?php echo WEBSITE_NAME ?>">
        <label class="active" for="titre">WEBSITE NAME</label>
    </div>
    <div class="file-field input-field col s12 l6">
        <div class="btn">
            <span>LOGO</span>
            <input type="file">
        </div>
        <div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" id="logo" required value="<?php echo LOGO ?>">
            </div>
        </div>
    </div>
    <div class="input-field col s12 l6">
        <i class="material-icons prefix">format_paint</i>
        <select id="theme" name="theme" required form="settings">
            <?php
            include_once 'lib/dirToArray.php';
            $themes = dirToArray('themes/');
            foreach ($themes as $key => $theme){
                if ($key == THEME){
                    echo '<option value="'.$key.'" selected>'.$key.'</option>';
                }else{
                    echo '<option value="'.$key.'">'.$key.'</option>';
                }
            }
            ?>
        </select>
        <label for="theme">THEME</label>
    </div>
    <div class="input-field col s12 l6">
        <i class="material-icons prefix">format_paint</i>
        <select id="signUp_settings" name="signUp_settings" required form="settings">
            <?php
            if (SIGNUP == 'enabled'){
                echo '<option value="enabled" selected>YES</option>';
                echo '<option value="disabled">NO</option>';
            }else{
                echo '<option value="enabled">YES</option>';
                echo '<option value="disabled" selected>NO</option>';
            }
            ?>
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
    <div class="col s12 l12">
        <p class="underline">ABOUT : </p>
    </div>

    <div class="file-field input-field col s12 l6">
        <div class="btn">
            <span>IMAGE</span>
            <input type="file" name="about_logo">
        </div>
        <div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" id="about_logo" required>
            </div>
        </div>
    </div>
    <div class="input-field col s12">
        <i class="material-icons prefix">vpn_key</i>
        <textarea id="about_text" class="materialize-textarea" required name="about_text" form="settings" data-length="4000"></textarea>
        <label for="about_text">ABOUT TEXT (MARKDOWN ACCEPTED)</label>
    </div>

    <div class="input-field col s12 center">
        <button class="btn-large waves-effect waves-light" type="submit" form="settings">UPDATE SETTINGS<i class="material-icons right">send</i> </button>
    </div>
</form>