<?php get_header()?>
<div class="container">

<?php get_template_part( 'includes/menu' ); ?>
<?php get_template_part( 'includes/banner' ); ?>
<?php get_template_part( 'includes/social' ); ?>
<!-- @if (Session::has('status'))
    <div class="alert alert-primary" role="alert">
        <h3> {{ Session::get('status') }}</h3>

        {{ Session::put('status', null) }}
    </div>
@endif -->

    <!-- ultime notizie-paesi -->
    <div class="container my-5">
        <div class="row my-4">
                <div class="col-md-12 text-center">
                    <h5>Ultime notizie</h5>
                </div>
        </div>
   
    </div>
    <div class="container">

        <div class="row">
       
            <!-- start query -->
 <!-- inizio loop: WP_Query -->
<?php
// La Query
$the_query = new WP_Query( 'category_name=viaggi' );

// Il Loop
while ($the_query->have_posts()) : $the_query->the_post(); 
?>
            <div class="col-md-6 d-flex justify-content-center" >
                <div class="col-md-4">
                    <a href="/single"><p><?php 
                    if ( has_post_thumbnail() ) { 
                        the_post_thumbnail('thumbnail');
                    } ?> </p></a>
                </div>
                <div class="col-md-8">
                    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Link permanente a <?php the_title_attribute(); ?>" style="color:black;"><?php the_title(); ?></a></h3>
                    <div class="entry ">
                        <?php  the_excerpt();?>
                        <?php echo get_post_meta(get_the_id(), 'viaggi', true) ?>
                    </div>
                </div>
            </div>
 <?php endwhile;

// Ripristina Query & Post Data originali
wp_reset_query();
wp_reset_postdata();
?>

            
        </div>
    </div>



    <!--         <div class="col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <a href="#">
                        <img class="img-thumbnail fotos" src="<?php echo get_theme_file_uri('img/page/parigi.jpg')?>" alt="paris" >
                        </a>
                    </div>
             
    
                    <div class="col-md-8 col-sm-12">
                        <h3>Parigi</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptatem natus 
                                possimus repellendus magnam, minus voluptate voluptatibus, molestiae perspiciatis ab, 
                                quo cupiditate porro fuga dolorem error nobis aliquid placeat! Harum.</p>
    
                    </div>
                </div>

            </div>


        </div>

    

 
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <a href="#">
                    <img class="img-thumbnail float-start fotos me-4 mb-4" src="<?php echo get_theme_file_uri('img/page/america.jpg')?>" alt="america" >
                </a>
             
                <h3>America</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae mollitia tempore doloribus aliquam delectus neque libero repellat nostrum nemo. 
                          Quia architecto repudiandae voluptatum saepe maiores nam ab distinctio et vel.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Neque quasi temporibus natus doloribus ipsam enim quas aperiam eos vel totam!</p>
            </div>

            <div class="col-md-6 col-sm-12">
                <a href="#">
                    <img class="img-thumbnail float-start fotos me-4 mb-4" src="<?php echo get_theme_file_uri('img/page/bretagna2.jpg')?>" alt="bretagna" >
                </a>
             
                <h3>Bretagna</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae mollitia tempore doloribus aliquam delectus neque libero repellat nostrum nemo. 
                          Quia architecto repudiandae voluptatum saepe maiores nam ab distinctio et vel.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Neque quasi temporibus natus doloribus ipsam enim quas aperiam eos vel totam!</p>
            </div>  
      
          </div>
 -->
     
    <!-- vedi anche -->

    <div class="container my-5">
        <div class="row">
            <h4 class="text-center">Vedi anche</h4>
        </div>
        <div class="row my-4">
            <div class="col-md-6 col-sm-9 m-auto">
                 <ul>
                    <a class="mylist" href="#">
                        <li class="mylist">
                            <h5>Viaggio in America</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Id voluptates provident inventore corrupti, a impedit.</p>
                        </li>
                    </a>
                    <a class="mylist" href="#">
                        <li class="mylist">
                            <h5>Bella l'Itala</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Id voluptates provident inventore corrupti, a impedit.</p>
                        </li>
                    </a>

                    <a class="mylist" href="#">
                        <li class="mylist">
                            <h5>Weekend in montagna</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Id voluptates provident inventore corrupti, a impedit.</p>
                        </li>
                    </a>

                    <a class="mylist" href="#">
                        <li class="mylist">
                            <h5>Venezia</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Id voluptates provident inventore corrupti, a impedit.</p>
                        </li>
                    </a>

                    <a class="mylist" href="#">
                        <li class="mylist">
                            <h5>Asolo</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Id voluptates provident inventore corrupti, a impedit.</p>
                        </li>
                    </a>

                    <a class="mylist" href="#">
                        <li class="mylist">
                            <h5>In Sicilia</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Id voluptates provident inventore corrupti, a impedit.</p>
                        </li>
                    </a>
                    

                </ul>
            </div>
           
        </div>


    </div>
<?php get_template_part( 'includes/social' ); ?>
<?php get_footer()?>





<script>
function showPassword() {
var x = document.getElementById("password");
if (x.type === "password") {
    x.type = "text";
} else {
    x.type = "password";
}
}
</script>