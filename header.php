<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">

	<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
	
	<!--[if lte IE 8]>
	<link rel='stylesheet' id='pexeto-ie8-css'  href='css/style_ie8.css' type='text/css' media='all' />
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->
	
<script type='text/javascript' src='<?php $this->options->themeUrl('js/jquery.js'); ?>'></script>

<?php $this->header(); ?>

</head>
<body class="home page page-id-10 page-template page-template-template-blog page-template-template-blog-php fixed-header contains-posts no-slider icons-style-light parallax-header">
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div id="main-container">
	<div class="page-wrapper">

		<div class="header-wrapper">
			<div class="full-bg-image" style="background-image:url(images/intro-bg1.jpg); opacity:1; filter: alpha(opacity=100);"></div>
			<header id="header">
				<div class="section-boxed section-header">
					<div id="logo-container">
						<a href="<?php $this->options->siteUrl(); ?>">
                    		<img src="<?php $this->options->themeUrl('images/logo/logo-dark.png'); ?>" alt="<?php $this->options->title() ?>" />
						</a>
					</div>
					<div class="mobile-nav">
						<span class="mob-nav-btn">菜单</span>
					</div>
					<nav class="navigation-container">
						<div id="menu" class="nav-menu">
							<ul id="menu-main" class="menu-ul">
								<li <?php if($this->is('index')): ?> class="current-menu-item" <?php endif; ?>>
									<a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
								</li>
								<?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
								<?php while($category-> next()): ?>
								
								<li <?php if($this->is('category', $category->slug)): ?> class="current-menu-item" <?php endif; ?>>
									<a href="<?php $category->permalink();?>" title="<?php $category->name(); ?>"><?php $category-> name(); ?></a>
								</li>
								<?php endwhile; ?>
								
							</ul>
						</div>
						<div class="header-buttons">
							<div class="header-search">
								<div class="search-wrapper">
									<form role="search" method="get" class="searchform" >
										<input type="text" name="s" class="search-input placeholder" placeholder="<?php _e('Search'); ?>"/>
										<input type="submit" value="" class="search-button"/>
									</form>
								</div>
								<a href="#" class="header-search-btn">Search</a>
							</div>
							<div class="social-profiles">
								<ul class="social-icons">
									<li>
										<a href="http://weibo.com/512789487" target="_blank" title="weibo">
											<div>
												<img src="<?php $this->options->themeUrl('images/social/weibo.png'); ?>" alt="觉微创意微博"/>
											</div>
										</a>
									</li>
									<li>
										<a href="" target="_blank">
											<div>
												<img src="<?php $this->options->themeUrl('images/social/qzone.png'); ?>" alt="觉微创意qq空间"/>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
					<div class="clear"></div>
					<div id="navigation-line"></div>
				</div>
			</header>
			<div class="page-title-wrapper">
				<div class="page-title">
					<div class="content-boxed">
						<h1>觉微博客</h1>
						<span class="page-subtitle">Record story</span>
					</div>
				</div>
			</div>
		</div>