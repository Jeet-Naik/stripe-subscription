CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `subscription_id` int(11) NOT NULL DEFAULT '0',
 `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
 `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
 `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
 `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
 `created` datetime NOT NULL,
 `modified` datetime NOT NULL,
 `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `user_subscriptions` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` int(11) NOT NULL DEFAULT '0',
 `payment_method` enum('stripe') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'stripe',
 `stripe_subscription_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `stripe_customer_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `stripe_plan_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `plan_amount` float(10,2) NOT NULL,
 `plan_amount_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `plan_interval` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `plan_interval_count` tinyint(2) NOT NULL,
 `payer_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `created` datetime NOT NULL,
 `plan_period_start` datetime NOT NULL,
 `plan_period_end` datetime NOT NULL,
 `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;