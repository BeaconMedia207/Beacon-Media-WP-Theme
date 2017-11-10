<?php
  /* Template Name: FP Template */

    // LOAD DATA FOR THE LIST OF PROJECTS
    $projects = get_project_list();
    echo "<!--";
    print_r($projects);
    echo "-->";
    
    echo get_header();
?>


<!-- MAIN -->
<main class="home-wrap">
   
    <div class="home-featured" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/example/sample_stock4.jpeg');">
        <div class="home-button feature-button"><a href="#">
            <p>From "Title of Collection"</p>
            <p>John Doe</p>
        </a></div>   
    </div>
    
    <div class="tagline">
        <h1>Innovate<br><span>&amp;</span><br>Collaborate</h1>
    </div>
    
    <div class="home-intro" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/example/sample_stock4.jpeg');">
        <div class="home-intro-text">
            <p class="intro-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam accumsan nulla tellus, vel lacinia neque condimentum ut. Integer malesuada ornare augue, tempor efficitur est consectetur id. Sed egestas, enim ac tempor tempor, neque lorem cursus massa, non tincidunt arcu sapien vel neque.</p>
            <div class="home-button">
                <p><a href="<?php echo site_url(); ?>/about/">Our Mission</a></p>
            </div>
        </div>
    </div>
    
    <div class="home-featured-secondary">
        <div class="latest-works">
            <div class="line"></div>
            <div>
                <h2>Latest Works</h2>
            </div>
            <div class="line"></div>
        </div>
        
        <div class="featured-works">
            
            <?php
                $i = 0;
                foreach($projects as $project) {
                    extract((array) $project);
                    if ($i < 3) {
                        echo '  <div class="home-featured-item"><a href="' . $guid . '">
                                    <img src="' . $featured_image['medium'] . '" alt="Project image">
                                </a></div> ';
                        $i++;
                    }
                }
            ?>
            
        </div>
        
        <div class="home-button">
            <p><a href="<?php echo site_url(); ?>/project/">Browse All</a></p>
        </div>
    </div>
    
</main>


<?php echo get_footer(); ?>
