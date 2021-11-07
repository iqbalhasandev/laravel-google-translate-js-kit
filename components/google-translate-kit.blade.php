{{-- <span id="google_translate_element"></span> --}}
<style>
    body {
        /* position: static !important; */

        top: 0 !important;
    }

    body>div.skiptranslate {
        display: none;
    }

    .goog-te-gadget-simple {
        border: none;
        background: transparent;
    }

    .goog-te-gadget-simple span {
        display: none;
    }

    img.goog-te-gadget-icon {
        display: none
    }

    .gTranslate {
        font-size: 22px;
        vertical-align: middle;
        color: #7081b9;
    }
</style>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<script type="text/javascript">
    function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages:'en,bn,hi,ar,es,zh-TW',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');

            //
            var icon = document.createElement("i");
            icon.classList.add("mdi");
            icon.classList.add("mdi-google-translate");
            icon.classList.add("gTranslate");
           document.getElementById(":0.targetLanguage").appendChild(icon);
        }
</script>