<footer class="footer">
    <div class="container">
        <div class="row footer-content">

            <div class="col-md-5">
                <h5 class="footer-title">Rumah Sakit Sehat</h5>
                <p class="footer-text">
                    Sistem Antrian Online untuk memudahkan pasien mendapatkan layanan kesehatan dengan cepat dan efisien.
                </p>
            </div>

            <div class="col-md-3">
                <h6 class="footer-subtitle">Menu</h6>
                <ul class="footer-links">
                    <li><a href="{{ route('form-pasien.create') }}">Ambil Antrian</a></li>
                    <li><a href="#">Dokter</a></li>
                    <li><a href="#">Poli</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h6 class="footer-subtitle">Kontak</h6>
                <p class="footer-text kontak">
                    <span>📍</span> Purbalingga <br>
                    <span>📞</span> 0812-3456-7890 <br>
                    <span>✉️</span> rssehat@email.com
                </p>
            </div>

        </div>

        <div class="footer-line"></div>

        <div class="text-center footer-bottom">
            © {{ date('Y') }} Rumah Sakit Sehat - All Rights Reserved
        </div>
    </div>
</footer>