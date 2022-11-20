window.onload = function () {

    document.getElementById("logBtn").onclick = function () {
        let fname = document.getElementById("login").value;
        let fpassword = document.getElementById("password").value;

        if (!fname) {
            confirm("Nebol zadaný login");
        } else if (!fpassword) {
            confirm("Nebolo zadané heslo");
        }

        if (fname != null) {
            if (!/^[A-Za-z0-9]*$/.test(fname)) {
                confirm("V logine boli zadané nepovolené znaky");
            }
        }
        if (!fpassword != null) {
            if (!/^[A-Za-z0-9]*$/.test(fpassword)) {
                confirm("V hesle boli zadané nepovolené znaky");
            }
        }
    }

    document.getElementById("tlacitkoForm").onclick = function () {
        let fnazov = document.getElementById("nazovForm").value;
        let fobrazok = document.getElementById("obrazokForm").value;
        let ftext = document.getElementById("textForm").value;

        if (!fnazov) {
            confirm("Nebol zadaný názov, príspevok nebude pridaný");
        } else if ( !fobrazok) {
            confirm("Nebol zadaný obrázok, príspevok nebude pridaný");
        } else if ( !ftext) {
            confirm("Nebol zadaný text, príspevok nebude pridaný");
        }
    }

}