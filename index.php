<?php get_header() ?>
<main>
    <?php while (have_posts()):
        the_post() ?>
        <?php the_content() ?>
    <?php endwhile ?>

    <?php

    // Check if it's a category page
    
    if (is_product_category()) {

        // Get current category
    
        $current_category = get_queried_object();

        // Get products count in the current category
    
        $product_count = $current_category->count;

        // Check if the category is empty
    
        if ($product_count == 0) {

            echo "<h2>$current_category->name</h2>";

            // Get and display the category description
            $category_description = category_description($current_category->term_id);
            if ($category_description) {
                echo "<div class='category-description'>{$category_description}</div>";
            }


            echo "<p>Der er endnu ingen produkter i denne kategori.</p>";

        }
    }

    ?>

</main>
<?php get_footer() ?>