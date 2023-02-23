<div class="post-comment-list">
    <?php
    if(!empty($comments['count'])){
    $comment_number = get_comment_number($post->post_id);
    ?>
    <h3 class="comment-count">
        <?php echo e(_n("[0::%s reviews for this post][1::%s review for this car][2::%s review for this post]", $comment_number)); ?>

    </h3>
    <?php
    render_comment_list($comments['results']);
    frontend_pagination([
        'total' => $comments['count'],
        'posts_per_page' => comments_per_page(),
        'query_string' => '',
        'current_url' => '',
        'page' => request()->get('comment_page', 1)
    ], true);
    }
    ?>
</div>
<?php if(user_can_review(get_current_user_id(), $post->post_id, 'post')): ?>
    <div class="post-comment parent-form" id="hh-comment-section">
        <div class="comment-form-wrapper">
            <form action="<?php echo e(url('add-post-comment')); ?>" class="comment-form form-sm form-action form-add-post-comment"
                  data-google-captcha="yes"
                  data-validation-id="form-add-comment"
                  method="post" data-reload-time="1000">
                <h3 class="comment-title"><?php echo e(__('Leave a Reply')); ?></h3>
                <p class="notice"><?php echo e(__('Your email address will not be published. Required fields are marked *')); ?></p>
                <?php echo $__env->make('common.loading', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <input type="hidden" name="post_id" value="<?php echo e($post->post_id); ?>"/>
                <input type="hidden" name="comment_id" value="0"/>
                <input type="hidden" name="comment_type" value="posts"/>
                <div class="row">
                    <?php if(!is_user_logged_in()){ ?>
                    <div class="form-group col-lg-6">
                        <input id="comment-name" type="text" name="comment_name" class="form-control has-validation"
                               placeholder="<?php echo e(__('Your name*')); ?>" data-validation="required"/>
                    </div>
                    <div class="form-group col-lg-6">
                        <input id="comment-email" type="email" name="comment_email" class="form-control has-validation"
                               placeholder="<?php echo e(__('Your email*')); ?>" data-validation="required"/>
                    </div>
                    <?php } ?>
                    <div class="form-group col-lg-12">
                        <textarea id="comment-content" name="comment_content" placeholder="<?php echo e(__('Comment*')); ?>"
                                  class="form-control has-validation" data-validation="required"></textarea>
                    </div>
                </div>
                <div class="form-message"></div>
                <button type="submit" class="btn btn-primary"><?php echo e(__('POST COMMENT')); ?></button>
            </form>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/frontend/blog/comment.blade.php ENDPATH**/ ?>