const tab1 = document.getElementById("tab1");
const tab2 = document.getElementById("tab2");
const friendsTab = document.getElementById("friendTab")
const groupTab = document.getElementById("groupsTab")



tab1.addEventListener("click", function () {
    if (!tab1.classList.contains("border-b-2", "border-blue-500"))
        tab1.classList.add("border-b-2", "border-blue-500");
    tab1.classList.remove("hover:border-blue-300");

    tab2.classList.remove("border-b-2", "border-blue-500");
    tab2.classList.add("hover:border-blue-300"); 
    friendsTab.style.display = "block"
    groupTab.style.display = "none"
});

tab2.addEventListener("click", function () {
    if (!tab2.classList.contains("border-b-2", "border-blue-500"))
        tab2.classList.add("border-b-2", "border-blue-500");
    tab2.classList.remove("hover:border-blue-300");

    tab1.classList.remove("border-b-2", "border-blue-500");
    tab1.classList.add("hover:border-blue-300");
    groupTab.style.display = "block"
    friendsTab.style.display = "none"
});
