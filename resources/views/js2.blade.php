<html>

<head>
    <title> javascript </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        function validateForm() {
            //let x = document.forms["myForm"]["fname"].value;
            var x = document.getElementById("fname");
            var nrp = document.getElementById("Nrp");

            if (x.value == "") {
                alert("Name must be filled out");
                x.focus();
                return false; //function ini ada return value, bukan void
            }
            if (nrp.value == "") {
                alert("NRP must be filled out");
                nrp.focus();
                return false; //function ini ada return value, bukan void
            }
            if(isNaN(nrp.value)== true){
                alert("NRP Must be a Number");
                nrp.focus();
                nrp.value="";
                return false;

            }
            if(nrp.value.length != 10){
                alert("Jumlah digit nrp harus 10, anda memasukkan " + nrp.value.length +"digit!");
                nrp.focus();
                nrp.value="";
                return false;
            }
            if(nrp.value)



        if(nrp.value.substring(0,4) != 5026){
        alert("Hanya untuk mahasiswa Sistem Informasi");
                nrp.focus();
                //nrp.value();
                return false;
        }

      if(nrp.value.substring(4,6) != 21 && nrp.value.substring(4,6) != 22 ){
        alert("Hanya untuk angkatan 2022 dan 2021");
                nrp.focus();
                //nrp.value();
                return false;

      }return true; //boleh diberi boleh tidak ,karena default function adalah true. Pencegahan nilai
            //ke false berfungsi supaya tidak jadi dikirimkan.
    }


    </script>
</head>

<body>
    <h2> Pendaftaran Asisten Lab Sistem Informasi </h2>
    <form name="myForm" action="https://google.com" onsubmit="return validateForm()" method="post">
        <label for="fname">Name:</label>
        <input type="text" id="fname" name="fname" class="form-control"></input>
        <label for="nrp">NRP:</label>
        <input type="text" id="Nrp" name="Nrp" class="form-control"></input>
        <input type="submit" value="Submit" class="btn-primary">
        <input type="reset" value="kosongi" class="btn-warning">
    </form>

</body>

</html
