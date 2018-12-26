var entry = {
    init : function () {
        entry.eventListener();
    },
    eventListener : function() {
        $('#signin-form').submit(function(e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            // entry.signin(formData);
            swal({
                title: "Are you sure?",
                text: "Delete this spes record",
                icon: "warning",
                buttons: [
                    'No, cancel it!',
                    'Yes, I am sure!'
                ],
                dangerMode: true,
            })
            .then((value) => {
                if(value){
                    // $.ajax({
                    //     type : 'POST',
                    //     url : api_url+'/bpc/delete-spes',
                    //     data : { id : id },
                    //     success: function(res) {
                    //         console.log(res);
                    //         if(res.errorCode == 0) {
                                swal({
                                    title: 'Deletion!',
                                    text: 'Successfully deleted!',
                                    icon: 'success'
                                  }).then(function() {
                                    // location.reload();
                                  });
                    //         } else {
                    //             swal("Delete Spes", res.errorMsg, "error");                            
                    //         }
                    //     }
                    // });
                } 
                else {
                    swal("Cancelled", "This record is safe :)", "error");
                }
            });
        });
    },
    signin : function(params)  {
        $.ajax({
            type : 'POST',
            url : api_url+'/entry/signin',
            data : formData,
            contentType : false,
            cache       : false,    
            processData : false,
            success : function(res) {
                console.log('res ',res);
                if(res.errorCode == 0) {
                    swal("Add Account", res.successMsg, "success")
                    .then((value) => {
                        location.reload();
                    });
                } else {
                    swal("Adding Reminders", res.errorMsg, "error");                            
                }
            }
        });
    }
}
entry.init();