<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?>
        <?php $this->options->title(); ?>
    </title>

    <?php $this->header(); ?>
    <link href="<?php $this->options->themeUrl(); ?>css/font-awesome.min.css?version=0.0810" type="text/css" rel="stylesheet" />
    <link href="<?php $this->options->themeUrl(); ?>css/basic.css?version=0.0810" type="text/css" rel="stylesheet" />
    <link href="<?php $this->options->themeUrl(); ?>css/animate.3.5.2.min.css?version=0.0810" type="text/css" rel="stylesheet" />
    <link href="<?php $this->options->themeUrl(); ?>css/style.css" type="text/css" rel="stylesheet" />

    <!-- RSS -->
    <link rel="alternate" type="application/rss+xml" title="teeengmod26; RSS 2.0" href="https://blog.tongmingzhi.com/feed/" />
    <link rel="alternate" type="application/rdf+xml" title="teeengmod26; RSS 1.0" href="https://blog.tongmingzhi.com/feed/rss/" />
    <link rel="alternate" type="application/atom+xml" title="teeengmod26; ATOM 1.0" href="https://blog.tongmingzhi.com/feed/atom/" />

    <!-- 网站图标 -->
    <link rel="shortcut icon" href="/usr/themes/Salome/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="https://i.328888.xyz/2023/04/19/i6EB2z.jpeg" />

    <!-- 代码高亮 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>css/prism.css">
    <script src="<?php $this->options->themeUrl(); ?>js/prism.js"></script>

</head>

<body>
    <div class="main animated">
        <div class="header animated fadeInDown">
            <div class="site_title_container">
                <div class="site_title">


                </div>

                <div class="description">
                    <a href="https://blog.tongmingzhi.com/">
                        <p class="sub_title"><?php $this->options->description() ?></p>
                    </a>
                    <div class="my_socials">
                        <a href="https://www.instagram.com/teeengmod26/" title="instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="https://t.me/+Oq-zUkErRL9hYzI1" title="telegram">
                            <i class="fa fa-telegram"></i>
                        </a>
                        <a href="https://github.com/m1ntt/" title="github">
                            <i class="fa fa-github"></i>
                        </a>
                        <a href="mailto:tonmizi@outlook.com" title="E-mail">
                            <i class="fa fa-envelope-o"></i>
                        </a>


                    </div>

                </div>

            </div>

        </div>
