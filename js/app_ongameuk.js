var app_ongameuk = 
{

    mailto: 'mailto:contact@ongameuk.io',

    text_small_linkk_move: false,
    card_text_small_modal_move: false,
    rating_box_move: false,
    review_page_move: false,

    bonus_number: 0,
    link_redirect: false,

    ratings_bname_clicked: new Array(),

    links: {

        // ВАЖНО! - очередность списка должна совпадать с фактической очередностью в main коде, иначе будет неверная переадресация


        //  -> 1

        /* TOP CASINO SITES */
        
        /*
        'bet365':'https://ms-track.club/click.php?key=6pu0u8ypkskezswyhgtj',
        'grosvenor':'https://ms-track.club/click.php?key=etkokzyv139vi5d5m47t',
        'grand ivy':'https://ms-track.club/click.php?key=yb2n1cbyq3e5m4uy8if0',
        'plaza royal':'https://ms-track.club/click.php?key=73dtkoahpjwgtp9gjcdi',
        'dr bet':'https://ms-track.club/click.php?key=n0lnptfvos9yb1558k8t',
        'energy':'https://ms-track.club/click.php?key=6jh1r1nnoencdnv6lbzi',
        'mrgreen':'https://ms-track.club/click.php?key=ogrfe5v4lcvfy1p6vkdt',
        */

        /* TOP LIVE CASINO SITES */
        
        /*
        'luck land':'https://ms-track.club/click.php?key=mkcf59vbsunthlj9mwum',
        'play ojo':'https://ms-track.club/click.php?key=m7zr6o3mvrma0li5jwpf',
        'dream vegas':'https://ms-track.club/click.php?key=10fc4nhya0gi7azbj13y'
        */

        
        //  -> 2

        /* TOP CASINO SITES */
        
        'grand ivy':'https://ms-track.club/click.php?key=yb2n1cbyq3e5m4uy8if0',
        'energy':'https://ms-track.club/click.php?key=6jh1r1nnoencdnv6lbzi',
        'bet365':'https://ms-track.club/click.php?key=6pu0u8ypkskezswyhgtj',
        'dr bet':'https://ms-track.club/click.php?key=n0lnptfvos9yb1558k8t',
        'grosvenor':'https://ms-track.club/click.php?key=etkokzyv139vi5d5m47t',
        'plaza royal':'https://ms-track.club/click.php?key=73dtkoahpjwgtp9gjcdi',
        'mrgreen':'https://ms-track.club/click.php?key=ogrfe5v4lcvfy1p6vkdt',

        /* TOP LIVE CASINO SITES */
        
        'luck land':'https://ms-track.club/click.php?key=mkcf59vbsunthlj9mwum',
        'play ojo':'https://ms-track.club/click.php?key=m7zr6o3mvrma0li5jwpf',
        'dream vegas':'https://ms-track.club/click.php?key=10fc4nhya0gi7azbj13y'


    },
    
    blprms: {
        'ua':'',  // {ua}
        'tid':'', // {tid}
        'cid':'', // '_ga' parameter {cid}
        'el':'',  // {el}
        'ev':'',  // {ev}
        'cs':'',  // {source}
        'cm':'',  // {medium}
        'cn':'',  // {campaign_name}
        'ck':'',  // {keyword}
        'cc':'',  // {adcontent}
        'cd1':''  // '_ga' parameter {cid}
    },

    ready:function()
    {
        app_ongameuk.anchors_refresh_position();
        app_ongameuk.event_settings();
    },

    anchors_refresh_position(timeout=500)
    {
        setTimeout(function(){
            let anchor = location.href;
            if (anchor.indexOf('#')!=-1)
            {
                anchor = 'id_'+anchor.substring(anchor.indexOf('#')+1).replace('-','_');
                if (getid(anchor)) 
                {
                    let y = absPosition(getid(anchor),'y');
                    if (anchor=='id_license') 
                        y = absPosition(getid(anchor),'y')+$(".cls_main_scroll_content").height();

                    if (anchor=='id_license') { // За пределами контента в скролле, поэтому выполняем
                        $('html').animate({scrollTop:10000});
                    }
                    else
                    {

                        setTimeout(function(){
                            $('.header_menu_link').removeClass('active');
                            if (anchor=='id_top_casino')
                            {
                                $('#id_lnk_top_casino').addClass('active');
                            }
                            else
                            if (anchor=='id_slots')
                            {
                                $('#id_lnk_slots').addClass('active');
                            }
                            else
                            if (anchor=='id_about_us')
                            {
                                $('#id_lnk_about_us').addClass('active');
                            }
                            else
                            if (anchor=='id_contact')
                            {
                                $('#id_lnk_contact').addClass('active');
                            }
                        },500);

                        $('html').animate({scrollTop:y-100});
                    }
                }
            }
        },timeout);
    },

    get_rating_format(rating)
    {
        if (rating>1000) 
        {
            rating = ((rating/1000)+'').replace('.',',');
            let x = rating.indexOf(',');
            if (x!=-1) { 
                rating_tmp = rating.substring(x+1); 
                if (rating_tmp.length==1) rating_tmp+= '00';
                else
                if (rating_tmp.length==2) rating_tmp+= '0';
                else
                if (rating_tmp.length>3) rating_tmp = rating_tmp.substring(0,3);
                rating = rating.substring(0,x)+','+rating_tmp;
            }
            else
            {
                if (rating.length==1) rating+= ',000';
                else
                if (rating.length==2) rating+= ',000';
                else
                if (rating.length==3) rating+= ',0';
            }
        }
        return rating;
    },

    event_settings()
    {
        /*
        if (location.href.match(/.*?.*-/))
        $('.cls_logo_ico').css({'cursor':'pointer'});

        $('.cls_logo_ico').click(function()
        {
            if (location.href.match(/.*?.*-/))
            location.href = '/';
        });
        */

        let obj_ratings = $('div').find('.ratings');
        for (let i=0;i<obj_ratings.length;i++)
        {
            let rating = app_ongameuk.ratings[obj_ratings[i].getAttribute('bname')];
            $(obj_ratings[i]).html('Rated by ('+app_ongameuk.get_rating_format(rating)+')');
        }

        $(window).scroll(function()
        {
            $('.header_menu_link').removeClass('active');
        });
        
        // клик в шапке меню
        $('.header_menu_link').click(function()
        {
            app_ongameuk.anchors_refresh_position(0);
        });

        // клик в форме - "отправить" (футер)
        $('.cls_but_send').click(function()
        {
            app_ongameuk.but_send_form();
        });

        // клик рейтинг stars
        $('.fa-star').click(function()
        {
            app_ongameuk.but_send_rating(this);
        });

        // клик на лого с других страниц
        $('.logo .lazy').click(function()
        {
            if (location.href!=https_host)
            location.href = https_host;
        });

        // клик в меню по ссылке (шапка и футер) .cls_bonus_button, .cls_bonus_link, 
        $('.card, .top-card').click(function()
        {
            if (app_ongameuk.review_page_move) return true;

            if (app_ongameuk.text_small_linkk_move || app_ongameuk.card_text_small_modal_move || app_ongameuk.rating_box_move) return false;

            var bname = this.getAttribute('bname');
            let redirect_link = app_ongameuk.links[bname];
            
            let bonus_number = '?', bnum = 0;
            for (id_bname in app_ongameuk.links)
            {
                bnum++;
                if (id_bname==bname) { bonus_number = bnum; break; }
            }

            if (getid('id_bonus_link'+bonus_number) && redirect_link && redirect_link.length>0)
            {   
                window['prm_values'] = '&';

                for (id_prm in app_ongameuk.blprms) {
                    if (id_prm=='cid') app_ongameuk.get_cookie_ga_refresh();
                    window['prm_values']+= id_prm+'='+app_ongameuk.blprms[id_prm]+'&';
                }

                if (window['prm_values'].length>1) window['prm_values'] = window['prm_values'].substring(0,window['prm_values'].length-1); else window['prm_values'] = '';
                app_ongameuk.open_ahref('rect_bonus_click', redirect_link+window['prm_values'], bonus_number);
            }
            else if (app_ongameuk.loc=='1') alert('local -> cancel click -> redirect_link='+redirect_link);
        });

        // клик в меню по ссылке (футер)
        $('.cls_fl_href').click(function()
        {
            if ($(this).hasClass('cls_footer_logo1')) app_ongameuk.open_ahref('footer_logo_click', 'https://www.gamcare.org.uk/', '1');
            else
            if ($(this).hasClass('cls_footer_logo2')) app_ongameuk.open_ahref('footer_logo_click', 'https://playright.co.uk/', '2');
            else
            if ($(this).hasClass('cls_footer_logo3')) app_ongameuk.open_ahref('footer_logo_click', 'https://www.begambleaware.org/', '3');
            else
            if ($(this).hasClass('cls_footer_logo4')) app_ongameuk.open_ahref('footer_logo_click', 'https://ecogra.org/', '4');
            else
            if ($(this).hasClass('cls_footer_logo5')) app_ongameuk.open_ahref('footer_logo_click', 'https://www.gamblingtherapy.org/', '5');
        });

        $('.card-text_small_linkk').mousemove(function()
        {
            app_ongameuk.text_small_linkk_move = true;
        }).mouseleave(function(){
            app_ongameuk.text_small_linkk_move = false;
        });

        $('.card-text_small_modal').mousemove(function()
        {
            app_ongameuk.card_text_small_modal_move = true;
        }).mouseleave(function(){
            app_ongameuk.card_text_small_modal_move = false;
        });

        $('.rating-list').mousemove(function()
        {
            app_ongameuk.rating_box_move = true;
        }).mouseleave(function(){
            app_ongameuk.rating_box_move = false;
        });
        
        $('.review-page').mousemove(function()
        {
            app_ongameuk.review_page_move = true;
        }).mouseleave(function(){
            app_ongameuk.review_page_move = false;
        });
    },
    
    get_cookie_ga_refresh:function()
    {
        let cookies = document.cookie.split('; ');
        for (let i=0;i<cookies.length;i++)
        {
            prm = cookies[i].split('=');
            if (prm[0]=='_ga') { 
                app_ongameuk.blprms['cid'] = prm[1].substring(prm[1].indexOf('.')+1);
                app_ongameuk.blprms['cid'] = app_ongameuk.blprms['cid'].substring(app_ongameuk.blprms['cid'].indexOf('.')+1);

                app_ongameuk.blprms['cd1'] = app_ongameuk.blprms['cid'];
                return; 
            }
        }
    },

    open_ahref:function(type_click, ahref, bonus_number)
    {
        if (app_ongameuk.link_redirect) { app_ongameuk.link_redirect = false; return; }

        if (app_ongameuk.loc=='1')
        { alert('заблокировано в локалке: '+ahref); return; }

        app_ongameuk.link_redirect = true;
        
        if (type_click=='footer_logo_click')
        location.href = ahref;
        else
        {
           $('#id_bonus_link'+bonus_number).attr('href',ahref); // change link
        getid('id_bonus_link'+bonus_number).click();
        }
        app_ongameuk.link_redirect = false;
    },

    but_send_form:function()
    {
        ajax_loading(true);
        let get_params = `&q=send_form&from_name=${encodeURIComponent($('#id_form_name').val())}&from_email=${encodeURIComponent($('#id_form_email').val())}&msg=${encodeURIComponent($('#id_form_msg').val())}&msgsk=${$('#id_form_msgsk').val()}`;
        $.ajax({ 
            url: https_host+"index.php?ajax_controller=ajaxController"+get_params, 
            type: 'GET',
            cache: false,
            success: function(html)
            {
                ajax_loading(false);
                
                setTimeout(function(){
                    if (html=='err_form_email') { $('#id_form_email').focus(); alert('E-mail is not correct'); }
                    else
                    if (html=='err_form_name') { $('#id_form_name').focus(); alert('Name is not correct or some characters are not allowed'); } 
                    else
                    if (html=='err_form_msg') { $('#id_form_msg').focus(); alert('Description is not correct or some characters are not allowed'); }
                    else
                    if (html=='send_msg') { alert('Message sent'); location.reload(); }
                    else
                    alert('Error send form. Server response:'+html);
                },100);

            },
            error: function (jqXHR) {
            }
        });
    },

    but_send_rating:function(this_obj)
    {
        let bname = $(this_obj).parent().attr('bname');
        if (typeof app_ongameuk.ratings_bname_clicked[bname] != 'undefined' && app_ongameuk.ratings_bname_clicked[bname]==1) return;

        ajax_loading(true);
        let get_params = `&q=add_rating&bn=${encodeURIComponent(bname)}`;
        $.ajax({ 
            url: https_host+"index.php?ajax_controller=ajaxController"+get_params, 
            type: 'GET',
            cache: false,
            success: function(html)
            {
                ajax_loading(false);
                
                if (html.indexOf('result:ok:')!=-1)
                {
                    let obj_ratings = $('div').find('.ratings');
                    for (let i=0;i<obj_ratings.length;i++)
                    {
                        if (obj_ratings[i].getAttribute('bname')==bname)
                        {
                            let rating = html.substring(10)*1;
                            $(obj_ratings[i]).html('Rated by ('+app_ongameuk.get_rating_format(rating)+')');
                            app_ongameuk.ratings_bname_clicked[bname] = 1;
                            //break; // необходимо пройти все, так как есть дублирующие данные (необходимо)
                        }
                    }
                }
                else
                alert('Error. Server response:'+html);
            },
            error: function (jqXHR) {
            }
        });
    },

    sendEmail() 
    {
        var a = document.createElement('a');
        a.href = app_ongameuk.mailto;
        a.click();
    }

}
