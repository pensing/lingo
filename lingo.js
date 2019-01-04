//woord = "LINGO";
woorden = ["LINGO", "KEREL", "APPEL", "STIER", "DRUIF", "STROP", "KATER", "DRANK", "SNOEP", "VLEES"];
poging = 1;
einde = false;
getalarray = [];
gepaktarray = [];

function ajaxnieuw() {
    alert();
    $.ajax({
        url: 'nieuwwoord.php',
        type: 'POST',
        success: function(result) {
            alert(result); // Here, you need to use response by PHP file.
        },
        error: function() {
            alert('error');
        }

    });
}

function getWoord() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            woord = this.responseText;
            woord = woord.toUpperCase();
        }
    };
    xhttp.open("GET", "nieuwwoord.php", false);
    xhttp.send();
}

function nieuwwoord() {
    var x = Math.floor((Math.random() * 10) + 1);
    //woord = woorden[x - 1];
    //ajaxnieuw();
    getWoord();
    //alert(woord);
    maakbordleeg();
    document.getElementById("r1k1").innerHTML = woord[0];
    document.getElementById("woord").value = "";

    poging = 1;
    einde = false;
    //alert(woord);
}

function maakbordleeg() {
    for (r = 1; r <= 5; r++) {
        for (k = 1; k <= 5; k++) {
            id = "r" + r + "k" + k;
            document.getElementById(id).innerHTML = ".";
            document.getElementById(id).style.backgroundColor = "#1673b9";
        }
    }
}

function validate(strValue) {
    var objRegExp = /^[a-z]+$/;
    return objRegExp.test(strValue);
}

function checkwoord(w) {
    //alert(document.getElementById("woord").value);
    if (einde) {
        alert("Het spel is afgelopen. Kies een nieuw woord.");
        return;
    }
    //validate input, only letters
    if (!validate(w)) {
        alert("Alleen letters zijn toegestaan. Wijzig je invoer.");
        return;
    }

    geraden = (w.toUpperCase() === woord);
    dwoord = woord;
    dw = w.toUpperCase();
    for (k = 1; k <= 5; k++) {
        id = "r" + poging + "k" + k;
        pogingnext = poging + 1;
        idnext = "r" + pogingnext + "k" + k;
        c = w[k - 1].toUpperCase();
        document.getElementById(id).innerHTML = c;
        if (c == woord[k - 1]) {
            document.getElementById(id).style.backgroundColor = "#e52d28";
            dwoord[k - 1] = ".";
            dw[k - 1] = ".";
            if ((poging < 5) & !geraden) { document.getElementById(idnext).innerHTML = c; }
        }
        //setTimeout(myFunction, 1000);
    }
    if (!geraden) {
        //check for yellow
        //while not all checked do check w[i]
        //recursieve methode?
    }

    if (geraden) {
        //alert('Je hebt het woord geraden. Het woord is ' + woord + '. Goed gedaan.');
        document.getElementById("woord").value = "";
        einde = true;
        return true;
    }
    poging += 1;
    if (poging == 6) {
        //alert('Je hebt het woord niet geraden. Het woord is ' + woord + '. Volgende keer beter.');
        //maakbordleeg();
        //poging = 1;
        document.getElementById("woord").value = "";
        einde = true;
        return false;
    }
    document.getElementById("woord").value = "";
}

//25 getallen kiezen uit 1-50
function vulgetallenbord() {
    //getalarray = [];
    document.getElementById("ballen").innerHTML = "";

    for (i = 1; i <= 25; i++) {
        inarray = true;
        while (inarray) {
            x = Math.floor((Math.random() * 50) + 1);
            inarray = (getalarray.indexOf(x) > -1);
            //inarray = false;
        }
        //x = Math.floor((Math.random() * 50) + 1);
        getalarray.push(x);
    }
    //alert(getalarray);
    //return;

    //clone de getallenarray
    temparray = getalarray.slice(0);
    for (r = 1; r <= 5; r++) {
        for (k = 1; k <= 5; k++) {
            id = "r" + r + "k" + k;
            document.getElementById(id).innerHTML = temparray[0];
            temparray.shift();
            //document.getElementById(id).style.backgroundColor = "#1673b9";
        }
    }
}

function pakbal() {
    //pak de bal
    do {
        x = Math.floor((Math.random() * 50) + 1);
        nieuwebal = true;
    }
    while (!nieuwebal)

    //bal al eens gepakt?
    //bal op de kaart?
    balopkaart = (getalarray.indexOf(x) >= 0);
    //alert(x + ' , ' + getalarray.indexOf(x) + ' , ' + getalarray.toString());
    if (balopkaart) {
        alert('Bal ' + x + ' staat op de kaart');
        //voeg toe aan array met gepakte ballen
        gepaktarray.push(x);
        //zoek bal op kaart en markeer
        for (r = 1; r <= 5; r++) {
            for (k = 1; k <= 5; k++) {
                id = "r" + r + "k" + k;
                g = document.getElementById(id).innerHTML;
                if (x == g) {
                    document.getElementById(id).style.backgroundColor = "green";
                    document.getElementById("ballen").innerHTML += '<div class="rondje">' + x + '</div>';
                    return;
                }
            }
        }
        //v - h - d - lijn vol 
    } else {
        alert('Bal ' + x + ' staat NIET op de kaart');
    }

    //
    document.getElementById("ballen").innerHTML += '<div class="rondje">' + x + '</div>';
}

function resultaat(w) {
    if (checkwoord(w)) {
        alert('Je hebt het woord geraden. Het woord is ' + woord + '. Goed gedaan.');
    } else {
        alert('Je hebt het woord niet geraden. Het woord is ' + woord + '. Volgende keer beter.');
    }
}