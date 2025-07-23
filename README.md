# ChachuKiBiryani - Restaurant Website

A modern, responsive restaurant website built with PHP and MySQL, featuring online ordering, table reservations, and admin panel functionality.

## Features

- **Responsive Design**: Mobile-friendly interface that works on all devices
- **Dynamic Menu**: Menu items loaded from database with categories and filtering
- **Shopping Cart**: Session-based cart functionality with AJAX updates
- **Online Ordering**: Complete checkout process with order management
- **Table Reservations**: Online booking system for dine-in customers
- **Admin Panel**: Manage orders, menu items, and view statistics
- **Database Integration**: Full MySQL database integration with Hostinger
- **Security**: Input validation, SQL injection prevention, and XSS protection

## File Structure

```
ChachuKiBiryani/
├── includes/                 # Reusable PHP includes
│   ├── header.php           # Common header with navigation
│   ├── footer.php           # Common footer with scripts
│   └── db_connect.php       # Database connection and helper functions
├── database/                # Database configuration and functions
│   ├── config.php           # Database configuration
│   ├── database_functions.php # Database helper functions
│   ├── menu_items.sql       # Menu items table structure
│   ├── orders_tables.sql    # Orders and related tables
│   └── hostinger_setup.sql  # Complete database setup
├── ajax/                    # AJAX handlers
│   └── add_to_cart.php      # Cart functionality
├── admin/                   # Admin panel
│   ├── index.php           # Admin dashboard
│   └── logout.php          # Admin logout
├── css/                     # Stylesheets
├── js/                      # JavaScript files
├── images/                  # Image assets
├── index.php               # Homepage
├── menu.php                # Menu page
├── about.php               # About page
├── book.php                # Table reservation
├── cart.php                # Shopping cart
├── checkout.php            # Checkout process
├── order-confirmation.php  # Order confirmation
└── README.md               # This file
```

## Setup Instructions

### 1. Database Setup

1. **Create Database**: Create a new MySQL database on your hosting provider
2. **Import Tables**: Import the SQL files from the `database/` folder:
   - `hostinger_setup.sql` (complete setup)
   - `menu_items.sql` (menu items table)
   - `orders_tables.sql` (orders and related tables)

### 2. Database Configuration

1. **Edit Configuration**: Update `database/config.php` with your database credentials:
   ```php
   // For Hostinger
   define('DB_HOST', 'localhost');
   define('DB_USER', 'your_username');
   define('DB_PASS', 'your_password');
   define('DB_NAME', 'your_database_name');
   ```

2. **Test Connection**: Ensure the database connection works by visiting any page

### 3. File Upload

1. **Upload Files**: Upload all files to your web hosting directory
2. **Set Permissions**: Ensure PHP files have proper permissions (usually 644)
3. **Test Website**: Visit your domain to test the website

### 4. Admin Panel Setup

1. **Access Admin**: Visit `yourdomain.com/admin/`
2. **Default Password**: Use `admin123` (change this in production)
3. **Change Password**: Edit the password in `admin/index.php`

### 5. Customization

1. **Restaurant Info**: Update restaurant details in header and footer files
2. **Menu Items**: Add menu items through the database or admin panel
3. **Styling**: Customize CSS files in the `css/` folder
4. **Images**: Replace images in the `images/` folder

## Database Tables

### Menu Items Table
- `id`: Primary key
- `name`: Item name
- `description`: Item description
- `price`: Item price
- `category`: Item category
- `image_url`: Item image URL
- `is_available`: Availability status
- `is_featured`: Featured item status

### Orders Table
- `id`: Primary key
- `customer_name`: Customer name
- `customer_email`: Customer email
- `customer_phone`: Customer phone
- `delivery_address`: Delivery address
- `subtotal`: Order subtotal
- `tax`: Tax amount
- `delivery_fee`: Delivery fee
- `total`: Total amount
- `status`: Order status
- `created_at`: Order creation date

### Order Items Table
- `id`: Primary key
- `order_id`: Foreign key to orders
- `menu_item_id`: Foreign key to menu items
- `item_name`: Item name
- `quantity`: Item quantity
- `price`: Item price

## Features in Detail

### Shopping Cart
- Session-based cart storage
- AJAX add to cart functionality
- Quantity updates
- Cart persistence across pages

### Order Management
- Complete checkout process
- Order confirmation emails
- Admin order management
- Order status tracking

### Table Reservations
- Online booking form
- Date and time selection
- Special requests
- Booking confirmation

### Admin Panel
- Order management
- Menu item management
- Sales statistics
- Customer information

## Security Features

- **SQL Injection Prevention**: Prepared statements
- **XSS Protection**: HTML escaping
- **Input Validation**: Server-side validation
- **Session Security**: Secure session handling
- **Error Handling**: Proper error logging

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Internet Explorer 11+

## Technologies Used

- **Backend**: PHP 7.4+
- **Database**: MySQL 5.7+
- **Frontend**: HTML5, CSS3, JavaScript
- **Framework**: Bootstrap 4
- **Icons**: Font Awesome
- **Payment**: Cash on Delivery (expandable)

## Hosting Requirements

- **PHP**: 7.4 or higher
- **MySQL**: 5.7 or higher
- **Web Server**: Apache or Nginx
- **SSL**: Recommended for production

## Customization Guide

### Adding New Menu Categories
1. Add category to database
2. Update menu filtering in `menu.php`
3. Add category images if needed

### Modifying Order Process
1. Edit `checkout.php` for form fields
2. Update database schema if needed
3. Modify order confirmation email

### Styling Changes
1. Edit `css/style.css` for main styles
2. Update `css/responsive.css` for mobile
3. Modify Bootstrap classes as needed

## Support

For support and questions:
- Check the database configuration
- Verify file permissions
- Review error logs
- Test database connection

## License

This project is for educational and commercial use. Please ensure you have proper licenses for any third-party components used.

## Updates

### Version 1.0
- Initial release
- Basic restaurant website functionality
- Admin panel
- Database integration
- Responsive design

---

**Note**: This is a production-ready restaurant website. Make sure to:
- Change default admin password
- Configure proper email settings
- Set up SSL certificate
- Regular database backups
- Monitor error logs 