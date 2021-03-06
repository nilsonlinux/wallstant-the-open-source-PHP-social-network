<?php
function lang($txt){
    static $lang = array(
    // home page
    'html_dir' => 'ltr',
    'homeLinks' => 'left',
    'sponsored_align' => 'left',
    'main' => 'Meu',
    'my_photos' => 'Minhas fotos',
    'my_posts' => 'Meus posts',
    'settings' => 'Configurações',
    'my_notepad' => 'Minhas anotações',
    'new_note' => 'Nova anotação',
    'see_all_notes' => 'Todas',
    'more' => 'Mais',
    'advertisement' => 'Advertisement',
    'followers' => 'Followers',
    'following' => 'Following',
    'saved_posts' => 'Posts salvos',
    'sponsored' => 'Sponsored',
    'w_post_li' => 'left',
    'w_post_li2' => 'right',
    'w_post_align' => 'left',
    'w_post_dir' => 'ltr',
    'post_textbox_placeholder' => 'O que você está pensando?',
    'post_textbox_align' => 'left',
    'post_now' => 'Publicar',
    'w_title_inputText' => 'Escrever um título para seu post (opicional)',
    'post_align' => 'left',
    'post_span_float' => 'right',
    'post_options' => 'right',
    'post_content_align' => 'left',
    'comment_field_align' => 'left',
    'comment_field_ph' => 'Escrever comentário ...',
    'comment' => 'Comentário',
    'u_liked_this' => 'Você gostou disso',
    'liked' => 'Like',
    'share_now' => 'compartilhe agora',
    'comment_time_align' => 'left',
    'comments' => 'comentários',
    'no_comments' => 'Nenhum comentário',
    'likes' => 'Likes',
    'no_likes' => 'Nenhuma curtida',
    'like' => 'Like',
    'just_now' => 'Agora mesmo',
    'minute_ago' => 'minuto',
    'minutes_ago' => 'minutos',
    'hour_ago' => 'hora',
    'hours_ago' => 'horas',
    'day_ago' => 'dia',
    'days_ago' => 'dias',
    'week_ago' => 'week',
    'weeks_ago' => 'weeks',
    'month_ago' => 'month',
    'months_ago' => 'months',
    'year_ago' => 'year',
    'years_ago' => 'years',
    'HLP_b' => 'homelinksP_borderL',
    'user_info_align' => 'left',
    'comment_field_align' => 'left',
    'edit_profile' => 'Editar perfil',
    'posts_str' => 'Postagens',
    'followers_str' => 'Seguidores',
    'following_str' => 'Seguindo',
    'uProf_ffTitle_align' => 'Esquerda',
    'uProf_followersTitle' => 'Seguidores',
    'uProf_urfollowersTitle' => 'Você seguiu',
    'uProf_followersTitleCheck' => 'en',
    'uProf_followingTitle' => 'Adicionar amigo',
    'uProf_urfollowingTitle' => 'Pessoas que você está seguindo',
    'uProf_followingTitleHe' => 'ele ',
    'uProf_followingTitleShe' => 'ela ',
    'uProf_followingTitle1' => 'Pessoas que',
    'uProf_followingTitle2' => 'estão seguindo',
    'followingBtn_str' => 'Seguindo',
    'followBtn_str' => 'Seguir',
    'postDropdown' => 'dropdown-menu-right',
    'postDropdownTxtAlign' => 'left',
    'EditPost_DDM' => 'Editar post',
    'DeletePost_DDM' => 'Deletar post',
    'reportPost_DDM' => 'Reportar post',
    'savePost_DDM' => 'Salvar posts',
    'p_title_male' => ' atualizou sua foto de perfil',
    'p_title_famale' => ' atualizou a foto do perfil dela',
    'pc_title_male' => ' atualizou sua foto de capa',
    'pc_title_famale' => ' atualizou sua foto da capa',
    'not_specified' => 'Não especificado',
    'verified_page' => 'Página verificada',
    'my_photos' => 'Minhas fotos',
    'my_photos_align' => 'left',
    'all_postsSTR' => 'all posts',
    'all_postsSTR_align' => 'left',
    'nothingToShow' => 'Nada para mostrar',
    'working' => 'Working',
    'at' => 'at',
    'lives_in' => 'Mora em',
    'born_on' => 'Nascido em',
    'studies' => 'Estudos',
    'about' => 'Sobre',
    'bio' => 'Sobre você',
    'onlyUcanCThis' => 'Só você pode ver isso',
    'save' => 'Concluir',
    'cancel' => 'Cancel',
    'uploadPhoto' => 'Uplaod',
    'addToFavoritePages' => 'Adicionar às páginas favoritas',
    'unFavoritePage' => 'Página não favorita',
    'report' => 'Report',
    'textAlign' => 'left',
    'errorPost_n1' => 'Esta postagem não deve ter menos de 15 caracteres.',
    'errorPost_n2' => 'Por favor, selecione uma imagem e tente novamente!',
    'errorPost_n3' => 'Sua imagem deve ter menos de 4 MB de tamanho.',
    'errorPost_n4' => 'Sua imagem não era jpeg, jpg ou png.',
    'errorPost_n5' => 'Ocorreu um erro durante o processamento da imagem. Tente novamente.',
    'errorPost_n6' => 'ERRO: foto não enviada. Tente novamente.',
    'supportBox' => 'Caixa de suporte',
    'seeAll' => 'Ver tudo',
    'language' => 'Idioma',
    'float' => 'left',
    'float2' => 'right',
    'ul_navbar_nav1' => 'nav navbar-nav',
    'ul_navbar_nav2' => 'nav navbar-nav navbar-right',
    'navbar_home' => 'Inicio',
    'notifications' => 'Notificações',
    'messages' => 'Chat',
    'navbar_uMenu_UserProfile' => 'Perfil de usuário',
    'adminOptions' => 'Opções administrativas',
    'dashboard' => 'Dashboard',
    'terms' => 'Termos',
    'privacyPolicy' => 'Política de privacidade',
    'Report_A_Problem' => 'Reportar um problema',
    'logout' => 'Sair',
    'navbar_serchBox_ph' => 'Pesquisar..',
    'trending_worldWide' => 'Atualizações',
    'posts' => 'Postagens',
    'pages' => 'Pessoas',
    'reactions' => 'reações',
    'by' => 'Por',
    'please_wait' => 'Por favor espere...',
    'favourite_pages' => 'Páginas favoritas',
    'wpr_public' => 'Público',
    'wpr_followers' => 'Seguindo',
    'wpr_onlyme' => 'Privado',
    'user_photos' => 'Fotos',
    'stars_str' => 'estrelas',
    'share' => 'compartilhamento',
    'shares' => 'ações',
    'no_shares' => 'sem ações',
    'wpost_write' => 'Escrever..',
    'wpost_upPhoto' => 'Foto',
    'wpost_title' => 'Título',
    'shared_a_Post' => 'Compartilhou isso',
    'comm_edited' => 'Edited',
    'comm_edit' => 'Editar comentário',
    'comm_delete' => 'Deletar comentário',
    'comm_report' => 'Reportar comentário',
    'recently_starts_from' => 'Conectou recentemente com :',
    'load_more' => 'Carregar mais',
    'postSaved' => 'Post Salvo',
    'postSavedBefore' => 'Você salvou este post antes!',
    'errorSomthingWrong' => 'Erro, ocorreu um erro! Por favor, tente novamente mais tarde.',
    'postShared' => 'Você acabou de compartilhar na sua linha do tempo..',
    'newLine_Shift_enter' => 'Nova linha &xrarr;',
    'totalPhotos' => 'Total fotos',
    'see_all' => 'Ver tudo',
    'likeNotify_str' => 'gostou da sua postagem',
    'commmentNotify_str' => 'comentou na sua postagem',
    'shareNotify_str' => 'compartilhou sua postagem',
    'starNotify_str' => 'Você tem nova estrela de',
    'followNotify_str' => 'começou a seguir você',
    'no_notifications' => 'Nenhuma notificação',
    'accountSetup' => 'Configurar conta',
    'complete' => 'Adicionar informação',
    'as_followPeople' => 'Seguir pessoa',
    'as_profileInfo' => 'Informação de contato',
    'as_coverPhoto' => 'Foto de capa',
    'as_userPhoto' => 'Foto de usuário',
    'noMoreStories' => 'Sem mais histórico',
    'you_have_not_posted_anything_yet' => 'Você ainda não postou nada',
    'has_not_posted_anything_yet' => 'ainda não postou nada',
    'not_found' => 'Não encontrado',
    'no_users_like_the_name_you_entered' => 'Não foi possível encontrar nenhum resultado com este nome.
Procurando pessoas ou publicações? Experimente digitar um nome, localização ou palavras diferente ',
    'publicPosts' => 'Posts público',
    'searchMoreAbout' => 'Pesquisar mais sobre',
    'advancedSearch' => 'Busca Avançada',
    'profilePageNotFound_str1' => 'Desculpe, esta página não está disponível',
    'profilePageNotFound_str2' => 'Desculpe, esta página pode ter sido removida ou essa página não existe!',
    'profilePageNotFound_str3' => 'Volte para a página anterior',
    'posting' => 'Postagem..',
    'hashtag_not_available' => 'Hashtag não disponível!',
    'news' => 'Notícia',
    'tv' => 'Tv',
    'store' => 'Loja',
    'new' => 'Notícia',
    'job' => 'Trabalho',
    'all_posts_that_you_saved' => 'Todas as postagens que você salvou',
    'nothing_saved_yet' => 'Nada salvo ainda',
    'do_you_want_to_delete_this' => 'Você deseja excluir este?',
    'you_can_not_undo_this_after_deleting_it' => 'Você não pode desfazer isso depois de excluí-lo',
    'delete' => 'Delete',
    'open' => 'aguardando...',
    'closed' => 'atendido',
    'you_anonymously_reported_a' => 'Você anonimamente relatou um',
    'post' => 'post',
    'click_to_view_your_report' => 'Clique para ver seu relatório',
    'replay' => 'Administrador',
    'your_report' => 'Seu relatório:',
    'help_us_to_make_our_community_better' => 'Ajude-nos a melhorar nossa comunidade',
    'submit' => 'enviar',
    'subject' => 'Título',
    'your_feedback_helps_us_improve_our_community' => 'Seu feedback nos ajuda a melhorar nossa comunidade.',
    'post_reported' => 'Você reportou este post! revisaremos seu relatório em breve.',
    'mynotepad_main_title' => 'Salve sua senha secreta, códigos, notas, links e tudo on-line .. só você pode ver ou editar',
    'newNote_p' => 'Crie uma nova nota secreta, só você pode ver e editar',
    'newNote_title' => 'Título da nota',
    'newNote_content' => 'Anote o conteúdo',
    'create' => 'Criar',
    'saved' => 'Salvar',
    'current_password_is_incorrect' => 'A senha atual está incorreta ou em branco.',
    'please_fill_required_fields' => 'Por favor, preencha os campos obrigatórios',
    'new_password_doesnt_match_the_confirm_field' => 'O novo campo de senha não corresponde ao campo de confirmação',
    'changes_saved_seccessfully' => 'mudanças guardadas com segurança',
    'remove_account' => 'Remover conta',
    'general' => 'Geral',
    'male' => 'Masculino',
    'female' => 'Feminino',
    'fullname' => 'Nome completo',
    'username' => 'Nome de usuário',
    'email' => 'E-mail ',
    'required' => 'Requerido',
    'new_password' => 'Nova senha',
    'confirm_new_password' => 'Confirme sua nova senha',
    'gender' => 'Gênero',
    'current_password' => 'Senha atual',
    'save_changes' => 'Salvar comfigurações',
    'education' => 'Formação educacional',
    'work' => 'Trabalho',
    'work_title' => 'Profissão',
    'work_place' => 'Empresa',
    'at' => '|',
    'country' => 'País',
    'birthday' => 'Aniversário',
    'website' => 'Website',
    'bio' => 'Sobre você',
    'profile_pic_shape' => 'Forma da imagem do perfil',
    'circle' => 'Círculo',
    'square' => 'Quadrado',
    'remove_account' => 'Remover conta',
    'remove_account_note' => 'Você não pode desfazer essa ação e nem todos os dados podem ser recuperados quando você pressiona em Remover conta',
    'loadmore' => 'Carregar mais',
    'users' => 'Users',
    'males' => 'Males',
    'females' => 'Females',
    'completed_profiles' => 'Perfis concluídos',
    'stars' => 'Stars',
    'notes' => 'Notes',
    'verified_users' => 'Verified users',
    'admins' => 'Admins',
    'verify_badge' => 'Verificar status',
    'verify_user' => 'Verificar usuário',
    'remove_verifyBadge' => 'Remover verificação de usuário',
    'edit_delete_dashboard' => 'Editar / Deletar',
    'verify_badge_removed_succ_from' => 'Verifique se o selo foi removido com sucesso',
    'verified_successfully' => 'Verificado com sucesso',
    'user_doesnt_exist' => 'Este usuário não existe',
    'yes' => 'Sim',
    'no' => 'Não',
    'upgradeToAdmin' => 'Atualize para admin',
    'password' => 'Senha',
    'username_allowed_error' => 'Special characters or white spaces are not allowed,Just "_","." is allowed between words in username',
    'user_already_exist' => 'Username is already exist!',
    'uCannot_access_admin_data' => 'You can not edit, delete or access main admin data!',
    'uCan_access_your_data_from_settings' => 'You are the main admin of this platform, you can access,edit or delete your data from settings',
    'from' => 'Usuário',
    'time' => 'Quando reportou',
    'options' => 'Opções',
    'report_about_post' => 'Reportado sobre post',
    'dir' => 'ltr',
    'dir2' => 'rtl',
    'activeNow' => 'Online',
    'notActiveNow' => 'Offline',
    'selectToChat' => 'Por favor, selecione um bate-papo para começar a enviar mensagens',
    'user_profile' => 'Perfil de usuário',
    'emptyChat' => 'Não tem mensagens neste chat .. diga olá para começar a conversar agora',
    'you' => 'Última mensagem',
    'write_a_message' => 'Escrever a mensagem..',
    'search' => 'Pesquisar..',
    'welcome' => 'Conectando...',
    'help' => 'Help',
    'login' => 'Entrar',
    'signup' => 'Registre-se',
    'welcome_to' => 'Seja bem vindo ao',
    'wallstant_main_string' => 'Conheça novos amigos e fique conectado com sua família e com quem você está interessado a qualquer hora em qualquer lugar',
    'login_now' => 'Entre com sua conta registrada',
    'forgot_password' => 'Guarde bem suas credenciais',
    'dont_have_an_account' => 'Não tem uma conta?',
    'for_free' => 'gratuitamente.',
    'email_or_username' => 'Email ou nome de usuário',
    'loading' => 'Carregando',
    'create_new_account' => 'Criar nova conta',
    'create_account' => 'Criar conta',
    'confirm_password' => 'Confirmar senha',
    'by_clicking_signup_str' => 'Ao clicar em Criar conta, você concorda com nosso',
    'and' => 'e',
    'cookie_use' => 'Cookie',
    'already_have_an_account' => 'Já tem uma conta',
    'creating_your_account' => 'Criando sua contat',
    'done' => 'Criada',
    'enter_un_pwd_to_login' => 'Digite seu nome de usuário ou e-mail e senha para fazer o login',
    'enter_username_to_login' => 'Digite seu nome de usuário para fazer login',
    'enter_password_to_login' => 'Digite sua senha para fazer o login',
    'cannot_login_attempts' => 'Você não pode entrar agora! espere (15 min) e tente novamente',
    'un_email_not_exist' => 'Nome de usuário ou e-mail não existe!',
    'password_incorrect_you_have' => 'Senha do usuário incorreta! Você tem',
    'attempts_to_login' => 'tenta fazer o login',
    'un_and_pwd_incorrect' => 'Usuário e senha incorretos',
    'email_already_exist' => 'Endereço de e-mail já existe',
    'password_short' => 'Sua senha deve ter pelo menos 6 caracteres. Por favor tente outro',
    'password_not_match_with_cpassword' => 'Sua senha não corresponde ao campo confirmar',
    'invalid_email_address' => 'Endereço de email invalido',
    'signup_username_should_be_1' => 'Caracteres especiais não permitidos',
    'signup_username_should_be_2' => 'O nome de usuário deve estar em portugês BR',
    'signup_username_should_be_3' => 'Somente (_) permitido entre palavras',
    'signup_username_should_be_4' => 'NUmbers e cartas são permitidos',
    'signup_username_should_be_5' => 'Espaços brancos não permitidos entre palavras',
    'username_not_allowed' => 'Erro no nome de usuário',
    'username_not_exists' => 'Nome de usuário não existe! Nenhum nome de usuário como o que você digitou',
    'friends' => 'Amigos',
    'requests' => 'Solicitações',


   // ==========================================

    );
    return $lang[$txt];
}

?>