<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-8" id="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 itemprop="name headline"><a class="post-title-archive" itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>

        <ul class="post-meta">
            <li class="jsd-meta" itemprop="author" itemscope itemtype="http://schema.org/Person">
                <i class="iconfont ic-discover-user"></i>
                <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>
            </li>

            <li>
                <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
            </li>

            <li>
                <i class="iconfont ic-catalog"></i>
                <?php $this->category(','); ?>
            </li>

            <li>
                <?php if($this->user->hasLogin()):?>
                    <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" >编辑</a>
                <?php endif;?>
            </li>            
        </ul>  

        <div class="post-content-archive" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
    </article>

    <?php $this->need('comments.php'); ?>

    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>
</div><!-- end #main-->

<?php //$this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
