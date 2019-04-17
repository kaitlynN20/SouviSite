<?php 
/* 

Template Name: Homepage 
@package Souv

*/
get_header();

?>
<div id="primary" class="content-area">
<main id="main" class="site-main">

<?php 
    get_field('hero_headline'); 
    get_field('hero_tagline');
?>

<!-- Hero Section w/ Featured Image -->
<?php if( get_field('featured_image')) : ?>
    
<div id="hero-section-image" style="background-image:url('<?php the_field('featured_image'); ?>');">
        <div id="hero-text">
            <div>
                <p class="headline"> <?php the_field('hero_headline'); ?> </p>
                <p class="tagline"> <?php the_field('hero_tagline'); ?> </p>
            </div>
             <p class="scroll">Scroll for more</p>
        </div>

</div>

<?php endif; ?>

<!-- Hero Section w/ Featured Video -->
<?php if( get_field('featured_video')) : ?>
<div id="hero-section-video">
    <div class="video-container">
    	<?php the_field('oembed'); ?>
    </div>
    <div id="hero-text">
        <p class="headline"> <?php the_field('hero_headline'); ?> </p>
        <p class="tagline"> <?php the_field('hero_tagline'); ?> </p>
    </div>
    <div id="scroll-section">
    <p>Scroll for more</p>
</div>
</div>

<?php endif; ?>

<!-- Rest of Code -->

<?php 
    get_field('section_image');
    get_field('background_image');
    get_field('section_paragraph');
    get_field('button_link');
    get_field('button_label');
?>

<div id="feature-section-container" style="background-image:url('<?php the_field('background_image')?>');">
    <div class="music-bubble-container one">
        <div>
            <img class="one" src="http://localhost:8888/Souvinear/wp-content/uploads/2019/02/pinned-song_one.png">
        </div>
        <div>
            <img class="two" src="http://localhost:8888/Souvinear/wp-content/uploads/2019/02/pinned-song_two.png">
        </div>
        <div>
            <img class="three" src="http://localhost:8888/Souvinear/wp-content/uploads/2019/02/pinned-song_one.png">
        </div>
    </div>

    <div class="featured-image-section">
        <img src="<?php the_field('section_image'); ?>">
    </div>
    
    <div class="text-section-container">
        <p class="section-paragraph"><?php the_field('section_paragraph'); ?></p>
        <a href="<?php the_field('button_link'); ?>"><button class="section-button"> <?php the_field('button_label'); ?> </button></a>
    </div>
    <div class="music-bubble-container two">
        <div>
            <img class="one" src="http://localhost:8888/Souvinear/wp-content/uploads/2019/02/pinned-song_three.png">
        </div>
        <div>
            <img class="two" src="http://localhost:8888/Souvinear/wp-content/uploads/2019/02/pinned-song_four.png">
        </div>
        <div>
            <img class="three" src="http://localhost:8888/Souvinear/wp-content/uploads/2019/02/pinned-song_three.png">
        </div>
    </div>
</div>

<?php 
    get_field('background_image_team');
    get_field('featured_image_team');
    get_field('team_member_name');
    get_field('team_member_role');
    get_field('button_link_team');
    get_field('button_label_team');
    get_field('mission_statement_home');
?>
    
<div id="team-section-container" style="background-image:url('<?php the_field('background_image_team'); ?>');">
    <div class="team-content-container">
        <p class="mission-statment"> <?php the_field('mission_statement_home'); ?> </p>
        <div class="featured-member">
            <div class="button-team">
                <a href="<?php the_field('button_link_team'); ?>"><button><?php the_field('button_label_team'); ?></button></a>
            </div>
            <img src="<?php the_field('featured_image_team'); ?>">
            <p class="team-mem name"> <?php the_field('team_member_name'); ?> </p>
            <p class="team-mem role"> <?php the_field('team_member_role'); ?> </p>
    
        </div>

    </div>

</div>

</main>
</div>

<!--footer banner-->
<?php

get_footer();

?>
