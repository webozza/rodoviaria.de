<?php get_header() ?>
<div class="post_banner">
    <h3><?php the_title() ?> : Buy Bus Ticket Cheaper</h3>
</div>
<?php
    $post_id = get_the_ID();
    $slug = basename(get_permalink($post_id));
?>
<script>
    let citySlug = "<?= $slug ?>";
</script>
<div class="destination_finder">
<iframe style="z-index:999;overflow:visible" src="https://onibus.bus.com.br/search-widget-bus" class="single-product-bus-search"></iframe>
</div>
<div class="post_container">
<div class="post_title">
    <i class="fa-solid fa-location-dot"></i>
    <h2><?php the_title() ?></h2>
</div>
<div class="post_content">
        <p><strong>Everything you need to know about the <?php the_field('destination') ?> bus station!</strong></p>


        <p>
            Welcome to Rodoviária.de, your complete source of information about bus stations in almost all of Brazil! Here, you'll find comprehensive details on a number of Bus Terminals, including <?php the_field('destination') ?>.
        </p>
        <p>
            With our website, you will have access to essential information, such as contact, infrastructure, restrooms and location of the <?php the_field('destination') ?> bus station. Knowing all this is essential to plan a smooth trip, whether traveling alone or with a partner.
        </p>
        <p>
            Here you will find specific details about the structure of the <?php the_field('destination') ?> bus station, allowing you to prepare for any eventuality during your stay at the terminal. It doesn't matter if your trip is already booked to <?php the_field('destination') ?> or if you need to make a bus connection there, our website has all the important information for you.
        </p>
        <p>
            For families traveling together, our detailed information will help you to perfectly prepare for any needs that may arise during your visit to the <?php the_field('destination') ?> Bus Terminal.
        </p>
        <p> 
            We know that traveling by bus can be an unforgettable experience and that it is often more than just getting to your destination. It is the journey that allows us to contemplate the landscapes of Brazil, appreciate cultural diversity and create valuable memories. 
        </p>
        <p>
            With Rodoviária.de, you will have access to the best information with the minimum of effort. Our platform was designed to make searching for details about bus stations as simple and efficient as possible.
        </p>
        <p>
            Therefore, if you are planning your trip to <?php the_field('destination') ?> or any other destination, count on us to provide reliable and complete information about bus stations throughout Brazil. Travel with peace of mind, knowing that we have everything you need to make your travel experience the best it can be. We are here to help you every step of the way. Bon voyage!
        </p>
        </div>
      </div>
      <div class="load-fuck"></div>
      <div class="faq-container">
        <?php include('faq.php')?>
      </div>
    </div>
</div>

<?php get_footer() ?>