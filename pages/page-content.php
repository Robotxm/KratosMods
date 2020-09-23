<?php
/**
 * 文章列表
 * @author Seaton Jiang <seaton@vtrois.com>
 * @license MIT License
 * @version 2020.09.21
 */
?>
<div class="article-panel">
    <?php if (kratos_option('g_thumbnail',true)) { ?>
    <div class="a-thumb">
        <a href="<?php the_permalink(); ?>">
            <?php post_thumbnail(); ?>
        </a>
    </div>
    <?php }?>
    <div class="a-post <?php if (!kratos_option('g_thumbnail',true)) { echo 'a-none'; } ?>">
        <div class="header">
            <?php $category = get_the_category(); echo '<a class="label" href="'. get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '<i class="label-arrow"></i></a>'; ?>
            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
        <div class="content">
            <p><?php echo wp_trim_words(get_the_excerpt(), 35); ?></p>
        </div>
    </div>
    <div class="a-meta">
        <span class="float-left d-none d-md-block">
            <span class="mr-2"><i class="far fa-calendar-alt"></i><?php echo get_the_date('Y 年 m 月 d 日'); ?></span>
            <span class="mr-2"><i class="far fa-comment-alt"></i><?php comments_number('0', '1', '%'); _e(' 条评论', 'kratos'); ?></span>
        </span>
        <span class="float-left d-block">
            <?php if(kratos_option('multiusers',false)){ ?>
                <span class="mr-2"><i class="kicon i-author"></i><?php echo get_the_author_meta('display_name'); ?></span>
            <?php } ?>
        </span>
        <span class="float-right">
            <a href="<?php the_permalink(); ?>"><?php _e('阅读全文', 'kratos'); ?><i class="fas fa-chevron-circle-right"></i></a>
        </span>
    </div>
</div>