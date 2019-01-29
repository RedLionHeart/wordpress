<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package test
 */

get_header();
?>
<!--style="background-image: url(--><?//= get_template_directory_uri() ?><!--/template/images/slider.jpg)"-->
<!--<div class="uk-section uk-section-media uk-background-cover slider" >-->

    <div class="uk-block">
        <div class="uk-text-center">
            <?php if( ! empty( $redux_demo['opt-slides'] ) ) {
                foreach ( $redux_demo['opt-slides'] as $val ){
                    echo '<img src="' . $val['image']. '" alt="' . $val['title'] .'">';
                }

            } ?>
        </div>
    </div>


      <div class="uk-container <?php if($redux_demo['switch-on'] == 0)
          echo 'uk-hidden' ?> ">
        <div class="uk-card uk-card-default uk-card-body uk-width-1-3@m">
          <div class="card-tag"><?= $redux_demo['text-title'] ?></div>
            <div class="uk-card-title">
              <?= $redux_demo['opt-textarea'] ?>

            </div>
            <div class="card-desc"><?= $redux_demo['opt-textarea1']?></div>
          </div>
      </div>
  </div>
  <div class="uk-section uk-section-small articles">
    <div class="uk-container">
      <div class="uk-child-width-1-3@m uk-grid uk-grid-medium uk-grid-match" uk-grid>
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                  <img src="<?= get_template_directory_uri() ?>/template/images/logo.jpg" alt="">
                </div>
                <div class="uk-card-header">
                  <h3 class="uk-card-title"><?= $redux_demo['text-example'];?></h3>
                </div>
                <div class="uk-card-footer comments">
                  <ul class="uk-iconnav">
                    <li><a href="" class="" uk-icon="icon: heart"></a> 608</li>
                    <li><a href="" class="" uk-icon="icon: comment"></a> 124</li>
                  </ul>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="<?= get_template_directory_uri() ?>/template/images/slider.jpg" alt="">
                </div>
                <div class="uk-card-header">
                  <h3 class="uk-card-title"><?= $redux_demo['text-example'];?></h3>
                </div>
                <div class="uk-card-footer comments">
                  <ul class="uk-iconnav">
                    <li><a href="" class="" uk-icon="icon: heart"></a> 608</li>
                    <li><a href="" class="" uk-icon="icon: comment"></a> 124</li>
                  </ul>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                  <img src="<?= get_template_directory_uri() ?>/template/images/.jpg" alt="">
                </div>
                <div class="uk-card-header">
                  <h3 class="uk-card-title"><?= $redux_demo['text-example'];?></h3>
                </div>
                <div class="uk-card-footer comments">
                  <ul class="uk-iconnav">
                    <li><a href="" class="" uk-icon="icon: heart"></a> 608</li>
                    <li><a href="" class="" uk-icon="icon: comment"></a> 124</li>
                  </ul>
                </div>
            </div>
        </div>
      </div>
      <button class="uk-button uk-button-default button-articles uk-width-1-1 uk-margin-medium-top">Все статьи</button>
    </div>
  </div>
<div class="uk-section uk-section-small recept">
  <div class="uk-container">
    <h1 class="uk-heading-line uk-text-center"><span>Рецепты</span></h1>
    <div class="uk-grid uk-grid-small uk-grid-match uk-margin-medium-top" uk-grid>
      <div class="uk-text-center uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-width-1-4@l uk-width-1-4@xl">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src="<?= get_template_directory_uri() ?>/template/images/logo.jpg" alt="">
            <div class="uk-transition-fade uk-overlay-default uk-position-cover"></div>
            <div class="uk-position-center"><?= $redux_demo['text-example-hint'];?></div>
        </div>
      </div>
      <div class="uk-text-center uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-width-1-4@l uk-width-1-4@xl">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src="<?= get_template_directory_uri() ?>/template/images/slider.jpg" alt="">
            <div class="uk-transition-fade uk-overlay-default uk-position-cover"></div>
            <div class="uk-position-center"><?= $redux_demo['text-example-hint'];?></div>
        </div>
      </div>
      <div class="uk-text-center uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-width-1-4@l uk-width-1-4@xl">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src="<?= get_template_directory_uri() ?>/template/images/slider.jpg" alt="">
            <div class="uk-transition-fade uk-overlay-default uk-position-cover"></div>
            <div class="uk-position-center"><?= $redux_demo['text-example-hint'];?></div>
        </div>
      </div>
      <div class="uk-text-center uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-width-1-4@l uk-width-1-4@xl">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src="<?= get_template_directory_uri() ?>/template/images/slider.jpg" alt="">
            <div class="uk-transition-fade uk-overlay-default uk-position-cover"></div>
            <div class="uk-position-center"><?= $redux_demo['text-example-hint'];?></div>
        </div>
      </div>
      <div class="uk-text-center uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-width-1-4@l uk-width-1-4@xl">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src="<?= get_template_directory_uri() ?>/template/images/slider.jpg" alt="">
            <div class="uk-transition-fade uk-overlay-default uk-position-cover"></div>
            <div class="uk-position-center"><?= $redux_demo['text-example-hint'];?></div>
        </div>
      </div>
      <div class="uk-text-center uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-width-1-4@l uk-width-1-4@xl">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src="<?= get_template_directory_uri() ?>/template/images/slider.jpg" alt="">
            <div class="uk-transition-fade uk-overlay-default uk-position-cover"></div>
            <div class="uk-position-center"><?= $redux_demo['text-example-hint'];?></div>
        </div>
      </div>
      <div class="uk-text-center uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-width-1-4@l uk-width-1-4@xl">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src="<?= get_template_directory_uri() ?>/template/images/slider.jpg" alt="">
            <div class="uk-transition-fade uk-overlay-default uk-position-cover"></div>
            <div class="uk-position-center"><?= $redux_demo['text-example-hint'];?></div>
        </div>
      </div>
      <div class="uk-text-center uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-width-1-4@l uk-width-1-4@xl">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src="<?= get_template_directory_uri() ?>/template/images/slider.jpg" alt="">
            <div class="uk-transition-fade uk-overlay-default uk-position-cover"></div>
            <div class="uk-position-center"><?= $redux_demo['text-example-hint'];?></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="uk-section uk-section-small news">
  <div class="uk-container">
    <h1 class="uk-heading-line uk-text-center"><span>Новости</span></h1>
    <div class="uk-child-width-1-4@m uk-grid-match uk-grid-small" uk-grid>
      <div>
          <div class="uk-card uk-card-small uk-card-hover uk-card-body">
              <h3 class="uk-card-title">10:00</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
      </div>
      <div>
          <div class="uk-card uk-card-small uk-card-hover uk-card-body">
              <h3 class="uk-card-title">6 марта</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
      </div>
      <div>
          <div class="uk-card uk-card-small uk-card-hover uk-card-body">
              <h3 class="uk-card-title">5 марта</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
      </div>
      <div>
          <div class="uk-card uk-card-small uk-card-hover uk-card-body">
              <h3 class="uk-card-title">4 марта</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
      </div>
    </div>
  </div>
</div>
<?php

get_footer();
?>