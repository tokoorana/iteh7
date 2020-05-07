const ajax = new XMLHttpRequest();

function get1() {
  if (localStorage["previous"] !== undefined) {
    document.getElementById("res1_previous").innerHTML =
      localStorage["previous"];
  }
  let date = document.getElementById("date").value;
  ajax.open("GET", "rent_by_date.php?date=" + date);
  ajax.onreadystatechange = update1;
  ajax.send();
}

function update1() {
  if (ajax.readyState === 4) {
    if (ajax.status === 200) {
      let t = ajax.responseText;
      document.getElementById("res1").innerHTML = t;
      localStorage["previous"] = ajax.responseText;
    }
  }
}

function get2() {
  let vendorname = document.getElementById("vendorname").value;
  ajax.open("GET", "auto_by_vendors.php?vendorname=" + vendorname);
  ajax.onreadystatechange = update2;
  ajax.send();
}
function update2() {
  if (ajax.readyState === 4) {
    if (ajax.status === 200) {
      console.log(ajax.response);
      document.getElementById("res2").innerHTML = ajax.responseText;
    }
  }
  console.dir(ajax);
}

function get3() {
  ajax.open("GET", "free_auto_by_dates.php");
  ajax.onreadystatechange = update3;
  ajax.send();
}

function update3() {
  if (ajax.readyState === 4) {
    if (ajax.status === 200) {
      console.log(ajax.response);
      document.getElementById("table_f3").innerHTML = ajax.responseText;
    }
  }
  console.dir(ajax);
}
