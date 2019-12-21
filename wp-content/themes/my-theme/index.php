<?php get_header(); ?>

<div class="container">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&display=swap" rel="stylesheet"> 
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
?>
<?php $imgbanner = get_field('section-banner-img'); ?>
  <section class="section-banner" style="background-image : url(<?php echo $imgbanner['url'] ;?>);">
    <p class="section-banner-baseline">
      <?php the_field('section-banner-baseline'); ?>
    </p>
    <h1 class="Titre"> <?php the_field('section-banner-title'); ?> </h1>
    <h1 class="Titre-green"> <?php the_field('section-banner-subtitle'); ?></h1>
    <a class="button" href="<?php the_field('section-banner-button-lien'); ?>"><?php the_field('section-banner-button-text'); ?></a>
  </section>
  
  <section class="section-2">
  <h1 class="Section-titre"><?php the_field('section2-content-title'); ?></h1>
  <p><?php the_field('section2-content-paragraphe'); ?></p>
  </section>

  <section class="section-programme" >
    <?php $imgprogramme = get_field('section-programme-img'); ?>
    <div class="section-programme-img" style="background-image : url(<?php echo $imgprogramme['url'] ;?>);"></div>
    <div class="section-au-programme">
    <h1 class="Section-titre"><?php the_field('section-programme-title'); ?></h1>
      <div class="programme-container">
        <div class="programme-left">
          <div class="programme-subtitle">Les végétaux dans la chaine alimentaire</div>
          <div class="programme-infos">
              <ul class="programme-ul">
                <li class="programme-hour">8:30</li>
                <li class="programme-desc">Introduction par Christophe Fondation</li>
              </ul>
              <ul class="programme-ul">
                <li class="programme-hour">8:30</li>
                <li class="programme-desc">Introduction par Christophe Fondation</li>
              </ul>
              <ul class="programme-ul">
                <li class="programme-hour">8:30</li>
                <li class="programme-desc">Introduction par Christophe Fondation</li>
              </ul>
              <ul class="programme-ul">
                <li class="programme-hour">8:30</li>
                <li class="programme-desc">Introduction par Christophe Fondation</li>
              </ul>
              <ul class="programme-ul">
                <li class="programme-hour">8:30</li>
                <li class="programme-desc">Introduction par Christophe Fondation</li>
              </ul>

          </div>
        </div>
        <div class="programme-right">
          <div class="programme-subtitle">Les activités de la fondation</div>
          <div class="programme-infos">
              <ul class="programme-ul">
                <li class="programme-hour">8:30</li>
                <li class="programme-desc">Introduction par Christophe Fondation</li>
              </ul>
              <ul class="programme-ul">
                <li class="programme-hour">8:30</li>
                <li class="programme-desc">Introduction par Christophe Fondation</li>
              </ul>
              <ul class="programme-ul">
                <li class="programme-hour">8:30</li>
                <li class="programme-desc">Introduction par Christophe Fondation</li>
              </ul>
              <ul class="programme-ul">
                <li class="programme-hour">8:30</li>
                <li class="programme-desc">Introduction par Christophe Fondation</li>
              </ul>

          </div>
        </div>
        
        </div>
        <a class="button" href="<?php the_field('section-programme-button-lien'); ?>"><?php the_field('section-programme-button-text'); ?></a>
      </div>

      <section class="section-orateurs">
        <h1 class="Section-titre"><?php the_field('section-orateurs-title'); ?></h1>
        <p><?php the_field('section-orateurs-paragraphe'); ?></p>
        <div class="orateurs-container">
          <div class="orateurs-ligne1">
            <div class="orateurs">
              <div class="img-cirle-container"><img class="img-cirle" src="http://localhost/Wordpress/wp-content/uploads/2019/12/portrait.jpg"></div>
              <div class="orateur-name">Wim de Vries</div>
              <div class="orateur-subtitle">Le sous titre (1)</div>
              <div class="orateur-button"><a class="button2" href="#"><img src="/assets/img/">Lire la vidéo</a></div>
          
            </div>
            <div class="orateurs">
              <div class="img-cirle-container"><img class="img-cirle" src="http://localhost/Wordpress/wp-content/uploads/2019/12/portrait.jpg"></div>
              <div class="orateur-name">Wim de Vries</div>
              <div class="orateur-subtitle">Le sous titre (1)</div>
              <div class="orateur-button"><a class="button2" href="#"><img src="/assets/img/">Lire la vidéo</a></div>
          
            </div>
            <div class="orateurs">
              <div class="img-cirle-container"><img class="img-cirle" src="http://localhost/Wordpress/wp-content/uploads/2019/12/portrait.jpg"></div>
              <div class="orateur-name">Wim de Vries</div>
              <div class="orateur-subtitle">Le sous titre (1)</div>
              <div class="orateur-button"><a class="button2" href="#"><img src="/assets/img/">Lire la vidéo</a></div>
          
            </div>
            <div class="orateurs">
              <div class="img-cirle-container"><img class="img-cirle" src="http://localhost/Wordpress/wp-content/uploads/2019/12/portrait.jpg"></div>
              <div class="orateur-name">Wim de Vries</div>
              <div class="orateur-subtitle">Le sous titre (1)</div>
              <div class="orateur-button"><a class="button2" href="#"><img src="/assets/img/">Lire la vidéo</a></div>
          
            </div>
          </div>
          <div class="orateurs-ligne2">
            <div class="orateurs">
              <div class="img-cirle-container"><img class="img-cirle" src="http://localhost/Wordpress/wp-content/uploads/2019/12/portrait.jpg"></div>
              <div class="orateur-name">Wim de Vries</div>
              <div class="orateur-subtitle">Le sous titre (1)</div>
              <div class="orateur-button"><a class="button2" href="#"><img src="/assets/img/">Lire la vidéo</a></div>
          
            </div>
            <div class="orateurs">
              <div class="img-cirle-container"><img class="img-cirle" src="http://localhost/Wordpress/wp-content/uploads/2019/12/portrait.jpg"></div>
              <div class="orateur-name">Wim de Vries</div>
              <div class="orateur-subtitle">Le sous titre (1)</div>
              <div class="orateur-button"><a class="button2" href="#"><img src="/assets/img/">Lire la vidéo</a></div>
          
              </div>
            </div>
          </ul>
        </div>

      </section>

      <?php $imginfo = get_field('section-info-img'); ?>
      <section class="infos-partiques" style="background-image : url(<?php echo $imginfo['url'] ;?>);">
        <div class="map"></div>
        <div class="infos-container">
          <div class="infos">
            <ul class="infos-ul">
              <li class="infos-li">
                <div class="infos-icon"><img class="info-icon-img" src="https://benevoles.neogeek.eu/wp-content/uploads/2019/12/picto-map.svg"></div>
                <div class="infos-desc"><a href="#">Square Brussels <br/> Mont des Arts <br/> 1000 Bruxelles <br/> Belgique</a></div>
              </li>
              <hr>
              <li class="infos-li">
                <div class="infos-icon"><img class="info-icon-img" src="https://benevoles.neogeek.eu/wp-content/uploads/2019/12/picto-time.svg"></div>
                <div class="infos-desc"><h2>Le 03.12.2019 <br/> de 8h30 à 12h30</h2></div>
              </li>
              <hr>
              <li class="infos-li">
                <div class="infos-icon"><img class="info-icon-img" src="https://benevoles.neogeek.eu/wp-content/uploads/2019/12/picto-dinner.svg"></div>
                <div class="infos-desc"><h2>Healthy <br/> Walking Dinner</h2></div>
              </li>
            </ul>
          </div>
        </div>
        
      </section>
      <section class="video">
      <h1 class="Section-titre"><?php the_field('section-video-title'); ?></h1>
        <div class="video-top-container">
          <div class="top-video"></div>
          <div class="top-video"></div>
        </div>
        <div class="video-bottom-container">
          <div class="video-left">
          <div class="video-list">
            <div class="bottom-video"></div>
            <div class="bottom-video-desc"></div>
          </div>
          <div class="video-list">
            <div class="bottom-video"></div>
            <div class="bottom-video-desc"></div>
          </div>
          </div>
          <div class="video-right">
          <div class="video-list">
            <div class="bottom-video"></div>
            <div class="bottom-video-desc"></div>
          </div>
          <div class="video-list">
            <div class="bottom-video"></div>
            <div class="bottom-video-desc"></div>
          </div>
          </div>
        </div>


      </section>
      <section class="actu">
        <h1 class="Section-titre"><?php the_field('section-actu-title'); ?></h1>
        <div class="article-caroussel">


  </div>
      </section>

<?php

  }
}
?>



</div>

<?php get_footer(); ?>