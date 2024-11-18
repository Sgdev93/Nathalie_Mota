<?php
get_header(); // Inclut le fichier header.php
if (have_posts()) : 
    while (have_posts()) : the_post();
        the_title('<h1>', '</h1>'); // Titre de la page
        the_content(); // Contenu de la page
    endwhile; 
endif;
get_footer(); // Inclut le fichier footer.php
?>
