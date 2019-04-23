# Gay Diller Basic Theme
Child theme designed for Gay Diller

## Preparing theme for installation

### Manual setup
Move `starter-files/front-page.php` into the main directory  
Move `starter-files/functions.php` into the main directory  
Move `starter-files/main.scss` into the scss directory  
Move `starter-files/head.php` into a *new directory* called site-includes  
Feel free to delete `setup-theme.sh` and `starter-files`

### Or, use terminal
1. Clone the repository
2. Run `./setup-theme.sh`

## Required WordPress Plugins
An error will occur if the following plugins are not activated before this theme is:  
1. Advanced Custom Fields PRO

## Basic Content Setup

### Basics
1. The site should display a static homepage. Set this up using Appearance > Customize > Homepage Settings > Your homepage displays: a static page. The Homepage should then be set to a page called Home.
2. The site must include a menu. Set this up using Appearance > Customize > Menus. Create a new menu with a name like Header Navigation or something similar, and under Menu Location, check Header Menu. You can add links in the next step.
3. The theme includes contact information which can be set under Appearance > Customize > Contact & Social. These can be accessed in any content area using the following shortcodes: `[address-line-1]`, `[address-line-2]`, `[phone]`, `[email]`, `[fax]`, `[social-networks]`, and `[google-map]`. Note: when using Google Maps embed codes, please use the iframe code for the Google Maps page which you can find by finding the address on Google Maps, clicking Share, and then clicking Embed a Map. The `width` and `height` properties should be set to `100%`.
4. Google Analytics can be set up by pasting a property ID under Appearance > Customizer > Analytics.
5. Set the permalink style, under Settings > Permalinks, to "Post Name"

### Basic Graphics

You can add the following graphics by navigating to Appearance > Customize > Graphics.
1. Logo: displayed in the header.
2. Alternate Logo: displayed anywhere using the `[alternate-logo]` shortcode.

## Theme Plugins

### Page Header Background

**Activate the page header background:**
Make sure `include("theme-includes/contact-section-setup.php");` is added to the Plugin Includes section at the top of the functions file.

**Adding a page header background:**
Upload a graphic to Appearance > Customize > Graphics.

### Contact Section

**Activate the contact section:**
1. Make sure `include("theme-includes/contact-section-setup.php");` is added to the Plugin Includes section at the top of the functions file.
2. Make sure `include("theme-includes/contact-section.php");` is added to the `print_site_footer()` section.

**Setting up the contact section:**
1. Make sure Contact Form 7 is installed and activated.
2. Setup a contact form using the following template:  
```
<div class="columns">
<div class="column half"> <label>First Name*</label> [text* first-name] </div>
<div class="column half"> <label>Last Name*</label> [text* last-name] </div>
<div class="column half"> <label>Email*</label> [email* email] </div>
<div class="column half"> <label>Phone*</label> [tel* tel] </div>
<div class="column full"> <label>Message</label> [textarea message] </div>
</div>
[submit "Send"]
```
3. Under the Mail tab, set the To field to the client's email, and the from email (in brackets) to an email matching the domain of the website. Replace "your-subject" with the words "Website Contact". Additional Headers should include `Reply-To: [email]`. The message body should use the following template:
```
From: [first-name] [last-name] <[email]>
Phone: [tel]

Message Body:
[message]
```
4. Once the form is saved, copy the shortcode.
5. Under Appearance > Widgets > Main Contact Section, remove any existing widgets, and add a new text widget. Widget titles are hidden to make formatting easier. Using the "Text" tab, include the form column title in `<h2>` brackets. On the next line, paste the shortcode from the previous setup.
6. Under Appearance > Widgets > Side Contact Section, add a new text widget. Enter the content from the theme. CSS can be added to make this look appropriate. If necessary, use the Custom HTML widget.

### Footer

**Activate the footer:**
1. Make sure `include("theme-includes/footer-setup.php");` is added to the Plugin Includes section at the top of the functions file.
2. Make sure `include("theme-includes/footer.php");` is added to the `print_site_footer()` section.

**Setting up the footer:**
1. The footer displays widgets which can be set up under Appearance > Widgets > Footer.

### Front Page Content

Front page content is usually two columns divided by a border.  

**Activating front page content**
1. Include `<?php include("theme-includes/front-page-content.php"); ?>` in the desired position in `front-page.php`.

**Setting up front page content**  
Add a two-column section in Gutenberg, and then fill in the content using headers (H2 or lower), buttons, shortcodes or other plugins.

### Front Page Buttons

**Activating front page buttons:**
1. Include `<?php include("theme-includes/front-page-buttons.php"); ?>` in the desired position in `front-page.php`.
2. In the WordPress admin, find Custom Fields > Tools (from the hover menu) > Import Field Groups. Upload the file from this theme folder - `fieldgroups/front-page-buttons-fields.json`

### Front Page Gallery Slider

The front page gallery slider features a background image. Each slide is a centered photo gallery with bordered images.  

**Activating the front page gallery slider:**
1. Include `<?php include("theme-includes/front-page-gallery-slider.php"); ?>` in the desired position in `front-page.php`.
2. In the WordPress admin, find Custom Fields > Tools (from the hover menu) > Import Field Groups. Upload the file from this theme folder - `fieldgroups/front-page-gallery-slider-fields.json`

### Front Page Full Slider

The front page full slider features sliders with a unique background image and centered titles & subtitles.

**Activating the front page gallery slider:**
1. Include `<?php include("theme-includes/front-page-full-slider.php"); ?>` in the desired position in `front-page.php`.
2. In the WordPress admin, find Custom Fields > Tools (from the hover menu) > Import Field Groups. Upload the file from this theme folder - `fieldgroups/front-page-full-slider-fields.json`

### Portfolio Post Type

**Activating the portfolio field type:**
1. Make sure `include("theme-includes/portfolio-custom-post-type-setup.php");` is added to the Plugin Includes section at the top of the functions file.
2. In the WordPress admin, find Custom Fields > Tools (from the hover menu) > Import Field Groups. Upload the file from this theme folder - `fieldgroups/portfolio-fields.json`

**Adding projects**
After the field type is activated, you can find Portfolio included on the WordPress admin sidebar. Make sure to add a featured image if this is a part of the theme you're building.

**Displaying recent projects**
Include the following code (add other buttons or text if necessary):
```
<div class="content portfolio">
	<div class="container">
		<?php display_portfolio_items('third', 3); ?>
	</div>
</div>
```
The first parameter of the function should be the size of the columns (half, third, fourth), and the second parameter should be the number of posts to display.

**Displaying a projects page**
1. Create a page in WordPress with any title, but make sure the page slug or permalink is set to "portfolio"
2. Create a file in the top level of the theme called `page-portfolio.php`
3. This page should include the following:
```
<?php get_header(); ?>
<div class="content portfolio">
	<div class="container">
		<?php display_portfolio_items('half'); ?>
	</div>
</div>
<?php get_footer(); ?>
```
The first parameter of the function should be the size of the columns (half, third, fourth). Only include one parameter to display all items.