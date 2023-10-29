document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("submitButton").addEventListener("click", submit);

    let allCookies = document.cookie;

    let allCookiesArr = allCookies.split(";");

    for (let i = 0; i < allCookiesArr.length; i++) {
        if (allCookiesArr[i].includes('data') && !allCookiesArr[i].includes("null")) {
            let cookiestr = allCookiesArr[i].replace(/data[0-9]=|data[0-9][0-9]=/g, "");
            let oneCookieArr = cookiestr.split(",");
            createTableLine(oneCookieArr);
            cookieNum++;
        }
    }
});

const submit = function (event) {
    if (!validateY()) event.preventDefault();
    if (!validateX()) event.preventDefault();
}