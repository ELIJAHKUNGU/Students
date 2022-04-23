
function printReport(){
    document.getElementById('body').style.visibility = 'hidden';
    document.getElementById('report').style.visibility = 'visible';
    window.print();
    window.location.href=window.location.href;

}