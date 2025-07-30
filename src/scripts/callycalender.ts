import "cally";
const callydiv = document.querySelector<HTMLDivElement>('#callyDiv')!;

callydiv.innerHTML = `
<calendar-range months="2">
  <div class="grid">
    <calendar-month></calendar-month>
    <calendar-month offset="1"></calendar-month>
  </div>
</calendar-range>
`;

export {};