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


</div>