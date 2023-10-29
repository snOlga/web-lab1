function removeData() {
    for(let i = 0; i < rowID; i++)
    {
        document.getElementById("row" + i).remove();

        let allCookies = document.cookie;

        let allCookiesArr = allCookies.split(";");

        for (let j = 0; j < allCookiesArr.length; j++) {
            if (allCookiesArr[j].includes('data')) {
                document.cookie = "data" + j + "=" + null;
            }
        }
    }
    cookieNum = 0;
}