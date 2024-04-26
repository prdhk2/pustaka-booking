// Toggler button action
function toggleSidebar() {
    var sidebar = document.getElementById("sidebarMenu");
    var isOpen = sidebar.style.left === "0px";

    // Mengambil elemen body
    var body = document.querySelector('body');

    // Jika sidebar sedang terbuka, tutup
    if (isOpen) {
        sidebar.style.left = "-250px";
        body.classList.remove('sidebar-active');
    } else { // Jika sidebar sedang tertutup, buka
        sidebar.style.left = "0";
        body.classList.add('sidebar-active');
    }
}

// Panggil fungsi toggleSidebar saat tombol sidebarToggle diklik
document.getElementById("sidebarToggle").addEventListener("click", toggleSidebar);

// Sidebar active menu
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

// Panggil fungsi setActiveMenu saat halaman dimuat
window.addEventListener("DOMContentLoaded", setActiveMenu);

// Tambahkan event listener untuk klik pada elemen body
document.body.addEventListener('click', function(event) {
    var sidebar = document.getElementById('sidebarMenu');
    var body = document.querySelector('body');

    // Periksa apakah yang diklik berada di luar area sidebar
    if (!sidebar.contains(event.target)) {
        var isOpen = sidebar.style.left === "0px";
        if (isOpen) {
            sidebar.style.left = "-250px";
            body.classList.remove('sidebar-active');
        }
    }
});
