@echo off
title PHPWrapper Launcher
set PORT=6596
echo:
echo Welcome to the PHPWrapper launcher.
echo:
echo Would you like to host this on a different port?
echo:
echo If so, enter in your desired port number.
echo Otherwise, press Enter.
echo:
set /p PORT= Port: 
echo Running php.exe...
PING -n 3 127.0.0.1>nul
echo:
cd phpwrapper
start "\ungoogled-chromium\chromium.exe" "http://localhost:%PORT%/videos/browse.php"
call ..\php\php.exe -S localhost:%PORT%
