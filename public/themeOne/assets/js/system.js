
const KTAppEcommerceProducts = (() => {
    let tableElement, dataTableInstance;

    // Function to handle row deletion
    const handleRowDeletion = () => {
        const deleteButtons = tableElement.querySelectorAll('[data-product-filter="delete_row"]');

        deleteButtons.forEach((button) => {
            button.addEventListener("click", (event) => {
                event.preventDefault();

                const rowElement = event.target.closest("tr");
                const productName = rowElement.querySelector('[data-product-filter="product_name"]').innerText;

                Swal.fire({
                    text: `Are you sure you want to delete ${productName}?`,
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then((result) => {
                    if (result.value) {
                        Swal.fire({
                            text: `You have deleted ${productName}!`,
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        }).then(() => {
                            dataTableInstance.row($(rowElement)).remove().draw();
                        });
                    } else if (result.dismiss === "cancel") {
                        Swal.fire({
                            text: `${productName} was not deleted.`,
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        });
                    }
                });
            });
        });
    };

    // Initialize module
    const init = () => {
        tableElement = document.querySelector("#products_table");

        if (tableElement) {
            dataTableInstance = $(tableElement).DataTable({
                info: false,
                order: [],
                pageLength: 10,
                columnDefs: [
                    { render: DataTable.render.number(",", ".", 2), targets: 4 },
                    { orderable: false, targets: 0 },
                    { orderable: false, targets: 7 }
                ]
            });

            // Attach event handlers
            dataTableInstance.on("draw", handleRowDeletion);

            document.querySelector('[data-product-filter="search"]').addEventListener("keyup", (event) => {
                dataTableInstance.search(event.target.value).draw();
            });

            const statusFilter = document.querySelector('[data-product-filter="status"]');
            $(statusFilter).on("change", (event) => {
                const filterValue = event.target.value === "all" ? "" : event.target.value;
                dataTableInstance.column(6).search(filterValue).draw();
            });

            handleRowDeletion();
        }
    };

    return {
        init
    };

})();

document.addEventListener("DOMContentLoaded", () => {
    KTAppEcommerceProducts.init();
});
