<?php
include_once "function/database.php";

$statement = $pdo->query("SELECT * FROM articles ORDER BY id DESC ");
$result = $statement->fetchAll();

foreach ($result as $card){
    $tag = [$card['tag1'], $card['tag2']]
    ?>
    <div class="card <?php if ($_SERVER['PHP_SELF'] == "/admin.php"){ echo "small";}else{echo "medium";} ?>">
        <div class="card-image">
            <img src="upload/<?php echo $card['image']?>" style="transform: translateY(-25%); filter: blur(1.5px)">
            <span class="card-title" style="font-weight: 600"><?php echo $card['title']?></span>
        </div>
        <div class="card-content">
            <?php echo $card['summary'] ?>
        </div>
        <div class="card-action">
            <!--<a href="categorie.php?cat=<?php echo $card['tag'][0] ?>"><span class="left badge hashtag red"><?php echo $tag[0] ?></span></a>
            <a href="categorie.php?cat=<?php echo $card['tag'][1] ?>"><span class="left badge hashtag green"><?php echo $tag[1] ?></span></a> -->
            <span class="left"><i class="material-icons prefix left">access_time</i><?php echo $card['date']?></span>
            <a href="article.php?read=<?php echo $card['id']?>" class="right">Read</a>
        </div>
    </div>
<?php }