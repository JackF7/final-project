function submitComment() {
    // Get the values of the title and description fields
    var title = $('#title').val();
    var description = $('#description').val();
    var table = 'ruth1_comments'; // Specify the table name here
    console.log("Submit comment function called.");
    // Send AJAX POST request
    $.ajax({
        type: "POST",
        url: "submit_JScomments.php",
        data: {
            title: title,
            description: description,
            table: table
        },
        dataType: "json",
        success: function(response) {
            if (response.success) {
                // Comment submitted successfully, reload comments
                getComments();
                // Clear the form fields after successful submission
                $('#title').val('');
                $('#description').val('');
            } else {
                // Error occurred, display message
                alert("Error: " + response.message);
            }
        },
    });
}

// Function to retrieve comments via AJAX
function getComments() {
    console.log("Get comments function called.");
    // Send AJAX GET request
    $.ajax({
        type: "GET",
        url: "get_comments.php",
        dataType: "json",
        success: function(comments) {
            // Update comments section with retrieved comments
            var commentsHTML = "";
            comments.forEach(function(comment) {
                commentsHTML += "<div class='comment'>";
                commentsHTML += "<h5 class='comment-title'>" + comment.title + "</h5>";
                commentsHTML += "<p class='comment-description'>" + comment.description + "</p>";
                commentsHTML += "</div>";
            });
            document.getElementById("comments-section").innerHTML = commentsHTML;
        }
    });
}


// Function to update comment via AJAX
function updateComment(commentId, newTitle, newDescription) {
    var table = 'ruth1_comments'; // Specify the table name here

    // Send AJAX POST request
    $.ajax({
        type: "POST",
        url: "update_comment.php",
        data: {
            id: commentId,
            table: table,
            title: newTitle,
            description: newDescription
        },
        dataType: "json",
        success: function(response) {
            if (response.success) {
                // Comment updated successfully, reload comments
                getComments();
            } else {
                // Error occurred, display message
                alert("Error: " + response.message);
            }
        }
    });
}

// Function to delete comment via AJAX
function deleteComment(commentId) {
    var table = 'ruth1_comments'; // Specify the table name here

    // Send AJAX POST request
    $.ajax({
        type: "POST",
        url: "delete_comment.php",
        data: {
            id: commentId,
            table: table
        },
        dataType: "json",
        success: function(response) {
            if (response.success) {
                // Comment deleted successfully, reload comments
                getComments();
            } else {
                // Error occurred, display message
                alert("Error: " + response.message);
            }
        }
    });
}
