
        <?php if(Session::has('flash_massage')): ?>
          <?php echo e($i = Session::get('flash_massage_type')); ?>

          <?php switch($i):
              case (1): ?>
              <script>
                  toastr.success("<?php echo e(Session::get('flash_massage')); ?>","Sccess")
              </script>
                  <?php break; ?>
              <?php case (2): ?>
              <script>
                  toastr.info("<?php echo e(Session::get('flash_massage')); ?>","info")
              </script>
                  <?php break; ?>
              <?php case (3): ?>
              <script>
                  toastr.warning("<?php echo e(Session::get('flash_massage')); ?>","warning")
              </script>
                  <?php break; ?>
              <?php default: ?>
              <script>
                  toastr.error("<?php echo e(Session::get('flash_massage')); ?>","error")
              </script>
          <?php endswitch; ?>
        <?php endif; ?><?php /**PATH /home/barca/fouad/projects/school-system_4/school-system/resources/views/cpanel/partials/toastr.blade.php ENDPATH**/ ?>