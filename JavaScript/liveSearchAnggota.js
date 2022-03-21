var keyword = document.getElementById("keyword");
var tabel_anggota = document.getElementById("tabel_anggota");

keyword.addEventListener('keyup',function(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState==4 && xmlhttp.status==200){
            tabel_anggota.innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.open('GET','databaseAnggotaByName.php?keyword='+keyword.value,true);
    xmlhttp.send();
})