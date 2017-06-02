
document.getElementById("mdp").addEventListener("blur", function (e) {
    var mdp = e.target.value; 
    var longueurMdp = "faible";
    var couleurMsg = "red"; 
    if (mdp.length >= 8) {
        longueurMdp = "suffisante";
        couleurMsg = "green"; 
    } else if (mdp.length >= 4) {
        longueurMdp = "moyenne";
        couleurMsg = "orange";
    }
    var aideMdpElt = document.getElementById("aideMdp");
    aideMdpElt.textContent = "Longueur : " + longueurMdp;
    aideMdpElt.style.color = couleurMsg;
});
document.getElementById("courriel").addEventListener("input", function (e) {
   var regexCourriel = /.+@.+\..{2}/;
    var validiteCourriel = "";
    if (!regexCourriel.test(e.target.value)) {
        validiteCourriel = "Adresse invalide";
    }
    document.getElementById("aideCourriel").textContent = validiteCourriel;
});