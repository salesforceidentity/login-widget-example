<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="salesforce-community" content="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>">
	<meta name="salesforce-mode" content="<?php echo getenv('SALESFORCE_MODE');?>-callback">
	<meta name="salesforce-save-access-token" content="<?php echo getenv('SALESFORCE_SAVE_ACCESS_TOKEN');?>">
	<meta name="salesforce-allowed-domains" content="<?php echo getenv('SALESFORCE_ALLOWED_DOMAINS');?>">
	<script src="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?><?php echo getenv('SALESFORCE_JAVASCRIPT_SERVLET');?>" async defer></script>
</head> 
<body></body>    
</html>