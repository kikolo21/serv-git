<?php

namespace ongameuk\php\Views;

use ongameuk\php\Libs\functions;
use ongameuk\php\Config\config;
use ongameuk\php\Controllers\ongameuk;
use ongameuk\php\Models\api;

class main
{

  public static $msgsk = '?';
  public static $top_bonuses_count = '';
  
  public static function start_settings_main() {
   
    main::$msgsk = md5("sec_hash-LGMSD#QEWSDF".date("mY"));
    functions::set_cookie('my_msgsk',md5(main::$msgsk));
  }

  public static function get_top_bonuses_count() {
    return main::$top_bonuses_count;
  }

}

main::start_settings_main();

// ПОЛУЧАЕТ ДЛЯ ВСЕХ БОНУСОВ СПИСОК РЕЙТИНГОВ ДЛЯ ОТОБРАЖЕНИЯ НА САЙТЕ
api::get_config_ratings();

$r_uri = functions::get_request_uri();
$this_page_url = config::https_host().$r_uri;

//------------------------------------------------------
$connect_section_pros_cons = false; // не подключать секцию с Pro's & Cons
$connect_section_tags = false;      // не подключать секцию с тегами (details, popular slots, review)
$connect_section_top_sites = false; // не подключать секцию с топ слотами (1-4 штуки)
if (mb_substr_count(config::https_host(),'ongameco')>0
 or mb_substr_count(config::https_host(),'ongameind')>0) 
{
    $connect_section_tags = true;
    $connect_section_top_sites = true;
}
else
if ((mb_substr_count(config::https_host(),'ongameuk')>0 
    and (api::$read_review_bonus_name=='grosvenor'
      or api::$read_review_bonus_name=='bet365'))
    or mb_substr_count(config::https_host(),'ongameco')>0
    or mb_substr_count(config::https_host(),'ongameind')>0)
    $connect_section_pros_cons = true;
//------------------------------------------------------


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    
    <title>Best Online Casinos UK ▷ Top Online Casino Sites 2021</title>
    <meta name="description" content="Introducing the Top Casino Sites in the UK. These selection of the best uk online casino will help you make the right choice in terms of playing and online casino.">
    <meta name="author" content="ongameuk">
    <meta name="color-scheme" content="light dark">

    <link rel="canonical" href="<? print $this_page_url; ?>">

    <? if (!config::localversion()) { // only online ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5QD5P4V');</script>

    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KRK3847');</script>
    <!-- End Google Tag Manager -->
    <? } ?>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fontse.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<? print config::https_host(); ?>/css/read_review/style.css">
    <link rel="stylesheet" href="<? print config::https_host(); ?>/css/style_ui.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<? print config::https_host(); ?>/img/favicon/favicon.ico">
    
  </head>
  <body <? if (!config::localversion()) print 'class="cls_unsel"'; ?>>
    <? if (!config::localversion()) { // only online ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5QD5P4V"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KRK3847"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <? } ?>

    <header class="header">
        <div class="container">
            <div class="logo">
                <img class="lazy" data-src="<? print config::https_host(); ?>/img/main-screen/ongameie-logo.svg" />
            </div>
            <div class="header_menu">
                <a href="<? print config::https_host(); ?>" class="header_menu_link" id="id_lnk_top_casino">Home</a>
                <? if ($connect_section_top_sites) { ?>
                <a href="<? print $this_page_url; ?>#top-casino" class="header_menu_link" id="id_lnk_top_casino">Casino</a>
                <? } ?>
                <a href="<? print config::https_host(); ?>#slots" class="header_menu_link" id="id_lnk_slots">Slots</a>
                <a href="<? print $this_page_url; ?>#about_us" class="header_menu_link" id="id_lnk_about_us">About</a>
                <a href="<? print config::https_host(); ?>#contact" class="header_menu_link" id="id_lnk_contact">Contact</a>
                <img class="header_menu_img lazy" data-src="<? print config::https_host(); ?>/img/main-screen/right.svg" />
            </div>
            <button class="toggle-button">menu</button>
        </div>
    </header>
    <div class="wrapper">
    <div class="container">
            <section class="main-screen" id="home">
                <div class="main-screen__wrapper">
                    <? print api::get_read_review_bonus_all_info_boxes('first'); ?>
                    <div class="main-screen__right">
                        <img class="main-screen__img lazy page_review" data-src="<? print config::https_host(); ?>/img/<? print api::get_read_review_bonus_logo(); ?>" />
                    </div>
                </div>
            </section>
            <section class="card-section" id="casino">
                <div class="card" bname="<? print api::$read_review_bonus_name; ?>">
                    <div class="card-logo">
                        <img class="lazy" data-src="<? print config::https_host(); ?>/img/<? print api::get_read_review_bonus_logo(); ?>" alt="" />
                    </div>
                    <div class="card-text">
                        <div class="card-text_bold"><? print api::get_read_review_bonus_info(); ?></div>
                    </div>
                    <div class="card-ratet">
                        <div class="card-rate-number">
                            <svg viewBox="0 0 36 36">

                                <path class="score_vector" stroke-dasharray="99, 100" stroke-dashoffset="4" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            </svg>
                            <span class="score_number"><? print api::get_read_review_bonus_rating(); ?></span>
                        </div>
                        <div class="card-stars">
                            <div class="text-blue">Please vote!</div>
                            <ul class="list-inline rating-list" bname="<? print api::$read_review_bonus_name; ?>" data-rate="4" data-hover-rate="4">
                                <li class="fa-star">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 6.87326L12.0373 5.54865L9 0L5.96268 5.55356L0 6.87326L4.08243 11.6271L3.43857 18L9 15.3851L14.5614 18L13.9176 11.6271L18 6.87326Z" fill="currentColor" />
                                    </svg>
                                </li>
                                <li class="fa-star">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 6.87326L12.0373 5.54865L9 0L5.96268 5.55356L0 6.87326L4.08243 11.6271L3.43857 18L9 15.3851L14.5614 18L13.9176 11.6271L18 6.87326Z" fill="currentColor" />
                                    </svg>
                                </li>
                                <li class="fa-star">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 6.87326L12.0373 5.54865L9 0L5.96268 5.55356L0 6.87326L4.08243 11.6271L3.43857 18L9 15.3851L14.5614 18L13.9176 11.6271L18 6.87326Z" fill="currentColor" />
                                    </svg>
                                </li>
                                <li class="fa-star">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 6.87326L12.0373 5.54865L9 0L5.96268 5.55356L0 6.87326L4.08243 11.6271L3.43857 18L9 15.3851L14.5614 18L13.9176 11.6271L18 6.87326Z" fill="currentColor" />
                                    </svg>
                                </li>
                                <li class="fa-star">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 6.87326L12.0373 5.54865L9 0L5.96268 5.55356L0 6.87326L4.08243 11.6271L3.43857 18L9 15.3851L14.5614 18L13.9176 11.6271L18 6.87326Z" fill="currentColor" />
                                    </svg>
                                </li>
                            </ul>
                            <div><b class="ratings" bname="<? print api::$read_review_bonus_name; ?>"></b></div>
                        </div>

                    </div>
                    <div class="card-icons">
                        <div class="card-icon">
                            <div class="card-icon__img">
                                <img src="<? print config::https_host(); ?>/img/icons/secure.svg" />
                            </div>
                            <div class="card-icon__title">Secure & Trusted</div>
                        </div>
                        <div class="card-icon">
                            <div class="card-icon__img">
                                <img src="<? print config::https_host(); ?>/img/icons/withdrawals.svg" />
                            </div>
                            <div class="card-icon__title">Fast Withdrawals</div>
                        </div>
                    </div>
                    <a class="card-bonus" id="<? print api::get_read_review_bonus_id(); ?>">GET BONUS</a>
                </div>
            </section>
            <div class="sections-divider"></div>

            <? if ($connect_section_tags) { ?>

            <section class="tags">
                <div class="tags-wrapper">
                    <a href="#details" class="tags-item yak">Details</a>
                    <a href="#popular" class="tags-item yak">Popular slots</a>
                    <a href="#rewiev" class="tags-item yak">Rewiev</a>
                </div>
                <div class="details" id="details">
                    <h2 class="h2">Details</h2>
                    <div class="details-table">
                        <div class="details-table__row">
                            <div class="details-table__col">
                                <div class="details-table__title">Launched</div>
                                <div class="details-table__desc">2012-08-20</div>
                            </div>
                            <div class="details-table__col">
                                <div class="details-table__title">Available in these states</div>
                                <div class="details-table__desc">
                                    <span>New Jersey</span>
                                    <span>Pennsylvania</span>
                                </div>
                            </div>
                        </div>
                        <div class="details-table__row">
                            <div class="details-table__col">
                                <div class="details-table__title">Licenses</div>
                                <div class="details-table__desc">DraftKings is licensed and regulated by the New Jersey
                                    Division of Gaming Enforcement as an Internet gaming operator in accordance with the
                                    Casino Control Act N.J.S.A. 5:12-1 and its implementing regulations.
                                </div>
                            </div>
                            <div class="details-table__col">
                                <div class="details-table__title">Payment options</div>
                                <div class="details-table__desc">
                                    <span><img src="<? print config::https_host(); ?>/img/icons/mastercard.png" />MasterCard</span>
                                    <span><img src="<? print config::https_host(); ?>/img/icons/visa.png" />Visa</span>
                                </div>
                            </div>
                        </div>
                        <div class="details-table__row">
                            <div class="details-table__col">
                                <div class="details-table__title">Customer Service</div>
                                <div class="details-table__desc">Email support, Live chat support</div>
                            </div>
                            <div class="details-table__col">
                                <div class="details-table__title">Providers</div>
                                <div class="details-table__desc">
                                    <span>Big Time Gaming</span>
                                    <span>IGT</span>
                                    <span>NetEnt</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <? }
            if ($connect_section_top_sites) { ?>
            <section class="top-sites" id="popular">
                <h2 class="h2">MOST POPULAR SLOTS AT DRAFTKINGS</h2>
                <div class="top-card__overflow">
                    <div class="top-card__container">
                        <div class="top-card">
                            <div class="top-card__img">
                                <img class="lazy" data-src="<? print config::https_host(); ?>/img/slots/1.png" />
                            </div>
                            <div class="top-card__content">
                                <div class="top-card__title">
                                    <span>93</span>
                                    <span>Rating</span>
                                </div>
                                <a href="">PLAY<img src="<? print config::https_host(); ?>/img/icons/arrow-right-link.svg" /></a>
                            </div>
                        </div>
                        <div class="top-card">
                            <div class="top-card__img"><img class="lazy" data-src="<? print config::https_host(); ?>/img/slots/2.png" />
                            </div>
                            <div class="top-card__content">
                                <div class="top-card__title">
                                    <span>93</span>
                                    <span>Rating</span>
                                </div>
                                <a href="">PLAY<img src="<? print config::https_host(); ?>/img/icons/arrow-right-link.svg" /></a>
                            </div>
                        </div>
                        <div class="top-card">
                            <div class="top-card__img"><img class="lazy" data-src="<? print config::https_host(); ?>/img/slots/3.png" />
                            </div>
                            <div class="top-card__content">
                                <div class="top-card__title">
                                    <span>93</span>
                                    <span>Rating</span>
                                </div>
                                <a href="">PLAY<img src="<? print config::https_host(); ?>/img/icons/arrow-right-link.svg" /></a>
                            </div>
                        </div>
                        <div class="top-card">
                            <div class="top-card__img"><img class="lazy" data-src="<? print config::https_host(); ?>/img/slots/4.png" />
                            </div>
                            <div class="top-card__content">
                                <div class="top-card__title">
                                    <span>93</span>
                                    <span>Rating</span>
                                </div>
                                <a href="">PLAY<img src="<? print config::https_host(); ?>/img/icons/arrow-right-link.svg" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <? } ?>
            <section class="text" id="id_about_us">
                <? print api::get_read_review_bonus_all_info_boxes('two'); ?>
                <div class="text_content">
                    <? print api::get_read_review_bonus_all_info_boxes('all'); ?>
                    <div class="card card_small" bname="<? print api::$read_review_bonus_name; ?>">
                        <div class="card-logo">
                            <img src="<? print config::https_host(); ?>/img/<? print api::get_read_review_bonus_logo(); ?>" />
                        </div>
                        <div class="card-ratet">
                            <div class="card-num"><? print api::get_read_review_bonus_rating(); ?></div>
                            <div class="card-stars">
                                <ul class="list-inline rating-list" bname="<? print api::$read_review_bonus_name; ?>" data-rate="4" data-hover-rate="4">
                                    <li class="fa-star">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6.87326L12.0373 5.54865L9 0L5.96268 5.55356L0 6.87326L4.08243 11.6271L3.43857 18L9 15.3851L14.5614 18L13.9176 11.6271L18 6.87326Z" fill="currentColor" />
                                        </svg>
                                    </li>
                                    <li class="fa-star">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6.87326L12.0373 5.54865L9 0L5.96268 5.55356L0 6.87326L4.08243 11.6271L3.43857 18L9 15.3851L14.5614 18L13.9176 11.6271L18 6.87326Z" fill="currentColor" />
                                        </svg>
                                    </li>
                                    <li class="fa-star">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6.87326L12.0373 5.54865L9 0L5.96268 5.55356L0 6.87326L4.08243 11.6271L3.43857 18L9 15.3851L14.5614 18L13.9176 11.6271L18 6.87326Z" fill="currentColor" />
                                        </svg>
                                    </li>
                                    <li class="fa-star">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6.87326L12.0373 5.54865L9 0L5.96268 5.55356L0 6.87326L4.08243 11.6271L3.43857 18L9 15.3851L14.5614 18L13.9176 11.6271L18 6.87326Z" fill="currentColor" />
                                        </svg>
                                    </li>
                                    <li class="fa-star">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6.87326L12.0373 5.54865L9 0L5.96268 5.55356L0 6.87326L4.08243 11.6271L3.43857 18L9 15.3851L14.5614 18L13.9176 11.6271L18 6.87326Z" fill="currentColor" />
                                        </svg>
                                    </li>
                                </ul>
                                <b class="ratings" bname="<? print api::$read_review_bonus_name; ?>"></b>
                                <div class="text-small">Please vote!</div>
                            </div>

                        </div>
                        <a class="card-bonus" id="<? print api::get_read_review_bonus_id(); ?>">BET NOW</a>
                    </div>
                    <? if ($connect_section_pros_cons) { ?>
                    <div class="pros-cons">
                        <div class="pros-cons__col">
                            <div class="pros-cons__title">Pro's</div>
                            <div class="pros-cons__desc pros-list">
                                <ul>
                                    <li><img src="<? print config::https_host(); ?>/img/icons/pros.svg" />Unique ‘Flash Bet’ Options</li>
                                    <li><img src="<? print config::https_host(); ?>/img/icons/pros.svg" />Plenty of Deposit Options</li>
                                    <li><img src="<? print config::https_host(); ?>/img/icons/pros.svg" />Up to $500 No Risk Bet for New Players</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pros-cons__col">
                            <div class="pros-cons__title">Cons</div>
                            <div class="pros-cons__desc cons-list">
                                <ul>
                                    <li><img class="lazy" data-src="<? print config::https_host(); ?>/img/icons/cons.png" />Some of the Betting Options can
                                        Be Overly Complicated
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <? } ?>
                    <div class="text_content more">
                        <p>DISCLAIMER americanbets.com aims to provide useful and reliable information about all of the
                            online casinos we review. Bonuses and terms may change frequently, and despite our best efforts
                            it is possible that some information may be out of date, therefore we recommend consulting the
                            provider's official website for exact pricing. To maintain this website as a free resource, we
                            utilize links that provide us with compensation for referring you the the online casinos
                            features. We are independently owned and the opinions expressed here (Except user's opinions)
                            are our own.</p>
                    </div>
                </div>
            </section>
        </div>
        <footer class="footer" id="id_license">
            <div class="container">
                <div class="footer-row">
                    <div class="footer-col">
                        <div class="ongameuk-logo">
                            <img class="lazy" data-src="<? print config::https_host(); ?>/img/ongameuk-logo.svg" />
                        </div>
                    </div>
                    <div class="footer-col">
                        <div class="footer__policy">
                            This website is owned and operated by TrafficPoint Ltd. Reproduction of this website, in whole
                            or in part, is strictly prohibited. The offers and services featured in this website are
                            applicable solely for players located in the UK and over the age of 18. All offers might be
                            subject to additional terms or restrictions as determined by our partners which we are not
                            responsible for and we recommend that you review our partners’ term of use.
                        </div>
                        <div class="footer__logos">
                            <img class="lazy cls_fl_href cls_footer_logo1" data-src="<? print config::https_host(); ?>/img/game-care.svg" />
                            <img class="lazy cls_fl_href cls_footer_logo2" data-src="<? print config::https_host(); ?>/img/adults-only.svg" />
                            <img class="lazy cls_fl_href cls_footer_logo3" data-src="<? print config::https_host(); ?>/img/be-gamble-aware.svg" />
                            <img class="lazy cls_fl_href cls_footer_logo4" data-src="<? print config::https_host(); ?>/img/cogra.svg" />
                            <img class="lazy cls_fl_href cls_footer_logo5" data-src="<? print config::https_host(); ?>/img/gordon-moody.svg" />
                        </div>
                    </div>
                </div>
                <div class="footer-row">
                    <p class="copyright">Copyright © 2021, ONEGAMEUK. All Rights Reserved</p>
                </div>
            </div>

        </footer>
    </div>

    <? ongameuk::js_onload_config(); ?>

  </body>
</html>
