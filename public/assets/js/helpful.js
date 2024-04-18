let helpfulCounters = [];
let notHelpfulCounters = [];

function incrementCounter(index, isHelpful) {

    let counters = isHelpful ? helpfulCounters : notHelpfulCounters;

    if (!counters[index]) {
        counters[index] = 0;
    }
    counters[index]++;

    document.getElementById((isHelpful ? 'helpful-counter-' : 'not-helpful-counter-') + index).textContent = counters[index];
    localStorage.setItem((isHelpful ? 'helpfulCounterValue-' : 'notHelpfulCounterValue-') + index, counters[index]);
}
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
