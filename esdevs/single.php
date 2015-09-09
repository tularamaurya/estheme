<?php get_header(); ?>
<div class="container main-content">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<? if(have_posts()): ?>
			  <? while(have_posts()): ?>
			    <? the_post() ?>
			    <h1>
			      <a href='<?=the_permalink()?>'><?=the_title()?></a>
			    </h1>
			    <? _e("Posted "); ?> by <? the_author(); ?> at
			    <? the_time('F js, Y') ?>
			    <? the_content("more"); ?>
			  <? endwhile; ?>
			<? endif; ?>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<? get_sidebar(); ?>
		</div>
	</div>

	<? if ( $comments ): ?>
<ol id="commentlist">
  <? foreach ($comments as $comment): ?>
    <li id="comment-<? comment_ID() ?>">
    <? comment_text(); ?>
    <p>
        <cite>
        <? comment_type(__('Comment'), 
        __('Trackback'), __('Pingback')); ?>
        <? _e('by') ?>
        <? comment_author_link() ?> —
        <? comment_date() ?> @
        <a href="#comment-<? comment_ID() ?>">
        <? comment_time() ?>
        </a>
        </cite>
        <? edit_comment_link(__("Edit This"), ' |') ?>
    </p>
  <? endforeach; ?>
</ol>
<? else : ?>
<p><? _e('No comments.'); ?></p>
<? endif; ?>

<?php if (comments_open()) : ?>

<h3 id="respond">Leave a Reply</h3>

<?php if ( get_option('comment_registration') 
  && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/
  wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" 
title="Log out of this account">Logout »</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small>Mail (will not be published) <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>Website</small></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> 
You can use these tags: <code><?php echo allowed_tags(); ?>
</code></small></p>-->
<p><textarea name="comment" id="comment" 
cols="100%" rows="10" tabindex="4"></textarea></p>
<p><input name="submit" type="submit" 
id="submit" tabindex="5" value="Submit Comment" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif;  ?>
<?php endif;  ?>
</div>

<? get_footer(); ?>