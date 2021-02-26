/*********************************************************************************
 *
 * This is the official Unzer plugin for Opencart 3+
 * The plugin is maintained by SharksMedia A/S (https://sharksmedia.dk)
 *
 * This plugin only supports the v10+ manager.
 *
 * Limited plugin support is offered by Unzer Support.
 *
 *********************************************************************************/

1. Navigate to your OpenCart administration page.
2. On your left, click the "Extensions" -> "Installer".
3. Click the blue "Upload" button and select the module file on your computer (unzer-latest.ocmod.zip).
4. After installation click the "Extensions" -> "Extensions" -> "Payments".
5. Find the Unzer modules of your choice in the list and click the green install icon.
6. Click the blue button to edit the module.
7. Type in your merchant information and press save.
8. You are good to go.


/*********************************************************************************
 *
 * Recurring profiles (Subscriptions).
 *
 * Requirements: Cronjob support
 *
 *********************************************************************************/

The main module called "Unzer" supports recurring payment profiles. Since OpenCart does not have a built in recurring payment trigger mechanism,
it is important to setup a cronjob if the recurring payments should be captured properly. Go the "Unzer" module settings by clicking the
blue pencil button to the right.

Select the "Recurring payments" tab and copy the URL in the "Remote CRON URL" input field. It is advised that the cronjob is run at least once a day,
but once an hour is recommended.