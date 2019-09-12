@extends('layouts.master')

@section('content')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ __('Cookies Policy') }}</h1>
                <p>{{ __('Last updated') }}: {{ __('September 11, 2019') }}</p>
                <p>{{ __('EvalDocente ("us", "we", or "our") uses cookies on the https://evaldocente.herokuapp.com website (the "Service"). By using the Service, you consent to the use of cookies.') }}</p>
                <p>{{ __('Our Cookies Policy explains what cookies are, how we use cookies, how third-parties we may partner with may use cookies on the Service, your choices regarding cookies and further information about cookies.') }}</p>
                <h2>{{ __('What are cookies?') }}</h2>
                <p>{{ __('Cookies are small pieces of text sent by your web browser by a website you visit. A cookie file is stored in your web browser and allows the Service or a third-party to recognize you and make your next visit easier and the Service more useful to you.') }}</p>
                <p>{{ __('Cookies can be "persistent" or "session" cookies. Persistent cookies remain on your personal computer or mobile device when you go offline, while session cookies are deleted as soon as you close your web browser.') }}</p>
                <h2>{{ __('How EvalDocente uses cookies') }}</h2>
                <p>{{ __('When you use and access the Service, we may place a number of cookies files in your web browser.') }}</p>
                <p>{{ __('We use cookies for the following purposes') }}:</p>
                <ul>
                    <li>
                        <p>{{ __('To enable certain functions of the Service') }}</p>
                        <p>{{ __('We use both session and persistent cookies on the Service and we use different types of cookies to run the Service') }}:</p>
                        <p>{{ __('Essential cookies. We may use essential cookies to authenticate users and prevent fraudulent use of user accounts.') }}</p>
                    </li>
                </ul>
                <h2>{{ __('What are your choices regarding cookies?') }}</h2>
                <p>{{ __("If you'd like to delete cookies or instruct your web browser to delete or refuse cookies, please visit the help pages of your web browser.") }} {{ __('As an European citizen, under GDPR, you have certain individual rights. You can learn more about these guides in the') }} <a href="https://termsfeed.com/blog/gdpr/#Individual_Rights_Under_the_GDPR">{{ __('GDPR Guide') }}</a>.
                </p>
                <p>{{ __('Please note, however, that if you delete cookies or refuse to accept them, you might not be able to use all of the features we offer, you may not be able to store your preferences, and some of our pages might not display properly.') }}</p>
                <ul>
                    <li>
                        <p>{{ __('For the Chrome web browser, please visit this page from Google') }}: <a
                                href="https://support.google.com/accounts/answer/32050">https://support.google.com/accounts/answer/32050</a>
                        </p>
                    </li>
                    <li>
                        <p>{{ __('For the Internet Explorer web browser, please visit this page from Microsoft') }}: <a
                                href="http://support.microsoft.com/kb/278835">http://support.microsoft.com/kb/278835</a>
                        </p>
                    </li>
                    <li>
                        <p>{{ __('For the Firefox web browser, please visit this page from Mozilla') }}: <a
                                href="https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored">https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored</a>
                        </p>
                    </li>
                    <li>
                        <p>{{ __('For the Safari web browser, please visit this page from Apple') }}: <a
                                href="https://support.apple.com/kb/PH21411?locale=en_US">https://support.apple.com/kb/PH21411?locale=en_US</a>
                        </p>
                    </li>
                    <li>
                        <p>{{ __("For any other web browser, please visit your web browser's official web pages.") }}</p>
                    </li>
                </ul>
                <h2>{{ __('Where can you find more information about cookies?') }}</h2>
                <p>{{ __('You can learn more about cookies and the following third-party websites') }}:</p>
                <ul>
                    <li>
                        <p>{{ __('AllAboutCookies') }}: <a
                                href="http://www.allaboutcookies.org/">http://www.allaboutcookies.org/</a></p>
                    </li>
                    <li>
                        <p>{{ __('Iniciativa de publicidad en red') }}: <a
                                href="http://www.networkadvertising.org/">http://www.networkadvertising.org/</a>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection