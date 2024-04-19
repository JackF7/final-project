function submitComment() {
    var title = $('#title').val();
    var description = $('#description').val();

    $.ajax({
        type: "POST",
        url: "/save-comment",
        data: {
            title: title,
            description: description
        },
        dataType: "json",
        success: function(response) {
            if (response.success) {
                getComments();
                $('#title').val('');
                $('#description').val('');
            } else {
                alert("Error: " + response.message);
            }
        },
    });
}

function getComments() {
    $.ajax({
        type: "GET",
        url: "/get-comments",
        dataType: "json",
        success: function(comments) {
            var commentsHTML = "";
            comments.forEach(function(comment) {
                commentsHTML += "<div class='comment'>";
                commentsHTML += "<h5 class='comment-title'>" + comment.title + "</h5>";
                commentsHTML += "<p class='comment-description'>" + comment.description + "</p>";
                commentsHTML += "</div>";
            });
            $("#comments-section").html(commentsHTML);
        }
    });
}

$(document).on("click", ".delete-comment", function() {
    var commentId = $(this).data("id");
    $.ajax({
        type: "POST",
        url: "/delete-comment",
        data: { id: commentId },
        dataType: "json",
        success: function(response) {
            if (response.success) {
                getComments();
            } else {
                alert("Error: " + response.message);
            }
        }
    });
});

// Event listener for updating a comment
$(document).on("click", ".update-comment", function() {
    var commentId = $(this).data("id");
    var title = $(this).data("title");
    var description = $(this).data("description");
    // Implement your logic for updating the comment here
});