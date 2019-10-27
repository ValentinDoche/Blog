<div class="row">
    <div class="col l8 offset-l2 s12">
        <p class="center" style="font-size: 16px; font-weight: bold">WELCOME</p>
        <form method="post" action="login" name="signup" id="signup">
            <div class="input-field col s12 l6">
                <i class="material-icons prefix">account_circle</i>
                <input id="name" type="text" class="validate" required name="name" form="signup">
                <label for="name">NAME</label>
            </div>
            <div class="input-field col s12 l6">
                <i class="material-icons prefix">vpn_key</i>
                <input id="surname" type="text" class="validate" required name="surname" form="signup">
                <label for="surname">SURNAME</label>
            </div>
            <div class="input-field col s12 l6">
                <i class="material-icons prefix">vpn_key</i>
                <input id="newPseudo" type="text" class="validate" required name="newPseudo" form="signup">
                <label for="newPseudo">PSEUDO</label>
            </div>
            <div class="input-field col s12 l6">
                <i class="material-icons prefix">vpn_key</i>
                <select id="sexe">
                    <option value="" disabled selected>CHOOSE YOUR OPTION</option>
                    <option value="male">MALE</option>
                    <option value="female">FEMALE</option>
                    <option value="other">OTHER</option>
                </select>
                <label for="sexe">SEXE</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">vpn_key</i>
                <input id="email" type="email" class="validate" required name="email" form="signup">
                <label for="email">E-MAIL</label>
            </div>
            <div class="input-field col s12 l6">
                <i class="material-icons prefix">vpn_key</i>
                <input id="password" type="password" class="validate" required name="password" form="signup">
                <label for="password">PASSWORD</label>
            </div>
            <div class="input-field col s12 l6">
                <i class="material-icons prefix">vpn_key</i>
                <input id="retypepassword" type="password" class="validate" required name="retypepassword" form="signup">
                <label for="retypepassword">RETYPE PASSWORD</label>
            </div>

            <div class="input-field col s12 center">
                <button class="btn-large waves-effect waves-light" type="submit" form="signin">SIGN IN <i class="material-icons right">send</i> </button>
            </div>
        </form>

    </div>
</div>
<script>
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>