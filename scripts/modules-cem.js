function showYear(x){
    if(x === 1){
        document.getElementById("year1").style.display ="block";
        document.getElementById("year2").style.display ="none";
        document.getElementById("year3").style.display ="none";
        document.getElementById("year4").style.display ="none";
        document.getElementById("year5").style.display ="none";
    }
    else if(x === 2){
        document.getElementById("year1").style.display ="none";
        document.getElementById("year2").style.display ="block";
        document.getElementById("year3").style.display ="none";
        document.getElementById("year4").style.display ="none";
        document.getElementById("year5").style.display ="none";
    }
    else if(x === 3){
        document.getElementById("year1").style.display ="none";
        document.getElementById("year2").style.display ="none";
        document.getElementById("year3").style.display ="block";
        document.getElementById("year4").style.display ="none";
        document.getElementById("year5").style.display ="none";
    }
    else if(x === 4){
        document.getElementById("year1").style.display ="none";
        document.getElementById("year2").style.display ="none";
        document.getElementById("year3").style.display ="none";
        document.getElementById("year4").style.display ="block";
        document.getElementById("year5").style.display ="none";
    }
    else if(x === 5){
        document.getElementById("year1").style.display ="none";
        document.getElementById("year2").style.display ="none";
        document.getElementById("year3").style.display ="none";
        document.getElementById("year4").style.display ="none";
        document.getElementById("year5").style.display ="block";
    }

}