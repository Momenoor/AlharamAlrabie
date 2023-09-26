"use strict";

var EcommerceProduct = (function() {

    function initRepeater() {
        $("#kt_ecommerce_add_product_options").repeater({
            initEmpty: false,
            defaultValues: { "text-input": "foo" },
            show: function() {
                $(this).slideDown();
                initSelect2();
            },
            hide: function(e) {
                $(this).slideUp(e);
            }
        });
    }

    function initSelect2() {
        document.querySelectorAll('[data-kt-ecommerce-catalog-add-product="product_option"]').forEach((element) => {
            if (!$(element).hasClass("select2-hidden-accessible")) {
                $(element).select2({ minimumResultsForSearch: -1 });
            }
        });
    }

    function initQuillEditors() {
        ["#kt_ecommerce_add_product_description", "#kt_ecommerce_add_product_meta_description"].forEach((selector) => {
            const element = document.querySelector(selector);
            if (element) {
                new Quill(element, {
                    modules: { toolbar: [[{ header: [1, 2, false] }], ["bold", "italic", "underline"], ["image", "code-block"]] },
                    placeholder: "Type your text here...",
                    theme: "snow"
                });
            }
        });
    }

    function initTagify() {
        ["#kt_ecommerce_add_product_category", "#kt_ecommerce_add_product_tags"].forEach((selector) => {
            const element = document.querySelector(selector);
            if (element) {
                new Tagify(element, {
                    whitelist: ["new", "trending", "sale", "discounted", "selling fast", "last 10"],
                    dropdown: { maxItems: 20, classname: "tagify__inline__suggestions", enabled: 0, closeOnSelect: false }
                });
            }
        });
    }

    // Additional init functions can go here like initDiscountSlider, initDropzone, etc.

    return {
        init: function() {
            initRepeater();
            initSelect2();
            initQuillEditors();
            initTagify();
            // Call additional init functions here
        }
    };

})();
KTUtil.onDOMContentLoaded((function () {
    KTAppEcommerceSaveProduct.init()
}));
