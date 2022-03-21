var keywordReasons = document.getElementById("keywordReasons");
var tabel_anggota = document.getElementById("tabel_anggota");

keywordReasons.addEventListener('keyup',function(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState==4 && xmlhttp.status==200){
            tabel_anggota.innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.open('GET','databaseAnggotaByReasons.php?keyword='+keywordReasons.value,true);
    xmlhttp.send();
})