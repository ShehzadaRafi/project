<h1>Please Wait Your Registeration Is In Process</h1>
<a href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form><?php /**PATH C:\xampp\htdocs\job4u\resources\views/admin/waiting.blade.php ENDPATH**/ ?>