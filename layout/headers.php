
<div class="head">
    <ul class="top-nav">
        <?php
        $a_prefix = $_SERVER['CONTEXT_PREFIX'];
        if ($a_prefix == '')
            $a_prefix = "/";
        echo "<li><a href='" . $a_prefix  . "pages/login.php'>Login</a></li> | ";
        echo "<li><a href='" . $a_prefix  . "pages/contact_us.php'>Contact Us</a></li> | ";
        echo "<li><a href='" . $a_prefix  . "pages/about_us.php'>About Us</a></li>";
        ?>
    </ul>
</div>
<div class="sub-head">
    <div class="title">
        <?php
            echo "<h1><a class='header_link' href='" . $a_prefix  . "index.php'>Cloud Movers</a></h1>";
        ?>
        <h4>Strategic and Operational Cloud Migration</h4>
    </div>

    <div class="clear"></div>
</div>
<div class="sub-nav">
    <ul>
        <?php
        echo "<li><a href='" . $a_prefix  . "pages/software.php' class='hover-over'>Software</a>
                <div class='sub-wrapper'>
                    <div class='sub-dropdown'>
                        <h4>Planning Services</h4>
                        <ul >
                            <li><a href='" . $a_prefix  . "pages/roadmaps.php'>System Roadmaps</a></li>
                            <li><a href='#'>Requirements Management</a></li>
                            <li><a href='#'>Testing Strategies</a></li>
                            <li><a href='#'>3rd party Evaluations</a></li>
                        </ul>
                        
                     </div>
                </div>
                
             </li>";

        echo "<li><a href='" . $a_prefix  . "pages/cloud.php' class='hover-over'>Platform</a>
                  <div class='sub-wrapper'>
                    <div class='sub-dropdown'>
                        <h4>Cloud</h4>
                        <ul >
                            <li><a href='#'>Mobile IOT</a></li>
                            <li><a href='#'>Workflow</a></li>
                            <li><a href='#'>Migration</a></li>
                            <li><a href='#'>Open Source</a></li>
                        </ul>
                        
                     </div>
                </div>
                </li>";
        echo "<li><a href='" . $a_prefix  . "pages/cloud.php' class='hover-over'>Analytics</a>
                  <div class='sub-wrapper'>
                    <div class='sub-dropdown'>
                        <h4>Data Science</h4>
                        <ul >
                            <li><a href='#'>Business Intelligence</a></li>
                            <li><a href='#'>Machine Learning and Modeling</a></li>
                            <li><a href='#'>Fraud Detection</a></li>
                            <li><a href='#'>Visualization / Dashboards</a></li>
                            <li><a href='#'>Custom Built Integrations</a></li>
                        </ul>
                        
                     </div>
                </div>
                </li>";
        echo "<li><a href='" . $a_prefix . "pages/team.php'>Team</a></li>";

        echo "<li><a href='" . $a_prefix  . "pages/podcasts.php'>Podcasts</a></li>";

        echo "<li><a href='http://robertchumley.github.io'>Blog</a></li>";
        ?>
    </ul>
    <div class="clear"></div>

</div>
<script>
    $(function(){
       $(".hover-over").hover(function(){
           var parent = $(this).parent();
          $(this).parent().find(".sub-wrapper").show().mouseleave(function(){
              $(this).hide();
              parent.removeClass("active");
          });
          $(this).parent().addClass("active");
       });
    });
</script>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rober
 * Date: 3/25/2017
 * Time: 11:46 AM
 */


