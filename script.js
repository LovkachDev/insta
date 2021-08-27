let inputOne = document.getElementById("name");

let inputTwo = document.getElementById("tg");

let button = document.getElementById("btn");

button.disabled = true;

inputOne.oninput = function()
{
    if (inputOne.value.length <= 2)
    {
        document.getElementById("output").innerHTML = 'Неверное значение поля "Имя"';
        button.disabled = true;
    }
    else if (inputTwo.value.length >= 4)
    {
        document.getElementById("output").innerHTML = '';
        button.disabled = false;
    }
    else
    {
        document.getElementById("output").innerHTML = 'Неверное значение поля "Телеграм"';
        button.disabled = true;
    }  
};
inputTwo.oninput = function()
{
    if (inputTwo.value.length < 4)
    {
        document.getElementById("output").innerHTML = 'Неверное значение поля "Телеграм"';
        button.disabled = true;
    }
    else if (inputOne.value.length >= 2)
    {
        document.getElementById("output").innerHTML = '';
        button.disabled = false;
    }
    else
    {
        document.getElementById("output").innerHTML = 'Неверное значение поля "Имя"';
        button.disabled = true;
    }
    
    
};
