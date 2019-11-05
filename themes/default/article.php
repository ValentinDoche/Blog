<main>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12 xl9">
                <div class="col s12 l12">
                    <?php
                    include 'function/database.php';

                    $bdd = [$_GET['read']];
                    $statement = $pdo->prepare("SELECT * FROM articles WHERE id = ?");
                    $ask = $statement -> execute($bdd);
                    $card = $statement->fetch();
                    ?>

                    <div class="card">
                        <div class="card-image">
                            <img src="upload/<?php echo $card['image']?>" style="filter: blur(1.5px)">
                            <span class="card-title" style="font-weight: 600; text-transform: uppercase; background-color: rgba(147,147,147,0.16); width: 100%"><?php echo $card['title']?></span>
                        </div>
                        <div class="card-content">
                            <?php
                            include_once 'lib/Parsedown.php';
                            $Parsedown = new Parsedown();
                            echo $Parsedown->text($card['content']);
                            ?>
                        </div>
                        <div class="card-action" style="height: 50px">
                            <span class="left"><i class="material-icons prefix left">access_time</i>dsdsds<?php echo $card['date']?></span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col xl3 show-on-extra-large">
                <div style="position: fixed; width: 14%;" >
                    <div class="teal lighten-2 card-panel" style="height: 84vh; overflow: hidden; z-index: -1">
                        <img src="/assets/img/portrait.min.jpg" class="circle responsive-img center">
                        <h5 class="center" style="font-weight: bold">Valentin DOCHE</h5>
                        <hr color="black">
                        <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci eveniet expedita illo natus nulla odio perspiciatis quod sapiente temporibus tenetur. Amet earum eius excepturi itaque maiores maxime molestiae perspiciatis sint! Ab, ad asperiores autem corporis deleniti dicta doloremque ducimus eius enim eos et exercitationem fuga fugit harum id illo labore libero molestias mollitia nemo nesciunt non odit possimus provident, quia repellendus repudiandae suscipit totam unde voluptatibus? Ad, aliquam animi beatae, consectetur consequuntur distinctio dolor esse fuga hic in iste laudantium maxime minus necessitatibus nesciunt nobis optio perspiciatis quo sed sint tempora temporibus veniam. Animi dignissimos eos illum incidunt iure tenetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque in iusto magnam magni molestias nam nobis ullam vero! Ab consectetur dicta ducimus illo in ipsam, odio quod recusandae repudiandae voluptatum?</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>