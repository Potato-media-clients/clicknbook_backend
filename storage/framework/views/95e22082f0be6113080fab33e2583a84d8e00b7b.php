<?php echo $__env->make('dashboard.components.right-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php do_action('footer'); ?>
<?php do_action('init_footer'); ?>
<?php do_action('init_dashboard_footer'); ?>
<script src="<?php echo e(asset('js/option.js')); ?>"></script>
<script src="<?php echo e(asset('js/dashboard.js')); ?>"></script>
<script>
$(document).ready(function(){
  $("#base_price").change(function(){
   var base_price = $('#base_price').val();
   if($.isNumeric(base_price)){
   window.location.href = 'https://clicknbook.co/dashboard/edit-home/'+537+'?base_price='+base_price;
   }
  });
});
</script>
</body>
</html>
<?php /**PATH /home/potatoco/public_html/clicknbook.co/app/Views/dashboard/components/footer.blade.php ENDPATH**/ ?>