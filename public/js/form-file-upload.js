$(function() {
	"use strict";

    $(document).ready(function() {
        $('#formFile').on('change', function(event) {
          var file = event.target.files[0];
          
          if (file) {
            var reader = new FileReader();
            
            // Check if the selected file is an image
            if (file.type.startsWith('image/')) {
              reader.onload = function(e) {
                // Display the image preview
                $('#previewSection').html('<img src="' + e.target.result + '" alt="Image Preview" style="max-width: 100%; max-height: 400px;">');
              };
            } else {
              // If it's not an image, display the file name or other info
              $('#previewSection').html('<p>Selected file: ' + file.name + '</p>');
            }
            
            // Read the file as Data URL (for image preview)
            reader.readAsDataURL(file);
          } else {
            $('#previewSection').html('');
          }
        });
    });
});