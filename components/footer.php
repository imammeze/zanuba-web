<footer>
    <div class="container">
        <div class="d-flex">
            <div class="logo-footer">
                <img width="200" src="assets/img/logo.png" alt="Logo" />
                <p class="fw-medium">
                    Zanuba Cathering & Snack Jl.Bougenvile No. 4 Grendeng, Kec.
                    Purwokerto Utara, Kab. Banyumas, Jawa Tengah 53122
                </p>
            </div>
            <div class="footer-menu">
                <div>
                    <p class="fw-bold"><span>Kenal Lebih Dekat</span></p>
                    <p><a href="#about">Tentang Kami</a></p>
                </div>
                <div>
                    <p class="fw-bold"><span>Produk Kami</span></p>
                    <p>Nasi Box</p>
                    <p>Snack Box</p>
                    <p>Snack Hajatan</p>
                </div>
                <div>
                    <p class="fw-bold"><span>Ikuti Kami</span></p>
                    <div class="d-flex align-content-center gap-1">
                        <img width="24" height="24" src="assets/img/Instagram.png" alt="" />
                        <p>
                            <a href="https://www.instagram.com/zanubasnack_/">@zanubasnack_</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <p class="text-center mb-0 pb-2">
            © 2024, Zanuba Cathering & Snack | All Right Reserved
        </p>
    </div>
</footer>

<script>
const nav = document.querySelector(".navbar");
window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
        nav.classList.add("navbar-scrolled");
    } else {
        nav.classList.remove("navbar-scrolled");
    }
});
</script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>