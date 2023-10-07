<!DOCTYPE html>
<html lang="en">

<?php $__env->startSection('title', 'Register'); ?>

<body>
    <div class="page-wrapper">
        <?php echo $__env->make('layout.front.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="<?php echo e(route('Home_Page')); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Register</li>
                </ol>
            </nav>
            <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
                <form class="form">
                    <div class="form-items">
                        <div class="mb-3">
                            <label class="form-label required-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="phone">Phone</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="email">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="password">password</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create account</button>
                </form>
                <div class="d-flex justify-content-center gap-2">
                    <span>already have an account?</span><a class="link" href="<?php echo e(route('Login_Page')); ?>"> login</a>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('layout.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>

<?php echo $__env->make('layout.front.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\My Courses\Back End\Eraa Soft Course\Sessions codes\New folder (15)\first_project\resources\views/front/register.blade.php ENDPATH**/ ?>