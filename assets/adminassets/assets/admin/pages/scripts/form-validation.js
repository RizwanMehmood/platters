var FormValidation = function () {

    // basic validation
    var handleValidation1 = function () {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form1 = $('#form_sample_1');
        var error1 = $('.alert-danger', form1);
        var success1 = $('.alert-success', form1);

        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            messages: {
                select_multi: {
                    maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                    minlength: jQuery.validator.format("At least {0} items must be selected")
                }
            },
            rules: {
                name: {
                    minlength: 2,
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                url: {
                    required: true,
                    url: true
                },
                number: {
                    required: true,
                    number: true
                },
                digits: {
                    required: true,
                    digits: true
                },
                creditcard: {
                    required: true,
                    creditcard: true
                },
                occupation: {
                    minlength: 5,
                },
                select: {
                    required: true
                },
                select_multi: {
                    required: true,
                    minlength: 1,
                    maxlength: 5
                }
            },
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success1.hide();
                error1.show();
                Metronic.scrollTo(error1, -200);
            },
            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },
            success: function (label) {
                label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
            },
            submitHandler: function (form) {
                success1.show();
                error1.hide();
            }
        });


    }

    // validation using icons
    var handleValidation2 = function () {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form2 = $('#form_sample_2');
        var error2 = $('.alert-danger', form2);
        var success2 = $('.alert-success', form2);

        form2.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            rules: {
                name: {
                    minlength: 2,
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                url: {
                    required: true,
                    url: true
                },
                number: {
                    required: true,
                    number: true
                },
                digits: {
                    required: true,
                    digits: true
                },
                creditcard: {
                    required: true,
                    creditcard: true
                },
            },
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success2.hide();
                error2.show();
                Metronic.scrollTo(error2, -200);
            },
            errorPlacement: function (error, element) { // render error placement for each input type
                var icon = $(element).parent('.input-icon').children('i');
                icon.removeClass('fa-check').addClass("fa-warning");
                icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
            },
            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
            },
            unhighlight: function (element) { // revert the change done by hightlight

            },
            success: function (label, element) {
                var icon = $(element).parent('.input-icon').children('i');
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                icon.removeClass("fa-warning").addClass("fa-check");
            },
            submitHandler: function (form) {
                success2.show();
                error2.hide();
                form[0].submit(); // submit the form
            }
        });


    }

    // advance validation
    var handleValidation3 = function () {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form3 = $('#form_sample_3');
        var error3 = $('.alert-danger', form3);
        var success3 = $('.alert-success', form3);

        //IMPORTANT: update CKEDITOR textarea with actual content before submit
        form3.on('submit', function () {
            for (var instanceName in CKEDITOR.instances) {
                CKEDITOR.instances[instanceName].updateElement();
            }
        })

        form3.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            rules: {
                name: {
                    minlength: 2,
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                options1: {
                    required: true
                },
                options2: {
                    required: true
                },
                select2tags: {
                    required: true
                },
                datepicker: {
                    required: true
                },
                occupation: {
                    minlength: 5,
                },
                membership: {
                    required: true
                },
                service: {
                    required: true,
                    minlength: 2
                },
                markdown: {
                    required: true
                },
                editor1: {
                    required: true
                },
                editor2: {
                    required: true
                }
            },
            messages: {// custom messages for radio buttons and checkboxes
                membership: {
                    required: "Please select a Membership type"
                },
                service: {
                    required: "Please select  at least 2 types of Service",
                    minlength: jQuery.validator.format("Please select  at least {0} types of Service")
                }
            },
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.parent(".input-group").size() > 0) {
                    error.insertAfter(element.parent(".input-group"));
                } else if (element.attr("data-error-container")) {
                    error.appendTo(element.attr("data-error-container"));
                } else if (element.parents('.radio-list').size() > 0) {
                    error.appendTo(element.parents('.radio-list').attr("data-error-container"));
                } else if (element.parents('.radio-inline').size() > 0) {
                    error.appendTo(element.parents('.radio-inline').attr("data-error-container"));
                } else if (element.parents('.checkbox-list').size() > 0) {
                    error.appendTo(element.parents('.checkbox-list').attr("data-error-container"));
                } else if (element.parents('.checkbox-inline').size() > 0) {
                    error.appendTo(element.parents('.checkbox-inline').attr("data-error-container"));
                } else {
                    error.insertAfter(element); // for other inputs, just perform default behavior
                }
            },
            invalidHandler: function (event, validator) { //display error alert on form submit   
                success3.hide();
                error3.show();
                Metronic.scrollTo(error3, -200);
            },
            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },
            success: function (label) {
                label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
            },
            submitHandler: function (form) {
                success3.show();
                error3.hide();
                form[0].submit(); // submit the form
            }

        });

        //apply validation on select2 dropdown value change, this only needed for chosen dropdown integration.
        $('.select2me', form3).change(function () {
            form3.validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
        });

        // initialize select2 tags
        $("#select2_tags").change(function () {
            form3.validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input 
        }).select2({
            tags: ["red", "green", "blue", "yellow", "pink"]
        });

        //initialize datepicker
        $('.date-picker').datepicker({
            rtl: Metronic.isRTL(),
            autoclose: true
        });
        $('.date-picker .form-control').change(function () {
            form3.validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input 
        })
    }

    var handleWysihtml5 = function () {
        if (!jQuery().wysihtml5) {

            return;
        }

        if ($('.wysihtml5').size() > 0) {
            $('.wysihtml5').wysihtml5({
                "stylesheets": ["../../assets/global/plugins/bootstrap-wysihtml5/wysiwyg-color.css"]
            });
        }
    }

    // basic validation
    var add_table_form = function () {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form1 = $('#add_table_form');
        var error1 = $('.alert-danger', form1);
        var success1 = $('.alert-success', form1);

        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            messages: {
                select_multi: {
                    maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                    minlength: jQuery.validator.format("At least {0} items must be selected")
                }
            },
            rules: {
                table_name: {
                    minlength: 1,
                    required: true

                },
                table_capacity: {
                    required: true,
                    maxlength: 2,
                    digits: true
                }
            },
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success1.hide();
                error1.show();
                Metronic.scrollTo(error1, -200);
            },
            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },
            success: function (label) {
                label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
            },
            submitHandler: function (form) {
                success1.show();
                error1.hide();
                form.submit();
            }
        });


    }

    // basic validation
    var add_waiter_form = function () {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form1 = $('#add_waiter_form');
        var error1 = $('.alert-danger', form1);
        var error2 = $('.alert-danger-js', form1);
        var success1 = $('.alert-success', form1);

        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            messages: {
                select_multi: {
                    maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                    minlength: jQuery.validator.format("At least {0} items must be selected")
                }
            },
            rules: {
                waiter_name: {
                    minlength: 2,
                    maxlength: 50,
                    required: true
                },
                waiter_mobile: {
                    required: true,
                    minlength: 11,
                    maxlength: 13
                },
                waiter_cnic: {
                    required: true,
                    minlength: 13,
                    maxlength: 15
                }
            },
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success1.hide();
                error2.show();
                error1.hide();
                Metronic.scrollTo(error1, -200);
            },
            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },
            success: function (label) {
                label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
            },
            submitHandler: function (form) {
                success1.show();
                error1.hide();
                error2.hide();
                form.submit();
            }
        });


    }
    var add_category_form = function () {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form1 = $('#add_category_form');
        var error1 = $('.alert-danger', form1);
        var success1 = $('.alert-success', form1);

        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            messages: {
                select_multi: {
                    maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                    minlength: jQuery.validator.format("At least {0} items must be selected")
                }
            },
            rules: {
                category_name: {
                    minlength: 2,
                    maxlength: 50,
                    required: true,
                    lettersandspaceonly: true
                }
            },
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success1.hide();
                error1.show();
                Metronic.scrollTo(error1, -200);
            },
            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },
            success: function (label) {
                label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
            },
            submitHandler: function (form) {
                success1.show();
                error1.hide();
                form.submit();
            }
        });


    }
    var add_inventory_form = function () {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form1 = $('#add_inventory_form');
        var error1 = $('.alert-danger', form1);
        var success1 = $('.alert-success', form1);

        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            messages: {
                select_multi: {
                    maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                    minlength: jQuery.validator.format("At least {0} items must be selected")
                }
            },
            rules: {
                inventory_name: {
                    minlength: 2,
                    maxlength: 50,
                    required: true
                },
                inventory_quantity: {
                    minlength: 1,
                    maxlength: 6,
                    required: true,
                    number: true
                },
                inventory_unit: {
                    required: true
                },
                danger_quantity: {
                    required: true,
                    number: true
                }
            },
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success1.hide();
                error1.show();
                Metronic.scrollTo(error1, -200);
            },
            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },
            success: function (label) {
                label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
            },
            submitHandler: function (form) {
                success1.show();
                error1.hide();
                form.submit();
            }
        });


    }

    var add_voucher_form = function () {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form1 = $('#add_voucher_form');
        var error1 = $('.alert-danger', form1);
        var success1 = $('.alert-success', form1);

        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            messages: {
                select_multi: {
                    maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                    minlength: jQuery.validator.format("At least {0} items must be selected")
                }
            },
            rules: {
                voucher_name: {
                    minlength: 4,
                    maxlength: 230,
                    required: true
                },
                quantity: {
                    minlength: 1,
                    required: true,
                    digits: true
                },
                voucher_price: {
                    minlength: 1,
                    required: true,
                    digits: true
                },
                min_price: {
                    minlength: 1,
                    required: true,
                    digits: true
                },
                price_type: {
                    required: true
                },
                expiry_date: {
                    required: true
                }

            },
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success1.hide();
                error1.show();
                Metronic.scrollTo(error1, -200);
            },
            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },
            success: function (label) {
                label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
            },
            submitHandler: function (form) {
                if($('select[name=price_type]', form).val() === "Percentage" && $('input[name=voucher_price]', form).val() > 100){
                    $('input[name=voucher_price]', form).closest('.form-group').addClass('has-error');
                    alert("Percentage cannot be greater than 100.");
                    error1.show();
                    return false;
                }
                success1.show();
                error1.hide();
                form.submit();
            }
        });


    }

    var add_user_form = function () {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form1 = $('#add_user_form');
        var error1 = $('.alert-danger', form1);
        var success1 = $('.alert-success', form1);

        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            messages: {
                select_multi: {
                    maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                    minlength: jQuery.validator.format("At least {0} items must be selected")
                }
            },
            rules: {
                user_full_name: {
                    minlength: 4,
                    maxlength: 28,
                    required: true
                },
                email: {
                    required: true,
                },
                password: {
                    required: true,
                },
                mobile: {
                    minlength: 10,
                    maxlength: 13,
                    required: true

                },
                security_answer: {
                    minlength: 1,
                    required: true
                }

            },
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success1.hide();
                error1.show();
                Metronic.scrollTo(error1, -200);
            },
            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },
            success: function (label) {
                label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
            },
            submitHandler: function (form) {
                success1.show();
                error1.hide();
                form.submit();
            }
        });


    }

    var add_reservation_form = function () {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form1 = $('#add_reservation_form');
        var error1 = $('.alert-danger', form1);
        var success1 = $('.alert-success', form1);

        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            messages: {
                select_multi: {
                    maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                    minlength: jQuery.validator.format("At least {0} items must be selected")
                }
            },
            rules: {
                host_nam: {
                    minlength: 2,
                    maxlength: 18,
                    required: true
                },
                func_name: {
                    maxlength: 18,
                    required: true
                },
                bill_type: {
                    maxlength: 18,
                    required: true
                },
                host_number: {
                    minlength: 10,
                    maxlength: 13,
                    required: true,
                },
                guests: {
                    minlength: 1,
                    maxlength: 6,
                    required: true,
                    digits: true
                },
                amount_received: {
                    minlength: 1,
                    maxlength: 8,
                    required: true,
                    digits: true
                },
                advance_received: {
                    minlength: 1,
                    maxlength: 8,
                    required: true,
                    digits: true
                },
                total_bill: {
                    minlength: 1,
                    maxlength: 9,
                    required: true,
                    digits: true
                },
                per_head: {
                    minlength: 1,
                    maxlength: 6,
                    required: true,
                },
                reservation_time_to: {
                    required: true
                },
                reservation_time_from: {
                    required: true
                },
                reservation_date: {
                    required: true
                }

            },
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success1.hide();
                error1.show();
                Metronic.scrollTo(error1, -200);
            },
            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },
            success: function (label) {
                label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
            },
            submitHandler: function (form) {
                success1.show();
                error1.hide();
                form.submit();
            }
        });


    }

    var add_dish_form = function () {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form1 = $('#add_dish_form');
        var error1 = $('.alert-danger', form1);
        var success1 = $('.alert-success', form1);

        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            messages: {
                select_multi: {
                    maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                    minlength: jQuery.validator.format("At least {0} items must be selected")
                }
            },
            rules: {
                dish_name: {
                    minlength: 3,
                    required: true
                },
                dish_category: {
                    required: true
                },
                dish_cost: {
                    minlength: 1,
                    required: true,
                    digits: true
                },
                dish_price: {
                    minlength: 1,
                    required: true,
                    digits: true
                }
            },
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success1.hide();
                error1.show();
                Metronic.scrollTo(error1, -200);
            },
            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },
            success: function (label) {
                label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
            },
            submitHandler: function (form) {
                success1.show();
                error1.hide();
                form.submit();
            }
        });


    }
    var add_dish_to_order = function () {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form1 = $('#add_dish_to_order');
        var error1 = $('.alert-danger', form1);
        var success1 = $('.alert-success', form1);

        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            messages: {
                select_multi: {
                    maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                    minlength: jQuery.validator.format("At least {0} items must be selected")
                }
            },
            rules: {
                category_details: {
                    required: true
                },
                dish_details: {
                    required: true
                },
                dish_quantity: {
                    required: true,
                    digits: true
                }
            },
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success1.hide();
                error1.show();
                Metronic.scrollTo(error1, -200);
            },
            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },
            success: function (label) {
                label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
            },
            submitHandler: function (form) {
                success1.show();
                error1.hide();
                form.submit();
            }
        });


    }
    var add_discount_form = function () {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form1 = $('#add_discount_form');
        var error1 = $('.alert-danger', form1);
        var success1 = $('.alert-success', form1);

        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            messages: {
                select_multi: {
                    maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                    minlength: jQuery.validator.format("At least {0} items must be selected")
                }
            },
            rules: {
                discount_value: {
                    required: true
                }
            },
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success1.hide();
                error1.show();
                Metronic.scrollTo(error1, -200);
            },
            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },
            success: function (label) {
                label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
            },
            submitHandler: function (form) {
                success1.show();
                error1.hide();
                form.submit();
            }
        });


    }

    var add_expense_form = function () {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form1 = $('#add_expense_form');
        var error1 = $('.alert-danger', form1);
        var success1 = $('.alert-success', form1);

        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            messages: {
                select_multi: {
                    maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                    minlength: jQuery.validator.format("At least {0} items must be selected")
                }
            },
            rules: {
                expense_category: {
                    required: true
                },
                expense_cost: {
                    minlength: 2,
                    required: true,
                    digits: true
                },
                expense_date: {
                    minlength: 8,
                    required: true
                }
            },
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success1.hide();
                error1.show();
                Metronic.scrollTo(error1, -200);
            },
            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },
            success: function (label) {
                label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
            },
            submitHandler: function (form) {
                success1.show();
                error1.hide();
                form.submit();
            }
        });


    }

    return {
        //main function to initiate the module
        init: function () {

            handleWysihtml5();
            handleValidation1();
            handleValidation2();
            handleValidation3();
            add_table_form();
            add_waiter_form();
            add_category_form();
            add_inventory_form();
            add_dish_form();
            add_dish_to_order();
            add_discount_form();
            add_expense_form();
            add_voucher_form();
            add_reservation_form();
            add_user_form();
        }

    };

}();