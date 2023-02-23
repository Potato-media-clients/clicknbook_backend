<?php
                $categories = App\Models\Category::get();
$layout = (!empty($layout)) ? $layout : 'col-12';
if (empty($value) && !is_array($value)) {
    $value = $std;
}
$idName = str_replace(['[', ']'], '_', $id);
$value = explode(',', $value);
$langs = $translation == false ? [""] : get_languages_field();
?>

<div id="setting-<?php echo e($idName); ?>" data-condition="<?php echo e($condition); ?>"
     data-unique="<?php echo e($unique); ?>"
     data-operator="<?php echo e($operation); ?>"
     class="form-group mb-3 col <?php echo e($layout); ?> field-<?php echo e($type); ?>">
    <label for="<?php echo e($idName); ?>">
        <?php echo e(__($label)); ?>

        <?php if(!empty($desc)): ?>
            <i class="dripicons-information field-desc" data-toggle="popover" data-placement="right"
               data-trigger="hover"
               data-content="<?php echo e(__($desc)); ?>"></i>
        <?php endif; ?>
    </label><br/>
    <div class="checkbox-wrapper">
        <?php if(!empty($choices)): ?>
            <?php if(!is_array($choices)): ?>
                <?php
                $choicesTemp = explode(':', $choices);
                if ($choicesTemp[0] == 'taxonomy') {
                    $choicesTemp = get_taxonomies();
                } elseif ($choicesTemp[0] == 'terms') {
                    $choicesTemp = get_terms($choicesTemp[1]);
                }
                ?>
            <?php else: ?>
                <?php $choicesTemp = $choices; 
                 ?>
            <?php endif; ?>

            <?php
            $categories = App\Models\Category::get();
            $term = App\Models\Term::get();
            ?>
            
            <?php if(!empty($term)): ?>
                <?php if($style == 'col'): ?>
                    <div class="row">
                        <?php endif; ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-12 col-sm-4 col-md-12">
                                        <div id="accordion<?php echo e($category->id); ?>">
                                            <div class="card">
                                              <div class="card-header" id="headingOne<?php echo e($category->id); ?>">
                                                <h5 class="mb-0">
                                                  <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne<?php echo e($category->id); ?>" aria-expanded="true" aria-controls="collapseOne<?php echo e($category->id); ?>">
                                                    <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <span class="<?php echo e(get_lang_class($key, $item)); ?>"
                                                            <?php if(!empty($item)): ?> data-lang="<?php echo e($item); ?>" <?php endif; ?>><?php echo balanceTags(get_translate($category->name, $item)); ?>

                                                        </span>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </a>
                                                </h5>
                                              </div>
                                          
                                              <div id="collapseOne<?php echo e($category->id); ?>" class="collapse show" aria-labelledby="headingOne<?php echo e($category->id); ?>" data-parent="#accordion<?php echo e($category->id); ?>">
                                                <div class="card-body">
                                                    <?php $__currentLoopData = $term->where('category_id',$category->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                        <div class="checkbox  checkbox-success <?php if($style != 'col'): ?> <?php echo e($style); ?> <?php endif; ?>">
                                                            <input type="checkbox"
                                                                name="<?php echo e($id); ?>[]"
                                                                value="<?php echo e($title->term_id); ?>"
                                                                <?php if(in_array($title->term_id, $value)): ?> checked <?php endif; ?>
                                                                id="<?php echo e($idName); ?>-<?php echo e($title->term_id); ?>">
                
                                                            <label for="<?php echo e($idName); ?>-<?php echo e($title->term_id); ?>">
                                                                <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <span class="<?php echo e(get_lang_class($key, $item)); ?>"
                                                                        <?php if(!empty($item)): ?> data-lang="<?php echo e($item); ?>" <?php endif; ?>>
                                                                    <?php echo balanceTags(get_translate($title->term_title, $item)); ?>

                                                                </span>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </label>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php if($style == 'col'): ?>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <small><i><?php echo e(__('No data')); ?></i></small>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
<?php if($break): ?>
    <div class="w-100"></div> <?php endif; ?>
<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/options/fields/checkbox.blade.php ENDPATH**/ ?>