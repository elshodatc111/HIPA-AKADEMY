INSERT INTO `users` (`id`, `filial_id`, `name`, `phone`, `phone2`, `addres`, `tkun`, `type`, `status`, `about`, `smm`, `balans`, `email`, `email_verified_at`, `password`, `remember_token`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, '1', 'Elshod Musurmonov', '90 883 0450', '94 520 4004', 'Qarshi shahar', '1997-01-01', 'SuperAdmin', 'true', 'Create Register', 'Create Register', 0, 'elshodatc1116', NULL, '$2y$12$IRgL3E0ToJnINd456QFb5umByMM5fdtBsky7g0Tj1l2XrVH.//L/C', 'symPYhOIL28zSvmQAeuw5KynF63we6QPdcO4ro4TS5m3yJgCnHJacIylKAo9', 1, '2024-04-04 16:54:18', '2024-04-05 17:29:58');

INSERT INTO `settings` (`id`, `EndData`, `Username`, `Status`, `Summa`, `created_at`, `updated_at`) VALUES
(1, '2024-04-30', 'elshodatc1116', 'true', 15000, '2024-04-24 02:32:24', '2024-04-24 03:32:07');

INSERT INTO `sms_counters` (`id`, `maxsms`, `counte`, `created_at`, `updated_at`) VALUES
(1, 0, 0, '2024-04-25 19:41:28', '2024-04-26 22:13:50');