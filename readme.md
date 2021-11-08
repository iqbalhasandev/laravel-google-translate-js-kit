## About <a href="javascript:void();" target="_blank">Laravel Google Translate Js Kit</a>

Google Tranlator kit for Laravel Project.

## Doc:

<hr/>

- First copy google-translate-kit folder then paste it on public folder

- Then Link those Js and css file to your layouts/app.blade

  - For Css
    ```
    <link rel="stylesheet" href="{{ asset('google-translate-kit/google-translate.css') }}">
    ```
  - For Js

    ```
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">

    <script src="{{asset('google-translate-kit/google-translate.css')}}"></script>
    ```

    </hr>

    ## Or Use Laravel Blade Components

   - then copy components/google-translate-kit.blade and paste it on resource/views/components folder.

   - For use This Componet use add those Line to your layout file

         ```
         <x-google-translate-kit/>
         ```

- For use Google Translator add this line to your navbar or hover you want to show translate button

  ```
  <span id="google_translate_element"></span>
  ```

## <a href="https://iqbalhasan.dev" target="_blank">iqbalhasan.dev</a> Sponsors

We would like to extend our thanks to the following sponsors for funding <a href="https://iqbalhasan.dev" target="_blank">iqbalhasan.dev</a> development. If you are interested in becoming a sponsor, please email us <a href="mailto:info@iqbalhasan.dev">info@iqbalhasan.dev</a>

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to <a href="https://iqbalhasan.dev" target="_blank">IQBAL HASAN</a> via [info@iqbalhasan.dev](mailto:info@iqbalhasan.dev). All security vulnerabilities will be promptly addressed.

## License

The iqbalhasan.dev Project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
