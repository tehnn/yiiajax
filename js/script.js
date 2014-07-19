function ajxLoadAmp(pcode) {
    //alert(pcode);
    $.ajax({
        url: 'index.php?r=Ajax/LoadAmp&pcode=' + pcode,
        //dataType:'json',
        success: function(data) {
            $('#cb_ampur').html(data);
        }
    });
    return false;
}

function ajxLoadTmb(pcode,acode) {
    //alert(pcode+acode);
    $.ajax({
        url: 'index.php?r=Ajax/LoadTmb&pcode=' + pcode+'&acode='+acode,
        //dataType:'json',
        success: function(data) {
            $('#cb_tmb').html(data);
        }
    });

    return false;

}



