import "cally";
const callydiv = document.querySelector('#callyDiv');
const repolinks = document.querySelector('#repos');
const elements = document.querySelectorAll('.custom-btn');

const testalert = document.querySelectorAll('#testalert');

elements.forEach(element => {
        element.addEventListener('click', () => {
            console.log('Element clicked:', element);
            // Add your specific event handling logic here
        });
    });

callydiv.innerHTML = `
<style>
  .callygrid {
    display: flex;
    gap: 1em;
    justify-content: center;
    flex-wrap: wrap;
  }
</style>
<calendar-range months="2">
  <div class="callygrid">
    <calendar-month></calendar-month>
    <calendar-month offset="1"></calendar-month>
  </div>
</calendar-range>
`;

repolinks.innerHTML += `<a href="https://github.com/nititech/php-vite-starter" target="_blank">Starter-Repo</a>`;
repolinks.innerHTML += `<a href="https://github.com/donnikitos/vite-plugin-php" target="_blank">vite-plugin-php</a>`;

testalert.forEach(alertmesg => {
    alertmesg.innerHTML = `<button class="custom-btn">Click Me</button>`;
    const button = alertmesg.querySelector('.custom-btn');
    button.addEventListener('click', () => {
        alert('Button clicked!');
    });
});