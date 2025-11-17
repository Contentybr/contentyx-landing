# Contentyx Landing Page - WordPress Theme

Modern one-page landing page theme for the Contentyx SaaS platform.

## 📁 Theme Structure

```
contentyx/
├── style.css              # Main stylesheet with WordPress header
├── functions.php          # Theme functions and enqueue
├── index.php              # Fallback template
├── front-page.php         # Landing page template (auto-loads on homepage)
├── header.php             # Header template
├── footer.php             # Footer template
├── screenshot.txt         # Screenshot placeholder info
├── README.md              # This file
└── assets/
    ├── css/
    │   └── custom.css     # Additional custom styles
    ├── js/
    │   └── main.js        # JavaScript functionality
    └── images/
        └── logo.png       # Contentyx logo
```

## 🚀 Installation

### Method 1: Upload ZIP

1. Compress the `contentyx` folder into `contentyx.zip`
2. In WordPress admin, go to **Appearance → Themes**
3. Click **Add New → Upload Theme**
4. Choose `contentyx.zip` and click **Install Now**
5. Click **Activate**

### Method 2: FTP Upload

1. Upload the `contentyx` folder to `/wp-content/themes/`
2. In WordPress admin, go to **Appearance → Themes**
3. Find "Contentyx Landing Page" and click **Activate**

## ⚙️ Setup

### 1. Set Homepage

The theme automatically displays the landing page on the front page. No additional configuration needed!

If you want to manually set it:
1. Go to **Settings → Reading**
2. Select **"A static page"**
3. Choose any page as **Homepage**
4. The landing page will display automatically

### 2. Upload Logo (Optional)

1. Go to **Appearance → Customize → Site Identity**
2. Click **Select Logo**
3. Upload your logo image
4. Adjust size if needed
5. Click **Publish**

### 3. Customize Settings

Go to **Appearance → Customize → Contentyx Settings**:

- **CTA Button Text**: Change the call-to-action button text (default: "Começar Teste Gratuito")
- **CTA Button URL**: Set where the button links to (default: #pricing)
- **Form Submission Email**: Email address to receive form submissions

### 4. Configure Footer (Optional)

Go to **Appearance → Widgets**:

- **Footer Column 1**: Add widgets for the first footer column
- **Footer Column 2**: Add widgets for the second footer column
- **Footer Column 3**: Add widgets for the third footer column

If no widgets are added, default links will be displayed.

## 📋 Features

✅ **One-Page Design**: Complete landing page with all sections
✅ **Fully Responsive**: Mobile-first design
✅ **Dark Theme**: Modern dark design with vibrant gradients
✅ **Form Handling**: Built-in AJAX form submission
✅ **Smooth Scrolling**: Smooth anchor link navigation
✅ **Scroll Animations**: Fade-in animations on scroll
✅ **Customizer Integration**: Easy customization via WordPress Customizer
✅ **Widget Areas**: 3 footer widget areas
✅ **Performance Optimized**: Minimal, clean code
✅ **SEO Friendly**: Semantic HTML5 markup
✅ **Accessibility Ready**: WCAG compliant

## 🎨 Customization

### Colors

Edit `style.css` to change the color scheme:

```css
:root {
  --brand-blue-neon: #00A8FF;
  --brand-orange-neon: #FF8A00;
  /* ... other colors */
}
```

### Content

Edit `front-page.php` to modify the landing page content:

- Hero section text
- Problem cards
- Benefit cards
- Features
- Pricing
- And more...

### Styles

Add custom CSS in **Appearance → Customize → Additional CSS** or edit `assets/css/custom.css`

### JavaScript

Edit `assets/js/main.js` to add custom functionality

## 📧 Form Integration

The theme includes a built-in contact form that sends submissions via email.

### Email Setup

1. Go to **Appearance → Customize → Contentyx Settings**
2. Set **Form Submission Email** to your email address
3. Test the form to ensure emails are being delivered

### Third-Party Integration

To integrate with services like Mailchimp, ConvertKit, or Zapier:

1. Edit `functions.php`
2. Find the `contentyx_handle_form_submission()` function
3. Add your API integration code

Example for webhook:

```php
// Add this to contentyx_handle_form_submission()
$webhook_url = 'https://hooks.zapier.com/your-webhook-url';

wp_remote_post($webhook_url, array(
    'body' => json_encode(array('email' => $email))
));
```

## 🔧 Troubleshooting

### Form Not Sending Emails

1. Check that your WordPress site can send emails (test with a plugin like WP Mail SMTP)
2. Verify the email address in **Customizer → Contentyx Settings**
3. Check your spam folder
4. Consider using an SMTP plugin for better email delivery

### Styles Not Loading

1. Clear browser cache (Ctrl + Shift + R)
2. Clear WordPress cache if using a caching plugin
3. Check file permissions on the theme folder
4. Verify files are in the correct location

### Logo Not Displaying

1. Upload logo via **Appearance → Customize → Site Identity**
2. Or place a logo file at `assets/images/logo.png`
3. Clear cache and reload

## 📱 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 📄 License

GNU General Public License v2 or later
http://www.gnu.org/licenses/gpl-2.0.html

## 🆘 Support

For issues or questions:
- GitHub: https://github.com/Contentybr/contentyx-landing
- Create an issue with detailed information

## 📝 Changelog

### Version 2.0.0
- Complete rewrite as one-page WordPress theme
- Improved file structure
- Better enqueue system
- AJAX form handling
- Customizer integration
- Widget areas
- Performance optimizations

---

**Made with 💙 for Contentyx**
