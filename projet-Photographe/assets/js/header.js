document.getElementById('header').onmouseover = function ()
{

    document.getElementById("header-white").hidden = true;
    document.getElementById("header-black").style.display = "block";
};

document.getElementById('header').onmouseout= function ()
{

    document.getElementById("header-white").hidden = false;
    document.getElementById("header-black").style.display = "";
};
