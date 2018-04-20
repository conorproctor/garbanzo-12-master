window.onload = function() {
  constructTable(data)
}
function constructTable(array){

var tableHTML = ""
if (array.length==0){
  tableHTML += "<div class='no-matches'>You have no matches</div>";
}else{

  tableHTML += "<table id='tenant-box'><thead><th colspan='2'>Matches</th></thead>"
  tableHTML += "<tbody>"
  //loop through top level array
  for (var i = array.length - 1; i >= 0; i--) {
    var count= array.length - i;
    tableHTML += "<tr class='table-sub'><td colspan='2'>Match " + count + "</td></tr>"
    // console.log(array[1])
    tableHTML += "<tr><td>Congratulations you have matched with:</td>"
    tableHTML += "<td>"+array[i][1]+"</td></tr>"

    tableHTML += "<tr><td>This is the address of the tenant:</td>"
    tableHTML += "<td>"+array[i][2]+"</td></tr>"


  //   [Array(3)] //an array with 1 array init
  // 0 //first array
  // (3) ["18", "casey18", "Woodquay"]

    tableHTML += "<tr><td>This is the email of the tenant:</td>"
   tableHTML += "<td>"+array[i][3]+"</td></tr>"

    tableHTML += "<tr><td>This is the phone number of the tenant:</td>"
    tableHTML += "<td>"+array[i][4]+"</td></tr>"

    tableHTML += "<tr><td>Click the link to view the tenants profile:</td>"
    tableHTML += "<td><a href='landlord-view-tenant.php?tenant="+array[i][0]+"'>View Profile</a></td></tr>"
  }

  tableHTML += "<tbody></table>"

}
document.getElementById("tenant-match").innerHTML=tableHTML;
}
