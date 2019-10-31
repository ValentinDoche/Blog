<?php
include_once 'function/websiteInfo.php'
?>

<h3>SETTINGS</h3>

<form id="settings" method="post" action="/function/updateSettings.php">
    <p class="underline">GENERAL : </p>
    <div class="input-field col s12 l6">
        <i class="material-icons prefix">perm_identity</i>
        <input id="website_name" class="validate" required name="website_name" form="settings" value="<?php echo WEBSITE_NAME ?>">
        <label class="active" for="website_name">WEBSITE NAME</label>
    </div>
    <div class="file-field input-field col s12 l6">
        <div class="btn">
            <span>LOGO</span>
            <input type="file" name="logo_upload">
        </div>
        <div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" id="logo" name="logo" required value="<?php echo LOGO ?>">
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
        <select id="signup_settings" name="signup_settings" required form="settings">
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
        <label for="signup_settings">ALLOW USERS TO SIGN UP</label>
    </div>

    <p class="underline">SIDEBAR : </p>
    <div class="input-field col s12 l6">
        <i class="material-icons prefix">perm_identity</i>
        <input id="sidebar_name" class="validate" required name="sidebar_name" form="settings" value="<?php echo SIDEBAR_NAME ?>">
        <label class="active" for="sidebar_name">SIDEBAR NAME</label>
    </div>
    <div class="file-field input-field col s12 l6">
        <div class="btn">
            <span>IMAGE</span>
            <input type="file" name="sidebar_image_upload">
        </div>
        <div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" id="sidebar_image" name="sidebar_image" required value="<?php echo SIDEBAR_IMAGE ?>">
            </div>
        </div>
    </div>

    <div class="input-field col s12">
        <i class="material-icons prefix">vpn_key</i>
        <textarea id="sidebar_description" class="materialize-textarea" required name="sidebar_description" form="settings" data-length="360"><?php echo SIDEBAR_DESCRIPTION ?></textarea>
        <label for="sidebar_description">DESCRIPTION</label>
    </div>
    <p class="underline">CONTACT : </p>
    <div class="input-field col s12 l6">
        <i class="material-icons prefix">perm_identity</i>
        <input id="contact_email" class="validate" required name="contact_email" form="settings" value="<?php echo CONTACT_EMAIL ?>">
        <label class="active" for="contact_email">CONTACT E-MAIL</label>
    </div>
    <div class="col s12 l12">
        <p class="underline">ABOUT : </p>
    </div>
    <div class="input-field col s12 l6">
        <i class="material-icons prefix">perm_identity</i>
        <input id="about_name" class="validate" required name="about_name" form="settings" value="<?php echo ABOUT_NAME ?>">
        <label class="active" for="about_name">NAME</label>
    </div>
    <div class="file-field input-field col s12 l6">
        <div class="btn">
            <span>IMAGE</span>
            <input type="file" name="about_image_upload">
        </div>
        <div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" id="about_image" name="about_image" required value="<?php echo ABOUT_IMAGE ?>">
            </div>
        </div>
    </div>
    <div class="input-field col s12">
        <i class="material-icons prefix">vpn_key</i>
        <textarea id="about_text" class="materialize-textarea" required name="about_text" form="settings" data-length="4000"><?php echo ABOUT_TEXT ?></textarea>
        <label for="about_text">ABOUT TEXT (MARKDOWN ACCEPTED)</label>
    </div>

    <div class="input-field col s12 center">
        <button class="btn-large waves-effect waves-light" type="submit" form="settings">UPDATE SETTINGS<i class="material-icons right">send</i> </button>
    </div>
</form>
<script>
    $(document).ready(function(){
        $('#sidebar_description, #about_text').characterCounter();
    });
    M.textareaAutoResize($('#sidebar_description, #about_text'));
</script>