// Define arrays to store counter values for each comment
let helpfulCounters = [];
let notHelpfulCounters = [];

function incrementCounter(index, isHelpful) {
    // Choose the appropriate counter array based on the button clicked
    let counters = isHelpful ? helpfulCounters : notHelpfulCounters;

    // Check if the counter for this comment index exists
    if (!counters[index]) {
        // If not, initialize it to 0
        counters[index] = 0;
    }
    // Increment the counter for this comment index
    counters[index]++;

    // Update the counter element for this comment index
    document.getElementById((isHelpful ? 'helpful-counter-' : 'not-helpful-counter-') + index).textContent = counters[index];
    // Update the local storage to persist the count
    localStorage.setItem((isHelpful ? 'helpfulCounterValue-' : 'notHelpfulCounterValue-') + index, counters[index]);
}

// Load the stored counter values from local storage
window.onload = function() {
    for (let i = 0; i < helpfulCounters.length; i++) {
        let savedHelpfulCounter = localStorage.getItem('helpfulCounterValue-' + i);
        if (savedHelpfulCounter !== null) {
            helpfulCounters[i] = parseInt(savedHelpfulCounter);
            document.getElementById('helpful-counter-' + i).textContent = helpfulCounters[i];
        }

        let savedNotHelpfulCounter = localStorage.getItem('notHelpfulCounterValue-' + i);
        if (savedNotHelpfulCounter !== null) {
            notHelpfulCounters[i] = parseInt(savedNotHelpfulCounter);
            document.getElementById('not-helpful-counter-' + i).textContent = notHelpfulCounters[i];
        }
    }
};
