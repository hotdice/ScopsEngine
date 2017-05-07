<?php 

	include_once '../php_main/lock.php';

	$langs = array(
		'verified' => 'Հաստատված',
		'views' => 'Դիտումներ',
		'calling' => 'Զանգը գնում է..',
		'change_url' => 'Ընտրել նոր հղում',
		'choose_url' => 'Ընտրեք նոր հղում',
		'url_pattern' => 'Լատինական տառեր , թվեր և ընդգծման գծիկ: Երկարությունը՝ 2 - 25:',
		'url_error1' => 'Զբաղված է',
		'url_error2' => 'Ընտրեք կանոններին համապատասխան հղում',
		'url_error3' => 'Ընտրեք մեկ այլ հղում',
		'theme' => 'Կայքի դիզայնը',
		'chat_main' => 'Ընտրեք երկխոսությունը',
		'my_account' => 'Իմ էջ',
		'suggested_fr' => 'Ընկերներ , ում Դուք կարող եք ճանաչել',
		'suggested_cl' => 'Խմբեր , որոնք Ձեզ կհետաքրքրեն',
		'attach_audios' => 'Կպցնել ձայնագրություններ',
		'attach_videos' => 'Կպցնել տեսանյութեր',
		'attach_images' => 'Կպցնել լուսանկարներ',
		'media' => 'Մեդիա',
		'about' => 'Տեղեկություն',
		'load_more_fr' => 'Բեռնել ավելին',
		'gifts' => 'Նվերներ',
		'empty' => 'Դատարկ է',
		'send' => 'Ուղարկել',
		'gf_header' => 'Նվերների խանութ',
		'gf_all_gfs' => 'Բոլոր նվերները',
		'not_available_mob' => 'Էջը հասանելի չէ կայքի այս տարբերակում',
		'close' => 'Փակել',
		'photo_gal_title' => 'Լուսանկար',
		'photo_gal_of' => '/',
		'content_author' => 'Հեղինակ',
		'content_cont' => 'Նյութեր',
		'success' => 'Հաջողվեց',
		'loading' => 'Բեռնում',
		'loading_pls' => 'Բեռնում: Խնդրում ենք սպասել..',
		'error' => 'Տեխնիկական սխալ',
		'error_try' => 'Տեխնիկական Սխալ. Փորձե՛ք կրկին:',
		'man' => 'Արական',
		'woman' => 'Իգական',
		'male_suf' => '',
		'female_suf' => '',
		'everybody' => 'Բոլորը',
		'only_me' => 'Միայն ես',
		'only_friends' => 'Միայն ընկերները',
		'all' => 'Բոլորը',
		'tag' => 'Նշել',
		'add' => 'Ավելացնել',
		'answer' => 'Պատասխանել',
		'ask' => 'Հարցնել',
		'refresh' => 'Թարմացնել',
		'accept' => 'Ընդունել',
		'invite' => 'Հրավիրել',
		'attach' => 'Ավելացնել',
		'create' => 'Ստեղծել',
		'submit' => 'Դիմել*',
		'remove' => 'Հեռացնել',
		'delete' => 'Ջնջել',
		'save' => 'Պահպանել',
		'save_ch' => 'Պահպանել փոփոխությունները',
		'enabled' => 'Միացված է',
		'disabled' => 'Անջատված է',
		'added' => 'Ավելացված է',
		'removed' => 'Հեռացված է',
		'yes' => 'Այո',
		'no' => 'Ոչ',
		'months' => ['Հնվ.','Փտր.','Մարտ','Ապր.','Մայիս','Հուն.','Հուլ.','Օգս.','Սեպտ.','Հոկտ.','Նոյ.','Դեկտ.'],
		'days' => ['Երկ','Երք','Չոր','Հնգ','Ուրբ','Շաբ','Կիր'],
		'now' => 'Հիմա',
		'sing_year' => 'Տարի',
		'month' => 'Ամիս',
		'sing_day' => 'Օր',
		'day' => 'օր',
		'hour' => 'ժամ',
		'min' => 'րոպե',
		'sec' => 'վայրկյան',
		'posts' => 'Գրառումներ',
		'post' => 'Գրառում',
		'find' => 'Գտնել',
		'search' => 'Որոնում',
		'playlist' => 'Երգերի ցանկ',
		'audioplayer' => 'Երաժշտություն',
		'dialogues' => 'Երկխոսություններ',
		'news' => 'Նորություններ',
		'datings' => 'Ծանոթություններ',
		'top' => 'Վարկանիշներ',
		'events' => 'Միջոցառումներ',
		'online' => 'Առցանց',
		'online_people' => 'Առցանց մարդիկ',
		'games' => 'Խաղեր',
		'messages' => 'Նամակներ',
		'notifications' => 'Ծանուցումներ',
		'requests' => 'Հարցումներ',
		'visitors' => 'Այցելուներ',
		'my_friends' => 'Իմ ընկերներ',
		'my_photos' => 'Իմ լուսանկարներ',
		'my_clubs' => 'Իմ խմբերը',
		'my_audios' => 'Իմ երգերը',
		'settings' => 'Կարգավորում..',
		'year' => 'Տարի',
		'photo' => 'Լուսանկար',
		'wall' => 'Տարեգիրք',
		'photos' => 'Լուսանկարներ',
		'friends' => 'Ընկերներ',
		'clubs' => 'Խմբեր',
		'video' => 'Տեսանյութեր',
		'audio' => 'Ձայնագրություններ',
		'privacy' => 'Ով պետք է տեսնի սա',
		'name' => 'Անուն',
		'descr' => 'Նկարագրություն',
		'gender' => 'Սեռ',
		'city' => 'Քաղաք',
		'country' => 'Երկիր',
		'link' => 'Հղում',
		'rat' => 'Վարկանիշ',
		'last_visit' => 'Վերջին մուտքը',
		'guests' => 'Այցելուներ',
		'mutual_friends' => 'Ընդհանուր ընկերներ',
		'followers' => 'Հետևորդներ',
		'hashtag' => 'Հեշթեգ',
		'audio_once' => 'Մեկ անգամ',
		'audio_repeat' => 'Կրկնել',
		'audio_all' => 'Երգել բոլորը',
		'dbl_like' => 'Կրկնակի սեղմեք տեսնելու համար, թե ովքեր են հավանել այս գրառումը:',
		'dbl_unlike' => 'Կրկնակի սեղմեք տեսնելու համար, թե ովքեր չեն հավանել այս գրառումը:',
		'to_comment' => 'Մեկնաբանել',
		'to_share' => 'Կիսվել',
		'with' => 'Եվ',
		'to_prof_pic' => 'Տեղադրել, որպես գլխավոր նկար',
		'to_cover_pic' => 'Տեղադրել, որպես ետնապատի նկար',
		'to_gr_prof_pic' => 'Տեղադրել, որպես խմբի գլխավոր նկար',
		'to_gr_cover_pic' => 'Տեղադրել, որպես խմբի ետնապատի նկար ',
		'write_comm' => 'Գրել մեկնաբանություն',
		'empty_chat' => 'Երկխոսություններ չկան',
		'write_msg' => 'Գրել հաղորդագրություն',
		'invite_fr' => 'Հրավիրել ընկերների',
		'accept_inv' => 'Ընդունել հրավերը',
		'remove_inv' => 'Մերժել հրավերը',
		'will_go' => 'Ես կմասնակցեմ',
		'wont_go' => 'Ես չեմ մասնակցի',
		'feed_status' => 'Գրառումներ',
		'people' => 'Մարդիկ',
		'top_header' => '50 ամենավարկանիշային մարդիկ',
		'events_header' => 'Մասնակցեք միջոցառումների կամ ստեղծեք ձերը',
		'prev_month' => 'նախ. ամիս',
		'next_month' => 'հաջ. ամիս',
		'photo_from' => 'Լուսանկարը',
		'im_count' => 'Լուսանկարների քանակը',
		'curr_photo' => 'Ընթացիկ լուսանկարը',
		'curr_link' => 'Լուսանկարի հղումը',
		'im_host' => 'Լուսանկարի հոսթը',
		'vid_name' => 'Տեսանյութի անվանումը',
		'vid_length' => 'Տեսանյութի չափը',
		'vid_from' => 'Տեսանյութի աղբյուրը',
		'vid_host' => 'Տեսանյութի հոսթը',
		'sticker' => 'Պիտակ',
		'accept_fr' => 'Ընդունել հարցոումը',
		'attach_aud' => 'Ընտրել ձայնագրությունը.իմ ձայնագրությունները',
		'attach_aud_empty' => 'Դուք չունեք ձայնագրություններ',
		'attach_vid' => 'Ընտրեք տեսանյութը.ներբեռնվածներ',
		'attach_vid_empty' => 'Դուք չունեք տեսանյութեր',
		'attach_people' => 'Ընտրել մարդկանց',
		'attach_people_empty' => 'Դուք չունեք ոչ մի ընկեր կամ հետևորդ,որպեսզի ավելացնեք',
		'inv_people' => 'Հրավիրել ընկերներին',
		'inv_people_empty' => 'Դուք չունեք ոչ մի ընկեր,որպեսզի հրավիրեք',
		'people_who_likes' => 'Մարդիկ,ում դուր է եկել սա',
		'people_who_unlikes' => 'Մարդիկ,ում դուր չի եկել սա',
		'box_people_empy' => 'Դատարկ է',
		'to' => 'Ում',
		'ask_header' => 'Կատարել անանուն հարցում',
		'st_header' => 'Պիտակների խանութ',
		'st_my_st' => 'Իմ պիտակները',
		'st_empty' => 'Դուք ոչ մի պիտակ չունեք',
		'all_st' => 'Բոլոր պիտակները',
		'event_form' => 'Ստեղծել նոր իրադարձություն ',
		'ev_title' => 'Ընտրեք անվանումը',
		'ev_about' => 'Իրադարձության մասին',
		'ev_place' => 'Իրադարձության իրականացման վայրը',
		'ev_start' => 'Իրադարձության մեկնարկի ժամը',
		'private_ev' => 'Փակ իրադարձություն( կտեսնեն միայն հրավիրվածները )',
		'ev_cover' => 'Ընտրել ետնապատի նկար',
		'ev_date' => 'Ժամանակն ընտրել',
		'send_inv' => 'Ուղարկել հրավերը',
		'set_account' => 'Անձնական հաշվի կարգավորումներ',
		'set_privacy' => 'Գաղտնիություն',
		'show_date' => 'Ցանկանում եմ ծանոթանալ',
		'curr_pass' => 'Ընթացիկ գաղտնաբառը',
		'gen_set' => 'Ընդհանուր կարգավորումներ',
		'change_pass' => 'Փոխել գաղտնաբառը',
		're_enter_new_pass' => 'Կրկնել նոր գաղտնաբառը',
		'new_pass' => 'Նոր գաղտնաբառը ( [ 6 - 25 ] , 1 մեծատառ , 1 փոքրատառ , 1 թիվ )',
		'del_prof' => 'Ջնջել հաշիվը',
		'admins' => 'Ադմին',
		'set_gr_ban' => 'Արգելափակել',
		'set_del_gr' => 'Ջնջել խումբը',
		'private_club' => 'Մասնավոր խումբ( Միայն հետևորդները կարող են տեսնել )',
		'gr_set_admin' => 'Ադմիններ.վատագույն դեպքում պետք է լինի գոնե մեկ ադմին',
		'add_admin' => 'Ադմին ավելացնել',
		'search_for_admin' => 'Որոնում հետևորդի ID-ով',
		'gr_requests' => 'Հետևելու հարցում',
		'requests_empty' => 'Չկա նոր հարցում',
		'set_ban_empty' => 'Չկան արգելափակված օգտատերեր',
		'set_gr_set_ban' => 'Արգելափակել',
		'search_by_id' => 'Որոնում ID-ով',
		'del_gr_head' => 'Դուք վստա՞հ եք,որ ցանկանում եք ջնջել այս խումբը',
		'notif_others' => 'և',
		'notif_like_plural' => 'Հավանել են ձեր գրառումը',
		'notif_like_man' => 'Հավանել է ձեր գրառումը',
		'notif_like_woman' => 'Հավանել է ձեր գրառումըգ',
		'notif_gift_man' => 'Ուղարկել է Ձեզ նվեր',
		'notif_gift_woman' => 'Ուղարկել է Ձեզ նվեր',
		'notif_unlike_plural' => 'Չեն հավանել ձեր գրառումը',
		'notif_unlike_man' => 'Չի հավանել ձեր գրառումը',
		'notif_unlike_woman' => 'Չի հավանել ձեր գրառումը',
		'notif_share_man' => 'Տարածել է ձեր գրառումը',
		'notif_share_woman' => 'Տարածել է ձեր գրառումը',
		'notif_comm_man' => 'Մեկնաբանել է ձեր գրառումը',
		'notif_comm_woman' => 'Մեկնաբանել է ձեր գրառումը',
		'notif_answer_man' => 'Պատասխանել է ձեր հարցին',
		'notif_answer_woman' => 'Պատասխանել է ձեր հարցին',
		'notif_answer' => 'Պատասխան',
		'notif_question' => 'Դուք հարցում ունեք',
		'notif_date_man' => 'Ձեզ բզել են',
		'notif_date_woman' => 'Ձեզ բզել են',
		'datings_app' => 'Ծանոթությունների ծրագիր',
		'notif_tag_man' => 'Նշել է ձեզ գրառման մեջ',
		'notif_tag_woman' => 'Նշել է ձեզ գրառման մեջ',
		'notif_inv_ev_woman' => 'Հրավիրել է ձեզ իրադարձությանը',
		'notif_inv_ev_man' => 'Հրավիրել է ձեզ իրադարձությանը',
		'notif_inv_cl_woman' => 'Հրավիրել է ձեզ խումբ',
		'notif_inv_cl_man' => 'Հրավիրել է ձեզ խումբ',
		'notif_frreq_woman' => 'Ընդունել է ձեր ընկերության հայտը',
		'notif_frreq_man' => 'Ընդունել է ձեր ընկերության հայտը',
		'notif_type_an' => 'Պատասխանեք',
		'events_app' => 'Իրադարձություն',
		'events_more' => 'Ավելին..',
		'sticker_empty' => 'Դուք չունեք պիտակներ. Ընտրեք պիտակները պիտակների խանութից',
		'sticker_empty_store' => 'Դուք չունեք պիտակներ',
		'sticker_added' => 'Պիտակները ավելացվեցին',
		'sticker_removed' => 'Պիտակները ջնջվեցին',
		'thumb' => 'Անձնական էջի լուսանկար',
		'thumb_descr' => 'Ընտրված լուսանկարը կցուցադրվի գլխավոր էջում , հաղորդագրություններում , մեկնաբանություններում:',		
		'empty_dating' => 'Ձեր հարցմամբ ոչ մի օգտատեր չի գտնվել',
		'events_my' => 'Իմ իրադարձությունները',
		'events_top' => 'Լավագույն իրադարձությունները',
		'nocont_cont' => 'Ցուցադրելու ոչինչ չկա',
		'nocont_post' => 'Չկան գրառումներ ցուցադրելու համար',
		'nocont_aud' => 'Չկան ձայնագրություններ ցուցադրելու համար',
		'nocont_notif' => 'Չկան ծանուցումներ ցուցադրելու համար',
		'nocont_photo' => 'Չկան նկարներ ցուցադրելու համար',
		'nocont_fr' => 'Չկան ընկերներ ցուցադրելու համար',
		'nocont_cl' => 'Չկան խմբեր ցուցադրելու համար',
		'nocont_vid' => 'Չկան տեսանյութեր ցուցադրելու համար',
		'nocont_follow' => 'Չկան հետևորդներ ցուցադրելու համար',
		'nocont_news' => 'Չկան նորություններ ցուցադրելու համար',
		'nocont_event' => 'Չկան իրադարձություններ ցուցադրելու համար',
		'nocont_sms' => 'Չկան հաղորդագրություններ ցուցադրելու համար',
		'nocont_dialogue' => 'Չկան երկխոսություններ ցուցադրելու համար',
		'new_msg' => 'Նոր հաղորդագրություն',
		'post_metetions' => 'Նշումներ',
		'post_images' => 'Նկարներ',
		'post_link' => 'Հղում',
		'post_audio' => 'Ձայնագրություններ',
		'post_video' => 'Տեսաձայնագրություն',
		'ajax_upl' => 'Բեռնում..',
		'ajax_success' => 'Ավարտված է',
		'ajax_inv_format' => 'Սխալ ձևաչափ',
		'ajax_big_size' => 'Ֆայլի չափի գերազանցում',
		'ajax_select' => 'Ընտրեք ֆայլը',
		'ajax_aborted' => 'Բեռնումն ընդհատված է',
		'post_text' => 'Մտքիդ ի՞նչ կա..',
		'post_sb' => 'Հրապարակել',
		'post_upl' => 'Բեռնել',
		'post_descr' => 'Գրել բնութագիրը..',
		'post_choose_vid' => 'Ընտրել տեսանյութը',
		'post_aud_name' => 'Գրեք ձայնագրության անվանումը..',
		'post_choose_aud' => 'Ընտրեք անվանումը',
		'post_gr_name' => 'Ընտրեք խմբի անվանումը..',
		'search_gender' => 'Սեռ',
		'search_from' => 'Սկսած',
		'search_to' => 'Մինչև',
		'search_open' => 'Բաց օգտատեր',
		'search_gr_descr' => 'Նկարագրության գլխավոր բառը',
		'alert_event' => 'Բեռնում.. Իրականացվում է իրադարձության ստեղծումը.',
		'alert_gr_del' => 'Խումբը ջնջվել է',
		'alert_changes_saved' => 'Փոփոխությունները պահպանվել են',
		'alert_inv_rem' => 'Հրավերը ջնջված է',
		'alert_inv_acc' => 'Հրավերն ընդունված է',
		'alert_inv_sent' => 'Հրավերն ուղարկված է',
		'alert_ev_del' => 'Իրադարձությունը ջնջված է',
		'alert_answer_sent' => 'Պատասխանն ուղարկված է',
		'alert_share' => 'Դուք կիսվել եք գրառմամբ',
		'alert_follow' => 'Դուք բաժանորդագրվել եք',
		'alert_follow_not' => 'Դուք այլևս բաժանորդագրված չեք',
		'alert_blocked' => 'Օգտատերը արգելափակված է',
		'alert_unblocked' => 'Օգտատեր այլևս արգելափակված չէ',
		'alert_date_like' => 'Դուք բզել եք',
		'alert_deleting' => 'Ջնջում..',
		'error_404' => 'Էջը բացակայում է: Այն ջնջված է կամ գոյությեուն չունի:',
		'home' => 'Գլխավոր էջ',
		'mus_header' => 'Լսեք երաժշտություն',
		'a_player_empty' => 'Ցանկը դատարկ է',
		'nocont_games' => 'Խաղերը բացակայում են',
		'nocont_user_games' => 'Դուք դեռ չունեք խաղեր',
		'games_header' => 'Խաղացեք խաղեր',
		'my_games_header' => 'Իմ խաղերը',
		'games_title' => 'Այստեղ դուք կարող եք գտնել կամայական խաղ',
		'games_genres' => [ '1' => 'Բոլորը' , '2' => 'Կռիվ', '3' => 'Սպորտային', '4' => 'Հրաձգային', '5' => 'Մարտավարական' ],
		'unseen' => 'Նոր նամակ',
		'announcement' => 'Հայտարարություն',
		'voice_control' => 'Ձայնային կառավարում',
		'voice_tap' => 'Սկսել: Լեզու՝ Անգլերեն',
		'voice_connected' => 'Կապը հաստատված է: Ասե՛ք ինչ անեմ:',
		'voice_hello' => 'Ասե՛ք ՙՙHello՚՚',
		'voice_listen' => 'Լսում եմ..',
		'voice_next' => 'Անցնել հաջորդ հրահանգին',
		'voice_success' => 'Հրամանը գտնված է',
		'voice_again' => 'Հրամանը գտնված չէ: Փորձե՛ք կրկին:',
		'exit' => 'Ելք ցանցից'
	);
	
	if( isset( $_POST['get_langs'] ) ) echo json_encode( $langs );
?>