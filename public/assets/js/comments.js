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
