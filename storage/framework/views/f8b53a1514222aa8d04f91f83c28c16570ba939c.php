<?php $i = 1; ?>

<?php $__env->startSection('content'); ?>
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        Edit <?php echo e(Config('constants.CATEGORY.CATEGORY_TITLE')); ?> Level 1</h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('dashboard')); ?>" class="text-muted">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route($model.'.index')); ?>" class="text-muted"> <?php echo e(Config('constants.CATEGORY.CATEGORY_TITLES')); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php echo $__env->make("admin.elements.quick_links", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <form action="<?php echo e(route($model.'.update',array(base64_encode($category->id)))); ?>" method="post" class="mws-form" autocomplete="off" enctype="multipart/form-data">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <div class="card card-custom gutter-b">
                    <div class="card-header card-header-tabs-line">
                        <div class="card-toolbar border-top">
                            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                <?php if(!empty($languages)): ?>
                                <?php $i = 1; ?>
                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(($i==$language_code)?'active':''); ?>" data-toggle="tab" href="#<?php echo e($language->title); ?>">
                                        <span class="symbol symbol-20 mr-3">
                                            <img src="<?php echo e(url (Config::get('constants.LANGUAGE_IMAGE_PATH').$language->image)); ?>" alt="">
                                        </span>
                                        <span class="nav-text"><?php echo e($language->title); ?></span>
                                    </a>
                                </li>
                                <?php $i++; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <?php if(!empty($languages)): ?>
                            <?php $i = 1; ?>
                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tab-pane fade <?php echo e(($i ==  $language_code )?'show active':''); ?>" id="<?php echo e($language->title); ?>" role="tabpanel" aria-labelledby="<?php echo e($language->title); ?>">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <?php if($i == 1): ?>
                                                    <label for="<?php echo e($language->id); ?>.title">Name</label><span class="text-danger"> * </span>
                                                    <input type="text" name="data[<?php echo e($language->id); ?>][name]" class="form-control form-control-solid form-control-lg <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('data.'.$language->id.'.name') ?? @$multiLanguage[$i]['name']); ?>">
                                                    <?php if($errors->has('name')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('name')); ?>

                                                    </div>
                                                    <?php endif; ?>
                                                    <?php else: ?>
                                                    <label for="<?php echo e($language->id); ?>.name">Name</label><span class="text-danger"> </span>
                                                    <input type="text" name="data[<?php echo e($language->id); ?>][name]" class="form-control form-control-solid form-control-lg" value="<?php echo e(old('data.'.$language->id.'.name') ?? @$multiLanguage[$i]['name']); ?>">
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <lable for="homepage_background_color">Homepage Background Color</lable><span class="text-danger"> * </span>
                                    <input type="color" name="homepage_background_color" class="form-control form-control-solid form-control-lg  <?php $__errorArgs = ['homepage_background_color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('homepage_background_color') ?? @$category->homepage_background_color); ?>">
                                    <?php if($errors->has('homepage_background_color')): ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('homepage_background_color')); ?>

                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group" id="dropBox">
                                    <input type="file" id="imgUpload" multiple accept="image/*" onchange="handleFiles_images(this.files)">
                                    <progress hidden="" id="progress-bar" max="100" value="0"></progress>
                                    <label class="button" for="imgUpload">...or Upload From Your Computer</label>
                                    <div id="gallery">
                                        <?php $__currentLoopData = $category_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php  $imageName = explode("category-image/",$image['category_image']);  ?>
                                        <div class="imageBox">
                                            <img src="<?php echo e($image['category_image']); ?>">
                                            <a href="javascript:void(0)" data-image="<?php echo e(@$imageName[1]); ?>" data-type-image="<?php echo e($category->id ?? ''); ?>" class="imageDelete">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="27" viewBox="0 0 24 24">
                                                    <path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                            <div>
                                <button button type="submit" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    //image uloads
    let dropAreaa = document.getElementById("dropBox")
        // Prevent default drag behaviors
        ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropAreaa.addEventListener(eventName, preventDefaults, false)
            document.body.addEventListener(eventName, preventDefaults, false)
        })

        // Highlight drop area when item is dragged over it
        ;['dragenter', 'dragover'].forEach(eventName => {
            dropAreaa.addEventListener(eventName, highlight, false)
        })

        ;['dragleave', 'drop'].forEach(eventName => {
            dropAreaa.addEventListener(eventName, unhighlight, false)
        })

    // Handle dropped files
    dropAreaa.addEventListener('drop', handleDrops, false)

    function preventDefaults(e) {
        e.preventDefault()
        e.stopPropagation()
    }

    function highlight(e) {
        dropAreaa.classList.add('highlight')
    }

    function unhighlight(e) {
        dropAreaa.classList.remove('active')
    }

    function initializeProgress(numFiles) {
        progressBar.value = 0
        uploadProgress = []

        for (let i = numFiles; i > 0; i--) {
            uploadProgress.push(0)
        }
    }

    let uploadProgress = []
    let progressBar = document.getElementById('progress-bar')

    function updateProgress(fileNumber, percent) {
        uploadProgress[fileNumber] = percent
        let total = uploadProgress.reduce((tot, curr) => tot + curr, 0) / uploadProgress.length
        progressBar.value = total
    }
    var priviewFileLen = 0;
    function handleFiles(files) {
        files = [...files]
        initializeProgress(files.length)
        priviewFileLen = files.length;
        files.forEach(previewFile)
    }

    function handleDrops(e) {
        var dt = e.dataTransfer
        var files = dt.files
        const input = document.getElementById('imgUpload')
        for (let i = 0; i < files.length; i++) {
            const file = files[i]
            dt.items.add(file);
        }
        input.files = dt.files
        handleFiles_images(files)
    }


    function handleFiles_images(files) {
        files = [...files]
        initializeProgress(files.length)
        var form_data = new FormData();
        var totalfiles = document.getElementById('imgUpload').files.length;
        for (var index = 0; index < totalfiles; index++) {
            form_data.append("image[]", document.getElementById('imgUpload').files[index]);
        }
        form_data.append("_token", '<?php echo e(csrf_token()); ?>');
        form_data.append("path", 'CATEGORY_IMAGE_ROOT_PATH');
        $('.loader-wrapper').show();
        $.ajax({
            type: 'POST',
            url:  "<?php echo e(route('category.categoryPhotosUploads')); ?>",
            data: form_data,
            contentType: false,
            processData: false,
            success: function (data) {
                console.log(data)
                $.each(data, function (key, val) {
                    var result = val.type.split('/');
                    if (result[0] == 'image') {
                        var html = `<div class="imageBox">
                                        <input hidden name="images[]" value="${val.image}">
                                        <img src="<?php echo e(Config('constants.CATEGORY_IMAGE_PATH')); ?>/${val.image}">
                                        <a href="javascript:void(0)" data-image="${val.image}" data-type-image="session" class="imageDelete">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="27" viewBox="0 0 24 24">
                                                <path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z"></path>
                                            </svg>
                                        </a>
                                    </div>`;
                        $('#gallery').append(html);
                    } else {
                        toastr.error('Browse to upload a valid File with image extension');
                    }
                    $('.loader-wrapper').hide();
                });
            }
        });
    }

    $('body').on('click', '.imageDelete', function () {
        var removeElement = $(this).parent();
        var image_delete  = $(this).data("image");
        var type_image    = $(this).data("type-image");
        var path          = 'CATEGORY_IMAGE_ROOT_PATH';
        Swal.fire({
            title: "Are you sure?",
            text: "Want to delete this photos",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it",
            cancelButtonText: "No, cancel",
            reverseButtons: true
        }).then(function (result) {
            if (result.value) {
                $('.loader-wrapper').show();
                $.ajax({
                    type: "POST",
                    url:  "<?php echo e(route('category.categoryPhotosDelete')); ?>",
                    data: { image: image_delete,type_image:type_image,path: path, _token: _token },
                    success: function (response) {
                        removeElement.remove();
                        $('.loader-wrapper').hide();
                    }
                });
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/keasybuy/web/keasybuypanel.dev.obdemo.com/public_html/resources/views/admin/category/edit.blade.php ENDPATH**/ ?>