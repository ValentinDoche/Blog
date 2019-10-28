<main style="margin-top: 1em">
    <div class="container z-depth-2">
        <div class="row">
            <div class="col s12">
                <h3>ME CONTACTER</h3>
                <form method="post" action="" id="contact">
                    <div class="input-field col s12 l6">
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="contact_name" type="text" class="validate" required name="contact_name" form="contact">
                        <label for="contact_name">NAME</label>
                    </div>
                    <div class="input-field col s12 l6">
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="contact_mail" type="text" class="validate" required name="contact_name" form="contact">
                        <label for="contact_mail">E-MAIL</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">vpn_key</i>
                        <textarea id="contact_message" class="materialize-textarea" required name="message" form="contact" data-length="4000"></textarea>
                        <label for="contact_message">MESSAGE</label>
                    </div>
                    <div class="input-field col s12 center">
                        <button class="btn-large waves-effect waves-light" type="submit" form="contact">SEND<i class="material-icons right">send</i> </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<script>
    $(document).ready(function(){
        $('#message').characterCounter();
    });
    M.textareaAutoResize($('#message'));
</script>