document.addEventListener('DOMContentLoaded', function() {
    // Get all comment containers
    const commentContainers = document.querySelectorAll('.comment');

    // Add click event listener to each Helpful/Not Helpful button
    commentContainers.forEach(container => {
        const helpfulBtn = container.querySelector('.helpful-btn');
        const notHelpfulBtn = container.querySelector('.not-helpful-btn');
        const helpfulCount = container.querySelector('.helpful-count');
        const notHelpfulCount = container.querySelector('.not-helpful-count');
        
        let helpful = parseInt(helpfulCount.textContent);
        let notHelpful = parseInt(notHelpfulCount.textContent);

        helpfulBtn.addEventListener('click', () => {
            helpful++;
            updateCounts();
        });

        notHelpfulBtn.addEventListener('click', () => {
            notHelpful++;
            updateCounts();
        });

        // Function to update counts
        function updateCounts() {
            helpfulCount.textContent = helpful;
            notHelpfulCount.textContent = notHelpful;
        }
    });
});
