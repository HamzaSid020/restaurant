# Hostinger Setup Guide for ChachuKiBiryani

This guide will walk you through setting up your ChachuKiBiryani project on Hostinger hosting.

## Prerequisites

- Hostinger hosting account
- Domain name (optional, you can use Hostinger's subdomain)
- FTP client (FileZilla, WinSCP, etc.) or Hostinger's File Manager

## Step 1: Access Hostinger Control Panel

1. Log in to your Hostinger account
2. Go to your hosting control panel (hPanel)
3. Navigate to the **Websites** section

## Step 2: Create Database

1. In hPanel, go to **Databases** → **MySQL Databases**
2. Click **Create Database**
3. Fill in the details:
   - **Database Name**: `chachukibiryani_db` (or your preferred name)
   - **Username**: `chachukibiryani_user` (or your preferred username)
   - **Password**: Create a strong password (save this!)
4. Click **Create**
5. Note down the database details:
   - Database name
   - Username
   - Password
   - Host (usually `localhost`)

## Step 3: Upload Project Files

### Option A: Using File Manager
1. In hPanel, go to **Files** → **File Manager**
2. Navigate to `public_html` folder
3. Upload all project files to this folder
4. Make sure the file structure is correct

### Option B: Using FTP
1. In hPanel, go to **Files** → **FTP Accounts**
2. Create an FTP account or use existing one
3. Use an FTP client to connect and upload files
4. Upload all files to the `public_html` directory

## Step 4: Configure Database Connection

1. Open `database/config.php` in the File Manager
2. Update the Hostinger database credentials:

```php
// Replace these values with your actual Hostinger database details
define('DB_HOST', 'localhost'); // Usually 'localhost' for Hostinger
define('DB_USER', 'your_hostinger_db_username'); // Your database username
define('DB_PASS', 'your_hostinger_db_password'); // Your database password
define('DB_NAME', 'your_hostinger_db_name'); // Your database name
```

3. Save the file

## Step 5: Import Database Structure

### Option A: Using phpMyAdmin
1. In hPanel, go to **Databases** → **phpMyAdmin**
2. Select your database from the left sidebar
3. Click the **Import** tab
4. Choose the file `database/hostinger_setup.sql`
5. Click **Go** to import

### Option B: Using SQL Tab
1. In phpMyAdmin, select your database
2. Click the **SQL** tab
3. Copy the contents of `database/hostinger_setup.sql`
4. Paste and click **Go**

## Step 6: Test Database Connection

1. Create a test file called `test_db.php` in your root directory:

```php
<?php
require_once 'database/config.php';

try {
    $db = Database::getInstance();
    echo "Database connection successful!<br>";
    echo "Database: " . DB_NAME . "<br>";
    echo "Host: " . DB_HOST . "<br>";
    
    // Test a simple query
    $result = $db->query("SELECT COUNT(*) as count FROM menu_items");
    $row = $result->fetch_assoc();
    echo "Menu items in database: " . $row['count'];
    
} catch (Exception $e) {
    echo "Database connection failed: " . $e->getMessage();
}
?>
```

2. Access this file via your browser: `https://yourdomain.com/test_db.php`
3. If successful, you'll see the connection details
4. **Delete this test file** after confirming it works

## Step 7: Configure Domain/Subdomain

### Option A: Using Custom Domain
1. In hPanel, go to **Domains** → **Manage**
2. Add your domain or use existing one
3. Point it to the `public_html` directory

### Option B: Using Hostinger Subdomain
1. Your site will be available at: `https://yourusername.hostingerapp.com`
2. No additional configuration needed

## Step 8: Update File Permissions

Set proper file permissions:
- Directories: `755`
- Files: `644`
- Configuration files: `600` (for security)

You can do this in File Manager by right-clicking files/folders and selecting **Permissions**.

## Step 9: Test Your Website

1. Visit your website URL
2. Test the following features:
   - Homepage loads correctly
   - Menu items display
   - Contact forms work
   - Database queries function

## Step 10: Security Configuration

### Update .htaccess (if needed)
Create or update `.htaccess` file in your root directory:

```apache
# Security headers
<IfModule mod_headers.c>
    Header always set X-Content-Type-Options nosniff
    Header always set X-Frame-Options DENY
    Header always set X-XSS-Protection "1; mode=block"
</IfModule>

# Protect configuration files
<Files "config.php">
    Order allow,deny
    Deny from all
</Files>

# Enable compression
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/plain
    AddOutputFilterByType DEFLATE text/html
    AddOutputFilterByType DEFLATE text/xml
    AddOutputFilterByType DEFLATE text/css
    AddOutputFilterByType DEFLATE application/xml
    AddOutputFilterByType DEFLATE application/xhtml+xml
    AddOutputFilterByType DEFLATE application/rss+xml
    AddOutputFilterByType DEFLATE application/javascript
    AddOutputFilterByType DEFLATE application/x-javascript
</IfModule>

# Cache static files
<IfModule mod_expires.c>
    ExpiresActive on
    ExpiresByType text/css "access plus 1 year"
    ExpiresByType application/javascript "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/gif "access plus 1 year"
</IfModule>
```

## Step 11: SSL Certificate (Recommended)

1. In hPanel, go to **SSL** → **SSL Certificates**
2. Enable SSL for your domain
3. Your site will be accessible via `https://`

## Step 12: Email Configuration (Optional)

If you want to send emails from your website:

1. In hPanel, go to **Email** → **Email Accounts**
2. Create an email account for your domain
3. Update email settings in your PHP code

## Troubleshooting

### Common Issues:

1. **Database Connection Failed**
   - Check database credentials in `config.php`
   - Verify database exists in phpMyAdmin
   - Ensure database user has proper permissions

2. **500 Internal Server Error**
   - Check file permissions
   - Review error logs in hPanel
   - Verify PHP version compatibility

3. **Images Not Loading**
   - Check file paths
   - Verify image files are uploaded
   - Check file permissions

4. **Forms Not Working**
   - Check PHP mail configuration
   - Verify form action URLs
   - Check for JavaScript errors

### Error Logs:
- Access error logs in hPanel: **Advanced** → **Error Logs**
- Check for specific error messages
- Common locations: `/error_log` or `/logs/`

### PHP Configuration:
- In hPanel, go to **Advanced** → **PHP Configuration**
- Ensure PHP version is 7.4 or higher
- Enable required extensions (mysqli, json, etc.)

## Performance Optimization

1. **Enable Caching**
   - Use Hostinger's built-in caching
   - Implement browser caching via .htaccess

2. **Optimize Images**
   - Compress images before uploading
   - Use appropriate image formats (WebP, JPEG, PNG)

3. **Minimize HTTP Requests**
   - Combine CSS and JavaScript files
   - Use CSS sprites for icons

4. **Database Optimization**
   - Use indexes on frequently queried columns
   - Optimize database queries

## Backup Strategy

1. **Regular Backups**
   - Use Hostinger's backup feature
   - Download database dumps regularly
   - Keep local copies of important files

2. **Automated Backups**
   - Set up cron jobs for database backups
   - Use Hostinger's automated backup service

## Monitoring

1. **Uptime Monitoring**
   - Use Hostinger's uptime monitoring
   - Set up email alerts for downtime

2. **Performance Monitoring**
   - Monitor page load times
   - Check database query performance
   - Review error logs regularly

## Support

If you encounter issues:
1. Check Hostinger's knowledge base
2. Contact Hostinger support
3. Review PHP and MySQL documentation
4. Check project documentation

## Final Checklist

- [ ] Database created and configured
- [ ] Files uploaded to public_html
- [ ] Database connection tested
- [ ] Website accessible via domain
- [ ] SSL certificate enabled
- [ ] File permissions set correctly
- [ ] Security measures implemented
- [ ] Performance optimizations applied
- [ ] Backup strategy in place
- [ ] Monitoring configured

Your ChachuKiBiryani website should now be live and fully functional on Hostinger! 