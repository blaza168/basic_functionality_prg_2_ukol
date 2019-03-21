const markElement = document.getElementById('mark');
const form = document.getElementById('form');


form.onsubmit = function (e) {
    const mark = parseInt(markElement.value);
    if (isNaN(mark)) {
        alert('Známka není číslo');
        e.preventDefault();
    }

    if (mark < 1 || mark > 5) {
        alert('Známka je mimo rozsah');
        e.preventDefault();
    }
};
