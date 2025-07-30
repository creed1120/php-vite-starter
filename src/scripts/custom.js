const elements = document.querySelectorAll('.custom-btn');

elements.forEach(element => {
        element.addEventListener('click', () => {
            console.log('Element clicked:', element);
            // Add your specific event handling logic here
        });
    });