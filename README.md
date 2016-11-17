login-widget-example
====================

This simple app builds a basic PHP app running on Heroku and uses Salesforce Identity and the Login Widget project. Users have to log in to get access to data sheet.

Pre-requisites
--------------
You'll need an org that has a Community setup and active. Ideally you should have following the Salesforce External Identity Implementation Guide to set up this org or you have completed the [Identity for Customers](https://trailhead.salesforce.com/module/identity_external) Trailhead module.

Steps to deploy
---------------
1. Deploy this [package] to your org. The package is an Apex classes needed by the Login Widget
2. Go to the force.com site that underlies your Community.
	* Click on public access settings and add 'SalesforceLoginWidgetXAuthServer' as an allowed Apex Class. [Read this for more information on how to do this](https://developer.salesforce.com/blogs/developer-relations/2012/02/quick-tip-public-restful-web-services-on-force-com-sites.html)
	* Make the 'loginservice' and 'loginpage' VisualForce Pages publically accessible as well.
3. Deploy this app to Heroku [![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy?template=https://github.com/salesforceidentity/login-widget-example)
4. Create a Connected App
	* Enable OAuth
	* Select openid scope
	* Set Callback to https://HEROKUAPP_URL/_callback.php e.g. https://strong-castle-20163.herokuapp.com/_callback.php
	* Save
	* Copy the Consumer Key 
5. Set the Heroku config vars via Setting > Reveal Config Vars:
	* "SALESFORCE_CLIENT_ID" to your Connected App's Consumer key
	* "SALESFORCE_COMMUNITY_URL" to the Community's domain, no trailing slash, and _no_ https:// For example: mycommunity.force.com/community2
	* "SALESFORCE_HEROKUAPP_URL" to the Heroku app's domain, no trailing slash, and _no_ https:// For example: strong-castle-20163.herokuapp.com
	* If you installed the package in a Salesforce Org with a namespace set, you must set the "SALESFORCE_NAMESPACE" config variable
6. Open the app and enjoy!

[package]: <https://login.salesforce.com/packaging/installPackage.apexp?p0=04tj0000001iMnR>