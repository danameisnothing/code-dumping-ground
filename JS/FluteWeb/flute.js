const e1Audio = new Audio("./fluteSounds/e1.wav");
const f1Audio = new Audio("./fluteSounds/f1.wav");
let audioVolume = 0.25;

/*async function alertCookies(volumeNumCookie) {
    let consentCookies = confirm("Do You Consent a basic cookie to be placed?")
    switch (consentCookies) {
        case "true":
            document.cookie = "volumeNum=" + volumeNumCookie + "; expires=Thu, 31 Dec 2122; path=/";
    }
} later*/

async function changeVolume() {
    tempAudioVolume = document.getElementById("volumeNum").value
    if (tempAudioVolume > 100 || tempAudioVolume < 1) {
        alert("Volume Too Low / Too High!"); // maybe 0.001 volume luls
    }
    else {
        audioVolume = document.getElementById("volumeNum").value / 100
    }
}

async function changeDOMText(playNoteResult, audioLength, volumeAmount) {
    document.getElementById("playNoteResult").innerHTML = playNoteResult;
    document.getElementById("audioLength").innerHTML = audioLength;
    document.getElementById("volumeAmount").innerHTML = volumeAmount;
}

async function playFlute(key) {
    switch (key) {
        case "a1":
            document.getElementById("playNoteResult").innerHTML = "Note : A1";
            document.getElementById("audioLength").innerHTML = "Duration (Second) : " + keyAAudio.duration;
            console.log(key)
            keyAAudio.play();
            break;
        case "b1":
            document.getElementById("playNoteResult").innerHTML = "Note : B1";
            break;
        case "c1":
            changeDOMText("Note : C1", "Duration (Second) : " + c1Audio.duration, "Volume : " + audioVolume * 100);
            c1Audio.volume = audioVolume;
            c1Audio.play();
            break;
        case "d1":
            document.getElementById("playNoteResult").innerHTML = "Note : D1";
            break;
        case "e1":
            changeDOMText("Note : E1", "Duration (Second) : " + e1Audio.duration, "Volume : " + audioVolume * 100);
            e1Audio.volume = audioVolume;
            e1Audio.play();
            break;
        case "f1":
            changeDOMText("Note : F1", "Duration (Second) : " + f1Audio.duration, "Volume : " + audioVolume * 100);
            f1Audio.volume = audioVolume;
            f1Audio.play();
            break;
        case "g1":
            document.getElementById("playNoteResult").innerHTML = "Note : G1";
            document.getElementById("audioLength").innerHTML = "Duration (in s) : " + keyGAudio.duration;
            keyGAudio.play();
            break;
        case "c2":
            document.getElementById("playNoteResult").innerHTML = "Note : C2";
            break;
        case "d2":
            document.getElementById("playNoteResult").innerHTML = "Note : D2";
            break;
        case "e2":
            document.getElementById("playNoteResult").innerHTML = "Note : E2";
            break;
        case "f2":
            document.getElementById("playNoteResult").innerHTML = "Note : F2";
            break;
        case "g2":
            document.getElementById("playNoteResult").innerHTML = "Note : G2";
            document.getElementById("audioLength").innerHTML = "Duration (in s) : " + keyGAudio.duration;
            keyGAudio.play();
            break;
        case "a2":
            document.getElementById("playNoteResult").innerHTML = "Note : A2";
            document.getElementById("audioLength").innerHTML = "Duration (in s) : " + keyAAudio.duration;
            keyAAudio.play();
            break;
        case "b2":
            document.getElementById("playNoteResult").innerHTML = "Note : B2";
            break;
        default:
            document.getElementById("playNoteResult").innerHTML = "Invalid Arguments Given!";
            break;
    }
}