const tab1 = document.getElementById("tab1");
const tab2 = document.getElementById("tab2");
<<<<<<< HEAD
<<<<<<< HEAD
=======
const friendsTab = document.getElementById("friendTab")
const groupTab = document.getElementById("groupsTab")


>>>>>>> 87cebb6137451b12a1b3a247456ff51ed5dddbb1
=======
>>>>>>> 70fcda4508ece7841c9b9e2b52047f90b1faaa1e

tab1.addEventListener("click", function () {
    if (!tab1.classList.contains("border-b-2", "border-blue-500"))
        tab1.classList.add("border-b-2", "border-blue-500");
    tab1.classList.remove("hover:border-blue-300");

    tab2.classList.remove("border-b-2", "border-blue-500");
<<<<<<< HEAD
<<<<<<< HEAD
    tab2.classList.add("hover:border-blue-300");
=======
    tab2.classList.add("hover:border-blue-300"); 
    friendsTab.style.display = "block"
    groupTab.style.display = "none"
>>>>>>> 87cebb6137451b12a1b3a247456ff51ed5dddbb1
=======
    tab2.classList.add("hover:border-blue-300");
>>>>>>> 70fcda4508ece7841c9b9e2b52047f90b1faaa1e
});

tab2.addEventListener("click", function () {
    if (!tab2.classList.contains("border-b-2", "border-blue-500"))
        tab2.classList.add("border-b-2", "border-blue-500");
    tab2.classList.remove("hover:border-blue-300");

    tab1.classList.remove("border-b-2", "border-blue-500");
    tab1.classList.add("hover:border-blue-300");
<<<<<<< HEAD
<<<<<<< HEAD
=======
    groupTab.style.display = "block"
    friendsTab.style.display = "none"
>>>>>>> 87cebb6137451b12a1b3a247456ff51ed5dddbb1
=======
>>>>>>> 70fcda4508ece7841c9b9e2b52047f90b1faaa1e
});
