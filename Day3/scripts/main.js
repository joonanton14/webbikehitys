/*const myHeading = document.querySelector("h1");
myHeading.textContent = "Hello World!";

let myVariable = "Pertti";  /* aina let, vaer vanha syntaksi/
var varVariable = "old syntax";

myVariable = "Jorma"; // yhden rivin kommentti monen 
rivin
kommentti
// NaN -> ei tule numeerista arvoa, syntaksi virhe
myVariable = myVariable + 15;

myHeading.textContent = myVariable;

if(2 === "2"){
    myHeading.textContent = "Ei toimi";
}
// else if("jotakin" === "muuta")
    // code missing


if(2 == "2"){
    myHeading.textContent = "Nyt toimii";
// }
// luodaan funktio mutta sitä ei ole käytetty
// tässä määritellään mitä funktio voi tehdä, mutta sitä pitää erikseen kutsua.
function multiPly (num1, num2){
    let result =  num1* num2;
    return result;
}
//alert (multiPly(2,5)); // 10

// alert(multiPly(10, "moi")); // tämä tuottaa arvon NaN

//document.querySelector("html").addEventListener("click" , () => { // nimetön nuoli funktio johon ei voi viitata
   // alert("Ouch! Stop poking me!");

//});*/

// viittaus html-dokumentin img elementtiin
const myImage = document.querySelector("img");
// tallennetean img elementin propertyyn nuoli funktio
myImage.onclick = () => {
    // määritellään nuoli funktio tekee klikatessa
    // klikkaus vaihtaa kahden kuvan välillä
    // otetaan talteen mikä kuva näkyy ennen klikkausta
    // if(kuvaA){
    //      näytä kuvaB
    //}
    // else{
    //      näytä kuvaA
    //}

    const mySrc = myImage.getAttribute("src"); 
    // jos sivulla näkyy alkuperäinen kuva
    if(mySrc === "images/firefox-icon.png"){
    // vaihdetaan kuva src atribuutti toiseen kuvaan
    myImage.setAttribute("src", "images/firefox2.png");
    } 
    else{ // jos koodi tulee tänne asti oli kyseessä kuva 2
        myImage.setAttribute("src", "images/firefox-icon.png")
    }

}

// otetaan talteen elementtien button ja h1 viittaukset muuttujiin
let myButton = document.querySelector("button");
let myHeading = document.querySelector("h1");
// luodaan funktio jota voidaan käyttää myöhemmin
function setUserName()

{ // luetaan käyttäjän nimi
    const myName = prompt("Please enter your name."); // vähä ku console.readline c#
    if(!myName){
        setUserName();
    }
// tallennetaan käyttäjän syöttämä arvo selaimen muistiin
else{
    localStorage.setItem("name", myName);
    myHeading.textContent = `Mozilla is cool, ${myName}`;
}
}
// tarkistetaan onko nimi jo tallessa, jos ei ole suoritetaan kysyminen
if(!localStorage.getItem("name3")){
    setUserName(); // suoritetaan funktio joka pyytää nimen
}
// käyttäjä on jo antanut nimen, haetaan se se selaimen muistista

    // haetaan nimi
    const storedName = localStorage.getItem("name");
    //päivitetään nimi otsikoon
    myHeading.textContent = `Mozilla is cool ${storedName}`;



myButton.onclick = () =>{
    setUserName();
}

// jos käyttäjä peruu nimen syötön, saadaan arvo null
// null tarkoittaa että kohdasta puuttuu arvo

// jos käyttäjä syöttää tyhjän boksin, ei tule mitään näkyviin. Koska "".

