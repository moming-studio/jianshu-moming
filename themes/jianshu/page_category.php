<?php
/**
 * 分类
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="main-inner">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <div class="post-header">
			<h2 class="post-title"><?php $this->title() ?></h2>
		</div>
        <div class="post-content markdown-body" itemprop="articleBody">
            <?php $this->content(); ?>
			<div >
			<?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
			<ul>
			<?php while($category->next()): ?>
				<li style="list-style-type:none;"><?php echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $category->levels); ?>
				<a href="<?php $category->permalink(); ?>" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $category->name?><b class="caret"></b></a></li>
			<?php endwhile; ?>
			</ul>
			</div>
        </div>
		
    </article>
    <?php $this->need('comments.php'); ?>
</div><!-- end #main-->
<?php $this->need('footer.php'); ?>
