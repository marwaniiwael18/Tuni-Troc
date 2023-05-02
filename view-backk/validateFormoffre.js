function validateFormoffre() {

  let a = document.forms["myform"]["nom_offre"].value;
  let b = document.forms["myform"]["type"].value;
  let c = document.forms["myform"]["id_user1"].value;
  let d = document.forms["myform"]["id_user2"].value;




  if (a == "") {
    alert("nom_offre must be filled out");
    return false;
  }
  if (b == "") {
    alert("type must be filled out");
    return false;
  }
  if (c == "") {
    alert("id_user1 must be filled out");
    return false;
  }
  if (d == "") {
    alert("id_user2 must be filled out");
    return false;
  }

}
