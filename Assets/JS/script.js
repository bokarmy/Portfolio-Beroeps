let tekst = [];
tekst[0] = "Quizzie is een groepsproject die we in het eerste schooljaar van onze opleiding moesten maken. In dit project moesten we een quiz website maken waarin mensen verschillende quizzes konden maken.";
tekst[1] = "Bestel je maaltijd was een groepsproject die we in het eerste schooljaar van onze opleiding moesten maken. In deze opdracht moesten we een website maken waarin we met behulp van Javascript een winkelmand moesten maken.";
tekst[2] = "In Villa Te Koop moesten we een website maken voor een makelaar. Er moesten verschillende huizen staan en mensen moeten kunnen bieden";
tekst[3] = "In dit project moesten we een collectie website maken. Waar verschillende producten uit de database werden gehaald en op het scherm werd getoond. En we moesten ook een admin-panel maken waarbij we via de admin-panel je producten kon verwijderen en toevoegen.";

let header = [];
header[0] = "Quizzie";
header[1] = "Bestel Je Maaltijd";
header[2] = "Villa Te Koop";
header[3] = "Collector Website";

let link = [];
link[0] = "https://89987.stu.sd-lab.nl/quizzie/";
link[1] = "media/ervid.mp4";
link[2] = "https://88885.stu.sd-lab.nl/VillaTeKoop/index.html";
link[3] = "https://88885.stu.sd-lab.nl/Verzamelaar-1/Index.html";



function project1() {
    document.getElementById("tekst").innerHTML = tekst[0];
    document.getElementById("header").innerHTML = header[0];
    document.getElementById("link").innerHTML = '<a href="' + link[0] + '"target="_blank">Click on me!</a>';
    document.getElementById("project1").style.filter = "brightness(0.6)";
    document.getElementById("project2").style.filter = "brightness(1)";
    document.getElementById("project3").style.filter = "brightness(1)";
    document.getElementById("project4").style.filter = "brightness(1)";
}

    function project2() {
        document.getElementById("tekst").innerHTML = tekst[1];
        document.getElementById("header").innerHTML = header[1];
        document.getElementById("link").innerHTML = '<a href="' + link[1] + '"target="_blank">Click on me!</a>';
        document.getElementById("project1").style.filter = "brightness(1)";
        document.getElementById("project2").style.filter = "brightness(0.6)";
        document.getElementById("project3").style.filter = "brightness(1)";
        document.getElementById("project4").style.filter = "brightness(1)";
    }
    
    function project3() {
        document.getElementById("tekst").innerHTML = tekst[2];
        document.getElementById("header").innerHTML = header[2];
        document.getElementById("link").innerHTML = '<a href="' + link[2] + '"target="_blank">Click on me!</a>';
        document.getElementById("project1").style.filter = "brightness(1)";
        document.getElementById("project2").style.filter = "brightness(1)";
        document.getElementById("project3").style.filter = "brightness(0.6)";
        document.getElementById("project4").style.filter = "brightness(1)";
    }
    
    function project4() {
        document.getElementById("tekst").innerHTML = tekst[3];
        document.getElementById("header").innerHTML = header[3];
        document.getElementById("link").innerHTML = '<a href="' + link[3] + '"target="_blank">Click on me!</a>';
        document.getElementById("project1").style.filter = "brightness(1)";
        document.getElementById("project2").style.filter = "brightness(1)";
        document.getElementById("project3").style.filter = "brightness(1)";
        document.getElementById("project4").style.filter = "brightness(0.6)";
    }
    


function stopss(){
    window.location.href = "index.html"
}
