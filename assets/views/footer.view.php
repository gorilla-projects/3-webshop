<!-- FOOTER VIEW PHP -->
<footer class="footer">
    <?= !is_null($content) && array_key_exists('footerData', $content) ? $content['footerData'] : '' ?>
</footer>