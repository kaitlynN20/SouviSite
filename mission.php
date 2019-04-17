<?php 
/* 

Template Name: Mission
@package Souv

*/
get_header();

?>
<div id="primary" class="content-area">
<main id="main" class="site-main">
    
<?php 
    get_field('mission_statement'); 
    get_field('background_image_mission');
?>

<div class="mission-statement-container" style>
    <p class="mission-statement"><?php the_field('mission_statement') ?></p>
    <p class="author"> - Kaitlyn</p>
    <img class="wavylines" src='<?php the_field('background_image_mission')?>'>
</div>

<?php
    get_field('team_section_title');
    get_field('team_section_paragraph');
    get_field('team_section_background_image');
?>


<div class="team-container">
    <p class="section-title"> <?php the_field('team_section_title'); ?></p>
    <p class="section-paragraph"> <?php the_field('team_section_paragraph'); ?></p>
    
    <?php
        get_field('member_name');
        get_field('member_role');
        get_field('member_photo');
        get_field('pinned_song_album');
        get_field('pinned_song_title');
        get_field('pinned_song_artist');

    ?>
   
    <div class="team-member-container">
        <div class="name-container">
            <p class="member-name"> <?php the_field('member_name'); ?></p>
            <p class="member-role"> <?php the_field('member_role'); ?></p>
        </div>
       <img class="team-photo" src="<?php the_field('member_photo'); ?>">
       <div class="pinned-song">
            <img class="album" src="<?php the_field('pinned_song_album'); ?>">
            <p class="title"> <?php the_field('pinned_song_title'); ?> </p>
            <p class="artist"> <?php the_field('pinned_song_artist'); ?> </p>
        </div>
        
    </div>
    
    <?php
        get_field('member_name_two');
        get_field('member_role_two');
        get_field('member_photo_two');
        get_field('pinned_song_album_two');
        get_field('pinned_song_title_two');
        get_field('pinned_song_artist_two');

    ?>
    
    <div class="team-member-container">
        <div class="name-container">
            <p class="member-name"> <?php the_field('member_name_two'); ?></p>
            <p class="member-role"> <?php the_field('member_role_two'); ?></p>
        </div>
       <img class="team-photo" src="<?php the_field('member_photo_two'); ?>">
       <div class="pinned-song">
            <img class="album" src="<?php the_field('pinned_song_album_two'); ?>">
            <p class="title"> <?php the_field('pinned_song_title_two'); ?> </p>
            <p class="artist"> <?php the_field('pinned_song_artist_two'); ?> </p>
        </div>
        
    </div>
    
    <?php
        get_field('member_name_three');
        get_field('member_role_three');
        get_field('member_photo_three');
        get_field('pinned_song_album_three');
        get_field('pinned_song_title_three');
        get_field('pinned_song_artist_three');

    ?>
    
    <div class="team-member-container">
        <div class="name-container">
            <p class="member-name"> <?php the_field('member_name_three'); ?></p>
            <p class="member-role"> <?php the_field('member_role_three'); ?></p>
        </div>
       <img class="team-photo" src="<?php the_field('member_photo_three'); ?>">
       <div class="pinned-song">
            <img class="album" src="<?php the_field('pinned_song_album_three'); ?>">
            <p class="title"> <?php the_field('pinned_song_title_three'); ?> </p>
            <p class="artist"> <?php the_field('pinned_song_artist_three'); ?> </p>
        </div>
        
    </div>
    
    <?php
        get_field('member_name_four');
        get_field('member_role_four');
        get_field('member_photo_four');
        get_field('pinned_song_album_four');
        get_field('pinned_song_title_four');
        get_field('pinned_song_artist_four');

    ?>
    
    <div class="team-member-container">
        <div class="name-container">
            <p class="member-name"> <?php the_field('member_name_four'); ?></p>
            <p class="member-role"> <?php the_field('member_role_four'); ?></p>
        </div>
       <img class="team-photo" src="<?php the_field('member_photo_four'); ?>">
       <div class="pinned-song">
            <img class="album" src="<?php the_field('pinned_song_album_four'); ?>">
            <p class="title"> <?php the_field('pinned_song_title_four'); ?> </p>
            <p class="artist"> <?php the_field('pinned_song_artist_four'); ?> </p>
        </div>
        
    </div>
    
     <?php
        get_field('member_name_five');
        get_field('member_role_five');
        get_field('member_photo_five');
        get_field('pinned_song_album_five');
        get_field('pinned_song_title_five');
        get_field('pinned_song_artist_five');

    ?>
    
    <div class="team-member-container">
        <div class="name-container">
            <p class="member-name"> <?php the_field('member_name_five'); ?></p>
            <p class="member-role"> <?php the_field('member_role_five'); ?></p>
        </div>
       <img class="team-photo" src="<?php the_field('member_photo_five'); ?>">
       <div class="pinned-song">
            <img class="album" src="<?php the_field('pinned_song_album_five'); ?>">
            <p class="title"> <?php the_field('pinned_song_title_five'); ?> </p>
            <p class="artist"> <?php the_field('pinned_song_artist_five'); ?> </p>
        </div>
        
    </div>
    
    <?php
        get_field('member_name_six');
        get_field('member_role_six');
        get_field('member_photo_six');
        get_field('pinned_song_album_six');
        get_field('pinned_song_title_six');
        get_field('pinned_song_artist_six');

    ?>
    
    <div class="team-member-container">
        <div class="name-container">
            <p class="member-name"> <?php the_field('member_name_six'); ?></p>
            <p class="member-role"> <?php the_field('member_role_six'); ?></p>
        </div>
       <img class="team-photo" src="<?php the_field('member_photo_six'); ?>">
       <div class="pinned-song">
            <img class="album" src="<?php the_field('pinned_song_album_six'); ?>">
            <p class="title"> <?php the_field('pinned_song_title_six'); ?> </p>
            <p class="artist"> <?php the_field('pinned_song_artist_six'); ?> </p>
        </div>
        
    </div>
    
    <?php
        get_field('member_name_seven');
        get_field('member_role_seven');
        get_field('member_photo_seven');
        get_field('pinned_song_album_seven');
        get_field('pinned_song_title_seven');
        get_field('pinned_song_artist_seven');

    ?>
    
    <div class="team-member-container">
        <div class="name-container">
            <p class="member-name"> <?php the_field('member_name_seven'); ?></p>
            <p class="member-role"> <?php the_field('member_role_seven'); ?></p>
        </div>
       <img class="team-photo" src="<?php the_field('member_photo_seven'); ?>">
       <div class="pinned-song">
            <img class="album" src="<?php the_field('pinned_song_album_seven'); ?>">
            <p class="title"> <?php the_field('pinned_song_title_seven'); ?> </p>
            <p class="artist"> <?php the_field('pinned_song_artist_seven'); ?> </p>
        </div>
        
    </div>
    
    <?php
        get_field('member_name_eight');
        get_field('member_role_eight');
        get_field('member_photo_eight');
        get_field('pinned_song_album_eight');
        get_field('pinned_song_title_eight');
        get_field('pinned_song_artist_eight');

    ?>
    
    <div class="team-member-container">
        <div class="name-container">
            <p class="member-name"> <?php the_field('member_name_eight'); ?></p>
            <p class="member-role"> <?php the_field('member_role_eight'); ?></p>
        </div>
       <img class="team-photo" src="<?php the_field('member_photo_eight'); ?>">
       <div class="pinned-song">
            <img class="album" src="<?php the_field('pinned_song_album_eight'); ?>">
            <p class="title"> <?php the_field('pinned_song_title_eight'); ?> </p>
            <p class="artist"> <?php the_field('pinned_song_artist_eight'); ?> </p>
        </div>
        
    </div>
    
</div>

<?php
    get_field('award_section_title');
    get_field('award_photo_one');
    get_field('award_title_one');
    get_field('award_photo_two');
    get_field('award_title_two');
?>
    
<div class="awards-section-container">
    <div class="header-section">
        <img class="hotspot-awards" src="  ">
        <p class="section-title"> <?php the_field('award_section_title'); ?></p>
        <img class="hands" src="  ">
    </div>
    <div class="award-container">
        <img class="award-img" src="<?php the_field('award_photo_one'); ?>">
        <p class="award-title"> <?php the_field('award_title_one'); ?> </p>
    </div>
    <div class="award-container">
        <img class="award-img" src="<?php the_field('award_photo_two'); ?>">
        <p class="award-title"> <?php the_field('award_title_two'); ?> </p>
    </div>
</div>
    

<?php
    get_field('mission_section_title');
    get_field('mission_section_paragraph');
    get_field('first_value');
    get_field('first_value_paragraph');
    get_field('second_value');
    get_field('second_value_paragraph');
    get_field('third_value');
    get_field('third_value_paragraph');
    get_field('fourth_value');
    get_field('fourth_value_paragraph');
?>
    
<div class="full-mission-statement">
    <p> <?php the_field('mission_section_title'); ?></p>
    <p> <?php the_field('mission_section_paragraph'); ?></p>
    
    <div class="value-container">
        <p> 1. <?php the_field('first_value'); ?> </p>
        <p> <?php the_field('first_value_paragraph'); ?> </p>
    </div>
</div>
    