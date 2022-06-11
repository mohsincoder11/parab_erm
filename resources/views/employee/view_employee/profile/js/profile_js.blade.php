$('#profile_form').on('submit',function(event){
   
    event.preventDefault();
                $.ajax({
                    url: "{{url('employee/addprofile')}}",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: "json",
                    success: function (data) {
                        var html = '';
                        if (data.errors) {
                            swal({
                                title: 'Error!',
                                text: data.success,
                                type: 'error',
                                padding: '2em',
                                showCancelButton: false,
                                showConfirmButton: false
                            })
                        }
                        if (data.success) {
                            swal({
                                title: 'Added!',
                                text: data.success,
                                type: 'success',
                                padding: '2em',
                                showCancelButton: false,
                                showConfirmButton: false
                            })
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            setTimeout(function () {
                                location.reload();
                            }, 2000);
                        }
        
                        // $('#form_result1').html(html).slideDown(300).delay(5000).slideUp(300);
        
                    }
                });
})

$('#profile').change(function () {
    var ext = this.value.match(/\.(.+)$/)[1];
    switch (ext) {
        case 'jpg':
        case 'jpeg':
        case 'png':
        case 'gif':
            $('#addbutton').attr('disabled', false);
            break;
        default:
            swal({
                title: 'Error!',
                text: 'Please Select An Image .jpeg , .png, .jpg, .gif.',
                type: 'error',
                padding: '2em',
                timer: 3000,
                showCancelButton: false,
                showConfirmButton: false
            })
            this.value = '';
    }
});