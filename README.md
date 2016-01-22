# magento_import
import script for magento


This is an import script to go from sextoyclub.com to magento.  This script will download the product list and image packs from the distributor sextoyclub.com/ After you choose they category you wish to import into your magento store it will import all items and images into a temporary database. From that temporary database you can do a csv export and use magentos built in import script to import the products.

To use this script do an export of your magento store from the magento admin panel.  Then create a new database or table using the csv from magento to make sure you get your columns setup correctly.  Once that is complete run the download.php, uncommenting the areas needed. After download.php is done you can export your temporary table to a csv file and run the import through magento admin panel.  After that you can run the rest of the scripts on a cronjob that will check directly with the magento database.

connect.php - database connection config

download.php - is the meat of the script

in_stock_update.php - Can be setup on Cronjob but update time limited by sextoyclub.com. Will download and double check instock items to your magento database

oos_check.php - Same as in_stock.php but to check for items that are out of stock

map_check.php - This will download the Minimum Price Advertised csv from sextoyclub.com and make sure your products are priced correctly



Dont forget to update your DB connection string
Set the category you wish to work with and import
Read the notes in the script



!!!!Disclaimer!!!
This script has not been worked on in a while. If it does not work I'm sorry I cannot support it. Though there probably has been much changes on the distributors end so it might work with a little editing. This script will not make product configurations either.  Example: If you have 1 outfit in 2 different colors it will make 2 products. It will not make 1 product with 2 options.  If it is helpful to some then that is awesome!
