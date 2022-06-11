if($('#v-line-pills-home').hasClass('active')){
                $('.companies').empty();
                $('.project').empty();
                $('.department').empty();
                $('.designation').empty();
                $('.officeshift').empty();
                $('.reporting_to').empty();
                $('.companies').append( `<option value="" disabled selected>Select Companies</option>`);
                $('.project').append( `<option value="" disabled selected>Select Project</option>`);
                $('.department').append(`<option value="" disabled selected>Select Department</option>`);
                $('.designation').append(`<option value="" disabled selected>Select Designation</option>`);
                $('.officeshift').append(`<option value="" disabled selected>Select Officeshift</option>`);
                $('.reporting_to').append(`<option value="" disabled selected>Select Reporting To</option>`);
        var id = <?php echo $basic->id; ?>

        var target = "{{ url('employee/basicinfo')}}/" + id;
        $.ajax({
            url: target,
            dataType: "json",
            success: function (data) {
                $('#employeeID').val(data.basicinfo.employeeID);
                $('#full_name').val(data.basicinfo.full_name);
                $('#fathers_name').val(data.basicinfo.fathers_name);
                $('#email').val(data.basicinfo.email);
                $('#phone').val(data.basicinfo.phone);
                $('#emergency_phone').val(data.basicinfo.emergency_phone);
                $('#gender').val(data.basicinfo.gender);
                $('.hidden_id').val(data.basicinfo.id);
                $('#city').val(data.basicinfo.city);
                $('#state').val(data.basicinfo.state);
                $('#dob').val(data.basicinfo.dob);
                $('#permanent_address').val(data.basicinfo.permanent_address);
                $('#present_address').val(data.basicinfo.present_address);
                $('#blood_group').val(data.basicinfo.blood_group);
                $('#joining_date').val(data.basicinfo.joining_date);
                $('#leaving_date').val(data.basicinfo.leaving_date);
                $('#confirmation_date').val(data.basicinfo.confirmation_date);
                for(i=0;i<data.companies.length;i++){
                  
                    if(data.basicinfo.company_id==data.companies[i].id){
            $('.companies').append(`<option selected value="${data.companies[i].id}">
              ${data.companies[i].company_name}
         </option>`);
                    }else{
                        $('.companies').append(`<option  value="${data.companies[i].id}">
              ${data.companies[i].company_name}
         </option>`);
                    }
}

                for(i=0;i<data.projects.length;i++){
                    if(data.basicinfo.project_id==data.projects[i].id){
                         $('.project').append(`<option selected value="${data.projects[i].id}">
                                       ${data.projects[i].project}
                                  </option>`);
                    }else{
                        $('.project').append(`<option value="${data.projects[i].id}">
                        ${data.projects[i].project}
                   </option>`);   
                    }
                }

                for(i=0;i<data.departments.length;i++){
                    if(data.basicinfo.department_id==data.departments[i].id){
                         $('.department').append(`<option selected value="${data.departments[i].id}">
                                       ${data.departments[i].department}
                                  </option>`);
                    }else{
                        $('.department').append(`<option value="${data.departments[i].id}">
                        ${data.departments[i].department}
                   </option>`);
                    }
                }

                for(i=0;i<data.designations.length;i++){
                    if(data.basicinfo.designation_id==data.designations[i].id){
                         $('.designation').append(`<option selected value="${data.designations[i].id}">
                                       ${data.designations[i].designation}
                                  </option>`);
                    }else{
                        $('.designation').append(`<option value="${data.designations[i].id}">
                        ${data.designations[i].designation}
                   </option>`);
                    }
                }

                
                for(i=0;i<data.officeshifts.length;i++){
                    if(data.basicinfo.shift_id==data.officeshifts[i].id){
                         $('.officeshift').append(`<option selected value="${data.officeshifts[i].id}">
                                       ${data.officeshifts[i].shift_name}
                                  </option>`);
                    }else{
                        $('.officeshift').append(`<option value="${data.officeshifts[i].id}">
                        ${data.officeshifts[i].shift_name}
                   </option>`);
                    }
                }
                console.log(data.reporting);
                for(i=0;i<data.reporting.length;i++){
                    if(data.basicinfo.reporting_to==data.reporting[i].id){
                         $('.reporting_to').append(`<option selected value="${data.reporting[i].id}">
                                       ${data.reporting[i].full_name}
                                  </option>`);
                    }else{
                        $('.reporting_to').append(`<option value="${data.reporting[i].id}">
                        ${data.reporting[i].full_name}
                   </option>`);
                    }
                }

             
                
            }
        })
}

                $('#company_id').on('change', function () {
                $('.project').empty();
                $('.department').empty();
                $('.designation').empty();
                $('.officeshift').empty();
                $('.project').append( `<option value="" disabled selected>Select Project</option>`);
                $('.department').append(`<option value="" disabled selected>Select Department</option>`);
                $('.designation').append(`<option value="" disabled selected>Select Designation</option>`);
                $('.officeshift').append(`<option value="" disabled selected>Select Officeshift</option>`);
                var id = $(this).val();
                       
                var target = "{{ url('employee/loaddata')}}/" + id;
        
                $.ajax({
                    url: target,
                    dataType: "json",
                    success: function (data) {

                        for(i=0;i<data.projects.length;i++){
                         $('.project').append(`<option value="${data.projects[i].id}">
                                       ${data.projects[i].project}
                                  </option>`);
                }

                for(i=0;i<data.departments.length;i++){
                         $('.department').append(`<option value="${data.departments[i].id}">
                                       ${data.departments[i].department}
                                  </option>`);
                }

                for(i=0;i<data.designations.length;i++){
                         $('.designation').append(`<option value="${data.designations[i].id}">
                                       ${data.designations[i].designation}
                                  </option>`);
                }

                
                for(i=0;i<data.officeshifts.length;i++){
                         $('.officeshift').append(`<option value="${data.officeshifts[i].id}">
                                       ${data.officeshifts[i].shift_name}
                                  </option>`);
                }
                    }
                })
            });
        


            $('#update_basic_form').on('submit', function (event) {
                event.preventDefault();
                $.ajax({
                    url: "{{route('employee.updatebasicinfo')}}",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: "json",
                    success: function (data) {
                        var html = '';
                        if (data.errors) {
                            html = '<div class="alert alert-danger">';
                            for (var count = 0; count < data.errors.length; count++) {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if (data.success) {
                            swal({
                                title: 'Update!',
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
            });



