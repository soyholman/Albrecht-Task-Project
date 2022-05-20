
<?php get_header(); ?>

<style>

    
</style>
<?php $home = get_field('home');?>
<body>
    <section class="hero-banner owl-carousel owl-theme" >
    <?php if( have_rows('banner') ): ?>
    <?php while( have_rows('banner') ): the_row(); 
        $image=get_sub_field('img');
        ?>
     
        <div class="item">
        <img  src="<?php echo $image['url'];?>" alt="rec-5-2">
            
        </div>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>  
    
  
    </section>
    <section class="solution-industry section-gap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2 class="colr-dark" id="Main-title"><?php echo $home['main_title'];?></h2>
                    </div>
                </div>


                <?php if( have_rows('solution-industry') ): ?>
    <?php while( have_rows('solution-industry') ): the_row(); 
        $image=get_sub_field('img');
        $text=get_sub_field('industry-name');
        ?>
  <div class="col-sm-4">
      
                    <div class="industry-list" >
                    <img src="<?php echo $image['url'];?>" alt="">
                        <div class="industry-link">
                        <a href="javascript:;"><?php echo $text;?></a>
                        </div>
                    </div>
                </div>
                     
     
    <?php endwhile; ?>
   
<?php endif; ?> 
         
              
            
           
            </div>
        </div>
    </section>
    <section class="onda-estamos section-gap">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="section-title">
                        <h2><?php echo $home['onda-estamos-section'];?></h2>
                    </div>
                    <div class="address-location">
                        <p>
                            <strong> <?php echo $home['address-location-title'];?></strong> <br>
                            <?php echo $home['address-location-description'];?>
                            <!-- BR 101, km 29 – Caixa Postal 7171<br>
                            CEP 89239-052 - Pirabeiraba<br>
                            Joinville/SC -->
                        </p>
                        <p>
                        <?php echo $home['address-location-number'];?> <br>
                            <a href="mailto:albrecht@albrecht.com.br">albrecht@albrecht.com.br</a>
                        </p>
                        <p>
                            <strong> Expediente: </strong> <br>
                            Segunda à sexta<br>
                            7h30 - 12h<br>
                            13h - 17h30
                        </p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="map">
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21016.040401442777!2d2.45100533880156!3d48.819965081013905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60d0f4ce33b83%3A0xe6c94d8bdb122f8e!2sJoinville-le-Pont%2C%20France!5e0!3m2!1sen!2sin!4v1650805896274!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="confianca section-gap pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>RELAÇÃO DE CONFIANÇA</h2>
                    </div>
                </div>
                <div class="col-sm-5">

                <?php if( have_rows('home') ): ?>
    <?php while( have_rows('home') ): the_row(); 
        $image=get_sub_field('person_image');
        ?>
        <img src="<?php echo $image;?>" alt="profile">
    <?php endwhile; ?>
    </ul>
<?php endif; ?>



                </div>
                <div class="col-sm-7">
                    <p><?php echo $home['person_description'];?></p>
                    <label><?php echo $home['manager_name'];?></label>
                    <span>Gerente de Producao - 30 anas Albrecht</span>
                </div>
            </div>
        </div>
    </section>
    </body>
    <?php get_footer();?>
   