<!-- ***** Chefs Area Starts ***** -->
<section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Staffs</h6>
                        <h2>We offer elegant fashion for you</h2>
                    </div>
                </div>
            </div>

            
            <div class="row">

                 <?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img height="430" width="200" src="chefimage/<?php echo e($data2->image); ?>" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4><?php echo e($data2->name); ?></h4>
                            <span><?php echo e($data2->speciality); ?></span>
                        </div>
                    </div>
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
            </div>
            
            
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->
<?php /**PATH C:\Users\Samwel Kahungwa\Desktop\restaurant\resources\views/foodchef.blade.php ENDPATH**/ ?>