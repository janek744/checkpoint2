window.onload = function () {
    let tlacitkoLog = document.getElementById("logBtn");
    tlacitkoLog.onclick = function () {
        let fname = document.getElementById("login").value;
        if (fname != null) {
            if (!/^[A-Za-z0-9]*$/.test(fname)) {
                confirm("V logine boli zadané nepovolené znaky");
            }
        }
        let fpassword = document.getElementById("password").value;
        if (fpassword != null) {
            if (!/^[A-Za-z0-9]*$/.test(fpassword)) {
                confirm("V hesle boli zadané nepovolené znaky");
            }
        }
    }

    let tlacitkoForm = document.getElementById("tlacitkoForm");
    tlacitkoForm.onclick = function () {
        if (document.getElementById("nazovForm") == null) {
            confirm("Nebol zadaný názov");
        } else if (document.getElementById("obrazokForm") == null) {
            confirm("Nebol zadaný obrázok");
        } else if (document.getElementById("textForm") == null) {
            confirm("Nebol zadaný text");
        }
    }
}