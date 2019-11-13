<?php
get_header();
?>

<div id="mainContentArchive">

  <div id="archiveWebTitle">&lt;WEB PROJECTS&gt;</div>


  <?php

  $homepageWebProjects = new WP_Query(array(
    'posts_per_page' => 2,
    'post_type' => 'web_project',
    'paged' => get_query_var('paged', 1),
  ));

  while($homepageWebProjects->have_posts()) {
    $homepageWebProjects->the_post();
    ?>


    <div class="archiveImage"><img src="<?php the_field('project_image')?>" /></div>

    <div class="archiveTextWeb">
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
  }




?>

<div class="pageList">
  Test
  <?php
  echo paginate_links(array(
    'total' => $homepageWebProjects->max_num_pages
  ));


  ?>
</div>


</div>



<?php
get_footer();
?>
