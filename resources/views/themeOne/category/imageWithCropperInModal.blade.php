<!--begin::Image input-->
<div id="kt_ecommerce_edit_product_image"
     class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
     data-kt-image-input="true">
    <!--begin::Preview existing avatar-->
    <div class="image-input-wrapper w-150px h-150px"
         style="background-image: url('{{asset(old('cropped_image',$product->image))}}')">
    </div>
    <!--end::Preview existing avatar-->
    <!--begin::Label-->
    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
           data-kt-image-input-action="change">
        <i class="ki-duotone ki-pencil fs-7">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
        <!--begin::Inputs-->
        <input type="file" id="image" data-old-cropped-image="{{old('cropped_image','')}}" name="image" value="{{old('cropped_image',$product->image)}}"
               accept=".png, .jpg, .jpeg"/>
        <input type="hidden" name="image_remove"/>
        <!--end::Inputs-->
    </label>
    <!--end::Label-->
    <!--begin::Cancel-->
    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
          data-kt-image-input-action="cancel">
														<i class="ki-duotone ki-cross fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
    <!--end::Cancel-->
    <!--begin::Remove-->
    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
          data-kt-image-input-action="remove">
														<i class="ki-duotone ki-cross fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
    <!--end::Remove-->
</div>
<!--end::Image input-->
<!--begin::Description-->
<div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image
    files are accepted
</div>
<!--end::Description-->
<div class="modal fade" id="cropModal" tabindex="-1" aria-labelledby="cropModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cropModalLabel">Crop Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="max-width: 460px">
                <img id="imageToCrop" src="" alt="Image to crop" style="max-width: 100%">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="cropButton">Crop</button>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        KTUtil.onDOMContentLoaded(function () {
            var imageInputElement = document.querySelector("#kt_ecommerce_edit_product_image");
            var imageInput = KTImageInput.getInstance(imageInputElement);

            imageInput.on("kt.imageinput.change", function () {
                return false;
            });

            var modalElement = document.getElementById('cropModal');
            var modal = new bootstrap.Modal(modalElement);
            var imageElement = document.getElementById('imageToCrop');
            var cropper;

            modalElement.addEventListener('shown.bs.modal', function () {
                cropper = new Cropper(imageElement, {
                    aspectRatio: 1,
                    viewMode: 3,
                });
            });

            modalElement.addEventListener('hidden.bs.modal', function () {
                imageElement.src = '';
                if (cropper !== null) {
                    cropper.destroy();
                    cropper = null;
                }
            });

            document.getElementById('cropButton').addEventListener('click', function () {
                cropper.getCroppedCanvas().toBlob(function (blob) {
                    var croppedImageUrl = URL.createObjectURL(blob);

                    var formData = new FormData();
                    formData.append('cropped_image', blob, 'croppedImage.jpg');

                    var form = document.getElementById('kt_ecommerce_edit_product_form');
                    form.appendChild(createInputFileElement(formData));

                    KTUtil.css(imageInput.wrapperElement, 'background-image', 'url(' + croppedImageUrl + ')');
                    cropper.destroy();
                    cropper = null;
                });
                modal.hide();
            });

            function createInputFileElement(formData) {
                // Create a hidden input file element
                var croppedImageInput = document.createElement('input');
                croppedImageInput.type = 'file';
                croppedImageInput.name = 'cropped_image';
                croppedImageInput.classList.add('d-none');

                // Create a Blob object from the FormData and set it as the input's value
                var blob = formData.get('cropped_image');
                var file = new File([blob], 'croppedImage.jpg', { type: 'image/jpeg' });

                // Create a FileList containing the File object
                var fileList = new DataTransfer();
                fileList.items.add(file);

                // Set the 'files' property of the input element with the FileList
                croppedImageInput.files = fileList.files;

                return croppedImageInput;
            }

            // Image input change event
            KTUtil.addEvent(imageInput.getInputElement(), 'change', function (e) {
                e.preventDefault();

                if (imageInput.inputElement.files && imageInput.inputElement.files[0]) {
                    var fileReader = new FileReader();

                    fileReader.onload = function (event) {
                        imageElement.src = event.target.result;
                        modal.show();
                    };

                    fileReader.readAsDataURL(imageInput.inputElement.files[0]);

                    // More logic to update the classes
                    imageInputElement.classList.add('image-input-changed');
                    imageInputElement.classList.remove('image-input-empty');
                }
            });
        });
    </script>
@endpush
