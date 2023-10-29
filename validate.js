function validateY()
{
    var validated = true;
    var y_input = document.getElementById("selectedValueY").value.replace(",", ".");

    if(y_input.trim() == "" || !isFinite(y_input))
    {
        validated = false;
        document.getElementById("yWarning").innerText = "Y cannot be empty!"
    }
    else if(!isFinite(y_input))
    {
        validated = false;
        document.getElementById("yWarning").innerText = "Y must be a number!"
    }
    else if(y_input < -5 || y_input > 5)
    {
        validated = false;
        document.getElementById("yWarning").innerText = "Y is out of [-5,5]!"
    }
    else
    {
        document.getElementById("yWarning").innerText = ""
    }
    return validated;
}

function validateX()
{
    var validated = true;
    var x_input = document.getElementById("selectedValueX").value;
    if(x_input.trim() == "")
    {
        validated = false;
        document.getElementById("xWarning").innerText = "X must be chosen!"
    }
    else
    {
        document.getElementById("xWarning").innerText = ""
    }
    return validated;
}
