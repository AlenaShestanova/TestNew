@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <section class="food">
         <div class="container">
                <h1 class="food__title">Рестораны</h1>
                <div class="food__container">
                     <?php
                          $args = [
                          'post_type'      => 'restoran',
                          'post_status'    => 'publish',
                           ];

                           $query = new WP_Query( $args );

                           if ( $query->have_posts() ) {
                               while ( $query->have_posts() ) {
                                   $query->the_post();
                     ?>

                      <div class="food__container_elem">
                           <img src='<?php the_field('img');?>'>
                            <h2><?php the_field('rest_name');?> </h2>
                                 <div class="food__text">
                                      <p> <?php the_terms(get_the_ID(),'kitchen','',' &#149 ','');?></p>
                                 </div>
                       </div>
                      <?php
                         }
                      } else {
                           echo 'Ничего не найдено';
                      }

                      wp_reset_postdata();
                       ?>
               </div>
         </div>
    </section>
    <hr>


  @endwhile
@endsection
