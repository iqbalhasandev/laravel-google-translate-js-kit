function googleTranslateElementInit() {
  new google.translate.TranslateElement(
    {
      pageLanguage: "en",
      includedLanguages: "en,bn,hi,ar,es,zh-TW",
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
    },
    "google_translate_element"
  );

  //
  var icon = document.createElement("i");
  icon.classList.add("mdi");
  icon.classList.add("mdi-google-translate");
  icon.classList.add("gTranslate");
  document.getElementById(":0.targetLanguage").appendChild(icon);
}
