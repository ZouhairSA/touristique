
<?php echo $__env->make('crud::fields.inc.wrapper_start', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<label><?php echo $field['label']; ?></label>
<?php echo $__env->make('crud::fields.inc.translatable_icon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<textarea name="<?php echo e($field['name']); ?>" class="tinymce-editor"><?php echo e(old_empty_or_null($field['name'], '') ?? ($field['value'] ?? ($field['default'] ?? ''))); ?></textarea>


<?php if(isset($field['hint'])): ?>
    <p class="help-block"><?php echo $field['hint']; ?></p>
<?php endif; ?>
<?php echo $__env->make('crud::fields.inc.wrapper_end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startPush('crud_fields_styles'); ?>
    <!-- no styles -->
<?php $__env->stopPush(); ?>



<?php $__env->startPush('crud_fields_scripts'); ?>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\auzone_libre\resources\views/vendor/backpack/crud/fields/textkrea.blade.php ENDPATH**/ ?>