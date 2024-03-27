<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])){

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){
        if($post['id'] == $postId){
            $currentPost = $post;
        }
    }
  }
?>
  <main id="post-container">
    <div class="content_container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?=$currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum consectetur, unde enim esse quo adipisci praesentium cumque laudantium quos harum debitis error? Rem explicabo in ratione accusamus nemo cumque a.
        Maxime unde, deserunt hic amet voluptas, sunt maiores optio debitis blanditiis perspiciatis ipsum. Nobis quia dignissimos iste itaque rerum fugit, ducimus qui nihil. Temporibus repellat rem reiciendis iusto facere distinctio.
        Error quibusdam soluta quisquam, dignissimos incidunt, eum suscipit voluptate, odio minus consequatur magni ex vero placeat quasi totam rerum esse optio officia architecto. Cumque vero ipsum qui, eos architecto mollitia?
        Autem laborum, modi earum cumque harum repudiandae libero aliquam quod fuga placeat, voluptates ratione reiciendis eius. Quos ea repudiandae voluptas dignissimos? Dolorum nesciunt eligendi obcaecati hic minima distinctio voluptatum aliquam?
        Aspernatur illo asperiores, nisi quia provident doloremque? Quasi sunt eveniet qui, aspernatur dolore fugiat ratione ipsa corporis error eaque tempore, tenetur asperiores eum ea odit voluptatum praesentium adipisci, obcaecati quae?</p>
        <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum consectetur, unde enim esse quo adipisci praesentium cumque laudantium quos harum debitis error? Rem explicabo in ratione accusamus nemo cumque a.
        Maxime unde, deserunt hic amet voluptas, sunt maiores optio debitis blanditiis perspiciatis ipsum. Nobis quia dignissimos iste itaque rerum fugit, ducimus qui nihil. Temporibus repellat rem reiciendis iusto facere distinctio.
        Error quibusdam soluta quisquam, dignissimos incidunt, eum suscipit voluptate, odio minus consequatur magni ex vero placeat quasi totam rerum esse optio officia architecto. Cumque vero ipsum qui, eos architecto mollitia?
        Autem laborum, modi earum cumque harum repudiandae libero aliquam quod fuga placeat, voluptates ratione reiciendis eius. Quos ea repudiandae voluptas dignissimos? Dolorum nesciunt eligendi obcaecati hic minima distinctio voluptatum aliquam?
        Aspernatur illo asperiores, nisi quia provident doloremque? Quasi sunt eveniet qui, aspernatur dolore fugiat ratione ipsa corporis error eaque tempore, tenetur asperiores eum ea odit voluptatum praesentium adipisci, obcaecati quae?</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>    
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>   
        </ul>
     </aside>
  </main>
<?php
  include_once("templates/footer.php")
?>