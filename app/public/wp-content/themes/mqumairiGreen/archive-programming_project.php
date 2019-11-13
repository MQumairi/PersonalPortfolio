<?php
get_header();
?>

<div id="mainContentArchive">


  <div id="archiveProgTitle">&lt;PROGRAMMING PROJECTS&gt;</div>

  <?php

  $homepageProgrammingProjects = new WP_Query(array(
    'posts_per_page' => 2,
    'post_type' => 'programming_project'
  ));

  while($homepageProgrammingProjects->have_posts()) {
    $homepageProgrammingProjects->the_post();
    ?>


    <div class="archiveImageProg"><img src="<?php the_field('project_image')?>" /></div>

    <div class="archiveTextProg">
      <div class="archiveTitle"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></div>
      <div class="projectDescription"><?php the_excerpt(); ?></div>



      <div class="postProjectShare">

        <?php

        if(! (get_field('preview_project') == NULL)) {
          ?>

          <a href="<?php the_field('preview_project');?>" target="_blank"><div class="postViewIcon"></div></a>

          <?php
        }


        if (! (get_field('project_git') == NULL)) {

          ?>

          <a href="<?php the_field('project_git');?>" target="_blank"><div class="postGitIcon"></div></a>


          <?php
        }
        ?>

      </div>

    </div>




    <?php
  } ?>

</div>



<?php
get_footer();
?>
