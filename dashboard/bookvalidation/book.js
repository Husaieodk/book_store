



$("form[name='book_form']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      book_name: "required",
    //   lastname: "required",
    book_price: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        // minlength:"2"
      },
    //   password: {
    //     required: true,
    //     minlength: 5
    //   }
    },
    // Specify validation error messages
    messages: {
      firstname: "Please enter your Book name",
    //   lastname: "Please enter your lastname",
    book_price: {
        required: "The field is required",
        // minlength: "Your password must be at least 5 characters long"
      },
     
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });

