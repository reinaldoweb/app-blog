
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
  <div class="content-container">
    <h1 class="main-title"><?= $currentPost['title']?></h1>
    <p id="post-description"><?=  $currentPost['description']?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat saepe omnis sed nam odit corrupti similique quasi est vero earum sunt, alias quam ipsam repellat nesciunt doloremque optio eos cupiditate!
    Ipsam, facilis sed. Tenetur cumque necessitatibus repellat velit voluptatem, doloribus repudiandae fugiat voluptatibus nobis excepturi id, ad eaque labore quo, est possimus! Obcaecati asperiores illo eveniet soluta, tempora maiores consequuntur?
    Quo consectetur, minus molestias dolorem incidunt cumque reiciendis quisquam placeat ad enim, numquam, sint dicta temporibus pariatur laboriosam quaerat at. Cum magnam fuga dolore provident nostrum eius veritatis, et nisi.
    Explicabo aliquid beatae asperiores porro impedit adipisci natus sapiente rerum molestiae? Exercitationem saepe sequi laborum libero sunt, alias laboriosam facere autem veniam qui odit esse cupiditate velit excepturi fuga officiis.
    Debitis aperiam dolorum fugit natus. Veritatis ad deserunt nemo ex quia minima expedita! Eaque, nesciunt neque necessitatibus eveniet molestias pariatur incidunt sint aliquid! Sit et deleniti unde animi ad voluptatem.</p>
  </div>
</main>

<aside id="nav-container">
  <h3 id="tags-title">Tags</h3>
  <ul id="tag-list">
    <?php foreach($currentPost['tags'] as $tags): ?>
      <li>
        <a href="#"><?= $tags?></a>
      </li>
    <?php endforeach; ?>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
    <?php foreach($categories as $category): ?>
      <li>
        <a href="#"><?= $category?></a>
      </li>
    <?php endforeach; ?>
    </ul>
    
  </ul>
</aside>



<?php include_once("templates/footer.php"); ?>

