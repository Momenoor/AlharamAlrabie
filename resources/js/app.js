//import './bootstrap';
import Cropper from 'cropperjs';
import 'cropperjs/dist/cropper.css';
import '../css/app.css';
// import './scripts.bundle.js';
// import './plugins/global/plugins.bundle.js';


var MNImageInput = function (element, options) {
    var self = this;

    if (element !== null) {
        var defaultOptions = {};

        // Initialization function
        function initialize () {
            self.options = KTUtil.deepExtend({}, defaultOptions, options);
            self.uid = KTUtil.getUniqueId('image-input');
            self.element = element;
            self.inputElement = KTUtil.find(element, 'input[type="file"]');
            self.wrapperElement = KTUtil.find(element, '.image-input-wrapper');
            self.cancelElement = KTUtil.find(element, '[data-mn-image-input-action="cancel"]');
            self.removeElement = KTUtil.find(element, '[data-mn-image-input-action="remove"]');
            self.hiddenElement = KTUtil.find(element, 'input[type="hidden"]');
            self.src = KTUtil.css(self.wrapperElement, 'backgroundImage');

            self.element.setAttribute('data-mn-image-input', 'true');
            addEventListeners();

            KTUtil.data(self.element).set('image-input', self);
        }
        // Function to add event listeners
        function addEventListeners() {
            KTUtil.addEvent(self.inputElement, 'change', handleInputChange);
            KTUtil.addEvent(self.cancelElement, 'click', handleCancel);
            KTUtil.addEvent(self.removeElement, 'click', handleRemove);
        }

        // Event handlers
        function handleInputChange(e) {
            e.preventDefault();
            if (self.inputElement.files && self.inputElement.files[0]) {
                if (KTEventHandler.trigger(self.element, 'mn.imageinput.change', self) === false) {
                    return;
                }

                var fileReader = new FileReader();

                fileReader.onload = function (event) {

                    var modalElement = document.getElementById('cropModal');
                    var modal = new bootstrap.Modal(modalElement);
                    var imageElement = document.getElementById('imageToCrop');
                    var cropper;
                    modalElement.addEventListener('shown.bs.modal', function() {

                        imageElement.src = event.target.result;
                        cropper = new Cropper(imageElement, {
                            aspectRatio: 1,
                            viewMode: 2,
                        });
                    });

                    modalElement.addEventListener('hidden.bs.modal', function() {
                        imageElement.src = '';
                        if (cropper !== null) {
                            cropper.destroy();
                            cropper = null;
                        }
                    });
                    modal.show();
                    document.getElementById('cropButton').addEventListener('click', function() {
                        cropper.getCroppedCanvas().toBlob(function (blob) {
                            var croppedImageUrl = URL.createObjectURL(blob);
                            KTUtil.css(self.wrapperElement, 'background-image', 'url(' + croppedImageUrl + ')');
                            cropper.destroy();
                            cropper = null;
                        });
                        modal.hide();
                    });

//                     var image = document.createElement('img');
//                     image.classList.add('d-none');
//                     image.src = event.target.result;
//                     element.appendChild(image);
//                     // Initialize CropperJS on the image element
//                     var cropper = new Cropper(image, {
//                         // CropperJS options here
//
//                         autoCrop: true,
//                         movable: true,
//                         aspectRatio: 1 / 1,
// //                        movable: true,
//                         cropend (event) {
//                             cropper.getCroppedCanvas().toBlob(function (blob) {
//                                 var croppedImageUrl = URL.createObjectURL(blob);
//                                 KTUtil.css(self.wrapperElement, 'background-image', 'url(' + croppedImageUrl + ')');
//                             });
//                         },
//
//                     });

                    // Replace the existing background image with the new cropped image

                };
            }
            ;

            fileReader.readAsDataURL(self.inputElement.files[0]);
            self.element.classList.add('image-input-changed');
            self.element.classList.remove('image-input-empty');

            KTEventHandler.trigger(self.element, 'mn.imageinput.changed', self);
        }
    }

    function handleCancel(e) {
        e.preventDefault();

        if (KTEventHandler.trigger(self.element, 'mn.imageinput.cancel', self) !== false) {
            self.element.classList.remove('image-input-changed');
            self.element.classList.remove('image-input-empty');

            if (self.src === 'none') {
                KTUtil.css(self.wrapperElement, 'background-image', '');
                self.element.classList.add('image-input-empty');
            } else {
                KTUtil.css(self.wrapperElement, 'background-image', self.src);
            }

            self.inputElement.value = '';
            if (self.hiddenElement) {
                self.hiddenElement.value = '0';
            }

            KTEventHandler.trigger(self.element, 'mn.imageinput.canceled', self);
        }
    }

    function handleRemove(e) {
        e.preventDefault();

        if (KTEventHandler.trigger(self.element, 'mn.imageinput.remove', self) !== false) {
            self.element.classList.remove('image-input-changed');
            self.element.classList.add('image-input-empty');
            KTUtil.css(self.wrapperElement, 'background-image', 'none');

            self.inputElement.value = '';
            if (self.hiddenElement) {
                self.hiddenElement.value = '1';
            }

            KTEventHandler.trigger(self.element, 'mn.imageinput.removed', self);
        }
    }


    // Initialize
    if (KTUtil.data(element).has('image-input')) {
        self = KTUtil.data(element).get('image-input');
    } else {
        initialize();
    }

    // Public methods
    self.getInputElement = function () {
        return self.inputElement;
    };

    self.getElement = function () {
        return self.element;
    };

    self.destroy = function () {
        KTUtil.data(self.element).remove('image-input');
    };

    self.on = function (eventName, callback) {
        return KTEventHandler.on(self.element, eventName, callback);
    };

    self.one = function (eventName, callback) {
        return KTEventHandler.one(self.element, eventName, callback);
    };

    self.off = function (eventName, callback) {
        return KTEventHandler.off(self.element, eventName, callback);
    };

    self.trigger = function (eventName, extraParams) {
        return KTEventHandler.trigger(self.element, eventName, extraParams, self, extraParams);
    };
};


MNImageInput.getInstance = function (element) {
    return element !== null && KTUtil.data(element).has('image-input') ? KTUtil.data(element).get('image-input') : null;
};

MNImageInput.createInstances = function (selector = '[data-mn-image-input]') {
    var elements = document.querySelectorAll(selector);
    if (elements && elements.length > 0) {
        for (var i = 0; i < elements.length; i++) {
            new MNImageInput(elements[i]);
        }
    }
};

MNImageInput.init = function () {
    MNImageInput.createInstances();
};

KTUtil.onDOMContentLoaded( function () {
    MNImageInput.init();
});
