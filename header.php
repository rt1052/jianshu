<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('normalize.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <link rel="stylesheet" href="<?php $this->options->themeUrl('jianshu.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style2.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style3.css'); ?>">


    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->


<!-- 全局顶部导航栏 -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="width-limit">
    <!-- 左上方 Logo -->
    <a class="logo" href="/"><img src="<?php $this->options->themeUrl("img/nav-logo.png"); ?>" alt="Nav logo" /></a>

    <!-- 右上角 -->
      <!-- 未登录显示登录/注册/写文章 -->
      <a class="btn write-btn" target="_blank" href="<?php $this->options->adminUrl('write-post.php'); ?>">
        <i class="iconfont ic-write"></i>写文章
      </a>  

      <a class="btn sign-up" id="sign_up">注册</a>

      <?php if($this->user->hasLogin()):?>
        <a class="btn log-in" id="sign_in" href="<?php $this->options->logoutUrl(); ?>">退出</a>
      <?php else: ?>
        <a class="btn log-in" id="sign_in" href="<?php $this->options->adminUrl('login.php'); ?>">登录</a>
      <?php endif;?>

    <!-- 如果用户登录，显示下拉菜单 -->

    <div id="navbar-jsds-enter">
    </div>

    <div id="view-mode-ctrl">
    </div>
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="nav navbar-nav">
            <li class="tab active">
              <a href="/">
                <span class="menu-text">首页</span><i class="iconfont ic-navigation-discover menu-icon"></i>
              </a>
            </li>

            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
                <li class="tab">
                    <a href="<?php $pages->permalink(); ?>">
                        <span class="menu-text"><?php $pages->title(); ?></span><i class="iconfont ic-navigation-download menu-icon"></i>
                    </a>
                </li>
            <?php endwhile; ?>

          <li class="search">
            <form method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                <input name="utf8" type="hidden" value="&#x2713;" />
                <input type="text" name="s" id="s" value="" autocomplete="off" placeholder="搜索" class="search-input" />
                <a class="search-btn"><i class="iconfont ic-search"></i></a>
            </form>          
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>


<div id="body">
    <div class="container">
        <div class="row">

    
    
