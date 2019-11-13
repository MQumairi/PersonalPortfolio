<?php
get_header();
?>

<br />


<div id="mainContent">

  <!-- ABOUT CARD -->
  <div id="aboutCard">

    <div class="cardTitle">
      &lt;ABOUT&gt;
    </div>

    <div class="cardText">
      <p>
        Student at City University of London, pursuing a degree in Computer Science, and on track to graduating in the First-Class with Honours. Currently seeking a summer internship in a Software Engineering role, to further programming knowledge.
      </p>
    </div>

  </div>

  <!-- CODING CARD -->
  <div id="codingCard">

    <div class="cardTitle">
      &lt;CODING SKILLS&gt;
    </div>

    <div class="cardTextColumn">

      <div class="columnTextLeft">
        <p>
          +Java <br />
          +C++ <br />
          +Swift <br />
          +SQL <br />
          +Processing <br / />
        </p>
      </div>

      <div class="columnTextRight">
        <p>
          +HTML <br />
          +CSS <br />
          +JavaScript <br />
          +PHP <br />
        </p>

      </div>

    </div>

  </div>

  <!-- DESIGN CARD -->

  <div id="designCard">

    <div class="cardTitle">
      &lt;DESIGN SKILLS&gt;
    </div>

    <div class="cardText">
      <div class="columnSingle">
        <p>
          +Affinity Designer <br />
          +Adobe Photoshop <br />
          +UML Modeling <br />
          +ERD Modeling <br />
          +Office Suite <br / />
        </p>
      </div>
    </div>

  </div>


  <!-- PROGRAMMING CARD -->

  <div id="programmingProjects">

    <div class="cardTitle">
      &lt;PROGRAMMING PROJECTS&gt;
    </div>

    <?php

    $homepageProgrammingProjects = new WP_Query(array(
      'posts_per_page' => 2,
      'post_type' => 'programming_project'
    ));

    while($homepageProgrammingProjects->have_posts()) {
      $homepageProgrammingProjects->the_post();


      ?>

      <div class="projectPost">
        <div class="projectImage"><img src="<?php the_field('project_image')?>" /></div>

        <div class="projectText">
          <div class="projectTitle"><a href="<?php the_permalink();?>"><?php the_title()?></a></div>
          <div class="projectDescription"><?php the_excerpt(); ?></div>
          <div class="projectShare">
            <a href="<?php the_permalink();?>"><div class="readMore"></div></a>

            <?php

            if(! (get_field('preview_project') == NULL)) {
              ?>

              <a href="<?php the_field('preview_project');?>" target="_blank"><div class="viewIcon"></div></a>

              <?php
            }


            if (! (get_field('project_git') == NULL)) {

              ?>

              <a href="<?php the_field('project_git');?>" target="_blank"><div class="gitIcon"></div></a>


              <?php
            }
            ?>

          </div>
        </div>

      </div>

      <?php

    }

    ?>

    <div class="seeAll">
      <a href="<?php echo site_url('/programming-projects'); ?>">SEE ALL</a>
    </div>


    <!-- <div class="projectPost">
    <div class="projectImage"><img src="https://mqumairi.com/wp-content/uploads/2019/11/budgetBuddies.png" /></div>

    <div class="projectText">
    <div class="projectTitle">BUDGET BUDDIES</div>
    <div class="projectDescription">A template for Budget Buddies, designed during the 48in48 hacakthon in London.</div>
    <div class="projectShare">
    <a href=""><div class="readMore"></div></a>
    <a href=""><div class="viewIcon"></div></a>
    <a href=""><div class="gitIcon"></div></a>
  </div>
</div>

</div> -->


</div>


<!-- WEB CARD -->

<div id="webProjects">

  <div class="cardTitle">
    &lt;WEB PROJECTS&gt;
  </div>

  <?php

  $homepageWebProjects = new WP_Query(array(
    'posts_per_page' => 2,
    'post_type' => 'web_project'
  ));

  while($homepageWebProjects->have_posts()) {
    $homepageWebProjects->the_post();


    ?>

    <div class="projectPost">
      <div class="projectImage"><img src="<?php the_field('project_image')?>" /></div>

      <div class="projectText">
        <div class="projectTitle"><a href="<?php the_permalink();?>"><?php the_title()?></a></div>
        <div class="projectDescription"><?php the_excerpt(); ?></div>
        <div class="projectShare">
          <a href="<?php the_permalink();?>"><div class="readMore"></div></a>

          <?php

          if(! (get_field('preview_project') == NULL)) {
            ?>

            <a href="<?php the_field('preview_project');?>" target="_blank"><div class="viewIcon"></div></a>

            <?php
          }


          if (! (get_field('project_git') == NULL)) {

            ?>

            <a href="<?php the_field('project_git');?>" target="_blank"><div class="gitIcon"></div></a>


            <?php
          }
          ?>

        </div>
      </div>

    </div>

    <?php

  }

  echo paginate_links(array(
  'total' => $homepageWebProjects->max_num_pages
));
  ?>


  <div class="seeAll">
    <a href="<?php echo site_url('/web-projects'); ?>">SEE ALL</a>
  </div>


</div>



<!-- END OF MAIN CONTENT -->
</div>



<?php
get_footer();
?>
