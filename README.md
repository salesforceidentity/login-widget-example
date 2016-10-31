heroku-login-widget
====================

This simple app builds a basic PHP app running on Heroku and uses Salesforce Identity and the Login Widget project. Users have to log in to get access to data sheet.

Pre-requisites
--------------
You'll need an org that has a Community setup and active. Ideally you should have following the Salesforce External Identity Implementation Guide to set up this org.

Steps to deploy
---------------
1. Deploy [package] this package to your org. The package is an Apex classes needed by the Login Widget
2. Go to the force.com site that underlies your Community. Click on public access settings and add 'SalesforceLoginWidgetXAuthServer' as an allowed Apex Class. [Read this for more information on how to do this](https://developer.salesforce.com/blogs/developer-relations/2012/02/quick-tip-public-restful-web-services-on-force-com-sites.html)
3. Deploy this app to Heroku [![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy?template=https://github.com/salesforceidentity/login-widget-example)
4. Create a Connected App
	* Set Callback to HEROKUAPP/_callback.html
	* Copy Key 
5. Set the Heroku config var "SALESFORCE_CLIENT_ID" to your Connected App's key   



[package]: <https://login.salesforce.com/packaging/installPackage.apexp?p0=04tj0000001iMnR>
