function changeImg(img) {
    "use strict";
    document.getElementById('phone-img').src = img;
}

function show(number) {
    "use strict";
    var xmlhttpPhone, xmlhttpTablet;
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttpPhone = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttpPhone = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttpPhone.onreadystatechange = function () {
        if (xmlhttpPhone.readyState == 4 && xmlhttpPhone.status == 200) {
            document.getElementById("Smartphone-device").innerHTML = xmlhttpPhone.responseText;
        }
    };
    xmlhttpPhone.open("GET", "get-phones.php?q=Smartphone&n="+parseInt(number), true);
    xmlhttpPhone.send();
    
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttpTablet = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttpTablet = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttpTablet.onreadystatechange = function () {
        if (xmlhttpTablet.readyState == 4 && xmlhttpTablet.status == 200) {
            document.getElementById("Tablet-device").innerHTML = xmlhttpTablet.responseText;
        }
    };
    xmlhttpTablet.open("GET", "get-phones.php?q=Tablet&n="+parseInt(number), true);
    xmlhttpTablet.send();
}

function filter(device) {
    "use strict";
    var xmlhttp, i;
    var filter = "";
    
    var check = document.getElementsByTagName("input");
    
    var typeStr = "";
    var priceStr = "";
    var inchStr = "";
    var brandStr = "";
    var OSStr = "";
    var offerStr = "";
    
    //Controllo checkbox tipologia
    for (i = 0; i < 3; i++) {
        if(check[i].checked){
            if(typeStr==""){
                typeStr = " and (Tipologia = '"+check[i].parentElement.innerText+"'";
            } else {
                typeStr += " or Tipologia = '"+check[i].parentElement.innerText+"'";
            }
        }
    }
    if(typeStr!=""){
        typeStr += ")";
    }
    
    //Controllo checkbox prezzo
    if(check[3].checked){
        priceStr = " and (Prezzo < 200";
    }
    if(check[4].checked){
        if(priceStr==""){
            priceStr = " and ((Prezzo >= 200 and Prezzo < 400)";
        } else {
            priceStr += " or (Prezzo >= 200 and Prezzo < 400)";
        }
    }
    if(check[5].checked){
        if(priceStr==""){
            priceStr = " and ((Prezzo >= 400 and Prezzo < 600)";
        } else {
            priceStr += " or (Prezzo >= 400 and Prezzo < 600)";
        }
    }
    if(check[6].checked){
        if(priceStr==""){
            priceStr = " and (Prezzo >= 600";
        } else {
            priceStr += " or Prezzo >= 600";
        }
    }
    if(priceStr!=""){
        priceStr += ")";
    }
    
    if(device=='Tablet'){
        if(check[7].checked){
            inchStr = " and (Display < 8";
        }
        if(check[8].checked){
            if(priceStr==""){
                inchStr = " and ((Display >= 8 and Display < 10)";
            } else {
                inchStr += " or (Display >= 8 and Display < 10)";
            }
        }
        if(check[9].checked){
            if(priceStr==""){
                inchStr = " and (Display >= 10";
            } else {
                inchStr += " or (Display >= 10)";
            }
        }
        if(inchStr!=""){
            inchStr += ")";
        }
    }
    
    //Controllo checkbox marca
    for (i = (check.length - 8); i < (check.length - 4); i++) {
        if(check[i].checked){
            if(brandStr==""){
                brandStr = " and (Marca = '"+check[i].parentElement.innerText+"'";
            } else {
                brandStr += " or Marca = '"+check[i].parentElement.innerText+"'";
            }
        }
    }
    if(brandStr!=""){
        brandStr += ")";
    }
    
    //Controllo checkbox OS
    for (i = (check.length - 4); i < (check.length - 1); i++) {
        if(check[i].checked){
            if(OSStr==""){
                OSStr = " and (OS = '"+check[i].parentElement.innerText+"'";
            } else {
                OSStr += " or OS = '"+check[i].parentElement.innerText+"'";
            }
        }
    }
    if(OSStr!=""){
        OSStr += ")";
    }
    
    //Controllo checkbox promozioni
    if(check[check.length - 1].checked){
        offerStr = " and Sconto > 0"
    }
    
    filter = typeStr + priceStr + inchStr + brandStr + OSStr + offerStr;
    
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(device+"-device").innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET", "filter.php?d="+device+"&f="+filter, true);
    xmlhttp.send();
}

function openTab(evt, title) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" selected", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(title).style.display = "block";
    evt.currentTarget.className += " selected";
}