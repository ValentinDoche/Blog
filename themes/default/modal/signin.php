<div class="row">
    <div class="col l6 offset-l3 s12">
        <p class="center" style="font-size: 16px; font-weight: bold">WELCOME BACK</p>
        <form method="post" action="login" name="signin" id="signin">
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="pseudo" type="text" class="validate" required name="pseudo" form="signin">
                <label for="pseudo">PSEUDO</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">vpn_key</i>
                <input id="password" type="password" class="validate" required name="password" form="signin">
                <label for="password">PASSWORD</label>
            </div>
            <div class="input-field col s12 center">
                <button class="btn-large waves-effect waves-light" type="submit" form="signin">SIGN IN <i class="material-icons right">send</i> </button>
            </div>
        </form>

    </div>
</div>