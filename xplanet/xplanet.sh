#!/bin/sh

# TERRE
<<<<<<< HEAD
xplanet -conf /var/www/html/station/xplanet/xplanet.conf -output /var/www/html/station/xplanet/img/xplanet_earth.png -wait 120 -body earth -latitude 40 -longitude 10 -geometry 500x500 &

# LUNE
xplanet -conf /var/www/html/station/xplanet/xplanet.conf -output /var/www/html/station/xplanet/img/xplanet_moon.png -wait 600 -body moon -geometry 250x250 &
=======
xplanet -conf /var/www/html/station/xplanet/xplanet.conf -output /var/www/html/station/xplanet/img/xplanet_earth.png -wait 120 -body earth -latitude 40 -longitude 10 -geometry 147x147 &

# LUNE
xplanet -conf /var/www/html/station/xplanet/xplanet.conf -output /var/www/html/station/xplanet/img/xplanet_moon.png -wait 600 -body moon -geometry 104x104 &
>>>>>>> 246feac1f0aa25bdabce5e0d743a34dbf4b543fd
