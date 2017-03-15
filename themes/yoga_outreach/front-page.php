<?php
/**
 * The template for displaying all pages.
 *
 * @package Yoga Outreach Theme
 */

get_header(); ?>
<section class="hero-banner">
    <img class="hero-image" src="<?php echo CFS()->get('hero_image'); ?>" alt="hero-image" />
    <div class="herobanner-text">
        <h2>what we do</h2>
        <p>Our mission is to expand access to trauma-informed yoga programs to heal and connect communities</p>
        <button class="aboutus-button"><a href="">about us</a></button>
    </div>
</section>  
<section class="trauma-approach">
    <h2>What is the trauma informed Approach?</h2>
    <p>Creating a safe and healing environment with a no-touch, no-assist approach that inspires and empowers participants to reconnect with their body.</p>
    <div class="accent-square"></div>
</section>
<section class="training-programs">
    <h2>training programs</h2>
    <p>Find out more about our training programs for Yoga teachers, and for:</p>
</section>
<section class="program-list">
    <div class="core-training">
        <h1>yoga outreach core training™</h1>
        <h4>For yoga instructors</h4>
        <p>Get the skills to build trauma-informed classes.</p>
        <div class="background-accent"></div>
    </div>
    <div class="yoga-atwork">
        <h1>using yoga in your work™</h1>
        <h4>For facility staff</h4>
        <p>Skills Training for Support Professionals</p>
        <div class="background-accent"></div>
    </div>
    <div class="yoga-foryouth">
        <h1>yoga tools for youth™</h1>
        <h4>For facility staff</h4>
        <p>Skills for self-care and stress reduction</p>
        <div class="background-accent"></div>
    </div>
</section>
<section class="get-involved">
    <h2>Get Involed!</h2>
</section>

<section class="thankyou">
    <h1>thank you</h1>
    <p>to our sponsors and volunteers - you make our programs possible.</p>
</section>
<?php get_footer(); ?>