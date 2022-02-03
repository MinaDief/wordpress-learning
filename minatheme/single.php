
<?php
get_header();
?>
<h1>single php file running this post</h1>

<?php
while(have_posts()){
    the_post();
    ?> <h2><?php the_title();?><h2>
      <h2>  <?php the_content();?><h2>
        <?php

}

get_footer();

?>

