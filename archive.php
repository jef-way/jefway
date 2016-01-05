<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div id="content-container" class="content-boxed layout-right">
    <div id="content" class="content">
        <?php while($this->next()): ?>
            <article id="post-240" class="blog-non-single-post theme-post-entry post-240 post type-post status-publish format-standard has-post-thumbnail hentry category-app tag-app tag-widget">
                <div class="blog-post-img img-loading" style="min-width:864px; min-height:415px;">
                    <a href="post.html">
                        <img src="picture/flippr-1014x487.jpg" alt=""/>
                    </a>
                </div>
                <!-- 文章模块信息 -->
                <div class="post-content">
                <!-- 文章信息 -->
                <div class="post-info top">
                    <span class="post-type-icon-wrap">
                        <span class="post-type-icon"></span>
                    </span>
                    <span class="post-date"><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time></span>
                    <span class="no-caps post-autor">
                        &nbsp;由
                        <a href="<?php $this->author->permalink(); ?>" title="由<?php $this->author(); ?>发布" rel="author"><?php $this->author(); ?></a>
                    </span>
                </div>
                <!-- 文章标题 -->
                <div class="post-title-wrapper">
                    <h2 class="post-title">
                        <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                    </h2>
                </div>
                <div class="clear"></div>
                <!-- 文章摘要 -->
                <div class="post-content-content">
                    <p>
                        <?php $this->content('- 阅读剩余部分 -'); ?>
                        <!-- <p class='read-more'>
                            <a href='http://www.jefway.com/web/flippr.html'>阅读全文>></a>
                        </p> -->
                        <div class="clear"></div>
                        <div class="post-info bottom">
                            <span class="post-type-icon-wrap">
                                <span class="post-type-icon"></span>
                            </span>
                            <span class="no-caps">在</span>
                            <?php $this->category(','); ?>
                            <span class="comments-number">
                                <a href="<?php $this->permalink() ?>#comments">
                                    <span class="no-caps"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></span>
                                </a>
                            </span>
                        </div>
                        <div class="clear"></div>
                </div>
                </div>
                    <!-- 社会化分享 -->
                    <div style="float: right;  margin-right: 5%;  margin-bottom: 2%;  max-width: 100%;">
                        <div style="display: inline-block;">分享：</div>
                        <div class="bdsharebuttonbox" style="display: inline-block;vertical-align: middle;">
                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                            <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                            <a href="#" class="bds_more" data-cmd="more"></a>
                        </div>
                        <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                    </div>
                    <div class="clear"></div>
                </article>
        <?php endwhile; ?>

            
                                               <?php $this->pageNav('<< 上一页', '下一页 >>'); ?>
                                            </div>

                                            <?php $this->need('sidebar.php'); ?>
                                            <?php $this->need('footer.php'); ?>











    
