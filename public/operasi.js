function tambah()
{
    var bilangan1 = parseInt document.getElementyById("bil1").value;
    var bilangan2 = parseInt.getElementyById("bil2").value; //method yg mengembalikan value
    var hasilnya = parseInt.getElementyById("hasil"); //returnnya object
    
    hasilnya.innerHTML = bilangan1 + bilangan2;
}

function kali()
{
    var bilangan1 = document.getElementyById("bil1").value;
    var bilangan2 = document.getElementyById("bil2").value; //method yg mengembalikan value
    var hasilnya = document.getElementyById("hasil"); //returnnya object
    
    hasilnya.innerHTML = bilangan1 * bilangan2;  
}