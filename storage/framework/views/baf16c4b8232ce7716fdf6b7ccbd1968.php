<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if( !empty($label_title) ): ?>
    <li class="op-separator-wrap">
        <div class="op-textcontent">
            <h6><?php echo $label_title; ?></h6>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if( !empty( $label_desc) ): ?>
                <em><?php echo $label_desc; ?></em>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </li>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php /**PATH /home/mexy/Downloads/Vastora LMS v3.1.0/vendor/larabuild/optionbuilder/src/../resources/views/components/info.blade.php ENDPATH**/ ?>