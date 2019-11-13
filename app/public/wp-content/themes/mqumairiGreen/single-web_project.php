<?php
get_header();
?>

<div id="mainContentPost">

  <div id="imageWebPost"><img src="<?php the_field('project_image')?>" /></div>

  <div id="textPostWeb">


    <?php

    while(have_posts()) {
      the_post();

      ?>

      <div class="projectTitle"><?php the_title(); ?></div>
      <div class="projectDescription"><?php the_content(); ?></div>
      <?php
    }

    ?>


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



</div>

<?php
get_footer();
?>
