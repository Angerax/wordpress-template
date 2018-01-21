<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<p>Les articles et le profil de <?php the_author_posts_link(); ?></p>
<p>Publié le: <?php the_date(); ?></p>
<p>Catégorie(s) : <?php the_category(); ?></p>
<p class="tags"><?php the_tags(); ?></p>
<div id="comments"><?php comments_template(); ?></div>