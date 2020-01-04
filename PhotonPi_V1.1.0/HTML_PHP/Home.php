<?php
        //Set baud rate
        system("stty -F /dev/ttyS0 115200");
        //Packet to be sent
        echo system("echo \"G28 Z\" > /dev/ttyS0 ");
?>


