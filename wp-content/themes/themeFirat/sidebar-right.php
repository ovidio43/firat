<div class="bluebox">

    <?php
        $type="test-dates";             
      $args = array(
        'post_type'     => $type,
        'posts_per_page'    => -1
      );
      $myposts = new WP_Query($args);
              
    ?>
      <?php if ( $myposts->have_posts() ) :
          while ( $myposts->have_posts() ) : ?>               
          <?php   $myposts->the_post();  ?>
            <h2><?php the_title();?></h2>
              <?php
              $rows = get_field('details_test_dates');
              if($rows)
              {
                foreach($rows as $row)
                {?>
                  <p><strong><?php echo $row['test_date_fes'];?></strong><br>
                  <?php echo $row['detail_fes'];?></p>    
                <?php }
              }
              ?>
              <?php
              $rows = get_field('adittional_info');
              if($rows)
              { echo '<p>';
                foreach($rows as $row)
                {?>
                  <a href="<?php echo $row['url_fes'];?>" target="_blank"><?php echo $row['title_url_fes'];?></a> <br>
                <?php }
                echo '</p>';
              }
              ?>  
          <?php endwhile; ?>                
      <?php endif;  ?>

  <!--h2>2014 SAT Test Dates</h2>

  <p><strong>January 25, 2014</strong><br>
    SAT &amp; SAT Subject Tests<br>
    Deadline to register: December 27<br>
  Late registration: January 10</p>

  <p><strong>March 8, 2014</strong><br>
    SAT Tests<br>
    Deadline to register: February 7<br>
  Late registration: February 21</p>

  <p><strong>May 3, 2014</strong><br>
    SAT &amp; SAT Subject Tests<br>
    Deadline to register: April 4<br>
  Late registration: April 18</p>

  <p><strong>June 7, 2014</strong><br>
    SAT &amp; SAT Subject Tests<br>
    Deadline to register: May 9<br>
  Late registration: May 23</p>

  <p><a href="http://sat.collegeboard.org/register/sat-us-dates" target="_blank">REGISTER FOR THE SAT!</a></p>
<p>&nbsp;</p>
  <h2>2014 ACT Test dates</h2>

  <p><strong>February 8, 2014</strong><br>
    Deadline to register: January 10<br>
  Late registration: January 24</p>

  <p><strong>April 12, 2014</strong><br>
    Deadline to register: March 7<br>
  Late registration: March 21</p>

  <p><strong>June 14, 2014</strong><br>
    Deadline to register: May 9<br>
  Late registration: May 23</p>

  <p><a href="http://www.actstudent.org/regist/" target="_blank">REGISTER FOR THE ACT!</a></p>
<p>&nbsp;</p>
  <p><strong>OTHER TESTS</strong></p>
  <p>Click on the corresponding test to get more information:</p>
  <p><a href="http://erblearn.org/parents/admission/isee" target="_blank">ISEE<br>
    </a></p><p><a href="http://www.ssat.org/ssat/info/home.html" target="_blank">SSAT<br>
    </a></p><p><a href="http://www.collegeboard.com/student/testing/ap/about.html" target="_blank">AP<br>
    </a></p><p><a href="http://www.collegeboard.com/student/testing/psat/reg.html" target="_blank">PSAT/NMSQT</a><br>
    ---------------------------------<br>
    </p><p><a href="http://www.mba.com/" target="_blank">GMAT<br>
    </a></p><p><a href="http://www.ets.org/gre/" target="_blank">GRE<br>
    </a></p><p><a href="http://www.lsac.org/jd/lsat/test-dates-deadlines.asp" target="_blank">LSAT<br>
    </a></p><p><a href="https://www.aamc.org/students/applying/mcat/" target="_blank">MCAT</a></p-->
  </div>