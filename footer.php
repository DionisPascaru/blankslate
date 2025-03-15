</main>
</div>
<footer id="footer" role="contentinfo" class="rm-footer">
    <div class="container">
        <div>
            <div class="rm-footer-logo">
                <div id="lottieRealmenFooter" class="rm-footer-animation"></div>
            </div>
            <div class="rm-footer-media">
                <div class="rm-footer-media-item">
                    <a href="https://www.facebook.com/realmen.md"><i class="icon-facebook"></i></a>
                </div>
                <div class="rm-footer-media-item">
                    <a href="https://www.instagram.com/realmen.md/"><i class="icon-instagram"></i></a>
                </div>
                <div class="rm-footer-media-item">
                    <a href="https://www.tiktok.com/@realmen.md"><i class="icon-tick-tock"></i></a>
                </div>
            </div>
        </div>
        <div id="copyright" class="rm-copyright">
            &copy; 2025 Designed by <strong>REABOV STUDIO</strong>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            lottie.loadAnimation({
                container: document.getElementById('lottieRealmenFooter'),
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: '<?php echo get_template_directory_uri(); ?>/js/lottie/realmen.json'
            });
        })
    </script>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>