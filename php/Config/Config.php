<?php

namespace ongameuk\php\Config;

use ongameuk\php\Libs\functions;

class config
 {
    const db_name = 'ongameuk';
    const db_user = 'ongameuk';
    const db_pasw = 'ioewhn8sidoignfghekwjbgl32oiugqwer243g-h0j';

    // СПИСОК СТАРТОВЫХ ЗНАЧЕНИЙ РЕЙТИНГОВ (СПИСОК ИСПОЛЬЗУЕТСЯ ТАКЖЕ ДЛЯ ПРОВЕРКИ ЗНАЧЕНИЙ ПЕРЕМЕННЫХ ПРИ ДОБАВЛЕНИИ ЗНАЧЕНИЙ ПОЛЬЗОВАТЕЛЕМ)
    public static $ratings = array(
        ['bet365'         ,'18621', '1', '9.2', 'Up to £25
        New Player Bonus'],
        ['grosvenor'      ,'15574', '2', '9.2', 'Bonus £30
        Deposit £20, Get £50'],
        ['grand ivy'      ,'14836', '3', '9.4', 'Up to £1 500
        Plus 100 Bonus Spins'],
        ['plaza royal'    ,'13674', '4', '9', 'Up to Bonus £50
        Welcome Package 100 Spins'],
        ['dr bet'         ,'13167', '5', '9.2', 'Bonus 100%
        + 50 Spins'],
        ['energy'         ,'12972', '6', '9.3', 'Deposit £10 Get £50
        No-wager spins'],
        ['mrgreen'        ,'11463', '7', '9', 'Get £50
        Free Spins'],
        ['luck land'      ,'8452',  '8', '8.9', '100% up to £50
        +50 Spins'],
        ['play ojo'       ,'5386',  '9', '8.3', 'Get £50
        Free Spins on first deposit'],
        ['dream vegas'    ,'5876',  '10', '8.1', 'Up to on your first deposit £2 500
        200% Welcome Bonus']
    );

    public static $read_review_content = array(

        ['bet365', 'Bet365 Review', 
        'Bet365 has been in business since the year 2000. Over the years they have grown to be one of the largest and most respected online gambling platforms in the world. They have millions of players on their casino, bingo, and sports betting sites. This company is licensed by the UK Gambling Commission and the Malta Gaming Authority, so you can be confident that you will get a fair experience on all your bets.'],
        
        ['bet365', 'Welcome Bonus', 
        'New Customers only. Up to £100 in Bet Credits. Sign up, deposit £5 or more to your account and bet365 will match your qualifying deposit in Bet Credits when you place qualifying bets to the same value and they are settled. Min odds/bet and payment method exclusions apply. Returns exclude Bet Credits stake. T&Cs, time limits & exclusions apply.', 
        'Up to £100 in Bet Credits. New customers only. Min deposit £5. Bet Credits available for use upon settlement of bets to value of qualifying deposit. Min odds, bet and payment method exclusions apply. Returns exclude Bet Credits stake. Time limits and T&Cs apply. +18. Bet Responsibly.The welcome bonus offered to new players at Bet365 is quite generous, but also pretty complicated. To qualify, you have to deposit at least £5 into your account, then make a qualifying wager within 30 days. That wager is matched at 100% up to a max of £100 in bet credits. These bet credits can be used to place most any type of wager, though there are some restrictions. The credits must be used within 30 days or they are lost. To qualify for the welcome bonus you also cannot make the deposit using bank transfer, PayPal, or PaySafeCard.'],

        ['bet365', 'Available Markets', 
        'There is no shortage of sports markets that you can choose from when placing your bets. They list all the different markets clearly so you can browse through and find what you are looking for. You can also search based on what sports are active or upcoming, which is very helpful. When looking through the various sports you will find options like football, American football, basketball, tennis, horse racing, MMA, baseball, hockey, cricket, and many others.'],

        ['bet365', 'In-Play Betting', 
        'The in-play betting options at Bet365 are quite competitive and will provide you with lots of great opportunities while you are watching your favorite games. The in-play betting options are clearly listed on their platform so you can see all the options you have available at any given time. You can easily sort the various options based on specific games, so you are not distracted by those that you do not want to place bets on.'],
        
        ['bet365', 'Mobile Betting', 
        'If you are like most people, you will want to be able to manage your bets no matter where you happen to be. The mobile app from Bet 365 is especially nice and easy to use. It is available on Apple and Android so you can quickly access your account and take whatever actions you need. This is perfect for when you are watching sports on the couch, at a local pub, or anywhere else that you enjoy. Just open the app and make your wagers to get the bets you desire.'],
        
        ['bet365', 'Promotions & Offers', 
        'In order to keep people coming back, Bet365 offers a variety of different promotions. These promotions are a lot of fun and will entice people to learn about sporting events that they may not have watched in the past. The promotions come in many different types including things like earning 50% bonuses on certain wagers, getting money back on lost bets, and early payouts. In addition, they also have a nice VIP program that will provide loyalty points that can be redeemed for more wagers and other great perks.'],
        
        ['bet365', 'Deposit Methods', 
        'Managing your financial account on this platform is very convenient. You can make deposits using Visa, MasterCard, Apple Pay, PayPal, Google Pay, PaySafeCard, bank wire, and check. Other than the check and wire transfer, you can have the money added to your account instantly so you can start to make your bets. The minimum deposit amount is £5 for most deposit methods, though it is higher for checks and wire transfers. As with any trusted site, your account information is encrypted and kept safe at all times to ensure you are not at risk.'],
        
        ['bet365', 'Customer Service', 
        'The customer support teams are available to help you with any problems you run into 24/7/365. They can be reached using live chat, email, phone, or a convenient web message option. In most cases you will get a fast response, though sometimes email and live chat will have a delay depending on how busy they are at a given time. If you do not need help from a live person, you can also get answers to common questions on their help section. This section will have answers to just about any questions you may have, and they are sorted by category to make it extremely easy to use.'],
        
        ['bet365', 'Summary', 
        'If you love sports, and making bets on your favorite games, you will almost certainly love the Bet365 platform. It has clearly been designed to meet the needs of sports enthusiasts, and help them to be able to place the wagers they are interested in safely from anywhere you happen to be. This platform has plenty to offer all types of people who bet on sports, no matter their experience. Just create an account and see if their services are right for you.'],


        ['grosvenor', 'Grosvenor Review', 
        'Grosvenor is a very easy to use betting platform, covering a wide range of different betting markets. They offer odds on a lot of sports, and with good promotions running on football, this is a great place for football gamblers to head to if they want to find extra value when betting.'],
        
        ['grosvenor', 'Welcome Bonus', 
        'Grosvenor offers to double the odds on any sport and any Bet.'],
        
        ['grosvenor', 'Available Markets', 
        'The markets on offer with Grosvenor are very good, and you will see many different sports to bet on. Their biggest section is certainly football, where they offer a huge range of betting opportunities on many different leagues from around the world. Elsewhere, they cover other big sports like cricket and basketball, as well as some smaller sports like darts and snooker.'],
        
        ['grosvenor', 'In-Play Betting', 
        'By pressing on in play at the top of the page, you will be taken to the Grosvenor live betting section. Down the left hand side of the page you can access each live event that is taking place, and they are split into sections for each sport, so if you are looking for football, simply scroll to the football section and you will see all the games there. If you are worried about missing a betting opportunity then visit their schedule page, which shows all the upcoming live betting events. This is great for those who are looking to plan ahead, and a useful tool on their website.'],
        
        ['grosvenor', 'Mobile Betting', 
        'Grosvenor do not currently offer a mobile app for download, however their website is compatible with mobile devices, making it easy to place bets on the go. Should you need to place a bet, simply go to their website on your device and you will see the quicker and easier to use mobile version, great for placing quick bets on the go when you don’t have much time.'],
        
        ['grosvenor', 'Promotions & Offers', 
        'The majority of the promotions on offer with Grosvenor centre around football, so this is a great place for football punters to head. They offer a promotion called ‘the match ends at 88’, which gives you your stake back on live bets if your team was winning in the 88th minute, but conceded late and didn’t win the game. Elsewhere, they also offer acca insurance on accumulator bets of five teams or more, if just one lets you down then you will get your money back for that bet. With other promotions running too, Grosvenor are doing all they can to offer their customers value.'],

        ['grosvenor', 'Deposit Methods', 
        'There are many ways to deposit into your Grosvenor account, with the easiest method being to use a bank card you have. They accept all Visa debit and credit cards, all Mastercard debit and credit cards and all Maestro debit cards, so you have plenty of choice. If you would rather use an internet e-wallet then you can deposit using Skrill, Neteller, Paysafecard and Money Safe, giving you an extremely good range of payment options.'],

        ['grosvenor', 'Customer Service', 
        'Getting in touch with Grosvenor is easy, thanks to them offering three different ways of contact. You can speak to an advisor on their live chat function, which is great for small problems, email one of their team or speak to someone on the phone, and this is a very good service.',
        'Email: support@grosvenorcasinos.com

        Live Chat: On-site
        
        Phone: 020 329 00310'],

        ['grosvenor', 'Summary', 
        'Grosvenor have a good sports betting platform for users to use, and there is plenty to like about what they offer. They may not have the extensive market range that some other bookmakers have, but they do offer a lot of betting opportunities, enough for the majority of punters. Football is their biggest section, and they have many ways to bet on football, as well as offering a wide range of footballing promotions you can take advantage of. With a big list of payment methods available to use, and good customer service, their website is rounded off nicely and this is a very good place to put your bets on for the upcoming sporting action.'],


        ['grand ivy', 'Grand Ivi Review', 
        'The Grand Ivy Casino conjures images of the art deco, with an online casino experience that brings back the glamour and sophistication of a night at the gaming tables. Dust off the tuxedo – it’s so grand, there could almost be a dress code. But far from the gaming tables of Mayfair, this is an online casino that is much more welcoming to new players, with generous bonuses and promotions, and a great selection of games lying in wait.'],
        
        ['grand ivy', 'Safety and Trustworthiness', 
        'The Grand Ivy is owned by Malta-based Caddell Limited N.V., a private company with extensive experience in operating casino sites. While launched more recently, The Grand Ivy still benefits from the time-tested reputation of the wider group.',
        
        'Caddell Limited is licensed by the UK Gambling Commission for players in the UK, now a legal requirement for operators targeting the UK market. This also means you can play with confidence, safe in the knowledge that one of the world’s most stringent regulating authorities is overseeing proceedings.',
        
        'The Grand Ivy casino is also licensed by the Malta Gaming Authority for all other players, which effectively means two layers of independent regulation. This is good news for players who like to know they’re playing at a casino that is fair and honest in its dealings.',
        
        'Payments are processed through reputable third-party payment processors, which each use their own encryption to protect your financial data. Similarly, the Grand Ivy deploys their own encryption technology to ensure double peace of mind for their players.',
    
        'In an industry where negative reviews are increasingly commonplace, the Grand Ivy Casino scores remarkably well. While it’s possible to find a few disgruntled players, there seems to be little to indicate any systemic failings or mistreatment of their customers. All the more reason to consider the Grand Ivy a trustworthy, secure place to play online.'],
        
        ['grand ivy', 'Deposits & Withdrawals', 
        'The Grand Ivy supports a limited range of deposit and withdrawal methods, but all the main players are there, with e-wallets including Neteller and Skrill supported, alongside the usual credit and debit card options.Pending times generally run from 48-72 hours, and payments are processed according to withdrawal type from 24 hours for e-wallets, to 3-5 days for debit card withdrawals.'],
        
        ['grand ivy', 'Bonuses', 
        'The welcome bonus stands at the generous amount of up to £1500, plus 100  bonus spins, subject to the usual terms and conditions. This is split over the first three deposits, and the amount of bonus you receive is contingent on the size of your deposit.',
    
        'The first deposit offers a 100% bonus up to £300, plus 25 bonus spins to be played on Starburst. For the second deposit, you’re looking at 25% of your deposit up to a maximum of £800, plus 50 bonus spins on Aloha Cluster Pays. The third deposit earns you a 50% bonus up to £400, and you’ll get a final 25 bonus spins on NetEnt’s classic Gonzo’s Quest.',
    
        'Note that players depositing through Neteller and Skrill are not eligible to claim this bonus. The minimum deposit to claim the bonus is £20, and withdrawals are subject to a 35x wagering requirement on the deposit amount. Time limitations, and game weighting to wagering contribution also apply, and it’s worth checking the full terms and conditions to get a run down of exactly how these factors affect your bonus play.',
    
        'In terms of wagering contribution, it’s really only slots and arcade games where you can convert your bonus at 100% of the wagering requirement. This is a disadvantage for table game fans, and probably makes the bonus somewhat more attractive for players who are drawn to real-money slots.',
    
        'As bonuses go, the total package is on the generous side. A 35x wagering requirement is fair and consistent with what you’ll find at other casinos, while the upper limit alone means there’s potentially a lot of bonus to be had as part of this offer. The terms and conditions generally seem fair too, so this is a bonus offer that definitely checks out.'],
        
        ['grand ivy', 'Game Selection', 
        'One of the main strengths of the Grand Ivy is the sheer selection of games on offer. Grand Ivy is powered by software from a selection of the best developers in the business, including Microgaming, NetEnt, Amaya, Elk Studios and a handful of others. This translates into as many as 434 different slots games, of which 164 are available to players on mobile.',
    
        'Amongst their best slots, you’ll find the likes of Immortal Romance, Cosmic Fortune, and even massive progressive slots like Mega Moolah, where jackpots often run into the millions.',
    
        'Table game fans are offered a wide selection of games to choose from, including numerous versions of roulette, blackjack, baccarat and video poker, amongst others. There’s even live gaming options available, with 13 live games powered by Evolution Gaming – the foremost live games provider in the industry.',
    
        'The games all load quickly in-browser, and where available, perform equally well through the mobile app and on the mobile site. With choice like this, it’s unlikely you’ll find yourself getting bored with the selection, and the easy-to-navigate website means you won’t get lost looking for new games.'],

        ['grand ivy', 'Mobile App', 
        'As a starting point, anyone can enjoy a full, high quality gaming experience on mobile by playing in-browser. Simply head on over to the Grand Ivy Casino website on your tablet or smartphone browser, and you can be up and running within seconds.',
    
        'For Android users, things get even more convenient, thanks to the free app available. This allows you access to a smaller collection of Grand Ivy games directly from your Android device, so there’s no need to use the browser, and you get a more streamlined experience.',
    
        'Unfortunately, there’s no app available for iOS customers at the moment, which is one area the Grand Ivy could look to build on in the near future. However, with the mobile site offering a strong alternative, and the app available for Android users, this is unlikely to cause problems for most players.'],

        ['grand ivy', 'Promotions', 
        'It’s not just new players who get to take advantage of the special offers available at the Grand Ivy Casino – there are also a number of ongoing promotions running throughout the year, aimed at rewarding existing and loyal players.',
    
        'Firstly, there’s the chance to win a Mercedes-Benz SLC 200 Sport every month, and all players who accrue 1000 Ivy Points in the month and wager their deposits 2x will qualify for the promotion. Or there’s the Smoking Blackjack Tournament, where players who land blackjack on qualifying live blackjack games before a certain deadline are entered into a draw to win the allotted prize fund (and the more times you land blackjack, the more chances you have to win!).',
    
        'These are just an example of the promotions available at the Grand Ivy, and you can find full details of the relevant terms and conditions on the ‘Promotions’ tab at the Grand Ivy website. This is also the best place to look for the most recent promotions and offers, as they change throughout the year.',
    
        'There is also a loyalty programme, where players can accrue Ivy points based on their play, redeemable for bonuses and other incentives. And for those who roll a little higher, there’s a VIP programme in place to better cater to your needs.'],
        
        ['grand ivy', 'Review Summary', 
        'The Grand Ivy has a very grand, albeit dated design throughout its website on desktop and mobile. Its games are drawn from leading developers like Microgaming and NetEnt. And with over 400 of them available, plus dozens of table games and other casino favourites, there’s certainly no shortage of choice. One drawback will be the lack of Video Pokers but that won’t put off too many UK players.',
    
        'The welcome bonus is generous and fair, and the promotions make the Grand Ivy feel like a more exciting place to play. Especially when you compare promotions with other providers, it’s clear that the Grand Ivy are serious about retention and offering good value to their most loyal players.',
    
        'The lack of a mobile app for iPhone players is a downside, albeit very minor, and it would be nice to see some more payment methods supported in future – even if the current selection is adequate for most players. Otherwise, this is a solid, reputable casino with plenty to offer to both new and existing players alike, one which we’re happy give a healthy 8 out of 10.'],


        ['plaza royal', 'Plaza Royal Casino Review', 
        'Established in 2020, Plaza Royal Casino is a new name in the online betting scene. However, it enters the market with some exciting features that will thrill punters. Of course, you can argue that it’s a bit too early to give a verdict on a newcomer in the online casino industry, but first impressions can tell you a lot. And, at first glance, Plaza Royal Casino does many things right.'],
        
        ['plaza royal', 'Bonuses', 
        'Bonuses are one of the major attractions of online casinos. When punters are checking out an online gaming platform, one of the first things they look out for are the bonus offers. For newbies in the betting market, these deals are crucial to reeling in new players.',
    
        'Plaza Royal Casino understands this as they enter the scene with an exciting welcome bonus. New players who register with the casino are eligible for a 100% bonus on their first deposit up to £200. The minimum deposit to qualify for this deal is £10.',
    
        'There’s also an offer of 100 free spins spread across your first three deposits. On your first deposit of £10, you’ll get free spins on 20 games, while your second and third deposits — a minimum of £20 — earn you free spins on 40 games each. However, you must use the free games within one day of receiving them, or the casino will withdraw them from your account.',
    
        'The 100% deposit bonus expires within 21 days of receiving it, as well. Furthermore, players must place stakes 35 times the sum of their bonuses before cashing out winnings. Unfortunately, players from the United Kingdom are not eligible for these bonus deals.',
    
        'Plaza Royal also has a reward points system for punters who fancy loyalty programs. Generally, you earn bonuses as you play, with the standard being one reward point for every £40 bet. However, you may get more points, depending on the game and type of wager.'],
        
        ['plaza royal', 'Safety and Trust', 
        'When it comes to betting online, you can never go wrong by picking a trustworthy platform, and Plaza Royal strikes all the right notes in this regard. The games on the platform run on software from Aspire Global International LTD and AG Communications LTD, companies licensed and operated by the Malta Gaming Authority and the United Kingdom Gaming Commission.',
    
        'The casino also ensures that customers play games in a highly secure environment, as it utilizes an up-to-date 128-bit Secure Socket Layer (SSL) encryption to protect user data. Furthermore, Aspire Global International LTD processes all debit/credit card transactions carried out on the platform. For bettors in Sweden and Great Britain, AG Communications LTD handles all debit/credit card deposits and withdrawals.',
    
        'As such, you don’t have to worry about safe banking. A customer care team is also available throughout the week to attend to any hitches you may encounter while playing games or carrying out monetary transactions.'],

        ['plaza royal', 'Deposits and Withdrawals', 
        'Banking is another thing Plaza Royal Casino does well. Despite being relatively new in the market, it offers punters an extensive list of deposit transaction methods to choose from, including bank transfer, credit/debit cards, and e-wallets. Some options available include Visa, MasterCard, AstroPay Card, PayPal, Euteller, Skrill, Skrill 1-Tap, ecoPayz, Interac, Trustly, CashtoCode, giropay, Neteller, and PaySafe Card.',
    
        'There are also a wide variety of currencies to choose from, depending on your payment method. Players should cross-check to make sure the option they pick to make deposits allows them to carry out transactions with their nation’s currency. Furthermore, while you can pay money into your Plaza Royal account with the different deposit methods, you cannot make withdrawals with all of them.',
    
        'For example, players cannot withdraw their winnings/deposits using Interac, Euteller, PaySafe Card, and Giropay. Also, the minimum amount you can deposit with Plaza Royal is 10. However, we could not find any information on the casino’s website about minimum/maximum withdrawals. Finally, while deposits are instant with all the payment methods, withdrawals take around 0-6 working days.'],

        ['plaza royal', 'What Type of Games Do They Offer?', 
        'Plaza Royal Casino also has a wide range of slots, live, jackpot, and table games, with over 1300 options available for you. Its catalog of slot games includes several picks from some top gaming providers like NetGen Gaming, ELK Studios, iSoftBet, Skywind Group, Playtech, Thunderkick, NetEnt, IGT, and Blueprint Gaming. Some popular slots you can play include Book of the Dead, Starburst, Fire Joker, Thunder Screech, Hansel and Gretel, Lord Merlin and the Lady of the Lake, Mighty Sphinx, etcetera.',
    
        'There’s also an impressive array of jackpot games for you to choose from, including Imperial Riches, Lucky Lady, Mercy of the Gods, Grand Spinn Superpot, Divine Fortune, Leprechaun Goes to Hell, and Genie Mega Reels. Even live casino lovers have an extensive catalogue of options available for them. Lightning Roulette, Monopoly, Blackjack Party, Casino Hold’em, Auto Roulette, Lightning Dice, and Blackjack Grand VIP are some popular picks among the over 120 live casino games on offer. You can choose from an exciting mix of virtual, table, and mobile games, as well.'],

        ['plaza royal', 'What Type of Devices', 
        'You can access the Plaza Royal Casino website on your PC, Apple, or Android device. The interface is smooth, responsive, and friendly. Unfortunately, there’s no Plaza Royal mobile app for Android or iOS smartphones at the moment. For players who prefer wagering on an app, the lack of a mobile application could be a significant drawback. However, Plaza Royal Casino is still relatively new in the online casino industry, and an app may well be in development.'],
        
        ['plaza royal', 'Terms and Conditions', 
        'As expected, Plaza Royal Casino has several terms and conditions that punters must go through and agree to before registering and wagering on the website. For one, players must be at least 18 years or any age legal in their country of residence before playing. The casino holds the right to shut down a bettor’s account if there is no legal document to verify the individual’s age.',
    
        'Plaza Royal will also withhold all winnings and bonuses belonging to the account. Furthermore, players must not create a second account to wager with or place bets using another person’s account. The casino holds the right to shut down a punter’s account and withdraw all winnings/bonuses if they discover that the bettor has created a second account or is playing games using someone else’s account.',
    
        'Also, players must ensure they keep their account details, such as passwords and usernames, safe and confidential to avoid unauthorized access. Punters will bear full responsibility for any illegal activities carried out with their accounts due to carelessness with personal login details.'],

        ['plaza royal', 'Support', 
        'You can reach the Plaza Royal customer care team through live chat or email. However, the live chat option isn’t available 24/7. You can only talk to a member of the customer support team from 8:00 to 00:00 (CET) across all weekdays. There’s also n FAQs section that addresses all the standard hitches punters encounter while wagering or making transactions.'],


        ['dr bet', 'DrBet Review', 
        'Since launching in 2020, Dr.Bet has established itself as one of the best new online casinos in the UK, thanks to its vast game selection, lucrative bonuses, and usable design. A British online casino operated by a British company and licensed by the UK Gambling Commission (UKGC), Dr.Bet already has a strong rapport with players in the UK. Our team of casino experts at Playright.co.uk has set out to review Dr.Bet and find out all there is to know about this all-British casino.'],

        ['dr bet', 'Safety and Trustworthiness', 
        'When you choose an online UK casino from our list of recommended gambling sites, you know it is a 100% safe and legal environment to gamble. Our team of reviewers only recommends casino operators that are fully licensed by a recognized regulatory body. In terms of Dr.Bet, the casino is operated by Rednines Gaming Ltd, a British company licensed by the UKGC.'],

        ['dr bet', 'Deposits & Withdrawals',
            'Dr.Bet Casino makes it simple to deposit and withdraw funds from your casino account. By working with the leading brands in finance, the site gives gamblers numerous safe and easy options for managing their money. Whether you want traditional banking methods, e-wallets, or other digital payment methods, you’ll find them on Dr.Bet.',

            'If you are interested in traditional banking methods, Dr.Bet supports bank transfers from your bank account. While Visa and Mastercard are available, it is worth noting UK casinos are no longer permitted to allow credit card deposits and withdrawals following UKGC regulations. That means you can only use a Visa or Mastercard debit card for payments at Dr.Bet Casino.',

            'Alternatively, you can deposit or withdraw with an e-wallet such as Skrill or Neteller, which adds a middleman service but means you can avoid handing over your financial details to the casino. E-wallets also speed up withdrawals, which are complete within 24 hours (you may be waiting days for a bank/debit card withdrawal). However, it is worth remembering that e-wallets are sometimes not included in online casino bonuses.',

            'You have probably noticed that some big payment methods such as Paypal are not available at Dr.Bet Casino. But with a good selection of banking methods, every UK player is sure to find a way to manage their payments on Dr.Bet Casino.',

            'The minimum deposit is £10, and the monthly withdrawal limit is £50,000. Deposits are instant, except for some bank transfers, and withdrawals can take between a few hours to 5 working days, depending on the payment method used.'],

        ['dr bet', 'Bonuses',
            'If you are reading this review, there is a good chance you want to head to Dr.Bet UK and play some casino games. If you are a new customer to Dr.Bet Casino, you can claim an attractive welcome bonus that our review team rates highly. Our casino experts at Playright.co.uk have gathered for you all the details you need to understand this promotion, including terms and conditions and restrictions.',

            'Dr.Bet combines a traditional deposit match bonus with a bunch of Bonus Spins. Specifically, the casino offers a 100% match on your first deposit of up to £150 and 50 Bonus Spins. It means that Dr.Bet Casino will double your deposit with up to £150 in bonus money.',

            'The 50 Bonus Spins you are entitled to with this offer are given on selected slot games. To claim the Bonus Spins, you need to activate the welcome bonus with your first deposit within 24 hours of registering for Dr.Bet casino. As with most casino bonuses, there is a wagering requirement attached. To withdraw bonus winnings, you will need to wager the bonus money and wins from the Bonus Spins 40x and 50x times, respectively.',

            'All in all, this is a competitive welcome offer that uses a solid deposit match bonus and makes it even more lucrative with Bonus Spins. Although the wagering requirements are slightly high, the terms are still within the acceptable range of UK casino bonus rules. With nearly 2,000 games offered to play at Dr.Bet Casino, it is possible to quickly fulfill the wagering requirement and redeem the'],

        ['dr bet', 'Game Selection',
            'The massive library of games makes Dr.Bet a worthy competitor to some of the UK’s longest-standing online casinos, which we found to be impressive for such a young casino. With nearly 2,000 game titles, of which over 1,750 are slots, Dr.Bet Casino boasts games from the leading names in the iGaming industry. On the casino site, you can find games from Microgaming, NetEnt, Blue Print Gaming, Red Tiger, Evolution Gaming, Elk Studios, NoLimit City, Relax Gaming and more. That gives you an idea of the choice you have when you play Dr.Bet online.',

            'Finding games and moving from game to game on the Dr.Bet casino website is easy. Simple but effective is how we describe the interface because it removes any fuss to make way to easy access to games. You can easily navigate through the clearly marked game sections, bet types, and casino sections. The search function is intuitive and can be used if you want to locate a specific game.'],

        ['dr bet', 'Mobile App',
            'Dr.Bet Casino is a good choice for those who prefer to play casino games on a smartphone or tablet. Built with HTML5 technology, the Dr.Bet website is responsive optimized for mobile browsers. Whether you are on Apple’s iOS, Google’s Android, or a Windows Phone mobile device, you can access the Dr.Bet mobile casino site as you would on a PC.',

            'Most games are available on both mobile and desktop clients. The Dr.Bet user interface is perfectly optimized to provide a seamless experience across PC, Mac and mobile devices. Currently, Dr.Bet Casino does not offer a native mobile app. But we enjoyed an immersive mobile casino experience across the different devices and screen sizes we tested.'],

        ['dr bet', 'Promotions',
            'As well as enticing new players with a healthy welcome package, Dr.Bet also has some fantastic bonuses to keep existing players happy. Once you are a registered player on Dr.Bet Casino, you will also find some weekly promotions available:',

            'Tuesday Bonus: Get a 30% match on a single deposit each Tuesday. The minimum deposit is £30, and the maximum bonus amount is £90. Wagering requirements for the Tuesday Bonus as 50x.',

            'Happy Hour: Get a 20% deposit match and 20 free spins on a deposit of £20 and over from 18:00 to 23:59 each Tuesday. A maximum bonus of £80 is available, with wagering requirements of 50x, while for free spins it is 45x.',

            'Lucky Friday: Claim a 50% deposit bonus match on Fridays. Deposit a minimum of £20 with up to £100 in bonus funds available on a wagering requirement of 45x.',

            'Unfortunately, there is no VIP program currently available on Dr.Bet. Hopefully, this is because the site is still new and growing. We expect to see Dr.Bet debut a VIP program at some point in the near future.'],

        ['dr bet', 'Support',
            'Dr.Bet provides several ways for players to connect with its customer support team. You can email or access 24/7 live chat via the website. At the time of writing this review, Dr.Bet did not offer phone support. We found the lack of phone support disappointing, as it is pretty much the standard amongst UK casinos nowadays. We received responses to our email queries within 24 hours, which is somewhat slow. And although there is a waiting time of a few minutes until chat agents answer, live chat is probably the quickest way to resolve issues.',

            'Although targeting the UK market, it is still worth noting customer support is currently only available in the English language. When speaking with Dr.Bet support agents, our reviewers found the team was helpful and knowledgeable enough to handle most customer-support issues. However, the response times on all channels need to be shortened.'],


        ['energy', 'Energy Casino Review',
            'Our review found Energy Casino to be a great casino. They are responsive and professional – and have a good team running this casino and sportsbook. The site is well-licensed, has a strong track record and has a wide variety of Novomatic games, which can be hard to find at other online casinos.'],

        ['energy', 'First Impression',
            'Energy Casino has quite a cool look and feels to it – and from the moment we landed on the website, we were impressed. The software runs very smoothly, making it quick and easy to work your way around, and the page looks modern, with a slick black colour scheme offering quite an intense look and feel and a superb gaming experience',

            'The site is very easy-to-use and easy to navigate – and it’s also very transparent. You can get answers to almost all questions right from the main homepage (yes, players from the United States and the Czech Republic aren’t able to play at Energy), and the site’s strong licensing, solid reputation, and player-focused approach has allowed it to become among the best leading online casinos on the planet.'],

        ['energy', 'Bonuses and Promotions',
            'Like any reputable casino site, Energy provides a wide variety of promotions and bonuses to entice new players into joining and to improve the gaming experience of those who become regular customers at the site. In the next part of our review, we’re going to take a look at what these bonuses are (including the welcome bonus and other bonuses) and how they stack up against other casinos.',

            'Like any reputable online casino site, Energy Casino provides a welcome bonus to all new players – and this welcome bonus is split into two parts. On your first deposit, you’ll get a 100% matched bonus up to $200, and on your second, it’s a 50% match bonus up to $200.',

            'It’s not an amazing welcome bonus, as bonuses go. When we were writing this online casino review, we would have expected a bit better. Still, the terms and conditions are pretty fair, and the wagering requirements on the first deposit bonus are just 25X, while those for the second are 30X.',

            'In both cases, the requirements must be completed within 30 days; if you fail to do so, you won’t be able to convert your bonus funds to real money.',

            'The max bet when playing with bonus funds at Energy Casino is $5, and certain game restrictions apply; you can only play video slots, and very high RTP games like Blood Suckers are excluded. Information about wagering requirement terms – and how the wagering requirement terms affect your bonus – can be found on the “Promotions” page at Energy.',

            'Unfortunately, as of when we wrote this Energy Casino review, the site wasn’t offering any no-deposit bonuses or no-deposit free spins offers. We’ll update this Energy Casino review if and when their bonus program changes and make sure to provide you with the relevant bonus code, if and when applicable.',

            'In an attempt to improve the experience of all players, Energy Casino automatically enrolls all players into their loyalty program upon sign-up, which comes with bonuses for real money bets. When you place a real money wager at the site, you get to collect what are known as Energy Points. These points, later down the line, can then be redeemed for bonuses, including free spins, matched bonuses and a reload bonus.'],


        ['energy', 'Banking and payment methods',
            'You’ll find a massive amount of payment methods available at Energy Casino, and they cater to players from all corners of the world. You can deposit and withdraw money using: VISA, MasterCard, Maestro, Skrill, Neteller, QIWI, Yandex, Paysafecard, Zimpler, EuTeller, Trustly, MuchBetter, Klarna, Entropay, among others. Bank transfers and withdrawals can be made in certain circumstances – although if using a transfer, it can take more time for the money to arrive from your bank account to the casino.',

            'There are no fees attached for deposits, and Energy Casino credits all funds to your account immediately. The minimum amount is $10-$20 for most payment methods. You can reach out to the support team or check within your account for specific minimum deposit and withdrawal limits for the banking option you’d like to use.',

            'Energy Casino allows you to make withdrawals back to most of the same payment methods you can use for deposits. When you make a withdrawal, it will go into a “pending” state for up to 72 hours, during which – if you’re located outside of the UK – you can cancel it.',

            'Once 72 hours have passed, the casino will process your request, and the delay it then takes for the money to reach you depends on which payment method you’ve chosen to use. There’s a limit of $5,000 per day, and you get one free transaction each week. Subsequent withdrawals incur a fixed fee of $5 per transaction.'],

        ['energy', 'Responsible Gaming',
            'While writing this Energy Casino review, we found that like many of the leading online casino sites, they encourage their players to gamble responsibly, and provide a number of responsible gambling tools which can be implemented directly by the player; you do not need to contact the support team.',

            'You can set a deposit limit and a loss wager limit – both of which can help to prevent how much you’re depositing/wagering – and, if you want to take a break from playing, you can also take a time-out shutting your account for up to 6 weeks.',

            'If you feel that to play responsibly, you need to take a longer break from it, you can also choose to self exclude; this allows you to completely block access to your account for up to 5 years, and this action cannot be undone.'],

        ['energy', 'Customer Support',
            'Energy Casino has fantastic customer support facilities – and when we were writing this Energy Casino review, we found the customer service team to go above and beyond to answer our questions.',

            'There are three ways of contacting the customer support team, live chat, our recommended way of getting in touch. Live chat allows you to speak with a member of the EnergyCasino customer support team in real-time, and it ensures you don’t have to wait long to get your problem/query resolved.',

            'If you’re unable to use live chat – or prefer not to – Energy Casino also provides support via phone and email. We should, however, point out that Energy Casino’s customer support team only operates Monday to Friday, 9:00-00:00 and Saturday and Sunday 13:00-21:00 CET/GMT+1.'],


        ['mrgreen', 'MrGreen Review',
            'A long-standing favorite in Sweden where it was launched back in 2007, its parent company Mr Green & Co AB is listed on the main stock exchange in Stockholm, testament to their size and stature as a major European gambling operator.  In 2017, Mr Green agreed some high-profile sponsorship deals, including the PDC Players Championship Finals in darts and becoming the main casino partner of Celtic FC.'],

        ['mrgreen', 'Safety and Trustworthiness',
            'It’s always a good sign when a casino is backed by a large corporate operator. This gives most players the confidence to trust they are dealing with a legitimate outfit, and that’s guaranteed with Mr Green. With decades of industry experience at management level, and a well-developed reputation as one of the leading names in online casinos, Mr Green can be seen as one of the most trustworthy names in the market.',

            'Mr Green is headquartered in the gambling industry hub of Malta. They are regulated in the UK by the Gambling Commission, one of the most thorough regulators in the sector, to ensure they comply with UK laws and other applicable regulations. This is an essential trust indicator for any online casino, and proves they are operating above board.',

            'When it comes to security, Mr Green has an impeccable track record. The website and mobile platforms are secured, using industry-leading encryption technology – designed to prevent even supercomputer attacks from penetrating their systems. Payments are handled independently, which means Mr Green doesn’t directly collect or store payment information introducing another layer of security through a third-party provider. This reduces the risk of data breaches and fraud to near zero and is the most secure you can expect from any online operator.',

            'A good gauge of security and trustworthiness can be found in the reviews of previous players. As a large casino with a high volume of players, you expect a certain level of negative complaints about Mr Green – especially from players who have lost money, or had their account closed for abusing the terms and conditions. While Mr Green has a few, these are mostly issues around the inconvenience of the verification process.',

            'In reality, this is an anti-money laundering measure, and further proof of Mr Green acting within the law, and in the best interests of their players. Most experienced players already understand there is a need to verify your ID ahead of the first withdrawal and given that this forms the vast majority of the limited number of complaints about Mr Green out there, it’s a sign they must be doing something right.',

            'On balance, it’s hard to imagine a casino that could be more secure or more trustworthy than Mr Green. Backed by a publicly traded company with substantial revenues, compliance teams, security teams, a customer service department – this is a big, reputable business, so you can play here with full confidence.'],

        ['mrgreen', 'Deposits & Withdrawals',
            'Deposits and withdrawals are supported by the the major credit cards and e-wallets. One glaring omission though is PayPal deposits – crucial for any casino that wants to earn its stripes in the UK.',

            'The standard pending time for withdrawals is 24 hours, depending on whether verification has been completed. From there, payouts to e-wallets like PayPal should be with you in under 24 hours, to your debit card in 1-3 days, and similarly up to 3 days in the case of bank account withdrawals. One sour point on Mr Green’s banking is the £1 fee for every £100 withdrawn.',

            'Like all licensed uk casinos you will need to verify your identity on your first withdrawal, which Mr Green makes easy with a special ‘My Home’ section where you can upload scanned copies of verification documents.',

            'Other nice touches we liked on the banking side include its limit controls, allowing you to set your own depositing, loss and wagering limits. This shows Mr Green to be what it is – a classy operator committed to customer care.'],

        ['mrgreen', 'Bonuses',
            'Mr Green welcomes new players with a generous welcome offer, offering up to £100 in bonus cash, plus 200 free slots spins, for new players. This is a 100% deposit match bonus, so the amount you receive in bonus cash depends on the size of your first deposit. The minimum deposit to qualify for this bonus is £20, and it goes without saying that this is valid only for players 18+, and only for those opening their first account with Mr Green.',

            'The free spins are allocated in blocks, with 100 becoming available at the point of the deposit. From there, you are allocated a further 20 spins over each of the next five days, which are eligible only for a selection of their available games.',

            'The main restriction of note here is the wagering requirement, which stands at 35 x, slightly better than the industry average of x 40. That means you need to wager any bonus cash received 35 times before you are eligible for a withdrawal. In the case of the free spins, the same 35 x wagering multiple applies on any winnings made on the free spins.',

            'Note that table games do not count towards the wagering requirement for bonus cash – only slots, bingo and keno play will contribute to the wagering, so choose your games wisely. This may seem inferior to other casinos which may offer a 20% contribution on roulette or blackjack. In practice though to clear a bonus, you need to play a game which offers a 100% or 1-1 contribution to the bonus.Note that table games do not count towards the wagering requirement for bonus cash – only slots, bingo and keno play will contribute to the wagering, so choose your games wisely. This may seem inferior to other casinos which may offer a 20% contribution on roulette or blackjack. In practice though to clear a bonus, you need to play a game which offers a 100% or 1-1 contribution to the bonus.',

            'Some individual slots are also excluded from contributing to the wager, so it’s worth consulting the terms and conditions in more depth before working out how best to deploy your bonus cash.',

            'As bonuses go Mr Green’s offer is fairly straightforward, reasonable, and not positioned wholly to the disadvantage of the player. With a number of online casinos, they offer an attractive welcome bonus, only to sting you with unbelievable restrictions like super-high wagering requirements, impossibly tight timescales, and skewed contribution percentages.',

            'With Mr Green, these terms are all reasonable, and their terms and conditions are clear and easy to understand. When you weigh it up, this bonus offer compares very strongly to some of the other offers out there, and while the wagering is not especially lower than average, it’s refreshing to see a casino that plays a bit straighter than most with its customers.',],

        ['mrgreen', 'Game Selection',
            'Mr Green is particularly strong on the games front, offering a collection of 386 slots and 50 jackpot slots, as well as big collections of table games, live games, virtual sports and instant wins. This combines to create a very solid game catalogue. It may not be as big as the likes of Dunder, Casumo or Videoslots which offer 600+, but certainly more than enough to keep most players busy.',

            'One of the best elements here is the sheer number of different software developers contributing games to the lineup. While most casinos have deals with  two or a few different developers, Mr Green has gone to great lengths to diversify their catalogue. You’ll find games from NetEnt, Playtech, Microgaming, Betsoft, NYX, IGT, Williams Interactive, Blueprint Gaming, Elk Studios, Yggdrasil – the list goes on and on. This gives their site more diversity than most and is especially handy if you prefer a certain specific game, or games from select developers.',

            'Slot highlights include emojiplanet, Immortal Romance, Jack Hammer, and the Mr Green exclusive Mr Green’s Grand Tour, while the best of the table game action can be found in the likes of 6 in 1 Blackjack and Double Ball Roulette.',

            'Naturally, their software performs well, on both desktop and mobile platforms. The games load quickly and play without disruption. The only exception is the live casino, which relies more on players having a reasonably modern computer or mobile system, but in the vast majority of cases, even the live gaming runs without a hitch.'],

        ['mrgreen', 'Mobile App',
            'Mr Green’s casino app has won multiple awards, including at the prestigious iGaming Awards, where they scooped prizes for their apps in 2013, 2014, 2015 and 2016. This should give you an idea of how strong Mr Green is on mobile – their apps remain amongst the best you’ll find from any other casino.',

            'There are apps available for Android and iOS users respectively, which are available to download for free. You’ll find offers and promotions exclusive to the apps, as well as access to a large selection games, great features like Touch ID login (for iOS users), and easy access to Green Gaming, to unlock the full range of customisations available.',

            'The app graphics are stylish and intuitive, providing a similar experience to the website. The games load quickly, and the apps are incredibly stable to use, so all in all it’s a thumbs up for the Mr Green mobile experience.',

            'Alternatively, you can also enjoy Mr Green through any mobile device browser, simply by heading to the website. Designed to be fully responsive for a native experience on any smart device screen, you’ll have no difficulty gaining access to great gaming on your mobile.'],

        ['mrgreen', 'Promotions',
            'It’s not just new players that get all the glory – Mr Green also has a number of bonuses and promotions aimed at their loyal player base, to encourage you to stick around. The promotions are time-limited and regularly updated, and you can find the latest details on the Promotions page. There’s a good spread here too, with promotions including the chance to Win a Trip to Santorini and a share of €5,000, or the £20,000 LIVE Beyond LIVE challenge, where players can earn the chance to win a share of the prize fund from live casino gaming.',

            'Mr Green also offers a loyalty and VIP programme, where high rollers can expect the red carpet treatment. This includes access to a dedicated account manager, cashback every month, special bonuses and prizes, and much more.'],

        ['mrgreen', 'Review Summary',
            'It’s clear that the team behind Mr Green understand what it takes to keep players happy. Their previous experience setting up Betsson clearly informed and inspired the direction of travel for Mr Green, which has now grown to become an arguably more well-known operator in European markets.',

            'While this is a highly respected, trustworthy company, the real strengths of Mr Green are in the selection of games, from a lineup of some of the very best slots developers in the world. Similarly, their award-winning mobile apps are second to none, and make sure you get the best experience possible when playing from a mobile device.',

            'Our major gripe is the lack of PayPal deposits and if we’re being critical there are more generous welcome bonuses out there – but even as it stands, the bonus on offer is fair and about average for good online casinos.',

            'On that basis, a 9 out of 10 feels fair for Mr Green – almost full marks, for an online casino that has a great deal to offer its players.'],


        ['luck land', 'Luck Land Review',
            'If you’re looking to get lucky at an online casino, there’s nowhere better to do it than at LuckLand casino. Start by claiming an awesome welcome package, then take advantage of exciting regular promotions and Exclusive Club rewards. You can play the best slots and games from over 40 top software providers. Other plus points at this secure casino include a great choice of payment methods and friendly client support. Find out more about LuckLand casino below and claim your welcome package today.'],

        ['luck land', 'Luckland Casino Bonuses and Promotions',
            'A generous new player welcome package means you’ll get lucky straight away at LuckLand casino. Deposit bonuses can be claimed quickly and used to play a big choice of top slots. Your first deposit will also be rewarded with extra spins to play on a popular specified slot. Our LuckLand casino review experts think this offer is the perfect way to start playing at this impressive gaming site.',

            'Make sure you also check out the LuckLand casino promotions page, as this is where you’ll find some great existing player promotions, including regular bonuses. Free spins offers, big-prize raffles, and slot game challenges are more top reasons to play regularly at LuckLand casino.',

            'Our review of LuckLand casino also revealed seven levels of Exclusive Club rewards. You’ll earn loyalty points for playing slots and games, and these can be exchanged for cash and will help you upgrade your status. Weekly free spins and tournament invites are available from just the second level, while high rollers can take advantage of personalized offers. This is another massive incentive to sign up.'],

        ['luck land', 'Software and Other Promotions',
            'Our LuckLand casino reviewers discovered hundreds of quality slots from over 40 of the best software providers. Spin new slots from Red Tiger Gaming or featured games from iSoftBet. There are also video slots from Play’n GO and classic slots from PariPlay. Other big-name game makers that catch the eye include Microgaming, ELK Studios and Blueprint Gaming, to name but a few.',

            'In the LuckLand casino games section, there are many popular table games you can play in-house or against live dealers. There’s the chance to play many types of live roulette powered by Evolution Gaming and Ezugi, or try your luck playing live blackjack or baccarat.',

            'Scratchcards are also popular at LuckLand casino, with eye-catching titles including Power Cash, 3 Rocks, and Hit the Bank. Our LuckLand casino review team thinks this superb choice of games is another huge reason to sign up and play here regularly.'],

        ['luck land', 'Banking and Cashouts',
            'There is an excellent variety of payment methods at LuckLand casino, including credit cards and e-wallets. Not all options are available in every country but many jurisdictions benefit from localized payment methods. For example, you can fund your casino account using Interac. Simply click on any deposit method symbol for full details or contact the cashier to discuss your best payment options.',

            'Deposit and withdrawal limits may vary according to jurisdiction and loyalty status. Cashouts can be reversed at any point during the pending process, after which they’ll be credited within three to eight days. Our LuckLand reviewers reported an SSL encryption is used to process all financial transactions and personal data in compliance with the Malta Gaming Authority, which makes this a secure gaming site.'],

        ['luck land', 'Support at Luckland Casino',
            'LuckLand is an online casino whose ethos is “customers are really everything”, so it’s great their support backs this up. There’s a help center where you can browse through useful information for topics such as deposits, cashouts, and bonuses. There’s also an FAQ with answers to many popular questions, as well as an email contact form.',

            'But our LuckLand casino reviewers prefer the live chat option, which is available on mobile, tablet, and desktop between 06.00 – 23.00 (GMT). We tested this service several times and are delighted to report response times were quick and live agents were extremely professional.'],

        ['luck land', 'Our Verdict of LuckLand Casino',
            'A fun experience and the chance to get lucky is what LuckLand casino is all about. Your adventure starts with several welcome deposit bonuses and spins. You can then continue to benefit from lots of existing player promotions and Exclusive Club loyalty rewards.',

            'Promotions are designed to make playing slots and casino games even more entertaining. A license from the Malta Gaming Authority also ensures LuckLand is safe and fair, while premium customer support is there if you need it. Taking all these highlights into account, our LuckLand casino review experts are thrilled to recommend this gaming site to you.'],


        ['play ojo', 'Play Ojo Review',
            'Since its UK launch in 2017, PlayOJO Casino has operated under the mantra of offering a fairer deal to players. It has, in fact, a manifesto on its website, which lays out PlayOJO’s commitment to things like transparent bonus terms, no wagering requirements, etc. It seems to be hitting the right note, as PlayOJO has received several prestigious awards, including the EGR Rising Star Award and SIGMA Casino of the Year. It is owned and operated by SkillOnNet, a renowned casino software and platform developer.'],

        ['play ojo', 'Safety and Trustworthiness',
            'PlayOJO Casino is licensed by the UK Gambling Commission, regarded as one of the world’s respected regulatory bodies. If a casino has accreditation from the UKGC, it must have proven it has taken steps toward player safety and fairness. For players outside of the UK, PlayOJO has a license from the Malta Gaming Authority.  The MGA is a similarly respected regulatory body, adding another seal of trust to this brand.',

            'Fair gaming at PlayOJO is tested by iTech Labs, another independent body with an excellent reputation. A link to the latest RNG (Random Number Generator) certificate from iTech Labs is provided at the bottom of the PlayOJO homepage. PlayOJO does not seem to provide payout reports for individual games, but a total payout amount for all games is displayed on the website. The latest SSL Secure technology is used to ensure that your details are kept safe.',

            'PlayOJO is owned and operated by SkillOnNet, a company possibly more recognised for creating games and building casino platforms than operating them. SkillOnNet has a positive reputation in the industry and operates several other casino sites.',

            'PlayOJO has received lots of positive feedback from players and respected review sites. Whilst, it’s been accredited by Casinomeister, winning its Best New Casino award last year,  The POGG, a site that focuses on player disputes, has given PlayOJO a score of zero in trustworthiness and software. However, this seems to be borne out of an unresolved issue over a particular type of SkillOnNet software. In short, we advise you not to read too much into this.'],

        ['play ojo', 'Deposits & Withdrawals',
            'PlayOJO offers a wide range of deposit and withdrawal options, including all three of the most popular internet wallets – PayPal, Skrill and Neteller. Commitment to fast withdrawal times – PlayOJO aspires to instant processing – is also a major plus point.'],

        ['play ojo', 'Bonuses',
            'At first glance, PlayOJO’s Welcome Bonus is not very enticing. You will receive one free spin (10p value) on Book of the Dead Slot for every £1 deposited, with a maximum of 50 free spins available from a £50 deposit. The upshot of this is that there are no wagering requirements, maximum win limits or any other restrictions.',

            'The welcome bonus is obviously nowhere the headline-grabbing giveaways of other casinos, nor is it supposed to be. While we would like to see the value of those spins a bit higher, and we appreciate that it’s not very exciting for high rollers, there is currently an appetite for these no-strings-attached bonuses. It can be refreshing to play with bonus cash knowing there are no play through requirements are other small print pitfalls.'],

        ['play ojo', 'Game Selection',
            'PlayOJO Casino offers games from many of the top developers. These include: Microgaming, NetEnt, AMAYA, Barcrest and Yggdrasil. As you might expect, a handful of games (36, mostly video poker) have been provided by SkillOnNet through its GVG games arm.',

            'In total, PlayOJO has a selection of over 1000 games. An innovative search menu has been installed on the site, allowing you to find games based on recommendations by other players (they have a star rating), by genre, by developer and by theme (Sci-Fi, Action, Mythology, etc.). There is even a function – not often seen in online casinos – where you can search for games based on minimum/maximum bet levels and volatility.',

            'In a sense, the layout of the site is both a strength and a weakness for PlayOJO. On one hand, it’s fantastic to be able to search for games by theme or player rating. On the other hand, there are so many sections, not to mention the fact that the site is presented in such a kaleidoscope of colour, that it can actually feel a bit overwhelming at times. However, this is a very minor criticism and PlayOJO should be commended for trying to do something different.',

            'As with most casinos, the majority of games are slots. Totalling around 830, with plenty of player favourites like Amazon Queen, Starburst, Mega Moolah, Gold Factory, Vikings Go Berzerk and Game of Thrones. Of course, having so many titles from a broad range of software developers means you can discover less well-known slots like Explodiac, Deco Diamonds and Temperance.',

            'A choice of 22 jackpot slots is a little disappointing, given the sheer number of games on the site. However, PlayOJO redeems itself somewhat by having some of our favourites like Mega Moolah, Hall of Gods and Slots O’Gold among its selection. Jackpot wins seem to occur quite regularly on the site. At the time of writing, PlayOJO is highlighting how a player won £100k on Top Cat slot from an 80p spin.',

            'Thankfully, the huge choice of slots does not lead to any compromise in terms of other games. PlayOJO has a brilliant live casino, powered by Evolution and Extreme, where you will currently find 81 live dealer tables. There is a nice selection of roulette, blackjack and poker, as well as Evolution’s popular Dream Catcher. A lack of craps (both virtual and live dealer) and three-card poker seems to be the only downside. Virtual (non-live) roulette, poker, blackjack and baccarat are, of course, all available. A distinct lack of arcade games and scratchcards might cause a few grumbles though.'],

        ['play ojo', 'Mobile App',
            'The PlayOJO Casino app can be downloaded for Android and iOS mobile phones/tablets. You can also play the games instantly through your mobile browser. While there is not a massive difference between the app and instant play on mobile, the former option is somewhat slicker and easier to use.',

            'The app suffers from the same drawbacks as the desktop site in the sense that there is possibly too much happening on the screen. All those cool search functions previously mentioned from the desktop site are present, but, overall, a more minimalistic approach to the layout might be appreciated by players. Again though, this might be verging on nit-picking.',

            'The mobile app does not have the full game choice of the desktop casino. For example, you can choose from 401 slots. PlayOJO has made sure that all the standout games are available in mobile format, including Book of the Dead, Rainbow Riches, Medusa and Immortal Romance. 44 live dealer tables can be accessed through the mobile site.',

            'There are no discernible benefits to playing on mobile over playing on desktop, as PlayOJO does not seem to differentiate between the two platforms. Overall, the mobile experience is fine, yet not spectacular. It would be nice to have seen PlayOJO take a different approach to mobile casino given the innovations made in other areas.'],

        ['play ojo', 'Promotions',
            'As mentioned, PlayOJO Casino was launched with a stated goal of being fair to players. One of the slogans for the site was “Rewarding Players without the Bonuses”. That tagline is a little misleading; There are some promotions and bonus awards at PlayOJO. Rather it serves to highlight the fact that there are no terms attached to your bonus offers, i.e. it is ‘cash’ not ‘bonus cash’.',

            'The basic promotion programme is titled ‘Kickers’. Essentially, it means you will receive awards by email, often on a daily basis. These could be free spins, cashback offers, etc. As a rule, they are not spectacularly huge awards, but that’s understandable when there are no wagering terms. A Kicker could also give you the chance to spin the OJO Wheel, which could lead to bigger prizes like cars and holidays.',

            'The loyalty scheme, Club OJO, tends to focus on giving you more opportunities to spin the OJO Wheel. There are, in fact, three OJO Wheels, each with greater prize opportunities as you progress through the loyalty levels. A cashback on bets scheme is also operated.',

            'The VIP Scheme, A-Listers, is by invitation only. Again, PlayOJO has tried to do something innovative in this area. Aside from all the usual VIP perks, you can avail of the OJO Plus cashback scheme. There is no limit to the amount you can earn and there are no restrictions on withdrawals, etc.',

            'The way PlayOJO has framed it is that playing a slot with an RTP of 96.4% would effectively mean you are playing at an RTP of 97.00%. While that may not look like much to the casual player, it is something high rollers should see as a big plus. The cashback is available on all games, even those with an unusually high RTP.'],

        ['play ojo', 'Support',
            'PlayOJO can be contacted 6 to midnight via live chat, lack of phone support is a small negative.'],


        ['dream vegas', 'Dream Vegas Review',
            'Dream Vegas Casino is relatively new on the scene of the online gambling world having been established in 2018 however the casino offers plenty of exciting games, big jackpots and interesting bonuses to help you dream big and give you the full Vegas experience. Dream Vegas is owned by Caddell Limited NV and operated by white Hat Gaming which are both based in Malta and manage a number of online casinos. The offer of a generous welcome bonus, extensive games catalogue and attractively designed site should be enough to tempt you, but read on for our full review and find out if you’ll be dreaming of Las Vegas whilst playing at Dream Vegas Casino.'],

        ['dream vegas', 'Safety and Trustworthiness',
            'The trustworthiness of a casino is one of the first things you should be looking into when deciding if it’s worth your time to sign up and play. It’s always important to ensure that the online casino is fully licenced, which in this case it is, Dream Vegas is licenced by both the United Kingdom Gambling Commission and the Malta Gaming Authority. On top of this Dream Vegas are independently audited by eCOGRA who are responsible for the testing and assurance of many online casinos in order to ensure that the services offered are completely fair and also to help prevent fraud and that pay outs are fast and accurate. eCOGRA produce reports on return to player percentages which are available on the website of Dream Vegas.',

            'Despite all of the accreditations and licences, there have been some complaints online on various forums about the transparency of the bonus system, speed of pay-outs and pay-outs sometimes being withheld without a clear reason given.'],

        ['dream vegas', 'Deposits & Withdrawals',
            'Dream Vegas offer a range of payment and withdrawal methods to customers including most of the big names and you will typically have to wait at least 48 hours for a withdrawal to be processed, so long as ID verification has been provided. After that the time the withdrawal takes to reach you will depend on the type of transfer you chose, with Ewallets typically being the fastest method for withdrawal. There is unfortunately a withdrawal limit for non VIP players which at the moment is set at £5000 per week and in addition to this the minimum withdrawal you can make is £20.'],

        ['dream vegas', 'Bonuses',
            'Dream Vegas offer a fantastically generous welcome bonus for new members in the UK, giving you 120 bonus spins on any Net Entertainment slot game and up to a £2500 matched bonus. This bonus is split between three separate deposits and it is split in a way that offers great value to both casual customers and the more serious players.',

            'Your first deposit will be matched 100% up to £300 and give you 150 bonus spins, your second deposit will be matched 40% up to £3000 and award 30 bonus spins and a third deposit will be matched 60% up to £1500 whilst giving you 40 bonus spins. The minimum deposit needed for any of these bonuses is £20. Of course terms and conditions do apply to the bonuses and they cannot be withdrawn until each bonus amount and deposit amount has been wagered 35 times. On top of this there are maximum bet amounts of £5 for each wager. This of course means that it can take quite some time to turn your bonus into real cash but the large value of the total bonus is still enough to tempt most players into trying their luck. As long as the wagering requirements have been met within 30 days, both the bonus funds and their winnings will remain on your account.',

            'In addition to this welcome bonus Dream Vegas Casino offer an interesting game mode called “Car or Cash” whereby playing certain games will award your account with points which are then used to enter you into a prize draw, potentially winning the top prize of a brand new Range Rover which can be traded for cash if you prefer.'],

        ['dream vegas', 'Game Selection',
            'One of Dream Vegas Casino’s main selling points is their wide selection of fantastic games available meaning you’ll always have something new to play from over 40 top developers such as Net Entertainment, Microgaming, ELK studios, 2 by 2 Gaming and many more. The wide range of developers means there’s a lot of variety on offer for customers and you’ll find that there are many cutting edge newer games and also much loved classics available.',

            'In total there are over 500 slot games available at Dream Vegas Casino, with such a huge number you might think that navigating through them would be difficult but the website is intuitive to use and features a search function so you can easily find your favourite game. There are some of the most popular games such as Starburst, Danger High Voltage, Rainbow Riches and Aloha Cluster Pays. Also included on the site are more than 20 different jackpot slots, should you want to try your hand at going for the bigger prizes. And of course it wouldn’t be much of a casino without also offering traditional table games such as black jack, poker and roulette, all of which and more are available to play at tables with different stake sizes so you can play with £0.01 or thousands.',

            'Dream Vegas also offer a live casino experience in which you are able to choose from any table game and play with a real live dealer in high stakes games.'],

        ['dream vegas', 'Mobile App',
            'Dream Vegas Casino doesn’t have a mobile app available for download but the site is perfectly optimised for use on all devices including IPhones, tablets, Android devices and Windows phones. Because there is no specific app to download, you’ll find that the mobile site works exactly the same as on the desktop, with all games and offers fully available and navigation through the mobile site is just as simple to use as on the main site.'],

        ['dream vegas', 'Promotions',
            'In terms of promtions for current players Dream Vegas offer a series of progressive jackpots to players, giving a chance of winning massive cash prizes.',

            'There’s also the Car or Cash prize draw, where 1 point is earned for every £20 which is deposited and wagered twice. Upon earning 500 points the customer is entered into the prize draw with an unlimited number of entries allowed. The prize draw is determined by chance but of course a higher number of entries gives you a higher chance of winning the prize, which you can choose to either keep the brand new car or exchange it for cash at a value of 75% of the car.',

            'Dream Vegas also features a pretty exclusive tiered VIP experience with four different levels to reward high value customers more depending on their needs. The first level offered is the Silver Lounge which gives access to priority customer support 24/7, offers higher bonus rewards, tailor made cashback offers, access to private VIP events and tournaments and also 10,000 birthday loyalty points. The next level is the Gold Lounge which gives you the benefits of the previous level and includes your own personal account manager, bonus funds of up to £500, free tournament entry, faster withdrawals and twice as many birthday loyalty points. The Platinum Lounge again has the same rewards as previous levels but with free entry to “high roller” tournaments, a bonus of up to £1000, same day withdrawals and a lavish birthday gift. Finally there is the Salon Privé, which is so exclusive it is invite only and the details of the benefits available are only given to successful applicants. '],

        ['dream vegas', 'Support',
            'Although there is no telephone line, live chat is available for customer support on the Dream Vegas site 24/7 and answers to queries are fairly prompt. You can also email customer services with an issue or question and the response times are quick, usually around 20 minutes during working hours.']


    );
    
    public static $lnk_db = -1;

    public static $glocal = 'localhost';
 
    public static function host_name()
    {
        return $_SERVER['HTTP_HOST'];
    }

    public static function host_protocol()
    {
        return ($_SERVER['SERVER_PORT']==='443') ? 'https' : 'http';
    }

    public static function full_host_name()
    {
        return config::host_protocol().'://'.$_SERVER['HTTP_HOST'];
    }

    public static function https_host() { return 'https://'.$_SERVER['HTTP_HOST']; }

    public static function get_catalog_cookie()
    {
        $catalog_cookie = '/';
        return $catalog_cookie;
    }

    public static function get_google_ga()
    {
        if (functions::isset_cookie_connect('_ga'))
        {
            $ga = functions::cookie_connect('_ga');
            $ga = mb_substr($ga,mb_strpos($ga,'.')+1);
            $ga = mb_substr($ga,mb_strpos($ga,'.')+1);
            return $ga;
        }
        return '';
    }

    public static function localversion()
    {
        if (config::host_name()=='ongameuk') return true; else return false;
    }

    public static function get_ipadress()
    {  
         if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
             $ip = $_SERVER['HTTP_CLIENT_IP'];  
         } // ip is from the proxy  
         elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                 $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
         } // ip is from the remote address  
         else{  
         $ip = $_SERVER['REMOTE_ADDR'];  
         }  
         return $ip;
    }

    public static function intlversion()
    {
        if (config::get_ipadress()=='89.22.47.19') return '1'; else return '0';
    }

 }

 
    
?>