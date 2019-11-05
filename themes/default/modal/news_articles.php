<div class="row">
    <div class="col s12">
        <p class="center" style="font-size: 16px; font-weight: bold">NEW ARTICLES</p>
        <form method="post" action="/function/newArticles.php" id="articles" enctype="multipart/form-data">
            <div class="input-field col s12 l6">
                <i class="material-icons prefix">title</i>
                <input id="articles_title" type="text" class="validate" name="articles_title" form="articles" required>
                <label for="articles_title">TITRE</label>
            </div>
            <div class="file-field input-field col s12 l6">
                <div class="btn">
                    <span>IMAGE</span>
                    <input type="file" name="articles_image_upload" form="articles" id="articles_image_upload">
                </div>
                <div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" id="articles_image" name="articles_image" required>
                    </div>
                </div>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">description</i>
                <textarea id="articles_summary" class="materialize-textarea" required name="articles_summary" form="articles" data-length="300"></textarea>
                <label for="articles_summary">description</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">description</i>
                <textarea id="articles_content" class="materialize-textarea" required name="articles_content" form="articles" data-length="10000"></textarea>
                <label for="articles_content">ARTICLES (MARKDOWN ACCEPTED)</label>
            </div>
            <div class="input-field col s12 center">
                <button class="btn-large waves-effect waves-light" type="submit" form="articles">SEND ARTICLE<i class="material-icons right">send</i> </button>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#articles_content, #articles_summary').characterCounter();
    });
    M.textareaAutoResize($('#articles_content, #articles_summary'));

    var uploadField = document.getElementById("articles_image_upload"), file_name = document.getElementById("articles_image");

    uploadField.onchange = function() {
        if (this.files[0].type == "image/png" || this.files[0].type == "image/jpeg"){
            if(this.files[0].size > 2097152){
                file_name.setCustomValidity("Image too big. Max 2mb");
            }else {
                file_name.setCustomValidity('');
            }
        }else {
            file_name.setCustomValidity('Supported only .jpeg or .png');
        }
        console.log(this.files[0].type)
    };
</script>