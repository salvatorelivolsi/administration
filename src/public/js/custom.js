$(document).ready(function() {
    $('body').on('click', '.execAndDeleteMe', function(e) {
        e.preventDefault();

        $obj = $(this);
        $href = $obj.attr('href');
        $.ajax({
            url: $href,
            type: 'get',
            success: function(data) {
                notify(data);
                $obj.remove();
            },
            error : function(data)
            {
                notify(data);
            }
        });


    });
    $('body').on('click', '.execAndToggle', function(e) {
        e.preventDefault();

        $obj = $(this);
        $parent = $obj.parent();
        $href = $obj.attr('href');

        $.ajax({
            url: $href,
            type: 'get',
            success: function(data) {
                notify(data);
                $parent.find('.toggle').toggleClass('hidden');
            },
            error : function(data)
            {
                notify(data);
            }
        });

    });
    $('body').on('click', '.execAndDeleteTarget', function(e) {
        e.preventDefault();

        $obj = $(this);
        $href = $obj.attr('href');
        $target = $($obj.data('target'));

        $.ajax({
            url: $href,
            type: 'get',
            success: function(data) {
                notify(data);
                $target.remove();
            },
            error : function(data)
            {
                notify(data);
            }
        });

    });

    if($(".tinymce").length > 0){
        tinymce.init({
            selector: "textarea.tinymce",
            language: 'fr_FR',
            theme: "modern",
            height:300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons"
        });
    }

    if($(".tinysmall").length > 0){
        tinymce.init({
            selector: "textarea.tinysmall",
            language: 'fr_FR',
            theme: "modern",
            menubar: false,
            height:300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | forecolor"
        });
    }

    $('.datepicker').datepicker({
        autoclose: true,
        todayHighlight: true,
        orientation: 'bottom',
        format : 'dd/mm/yy'
    });

    $('.deleteConfirmation').on('click',function (e) {
        var obj = $(this);
        var event = e;
        e.preventDefault();
        swal({
            title: "Êtes-vous sûr ?",
            text: "Cette opération ne peut pas être annulée",
            type: "error",
            showCancelButton: true,
            cancelButtonClass: 'btn-white btn-md waves-effect',
            confirmButtonClass: 'btn-danger btn-md waves-effect waves-light',
            confirmButtonText: "Supprimer",
            cancelButtonText: "Annulé",
            closeOnConfirm: true,
            closeOnCancel: true
        }, function (isConfirm) {
            if(isConfirm) {
                console.log($(event.target).attr('href'));
                if(typeof($(event.target).attr('href')) != 'undefined') {
                    window.location.href = $(event.target).attr('href');
                } else {
                    obj.unbind('click').click();
                }
            }

        });

    });
});

function notify(data) {
    if(data.status == true) {
        $.Notification.notify('success','right top',false, data.message)
    } else {
        if(data.message) {
            message = data.message;
        } else {
            message = data.statusText;
        }
        $.Notification.notify('error','right top',false, message)
    }
}

