<?php /* Smarty version Smarty-3.1.6, created on 2022-03-01 20:45:54
         compiled from "./views/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12542913016194a437a15742-90420630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd95672d1d410c1c909f0ec46afe4e5f56719e341' => 
    array (
      0 => './views/default/header.tpl',
      1 => 1646167516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12542913016194a437a15742-90420630',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6194a437a8a2a',
  'variables' => 
  array (
    'templateWebPath' => 0,
    'pageTitle' => 0,
    'pageName' => 0,
    'headerUserName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6194a437a8a2a')) {function content_6194a437a8a2a($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/css/style.css">
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/sidebar-logo.png" type="image/png">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar__header">
            <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/sidebar-logo.png" alt="">
            <p>Испытательная<br>лаборатория</p>
        </div>

        <ul class="sidebar-nav">
            <li>
                <a href="/?controller=DemandSelect">
                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.3711 5.35555L13.3727 6.38389L4.83675 15.1481C3.73036 16.2841 1.93619 16.2841 0.829795 15.1474C-0.276598 14.0114 -0.276598 12.17 0.829795 11.034L9.36574 2.26978L10.3673 3.29813L6.49634 7.2726H10.504L12.3711 5.35555ZM14.3743 5.35555C14.8233 5.81663 15.5834 5.48209 15.5834 4.84137C15.5834 4.65519 15.5139 4.46901 15.3758 4.3272L11.3689 0.21236C11.2307 0.0712715 11.0494 0 10.8681 0C10.2384 0 9.9239 0.786168 10.3673 1.24143L14.3743 5.35555ZM17 10.5576C17 11.5489 16.2166 12.3634 15.2505 12.3634C13.1319 12.3634 12.3747 9.29439 15.8964 6.54534C15.8554 8.26531 17 8.94676 17 10.5576ZM15.3206 8.03695C15.0755 8.17441 14.7143 8.54458 14.659 9.00639C14.5776 9.69729 15.2731 9.90092 15.334 8.97439C15.3624 8.58385 15.334 8.39695 15.3206 8.03695Z" fill="#9FA2B4"/>
                    </svg>
                    <p>Новая заявка</p>
                </a>
            </li>
            <li>
                <a href="/?controller=Index">
                    <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.88889 0.777778C3.88889 0.348444 4.23733 0 4.66667 0H9.33333C9.76344 0 10.1111 0.348444 10.1111 0.777778C10.1111 1.20711 9.76344 1.55556 9.33333 1.55556H4.66667C4.23733 1.55556 3.88889 1.20711 3.88889 0.777778ZM14 16.7642C14 17.7629 13.2043 18.6667 12.1147 18.6667H1.88456C0.795667 18.6667 0 17.7629 0 16.765C0 16.4928 0.0591112 16.2136 0.188222 15.9429L3.09944 9.83267C3.90833 8.13244 4.66667 6.26967 4.66667 4.38278V3.11111H6.22222L6.21756 4.66667C6.14989 6.70678 5.36978 8.62711 4.683 10.1111H7.54678L10.9511 17.1111H12.1147C12.355 17.1111 12.5191 16.8451 12.4079 16.6102L9.49667 10.5016C8.68311 8.79278 7.84778 6.77522 7.77778 4.66667V3.11111H9.33333V4.38278C9.33333 6.26967 10.0917 8.13167 10.9013 9.83189L13.8126 15.9421C13.9409 16.2128 14 16.492 14 16.7642V16.7642ZM4.66667 15.9444C4.66667 15.2997 4.14478 14.7778 3.5 14.7778C2.85522 14.7778 2.33333 15.2997 2.33333 15.9444C2.33333 16.5892 2.85522 17.1111 3.5 17.1111C4.14478 17.1111 4.66667 16.5892 4.66667 15.9444ZM6.22222 13.2222C6.22222 12.7921 5.87378 12.4444 5.44444 12.4444C5.01433 12.4444 4.66667 12.7921 4.66667 13.2222C4.66667 13.6523 5.01433 14 5.44444 14C5.87378 14 6.22222 13.6523 6.22222 13.2222ZM8.55556 15.5556C8.55556 15.1262 8.20711 14.7778 7.77778 14.7778C7.34844 14.7778 7 15.1262 7 15.5556C7 15.9849 7.34844 16.3333 7.77778 16.3333C8.20711 16.3333 8.55556 15.9849 8.55556 15.5556Z" fill="#9FA2B4"/>
                    </svg>
                    <p>Мои анализы</p>
                </a>
            </li>
            <li>
                <a href="/?controller=Profile">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.1461 10.556C10.1401 10.0928 8.27281 9.68683 9.17698 7.97883C11.9303 2.78017 9.90673 0 6.99998 0C4.03548 0 2.06264 2.88692 4.82298 7.97883C5.75456 9.69675 3.81673 10.1027 1.85381 10.556C0.0612284 10.9702 -0.005855 11.8603 -2.16654e-05 13.4167L0.00231167 14H13.9965L13.9988 13.4347C14.0058 11.8667 13.9451 10.9719 12.1461 10.556Z" fill="#9FA2B4"/>
                    </svg>
                    <p>Профиль</p>
                </a>
            </li>
        </ul>
    </div>

    <div class="main-block">
        <div class="main-block__header">
            <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['pageName']->value;?>
</h1>

            <div class="search-notification-profile">
                <div class="main-block__search">
                    <input type="text" placeholder="Номер заявки или протокола">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/icons/search.svg" alt="" class="search-btn">
                </div>
                <div class="notification-block">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/icons/notification.svg" alt="">
                    <div class="notitfication-dot"></div>
                </div>
                <div class="devider"></div>
                <div class="profile-block">
                    <div class="current-user">
                        <h4><?php echo $_smarty_tpl->tpl_vars['headerUserName']->value;?>
</h4>
                        <div class="current-user__circle">
                            <div class="current-user-block">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/icons/user-icon.svg" alt="">
                            </div>
                        </div>
                    </div>
    
                    <div class="profile-block__menu">
                        <ul>
                            <li>
                                <a href="#">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 5.77733C6.77467 5.77733 5.778 6.77467 5.778 8C5.778 9.22533 6.77467 10.222 8 10.222C9.22533 10.222 10.222 9.22533 10.222 8C10.222 6.77467 9.22533 5.77733 8 5.77733ZM8 10.8887C6.40667 10.8887 5.11133 9.59333 5.11133 8C5.11133 6.40667 6.40667 5.11067 8 5.11067C9.59333 5.11067 10.8887 6.40667 10.8887 8C10.8887 9.59333 9.59333 10.8887 8 10.8887V10.8887ZM7.20467 15.3333H8.79533C9.048 14.5973 9.24067 13.6993 10.2 13.3C11.1973 12.8887 11.9773 13.4307 12.6233 13.748L13.7473 12.6227C13.4087 11.9247 12.9033 11.1567 13.3013 10.1953C13.6793 9.28267 14.4607 9.08667 15.3333 8.796V7.204C14.51 6.92333 13.686 6.732 13.302 5.80533C12.9207 4.88533 13.34 4.20867 13.748 3.37667L12.6233 2.25267C11.8787 2.61733 11.1427 3.09067 10.1953 2.698C9.27933 2.31733 9.09133 1.542 8.79533 0.666667H7.20467C6.922 1.48733 6.73533 2.312 5.80533 2.69733C5.562 2.79933 5.32667 2.848 5.08733 2.848C4.52533 2.848 4.06133 2.58667 3.37667 2.25267L2.252 3.37667C2.63467 4.16 3.086 4.868 2.698 5.80533C2.31733 6.722 1.542 6.908 0.666667 7.204V8.796C1.484 9.07467 2.312 9.266 2.698 10.1947C3.08533 11.13 2.648 11.816 2.252 12.6233L3.37667 13.748C4.34333 13.2647 4.94667 12.9453 5.80467 13.302C6.72333 13.6833 6.908 14.4607 7.20467 15.3333V15.3333ZM9.26733 16H6.732C6.278 14.7213 6.20867 14.1913 5.55 13.918C4.88 13.6387 4.396 14.006 3.23933 14.5527L1.44667 12.76C2.02867 11.5353 2.358 11.1167 2.082 10.45C1.80733 9.78933 1.28733 9.72533 0 9.268V6.732C1.27067 6.28 1.808 6.21067 2.082 5.55C2.356 4.88933 2.03467 4.47467 1.44667 3.23933L3.23933 1.44733C4.4 1.99933 4.88333 2.35733 5.54933 2.08267C6.21067 1.808 6.27067 1.29267 6.73267 0H9.26733C9.722 1.27867 9.79267 1.80933 10.45 2.082C11.1173 2.35933 11.5893 2.00267 12.7613 1.44733L14.5527 3.23933C13.9673 4.47067 13.6453 4.89067 13.918 5.54933C14.192 6.21067 14.7127 6.274 16 6.732V9.26867C14.7293 9.72 14.1913 9.79 13.9173 10.4507C13.6487 11.1007 13.9467 11.4913 14.5533 12.76L12.7613 14.5527C11.6093 14.006 11.1167 13.6393 10.4573 13.916C9.79867 14.1893 9.73733 14.68 9.26733 16" fill="black"/>
                                    </svg>
                                    <p>Настройки</p>
                                </a>
                            </li>
                            <li>
                                <a href="/controllers/LogoutController.php">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33341 14H12.6887V12.6667L13.3554 12V14.6667H7.33341V16L0.666748 14V2L7.33341 0V1.33333H13.3554V4.66667L12.6887 4V2H7.33341V14ZM6.66675 15.104V0.896L1.33341 2.496V13.504L6.66675 15.104ZM14.0574 8L11.8621 5.80467L12.3334 5.33333L15.3334 8.33333L12.3334 11.3333L11.8621 10.862L14.0574 8.66667H8.02208V8H14.0574Z" fill="black"/>
                                    </svg>
                                    <p>Выход</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><?php }} ?>