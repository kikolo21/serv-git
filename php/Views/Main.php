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

// ЭТА БЕЗОПАСНАЯ ФУНКЦИЯ МОЖЕТ БЫТЬ ВЫЗВАНА ТОЛЬКО ВРУЧНУЮ АМИНИСТРАТОРОМ (следует закомментировать вызов функции после достижения создания\обновления данных)
//api::set_config_ratings();

// ПОЛУЧАЕТ ДЛЯ ВСЕХ БОНУСОВ СПИСОК РЕЙТИНГОВ ДЛЯ ОТОБРАЖЕНИЯ НА САЙТЕ
api::get_config_ratings();

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
    <meta name="author" content="Ongameuk">
    <meta name="color-scheme" content="light dark">

    <link rel="canonical" href="<? print config::https_host(); ?>/">

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

    <link rel="stylesheet" href="<? print config::https_host(); ?>/css/style.css">
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
                <img class="lazy" data-src="./img/main-screen/ongameie-logo.svg" />
            </div>
            <div class="header_menu">
                <a href="<? print config::https_host(); ?>#top-casino" class="header_menu_link" id="id_lnk_top_casino">Casino</a>
                <a href="<? print config::https_host(); ?>#slots" class="header_menu_link" id="id_lnk_slots">Slots</a>
                <a href="<? print config::https_host(); ?>#about_us" class="header_menu_link" id="id_lnk_about_us">About</a>
                <a href="<? print config::https_host(); ?>#contact" class="header_menu_link" id="id_lnk_contact">Contact</a>
                <img class="header_menu_img lazy" data-src="./img/main-screen/right.svg" />
            </div>
            <button class="toggle-button">menu</button>
        </div>
    </header>
    <div class="wrapper">
        <div class="container">
            <section class="main-screen">
                <div class="main-screen__wrapper">
                    <div class="main-screen__left">
                        <h1 class="main-title">The Best UK Online Casino Sites</h1>
                        <p class="undertitle">Find the best online casinos offering top bonuses, latest slots, VIP
                            perks, 24/7 support and more. Our comprehensive reviews allow you to vet the casino before
                            you bet!</p>
                        <div class="main-screen__wrapper_after-text">
                            <div class="main-screen__wrapper_after-text_item">
                                <img card-svg src="./img/main-screen/december.svg" />
                                <?  // December 13, 2021 
                                    print functions::get_month_name(date("m")).' '.date("d, Y"); ?>
                            </div>
                            <div class="main-screen__wrapper_after-text_item">
                                <div class="link link-modal">Advertiser Disclosure</div>
                            </div>
                            <div class="main-screen__wrapper_after-text_modal">
                                <img class="main-screen__wrapper_after-text_modal_close" card-svg src="./img/close.svg">
                                <p>OnGameUk.com is a free online resource and independent comparison site that aims to help
                                    visitors find the most suitable product for their needs. We are a FREE, High-quality
                                    service by charging an advertising fee to featured brands whenever a user completes a
                                    purchase. These advertising fees might impact the placement and location of the brands
                                    on this page. The comparison service we provide is based on a combination of review
                                    findings, user experience, comments, product popularity, and conversion rates. We make
                                    best efforts to present up-to-date information, however, the information which appears
                                    on this site is subject to change at any time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="main-screen__right">
                        <img class="main-screen__img lazy" data-src="./img/main-screen/right.svg" />
                    </div>
                </div>
            </section>
            <section class="info-block">
                <div class="info-block_content">
                    <div class="info-block_item">
                        <img card-svg src="./img/main-screen/info-1.svg">
                        UK Licensed
                    </div>
                    <div class="info-block_item">
                        <img card-svg src="./img/main-screen/info-2.svg">
                        Secure & Trusted
                    </div>
                    <div class="info-block_item">
                        <img card-svg src="./img/main-screen/info-3.svg">
                        Fast Withdrawals
                    </div>
                    <div class="info-block_item">
                        <img card-svg src="./img/main-screen/info-4.svg">
                        Daily Updates
                    </div>
                </div>
            </section>
            <section class="card-section" id="id_top_casino">
                <div class="card" bname="grand ivy">
                    <div class="card-badge"><img card-svg src="./img/card/volume.svg" />OUR TOP
                        CHOICE
                    </div>
                    <div class="card-logo">
                        <img class="lazy card-logo-cover" data-src="./img/top-rated-slots-sites/3.png" alt="" />
                    </div>
                    <div class="card-text">
                        <div class="card-text_blue">Welcome Bonus</div>
                        <div class="card-text_bold">Up to £1 500 <br />Plus 100 Bonus Spins</div>
                        <div class="card-text_small">18+. Play Safe.
                            <div class="card-text_small_linkk">Read More</div>
                            <div class="card-text_small_modal">
                                <img class="card-text_small_modal_close" card-svg src="./img/close.svg">
                                18+. New players only. 1 bonus offer per player. Min. deposit €20. Max. bonus bet is €5.
                                Free spins on selected games only and must be used within 10 days. Winnings from free spins
                                credited as bonus funds and capped at €100. Bonus funds expire in 30 days, unused bonus
                                funds will be removed. Welcome Offer is 100% match up to €300 plus 25 free spins on your 1st
                                deposit, 25% match up to €800 plus 50 free spins on your 2nd deposit, and 50% match up to
                                €400 plus 25 free spins on your 3rd deposit. Bonus funds are separate to Cash funds, and are
                                subject to x35 wagering the total bonus money, deposit and free spins. Only bonus funds
                                count towards wagering contribution. Terms apply. Please gamble responsibly.
                                www.gamblingtherapy.org. Full terms in footer below.
                            </div>
                        </div>
                    </div>
                    <div class="card-ratet">
                        <div class="text-blue">Please vote!</div>
                        <ul class="list-inline rating-list" bname="grand ivy" data-rate="4" data-hover-rate="4">
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
                        <div class="hide-mob"><b class="ratings" bname="grand ivy"></b></div>
                        <a href="<? print config::https_host(); ?>/grand-ivy" class="review-page">Review Page</a>
                    </div>
                    <div class="card-rate-number">
                        <svg viewBox="0 0 36 36">

                            <path class="score_vector" stroke-dasharray="94, 100" stroke-dashoffset="4" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                        </svg>
                        <span class="score_number">9.4</span>
                    </div>
                    <a class="card-bonus" id="id_bonus_link1">GET BONUS <img class="lazy" data-src="./img/fire.png" alt=""></a>
                </div>
                <div class="card" bname="energy">
                    <div class="card-badge blue"><img card-svg src="./img/card/favorite.svg" />Players' Favourite
                    </div>
                    <div class="card-logo">
                        <img class="lazy" data-src="./img/top-rated-slots-sites/6.png" alt="" />
                    </div>
                    <div class="card-text">
                        <div class="card-text_blue">Welcome Bonus</div>
                        <div class="card-text_bold">Deposit £10 Get £50<br />No-wager spins</div>
                        <div class="card-text_small">18+. Play Safe.
                            <div class="card-text_small_linkk">Read More</div>
                            <div class="card-text_small_modal">
                                <img class="card-text_small_modal_close" card-svg src="./img/close.svg">
                                18+ (or min. legal age, depending on the region). T&Cs apply. Click on this banner to access
                                full T&Cs. Please play responsibly. Gamblingtherapy.org
                            </div>
                        </div>
                    </div>
                    <div class="card-ratet">
                        <div class="text-blue">Please vote!</div>
                        <ul class="list-inline rating-list" bname="energy" data-rate="4" data-hover-rate="4">
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
                        <div class="hide-mob"><b class="ratings" bname="energy"></b></div>
                        <a href="<? print config::https_host(); ?>/energy" class="review-page">Review Page</a>
                    </div>
                    <div class="card-rate-number">
                        <svg viewBox="0 0 36 36">

                            <path class="score_vector" stroke-dasharray="90, 100" stroke-dashoffset="4" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                        </svg>
                        <span class="score_number">9.3</span>
                    </div>
                    <a class="card-bonus" id="id_bonus_link2">GET BONUS <img class="lazy" data-src="./img/fire.png" alt=""></a>
                </div>
                <div class="card" bname="bet365">
                    <div class="card-logo">
                        <img class="lazy card-logo-cover" data-src="./img/top-rated-slots-sites/1.png" alt="" />
                    </div>
                    <div class="card-text">
                        <div class="card-text_blue">Welcome Bonus</div>
                        <div class="card-text_bold">Up to £25 <br />New Player Bonus</div>
                        <div class="card-text_small">
                            18+. Play Safe.
                            <div class="card-text_small_linkk">Read More</div>
                            <div class="card-text_small_modal">
                                <img class="card-text_small_modal_close" card-svg src="./img/close.svg">
                                New Casino customers only. Deposit min. £5. Max. bonus £25. 20x wagering (game weighting,
                                table coverage and max. bet rules apply) on deposit and bonus to make the bonus balance
                                withdrawable. Time limits and T&Cs apply.
                            </div>
                        </div>
                    </div>
                    <div class="card-ratet">
                        <div class="text-blue">Please vote!</div>
                        <ul class="list-inline rating-list" bname="bet365" data-rate="4" data-hover-rate="4">
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
                        <div class="hide-mob"><b class="ratings" bname="bet365"></b></div>
                        <a href="<? print config::https_host(); ?>/bet365" class="review-page">Review Page</a>
                    </div>
                    <div class="card-rate-number">
                        <svg viewBox="0 0 36 36">

                            <path class="score_vector" stroke-dasharray="91, 100" stroke-dashoffset="4" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                        </svg>
                        <span class="score_number">9.2</span>
                    </div>
                    <a class="card-bonus" id="id_bonus_link3">GET BONUS</a>
                </div>
                <div class="card" bname="dr bet">
                    <div class="card-logo">
                        <img class="lazy" data-src="./img/top-rated-slots-sites/5.png" alt="" />
                    </div>
                    <div class="card-text">
                        <div class="card-text_blue">Welcome Bonus</div>
                        <div class="card-text_bold">Bonus 100%<br />+ 50 Spins</div>
                        <div class="card-text_small">18+. Play Safe.
                            <div class="card-text_small_linkk">Read More</div>
                            <div class="card-text_small_modal">
                                <img class="card-text_small_modal_close" card-svg src="./img/close.svg">
                                18+. New UK customers only. Opt in required. Bonus can be activated only once. Minimal
                                deposit required of £10. Max bonus sum = £150. Bonus money must be wagered 40x. Winnings
                                from bonus spins must be wagered x50. 50 Spins on preselected game will be available 48
                                hours after registration if the deposit was made. This bonus is available till 30.11.21.
                                General T&C apply.
                            </div>
                        </div>
                    </div>
                    <div class="card-ratet">
                        <div class="text-blue">Please vote!</div>
                        <ul class="list-inline rating-list" bname="dr bet" data-rate="4" data-hover-rate="4">
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
                        <div class="hide-mob"><b class="ratings" bname="dr bet"></b></div>
                        <a href="<? print config::https_host(); ?>/dr-bet" class="review-page">Review Page</a>
                    </div>
                    <div class="card-rate-number">
                        <svg viewBox="0 0 36 36">

                            <path class="score_vector" stroke-dasharray="91, 100" stroke-dashoffset="4" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                        </svg>
                        <span class="score_number">9.2</span>
                    </div>
                    <a class="card-bonus" id="id_bonus_link4">GET BONUS</a>
                </div>
                <div class="card" bname="grosvenor">
                    <? /*
                    <div class="card-badge red"><img card-svg src="./img/card/percent.svg" />GREAT PROMOTION
                    </div>
                    */ ?>
                    <div class="card-logo">
                        <img class="lazy card-logo-cover" data-src="./img/top-rated-slots-sites/2.png" alt="" />
                    </div>
                    <div class="card-text">
                        <div class="card-text_blue">Welcome Bonus</div>
                        <div class="card-text_bold">Up to £30 <br />Deposit £20, Get £50</div>
                        <div class="card-text_small">18+. Play Safe.
                            <div class="card-text_small_linkk">Read More</div>
                            <div class="card-text_small_modal">
                                <img class="card-text_small_modal_close" card-svg src="./img/close.svg">
                                MIN DEPOSIT £20. MAX BONUS £30, BONUS AMOUNT NON-WITHDRAWABLE, PLAYABLE ON SELECTED GAMES
                                ONLY. WAGERING REQUIREMENTS VARY: 5X WAGERING FOR £20 BONUS, 10X WAGERING FOR ADDITIONAL £10
                                BONUS. EXPIRES WITHIN 30 DAYS.T&CS APPLY.
                            </div>
                        </div>
                    </div>
                    <div class="card-ratet">
                        <div class="text-blue">Please vote!</div>
                        <ul class="list-inline rating-list" bname="grosvenor" data-rate="4" data-hover-rate="4">
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
                        <div class="hide-mob"><b class="ratings" bname="grosvenor"></b></div>
                        <a href="<? print config::https_host(); ?>/grosvenor" class="review-page">Review Page</a>
                    </div>
                    <div class="card-rate-number">
                        <svg viewBox="0 0 36 36">

                            <path class="score_vector" stroke-dasharray="94, 100" stroke-dashoffset="4" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                        </svg>
                        <span class="score_number">9.2</span>
                    </div>
                    <a class="card-bonus" id="id_bonus_link5">GET BONUS</a>
                </div>
                <div class="card" bname="plaza royal">
                    <div class="card-logo">
                        <img class="lazy" data-src="./img/top-rated-slots-sites/4.png" alt="" />
                    </div>
                    <div class="card-text">
                        <div class="card-text_blue">Welcome Bonus</div>
                        <div class="card-text_bold">Up to Bonus £50 <br />Welcome Package 100 Spins</div>
                        <div class="card-text_small">18+. Play Safe.
                            <div class="card-text_small_linkk">Read More</div>
                            <div class="card-text_small_modal">
                                <img class="card-text_small_modal_close" card-svg src="./img/close.svg">
                                Applies only to new depositing players. 18+. Minimum deposit: £10. 35x Wagering requirement
                                applies to match up bonus. Spins credited in specific games. Spins expire after 24 hours.
                                Wagering requirement applies to spins. Terms and Conditions apply.
                            </div>
                        </div>
                    </div>
                    <div class="card-ratet">
                        <div class="text-blue">Please vote!</div>
                        <ul class="list-inline rating-list" bname="plaza royal" data-rate="4" data-hover-rate="4">
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
                        <div class="hide-mob"><b class="ratings" bname="plaza royal"></b></div>
                        <a href="<? print config::https_host(); ?>/plaza-royal" class="review-page">Review Page</a>
                    </div>
                    <div class="card-rate-number">
                        <svg viewBox="0 0 36 36">

                            <path class="score_vector" stroke-dasharray="92, 100" stroke-dashoffset="4" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                        </svg>
                        <span class="score_number">9</span>
                    </div>
                    <a class="card-bonus" id="id_bonus_link6">GET BONUS</a>
                </div>
                <div class="card" bname="mrgreen">
                    <div class="card-logo">
                        <img class="lazy" data-src="./img/top-rated-slots-sites/7.png" alt="" />
                    </div>
                    <div class="card-text">
                        <div class="card-text_blue">Welcome Bonus</div>
                        <div class="card-text_bold">Get £50<br />Free Spins</div>
                        <div class="card-text_small">18+. Play Safe.
                            <div class="card-text_small_linkk">Read More</div>
                            <div class="card-text_small_modal">
                                <img class="card-text_small_modal_close" card-svg src="./img/close.svg">
                                18+. Play Safe. New UK customers only. Opt-in required. 1x per customer. Free spins on Lucky
                                Mr Green only. Max. 50 free spins at £0.10/spin with 35x wagering. Spins expire 72 hours
                                from issue. Game, country, currency, player restrictions and terms apply.
                            </div>
                        </div>
                    </div>
                    <div class="card-ratet">
                        <div class="text-blue">Please vote!</div>
                        <ul class="list-inline rating-list" bname="mrgreen" data-rate="4" data-hover-rate="4">
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
                        <div class="hide-mob"><b class="ratings" bname="mrgreen"></b></div>
                        <a href="<? print config::https_host(); ?>/mrgreen" class="review-page">Review Page</a>
                    </div>
                    <div class="card-rate-number">
                        <svg viewBox="0 0 36 36">

                            <path class="score_vector" stroke-dasharray="90, 100" stroke-dashoffset="4" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                        </svg>
                        <span class="score_number">9</span>
                    </div>
                    <a class="card-bonus" id="id_bonus_link7">GET BONUS</a>
                </div>
            </section>
            <section id="id_live_casino">
                <h2 class="h2">TOP LIVE CASINO SITES 2021</h2>
                <div class="card" bname="luck land">
                    <div class="card-logo">
                        <img class="lazy" data-src="./img/top-rated-slots-sites/8.png" alt="" />
                    </div>
                    <div class="card-text">
                        <div class="card-text_blue">Welcome Bonus</div>
                        <div class="card-text_bold">100% up to £50<br />+50 Spins</div>
                        <div class="card-text_small">18+. Play Safe.
                            <div class="card-text_small_linkk">Read More</div>
                            <div class="card-text_small_modal">
                                <img class="card-text_small_modal_close" card-svg src="./img/close.svg">
                                Terms and Conditions apply. New players only. 18+. Min deposit $/€/C$/NZ$ 20. Wagering
                                requirement apply 35x . 40 spins will be given daily in the next 5 days and will be valid
                                for 24 hours.
                            </div>
                        </div>
                    </div>
                    <div class="card-ratet">
                        <div class="text-blue">Please vote!</div>
                        <ul class="list-inline rating-list" bname="luck land" data-rate="4" data-hover-rate="4">
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
                        <div class="hide-mob"><b class="ratings" bname="luck land"></b></div>
                        <a href="<? print config::https_host(); ?>/luck-land" class="review-page">Review Page</a>
                    </div>
                    <div class="card-rate-number">
                        <svg viewBox="0 0 36 36">

                            <path class="score_vector" stroke-dasharray="89, 100" stroke-dashoffset="4" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                        </svg>
                        <span class="score_number">8.9</span>
                    </div>
                    <a class="card-bonus" id="id_bonus_link8">GET BONUS</a>
                </div>
                <div class="card" bname="play ojo">
                    <div class="card-logo">
                        <img class="lazy" data-src="./img/top-rated-slots-sites/9.png" alt="" />
                    </div>
                    <div class="card-text">
                        <div class="card-text_blue">Welcome Bonus</div>
                        <div class="card-text_bold">Get £50<br />Free Spins on first deposit</div>
                        <div class="card-text_small">18+. Play Safe.
                            <div class="card-text_small_linkk">Read More</div>
                            <div class="card-text_small_modal">
                                <img class="card-text_small_modal_close" card-svg src="./img/close.svg">
                                First deposit only. 50 Free Spins on the Book of Dead slot. Minimum deposit £10. Each Free
                                Spin valued at 10p. OJO’s Rewards and Game Play policy applies.
                            </div>
                        </div>
                    </div>
                    <div class="card-ratet">
                        <div class="text-blue">Please vote!</div>
                        <ul class="list-inline rating-list" bname="play ojo" data-rate="4" data-hover-rate="4">
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
                        <div class="hide-mob"><b class="ratings" bname="play ojo"></b></div>
                        <a href="<? print config::https_host(); ?>/play-ojo" class="review-page">Review Page</a>
                    </div>
                    <div class="card-rate-number">
                        <svg viewBox="0 0 36 36">

                            <path class="score_vector" stroke-dasharray="83, 100" stroke-dashoffset="4" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                        </svg>
                        <span class="score_number">8.3</span>
                    </div>
                    <a class="card-bonus" id="id_bonus_link9">GET BONUS</a>
                </div>
                <div class="card" bname="dream vegas">
                    <div class="card-logo">
                        <img class="lazy" data-src="./img/top-rated-slots-sites/10.png" alt="" />
                    </div>
                    <div class="card-text">
                        <div class="card-text_blue">Welcome Bonus</div>
                        <div class="card-text_bold">Up to on your first deposit £2 500<br />200% Welcome Bonus</div>
                        <div class="card-text_small">18+. Play Safe.
                            <div class="card-text_small_linkk">Read More</div>
                            <div class="card-text_small_modal">
                                <img class="card-text_small_modal_close" card-svg src="./img/close.svg">
                                18+. New Players Only. 1 bonus offer per player. Min. deposit €20. Max. bonus bet is €5.
                                Free Spins on selected games only and must be used within 10 days. Winnings from Free Spins
                                credited as bonus funds and capped at €100. Bonus funds expire in 30 days, unused bonus
                                funds will be removed. Welcome Offer is 200% match up to €2500 plus 50 free spins on your
                                1st deposit, 40% match up to €3000 plus 30 free spins on your 2nd deposit, and 60% match up
                                to €1500 plus 40 free spins on your 3rd deposit. Bonus funds are subject to x35 wagering the
                                total bonus money, deposit and Free Spins. Only bonus funds count towards wagering
                                contribution. Terms apply. Please gamble responsibly. www.Gamblingtherapy.org FULL TERMS IN
                                FOOTER BELOW.
                            </div>
                        </div>
                    </div>
                    <div class="card-ratet">
                        <div class="text-blue">Please vote!</div>
                        <ul class="list-inline rating-list" bname="dream vegas" data-rate="4" data-hover-rate="4">
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
                        <div class="hide-mob"><b class="ratings" bname="dream vegas"></b></div>
                        <a href="<? print config::https_host(); ?>/dream-vegas" class="review-page">Review Page</a>
                    </div>
                    <div class="card-rate-number">
                        <svg viewBox="0 0 36 36">

                            <path class="score_vector" stroke-dasharray="81, 100" stroke-dashoffset="4" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                        </svg>
                        <span class="score_number">8.1</span>
                    </div>
                    <a class="card-bonus" id="id_bonus_link10">GET BONUS</a>
                </div>
            </section>
            <section class="top-sites" id="id_slots">
                <h2 class="h2">TOP ONLINE SLOTS SITES</h2>
                <div class="top-card__overflow">
                    <div class="top-card__container">
                        <div class="top-card" bname="dr bet">
                            <div class="top-card__img"><img class="lazy" data-src="./img/top-online-slots-sites/top-img-1.png" />
                            </div>
                            <div class="top-card__content">
                                <div class="top-card__title">Book of Dead</div>
                                <div class="top-card__row">
                                    <div class="top-card__smtitle">Casino:</div>
                                    <div class="top-card__casino-logo">
                                        <img class="lazy" data-src="./img/top-online-slots-sites/casino-1.png" />
                                    </div>
                                </div>
                                <div class="top-card__row">
                                    <div class="top-card__smtitle">Reviews:</div>
                                    <div class="top-card__rate"><span>10.0</span><img card-svg width="16" height="16" src="./img/star.svg" /></div>
                                </div>
                                <button class="primary-button card-bonus-primary" id="id_bonus_link11">GET BONUS</button>
                            </div>
                        </div>
                        <div class="top-card" bname="energy">
                            <div class="top-card__img"><img class="lazy" data-src="./img/top-online-slots-sites/top-img-2.png" />
                            </div>
                            <div class="top-card__content">
                                <div class="top-card__title">Book of Gods</div>
                                <div class="top-card__row">
                                    <div class="top-card__smtitle">Casino:</div>
                                    <div class="top-card__casino-logo">
                                        <img class="lazy" data-src="./img/top-online-slots-sites/casino-2.png" />
                                    </div>
                                </div>
                                <div class="top-card__row">
                                    <div class="top-card__smtitle">Reviews:</div>
                                    <div class="top-card__rate"><span>9.9</span><img card-svg width="16" height="16" src="./img/star.svg" /></div>
                                </div>
                                <button class="primary-button card-bonus-primary" id="id_bonus_link12">GET BONUS</button>
                            </div>
                        </div>
                        <div class="top-card" bname="grand ivy">
                            <div class="top-card__img"><img class="lazy" data-src="./img/top-online-slots-sites/top-img-3.png" />
                            </div>
                            <div class="top-card__content">
                                <div class="top-card__title">Fortune House</div>
                                <div class="top-card__row">
                                    <div class="top-card__smtitle">Casino:</div>
                                    <div class="top-card__casino-logo">
                                        <img class="lazy" data-src="./img/top-online-slots-sites/casino-3.png" />
                                    </div>
                                </div>
                                <div class="top-card__row">
                                    <div class="top-card__smtitle">Reviews:</div>
                                    <div class="top-card__rate"><span>9.9</span><img card-svg width="16" height="16" src="./img/star.svg" /></div>
                                </div>
                                <button class="primary-button card-bonus-primary" id="id_bonus_link13">GET BONUS</button>
                            </div>
                        </div>
                        <div class="top-card" bname="bet365">
                            <div class="top-card__img"><img class="lazy" data-src="./img/top-online-slots-sites/top-img-4.png" />
                            </div>
                            <div class="top-card__content">
                                <div class="top-card__title">Book of Ra</div>
                                <div class="top-card__row">
                                    <div class="top-card__smtitle">Casino:</div>
                                    <div class="top-card__casino-logo">
                                        <img class="lazy" data-src="./img/top-online-slots-sites/casino-4.png" />
                                    </div>
                                </div>
                                <div class="top-card__row">
                                    <div class="top-card__smtitle">Reviews:</div>
                                    <div class="top-card__rate"><span>9.8</span><img card-svg width="16" height="16" src="./img/star.svg" /></div>
                                </div>
                                <button class="primary-button card-bonus-primary" id="id_bonus_link14">GET BONUS</button>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <div class="sections-divider"></div>
            <section class="text" id="id_about_us">
                <div class="text_content">
                    <h2>Quick Summary</h2>
                    <p>How much has already been said about gambling in the official top online casinos uk? How many
                        people have tried their luck on slot machine sites? Some begin to regret after the first
                        failures, but the persistent ones have waited for Lady Fortune and continue to play and win real
                        money in the online casino regularly. According to the players' reviews in 2021, it can also be
                        argued that the casino helps them to be constantly on their toes. Moreover, now you can play
                        from your phone in mobile casinos anywhere in the world, wherever you are.</p>
                    <div class="text_content_blue_wrap">
                        <h3>Bottom Line</h3>
                        <div class="text_content_blue">
                            <p>But not one normal gambling person has ever said that he was satiated with all British casino
                                in
                                full. The desire to win, which not all people have, is already riveted to a person from the
                                moment of his birth, so passion can be equated with the concept of victory. Therefore, it is
                                to
                                her that we strive, risking everything we have using the best online casinos.</p>
                        </div>
                    </div>
                </div>
                <div class="sections-divider"></div>
                <div class="text_content">
                    <div>
                        <h2>Best Online Casino Sites UK 2021</h2>
                        <p>Having entered any good gambling establishment with slot machines online, you are already
                            addicted to gambling. It means that you are missing something unusual in your life. Gamblers are
                            not afraid of losing real money on casino slots at best payout online casino uk. They pay to get
                            the unforgettable moments that happen during the game. And it doesn't matter if it's a casino.
                            This could be 888 Casino, Poker Stars or Ladbrokes or another official fairness casino.</p>
                        <p>If you have decided that this is the way to get adrenaline and other pleasant sensations from the
                            game, then this selection of the best uk online casino will only help you make the right choice
                            in terms of playing and virtual casino. All the forces of the Internet security services aim to
                            combat fraudsters who force players to lose unusually large amounts of money in the hope that
                            they will win back.</p>
                        <p>Therefore, the Top 13 best UK online casinos have been created for you specifically for people
                            who strive to make their life not trivial and ordinary. It is precisely for those players for
                            whom risk and gambling are the meaning of life, in terms of getting an amazing adrenaline rush,
                            which only playing in an online casino for real money will give you. Although a free game
                            without registration may be enough for someone to start. Introducing the Top 13 Best Casino
                            Sites in the UK:</p>
                        <ul class="more">
                            <li>13th place - Casino Planet</li>
                            <li>12th place - Regal Wins</li>
                            <li>11th place - Casino Gods</li>
                            <li>10th place - Casoola</li>
                            <li>9th place - Magical Vegas</li>
                            <li>8th place - XL Casino</li>
                            <li>7th place - Mr. Q</li>
                            <li>6th place - Ladbrokes</li>
                            <li>5th place - 888 Casino</li>
                            <li>4th place - MrMr Green</li>
                            <li>3rd place - William Hill</li>
                            <li>2nd place - Poker stars</li>
                            <li>1st place - 32 Red Casino</li>
                        </ul>
                        <p class="more">The creators of this rating do not campaign for any official gambling casino site
                            but rely on an
                            objective and fair assessment of each site. The collection creators wanted to direct you to
                            solve problematic issues in terms of certainty which site is the top online casino.</p>
                        <p class="more">You can win at any of the above listed online casinos. After all, they are all
                            official sites
                            with the control of the honesty of Great Britain and are regularly checked by special services
                            in this regard. In all top online casinos, you can play for free without registration or for
                            real money after quick registration. You can enter the gambling casino from a personal computer,
                            laptop, tablet, or mobile phone. All gambling clubs and their games are adapted to modern
                            technologies. Some casinos allow their customers to download their software to their computer or
                            mobile phone, which significantly simplifies the game in the future. Regardless of the choice of
                            one best online casino, you are guaranteed pleasure! But for this, you need to have the
                            necessary information, which you can find out below.</p>
                    </div>
                    <div class="text_content_blue_wrap more">
                        <h3>Bottom Line</h3>
                        <div class="text_content_blue">
                            <p>Regardless of the choice of one best online casino, you are guaranteed pleasure! But for
                                this, you need to have the necessary information, which you can find out below.</p>
                        </div>
                    </div>
                </div>
                <div class="sections-divider more"></div>
                <div class="text_content more">
                    <h2>Online Casinos: What Are They About?</h2>
                    <p>Virtual gambling establishments are an excellent alternative to land-based clubs. The rapid
                        development of online gambling is the result of technological progress and the widespread ban on
                        gambling. Internet access allows players to visit the best online casinos in Great Britain and
                        other clubs at any time of the day without leaving their homes. Over time, even sceptics and
                        conservatives have appreciated the benefits of virtual gambling. The online casino rating will
                        help a novice player enter the clubs where there will be a real chance of winning. In addition,
                        due to the top gambling establishments, it will be possible to choose a platform with giving
                        machines, generous welcome bonuses and loyal conditions for withdrawing payments.</p>
                    <p>To begin with, it is worth clarifying that every honest and legal operator strives to get into
                        the rating list. For the owner of a gambling club, this is the most effective advertising move.
                        However, it is not so easy to stay at the top. Constant modernization is becoming one of the
                        main criteria of a rated casino. To stay ahead of rivals, attract new customers and divert
                        visitors from competitors, online club managers organize tournaments, add new slots, and play
                        big jackpots. If in one week the casino brand is on the first line and slides down to the 20-30
                        position in the second, this is normal. In a few days, the operator will launch a new set of
                        promotions and will be able to return to the top 10.</p>
                    <div class="text_content_blue_wrap">
                        <h3>Bottom Line</h3>
                        <div class="text_content_blue">
                            <p>If in one week the casino brand is on the first line and slides down to the 20-30 position in
                                the second, this is normal. In a few days, the operator will launch a new set of promotions
                                and will be able to return to the top 10.</p>
                        </div>
                    </div>
                </div>
                <div class="sections-divider more"></div>
                <div class="text_content more">
                    <h2>Importance Of Comparing Online Casinos</h2>
                    <p>When compiling a rating, many site owners are not conscientious about their work. They advertise
                        and rank first by the casinos that money has paid them. A player sees a beautiful advertisement
                        and a paid rating, trusts the casino with his money, and, as a result, remains dissatisfied.
                        After all, such clubs spend all their money to occupy the highest places in the lists on other
                        sites, completely forgetting about the control of honesty and their visitors. Such online
                        casinos, as a rule, do not exist for a long time. Be careful not to fall for their tempting
                        promises.</p>
                    <p>This selection of top online casinos in uk contains only an independent rating of official
                        casinos with integrity control in Great Britain. All sites have been around for a very long time
                        and have a lot of positive feedback from their customers. The creators of the rating do not
                        negotiate the rating with the owners of these casinos and do not receive any money from them for
                        a place in the top best online casinos uk.</p>
                    <p>This selection of the best online casino UK will give the addresses of the best official online
                        casinos and tell you how not to become addicted, achieve the desired results, and not be
                        mistaken at the very beginning for a beginner. You will also learn about all the advantages of
                        gambling in real and best online casinos, and you will find detailed, helpful information about
                        each gambling club.</p>
                    <div class="text_content_blue_wrap">
                        <h3>Bottom Line</h3>
                        <div class="text_content_blue">
                            <p>This selection of the best online casino UK will give the addresses of the best official
                                online casinos and tell you how not to become addicted, achieve the desired results, and not
                                be mistaken at the very beginning for a beginner. You will also learn about all the
                                advantages of gambling in real and best online casinos, and you will find detailed, helpful
                                information about each gambling club.</p>
                        </div>
                    </div>
                </div>
                <div class="sections-divider more"></div>
                <div class="text_content more">
                    <h2>What is also worth paying attention to?</h2>
                    <p>Are slot machines in casinos for money or for free? No one should force you to purchase
                        courses on excellent strategies of constant winnings at an online casino for money. These
                        are all fairy tales, and, in no case, do not buy them from anyone. Also, you need to be
                        careful with bonuses and different types of offers in this regard. Be careful because you
                        may be immediately offered an impressive bonus for registration, but is it worth it to agree
                        to it? To do this, you need to know if the return in this top casino is good, the wager and
                        other information.</p>
                    <p>The best way to find out and check the honesty of a casino is to read reviews about it, check
                        whether this club is official, how long has it been operating. It is worth playing only on
                        the official sites of online casinos with fairness control. In the ranking above, there are
                        only such internet establishments.</p>
                    <p>Do not rush to deposit money after the first visit. Play different slot machines for free
                        first, visit other sections of the site, chat with technical and financial support. Feel or
                        be comfortable with this casino. If everything is fine with the sensations, nothing bothers
                        you. Then after that, you can already try to play for real money.</p>
                    <div class="text_content_blue_wrap">
                        <h3>Bottom Line</h3>
                        <div class="text_content_blue">
                            <p>The best way to find out and check the honesty of a casino is to read reviews about it, check
                                whether this club is official, how long has it been operating. It is worth playing only on
                                the official sites of online casinos with fairness control. In the ranking above, there are
                                only such internet establishments.</p>
                        </div>
                    </div>
                </div>
                <div class="sections-divider more"></div>
                <div class="text_content more">
                    <h2>Benefits of Online Casinos Over Land Casinos</h2>
                    <p>There used to be different products for each platform before advances in technology allowed for a
                        one-stop solution. Access to all features and games through the casino website is the most
                        convenient option. No download is required for PC and mobile users. A beautifully designed and
                        easy-to-navigate website is what every modern person who loves gambling needs.</p>
                    <h5>Convenience</h5>
                    <p>Almost all online casinos in this selection of the best sites have easy sign-ups. Many sites have
                        quick registration, where you only need to enter your email and the currency you want to play
                        in. After that, you get your profile and the opportunity to play slot machines on the casino
                        website and receive the best online casino payouts.</p>
                    <h5>Multilingual</h5>
                    <p>Mobile optimisation is one of the keys to a successful casino launch as more and more internet
                        users use smartphones. One responsive website version is all they need. Therefore,
                        multilingualism is also an essential criterion for assessing the site’s quality because the site
                        may have foreign language users who also want to play in the casino.</p>
                    <h5>Bonuses</h5>
                    <p>How to clear the best casino bonus? It is worth being careful here since online casinos are very
                        demanding on wagering bonuses, site’s quality and violation of even the most innocuous rule can
                        lead to the loss of everything won and even blocking the initial deposit! Carefully read the
                        terms and conditions of each casino in the "Bonuses" section. For example, a casino might have
                        these basic rules. Let's say you received a $ 10 bonus. If this is a standard bonus, the
                        wagering coefficient, or as it is also called by the player’s wager, will be equal to 40. This
                        means that you need to make at least $ 400 bets (10 * 40 = 400). During the game, you can
                        observe what stage of wagering you are in detail (in the cashier section).</p>
                    <h5>Multiple Currencies</h5>
                    <p>Each online casino in this rating has more than one currency for playing. If we are talking about
                        casinos in Great Britain, then this is the US dollar, international currency, and, of course,
                        pounds sterling. But it is worth remembering that this choice is usually made during
                        registration, and further changes may only be possible through the casino support service.</p>
                    <h5>Relaxed Environment</h5>
                    <p>The best online casino sites offer you a comfortable stay on the site, avoiding any problems and
                        difficulties. But if you have problems, the support service will always help you. For example,
                        your game stopped working, what should you do? The first thing to do is stop playing this slot
                        and contact the casino representative where you are located. This is easy to do, as all casino
                        sites have a support chat. There you will need to answer questions and support to help and
                        explain what happened and why.</p>
                    <p>Or your games are slow. Why? This usually happens after a long game due to the caching of files
                        for the game slot in the browser. To fix the situation, you just need to clear the cache and
                        delete the temporary files that your browser saves. </p>
                    <div class="text_content_blue_wrap">
                        <h3>Bottom Line</h3>
                        <div class="text_content_blue">
                            <p>Or your games are slow. Why? This usually happens after a long game due to the caching of
                                files for the game slot in the browser. To fix the situation, you just need to clear the
                                cache and delete the temporary files that your browser saves. </p>
                        </div>
                    </div>
                </div>
                <div class="sections-divider more"></div>
                <div class="text_content more">
                    <h2>How To Find The Best Online Casino</h2>
                    <p>It is essential to know the criteria and be able to evaluate the best online casino operators.
                        Once you learn a few tips and find the opinion of a reliable expert, choosing one gambling site
                        out of hundreds becomes much easier. But if you prefer to make your own decisions about
                        everything and do not have experience in gambling, it will not be easy, as there is a lot to
                        analyse and take into account.</p>
                    <p>License and regulation are the main factors to look out for in the first place without knowing
                        anything about the operator itself. The stricter and more authoritative the jurisdiction, the
                        safer the casino site. Top-tier gambling authorities strive to enforce regulations to prevent
                        fraudulent activity and protect players. Keeping security at the highest level costs money, so
                        these licenses are usually expensive. An authoritative license is an important characteristic,
                        but it is not a guarantee of quality. It just means that the chances of you being treated
                        unfairly will be significantly less.</p>
                    <p>Is it possible to play free slot machines in online casinos for the first time? Here the
                        unequivocal answer is yes! Almost all slots in online casinos are available in demo mode, that
                        is, trial mode, without any money investments and registration. This is done on purpose to lure
                        players who are not ready to give money to an online casino immediately. But there are some
                        exceptions. For example, there are slot machines that are only available for playing for real
                        money. This mainly concerns new online slots from top manufacturers.</p>
                    <h5>What can affect the casino rating?</h5>
                    <p>Compiling rating lists is not an easy task. That is why a team of specialists is involved in
                        auditing sites. It would take more than one week for one gambler to analyse the club fully.
                        Several factors can be misleading. For example, it can happen that hundreds of visitors are
                        registered in a casino in one week. Everyone will not read the user agreement terms and will
                        catch a well-grounded ban for registering a second account or verification under someone else's
                        passport. There is a conflict, heaps of negative reviews, a drop in attendance and, as a result,
                        a decrease in rating.</p>
                    <p>In the expert report, the club is analysed according to internal and external criteria. This
                        applies to wagers for starting and weekly bonuses, privileges issued under the loyalty program.
                        Tournament rules are being studied. Only in the top clubs, the competitions are held on a real
                        basis and given a chance for a seven-figure jackpot. License information is rechecked monthly.
                        The operator may lose the certificate from the regulator of Curacao or Malta and not report it.
                        The lack of a license unties the administration’s hands, which can buy fake slots and openly
                        deceive customers.</p>
                    <p>Don't forget about aggressive marketing. This is a common technique among newcomers to the
                        gambling industry. New clubs offer an invitation package with bonuses for the first 10-20
                        deposits, hundreds of free spins. The club arouses great interest among visitors, but the player
                        does not receive any other advantages, except for prizes at the start. Such establishments are
                        quickly identified by independent auditors and are taken out of the rating ten.</p>
                    <div class="text_content_blue_wrap">
                        <h3>Bottom Line</h3>
                        <div class="text_content_blue">
                            <p>For example, there are slot machines that are only available for playing for real money. This
                                mainly concerns new online slots from top manufacturers.</p>
                        </div>
                    </div>
                </div>
                <div class="sections-divider more"></div>
                <div class="text_content more">
                    <h2>Selecting the Best Bonus</h2>
                    <p>Bonuses, free spins and deposit rewards have become an integral part of the industry. While this
                        aspect is not as important as the legitimacy of the casino and the variety of games, it can be a
                        deciding factor when choosing a casino. Good bonuses are those that help extend the playing
                        time. As a rule, good casinos offer a welcome bonus, which is a set of deposit bonuses. There
                        are also weekly promotions (reload bonuses, cashback) that keep existing customers.
                        Occasionally, players receive promotional emails with free spins bonuses.</p>
                    <p>The best promotions that online casinos have to offer are not related to getting more free spins.
                        Wagering requirements (wager) are a key element of all promotions. The standard requirement to
                        put money on a withdrawal is to roll the bonus 30-40 times. This must be done without breaking
                        other rules such as maximum bet, restricted games, etc.</p>
                    <p>Cashback and loyalty programs are also important. Players are used to returning a share of their
                        weekly (or monthly) losses, which is usually 5-10-15% (most often depending on the player's
                        status). Operators reward players by launching a loyalty program that collects points and gifts
                        to increase the account level. Loyalty points are then exchanged for real money or bonuses.</p>
                    <div class="text_content_blue_wrap">
                        <h3>Bottom Line</h3>
                        <div class="text_content_blue">
                            <p>Don't forget about aggressive marketing. This is a common technique among newcomers to the
                                gambling industry. New clubs offer an invitation package with bonuses for the first 10-20
                                deposits, hundreds of free spins. The club arouses great interest among visitors, but the
                                player does not receive any other advantages, except for prizes at the start. Such
                                establishments are quickly identified by independent auditors and are taken out of the
                                rating ten.</p>
                        </div>
                    </div>
                </div>
                <div class="sections-divider more"></div>
                <div class="text_content more">
                    <h2>Different Types Of Games</h2>
                    <p>The variety of games is a criterion that cannot be overestimated. Games are the reason why
                        players join casinos, and they have to be fun on the one hand and fair on the other. The centre
                        of any casino lobby is slot machines, but live and table card games are usually in second place.
                        The quality of the games varies as they are produced by many different quality slot machine
                        developers. NetEnt, Yggdrasil, BTG, Quickspin and Relax are among the leading online casino
                        software providers right now. All focused on slots development.</p>
                    <p>The selection of games must be varied and exciting to suit the demands of players with different
                        tastes. There should be both classic and innovative slot machines, progressive jackpots, unique
                        mechanics, games with low, medium or high volatility.</p>
                    <div class="text_content_blue_wrap">
                        <h3>Bottom Line</h3>
                        <div class="text_content_blue">
                            <p>The selection of games must be varied and exciting to suit the demands of players with
                                different tastes. There should be both classic and innovative slot machines, progressive
                                jackpots, unique mechanics, games with low, medium or high volatility.</p>
                        </div>
                    </div>
                    <h5>Roulette</h5>
                    <p>Traditional roulette is popular, but to make the game more attractive, some developers have
                        released variants with higher maximum winning potential. Now the maximum win in roulette is more
                        than ten times the traditional win 35 times. You can evaluate it yourself by trying the game at
                        an online casino.</p>
                    <h5>Blackjack</h5>
                    <p>Classic Blackjack has always been in demand. Blackjack hasn't changed much, but there are some
                        exciting options available. Yggdrasil Gaming specialises in slot machines but has a series of
                        beautifully designed blackjack games featuring unique 3D animated dealers Sonia, Lucky and Dr
                        Fortuno.</p>
                    <h5>Slots</h5>
                    <p>Online slots are a great way to have fun and even win real money. In simple words, slots are
                        games made in the image and likeness of slot machines that have recently been in gaming clubs
                        and casinos. Slots are a screen with buttons and knobs that you can use to start an action, stop
                        it, spend a certain amount of coins or points, and so on. On the screen of such slots, there is
                        an action like roulette or a lottery, that is, a random drop of numbers, pictures, images.
                        Various combinations and configurations of such drops bring the player either money/points or
                        nothing. These machines are based on random numbers that cannot be predicted, although some
                        players claim they have learned how to calculate the percentages of winnings and losses.</p>
                    <h5>Live casino</h5>
                    <p>Today, many online casinos offer their customers a wide variety of flash gambling games, many
                        so-called live games. These include almost all entertainment popular among players: roulette,
                        baccarat, blackjack, several types of poker, and so on. The point of a live casino is that
                        dealers who are in special closed halls work with you. Numerous cameras transmit their actions
                        to the monitor screen, and special sensors located in the roulette wheel and gaming tables allow
                        receiving information about dropped numbers, cards being dealt, etc. The casino software,
                        receiving data from these sensors, determines the amount of the win, taking into account the
                        rules of the game and the current gaming situation.</p>
                </div>
                <div class="text_content">
                    <button class="primary-button reedmore">Read more</button>
                </div>
            </section>
            <section id="id_contact">
                <div class="form">
                    <div class="form-row">
                        <h6 class="form-title">GET IN TOUCH</h6>
                        <p class="form-text">Don’t hold it in! If you’ve got an experience to share, a burning question
                            that needs an answer, or you want to reach out to us for help with a site you play at, get
                            in touch with us using the form below. We’d love to hear from you.</p>
                    </div>
                    <div class="form__row">
                        <div class="form__col">
                            <div class="form-input__wrapper">
                                <input class="form-input" name="name" type="text" placeholder="Name" maxlength="100" id="id_form_name"/>
                                <input class="form-input" name="email" type="email" placeholder="Email" maxlength="100" id="id_form_email"/>
                            </div>
                        </div>
                        <div class="form__col">
                            <div class="form-input__wrapper">
                                <input id="id_form_msgsk" style="display:none;" maxlength="32" value="<? print main::$msgsk; ?>">
                                <textarea name="message" class="form-input textarea" placeholder="Message" maxlength="255" id="id_form_msg"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form-text privacy-policy">Your information will be handled as detailed in our <a style="cursor:pointer;">Privacy Policy</a></div>
                        <button class="primary-button cls_but_send" id="id_but_send">Send</button>
                    </div>
                </div>
            </section>
        </div>
        <footer class="footer" id="id_license">
            <div class="container">
                <div class="footer-row">
                    <div class="footer-col">
                        <div class="ongameuk-logo">
                            <img class="lazy" data-src="./img/ongameuk-logo.svg" />
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
                            <img class="lazy cls_fl_href cls_footer_logo1" data-src="./img/game-care.svg" />
                            <img class="lazy cls_fl_href cls_footer_logo2" data-src="./img/adults-only.svg" />
                            <img class="lazy cls_fl_href cls_footer_logo3" data-src="./img/be-gamble-aware.svg" />
                            <img class="lazy cls_fl_href cls_footer_logo4" data-src="./img/cogra.svg" />
                            <img class="lazy cls_fl_href cls_footer_logo5" data-src="./img/gordon-moody.svg" />
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
