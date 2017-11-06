<?php
    /**
     * This is the template for displaying a single artist.
     */
 
    // LOAD DATA FOR SELECTED ARTIST
    $artist = get_artist($post);
    echo "<!--";
    print_r($artist);
    echo "-->";
    

    extract( $artist -> additional_fields);

    // RENDER THEME HEADER
    echo get_header();

 ?>


 <!-- MAIN -->
 <main>
	<div id="inner-page" class="single-artist-main">
           
            <div class="single-artist-head">
                <h2><span class="artist-first-name"><?php echo $first_name; ?></span> <?php echo $last_name; ?></h2>
                <p><?php echo $preferred_medium; ?></p>
                <p><?php echo $location; ?></p>
            </div>
            
            
            
            <div class="single-artist-sidebar">
                
                <div class="single-artist-headshot">
                    <img src="<?php echo $additional_picture['sizes']['medium']; ?>">
                </div>
                <h4>Browse Artist Collections</h4>
                <ul class="browse-artist-projects">
                           
                    <?php
                        foreach($artist -> projects as $project) {
                            echo '<li>
                                <a href="' . $project -> guid . '">' . $project -> post_title . '</a>
                                </li>';
                        } 
                    ?>
                </ul>
                
                <?php
                    if($website){
                        echo    '<h4>Connect</h4>
                                <div class="artist-website">
                                    <a href="' . $website . '" target="_blank">' . $website . '</a>
                                </div>';
                    }
                ?>
                
            </div>
            
            
            <div class="single-artist-more"> 
                
                <div class="artist-bio">
                    <h3>Bio</h3>
                    <div><?php echo $artist -> content_filtered; ?></div>
                </div>
                <div class="artist-interview">
                 
                    <?php 
                        if($interview){
                            echo '<h3>Q&amp;A</h3>
                                    <div>' . $interview . '</div>';
                        }
                    ?>

                </div>
            </div>
            
            <div class="browse-options">
                <div class="back-button">
                    <a href="<?php echo site_url(); ?>/artist/">&larr; Back to all artists</a>
                </div>
            </div>

        <!-- END inner page - SINGLE ARTIST MAIN -->
        </div>
 </main>


 <?php echo get_footer(); ?>
