<?php if ( have_comments() ) : ?>
	<h4 id="comments"><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h4>
	<ul class="comment-list">
	<?php wp_list_comments('callback=custom_comments');?>
	</ul>
<?php endif; ?>

<?php
	$comments_args = array(
        'label_submit'=>'Submit Comment',
        'title_reply'=>'Post a Comment',
        'comment_notes_after' => ''
	);
	comment_form($comments_args);
?>