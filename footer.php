<?php
/**
 * 主题页脚
 * @author Seaton Jiang <seaton@vtrois.com>
 * @license MIT License
 * @version 2020.04.12
 */
?>
<div class="k-footer">
    <div class="f-toolbox">
        <div class="gotop <?php if ( kratos_option('s_wechat', false) ){ echo 'gotop-haswechat'; } ?>">
            <div class="gotop-btn">
                <span class="fas fa-chevron-up"></span>
            </div>
        </div>
        <?php if ( kratos_option('s_wechat', false) ){ ?>
        <div class="wechat">
            <span class="fab fa-weixin"></span>
            <div class="wechat-pic">
                <img src="<?php echo kratos_option('s_wechat_url', ASSET_PATH . '/assets/img/wechat.png'); ?>">
            </div>
        </div>
        <?php } ?>
        <div class="search">
            <span class="fas fa-search"></span>
            <form class="search-form" role="search" method="get" action="<?php echo home_url('/'); ?>">
                <input type="text" name="s" id="search" placeholder="<?php _e('搜点什么呢?', 'kratos'); ?>" style="display:none"/>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p class="social">
                <?php
                    $social = array('weibo', 's_bilibili', 's_coding', 's_gitee', 'twitter', 'telegram', 'linkedin', 'youtube', 'github', 'stack-overflow', 'envelope');
                    foreach ($social as $social) {
                        if (kratos_option($social)) {
                            echo '<a target="_blank" rel="nofollow" href="' . kratos_option($social . '_url') . '"><i class="fa' . ($social == 'envelope' ? 's' : 'b') . ' fa-' . $social . '"></i></a>';
                        }
                    }
                ?>
                </p>
                <?php
                    $sitename = get_bloginfo('name');
                    echo '<p>' . kratos_option('s_copyright', 'COPYRIGHT © 2020 ' . $sitename . '. ALL RIGHTS RESERVED.') . '</p>';
                    echo '<p>THEME <a href="https://github.com/vtrois/kratos" target="_blank" rel="nofollow">KRATOS</a> MADE BY <a href="https://www.vtrois.com/" target="_blank" rel="nofollow">VTROIS</a>, <a href="https://github.com/Robotxm/KratosMods" target="_blank" rel="nofollow">MODS</a> CREATED BY <a href="https://moefactory.com/" target="_blank" rel="nofollow">ROBOTXM</a></p>';
                    if (kratos_option('s_icp')) {
                        echo '<p><a href="http://www.beian.miit.gov.cn/" target="_blank" rel="nofollow">' . kratos_option('s_icp') . '</a></p>';
                    }
                    if (kratos_option('s_gov')) {
                        echo '<p><a href="' . kratos_option('s_gov_link', '#') . '" target="_blank" rel="nofollow" ><i class="police-ico"></i>' . kratos_option('s_gov') . '</a></p>';
                    }
                    if (kratos_option('seo_statistical')) {echo '<p>' . kratos_option('seo_statistical') . '</p>';}
                ?>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>