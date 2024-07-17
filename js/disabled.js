window.addEventListener('load', function() {
    // Assuming you store different values to control each form
    var shouldDisableForm1 = localStorage.getItem('disableForm1');
    var shouldDisableForm2 = localStorage.getItem('disableForm2');

    // Disable elements in the first form if applicable
    if (shouldDisableForm1 === 'true') {
        var formElements = document.getElementById('landingForm').elements;
        for (var i = 0; i < formElements.length; i++) {
            formElements[i].disabled = true;
        }
    }

    // Disable elements in the second form if applicable
    if (shouldDisableForm2 === 'true') {
        var formElements = document.getElementById('landingForm2').elements;
        for (var i = 0; i < formElements.length; i++) {
            formElements[i].disabled = true;
        }
    }
});

  