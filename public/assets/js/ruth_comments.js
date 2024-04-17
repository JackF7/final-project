// comments.js

// Function to submit a comment
function submitComment(event) {
    event.preventDefault(); // Prevent default form submission
    var commentInput = document.getElementById("comment-input").value;

    fetch('/comments', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ comment: commentInput }),
    })
    .then(response => {
        if (response.ok) {
            retrieveComments(); // Retrieve and display updated comments
        }
    });
}

// Function to retrieve existing comments
function retrieveComments() {
    fetch('/comments')
    .then(response => response.json())
    .then(comments => {
        const commentsDiv = document.getElementById('comments');
        commentsDiv.innerHTML = ''; // Clear existing comments
        comments.forEach(comment => {
            const commentElement = document.createElement('p');
            commentElement.textContent = comment;
            commentsDiv.appendChild(commentElement);
        });
    });
}

// Call retrieveComments function when the page loads to display existing comments
window.onload = retrieveComments;

// Add event listener to the comment form
document.getElementById('commentForm').addEventListener('submit', submitComment);
