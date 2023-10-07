<!DOCTYPE html>
<html lang="en">

<?php $__env->startSection('title', 'Booking'); ?>
<body>
    <div class="page-wrapper">
        <?php echo $__env->make('layout.front.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item">
                        <a class="text-decoration-none" href="<?php echo e(route('Home_Page')); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="text-decoration-none" href="<?php echo e(route('Doctors_Page')); ?>">doctors</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        doctor name
                    </li>
                </ol>
            </nav>
            <div class="d-flex flex-column gap-3 details-card doctor-details">
                <div class="details d-flex gap-2 align-items-center">
                    <img src="<?php echo e(asset('assets')); ?>/images/major.jpg" alt="doctor" class="img-fluid rounded-circle" height="150"
                        width="150" />
                    <div class="details-info d-flex flex-column gap-3">
                        <h4 class="card-title fw-bold">Doctor name</h4>
                        <h6 class="card-title fw-bold">
                            doctor major and more info about the doctor in summary
                        </h6>
                    </div>
                </div>
                <hr />
                <form class="form">
                    <div class="form-items">
                        <div class="mb-3">
                            <label class="form-label required-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="phone">Phone</label>
                            <input type="tel" class="form-control" id="phone" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="email">Email</label>
                            <input type="email" class="form-control" id="email" required />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Confirm Booking
                    </button>
                </form>
            </div>
        </div>
    </div>
  <?php echo $__env->make('layout.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>

<?php echo $__env->make('layout.front.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\My Courses\Back End\Eraa Soft Course\Sessions codes\New folder (15)\first_project\resources\views/front/booking.blade.php ENDPATH**/ ?>