/**
*
* email-signup.js
* This JS helps our newsletter email signup, which is now in the footer on every page. It relies in jQuery.
*
**/

var showModal = function(submittedEmail,elem) {
	// If the body has a modal class, we've already shown the modal
	if (isModalVisible()) {
		return;
	}
	if (typeof submittedEmail !== "undefined" && submittedEmail !== "") {
		document.forms['email-signup-data-form']['mce-EMAIL'].value = submittedEmail;
	}
	// If there's an elem, they clicked a button ... check it to do things
	if (typeof(elem) !== "undefined" && elem !== "") {
		// If this is an economic development button, show special things
		if ($(elem).hasClass('js-email-economic-development')) {
			$('#js-modal-headline').text('I\'m interested in Economic Development');
			$('#js-modal-description').text('Want to learn more about what Code for America is doing to promote inclusive economic growth? Join our email list help inform Code for America\'s work in this area.');
			if ($('.js-economic-development-checkbox').hasClass('hidden')) {
				$('.js-economic-development-checkbox').toggleClass('hidden');
				$('.js-economic-development-checkbox').find('input').prop('checked',true);
			}
			$.each($('.js-email-default-option'), function(index,option){
				if (!$(option).hasClass('hidden')) {
					$(option).addClass('hidden');
				}
			});
		}
	}
	// Scroll up to the top
	$("html, body").animate({ scrollTop: 0 }, "slow");
	// Add a class to body to show the modal
	$('body').addClass('modal-active');
}

var hideModal = function() {
	// If the body doesn't have a modal class, the modal is already hidden
	if (!isModalVisible()) {
		return;
	}
	// Remove class from body to hide the modal
	$('body').removeClass('modal-active');
}

var submitForm = function(data) {
	// Get the form button
	var button = data[0][6];
	// Make the form button show a loading state
	$(button).addClass('button-progress');
	// Send the request
    $.ajax({
        url: data.attr('action'),
        data: data.serialize(),
        cache       : false,
        dataType    : 'jsonp',
        contentType: "application/json-p; charset=utf-8",
        error       : function(err) {
        	console.log("Could not connect to the registration server. Please try again later.");
            var error = '<strong>There was a problem connecting to the server:</strong><br />' + err.msg;
            $(button).removeClass('button-progress');
           	$('#email-signup-error').html(failure);
           	$('#email-signup-error').show();
        },
        success     : function(response) {
            if (response.result != "success") {
                // Something went wrong, display an error (response.msg)
                // If the message is something we expect, rewrite it a bit
                if (response.msg[0] == "0") { response.msg = "Please make sure you fill out all fields. It looks like you're missing something." }
                var failure = '<strong>There was a problem</strong><br />' + response.msg;
                $(button).removeClass('button-progress');
               	$('#email-signup-error').html(failure);
               	$('#email-signup-error').show();
            } else {
                // It worked, let the user know
                var success = '<h2>You did it</h2><p>' + response.msg + '</p><a href="#" class="button js-modal-exit">Close</a>';
                $('.modal-content').html(success);
        		// Push a pageview so we can track our funnel
				ga('send', 'pageview', '/submit_email_signup_form');
            }
        }
    });
}

var isModalVisible = function() {
	// Check if the modal is visible
	if ($('body').hasClass('modal-active')) { return true; }
	else { return false; }
}

$(document).keyup(function(e) {
	// When the escape key is pressed and the modal is visible, hide the modal
	if (isModalVisible()) {
		if (e.keyCode == 27) {
			hideModal();
		}
	}
});

$(document).ready(function() {
	// When the email address entry form in the footer is submitted, try to show the modal
	$('.email-entry-form').submit(function(e){
		// Get the email address
		var email = this['email'].value;
		// Show the modal with the email
		showModal(email);
		// Stop submitting the form
		e.preventDefault();
		// Push a pageview so we can track our funnel
		ga('send', 'pageview', '/open_email_signup_form-fromfooter');
	});

  // When a signup button is pressed, show the modal
  $('.js-modal-show').click(function(e){
		showModal('',this);
    e.preventDefault();
    // Push a pageview so we can track our funnel
    ga('send', 'pageview', '/open_email_signup_form-frombutton');
  });

	// When js-modal-exit is clicked, try to close the modal
	// Using on notation so we can bind to elements that are added to the page as well
	$(document).on('click', '.js-modal-exit', function(e){
		hideModal();
		e.preventDefault();
	});

	// When the modal is visible and the user clicks anywhere else on the page, close it
	$(document).on('click', function(e) {
    // If the user is trying to show the modal, show it, don't hide it
    if ($(e.target).hasClass("js-modal-show")) {
      showModal();
      e.preventDefault();
      return;
    }
		// If the user clicked anything except the modal dialog, and the modal is visible, hide the modal
		else if (!$(e.target).closest('.modal-dialog').length && isModalVisible()) {
			hideModal();
		}
	});

	// Submit the modal form data
	$('#email-signup-data-form').submit(function(e){
		// Prevent the submit
		e.preventDefault();
		// Todo: validation here

		// Get the form data
		var data = $('#email-signup-data-form');
		// Submit the form
		submitForm(data);
	});
});
