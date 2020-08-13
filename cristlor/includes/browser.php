<script>
var ba = ["Chrome","Firefox","Safari","Opera","MSIE","Trident","Edge"];
var b, ua = navigator.userAgent;
for(var i=0; i < ba.length; i++){
    if( ua.indexOf(ba[i]) > -1 ){
        b = ba[i];
        break;
    }
}
if(b == "MSIE" || b == "Trident" || b == "Edge"){
    b = "Internet Explorer";
}

document.write("<h4 class='browser-js'>Vous utilisez le navigateur <span class='browser-type'>" + b + "<span></h4>");
</script>
