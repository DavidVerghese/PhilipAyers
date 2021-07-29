

let hamburgerMenu = document.querySelector(".hamburger-menu");
let attachment = document.querySelector(".attachment");
let displayMenu = false;
let menu = document.createElement("ul");
menu.setAttribute("class", "nav");
menu.style.display = "none";
console.log(attachment);

function createLink(a, b) {
  let li = document.createElement("li");
  li.setAttribute("class", "nav-link");

  let link = document.createElement("a");
  link.setAttribute("href", a);
  link.innerText = b;
  li.append(link);
  menu.append(li);
}

createLink("#", "About");
createLink("#", "Recent Paintings: Lines and Stripes, 2017-Present");
createLink("#", "Recent Paintings: Conversations and other Pictures  2010-2019");
createLink("#", "Selected Landscapes, Treescapes and Root Paintings  1995-2018");
createLink("#", "Selected Paintings 1982-2005");
createLink("#", "Selected Drawings/Sketches, Watercolors/Gouaches and Small Works 1980s-2020");
createLink("#", "Selected Paintings and Drawings/Sketches based on Hyperbolic Planes & Space  2005-2019");
createLink("#", "Selected Drawings and Works from 2000-2010");
createLink("#", "Selected Portraits from 1986-2015");
createLink("#", "Selected Paintings and Painting Sketches 1975-1981");
createLink("#", "Selected Prints 1974-75");
createLink("#", "“Experimental - In Isolation” 2020-21");
createLink("#", "“Bad Pedagogy”  2019-Present");
createLink("#", "Exhibition & Studio Photographs");
createLink("#", "(Alternate Groupings) Mechanical and Structure Still-life 1985-2015");
createLink("#", "(Alternate Groupings) Foliage, Trees, Landscapes and Gardens 1995-2016");
createLink("#", "(Alternate Groupings) Urban Landscapes/Interiors & Cutouts 1980-2018");


attachment.append(menu);

hamburgerMenu.addEventListener("click", function (e) { displayMenu = !displayMenu; displayMenu ? menu.style.display = "flex" : menu.style.display = "none";});

let mostViewedDiv = document.querySelector(".most-viewed");
let featuredImageDiv = document.querySelector(".featured-image");

function createPicture(a) {
  let pic = document.createElement("img");
  pic.setAttribute("src", a);
  mostViewedDiv.append(pic);
};

function createFeaturedImage(a) {
  let pic = document.createElement("img");
  pic.setAttribute("src", a);
  featuredImageDiv.append(pic);
};

let imageAddresses = ["https://www.philipayers.com/paintings/55/thumbnail.jpg", "https://www.philipayers.com/paintings/100/thumbnail.jpg", "https://www.philipayers.com/paintings/111/thumbnail.jpg","https://www.philipayers.com/previews/56-double-portrait-of-an-imaginary-man.jpg","https://www.philipayers.com/paintings/183/thumbnail.jpg"];

function shuffle(list) {
  var shuffledList = list
  let currentIndex = list.length
  let temporaryValue = null
  let randomIndex = null
  let i = 0;
  while (currentIndex != 0) {
    currentIndex -= 1
    let randomIndex = Math.floor(Math.random() * currentIndex)
    let temporaryValue = shuffledList[currentIndex]
    shuffledList[currentIndex] = shuffledList[randomIndex]
    shuffledList[randomIndex] = temporaryValue
  }
  newList = shuffledList
  let fiftyFifty = Math.random()
  if (fiftyFifty > 0.5) {
    newList = shuffledList.reverse()
  }
  return (newList)
}

shuffle(imageAddresses);
createFeaturedImage(imageAddresses[0]);
imageAddresses3 = [imageAddresses[1], imageAddresses[2], imageAddresses[3]];
imageAddresses3.map((index)=>{createPicture(index)})


