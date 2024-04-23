// toggler button action
function toggleSidebar() {
    var sidebar = document.getElementById("sidebarMenu");
    var isOpen = sidebar.style.left === "0px";

    // Jika sidebar sedang terbuka, tutup
    if (isOpen) {
        sidebar.style.left = "-250px";
    } else { // Jika sidebar sedang tertutup, buka
        sidebar.style.left = "0";
    }
}
document.getElementById("sidebarToggle").addEventListener("click", toggleSidebar);

// sidebar active menu
function setActiveMenu() {
    // Mendapatkan URL halaman saat ini
    var currentPageUrl = window.location.href;
    
    // Mendapatkan semua item menu di sidebar
    var sidebarMenuItems = document.querySelectorAll("#sidebarMenu .list-group-item");

    // Iterasi melalui setiap item menu
    sidebarMenuItems.forEach(function(item) {
        // Mendapatkan URL yang terkait dengan item menu
        var menuItemUrl = item.getAttribute("href");

        // Memeriksa apakah URL halaman saat ini cocok dengan URL item menu
        if (currentPageUrl.includes(menuItemUrl)) {
            // Menetapkan item menu sebagai aktif
            item.classList.add("active");
        } else {
            // Menghapus kelas "active" dari item menu yang tidak sesuai
            item.classList.remove("active");
        }
    });
}

// Panggil fungsi saat halaman dimuat
window.addEventListener("DOMContentLoaded", setActiveMenu);



