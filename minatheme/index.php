<h1>index php file running this page</h1>

<?php

get_header();
while(have_posts()){
    the_post();
    ?> <h2><a href ="<?php the_permalink();?>"><?php the_title();?></a><h2>
      
        <?php

}
get_footer();
?>
