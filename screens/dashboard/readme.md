This Dashboard requires Internet to be able to connect to the Category5 API. Plus, it uses some web assets like fonts.

A web server is not needed: Just run it by opening index.html in a browser.

Functional Items:
- Category5 API will show whether we are currently on/off the air.
- Clock uses system clock and displays hours, minutes and seconds.
- Countdown to top of next minute.
- Spectrum analyzer will show ambient noise if you have a mic connected (and are using a browser that supports it).

The rest is all just eye candy at this point.

While it's supposed to be supported in major browsers, I had better success with getUserMedia in Chromium-based browsers. Firefox didn't work at all for the spectrum analyzer.
https://caniuse.com/#feat=stream


Would like to add webcam:
https://github.com/SamFleming/userCam
