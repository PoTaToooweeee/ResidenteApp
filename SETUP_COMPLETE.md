# ResidenteApp - Setup Complete ✅

## Installation Summary

All dependencies have been successfully installed and configured!

### What Was Installed:
- ✅ PHP 8.2.30 (with required extensions: fileinfo, zip, pdo_sqlite, sqlite3)
- ✅ Composer 2.9.2
- ✅ Node.js v22.13.1 & npm 10.9.2
- ✅ PHP dependencies (via `composer install`)
- ✅ Frontend dependencies (via `npm install`)
- ✅ Database migrations completed with seeding
- ✅ App key generated

### Current Server Status:
- **Backend:** http://127.0.0.1:8000 (Laravel dev server)
- **Frontend:** http://localhost:5173 (Vite dev server)

## How to Run the App

### Every Time You Want to Start the App:

Open **two PowerShell terminals** in the project directory (`C:\Resedente appp\ResidenteApp`):

**Terminal 1 - Backend Server:**
```powershell
$env:Path = "$env:Path;C:\Users\PC-1\AppData\Local\Microsoft\WinGet\Packages\PHP.PHP.8.2_Microsoft.Winget.Source_8wekyb3d8bbwe"
php artisan serve
```

**Terminal 2 - Frontend Assets:**
```powershell
npm run dev
```

Then open your browser and go to: **http://127.0.0.1:8000**

## Important Notes

### Database Configuration
- Using **SQLite** (no MySQL/XAMPP needed for now)
- Database file: `database/database.sqlite`
- To switch to MySQL later, edit `.env` and uncomment the MySQL settings

### Environment File
- `.env` file has been created and configured
- App key generated: ✅
- To modify settings (DB, mail, etc.), edit the `.env` file

### Common Commands

```powershell
# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Run migrations
php artisan migrate

# Reset database and re-seed
php artisan migrate:fresh --seed

# Build frontend for production
npm run build
```

## Troubleshooting

### If "php" is not recognized:
Run this in your PowerShell before any `php` command:
```powershell
$env:Path = "$env:Path;C:\Users\PC-1\AppData\Local\Microsoft\WinGet\Packages\PHP.PHP.8.2_Microsoft.Winget.Source_8wekyb3d8bbwe"
```

### If you need to add Composer to PATH:
```powershell
$env:Path = "$env:Path;C:\Users\PC-1\AppData\Local\ComposerSetup\bin"
```

## Next Steps

1. Visit http://127.0.0.1:8000 in your browser
2. Explore the application features
3. Check the database structure in `database/migrations/`
4. Customize your app settings in `.env`

---

**Setup completed on:** December 19, 2025
