<?php get_header();?>

<?php if (have_posts()):?>
<?php while (have_posts()):the_post();?>

<?php
$page = get_page(get_the_ID());
$slug = $page->post_name; ?>
<main class="main">
    <section class="<?php echo $slug;?>">
        <h2 class="main__heading"><?php the_title();?>
        </h2>
        <hr class="main__hr">
        <?php the_content();?>
        <!-- thanksページのみでボタン表示 -->
        <?php if (is_page('thanks')): ?>
        <a class="thanks__button"
            href="<?php echo esc_url(home_url('/'));?>">ホームへ戻る</a>
        <?php else: ?>
        <?php endif; ?>
    </section>
</main>
<?php endwhile;?>
<?php endif;?>
<?php get_footer();
