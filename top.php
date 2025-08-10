<?php
/*
Template Name: TOP
*/

get_header();
?>

<!-- ヒーローセクション -->
<section class="main-visual">
    <div class="main-container">
        <div class="main-content">
            <h2 class="main-title"><span>飲食店開業のことなら</span><br>当事務所にお任せ下さい</h2>
            <p class="main-description">飲食店営業許可申請から食品衛生責任者の手続きまで、開業に必要な煩雑な手続きを一括サポート。経験豊富な行政書士が、あなたの夢の実現を全力でお手伝いします。</p>
            <div class="main-buttons">
                <a href="<?php echo home_url('/contact'); ?>" class="contact-btn">まずは相談する</a>
                <a href="<?php echo home_url('/about'); ?>" class="line-contact-btn">LINEで相談する</a>
            </div>
        </div>
        <div class="main-image">
            <img src="<?php echo get_theme_file_uri('assets/images/common/main-image.png'); ?>" alt="飲食店営業許可申請代行">
        </div>
    </div>
</section>

<?php get_footer(); ?>