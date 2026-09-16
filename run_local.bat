@echo off
title Abdullah Interactive Portfolio - Local PHP Server
setlocal enabledelayedexpansion

:: Determine target directory
set "TARGET_DIR=%~dp0"

:: 1. Check if index.php is in the same folder
if exist "%TARGET_DIR%index.php" goto found_dir

:: 2. Check if the project folder exists on the Desktop
if exist "%USERPROFILE%\OneDrive\Desktop\abdullah_interactive_portfolio_v3\index.php" (
    set "TARGET_DIR=%USERPROFILE%\OneDrive\Desktop\abdullah_interactive_portfolio_v3\"
    goto found_dir
)
if exist "%USERPROFILE%\Desktop\abdullah_interactive_portfolio_v3\index.php" (
    set "TARGET_DIR=%USERPROFILE%\Desktop\abdullah_interactive_portfolio_v3\"
    goto found_dir
)

:: 3. If running inside a zip or temp folder, auto-extract the zip on Desktop
echo ========================================================
echo  Auto-extracting portfolio files to your Desktop...
echo ========================================================

set "ZIP_PATH="
if exist "%USERPROFILE%\OneDrive\Desktop\abdullah_portfolio_final_2026.zip" (
    set "ZIP_PATH=%USERPROFILE%\OneDrive\Desktop\abdullah_portfolio_final_2026.zip"
    set "EXTRACT_DEST=%USERPROFILE%\OneDrive\Desktop\abdullah_portfolio"
) else if exist "%USERPROFILE%\Desktop\abdullah_portfolio_final_2026.zip" (
    set "ZIP_PATH=%USERPROFILE%\Desktop\abdullah_portfolio_final_2026.zip"
    set "EXTRACT_DEST=%USERPROFILE%\Desktop\abdullah_portfolio"
)

if defined ZIP_PATH (
    if not exist "!EXTRACT_DEST!" mkdir "!EXTRACT_DEST!"
    powershell -NoProfile -Command "Add-Type -AssemblyName System.IO.Compression.FileSystem; [System.IO.Compression.ZipFile]::ExtractToDirectory('!ZIP_PATH!', '!EXTRACT_DEST!')"
    if exist "!EXTRACT_DEST!\index.php" (
        set "TARGET_DIR=!EXTRACT_DEST!\"
        goto found_dir
    )
)

:: If still not found, show user instruction
echo.
echo [ERROR] Could not find the portfolio files.
echo Please right-click 'abdullah_portfolio_final_2026.zip'
echo and select 'Extract All' (استخراج الكل) to a folder first!
echo.
pause
exit /b

:found_dir
cd /d "!TARGET_DIR!"

echo ========================================================
echo  Starting local PHP server for Abdullah's Portfolio...
echo ========================================================
echo.
echo - PC browser link:
echo   http://localhost:8000
echo.
echo - PHONE / TABLET link (same Wi-Fi):
for /f "tokens=2 delims=:" %%a in ('ipconfig ^| findstr /i "IPv4" ^| findstr /v "127.0.0.1"') do (
    echo   http:%%a:8000
)
echo.
echo Press Ctrl+C to stop the server.
echo ========================================================

start http://localhost:8000

where php >nul 2>nul
if %errorlevel% equ 0 (
    php -S 0.0.0.0:8000 -t "!TARGET_DIR!"
) else (
    "%LOCALAPPDATA%\Microsoft\WinGet\Packages\PHP.PHP.8.3_Microsoft.Winget.Source_8wekyb3d8bbwe\php.exe" -S 0.0.0.0:8000 -t "!TARGET_DIR!"
)
pause



