function createTableLine(data) {
    let table = document.getElementById('checkTable');

    let row = table.insertRow(-1);
    row.setAttribute('id','row' + rowID);
    rowID++;

    let xCell = row.insertCell(0);
    let yCell = row.insertCell(1);
    let rCell = row.insertCell(2);
    let crrtCell = row.insertCell(3);
    let scrtCell = row.insertCell(4);
    let resCell = row.insertCell(5);

    xCell.innerText = data[0];
    yCell.innerText = data[1];
    rCell.innerText = data[2];
    crrtCell.innerText = data[3];
    scrtCell.innerText = data[4];
    resCell.innerText = data[5];
}
var rowID = 0;