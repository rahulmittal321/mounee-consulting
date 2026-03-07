/**
 * Job Board JavaScript
 * Mounee Consulting Theme
 */

(function($) {
    'use strict';

    // Application Form Submission
    $('#applyForm').on('submit', function(e) {
        e.preventDefault();

        const form = $(this);
        const formData = new FormData(this);
        const submitBtn = $('#submitBtn');
        const formMessage = $('#formMessage');

        // Append AJAX action and nonce
        formData.append('action', 'mounee_job_application');
        formData.append('nonce', mouneeJobs.nonce);

        // Disable submit button
        submitBtn.prop('disabled', true).text('Submitting...');
        formMessage.removeClass('success error').hide();

        // Submit via AJAX
        $.ajax({
            url: mouneeJobs.ajaxurl,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    formMessage
                        .addClass('success')
                        .text(response.data.message)
                        .show();
                    form[0].reset();
                    
                    // Scroll to success message
                    $('html, body').animate({
                        scrollTop: formMessage.offset().top - 100
                    }, 500);
                } else {
                    formMessage
                        .addClass('error')
                        .text(response.data.message || 'An error occurred. Please try again.')
                        .show();
                }
            },
            error: function(xhr, status, error) {
                formMessage
                    .addClass('error')
                    .text('Network error. Please check your connection and try again.')
                    .show();
                console.error('AJAX error:', error);
            },
            complete: function() {
                submitBtn.prop('disabled', false).text('Submit Application');
            }
        });
    });

    // Filter Form - Auto-submit on change
    $('.filter-select').on('change', function() {
        $('#jobsFilterForm').submit();
    });

    // File input validation
    $('#applicantResume').on('change', function() {
        const file = this.files[0];
        const formMessage = $('#formMessage');

        if (file) {
            // Check file size (5MB max)
            if (file.size > 5 * 1024 * 1024) {
                formMessage
                    .addClass('error')
                    .text('File size must be less than 5MB.')
                    .show();
                $(this).val('');
                return;
            }

            // Check file type
            if (file.type !== 'application/pdf') {
                formMessage
                    .addClass('error')
                    .text('Please upload a PDF file.')
                    .show();
                $(this).val('');
                return;
            }

            formMessage.removeClass('error').hide();
        }
    });

    // Form validation
    function validateForm() {
        let isValid = true;
        const formMessage = $('#formMessage');

        // Clear previous messages
        formMessage.removeClass('error').hide();

        // Name validation
        const name = $('#applicantName').val().trim();
        if (name.length < 2) {
            showError('Please enter a valid name.');
            isValid = false;
        }

        // Email validation
        const email = $('#applicantEmail').val().trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            showError('Please enter a valid email address.');
            isValid = false;
        }

        // Phone validation
        const phone = $('#applicantPhone').val().trim();
        if (phone.length < 10) {
            showError('Please enter a valid phone number.');
            isValid = false;
        }

        // Resume validation
        if (!$('#applicantResume')[0].files[0]) {
            showError('Please upload your resume.');
            isValid = false;
        }

        return isValid;
    }

    function showError(message) {
        const formMessage = $('#formMessage');
        formMessage
            .addClass('error')
            .text(message)
            .show();

        $('html, body').animate({
            scrollTop: formMessage.offset().top - 100
        }, 300);
    }

    // Add validation before form submission
    $('#applyForm').on('submit', function(e) {
        if (!validateForm()) {
            e.preventDefault();
            e.stopImmediatePropagation();
            return false;
        }
    });

    // Smooth scroll for "View All Openings" button
    $('a[href^="#"]').on('click', function(e) {
        const target = $(this.getAttribute('href'));
        if (target.length) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top - 80
            }, 800);
        }
    });

})(jQuery);
