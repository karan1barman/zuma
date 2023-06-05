let image = [
  "img1.png",
  "img2.png",
  "img3.png",
  "img4.png",
  "img5.png",
  "img6.png",
  "img7.png",
  "img8.png",
  "img9.png",
  "img10.png",
  "img11.png",
  "img12.png",
  "img13.png",
  "img14.png",
  "img15.png",
];

// Insertinto html
const container = document.querySelector(".logos");
image.forEach((img) => {
  const html = `
    <div class="logos-div-1"><img src="svg/${img}" alt="" /></div>
    `;
  container.insertAdjacentHTML("afterbegin", html);
});

// Select countries
const country = [
  "india",
  "bangladesh",
  "pakistan",
  "america",
  "russia",
  "taiwan",
  "china",
  "france",
];
// Insert countries into html (select tag)

const countries = document.querySelector(".country");
country.reverse();
country.forEach((nation) => {
  const html = `
  <option value="${nation}">${nation}</option>
  `;
  countries.insertAdjacentHTML("afterbegin", html);
});
