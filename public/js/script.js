function editJenis(idVarNis){
    var id = idVarNis;
    window.location.assign("/minyak/"+idVarNis+"/edit");
}
function editAsset(idVarAsset){
    var id = idVarAsset;
    window.location.assign("/edit/asset/"+idVarAsset);
}
function deleteAsset(idVarAsset){
    var id = idVarAsset;
    window.location.assign("/delete/asset/"+idVarAsset);
}
function editJurnal(idVarJurnal){
    var id = idVarJurnal;
    window.location.assign("/edit/jurnal/"+idVarJurnal);
}
function deleteAsset(idVarJurnal){
    var id = idVarJurnal;
    window.location.assign("/delete/jurnal/"+idVarJurnal);
}
function Nav_scr(a){    
    if(a==1){
        var nav_link = "/dashboard";
        window.location.assign(nav_link);
    }
    else if(a==2){
        var nav_link = "/operator";
        window.location.assign(nav_link);
    }
    else if(a==3){
        var nav_link = "/minyak";
        window.location.assign(nav_link);
    }
    else if(a==4){
        var nav_link = "/pengeluaran";
        window.location.assign(nav_link);
    }
    else if(a==5){
        var nav_link = "/laporanharian";
        window.location.assign(nav_link);
    }
    else if(a==6){
        var nav_link = "/persediaan";
        window.location.assign(nav_link);
    }
    else if(a==7){
        var nav_link = "/pembelian";
        window.location.assign(nav_link);
    }
    else if(a==8){
        var nav_link = "/pengeluarankas";
        window.location.assign(nav_link);
    }
    else if(a==9){
        var nav_link = "/assettetap";
        window.location.assign(nav_link);
    }
    else if(a==10){
        var nav_link = "/penyesuaian";
        window.location.assign(nav_link);
    }
    else if(a==11){
        var nav_link = "/jurnalumum";
        window.location.assign(nav_link);
    }
    else if(a==12){
        var nav_link = "/laporankeuangan";
        window.location.assign(nav_link);
    }
}
function forgotPass(){
    window.location.assign('/forgot/password');
}
function logIn(){
    window.location.assign('/');
}
document.oncontextmenu = clkRght;
function clkRght(e){
    e.preventDefault();
}
window.setTimeout("waktu()",1000);
function waktu(){
    var waktu = new Date();
    var hrs = waktu.getHours();
    var menit = waktu.getMinutes();
    var detik = waktu.getSeconds();
    setInterval("waktu()",1000);
    if(document.getElementById("jam") !=null){
        document.getElementById("jam").innerHTML = hrs + " : " + menit + " : " + detik;
    }
}
function add_data(x){
    if(x==1){
        var nav_link = "/minyak/tambah/data";
        window.location.assign(nav_link);
    }
}
function table_data(x){
    if(x==1){
        var nav_link = "/minyak";
        window.location.assign(nav_link);
    }
}
function namaMinyak(){
    var x = document.getElementById('minyak').value;
    if(x){
        document.getElementById('btn-check').style.display = "block";
    }
    else{
        document.getElementById('btn-check').style.display = "none";
    }
}