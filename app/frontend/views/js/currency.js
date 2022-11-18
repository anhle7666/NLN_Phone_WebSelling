var t=document.getElementsByClassName('currency');
for(var i=0;i<t.length;i++){
    t[i].innerText=formatCash(t[i].innerText);
}

function formatCash(str) {
    str=str.trim();
    var i="";
    if(str.slice(-1)=='đ'){
        str=str.substring(0, str.length-1);
        i="đ";
    }
    console.log(str);
    return str.split('').reverse().reduce((prev, next, index) => {
        return ((index % 3) ? next : (next + ',')) + prev
    })+i;
}