<?php
/*
Template Name: Page d'Accueil
*/

// Inclure header de la page
get_header();
?>


<div class="text-white w-full">

    <!-- Section 1 -->
    <section class="bg-black">
        <?php
        // Récupérer et afficher le titre de la section 1.
        echo '<h2 class="p-52 w-3/5 text-5xl">' . get_field("titre_section1") . '</h2>';
        ?>
    </section>
    
   

</div>
