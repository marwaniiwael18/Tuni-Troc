
function validateForm() {
 
    let a = document.forms["myform"]["username"].value;
    let b = document.forms["myform"]["nom"].value;

    let c = document.forms["myform"]["prenom"].value;

    let d = document.forms["myform"]["date_nais"].value;

    let e = document.forms["myform"]["email"].value;

    let f = document.forms["myform"]["adresse"].value;

    let g = document.forms["myform"]["password"].value;

    let h = document.forms["myform"]["photo"].value;

    let i = document.forms["myform"]["num_tel"].value;




   
    if (a == "") {
      alert("username must be filled out");
      return false;
    }
    if (b == "") {
        alert("nom must be filled out");
        return false;
      }
      if (c == "") {
        alert("prenom must be filled out");
        return false;
      }
      if (d == "") {
        alert("date_nais must be filled out");
        return false;
      }
      if (e == "") {
        alert("email must be filled out");
        return false;
      }
      if (f == "") {
        alert("adresse must be filled out");
        return false;
      }
      if (g == "") {
        alert("password must be filled out");
        return false;
      }
      if (h == "") {
        alert("photo must be filled out");
        return false;
      }
      if (i == "") {
        alert("num_tel must be filled out");
        return false;
      }
    }

