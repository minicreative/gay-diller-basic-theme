# Gay Diller Basic Theme
Child theme designed for Gay Diller

## Fundamental Setup

### Using terminal
1. Clone the repository
2. Run `./setup-theme.sh`

### Manual setup
Move `starter-files/front-page.php` into the main directory  
Move `starter-files/functions.php` into the main directory  
Move `starter-files/main.scss` into the scss directory  
Move `starter-files/head.php` into a *new directory* called site-includes  
Feel free to delete `setup-theme.sh` and `starter-files`

## Required Plugins
An error will occur if the following plugins are not activated before this theme is:  
1. Advanced Custom Fields PRO

## Content Setup

### Basics
1. The site should display a static homepage. Set this up using Appearance > Customize > Homepage Settings > Your homepage displays: a static page. The Homepage should then be set to a page called Home.
2. The site must include a menu. Set this up using Appearance > Customize > Menus. Create a new menu with a name like Header Navigation or something similar, and under Menu Location, check Header Menu. You can add links in the next step.
3. The theme includes contact information which can be set under Appearance > Customize > Contact & Social. These can be accessed in any content area using the following shortcodes: `[address-line-1]`, `[address-line-2]`, `[phone]`, `[email]`, `[fax]`, `[social-networks]`, and `[google-map]`. Note: when using Google Maps embed codes, please use the iframe code for the Google Maps page which you can find by finding the address on Google Maps, clicking Share, and then clicking Embed a Map. The `width` and `height` properties should be set to `100%`.
4. Google Analytics can be set up by pasting a property ID under Appearance > Customizer > Analytics.

### Graphics

You can add the following graphics by navigating to Apperance > Customize > Graphics.
1. Logo: displayed in the header.
2. Alternate Logo: displayed anywhere using the `[alternate-logo]` shortcode.
3. Page Header Background: displayed behind the default page header include.
4. Contact Section Background: displayed behind the default contact section include.

### Contact Section and Footer

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

**Setting up the footer:**
1. The footer displays widgets which can be set up under Appearance > Widgets > Footer.
