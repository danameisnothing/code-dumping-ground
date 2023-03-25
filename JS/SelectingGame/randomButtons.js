// Credit : https://stackoverflow.com/questions/36756331/js-generate-random-boolean
// buggy af
const minefield = document.getElementById("buttons");
const forWidth = document.getElementById("forWidth");
const forHeight = document.getElementById("forHeight");

let disableLimit = document.getElementById("disableLimit");
let widthNum = document.getElementById("width");
let heightNum = document.getElementById("height");
let chance = document.getElementById("chance");

// Settings
let debugText = "Debug : ";
let widthMine = 12;
let heightMine = 2;
let mineChance = 40; // in percentage
let maxWidth = 20;
let maxHeight = 20;

let mineButtons = [];
let newlines = [];

forWidth.innerHTML = "Width of Buttons (Max : " + maxWidth + ") : ";
forHeight.innerHTML = "Height of Buttons (Max : " + maxHeight + ") : ";

async function generateButtons(widthMine, heightMine, mineChance) {
    for (let i = 0; i < heightMine; i++) {
        for (let j = 0; j < widthMine; j++) {   
            const button = document.createElement("button");
            button.innerHTML = "?";
            minefield.appendChild(button);
            console.log(debugText + "end of width");
            mineButtons.push(button);
        }
        const newline = document.createElement("br");
        minefield.appendChild(newline);
        newlines.push(newline);
        console.log(debugText + "end of height");
    }
    
    for (let k = 0; k <mineButtons.length; k++) {
        let pseudoBool = Math.random();
        mineButtons[k].addEventListener("click", function() {
            if (pseudoBool < mineChance / 100) {
                console.log(debugText + "selected");
                mineButtons[k].innerHTML = "Fail!";
            }
            else {
                mineButtons[k].innerHTML = "Nope";
                console.log(debugText + "not selected");
            }
        });
    }
}

// too lazy to think of switches
function changeManager(type) {
    if (type == 1) {
        if (disableLimit.checked) {
            maxWidth = Infinity;
            maxHeight = Infinity;
        }
        console.log(debugText + disableLimit.checked);
    }
    else {
        if (widthNum.value > maxWidth || heightNum.value > maxHeight) {
            alert("Width / Height Of Buttons Too Large!");
        }
        else {
            for (let l = 0; l < mineButtons.length; l++) {
                mineButtons[l].remove();
                newlines[l].remove();
            }
            widthMine = widthNum.value;
            heightMine = heightNum.value;
            mineChance = chance.value;
            generateButtons(widthMine, heightMine, mineChance);
        }
    }
}

widthNum.addEventListener("input", function() {
    changeManager(0);
});

heightNum.addEventListener("input", function() {
    changeManager(0);
});

disableLimit.addEventListener("input", function() {
    changeManager(1);
});

chance.addEventListener("input", function() {
    changeManager(0);
});

console.log(debugText + "It Works!");