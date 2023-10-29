$(document).ready(function () {
    $('#submitForm').submit(function (e) {
        const start = new Date().getTime();
        $.ajax({
            method: "POST",
            url: 'server.php',
            dataType: 'html',
            data: $(this).serialize(),
            success: function (response) {
                if (response != "") {
                    const end = new Date().getTime();
                    const scriptTime = end - start;

                    let xVal = document.getElementById('selectedValueX').value;
                    let yVal = document.getElementById('selectedValueY').value;
                    let rVal = document.getElementById('selectedValueR').value;

                    let time = new Date().toLocaleDateString('en-us', { hour: "numeric", minute: "numeric" });
                    time = time.toString().replace(",", " ");

                    let allData = [];
                    allData[0] = xVal;
                    allData[1] = yVal;
                    allData[2] = rVal;
                    allData[3] = time;
                    allData[4] = scriptTime + "ms";
                    allData[5] = response;

                    document.cookie = "data" + cookieNum + "=" + allData;
                    cookieNum++;

                    createTableLine(allData);
                }
            }
        });
    });
});

var cookieNum = 0;