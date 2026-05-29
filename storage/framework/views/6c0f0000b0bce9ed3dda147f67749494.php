<section class="am-feature-tutors <?php echo e(pagesetting('select_verient')); ?> <?php echo e(pagesetting('style_verient')); ?>">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty(pagesetting('1st_shape_image'))): ?>
        <img class="am-shap-img" src="<?php echo e(url(Storage::url(pagesetting('1st_shape_image')[0]['path']))); ?>" alt="Background shape image"> 
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty(pagesetting('2nd_shape_image'))): ?>
        <img class="am-shap-img-1" src="<?php echo e(url(Storage::url(pagesetting('2nd_shape_image')[0]['path']))); ?>" alt="Background shape image">
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty(pagesetting('pre_heading')) || !empty(pagesetting('heading')) || !empty(pagesetting('paragraph'))): ?>
                    <div class="am-tutor-experience">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty(pagesetting('pre_heading')) || !empty(pagesetting('heading')) || !empty(pagesetting('paragraph'))): ?>
                            <div class="am-section_title am-section_title_center <?php echo e(pagesetting('section_title_variation')); ?>">
                                <?php if(!empty(pagesetting('pre_heading'))): ?>
                                    <span
                                        <?php if((!empty(pagesetting('pre_heading_text_color')) && pagesetting('pre_heading_text_color') !== 'rgba(0,0,0,0)') || (!empty(pagesetting('pre_heading_bg_color')) && pagesetting('pre_heading_bg_color') !== 'rgba(0,0,0,0)')): ?>
                                            style="
                                                <?php if(!empty(pagesetting('pre_heading_text_color')) && pagesetting('pre_heading_text_color') !== 'rgba(0,0,0,0)'): ?>
                                                    color: <?php echo e(pagesetting('pre_heading_text_color')); ?>;
                                                <?php endif; ?>
                                                <?php if(!empty(pagesetting('pre_heading_bg_color')) && pagesetting('pre_heading_bg_color') !== 'rgba(0,0,0,0)'): ?>
                                                    background-color: <?php echo e(pagesetting('pre_heading_bg_color')); ?>;
                                                <?php endif; ?>
                                            "
                                        <?php endif; ?>>
                                        <?php echo e(pagesetting('pre_heading')); ?>

                                    </span>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?> 
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty(pagesetting('heading'))): ?> <h2><?php echo pagesetting('heading'); ?></h2> <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty(pagesetting('paragraph'))): ?> <p><?php echo pagesetting('paragraph'); ?></p> <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php
                    $sectionVerient     = !empty(pagesetting('select_verient')) ? pagesetting('select_verient') : 'am-tutors-varient-two';
                    $viewProfileBtn     = !empty(pagesetting('view_tutor_btn_text')) ? pagesetting('view_tutor_btn_text') : 'View Profile';
                    $viewProfileBtnUrl  = !empty(pagesetting('view_tutor_btn_url')) ? pagesetting('view_tutor_btn_url') : '#';
                    $selectTutor        = !empty(pagesetting('select_tutor')) ? pagesetting('select_tutor') : 8;
                ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('experienced-tutors', ['sectionVerient' => $sectionVerient,'viewProfileBtn' => $viewProfileBtn,'viewProfileBtnUrl' => $viewProfileBtnUrl,'selectTutor' => $selectTutor]);

$key = null;

$key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-3716515535-0', null);

$__html = app('livewire')->mount($__name, $__params, $key);

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            </div>
        </div>
    </div>
</section>
<?php if (! $__env->hasRenderedOnce('ea95b222-a74a-4073-9c1c-60dd3385156b')): $__env->markAsRenderedOnce('ea95b222-a74a-4073-9c1c-60dd3385156b');
$__env->startPush('styles'); ?>
<?php echo app('Illuminate\Foundation\Vite')(['public/css/videojs.css']); ?>
<?php $__env->stopPush(); endif; ?>
<?php if (! $__env->hasRenderedOnce('7dfab2d5-501b-4ba4-b22e-ce13b7a92970')): $__env->markAsRenderedOnce('7dfab2d5-501b-4ba4-b22e-ce13b7a92970');
$__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('js/video.min.js')); ?>"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
                setTimeout(() => {
                    jQuery('.video-js').each((index, item) => {
                        item.onloadeddata =  function(){
                            videojs(item);
                        }
                    })
                }, 500);
            });
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH /home/mexy/Downloads/Vastora LMS v3.1.0/resources/views/pagebuilder/experienced-tutors/view.blade.php ENDPATH**/ ?>