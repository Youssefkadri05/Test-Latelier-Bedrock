<?php
/*
Template Name: Page d'Accueil
*/

// Inclure header de la page
get_header();
?>


<div class="w-full">

    <!-- Section 1 -->
    <section class="bg-black text-white">
        <?php
        // Récupérer et afficher le titre de la section 1.
        echo '<h2 class="p-52 w-3/5 text-5xl">' . get_field("titre_section1") . '</h2>';
        ?>
    </section>
    <!-- Section 2 -->
    <section class="bg-white">
        <!-- Contenu centré verticalement -->
        <div class="flex justify-center items-center h-full text-center">
            <?php
            // Récupérer et afficher le titre de la section 2.
            echo '<h4 class="text-black w-1/5 mt-36">' . get_field("titre_section2") . '</h4>';
            ?>
        </div>

        <!-- Deux colonnes -->
        <div class="flex">
            <!-- Colonne 1 -->
            <div class="w-1/2 pt-36">
                <?php
                $colonne1 = get_field("colonne1");
                ?>
                <!-- Image -->
                <img src="<?php echo $colonne1["image_colonne1"]; ?>" alt="image1">
                <!-- Contenu de la colonne 1 -->
                <div class="pt-20 pl-16">
                    <h4 class="text-xs"><?php echo $colonne1["surtitre_colonne1"]; ?> </h4>
                    <h4 class=" w-1/3 font-bold mt-4"><?php echo $colonne1["titre_colonne1"]; ?> </h4>
                    <div class="w-1/3 text-xs mt-4">
                        <?php echo $colonne1["notule_colonne1"]; ?>
                    </div>
                </div>
            </div>

            <!-- Colonne 2 -->
            <div class="w-1/2 pt-72">
                <?php
                $colonne2 = get_field("colonne2");
                ?>
                <!-- Image -->
                <img src="<?php echo $colonne2["image_colonne2"]; ?>" alt="image1">
                <!-- Contenu de la colonne 2 -->
                <div class="pt-20 pl-16">
                    <h4 class="text-xs"><?php echo $colonne2["surtitre_colonne2"]; ?> </h4>
                    <h4 class=" w-1/2 font-bold mt-4"><?php echo $colonne2["titre_colonne2"]; ?> </h4>
                    <div class="w-5/12 text-xs mt-4">
                        <?php echo $colonne2["notule_colonne2"]; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <!-- Section 5 -->
<section class="bg-black text-white mt-28 ml-28 w-5/6">
    <div class="text-center p-24">
        <?php
        // Récupérer et afficher le sous-titre et le titre de la section 5.
        echo '<h4 class="text-2xl mb-4">' . get_field("sous_titre_section5") . '</h4>';
        echo '<h2 class="text-4xl font-bold mb-8">' . get_field("titre_section5") . '</h2>';
        ?>

        <?php
        // Vérifier s'il y a des éléments dans le repeater field
        if (have_rows("repeater_section5")) :
        ?>
            <div class="slick-carousel p-16 w-4/6 ml-40">
                <?php while (have_rows("repeater_section5")) : the_row(); ?>
                    <div class="px-4 mb-8">
                        <?php
                        // Récupérer et afficher l'image 
                        $logo_image = get_sub_field("image_section5");
                        if ($logo_image) :
                        ?>
                            <img src="<?php echo $logo_image; ?>" alt="Logo" class="mx-auto h-12">
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

</div>

<!-- Inclure les scripts JavaScript nécessaires -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script.js"></script>

</body>
</html>
