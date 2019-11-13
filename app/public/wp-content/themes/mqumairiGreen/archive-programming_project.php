<?php
get_header();
?>

<div id="mainContentArchive">


  <div id="archiveProgTitle">&lt;PROGRAMMING PROJECTS&gt;</div>

  <?php

  $homepageProgrammingProjects = new WP_Query(array(
    'posts_per_page' => 5,
    'post_type' => 'programming_project',
    'paged' => get_query_var('paged', 1)
  ));

  while($homepageProgrammingProjects->have_posts()) {
    $homepageProgrammingProjects->the_post();
    ?>


    <div class="archiveImageProg"><img src="<?php the_field('project_image')?>" /></div>

    <div class="archiveTextProg">
      <div class="archiveTitle"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></div>
      <div class="projectDescription"><?php the_excerpt(); ?></div>



      <div class="archiveProjectShare">

        <a href="<?php the_permalink(); ?>"><div class="archiveReadMoreIcon"></div></a>

        <?php

        if(! (get_field('preview_project') == NULL)) {
          ?>

          <a href="<?php the_field('preview_project');?>" target="_blank"><div class="archiveViewIcon"></div></a>

          <?php
        }


        if (! (get_field('project_git') == NULL)) {

          ?>

          <a href="<?php the_field('project_git');?>" target="_blank"><div class="archiveGitIcon"></div></a>


          <?php
        }
        ?>

      </div>

    </div>




    <?php
  } ?>

  <div class="pagination">

  <div class="pageListProg">
    <?php
    echo paginate_links(array(
      'total' => $homepageProgrammingProjects->max_num_pages
    ));
    ?>
  </div>
</div>

</div>



<?php
get_footer();
?>
