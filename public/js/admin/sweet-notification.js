var handleSweetNotification = function () {
    $('[data-click="swal-danger"]').click(function (e) {
        var url = 'http://admin.flamehaze.test/user';
        e.preventDefault();
        swal({
            title: 'Are you sure?',
            text: 'You will not be able to recover this imaginary file!',
            icon: 'error',
            buttons: {
                cancel: {
                    text: 'Cancel',
                    value: null,
                    visible: true,
                    className: 'btn btn-default',
                    closeModal: true,
                },
                confirm: {
                    text: 'Warning',
                    value: true,
                    visible: true,
                    className: 'btn btn-danger',
                    closeModal: true
                }
            }
        }).then((willDelete) => {
            if (willDelete) {
                swal("Poof! Your imaginary file has been deleted!", {
                    icon: "success",
                });
                window.location.href = url;
            } else {
                swal("Your imaginary file is safe!", {
                    icon: "success",
                });
            }
        });
    });
};

var sweetNotification = function () {
    "use strict";
    return {
        init: function () {
            handleSweetNotification();
        }
    };
}();