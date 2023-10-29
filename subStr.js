let field = document.getElementById('selectedValueY');

field.oninput = function()
{
    this.value = this.value.substr(0,17);
}