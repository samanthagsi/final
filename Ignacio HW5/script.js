document.addEventListener('DOMContentLoaded', function() {
    //Change button text when clicked
    const button1 = document.getElementById('button1');
    button1.addEventListener('click', function() {
        button1.textContent = 'have a good day!';
    });

    //Change list item color to blue when clicked
    const listItems = document.querySelectorAll('#list li');
    listItems.forEach(item => {
        item.addEventListener('click', function() {
            listItems.forEach(item => {
                item.style.color = 'blue';
            });
        });
    });

    //Append paragraph when button is clicked
    const button2 = document.getElementById('button2');
    button2.addEventListener('click', function() {
        const paragraph = document.createElement('p');
        paragraph.textContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        document.getElementById('container').appendChild(paragraph);
    });
});