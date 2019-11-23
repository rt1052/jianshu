<?php
/**
 * 模仿简书主题
 *
 * @package Typecho Yuheng Theme
 * @author Yuheng
 * @version 1.0
 * @link http://yuheng.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="col-mb-12 col-8" id="main" role="main">
	<?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 itemprop="name headline"><a class="post-title" itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
            <div class="post-content" itemprop="articleBody">
    			<?php $this->content(); ?>
            </div>
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
				
				<li itemprop="interactionCount">
					<i class="iconfont ic-list-comments"></i>
					<a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('%d'); ?></a>
				</li>
			</ul>            
        </article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php //$this->need('sidebar.php'); ?>

<?php $this->need('footer.php'); ?>
