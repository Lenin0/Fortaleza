<?php
	get_header();
?>	

<section class="banner">
   <div class="container">
      <?php //Uninassau
         if( have_rows('uninassau') ):
            while( have_rows('uninassau') ) : the_row();
            $titulo= get_sub_field('titulo');
            $subtitulo= get_sub_field('subtitulo');
      ?>
      <div class="row">
         <div class="col-md-6">
            <h2>
               <?php echo $titulo ?>
            </h2>

            <div class="subtitulo-nassau">
               <?php echo $subtitulo ?>
            </div>
         </div>
            
         
    
         <div class="col-md-6">
          <?php
          $imagem = get_sub_field('imagem');
               if($imagem): ?>
                  <img  src="<?php echo esc_url($imagem['url']); ?>" alt="<?php echo esc_attr($imagem['alt']); ?>" class="img-fluid"/>
               <?php endif; ?>
         </div>
      </div>  


      <?php
        endwhile;
      endif;
      ?>
  </div>
</section>


<section class="novo-predio">
  <div class="container">
   <?php //Novo Prédio
      if( have_rows('novo_predio') ):
         while( have_rows('novo_predio') ) : the_row();      
         $titulo= get_sub_field('titulo');
         $subtitulo= get_sub_field('subtitulo');
    ?>
      
        
         <div class="row">
            <div class="col-md-6">
            <?php 
               $imagem = get_sub_field('imagem');
                  if($imagem): ?>
                     <img class="predio" src="<?php echo esc_url($imagem['url']); ?>" alt="<?php echo esc_attr($imagem['alt']); ?>" class="img-fluid"/>
                  <?php endif; ?>
            </div>
            
            <div class="col-md-6">
               <h2>
                  <?php echo $titulo?>
               </h2>
               <div class="subtitulo-predio">
               <?php echo $subtitulo ?>
               </div>
               
               <img class="simbolo" src="<?php theme_url(); ?>img/simbolos.png" alt="simbolos" width="30">
            
            </div>
         </div>
         
         
          

    <?php
      endwhile;
    endif;
    ?>
</div>
</section>


<section class="icones">
  <div class="container">
  <ul class="list-group list-group-light">
         <?php	//icones
         if( have_rows('icones') ):
            while( have_rows('icones') ) : the_row();
            $texto= get_sub_field('descricao');
         ?>   
               <li class="list-group-item d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center">
                  <?php 
                  $icone = get_sub_field('icone');
                     if($icone): ?>
                        <img src="<?php echo esc_url($icone['url']); ?>" alt="<?php echo esc_attr($icone['alt']); ?>" style= "width: 45px; height: 45px" class="rounded-circle" />    
                     <div class="ms-3">
                     <?php endif; ?>
                     <?php echo $texto ?>
                     
                     </div>
                  </div>
                </li>
            

         <?php
               endwhile;
            endif;
         ?>
         
         </ul>
      </div>
   </div>
</section>


<section class="nossa-historia">
    <div class="container">
      <div class="main-timeline-2">
         
         <?php 
         if( have_rows('conheca_nossa_historia') ):
            while( have_rows('conheca_nossa_historia') ) : the_row();
               $titulo= get_sub_field('titulo');
         ?>   

            <?php echo $titulo ?>
         
         <?php
         if( have_rows('nossa_historia') ):
            while( have_rows('nossa_historia') ) : the_row();
               $titulo= get_sub_field('titulo');
               $texto= get_sub_field('descricao');
               $calendario= get_sub_field('calendario');
               ?>
            
               <?php 
               if(get_row_index() % 2 == 0):?>
               
               <div class="timeline-2 left-2">
                  <div class="card">

                     <?php 
                     $imagem = get_sub_field('imagem');
                     if($imagem): ?>
                  
                        <img src="<?php echo esc_url($imagem['url']); ?>" alt="<?php echo esc_attr($imagem['alt']); ?>" class="card-img-top img-fluid"  
                        alt="Responsive image" >

                     <?php endif; ?>
                   
                     <div class="card-body p-4">
                        <h4 class="fw-bold mb-4"><?php echo $titulo ?></h4>
                        <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i><?php echo $calendario?><p>
                        <p class="mb-0"><?php echo $texto ?></p>
                     
                     </div>
                  </div>
               </div>
               
               <?php else: ?> 
                     
               <div class="timeline-2 right-2">
                  <div class="card">

                     <?php 
                     $imagem = get_sub_field('imagem');
                     if($imagem): ?>
                  
                        <img src="<?php echo esc_url($imagem['url']); ?>" alt="<?php echo esc_attr($imagem['alt']); ?>" class="card-img-top img-fluid" 
                        alt="Responsive image">
                        <?php endif; ?>
                     
                     <div class="card-body p-4">
                        <h4 class="fw-bold mb-4"><?php echo $titulo ?></h4>
                        <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i><?php echo $calendario?><p>
                        <p class="mb-0"><?php echo $texto ?></p>
                     
                     </div>
                  </div>
               </div>
               
               <?php endif; ?>
               
         <?php
            endwhile;
         endif;
         ?>

<?php
      endwhile;
   endif;
?>

      
      </div>
  </div>
</section>


<section class="galeria-video">
   <div class="container">      
      <?php
      if( have_rows('galeria_de_videos') ):
         while( have_rows('galeria_de_videos') ) : the_row();
            $titulo= get_sub_field('titulo');
            $rodape= get_sub_field('rodape');
            
      ?>
            <svg version="1.1" id="Modo_de_isolamento" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	            y="0px" viewBox="0 0 30.8 27.1" style="enable-background:new 0 0 30.8 27.1;" xml:space="preserve" width="20">
          
            <path class="st0" fill="#003e7e" d="M15.3,0l1.3,3.6c1.5,4,4.6,7.2,8.6,8.6l3.6,1.3l-3.6,1.3c-4,1.5-7.2,4.6-8.6,8.6l-1.3,3.6L14,23.5
            c-1.5-4-4.6-7.2-8.6-8.6l-3.6-1.3l3.6-1.3c4-1.5,7.2-4.6,8.6-8.6L15.3,0z"/>
            </svg>
            
            <h2>
               <?php echo $titulo ?>
            </h2>

      <div id="carousel_video" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <?php
            $rowsVideos = get_sub_field('videos');
            if( have_rows('videos') ):
               
               while( have_rows('videos') ) : the_row();
                  $video = get_sub_field('video');
                  $texto = get_sub_field('descricao');
            ?>
            
            <?php if(get_row_index() == '1'): ?> 
               <div class="carousel-item active">
                  <div class="embed-container">
                     <?php echo $video  ?>
                  </div> 						
               </div>
            
            <?php else: ?>
            <div class="carousel-item ">
                  <div class="embed-container">
                     <?php echo $video  ?>
                  </div> 						
               </div>
            <?php endif; ?>
                     
                        
            <?php
               endwhile;
            endif;
            ?>	

      </div>											
      <button class="carousel-control-prev" type="button" data-bs-target="#carousel_video" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
            
      <button class="carousel-control-next" type="button" data-bs-target="#carousel_video" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>

      </div> 
            <p>
               <?php echo $texto ?>
            </p>
            
            <div class="rodape">
               <?php echo $rodape ?>
            </div>

      <?php
         endwhile;
      endif;
      ?>

   </div>
</section>


<?php
	get_footer();
?>



