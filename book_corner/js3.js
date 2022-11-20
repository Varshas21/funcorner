function func2() {
    let x = document.getElementById('searchs').value.toUpperCase();
    let t = document.getElementById('t');
    let tr = t.getElementsByTagName('tr');
    for (var i = 0; i < tr.length; i++) {
        let td = tr[i].getElementsByTagName('td')[0];
        if (td) {
            let txt = td.textContent || td.innerHTML;
            if (txt.toUpperCase().indexOf(x) > -1) {
                tr[i].style.display = "";

            } else {
                tr[i].style.display = "none";
            }
        }
    }

}