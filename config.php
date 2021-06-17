<?php
// Subscription plans 
// Minimum amount is $0.50 US 
// Interval day, week, month or year 
$plans = array( 
    '1' => array( 
        'name' => 'Weekly Subscription', 
        'price' => 25, 
        'interval' => 'week' 
    ), 
    '2' => array( 
        'name' => 'Monthly Subscription', 
        'price' => 85, 
        'interval' => 'month' 
    ), 
    '3' => array( 
        'name' => 'Yearly Subscription', 
        'price' => 950, 
        'interval' => 'year' 
    ) 
); 
$currency = "INR";  
 
/* Stripe API configuration 
 * Remember to switch to your live publishable and secret key in production! 
 * See your keys here: https://dashboard.stripe.com/account/apikeys 
 */ 
define('STRIPE_API_KEY', 'sk_test_51InNgKSEqyWOgFIVmGGIjC8fep80ahSYziYa1MrCj4q5bicvNELxUfISjhJLNvRynjjJDpypq84rRH5fndFHoHa700jZFeyQWI'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51InNgKSEqyWOgFIVy6lzTGSliBiCQBFR9oetgsLaWbNGSNBo2YB3VCbYcd0Ae2jG8cxcXKGNZQsBkHSDUjKAtfgx00SlFSXLKm'); 
  
// Database configuration  
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'stripe_subscription');

require_once('vendor/autoload.php');
?>