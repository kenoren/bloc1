
    const messageDiv = document.getElementById('message');
    const incrementButton = document.getElementById('increment');
    const decrementButton = document.getElementById('decrement');   


    incrementButton.addEventListener('click',   
 () => {
        if (messageDiv) { // Vérifier si l'élément existe
            let currentSize = parseInt(getComputedStyle(messageDiv).fontSize);
            messageDiv.style.fontSize = (currentSize + 1) + 'px';
        }
    });

    decrementButton.addEventListener('click', () => {
        if (messageDiv) {
            let currentSize = parseInt(getComputedStyle(messageDiv).fontSize);
            if (currentSize > 1) {
                messageDiv.style.fontSize = (currentSize - 1) + 'px';
            }
        }
    });
