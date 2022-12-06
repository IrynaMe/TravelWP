<?php get_header()?>
<br>
<?php get_template_part( 'includes/menu' ); ?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
           <?php echo do_shortcode( "[contact-form-7 id='45' title='Contact form 1']" ); ?> 
        </div>
    </div>
</div>

    <br>
<br>
<?php get_footer()?>