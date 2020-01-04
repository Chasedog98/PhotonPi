# PhotonPi
-------------------
This is an Alph version of PhotonPi please use at your own risk
-------------------
PhotonPi is a web server for the Anycubic Photon using a Raspberry Pi Zero W. It uses the Photon USB port and UART1 port to create a user friendly interface for communication and file upload. The usd port is used for network based USB stick and to power the Pi. The serial port is used to exacute Gcode to start, stop, pause a print, and more. This web server also has the Pi camera enabled to watch the print to make sure it has not failed. 
__________________________
Flashing Image onto Pi
----------------------------
Requirements: Minimum 8GB SD card if using network based USB drive. 4GB SD card for web server interface. Raspberry Pi Zero W(not tested with other Pi's currently) 
SetUp:
1. Format SD card as a Fat32
2. Download the Latest Version of PhotonPi and use Etcher or Win32 to put the image on the SD card.
3. After image is created create a file called wpa_supplicant.conf on the root of the SD card with the following from:* [wpa_supplicant.md](wpa_supplicant.md)
  Fill out the Country, ssid, and psk(password) for connecting to WiFi. Save the file.
4. Eject SD card, insert it into the Pi, and boot up the Pi using the USB port connected to a computer. Booting can take a few minutes and will connect and disconnect to the computer a few times,this is the network based USB drive from the pi.

5. Under network connection in file explorer you should see a computer named PhotonPi, this is the place where you fill upload files to. Create a test file and make sure it can be seen on the network USB drive, this might take a few seconds and it should disconnect/ reconnect to the computer.

6. Check the website by going to photonpi.local/ in Chrome. you should see the following:

This is a shareable camera feed for others to view.

7. Go to photonpi.local/home.html. This is the user interface of PhotonPi, take a look around. These pages are user changable through HTML, Java, and PHP.
Connecting to the Photon:

1. Solder a 3/4pin header to UART1 located near the USB port on the board. Solder a 3 pin header to the the pi as shown below. 
2. Connect GND to GND, Rx to Tx, and Tx to Rx
3. Test connections by booting up Photon with the Pi connected and see if you can send Gcode to the machine, start with Home first.

