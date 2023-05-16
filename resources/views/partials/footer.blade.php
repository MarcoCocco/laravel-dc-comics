<footer>
    <div class="footer-container">
        <div class="footer-up container">
            <div class="footer-links">
                @foreach ($footerColumns as $item)
                    <strong>{{ $item['title'] }}</strong>
                    <ul>
                        @foreach ($item['links'] as $link)
                            <li>{{ $link }}</li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
    <div class="footer-down container">

        <button class="btn"><strong>SIGN-UP NOW!</strong></button>

        <div class="socials">
            <h3>FOLLOW US</h3>
            <ul>
                @foreach ($socials as $social)
                <li>
                    <img src="{{ Vite::asset($social) }}" alt="">
                </li>
                @endforeach
            </ul>
        </div>

    </div>
</footer>
