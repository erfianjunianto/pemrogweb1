
    // 1. SELEKSI ELEMEN (DOM Selection)
    const btn = document.querySelector("#theme-btn");
    const body = document.querySelector("#app-body");
    const statusText = document.querySelector("#status-text");

    // 2. FUNGSI UNTUK UPDATE TAMPILAN
    // Fungsi ini mengubah teks judul dan teks tombol berdasarkan kondisi mode
    const updateUI = (isDark) => {
        if (isDark) {
            statusText.innerText = "Mode Gelap Aktif";
            btn.innerText = "Ubah ke Mode Terang";
            btn.style.backgroundColor = "#e53e3e"; // Ubah tombol jadi merah saat mode gelap
        } else {
            statusText.innerText = "Mode Terang Aktif";
            btn.innerText = "Ubah ke Mode Gelap";
            btn.style.backgroundColor = "#3182ce"; // Balikkan ke biru
        }
    }

    // 3. MENANGANI CLICK EVENT
    btn.addEventListener("click", () => {
        // Togle class 'dark-mode' pada body
        body.classList.toggle("dark-mode");

        // Cek apakah sekarang dalam kondisi dark mode atau tidak
        const isDarkNow = body.classList.contains("dark-mode");

        // 4. LOCAL STORAGE (Menyimpan pilihan user)
        // Simpan status ke dalam storage agar tidak hilang saat refresh
        localStorage.setItem("saved-theme", isDarkNow ? "dark" : "light");

        // Update UI teksnya
        updateUI(isDarkNow);
    });

    // 5. PENGECEKAN SAAT HALAMAN PERTAMA KALI DIMUAT (On Load)
    const currentTheme = localStorage.getItem("saved-theme");

    if (currentTheme === "dark") {
        body.classList.add("dark-mode"); // Aktifkan mode gelap jika data di storage adalah 'dark'
        updateUI(true);
    }

