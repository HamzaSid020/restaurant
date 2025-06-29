$(document).ready(function () {



    // **********************************Notification**************************************
    // Notification Hiding
    $("#notifications .opening-btns li button").click(function () {
        $('.toast').toast('hide');
    });

    // Android banners
    // Notification 1
    $("#default-notification").click(function () {
        $('.toast.noti-1').toast('show');
    });

    // Notification 2
    $("#tap-to-close-notification").click(function () {
        $('.toast.noti-2').toast('show');
    });
    $(".noti-2").click(function () {
        $(this).toast('hide');
    });

    // Notification 3
    $("#media-notification").click(function () {
        $('.toast.noti-3').toast('show');
    });

    // Notification 4
    $("#iconed-notification").click(function () {
        $('.toast.noti-4').toast('show');
    });

    // Notification 5
    $("#button-notification").click(function () {
        $('.toast.noti-5').toast('show');
    });

    // Notification 5
    $("#autoclose-notification").click(function () {
        $('.toast.noti-6').toast('show');
    });




    // IOS banners
    // Notification 1
    $("#ios-default-notification").click(function () {
        $('.toast.ios-noti-1').toast('show');
    });

    // Notification 2
    $("#ios-tap-to-close-notification").click(function () {
        $('.toast.ios-noti-2').toast('show');
    });
    $(".ios-noti-2").click(function () {
        $(this).toast('hide');
    });

    // Notification 3
    $("#ios-media-notification").click(function () {
        $('.toast.ios-noti-3').toast('show');
    });

    // Notification 4
    $("#ios-iconed-notification").click(function () {
        $('.toast.ios-noti-4').toast('show');
    });

    // Notification 5
    $("#ios-button-notification").click(function () {
        $('.toast.ios-noti-5').toast('show');
    });

    // Notification 5
    $("#ios-autoclose-notification").click(function () {
        $('.toast.ios-noti-6').toast('show');
    });




    // Colored banners
    // Notification 1
    $("#colored-default-notification").click(function () {
        $('.toast.colored-default-noti-1').toast('show');
    });
    $("#colored-primary-notification").click(function () {
        $('.toast.colored-primary-noti-2').toast('show');
    });

    // Notification 2
    $("#colored-success-notification").click(function () {
        $('.toast.colored-success-noti-3').toast('show');
    });

    // Notification 3
    $("#colored-warning-notification").click(function () {
        $('.toast.colored-warning-noti-4').toast('show');
    });

    // Notification 4
    $("#colored-light-notification").click(function () {
        $('.toast.colored-light-noti-5').toast('show');
    });

    // Notification 5
    $("#colored-dark-notification").click(function () {
        $('.toast.colored-dark-noti-6').toast('show');
    });

    // Notification 5
    $("#colored-danger-notification").click(function () {
        $('.toast.colored-danger-noti-7').toast('show');
    });

    // Notification 5
    $("#colored-info-notification").click(function () {
        $('.toast.colored-info-noti-8').toast('show');
    });







    // **********************************Toasts**************************************
    // Toast Hiding
    $("#toasts .opening-btns li button").click(function () {
        $('.toast').toast('hide');
    });

    // Android banners
    // Toast 1
    $("#default-toast").click(function () {
        $('.toast.toast-1').toast('show');
    });

    // Toast 2
    $("#tap-to-close-toast").click(function () {
        $('.toast.toast-2').toast('show');
    });
    $(".toast-2").click(function () {
        $(this).toast('hide');
    });

    // Toast 4
    $("#iconed-toast").click(function () {
        $('.toast.toast-4').toast('show');
    });

    // Toast 5
    $("#autoclose-toast").click(function () {
        $('.toast.toast-6').toast('show');
    });



    // Toast 1
    $("#default-toast-bottom").click(function () {
        $('.toast.toast-bottom-1').toast('show');
    });

    // Toast 2
    $("#tap-to-close-toast-bottom").click(function () {
        $('.toast.toast-bottom-2').toast('show');
    });
    $(".toast.toast-bottom-2").click(function () {
        $(this).toast('hide');
    });

    // Toast 3
    $("#iconed-toast-bottom").click(function () {
        $('.toast.toast-bottom-3').toast('show');
    });

    // Toast 4
    $("#autoclose-toast-bottom").click(function () {
        $('.toast.toast-bottom-4').toast('show');
    });


    // Toast Center
    // Toast 1
    $("#default-toast-center").click(function () {
        $('.toast.toast-center-1').toast('show');
    });

    // Toast 2
    $("#tap-to-close-toast-center").click(function () {
        $('.toast.toast-center-2').toast('show');
    });
    $(".toast.toast-center-2").click(function () {
        $(this).toast('hide');
    });

    // Toast 3
    $("#iconed-toast-center").click(function () {
        $('.toast.toast-center-3').toast('show');
    });

    // Toast 4
    $("#autoclose-toast-center").click(function () {
        $('.toast.toast-center-4').toast('show');
    });


    // Toast Center
    // Toast 1
    $("#default-colored-toast").click(function () {
        $('.toast.toast-default-colored').toast('show');
    });
    $("#primary-colored-toast").click(function () {
        $('.toast.toast-primary-colored').toast('show');
    });
    $("#success-colored-toast").click(function () {
        $('.toast.toast-success-colored').toast('show');
    });
    $("#warning-colored-toast").click(function () {
        $('.toast.toast-warning-colored').toast('show');
    });
    $("#light-colored-toast").click(function () {
        $('.toast.toast-light-colored').toast('show');
    });
    $("#dark-colored-toast").click(function () {
        $('.toast.toast-dark-colored').toast('show');
    });
    $("#danger-colored-toast").click(function () {
        $('.toast.toast-danger-colored').toast('show');
    });
    $("#info-colored-toast").click(function () {
        $('.toast.toast-info-colored').toast('show');
    });








    // **********************************Notification**************************************
    // Action Sheet Hiding
    $(".action-sheets .opening-btns li button").click(function () {
        $('.action-sheet').removeClass('show');
        $('.overlay-on').addClass('show');
    });
    $('.overlay-on , .action-sheet ul li').click(function (e) {
        $('.overlay-on').removeClass('show');
        $('.action-sheet').removeClass('show');
    });


    // Android banners
    // Default Sheet 1
    $("#default-sheet").click(function () {
        $('.default-action-sheet').addClass('show');
    });

    // Inset Sheet 1
    $("#inset-sheet").click(function () {
        $('.inset-action-sheet').addClass('show');
    });

    // Iconed Sheet 1
    $("#iconed-sheet").click(function () {
        $('.iconed-action-sheet').addClass('show');
    });

    // Inset Iconed Sheet 1
    $("#inset-iconed-sheet").click(function () {
        $('.inset-iconed-action-sheet').addClass('show');
    });

    // Share Sheet 1
    $("#share-sheet").click(function () {
        $('.share-action-sheet').addClass('show');
    });

    // Share Grid Sheet 1
    $("#shared-grid-sheet").click(function () {
        $('.share-grid-action-sheet').addClass('show');
    });

    // Share Grid Sheet 1
    $("#form-sheet").click(function () {
        $('.form-action-sheet').addClass('show');
    });

    // Share Grid Sheet 1
    $("#content-sheet").click(function () {
        $('.content-action-sheet').addClass('show');
    });




    // Panel Hiding
    $(".panels .opening-btns li button ").click(function () {
        $('.panel').removeClass('show');
        $('.overlay-on').addClass('show');
    });
    
    $(".overlay-on , .close-btn , .close-icon").click(function () {
        $('.panel').removeClass('show');
        $('.overlay-on').removeClass('show');
    });

     // Panel Left
     $("#panel-left").click(function () {
        $('.panel-left').addClass('show');
    });
     // Panel Left
     $("#panel-right").click(function () {
        $('.panel-right').addClass('show');
    });

});