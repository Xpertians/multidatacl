function IsAlphaNumeric(e) {
   var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
   var ret = ((keyCode >= 48 && keyCode <= 57) || (keyCode >= 65 && keyCode <= 90) || keyCode == 32 || (keyCode >= 97 && keyCode <= 122));
   return ret;
}

$(function() {
    $('#qryValue').keyup(function() {
        this.value = this.value.toUpperCase();
    });
});
