function menu_burger() {
    const container = document.getElementById("containerM");
    if (container.style.display === "none" || container.style.display === "") {
        container.style.display = "flex";
    } else {
        container.style.display = "none";
    }
}

function deroulant(){
    const menu = document.getElementById("menuD");
    if (menu.style.display === "none" || menu.style.display === "") {
        menu.style.display = "flex";
        menu.style.flexDirection = "column";
    } else {
        menu.style.display = "none";
    }
}