<div class="row">
    <div class="col l8 offset-l2 s12">
        <p class="center" style="font-size: 16px; font-weight: bold">WELCOME</p>
        <form method="post" action="/function/signUp.php" name="signup" id="signup">
            <div class="input-field col s12 l6">
                <i class="material-icons prefix">account_circle</i>
                <input id="signup_name" type="text" class="validate" required name="signup_name" form="signup">
                <label for="signup_name">NAME</label>
            </div>
            <div class="input-field col s12 l6">
                <i class="material-icons prefix">vpn_key</i>
                <input id="signup_surname" type="text" class="validate" required name="signup_surname" form="signup">
                <label for="signup_surname">SURNAME</label>
            </div>
            <div class="input-field col s12 l6">
                <i class="material-icons prefix">vpn_key</i>
                <input id="signup_pseudo" type="text" class="validate" required name="signup_pseudo" form="signup">
                <label for="signup_pseudo">PSEUDO</label>
            </div>
            <div class="input-field col s12 l6">
                <i class="material-icons prefix">vpn_key</i>
                <select id="signup_sexe" name="signup_sexe" required>
                    <option value="" disabled selected>CHOOSE YOUR OPTION</option>
                    <option value="male">MALE</option>
                    <option value="female">FEMALE</option>
                    <option value="other">OTHER</option>
                </select>
                <label for="signup_sexe">SEXE</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">vpn_key</i>
                <input id="signup_email" type="email" class="validate" required name="signup_email" form="signup">
                <label for="signup_email">E-MAIL</label>
            </div>
            <div class="input-field col s12 l6">
                <i class="material-icons prefix">vpn_key</i>
                <input id="signup_password" type="password" class="validate" required name="signup_password" form="signup">
                <label for="signup_password">PASSWORD</label>
            </div>
            <div class="input-field col s12 l6">
                <i class="material-icons prefix">vpn_key</i>
                <input id="signup_confirm_password" type="password" class="validate" required name="signup_confirm_password" form="signup">
                <label for="signup_confirm_password">RETYPE PASSWORD</label>
            </div>

            <div class="input-field col s12 center">
                <button class="btn-large waves-effect waves-light" type="submit" form="signup">SIGN UP <i class="material-icons right">send</i> </button>
            </div>
        </form>

    </div>
</div>
<script>
    $(document).ready(function(){
        $('select').formSelect();
    });
    var signup_password = document.getElementById("signup_password")
        , signup_confirm_password = document.getElementById("signup_confirm_password");

    function validatePassword(){
        if(signup_password.value != signup_confirm_password.value) {
            signup_confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            signup_confirm_password.setCustomValidity('');
        }
    }

    signup_password.onchange = validatePassword;
    signup_confirm_password.onkeyup = validatePassword;

</script>