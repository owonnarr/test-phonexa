$('.ajax').click(function () {
    $.ajax({
        url: 'http://engine/curl',
        success: function(){
            alert('Load was performed.');
        }
    });
    return false;
});