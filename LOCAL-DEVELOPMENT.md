# Local Development Setup with Hostinger Database

This guide will help you set up the ChachuKiBiryani website for local development using your Hostinger MySQL database.

## Prerequisites

1. **PHP 7.4 or higher** installed on your system
2. **Internet connection** (to connect to Hostinger database)
3. **Hostinger hosting plan** with MySQL database
4. **IP whitelisted** in Hostinger database settings

## Quick Setup

### Using PHP Built-in Server (Recommended)

1. **Test database connection**
   ```bash
   php test-db-connection.php
   ```

2. **Start the PHP development server**
   ```bash
   php -S localhost:8000
   ```

3. **Visit the website**
   Open your browser and go to: `http://localhost:8000`

### Using XAMPP/WAMP (Alternative)

1. **Copy files to web directory**
   - XAMPP: Copy to `C:\xampp\htdocs\chachukibiryani\`
   - WAMP: Copy to `C:\wamp\www\chachukibiryani\`

2. **Test database connection**
   ```bash
   php test-db-connection.php
   ```

3. **Start Apache service** (MySQL not needed since we're using Hostinger)

4. **Visit the website**
   Open your browser and go to: `http://localhost/chachukibiryani/`

## Database Configuration

The website is configured to always use your Hostinger database:
- **Host**: localhost (Hostinger's MySQL server)
- **Username**: u638930561_chachu_user
- **Password**: Chachu@13020
- **Database**: u638930561_chachu_db

These settings are in `database/config.php` and will work both locally and on your hosting.

## Troubleshooting

### Database Connection Error
If you see "Database connection error":
1. Run `php test-db-connection.php` to diagnose the issue
2. Check if your IP is whitelisted in Hostinger database settings
3. Verify the database credentials in `database/config.php`
4. Make sure your Hostinger hosting plan is active
5. Check if the database tables exist (import SQL files if needed)

### IP Whitelist Issues
If you get "Access denied" errors:
1. Go to your Hostinger control panel
2. Navigate to MySQL Databases
3. Find your database and click "Manage"
4. Add your current IP address to the whitelist
5. You can find your IP at: https://whatismyipaddress.com/

### Port Already in Use
If port 8000 is busy:
```bash
php -S localhost:8080  # Use different port
```

## Features Available in Local Development

- ✅ Complete website functionality
- ✅ Menu display (with sample data)
- ✅ Shopping cart (session-based)
- ✅ Table reservations
- ✅ Admin panel (password: admin123)
- ✅ Order management

## Sample Data

The setup script creates sample menu items:
- Chicken Biryani ($18.99)
- Vegetable Biryani ($16.99)
- Butter Chicken ($14.99)
- Paneer Tikka ($12.99)
- Naan Bread ($3.99)
- Mango Lassi ($4.99)

## Admin Panel

Access the admin panel at: `http://localhost:8000/admin/`
- **Username**: (none required)
- **Password**: admin123

## Production Deployment

When ready to deploy to production:
1. Update `database/config.php` with your Hostinger credentials
2. Upload all files to your hosting
3. Import the database using the SQL files in the `database/` folder
4. Change the admin password in `admin/index.php`

## Development Tips

1. **Error Logging**: Check PHP error logs for debugging
2. **Database**: Use phpMyAdmin or similar tool to manage the database
3. **File Changes**: The PHP development server will automatically reload changes
4. **Sessions**: Cart data is stored in PHP sessions

## File Structure for Local Development

```
ChachuKiBiryani/
├── index.php              # Homepage
├── menu.php               # Menu page
├── about.php              # About page
├── book.php               # Table reservations
├── cart.php               # Shopping cart
├── checkout.php           # Checkout
├── order-confirmation.php # Order confirmation
├── admin/                 # Admin panel
├── includes/              # Reusable includes
├── database/              # Database configuration
├── setup-local-db.php     # Database setup script
└── LOCAL-DEVELOPMENT.md   # This file
```

Happy coding! 🍛 